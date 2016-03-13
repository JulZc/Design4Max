function fadeinMenue(){
	var fadeDiv = document.createElement("div");
	fadeDiv.style.backgroundColor = "rgba(00, 00, 00, 0.9)";
	fadeDiv.setAttribute("id", "PageMenue");
	
	
	fadeDiv.style.position = "fixed";
	fadeDiv.style.top = "0px";
	fadeDiv.style.left = "0px";
	fadeDiv.style.width = window.innerWidth + "px";
	fadeDiv.style.height = window.innerHeight + "px";
	document.body.appendChild(fadeDiv);  
	fadeDiv.innerHTML = "<ul class='fadeDivUL' onclick='rmMenue()'><li class='fadeDivLI'><a href='#'>PHP</a></li><li class='fadeDivLI'><a href='#'>C#</a></li><li class='fadeDivLI'><a href='#'>JavaScript</a></li></ul>";	
}

function rmMenue(){
	var fadeDiv = document.getElementById('PageMenue');
	fadeDiv.parentNode.removeChild(fadeDiv);
}