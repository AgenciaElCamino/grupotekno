$(function () {
    $('#slides')
            .before('<div id="nav">')
            .cycle({
                fx: 'scrollHorz',
                speed: 500,
                timeout: 10000,
                pager: '#nav',
                pagerAnchorBuilder: function (idx, slide) {
                    return '<a href="#">' + $(slide).attr('data-pager') + '</a>';
                }
            });
});