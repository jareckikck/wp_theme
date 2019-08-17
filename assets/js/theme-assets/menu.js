(function($, root, undefined) {
	$(function() {
		mobileMenu();
	});

	function mobileMenu() {
		/* MENU variables */
		const $menuBox = jQuery("#mobile-menu-element"),
			$menuBtn = jQuery("#mobile-menu-handler"),
			$menuWrapper = jQuery(".nav");

		$window = jQuery(window);

		$window.on("scroll resize", function() {
			stickMenuToTop();
		});

		//close if clicked outside
		jQuery(document).on("click tap touch", function(e) {
			if (
				!$menuWrapper.is(e.target) &&
				$menuWrapper.has(e.target).length === 0
			) {
				closeMainMenu();
			}
		});

		// MENU ON CLICKS
		$menuBtn.on("click tap touch", function(event) {
			jQuery(this).toggleClass("active");
			jQuery(this)
				.parent()
				.toggleClass("active");
			$menuBox.toggleClass("active");
		});

		/* manage enter and esc keydown for menus  */
		window.addEventListener("keydown", function(event) {
			if ($menuBox.hasClass("active") && event.keyCode === 27) {
				closeMainMenu();
			}
		});

		function closeMainMenu() {
			$menuBtn.removeClass("active");
			$menuBox.removeClass("active");
		}

		function stickMenuToTop() {
			let offset = jQuery("header.header").height();
			let scrollTop = $window.scrollTop();
			let $menu = jQuery(".main-nav");
			if (scrollTop > offset) {
				if (!$menu.hasClass("sticky")) {
					$menu.addClass("sticky");
				}
			} else {
				$menu.removeClass("sticky");
			}
		}
	}
})(jQuery, this);

(function($, root, undefined) {
	$(document).ready(function() {
		handleSubMenu();
	});

	function handleSubMenu() {
		addToggleArrowToSubMenu();
		animateArrowSubMenu();
	}

	function animateArrowSubMenu() {
		$(".mobile-nav-arrow").on("click tap touch", function() {
			$(this)
				.siblings(".sub-menu")
				.slideToggle("slow");
			$(this).toggleClass("rotate-arrow");
		});
	}

	function addToggleArrowToSubMenu() {
		if ($(".header-main-menu ul li").children(".sub-menu").length > 0) {
			$(".sub-menu").before(
				'<span class="mobile-nav-arrow"><i class="fa fa-angle-down"></i></span>'
			);
		}
	}
})(jQuery, this);
