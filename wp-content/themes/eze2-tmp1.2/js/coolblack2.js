'use strict'


// ----------------------- Functions -----------------------------------------------------------------------------------

function wordWrapInSpan(e) {
    e.children().andSelf().contents().each(function () {
        3 === this.nodeType && $(this).replaceWith($(this).text().replace(/[\wa-яА-Я0-9_.,-]/g, '<span>$&</span>'));
    })
}



function topSectionAnimate() {

    var topSectionTween = new TimelineMax();

    //TweenLite.set(', {letterSpacing: '5px'});
    topSectionTween
    //        .staggerTo($('#js-text span'), 1, {
    //            ease: Power2.easeOut,
    ////                ease: Power2.easeInOut,
    //            cycle: {
    //                delay: function () {
    //                    return Math.random() * 1
    //                }
    //            },
    //            opacity: 1,
    //            scale: 1,
    //        })

        // .fromTo("#sing", 1, {
        //     opacity: 0,
        //
        // })
        .to(".cover__bg", 3, {
            opacity: 1,
            scale: 1.1,
        },'-=1');
}



$(window).ready(function () {

    wordWrapInSpan($("#js-text"));
    
    //--     Show Modal menu

    $("#js-menu-btn-in").on("click", function () {
        var e = $("#js-menu-btn"),
            i = $("#js-modal");
        i.find("ul");

        e.toggleClass("is-prepend"), i.toggleClass("is-fadeIn");
    });


    // var windowHeight = $(window).height();
    // $("#js-above").css({height: windowHeight + "px"});


//----------------------------------Animate-----------------------------------------------------------------------------



    // wordWrapInSpan($("[id^=js-page-ttl-]"));
    topSectionAnimate();



//------------------------ First section animation ------------------------------

    //var tl = new TimelineMax();
    //tl
    //    .to(".cover__bg", 3, {
    //        opacity: 1,
    //        scale: 1.1,
    //    });
    //--------- OR -----------
    //$('.cover__bg').css({
    //
    //    scale: 1.1,
    //    opacity: 1,
    //});


    $(window).scroll(function () {

        /* Check the location of each desired element */
        $('.hideme').each(function () {

            // var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            // var bottom_of_window = $(window).scrollTop() + $(window).height();
            //
            // /* If the object is completely visible in the window, fade it it */
            // if( bottom_of_window > bottom_of_object ){
            //
            //     $(this).animate({'opacity':'1'},500);
            //
            // }

            if ($(window).scrollTop() > 300) {
                // tl.to(this, 2, {
                //         opacity: 1,
                //     });
                $(this).animate({'opacity': '1'}, 300);
            }

        });

    });




    // $(".menu-top-menu-container").on({
    //     click: function () {
    //         $('.cover__bg').animate({
    //             opacity: 0,
    //         }, 200);
    //     },
    //     mouseenter: function () {
    //         $('.cover__bg').animate({
    //             opacity: 0.5,
    //         }, 500);
    //     },
    //     mouseleave: function () {
    //         $('.cover__bg').animate({
    //             opacity: 1,
    //         }, 500);
    //     }
    // });

    // $("body").scroll(function(){
    //     $(".cover__bg").css({opacity: windowHeight + "px"});
    // });
    //
    // $(window).scroll(function(){
    //     if ($(this).scrollTop() > 1000) {
    //         $('.primary').fadeIn();
    //     } else {
    //         $('.primary').fadeOut();
    //     }
    // });


    // $(window).scroll(function(){
    //     if ($(this).scrollTop() > 500) {
    //         $( '.cover__bg' ).animate({
    //
    //             opacity: 0,
    //
    //         }, 300 );
    //     } else {
    //         $( '.cover__bg' ).animate({
    //
    //             opacity: 1,
    //
    //         }, 300 );
    //     }
    // });


});

