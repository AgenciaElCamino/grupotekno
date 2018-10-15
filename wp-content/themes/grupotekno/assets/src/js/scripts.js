$(document).on('click', 'ul.dropdown>li', function(e) {
    $('.docs .dropdown-menu').removeClass('_open')
    $(this).next('.dropdown-menu').toggleClass('_open')
})
$(document).on('click', 'ul.dropdown-menu>li', function(e) {
    $(this).next('.dropdown-menu').toggleClass('_open')
})

$(function() {
    $("header nav ul.menu li a").on('click', function(e) {
        e.preventDefault()
        var target = '#'+$(this).attr('data-target')
        console.log(target)
        $('html, body').animate({
            scrollTop: $(target).offset().top - 120
        }, 850);
    });
})