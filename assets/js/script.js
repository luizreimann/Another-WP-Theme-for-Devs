jQuery(document).ready(function($) {

    // Mobile menu
    $('.custom-toggler').click(function() {
        $('#mobile-menu').fadeIn(300);
        $('#mobile-menu').addClass('show');
    });

    $('#mobile-menu').click(function(event) {
        if ($(event.target).closest('.mobile-menu-list').length === 0) {
            $('#mobile-menu').fadeOut(300);
            setTimeout(function() {
                $('#mobile-menu').removeClass('show');
            }, 300);        
        }
      });

    $('#mobile-menu a').click(function() {
        $('#mobile-menu').fadeOut(300);
        setTimeout(function() {
            $('#mobile-menu').removeClass('show');
        }, 300);        
    });

    // Typewriter for subheading
    var text = "Web Developer";
    var element = $('#h2-title');
    var index = 0;
    
    function typeWriter() {
        if (index < text.length) {
            element.append(text.charAt(index));
            index++;
            setTimeout(typeWriter, 100);
        } else {
            element.addClass('blinking-cursor');
        }
    }
    typeWriter();

    // Skills progressbar
    function animateProgressBars() {
        $('.progress-bar').each(function () {
            var progressBar = $(this);
            var progressValue = progressBar.attr('aria-label');
            var progressTop = progressBar.offset().top;
            var windowBottom = $(window).scrollTop() + $(window).height();

            if (windowBottom > progressTop) {
                progressBar.find('.progress-fill').css('width', progressValue);
            }
        });
    }
    animateProgressBars();
    $(window).on('scroll', animateProgressBars);

    // Slick Portfolio
    $('.projects-slider').slick({
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
        arrows: true,
        prevArrow: '<button class="project-prev" aria-label="Previous slide"></button>',
        nextArrow: '<button class="project-next" aria-label="Next slide"></button>',
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                    autoplay: true
                }
            }
        ]        
    });

    // WordPress Portfolio
    $('.wp-slider').slick({
        infinite: false,
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: false,
        arrows: true,
        prevArrow: '<button class="wp-project-prev" aria-label="Previous slide"></button>',
        nextArrow: '<button class="wp-project-next" aria-label="Next slide"></button>',
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                    autoplay: true
                }
            }
        ]        
    });
});