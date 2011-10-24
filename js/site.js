$(document).ready(function(){
	
	function init () {
		$('#btnFade').click (function () {
			$('#flashApp').fadeOut('slow',function () {
				alert ('done');
			});
		});
	}
	
	init ();
});