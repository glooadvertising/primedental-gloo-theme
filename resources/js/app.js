// Navigation toggle
window.addEventListener('load', function () {
	let main_navigation = document.querySelector('#primary-menu');
	document
		.querySelector('#primary-menu-toggle')
		.addEventListener('click', function (e) {
			e.preventDefault();
			main_navigation.classList.toggle('hidden');
		});
});

// jQuery(document).ready(function ($) {
// 	// Cache selectors
// 	var leftMenu = $('.side-menu'),
// 		topMenu = $('#main-header'),
// 		topMenuHeight = topMenu.outerHeight() + 15,
// 		// All list items
// 		menuItems = leftMenu.find('a'),
// 		// Anchors corresponding to menu items
// 		scrollItems = menuItems.map(function () {
// 			var item = $($(this).attr('href'));
// 			if (item.length) {
// 				return item;
// 			}
// 		});

// 	// Bind to scroll
// 	$(window).scroll(function () {
// 		// Get container scroll position
// 		var fromTop = $(this).scrollTop() + topMenuHeight;

// 		// Get id of current scroll item
// 		var cur = scrollItems.map(function () {
// 			if ($(this).offset().top < fromTop) return this;
// 		});
// 		// Get the id of the current element
// 		cur = cur[cur.length - 1];
// 		var id = cur && cur.length ? cur[0].id : '';
// 		// Set/remove active class
// 		menuItems
// 			.parent()
// 			.removeClass('menu-link-active')
// 			.end()
// 			.filter("[href='#" + id + "']")
// 			.parent()
// 			.addClass('menu-link-active');
// 	});
// });
