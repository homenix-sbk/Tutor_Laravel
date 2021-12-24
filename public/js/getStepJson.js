$.getJSON('js/step.json', function(value) {
	for(let i=0; i<value.length; i++) {
		$(document.getElementsByClassName('stepNum'))
		.before('<span class="char' + (i + 1) + '">' + value[i].char + '</span>')
	}
});