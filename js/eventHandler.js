function onWindowResize() {
	var PageMenue = document.getElementById('PageMenue');
	if (PageMenue != null){
		PageMenue.style.width = "100%";
		PageMenue.style.height = window.innerHeight + "px";
	}
}