// Add & Remove 'active' class on the hamburger button
jQuery(function ($) {
	$(".navbar-toggler").on("click", function () {
		if ($(this).hasClass("is-active")) {
			$(this).removeClass("is-active");
			$("#mobile-menu").removeClass("menu-active");
			$(".header").removeClass("menu-active");
		} else {
			$(this).addClass("is-active");
			$("#mobile-menu").addClass("menu-active");
			$(".header").addClass("menu-active");
		}
	});

	// Smooth Scroll to Anchor
	$(document).on("click", 'a[href^="#"]', function (event) {
		event.preventDefault();

		$("html, body").animate(
			{
				scrollTop: $($.attr(this, "href")).offset().top
			},
			500
		);
	});

	// Parent links clickable on dropdowns
	$(".navbar .dropdown > a").click(function () {
		if (!$(this).hasClass("parent-clicked")) {
			$(this).addClass("parent-clicked");
		} else {
			location.href = this.href;
		}
	});

	// Testimonial Slider
	$(document).ready(function () {
		$(".testimonials-mobile").slick({
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 5000,
			arrows: false,
			dots: true,
			customPaging: function (slider, i) {
				return '<div class="dot"></div>';
			}
		});
	});

	// Popular Guides Slider
	$(document).ready(function () {
		$(".popular-guides .guides").slick({
			infinite: true,
			autoplay: true,
			autoplaySpeed: 5000,
			arrows: false,
			dots: true,
			customPaging: function (slider, i) {
				return '<div class="dot"></div>';
			},
			responsive: [
				{
					breakpoint: 9999,
					settings: "unslick"
				},
				{
					breakpoint: 767,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
			]
		});
	});

	// Other Guides Slider
	$(document).ready(function () {
		$(".other-guides .guides").slick({
			infinite: true,
			autoplay: true,
			autoplaySpeed: 5000,
			arrows: false,
			dots: true,
			customPaging: function (slider, i) {
				return '<div class="dot"></div>';
			},
			responsive: [
				{
					breakpoint: 9999,
					settings: "unslick"
				},
				{
					breakpoint: 991,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1
					}
				},
				{
					breakpoint: 767,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
			]
		});
	});

	// Steps Guide Mobile Slider
	$(document).ready(function () {
		$(".step-navigation .content").slick({
			infinite: true,
			autoplay: false,
			adaptiveHeight: true,
			arrows: true,
			prevArrow: $(".step-navigation .prev"),
			nextArrow: $(".step-navigation .next"),
			dots: false,
			responsive: [
				{
					breakpoint: 9999,
					settings: "unslick"
				},
				{
					breakpoint: 991,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
			]
		});
	});

	// Allow individual Team Member bios appear when the group photo is clicked
	$(".team-members .member").click(function () {
		var cur = $(".team-members .member").index($(this)); // get the index of the clicked link

		$(".single-member").removeClass("active"); // Hide all team members
		$(".single-member").eq(cur).addClass("active"); // Show specific team member
	});

	// Hide Individual team member until a headshot is clicked
	$(".team-members .member").click(function () {
		$(".single-members").addClass("active");
	});

	// Handle accordion open/close
	$(".card-header").click(function () {
		$(this).toggleClass("active");
	});

	// Show step content to be shown when title is clicked
	$(".step-navigation .sidebar .step").click(function () {
		var cur = $(".step-navigation .sidebar .step").index($(this)); // get the index of the clicked link

		$(".step-navigation .content-wrapper").removeClass("active"); // Hide all team members
		$(".step-navigation .content-wrapper").eq(cur).addClass("active"); // Show specific team member
		$(".step-navigation .sidebar .step").removeClass("active"); // Remove 'active' class from all nav links
		$(".step-navigation .sidebar .step").eq(cur).addClass("active"); // Add 'active' class to selected link
	});

	// Add 'active' class to first team member on load
	$(function () {
		$(".step-navigation .content-wrapper:first-of-type").addClass("active");
		$(".step-navigation .sidebar .step:first-of-type").addClass("active");
	});

	// Elements slide up on scroll
	(function ($) {
		/**
		 * Copyright 2012, Digital Fusion
		 * Licensed under the MIT license.
		 * http://teamdf.com/jquery-plugins/license/
		 *
		 * @author Sam Sehnert
		 * @desc A small plugin that checks whether elements are within
		 *     the user visible viewport of a web browser.
		 *     only accounts for vertical position, not horizontal.
		 */

		$.fn.visible = function (partial) {
			var $t = $(this),
				$w = $(window),
				viewTop = $w.scrollTop(),
				viewBottom = viewTop + $w.height(),
				_top = $t.offset().top,
				_bottom = _top + $t.height(),
				compareTop = partial === true ? _bottom : _top,
				compareBottom = partial === true ? _top : _bottom;

			return compareBottom <= viewBottom && compareTop >= viewTop;
		};
	})(jQuery);

	var win = $(window);

	var allMods = $(".module");

	allMods.each(function (i, el) {
		var el = $(el);
		if (el.visible(true)) {
			el.addClass("already-visible");
		}
	});

	win.scroll(function (event) {
		allMods.each(function (i, el) {
			var el = $(el);
			if (el.visible(true)) {
				el.addClass("come-in");
			}
		});
	});

	// Search Filter (for Team Members)
	$(document).ready(function () {
		$("#search-text").keyup(function () {
			var searchTerm = $("#search-text").val();
			var listItem = $(".member").children("h3");

			var searchSplit = searchTerm.replace(/ /g, "'):containsi('");

			//extends :contains to be case insensitive
			$.extend($.expr[":"], {
				containsi: function (elem, i, match, array) {
					return (
						(elem.textContent || elem.innerText || "")
							.toLowerCase()
							.indexOf((match[3] || "").toLowerCase()) >= 0
					);
				}
			});

			$(".member h3")
				.not(":containsi('" + searchSplit + "')")
				.each(function (e) {
					$(this).addClass("hidden").removeClass("in");
					$(this).closest(".member").addClass("hidden").removeClass("in");
				});

			$(".member h3:containsi('" + searchSplit + "')").each(function (e) {
				$(this).removeClass("hidden").addClass("in");
				$(this).closest(".member").removeClass("hidden").addClass("in");
			});
		});
	});

	// Search Filter (For FAQ Page)
	$(document).ready(function () {
		$("#search-text").keyup(function () {
			var searchTerm = $("#search-text").val();
			var listItem = $("#accordion").children(".card h3");

			var searchSplit = searchTerm.replace(/ /g, "'):containsi('");

			//extends :contains to be case insensitive
			$.extend($.expr[":"], {
				containsi: function (elem, i, match, array) {
					return (
						(elem.textContent || elem.innerText || "")
							.toLowerCase()
							.indexOf((match[3] || "").toLowerCase()) >= 0
					);
				}
			});

			$("#accordion .card h3")
				.not(":containsi('" + searchSplit + "')")
				.each(function (e) {
					$(this).addClass("hidden").removeClass("in");
					$(this).closest(".card").addClass("hidden").removeClass("in");
				});

			$("#accordion .card h3:containsi('" + searchSplit + "')").each(function (
				e
			) {
				$(this).removeClass("hidden").addClass("in");
				$(this).closest(".card").removeClass("hidden").addClass("in");
			});
		});
	});
	// End jQuery
});
