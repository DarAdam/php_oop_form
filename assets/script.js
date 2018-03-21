// Get the modal
window.onload = function() {
}
function show_login() {
	document.getElementById('id01').style.display="block";
}

// When the user clicks anywhere outside of the modal, close it

window.onclick = function(event) {
	var modal = document.getElementById('id01');
    if (event.target == modal) {
		console.log(modal);
		console.log(modal.style.display);
        modal.style.display = "none";
    }
}

