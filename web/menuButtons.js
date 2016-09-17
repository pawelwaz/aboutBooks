var buttons = document.getElementsByClassName('menuButton');
for(var i = 0; i < buttons.length; i++) {
	buttons[i].onmouseover = setButtonOn;
	buttons[i].onmouseout = setButtonOff;
}

function setButtonOn() {
	this.style.backgroundColor = "#530053";
}

function setButtonOff() {
	this.style.backgroundColor = "#000000";
}