<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	/* Display Custom Field Data */
	<?php $key="url"; echo get_post_meta($post->ID, $key, true); ?>
    
    /* Display Custo field if exists */
    <?php $image=get_post_meta($post->ID, 'url', true);
	if($image): ?>
    <img src="<?php echo $image; ?>" alt=""/>
    <?php endif; ?>
    
    /* conditional custom field */
    <?php $url=get_post_meta($post->ID, 'url', true);
	if($url){
		echo $url;
	}else{
		the_permalink();
	}
	?>


</body>
</html>