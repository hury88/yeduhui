$(function() {
    $('[data-tips="tips"]').tipsy({
        title: 'title',
        html: true,
        offset: 8
    });
    $('[data-tips="tips-2"]').tipsy({
        title: 'title',
        html: true,
        offset: 8,
        gravity: 'sw'
    });
    $('.detail-btn-arr.next').live('click', function() {

        $('.jcarousel-next ').trigger('click')

    })
    $('.detail-btn-arr.prev').live('click', function() {

        $('.jcarousel-prev ').trigger('click')

    })
    $('.jcarousel-item').live('click', function() {
        $('.jcarousel-next ').trigger('click')
    });
    $('.ydh-search-input').focus(function(event) {
         $('.search-key-list:eq(0)').slideUp();
        $('.search-box-list:eq(0)').slideUp();
        $('.search-box-list:eq(0)').slideDown();

    });
    $('.ydh-searchkey-input').focus(function(event) {
        $('.search-key-list:eq(0)').slideUp();
        $('.search-box-list:eq(0)').slideUp();
        $('.search-key-list:eq(0)').slideDown();

    });
    $('.search-box-close').click(function(event) {
        $('.search-box-list').slideUp();
    });
    $('.search-box-close').click(function(event) {
        $('.search-key-list').slideUp();
    });
    $('.search-box-list-box span').click(function(event) {
        var inputText = $(this).text();
        $(this).addClass('active').siblings().removeClass('active');
        $('.cityInput').val(inputText)
        $('.cityInput').parent().find('label').hide()

    });
    $('.search-key-list-box span').click(function(event) {
        var inputText = $(this).text();
        $(this).addClass('active').siblings().removeClass('active');
        $('.keyInput').val(inputText)
        $('.keyInput').parent().find('label').hide()

    });
    $('.ydh-history-del').click(function(event) {
        $('.ydh-list-history').fadeOut('slow', function() {
            $(this).remove()
        });
        $('.ydh-history').fadeOut('slow', function() {
            $(this).remove()
        });

    });
    $('.ydh-history-c ').click(function(event) {

        if ($('.ydh-history-item').length == 1 || $('.ydh-list-history-item').length == 1) {
            $(this).parent().fadeOut('slow', function() {
                $(this).remove()
            });
            $('.ydh-history').fadeOut('slow', function() {
                $(this).remove()
            });
            $('.ydh-list-history').fadeOut('slow', function() {
                $(this).remove()
            });
        } else {
            $(this).parent().fadeOut('slow', function() {
                $(this).remove()
            });
        }

    });
    $('.ydh-index-city-list a').click(function(event) {
        location.href = $(this).attr('href')

        return false
    });
    $('.ydh-mag-edit-reset').live('click', function(event) {

        $(this).closest('.collapsible').find('input').val('')
    });
    $('.ydh-index-city-list.active ').die('click').live('click', function(event) {

        var _target = $(event.target)
        var _idx = $(this).index() / 2
        var _max = $('.ydh-index-city-list').length

        if ((_idx + 1) == _max) {
            $('.ydh-index-city-list').eq(0).trigger('click')
        } else {
            $('.ydh-index-city-list').eq(_idx + 1).trigger('click')
        }

    });
    $('.user-ctrl-list-title.active').die('click').live('click', function(event) {

        var _target = $(event.target)
        var _idx = $(this).index() / 2
        var _max = $('.user-ctrl-list-title').length

        if ((_idx + 1) == _max) {
            $('.user-ctrl-list-title').eq(0).trigger('click')
        } else {
            $('.user-ctrl-list-title').eq(_idx + 1).trigger('click')
        }

    });
    var t;
    $('.ydh-list-filter-type').click(function(event) {

        var $target = $(event.target)
        if ($target.is('p')) {
            location.reload()
            $(this).parent().addClass('active')
            return
        } else if ($target.is('span')){

            $('.ydh-list-filter-type').removeClass('active')
            $('.ydh-list-filter-type-list').hide()
           $target.parent().find('.ydh-list-filter-type-list').show();
           $target.parent().addClass('cur').siblings().removeClass('cur')
            // t = setTimeout(function() {
            //     _this.parent().find('.ydh-list-filter-type-list').slideUp();
            // }, 1000)
        }

    });

    $('.list-filter li span').click(function(event) {
        var _this = $(this);
        $(this).parent().find('.ydh-list-map-filter-type-list').slideDown();
        $(this).parent().addClass('cur').siblings().removeClass('cur')
        // t = setTimeout(function() {
        //     _this.parent().find('.ydh-list-filter-type-list').slideUp();
        // }, 1000)

    });

    $(".slides_container img:only-child").show();


    $('#hot-more-bt').click(function(event) {
        $('.hot-more-city-list').slideDown();
    });
    // $('.ydh-list-filter-type-list').hover(function() {
    //  var _this=$(this)
    //     clearTimeout(t)
    // },function() {
    //  var _this=$(this)
    //      t = setTimeout(function() {
    //         _this.slideUp();
    //     }, 1000)
    // });
    $('.ydh-list-filter-type, .ydh-search-input, .ydh-searchkey-input, #hot-more-bt').mouseup(function(event) {
        return false
    });
    $('.hot-more-city-list a').click(function(event) {
        var idx = $(this).closest('.hot-more-city').index();
        $('.ydh-index-city-tab li').eq(idx - 1).html($(this).clone()).addClass('active').siblings().removeClass('active')
        $(this).closest('.hot-more-city-list').hide();

    });

    $('.ydh-list-filter-type-list').mouseup(function(event) {
        $('.ydh-list-filter-type-list').hide()
    });
	
	$('.cur').mousedown(function(event) {
        $('.ydh-list-filter-type-list').hide()
    });

    $(document).mouseup(function(event) {
        $('.ydh-list-filter-type-list').hide()
        $('.hot-more-city-list').slideUp();
        $('.search-box-list').slideUp();
        $('.search-key-list').slideUp();
        $('.ydh-list-map-filter-type-list').slideUp()
    });

    $('.list-ablum, .detail-job-ablum').hover(function() {
        $(this).find('.prev,.next').show()
    }, function() {
        $(this).find('.prev,.next').hide()
    });

    $('.ydh-detail-ablum-big-tips').hover(function() {
        $('.ydh-detail-ablum-big-tips-bg').css({
            opacity: .7
        });
    }, function() {
        $('.ydh-detail-ablum-big-tips-bg').css({
            opacity: .3
        });
    });
    $('.ydh-detail-comment-type').click(function(event) {
        $(this).addClass('cur').siblings().removeClass('cur')
        $(this).find('input').attr('checked', true)
    });
    $('.view-all-comment').click(function(event) {
        $('.comment-more').slideDown();
        $(this).remove()
    });
    $('.ydh-detail-btn a').click(function(event) {
        var _target = $(event.target)
        if (_target.is('.open-btn')) {
            $(this).closest('.collapsible').find('.ydh-detail-c').css({
                height: 'auto'
            });
            $(this).removeClass('open-btn').addClass('close-btn').text('收起')
        } else {
            $(this).closest('.collapsible').find('.ydh-detail-c').css({
                height: '72'
            });
            $(this).removeClass('close-btn').addClass('open-btn').text('更多')
        }
    });
    $('.change-search-btn').click(function(event) {
        if ($('.ydh-search').hasClass('hide')) {
            $(this).closest('.ydh-search').hide()
            $('.ydh-search').removeClass('hide')
            $('.ydh-search label').css({
                left: '10px'
            });

        }
    });
    $(document).delegate('a[data-target]', 'click', function(event) {
        var target = $(this).attr('data-target')
        $(this).closest('.ydh-why').fadeOut('fast', function() {
            $(target).fadeIn();
            $(target).find('label').remove()
        });



    });

    $('.edit-user-info-icon').live('click', function(event) {
        $(this).closest('.user-info').hide()
        $(this).closest('.collapsible').find('.edit-user-info').show()
        /* Act on the event */
    });
    $('.ydh-mag-edit-cancel').live('click', function(event) {
        $(this).closest('.edit-user-info').hide()
        $(this).closest('.collapsible').find('.user-info').show()
        /* Act on the event */
    });
    $('.del-fav-list').live('click', function(event) {
        $(this).closest('.user-fav-list').fadeOut('fast', function() {
            $(this).remove()
        });
        if ($('.user-fav-list').length == 1) {
            $(this).closest('.collapsible').html('<p style="padding-left:100px; line-height:50px;">暂无收藏内容</p>')
        }


    });
});
