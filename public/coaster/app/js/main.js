$(document).ready(function() {
    $.ajaxPrefilter(function (options, originalOptions, xhr) { // this will run before each request
        var token = $('meta[name="_token"]').attr('content');
        if (token) {
            return xhr.setRequestHeader('X-CSRF-TOKEN', token);
        }
    });

    $('.itemTooltip').tooltip({placement : 'bottom', container: 'body'});
});
