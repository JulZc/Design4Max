function onWindowResize() {
	var PageMenue = document.getElementById('PageMenue');
	if (PageMenue != null){
		PageMenue.style.width = window.innerWidth + "px";
		PageMenue.style.height = window.innerHeight + "px";
	}
}