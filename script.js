$(document).ready(function () {
    const heroMain = new Swiper('.hero-section-main-slide', {
        loop: true,
        autoplay: true,
        initialSlide: 0,
        rewind: true,
        on: {
            init: function (data) {
                let slide = data.slides[data.activeIndex];
                $(slide).parents().find('.hero-section').css('background', 'url(' + $(slide).data('thumbnail') + ')')
            },
        },
    });

    const heroSecond = new Swiper('.hero-section-second-slide', {
        loop: true,
        autoplay: true,
        direction: 'vertical',
        slidesPerView: 3,
        initialSlide: 1
    });

    heroMain.on('slideChange', function (data) {
        let slide = data.slides[data.activeIndex];
        let thumbnail = $(slide).data('thumbnail');
        $(slide).parents().find('.hero-section').css('background', 'url(' + thumbnail + ')')
        heroSecond.slideTo(data.activeIndex + 1);
    });

    $('.newsletter-form').submit((e) => {
        e.preventDefault();
        let form = e.target;

        $.ajax({
            type: 'post',
            url: $(form).attr('action'),
            data: $(form).serialize(),
            success: (res) => {
                res = JSON.parse(res);
                alert(res.success ?? res.error);
                form.reset();
            }
        })
    });

    $('body').on('change', '#filter', (e) => {
        $('#load-more').data('page', 1);

        $.ajax({
            type: 'post',
            url: '/wp-admin/admin-ajax.php?action=load_posts&category='+e.target.value,
            success: (res) => {
                $('.loadable-posts').remove();
                $('.content').append(res);
            }
        })
    });

    $('body').on('click', '#load-more', (e) => {
        let page = $(e.target).data('page');
        let category = $('#filter').val();
        page = parseInt(page) + 1;
        $(e.target).data('page', page);

        $.ajax({
            type: 'post',
            url: '/wp-admin/admin-ajax.php?action=load_posts&category='+category+'&page='+page,
            success: (res) => {
                $('.content').append(res);
            }
        })
    });
});