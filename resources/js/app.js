// MOBILE MENU

const mobileMenu = document.querySelector('#mobile-menu');
const burger = document.querySelector('.burger');
const closeMenu = document.querySelector('#closeMobileMenu');

burger.addEventListener('click', () => {
	mobileMenu.classList.toggle('menu-hidden');
});

closeMenu.addEventListener('click', () => {
	mobileMenu.classList.toggle('menu-hidden');
});

// PROFILE CARDS

const articles = document.querySelectorAll('.profile-card');

for (let i = 0; i < articles.length; i++) {
	const modal = articles[i].querySelector('dialog');
	const closeModal = articles[i].querySelector('.close-button');
	articles[i]?.addEventListener('click', () => {
		modal.showModal();
		modal.scrollTop = 0;
	});
	closeModal?.addEventListener('click', (e) => {
		modal.close();
		e.stopPropagation();
	});
}

// HOME HERO

const welcomeAlt = document.querySelector('#secondary-welcome');
const thumbLeft = document.querySelector('#thumb-left');

welcomeAlt?.addEventListener('mouseover', () => {
	welcomeAlt.classList.remove('opacity-0');
	thumbLeft.classList.add(
		'opacity-0',
		'transition',
		'duration-500',
		'delay-1000'
	);
});

// Navigation toggle
//
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
