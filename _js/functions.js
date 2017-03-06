function videoTrigger() {
	var beginEmbed = '<div class="fitvids"><iframe src="https://player.vimeo.com/video/';
	var endEmbed = '?&amp;autoplay=1" width="1000" height="562" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>';
	jQuery('#videoTrigger, .video-trigger').click(function () {
		var videoID = jQuery(this).data('video');
		var videoEmbed = beginEmbed + videoID + endEmbed;
        jQuery('.video-placeholder').css('display','none');
		jQuery('.video-container').html(videoEmbed);
		jQuery(".fitvids").fitVids();
		return false;
	});
}
function slideScroll() {
	jQuery('.venue-trigger').click(function() {
	   	if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = jQuery(this.hash);
			target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				jQuery('html, body').animate({
					scrollTop: target.offset().top
				}, 1000);
				return false;
			}
	    }
	});
}

function slider() {
    jQuery('.slider').bxSlider({
        minSlides: 1,
        maxSlides: 4,
        slideWidth: 310,
        slideMargin: 10,
        infiniteLoop: false,
        hideControlOnEnd: true,
        pager: false,
        moveSlides: 1,
        nextText: '&#12297;',
        prevText: '&#12296;',
    });
}
function toggleNav() {
	jQuery('.menu-toggle').click(function() {
		jQuery('body').toggleClass('show-nav');
		return false;
	});
}
function subMenu() {
	jQuery('.menu-item-has-children a').hover(function() {
		jQuery(this).addClass('show-sub');
	});
}

jQuery(document).ready(function () {
    slider();
    videoTrigger();
	slideScroll();
	toggleNav();
	subMenu();
});
