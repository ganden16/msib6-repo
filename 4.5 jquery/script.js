$(document).ready(function() {
	const sound = document.getElementById('sound');
	$("#lion").hover(function() {
		sound.play()
		console.log('hover')

	})
	$("#lion").click(function() {
		console.log('click')
		sound.play()
	})
})