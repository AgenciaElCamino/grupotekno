$(function () {
    $('#slides')
            .before('<div id="nav">')
            .cycle({
                fx: 'fade',
                speed: 'fast',
                timeout: 30000,
                pager: '#nav',
                pagerAnchorBuilder: function (idx, slide) {
                    return '<a href="#">' + $(slide).attr('data-pager') + '</a>';
                }
            });
});