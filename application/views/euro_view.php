<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>euro</title>
	<link type='text/css' rel="stylesheet" href='<?php  echo base_url(); ?>css/styles.css'/>
</head>
<body>

	<div id="root">
		<p>euro</p>
		<div id="flashContainer">
			<p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
		</div>
	</div>

	<script type="text/javascript" src="<?php echo base_url(); ?>js/swfobject.js"></script>
	<script type="text/javascript">
		
		var swfVersionStr = "9.0.0";
		
		var xiSwfUrlStr = "<?php echo base_url(); ?>swfs/expressInstall.swf";

		var flashvars = {};
		flashvars.baseUrl = "<?php echo base_url(); ?>";
		
		var params = {};
		params.quality = "high";
		params.allowscriptaccess = "sameDomain";
		params.allowfullscreen = "true";
		params.menu = "false";
		params.wmode = "opaque";

		var attributes = {};
		attributes.id = "flashApp";
		attributes.name = "flashApp";

		swfobject.embedSWF("<?php echo base_url(); ?>swfs/euro.swf", "flashContainer", "726", "400", swfVersionStr, xiSwfUrlStr, flashvars, params, attributes);
	</script>

</body>
</html>