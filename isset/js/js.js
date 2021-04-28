
window.onload = function(){ 
    var btn_menu = document.getElementById('nav-menu');
	btn_menu.onclick = function(){
		var menu = document.getElementById('show-menu');
		menu.classList.toggle('show-menu');
	}
};