$(document).on('click', 'ul.dropdown>li', function(e) {
    $('.docs .dropdown-menu').removeClass('_open')
    $(this).next('.dropdown-menu').toggleClass('_open')
})
$(document).on('click', 'ul.dropdown-menu>li', function(e) {
    $(this).next('.dropdown-menu').toggleClass('_open')
})