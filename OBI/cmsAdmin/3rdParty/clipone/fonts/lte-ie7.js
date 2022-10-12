/* Load this script using conditional IE comments if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'clip-font\'">' + entity + '</span>' + html;
	}
	var icons = {
			'clip-settings' : '&#xe000;',
			'clip-camera' : '&#xe001;',
			'clip-tag' : '&#xe002;',
			'clip-bulb' : '&#xe003;',
			'clip-paperplane' : '&#xe004;',
			'clip-bubble' : '&#xe005;',
			'clip-banknote' : '&#xe006;',
			'clip-music' : '&#xe007;',
			'clip-data' : '&#xe008;',
			'clip-t-shirt' : '&#xe009;',
			'clip-clip' : '&#xe00a;',
			'clip-calendar' : '&#xe00b;',
			'clip-vynil' : '&#xe00c;',
			'clip-truck' : '&#xe00d;',
			'clip-note' : '&#xe00e;',
			'clip-world' : '&#xe00f;',
			'clip-key' : '&#xe010;',
			'clip-pencil' : '&#xe011;',
			'clip-pencil-2' : '&#xe012;',
			'clip-images' : '&#xe013;',
			'clip-images-2' : '&#xe014;',
			'clip-list' : '&#xe015;',
			'clip-earth' : '&#xe016;',
			'clip-pictures' : '&#xe017;',
			'clip-cog' : '&#xe018;',
			'clip-home' : '&#xe019;',
			'clip-home-2' : '&#xe01a;',
			'clip-pencil-3' : '&#xe01b;',
			'clip-images-3' : '&#xe01c;',
			'clip-eyedropper' : '&#xe01d;',
			'clip-droplet' : '&#xe01e;',
			'clip-droplet-2' : '&#xe01f;',
			'clip-image' : '&#xe020;',
			'clip-music-2' : '&#xe021;',
			'clip-camera-2' : '&#xe022;',
			'clip-camera-3' : '&#xe023;',
			'clip-headphones' : '&#xe024;',
			'clip-headphones-2' : '&#xe025;',
			'clip-gamepad' : '&#xe026;',
			'clip-podcast' : '&#xe027;',
			'clip-connection' : '&#xe028;',
			'clip-connection-2' : '&#xe029;',
			'clip-new' : '&#xe02a;',
			'clip-book' : '&#xe02b;',
			'clip-file' : '&#xe02c;',
			'clip-file-2' : '&#xe02d;',
			'clip-file-plus' : '&#xe02e;',
			'clip-file-minus' : '&#xe02f;',
			'clip-file-check' : '&#xe030;',
			'clip-file-remove' : '&#xe031;',
			'clip-file-3' : '&#xe032;',
			'clip-copy' : '&#xe033;',
			'clip-copy-2' : '&#xe034;',
			'clip-copy-3' : '&#xe035;',
			'clip-copy-4' : '&#xe036;',
			'clip-paste' : '&#xe037;',
			'clip-stack' : '&#xe038;',
			'clip-stack-2' : '&#xe039;',
			'clip-folder' : '&#xe03a;',
			'clip-folder-upload' : '&#xe03b;',
			'clip-folder-download' : '&#xe03c;',
			'clip-folder-remove' : '&#xe03d;',
			'clip-folder-plus' : '&#xe03e;',
			'clip-folder-2' : '&#xe03f;',
			'clip-folder-open' : '&#xe040;',
			'clip-cc' : '&#xe041;',
			'clip-tag-2' : '&#xe042;',
			'clip-barcode' : '&#xe043;',
			'clip-cart' : '&#xe044;',
			'clip-phone-hang-up' : '&#xe045;',
			'clip-phone' : '&#xe046;',
			'clip-phone-2' : '&#xe047;',
			'clip-location' : '&#xe048;',
			'clip-compass' : '&#xe049;',
			'clip-map' : '&#xe04a;',
			'clip-alarm' : '&#xe04b;',
			'clip-clock' : '&#xe04c;',
			'clip-history' : '&#xe04d;',
			'clip-stopwatch' : '&#xe04e;',
			'clip-keyboard' : '&#xe04f;',
			'clip-screen' : '&#xe050;',
			'clip-laptop' : '&#xe051;',
			'clip-mobile' : '&#xe052;',
			'clip-mobile-2' : '&#xe053;',
			'clip-tablet' : '&#xe054;',
			'clip-mobile-3' : '&#xe055;',
			'clip-rotate' : '&#xe056;',
			'clip-rotate-2' : '&#xe057;',
			'clip-redo' : '&#xe058;',
			'clip-undo' : '&#xe059;',
			'clip-database' : '&#xe05a;',
			'clip-bubble-2' : '&#xe05b;',
			'clip-bubbles' : '&#xe05c;',
			'clip-bubble-3' : '&#xe05d;',
			'clip-bubble-4' : '&#xe05e;',
			'clip-bubble-dots' : '&#xe05f;',
			'clip-bubble-dots-2' : '&#xe060;',
			'clip-bubbles-2' : '&#xe061;',
			'clip-bubbles-3' : '&#xe062;',
			'clip-user' : '&#xe063;',
			'clip-users' : '&#xe064;',
			'clip-user-plus' : '&#xe065;',
			'clip-user-minus' : '&#xe066;',
			'clip-user-cancel' : '&#xe067;',
			'clip-user-block' : '&#xe068;',
			'clip-user-2' : '&#xe069;',
			'clip-user-3' : '&#xe06a;',
			'clip-users-2' : '&#xe06b;',
			'clip-user-4' : '&#xe06c;',
			'clip-user-5' : '&#xe06d;',
			'clip-hanger' : '&#xe06e;',
			'clip-quotes-left' : '&#xe06f;',
			'clip-quotes-right' : '&#xe070;',
			'clip-busy' : '&#xe071;',
			'clip-spinner' : '&#xe072;',
			'clip-spinner-2' : '&#xe073;',
			'clip-spinner-3' : '&#xe074;',
			'clip-spinner-4' : '&#xe075;',
			'clip-spinner-5' : '&#xe076;',
			'clip-spinner-6' : '&#xe077;',
			'clip-microscope' : '&#xe078;',
			'clip-search' : '&#xe079;',
			'clip-zoom-in' : '&#xe07a;',
			'clip-zoom-out' : '&#xe07b;',
			'clip-search-2' : '&#xe07c;',
			'clip-key-2' : '&#xe07d;',
			'clip-key-3' : '&#xe07e;',
			'clip-keyhole' : '&#xe07f;',
			'clip-wrench' : '&#xe080;',
			'clip-wrench-2' : '&#xe081;',
			'clip-cog-2' : '&#xe082;',
			'clip-cogs' : '&#xe083;',
			'clip-health' : '&#xe084;',
			'clip-stats' : '&#xe085;',
			'clip-inject' : '&#xe086;',
			'clip-bars' : '&#xe087;',
			'clip-rating' : '&#xe088;',
			'clip-rating-2' : '&#xe089;',
			'clip-rating-3' : '&#xe08a;',
			'clip-leaf' : '&#xe08b;',
			'clip-balance' : '&#xe08c;',
			'clip-atom' : '&#xe08d;',
			'clip-atom-2' : '&#xe08e;',
			'clip-lamp' : '&#xe08f;',
			'clip-remove' : '&#xe090;',
			'clip-puzzle' : '&#xe091;',
			'clip-puzzle-2' : '&#xe092;',
			'clip-cube' : '&#xe093;',
			'clip-cube-2' : '&#xe094;',
			'clip-pyramid' : '&#xe095;',
			'clip-puzzle-3' : '&#xe096;',
			'clip-puzzle-4' : '&#xe097;',
			'clip-clipboard' : '&#xe098;',
			'clip-switch' : '&#xe099;',
			'clip-list-2' : '&#xe09a;',
			'clip-list-3' : '&#xe09b;',
			'clip-list-4' : '&#xe09c;',
			'clip-list-5' : '&#xe09d;',
			'clip-list-6' : '&#xe09e;',
			'clip-grid' : '&#xe09f;',
			'clip-grid-2' : '&#xe0a0;',
			'clip-grid-3' : '&#xe0a1;',
			'clip-grid-4' : '&#xe0a2;',
			'clip-grid-5' : '&#xe0a3;',
			'clip-grid-6' : '&#xe0a4;',
			'clip-menu' : '&#xe0a5;',
			'clip-menu-2' : '&#xe0a6;',
			'clip-circle-small' : '&#xe0a7;',
			'clip-tree' : '&#xe0a8;',
			'clip-menu-3' : '&#xe0a9;',
			'clip-menu-4' : '&#xe0aa;',
			'clip-cloud' : '&#xe0ab;',
			'clip-download' : '&#xe0ac;',
			'clip-upload' : '&#xe0ad;',
			'clip-download-2' : '&#xe0ae;',
			'clip-upload-2' : '&#xe0af;',
			'clip-globe' : '&#xe0b0;',
			'clip-upload-3' : '&#xe0b1;',
			'clip-download-3' : '&#xe0b2;',
			'clip-earth-2' : '&#xe0b3;',
			'clip-network' : '&#xe0b4;',
			'clip-link' : '&#xe0b5;',
			'clip-link-2' : '&#xe0b6;',
			'clip-link-3' : '&#xe0b7;',
			'clip-link-4' : '&#xe0b8;',
			'clip-attachment' : '&#xe0b9;',
			'clip-attachment-2' : '&#xe0ba;',
			'clip-eye' : '&#xe0bb;',
			'clip-eye-2' : '&#xe0bc;',
			'clip-windy' : '&#xe0bd;',
			'clip-bookmark' : '&#xe0be;',
			'clip-bookmark-2' : '&#xe0bf;',
			'clip-brightness-high' : '&#xe0c0;',
			'clip-brightness-medium' : '&#xe0c1;',
			'clip-star' : '&#xe0c2;',
			'clip-star-2' : '&#xe0c3;',
			'clip-star-3' : '&#xe0c4;',
			'clip-star-4' : '&#xe0c5;',
			'clip-star-5' : '&#xe0c6;',
			'clip-star-6' : '&#xe0c7;',
			'clip-heart' : '&#xe0c8;',
			'clip-thumbs-up' : '&#xe0c9;',
			'clip-thumbs-up-2' : '&#xe0ca;',
			'clip-cursor' : '&#xe0cb;',
			'clip-stack-empty' : '&#xe0cc;',
			'clip-question' : '&#xe0cd;',
			'clip-notification' : '&#xe0ce;',
			'clip-notification-2' : '&#xe0cf;',
			'clip-question-2' : '&#xe0d0;',
			'clip-plus-circle' : '&#xe0d1;',
			'clip-plus-circle-2' : '&#xe0d2;',
			'clip-minus-circle' : '&#xe0d3;',
			'clip-minus-circle-2' : '&#xe0d4;',
			'clip-info' : '&#xe0d5;',
			'clip-info-2' : '&#xe0d6;',
			'clip-cancel-circle' : '&#xe0d7;',
			'clip-cancel-circle-2' : '&#xe0d8;',
			'clip-checkmark-circle' : '&#xe0d9;',
			'clip-checkmark-circle-2' : '&#xe0da;',
			'clip-close' : '&#xe0db;',
			'clip-close-2' : '&#xe0dc;',
			'clip-close-3' : '&#xe0dd;',
			'clip-checkmark' : '&#xe0de;',
			'clip-checkmark-2' : '&#xe0df;',
			'clip-close-4' : '&#xe0e0;',
			'clip-wave' : '&#xe0e1;',
			'clip-wave-2' : '&#xe0e2;',
			'clip-arrow-up-left' : '&#xe0e3;',
			'clip-arrow-up' : '&#xe0e4;',
			'clip-arrow-up-right' : '&#xe0e5;',
			'clip-arrow-right' : '&#xe0e6;',
			'clip-arrow-down-right' : '&#xe0e7;',
			'clip-arrow-down' : '&#xe0e8;',
			'clip-arrow-down-left' : '&#xe0e9;',
			'clip-arrow-left' : '&#xe0ea;',
			'clip-arrow-up-left-2' : '&#xe0eb;',
			'clip-arrow-up-2' : '&#xe0ec;',
			'clip-arrow-up-right-2' : '&#xe0ed;',
			'clip-arrow-right-2' : '&#xe0ee;',
			'clip-arrow-down-right-2' : '&#xe0ef;',
			'clip-arrow-down-2' : '&#xe0f0;',
			'clip-arrow-down-left-2' : '&#xe0f1;',
			'clip-arrow-left-2' : '&#xe0f2;',
			'clip-arrow' : '&#xe0f3;',
			'clip-arrow-2' : '&#xe0f4;',
			'clip-arrow-3' : '&#xe0f5;',
			'clip-arrow-4' : '&#xe0f6;',
			'clip-arrow-up-3' : '&#xe0f7;',
			'clip-arrow-right-3' : '&#xe0f8;',
			'clip-arrow-down-3' : '&#xe0f9;',
			'clip-arrow-left-3' : '&#xe0fa;',
			'clip-checkbox-unchecked' : '&#xe0fb;',
			'clip-checkbox' : '&#xe0fc;',
			'clip-checkbox-checked' : '&#xe0fd;',
			'clip-checkbox-unchecked-2' : '&#xe0fe;',
			'clip-square' : '&#xe0ff;',
			'clip-checkbox-partial' : '&#xe100;',
			'clip-checkbox-partial-2' : '&#xe101;',
			'clip-checkbox-checked-2' : '&#xe102;',
			'clip-checkbox-unchecked-3' : '&#xe103;',
			'clip-radio-checked' : '&#xe104;',
			'clip-radio-unchecked' : '&#xe105;',
			'clip-circle' : '&#xe106;',
			'clip-circle-2' : '&#xe107;',
			'clip-new-tab' : '&#xe108;',
			'clip-popout' : '&#xe109;',
			'clip-embed' : '&#xe10a;',
			'clip-code' : '&#xe10b;',
			'clip-seven-segment-0' : '&#xe10c;',
			'clip-seven-segment-1' : '&#xe10d;',
			'clip-seven-segment-2' : '&#xe10e;',
			'clip-seven-segment-3' : '&#xe10f;',
			'clip-seven-segment-4' : '&#xe110;',
			'clip-seven-segment-5' : '&#xe111;',
			'clip-seven-segment-6' : '&#xe112;',
			'clip-seven-segment-7' : '&#xe113;',
			'clip-seven-segment-8' : '&#xe114;',
			'clip-seven-segment-9' : '&#xe115;',
			'clip-share' : '&#xe116;',
			'clip-google' : '&#xe117;',
			'clip-google-plus' : '&#xe118;',
			'clip-facebook' : '&#xe119;',
			'clip-twitter' : '&#xe11a;',
			'clip-feed' : '&#xe11b;',
			'clip-youtube' : '&#xe11c;',
			'clip-youtube-2' : '&#xe11d;',
			'clip-vimeo' : '&#xe11e;',
			'clip-flickr' : '&#xe11f;',
			'clip-picassa' : '&#xe120;',
			'clip-dribbble' : '&#xe121;',
			'clip-forrst' : '&#xe122;',
			'clip-deviantart' : '&#xe123;',
			'clip-steam' : '&#xe124;',
			'clip-github' : '&#xe125;',
			'clip-github-2' : '&#xe126;',
			'clip-wordpress' : '&#xe127;',
			'clip-blogger' : '&#xe128;',
			'clip-tumblr' : '&#xe129;',
			'clip-yahoo' : '&#xe12a;',
			'clip-tux' : '&#xe12b;',
			'clip-apple' : '&#xe12c;',
			'clip-finder' : '&#xe12d;',
			'clip-android' : '&#xe12e;',
			'clip-windows' : '&#xe12f;',
			'clip-windows8' : '&#xe130;',
			'clip-soundcloud' : '&#xe131;',
			'clip-skype' : '&#xe132;',
			'clip-reddit' : '&#xe133;',
			'clip-linkedin' : '&#xe134;',
			'clip-lastfm' : '&#xe135;',
			'clip-stumbleupon' : '&#xe136;',
			'clip-stackoverflow' : '&#xe137;',
			'clip-pinterest' : '&#xe138;',
			'clip-xing' : '&#xe139;',
			'clip-foursquare' : '&#xe13a;',
			'clip-paypal' : '&#xe13b;',
			'clip-paypal-2' : '&#xe13c;',
			'clip-libreoffice' : '&#xe13d;',
			'clip-file-pdf' : '&#xe13e;',
			'clip-file-openoffice' : '&#xe13f;',
			'clip-file-word' : '&#xe140;',
			'clip-file-excel' : '&#xe141;',
			'clip-file-zip' : '&#xe142;',
			'clip-file-powerpoint' : '&#xe143;',
			'clip-file-xml' : '&#xe144;',
			'clip-file-css' : '&#xe145;',
			'clip-html5' : '&#xe146;',
			'clip-css3' : '&#xe147;',
			'clip-chrome' : '&#xe148;',
			'clip-firefox' : '&#xe149;',
			'clip-IE' : '&#xe14a;',
			'clip-opera' : '&#xe14b;',
			'clip-safari' : '&#xe14c;',
			'clip-IcoMoon' : '&#xe14d;',
			'clip-fullscreen-exit-alt' : '&#xe14e;',
			'clip-fullscreen' : '&#xe14f;',
			'clip-fullscreen-alt' : '&#xe150;',
			'clip-fullscreen-exit' : '&#xe151;',
			'clip-transfer' : '&#xe152;',
			'clip-left-quote' : '&#xe153;',
			'clip-right-quote' : '&#xe154;',
			'clip-heart-2' : '&#xe155;',
			'clip-study' : '&#xe156;',
			'clip-wand' : '&#xe157;',
			'clip-zoom-in-2' : '&#xe158;',
			'clip-zoom-out-2' : '&#xe159;',
			'clip-search-3' : '&#xe15a;',
			'clip-user-6' : '&#xe15b;',
			'clip-users-3' : '&#xe15c;',
			'clip-archive' : '&#xe15d;',
			'clip-keyboard-2' : '&#xe15e;',
			'clip-paperclip' : '&#xe15f;',
			'clip-home-3' : '&#xe160;',
			'clip-chevron-up' : '&#xe161;',
			'clip-chevron-right' : '&#xe162;',
			'clip-chevron-left' : '&#xe163;',
			'clip-chevron-down' : '&#xe164;',
			'clip-error' : '&#xe165;',
			'clip-add' : '&#xe166;',
			'clip-minus' : '&#xe167;',
			'clip-alert' : '&#xe168;',
			'clip-pictures-2' : '&#xe169;',
			'clip-atom-3' : '&#xe16a;',
			'clip-eyedropper-2' : '&#xe16b;',
			'clip-warning' : '&#xe16d;',
			'clip-expand' : '&#xe16e;',
			'clip-clock-2' : '&#xe16f;',
			'clip-target' : '&#xe170;',
			'clip-loop' : '&#xe171;',
			'clip-refresh' : '&#xe173;',
			'clip-spin-alt' : '&#xe172;',
			'clip-exit' : '&#xe174;',
			'clip-enter' : '&#xe175;',
			'clip-locked' : '&#xe176;',
			'clip-unlocked' : '&#xe177;',
			'clip-arrow-5' : '&#xe16c;',
			'clip-music-3' : '&#xe178;',
			'clip-droplet-3' : '&#xe179;',
			'clip-credit' : '&#xe17a;',
			'clip-phone-3' : '&#xe17b;',
			'clip-phone-4' : '&#xe17c;',
			'clip-map-2' : '&#xe17d;',
			'clip-clock-3' : '&#xe17e;',
			'clip-calendar-2' : '&#xe17f;',
			'clip-calendar-3' : '&#xe180;',
			'clip-pie' : '&#xe181;',
			'clip-airplane' : '&#xe182;',
			'clip-tree-2' : '&#xe183;',
			'clip-sun' : '&#xe184;',
			'clip-bubble-paperclip' : '&#xe185;'
		},
		els = document.getElementsByTagName('*'),
		i, attr, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		attr = el.getAttribute('data-icon');
		if (attr) {
			addIcon(el, attr);
		}
		c = el.className;
		c = c.match(/clip-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
};