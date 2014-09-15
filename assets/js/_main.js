var $ = jQuery;
$(function(){
	var nav = responsiveNav("#header-navbar-collapse", {
	  animate: true,
	  transition: 284,
	  label: "<i class='fa fa-bars'></i>",
	  insert: "before",
	  customToggle: "",
	  closeOnNavClick: false,
	  openPos: "relative",
	  navClass: "nav-collapse",
	  navActiveClass: "js-nav-active",
	  jsClass: "js",
	});

});
