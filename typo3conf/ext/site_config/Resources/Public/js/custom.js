(function ($) {
	jQuery(document).ready(function () {

		jQuery('marquee').mouseover(function () {
			jQuery(this).attr('scrollamount', 0);
		}).mouseout(function () {
			jQuery(this).attr('scrollamount', 3);
		});
		jQuery('.m-menu').click(function () {
			jQuery(this).toggleClass('open');
			jQuery('.navbar').slideToggle();

		});

		jQuery('.img_bg').children('img').each(function (n, img) {
			img = jQuery(img);
			var imgUrl = jQuery(this).attr('src');
			img.parents('.img_bg').css({
				'background': '#fff url(' + imgUrl + ') right center  no-repeat'
			});
			img.hide();
		});

		subMenu();

		jQuery(".menu-collapse-btn").click(function (e) {
			e.preventDefault();
			$(".navbar").toggleClass("menu-open");
		});

		// OWL CAROUSEL js
		jQuery('.home-carousel').owlCarousel({
			loop: true,
			margin: 10,
			responsiveClass: true,
			items: 1,
			nav: true,
			autoHeight: true,
		});

		jQuery('.brand-carousel').owlCarousel({
			loop: true,
			margin: 10,
			responsiveClass: true,
			navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
			items: 3,
			autoplay: true,
			nav: false,
			responsive: {
				0: {
					items: 2
				},
				768: {
					items: 2
				},
				1024: {
					items: 3
				}
			}
		});
	});

	jQuery(window).load(function () {

		$(".flexslider .slides li").each(function () {
			var img_src = $(this).children("img").attr("src");
			$(this).css("background-image", "url('" + img_src + "')");
			$(this).children("img").hide();
		});

		// var Sliderimages = jQuery(".flexslider ul.slides li.flex-active-slide > img").attr('src');
		// jQuery(".flexslider ul.slides li.flex-active-slide").css("background-image", "url(" + Sliderimages + ")");
		// jQuery(".flexslider ul.slides li img").css('display', 'none');

		// jQuery(".flexslider ul.slides li").hasClass("flex-active-slide", function () {
		// 	var Sliderimages = jQuery(".flexslider ul.slides li.flex-active-slide > img").attr('src');
		// 	jQuery(".flexslider ul.slides li.flex-active-slide").css("background-image", "url(" + Sliderimages + ")");
		// 	jQuery(".flexslider ul.slides li img").css('display', 'none');
		// });

	});

	jQuery(window).scroll(function () {
		var headerheight = jQuery(".header").height();
		if (jQuery(window).scrollTop() > headerheight) {
			jQuery('.header').addClass("sticky");
		} else {
			jQuery('.header').removeClass("sticky");
		}
	});


	function subMenu() {
		jQuery(".nav > li .submenu").before('<span class="mobile-arrow">+</span>');
		jQuery(".nav > li > .mobile-arrow").click(function () {
			if (jQuery(this).next("ul.submenu").is(":visible")) {
				jQuery(this).next("ul.submenu").slideUp();
				jQuery(this).text("+");
			} else {
				jQuery(".nav > li .submenu").slideUp();
				jQuery(".nav > li .mobile-arrow").text("+");
				jQuery(this).next("ul.submenu").slideDown();
				jQuery(this).text("-");
			}
		});

		jQuery(".submenu > li .mobile-arrow").click(function () {
			if (jQuery(this).next("ul.submenu").is(":visible")) {
				jQuery(this).next("ul.submenu").slideUp();
				jQuery(this).text("+");
			} else {
				jQuery(".submenu > li .submenu").slideUp();
				jQuery(".submenu > li .mobile-arrow").text("+");
				jQuery(this).next("ul.submenu").slideDown();
				jQuery(this).text("-");
			}
		});
	}

})(jQuery);




