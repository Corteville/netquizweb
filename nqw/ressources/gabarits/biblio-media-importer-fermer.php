<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php echo TXT_NETQUIZ_WEB?> - <?php echo TXT_MEDIAS ?></title>
	<script type="text/javascript">

		// Modifier la valeur au niveau du parent
		val = unescape("<?php echo $media->get("id_media") . " - " . $media->get("titre")?>");
		parent.modifierChampMedia(val);
	
		// Fermer la fenêtre
		parent.$.fancybox.close();
		
	</script>
	
</head>

<body>
						
</body>
</html>