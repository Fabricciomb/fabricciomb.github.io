var layout = document.getElementById("layout");
var onToggle = document.getElementById("btn-toggle");
var offToggle = document.getElementById("close-toggle");
var toggle = document.getElementById("toggle");

//Whating
function loadSite(state) {
	setTimeout(function(){
    	if(state == -1){
    		document.getElementById("load").remove();
    		document.getElementById("toggle").style.display='block';
			document.getElementById("layout").style.display='block';
    	}
	}, 1000);
}
//Toggle
Toggle();
function Toggle(){
	onToggle.onclick = function(){
		toggle.classList.add("ontoggle");
		layout.style.opacity = ".8";
	}
	offToggle.onclick = function(){
		layout.style.opacity = "1";
		toggle.classList.remove("ontoggle");
	}
};