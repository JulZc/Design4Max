function fadeinMenue(){
	var fadeDive = document.createElement("div");
	fadeDive.style.backgroundColor = "rgba(00, 00, 00, 0.7)";
	fadeDive.setAttribute("PageMenue", "fadeDiv");
	
	
	fadeDive.style.position = "fixed";
	fadeDive.style.top = "0px";
	fadeDive.style.left = "0px";
	fadeDive.style.width = window.innerWidth + "px";
	fadeDive.style.height = window.innerHeight + "px";
	document.body.appendChild(fadeDive);   

	console.log(window.innerHeight + "px Höhe");
	console.log(window.innerWidth + "px Breite");
}