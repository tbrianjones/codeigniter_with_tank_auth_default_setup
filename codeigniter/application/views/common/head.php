<!-- meta title -->
<?php if( isset( $meta_title ) && $meta_title != '' ) { ?>
	<title><?php echo $meta_title; ?></title>
	<META NAME="Title" CONTENT="<?php echo $meta_title; ?>">
<?php } ?>

<!-- meta description -->
<?php if( isset( $meta_description ) && $meta_description != '' ) { ?>
	<META NAME="Description" CONTENT="<?php echo $meta_description; ?>">
<?php } ?>

<!-- css files -->
<?php
	if( isset( $css ) && is_array( $css ) && count( $css > 0 ) ) {
		foreach( $css as $stylesheet )
			echo "\n" . $stylesheet;
	}
?>

<!-- google analytics -->
<?php
	if( isset( $google_analytics ) && $google_analytics != '' )
		echo $google_analytics;
?>

<!-- page specific headers -->
<?php
	if( isset( $headers ) && is_array( $headers ) && count( $headers > 0 ) ) {
		foreach( $headers as $header )
			echo "\n" . $header;
	}
?>