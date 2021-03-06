/* Load this script using conditional IE comments if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'icomoon\'">' + entity + '</span>' + html;
	}
	var icons = {
			'icon-user' : '&#x75;',
			'icon-facebook' : '&#x66;',
			'icon-twitter' : '&#x74;',
			'icon-youtube' : '&#x79;',
			'icon-vimeo' : '&#x76;',
			'icon-pinterest' : '&#x70;',
			'icon-bell' : '&#x63;',
			'icon-newspaper' : '&#x61;',
			'icon-arrow-right' : '&#x3e;',
			'icon-arrow-left' : '&#x3c;',
			'icon-google-plus' : '&#x67;',
			'icon-feed' : '&#x72;',
			'icon-menu' : '&#x6f;',
			'icon-user-2' : '&#x62;',
			'icon-trophy' : '&#x64;',
			'icon-search' : '&#x73;'
		},
		els = document.getElementsByTagName('*'),
		i, attr, html, c, el;
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
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
};