String.prototype.capitalize = function() {
    return this.replace(/(?:^|\s)\S/g, function(a) { return a.toUpperCase(); });
};

$.expr[':'].between = function(a, b, c) {
    var args = c[3].split(',');
    var val = parseInt(jQuery(a).val());
    return val >= parseInt(args[0]) && val <= parseInt(args[1]);
};

function getURLParameter(name, url) {
    return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(url)||[,""])[1].replace(/\+/g, '%20'))||null;
}

function nth(d) {
    if(d>3 && d<21) return 'th';
    switch (d % 10) {
        case 1:  return "st";
        case 2:  return "nd";
        case 3:  return "rd";
        default: return "th";
    }
}

function get_url() {
    var pathArray = window.location.href.split('/');
    return pathArray[0] + '//' + pathArray[2] + '/';
}

function get_admin_url() {
    var pathArray = window.location.href.split('/');
    return pathArray[0] + '//' + pathArray[2] + '/' + pathArray[3] + '/';
}

var time_out;
function cms_alert(type, header, content) {
    clearTimeout(time_out);
    var cms_notification_el = $('#cms_notification');
    cms_notification_el.find('.note_header').html(header);
    cms_notification_el.find('.note_content').html(content);
    cms_notification_el.attr('class', 'alert alert-'+type).show();
    time_out = setTimeout(function() {
        cms_notification_el.fadeOut(2500);
    }, 7500);
}

function selected_tab(form, selected_tab) {
    var url = $(form).attr('action').split('#')[0];

    if (!$('#navtab'+selected_tab).length) {
        selected_tab = 0;
    }

    tab = window.location.hash.substring(4);
    if (isNaN(tab) || tab == '')
        $('#navtab'+selected_tab+' a').tab('show');
    else
        $('#navtab'+tab+' a').tab('show');

    $(form).attr('action', url+$('.nav-tabs li.active a').attr('href'));
    $('.nav-tabs a').click(function () { $(form).attr('action', url+$(this).attr('href')); });
}

function initialize_sort(sort_type, success_callback, fail_callback) {
    $('.sortable').sortable({
        update: function() {
            var sortable_el = $(this);
            $.ajax({
                url: window.location.href+'/sort',
                type: 'POST',
                data: sortable_el[sort_type]("serialize"),
                success: function() {
                    if (success_callback) {
                        success_callback(sortable_el.attr('id'));
                    }
                },
                error: function() {
                    if (fail_callback) {
                        fail_callback(sortable_el.attr('id'));
                    }
                }
            });
        }
    });
}

var last_delete = {};
var log_ids = {};
function watch_for_delete(selector, item, callback_find_id, custom_url) {
    var delete_modal_el = $('#deleteModal');
    last_delete['item'] = item;
    $(selector).click(function() {
        if (callback_find_id) {
            last_delete['id'] = callback_find_id($(this));
        }
        if (last_delete['id']) {
            last_delete['name'] = $(this).data('name');
            delete_modal_el.find('.itemName').html(last_delete['name']);
            delete_modal_el.find('.itemType').html(last_delete['item']);
            delete_modal_el.find('.itemTypeC').html(last_delete['item'].capitalize());
            delete_modal_el.modal('show');
        }
    });
    if (!custom_url) {
        custom_url = window.location.href.split('#')[0]+'/delete';
    }
    delete_modal_el.find('.yes').click(function() {
        $.ajax({
            url: custom_url+'/'+last_delete['id'].replace(/\D/g,''),
            type: 'POST',
            success: function(r) {
                if (r != '0' && r != 0) {
                    log_ids = r;
                    $('#' + last_delete['id']).hide();
                    last_delete['timeout'] = setTimeout(function () {
                        $('#' + last_delete['id']).remove();
                    }, 10000);
                    cms_alert('warning', last_delete['item'].capitalize() + ' deleted', 'The ' + last_delete['item'] + ' \'' + last_delete['name'] + '\' has been deleted. <a href=\'#\' onclick=\'undo_log()\'>Undo</a>');
                } else {
                    delete_error();
                }
            },
            error: delete_error
        });
    });
}

function delete_error() {
    cms_alert('danger', 'Error deleting ' + last_delete['item'].capitalize(), 'The ' + last_delete['item'] + ' was not deleted (try refreshing the page, you may no longer be logged in)');
}

function undo_log(log_id) {
    if (log_id) {
        log_ids = [log_id];
        last_delete = {'item':'log',name:'ID '+log_id};
    }
    $.ajax({
        url: get_admin_url()+'backups/undo/',
        data: {'log_ids': log_ids},
        type: 'POST',
        success: function (r) {
            if (r == '1' || r == 1) {
                clearTimeout(last_delete['timeout']);
                $('#' + last_delete['id']).show();
                cms_alert('info', last_delete['item'].capitalize() + ' restored', 'The ' + last_delete['item'] + ' \'' + last_delete['name'] + '\' has been restored.');
            } else {
                restore_error();
            }
        },
        error: restore_error
    });
}

function restore_error() {
    cms_alert('danger', 'Error restoring ' + last_delete['item'].capitalize(), 'The ' + last_delete['item'] + ' was not restored (try refreshing the page, you may no longer be logged in)');
}
