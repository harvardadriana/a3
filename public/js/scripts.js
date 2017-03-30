window.onload = function() {

	var word = document.getElementById("word");
	var addPoints = document.getElementById("addPoints");

	word.addEventListener("keyup", function(evt) {

		var wordLength = document.getElementById("word").value.length; 

		if( wordLength >= 7) {

			addPoints.style.display = "block";

		} else {

			addPoints.style.display = "none";
		}
		
	}, false);

}