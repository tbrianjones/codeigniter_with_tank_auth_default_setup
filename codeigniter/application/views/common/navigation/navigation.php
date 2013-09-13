<?php

	// this is very basic and will need custom logic to work correctly

	// clear classes
	$class_page_one		= '';
	$class_page_two		= '';
	
	// current page	
	$class_page_one = 'current';
	
	if( $this->method == 'page_two' )
		$class_page_two = 'current';
	
?>

<!-- primary navigation -->
<div id="primary_navigation">
	<a class="<?php echo $class_page_one; ?>" href="/page_one/">Page One</a><a class="<?php echo $class_page_two; ?>" href="/page_two/">Page Two</a>
</div>