var navbar = document.getElementsByTagName("nav")[0];

window.onscroll = function(){
	if (window.scrollY > 1) {
		navbar.id = "scrolled";
	} else if (window.scrollY < 1) {
		navbar.id = "";
	}
};
