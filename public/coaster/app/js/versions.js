var page_id, version_id;

function version_pagination(e) {
    e.preventDefault();
    var page = getURLParameter('page', $(this).attr('href'));
    $.ajax({
        url: get_admin_url()+'pages/versions/'+page_id,
        data: {
            page: page
        },
        type: 'POST',
        success: function(r) {
            $('#version_table').html(r);
            $('#version_pagination').find('a').click(version_pagination);
            $('.version_publish').click(version_publish);
            $('.version_rename').click(version_rename_modal);
        }
    });
}

function version_rename_modal() {
    version_id = $(this).data('version');
    $('#version_name').val($('#v_' + version_id + ' td:nth-of-type(2)').html());
    $('#renameModal').modal('show');
}

function version_rename() {
    $.ajax({
        url: get_admin_url() + 'pages/version-rename/'+page_id,
        type: 'POST',
        data: {
            version_name: $('#version_name').val(),
            version_id: version_id
        },
        success: function (r) {
            if (r == 1) {
                $('#v_' + version_id + ' td:nth-of-type(2)').html($('#version_name').val());
            }
        }
    });
}

function version_publish() {
    version_id = $(this).data('version');
    $.ajax({
        url: get_admin_url()+'pages/version-publish/'+page_id,
        type: 'POST',
        data: {
            version_id: version_id
        },
        success: function() {
            $('.live_page_name').html('');
            $('.live_version_id').html(version_id);
            $('#publishModal').modal('show');
        }
    });
}

function request_publish_modal(e) {
    version_id = $(this).data('version');
    var modal = $('#requestPublishModal');
    if (version_id !== undefined) {
        var version_name = $(this).parent().parent().find('td:eq(1)').html();
        modal.find('.version').html(version_name+' (ID '+version_id+')');
        modal.find('.version_info').show();
    } else {
        modal.find('.version_info').hide();
    }
    e.preventDefault();
    modal.modal('show');
}

function request_publish() {
    var note = $('#request_note').val();
    if (version_id === undefined) {
        $('#request_note_input').val(note);
        $('#publish_request').val(1);
        $('#editForm').submit();
    } else {
        $.ajax({
            url: get_admin_url() + 'pages/request-publish/' + page_id,
            type: 'POST',
            data: {
                version_id: version_id,
                note: note
            },
            success: function (r) {
                if (r == 1) {
                    cms_alert('success', 'Publish request sent');
                    update_request_table();
                } else {
                    cms_alert('error', 'Error sending publish request');
                }
            },
            error: function () {
                cms_alert('error', 'Error sending publish request');
            }
        });
    }
}

function request_publish_action() {
    var request_id = $(this).data('request'), request_action = $(this).data('action'), page_name = $(this).data('name'), request_page_id = $(this).data('page'), version_id = $(this).data('version_id');
    var action_cell = $(this).parent();
    $.ajax({
        url: get_admin_url()+'pages/request-publish-action/'+request_page_id,
        type: 'POST',
        data: {
            request: request_id,
            request_action: request_action
        },
        success: function(r) {
            if (r == 1) {
                if (request_action == 'approve') {
                    $('.live_page_name').html(' for page '+page_name);
                    $('.live_version_id').html(version_id);
                    $('#publishModal').modal('show');
                }
                if (page_id !== undefined) {
                    update_request_table();
                } else {
                    action_cell.append(request_action);
                    action_cell.find('.request_publish_action').remove();
                }
            }
        }
    });
}

function update_request_table(page) {
    var data = {};
    data['request_type'] = $('#viewAllRequests').data('type');
    data['request_show'] = {page:0,status:1,requested_by:1};
    if (page !== undefined) {
        data['page'] = page;
    }
    $.ajax({
        url: get_admin_url()+'pages/requests/'+page_id,
        data: data,
        type: 'POST',
        success: function(r) {
            $('#publish_requests_table').html(r);
            $('.request_publish_action').click(request_publish_action);
            $('#publish_requests_table').find('.pagination a').click(request_table_pagination);
        }
    });
}

function request_table_pagination(e) {
    e.preventDefault();
    var page = getURLParameter('page', $(this).attr('href'));
    update_request_table(page);
}


$(document).ready(function() {
    $('#version_pagination').find('a').click(version_pagination);
    $('.version_publish').click(version_publish);
    $('.version_rename').click(version_rename_modal);
    $('#renameModal').find('.btn-primary').click(version_rename);

    $('.request_publish').click(request_publish_modal);
    $('.make_request').click(request_publish);

    $('.request_publish_action').click(request_publish_action);
    $('#publish_requests_table').find('.pagination a').click(request_table_pagination);

    $('#viewAllRequests').click(function() {
        var viewAllRequests = $('#viewAllRequests');
        if (viewAllRequests.data('type') == 'awaiting') {
            viewAllRequests.data('type', '').html('View awaiting requests');
        } else {
            viewAllRequests.data('type', 'awaiting').html('View all requests');
        }
        update_request_table();
    });

});
