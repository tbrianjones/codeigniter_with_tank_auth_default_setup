<!-- flash message animations --> 
<script type="text/javascript">
  
  setTimeout( function() {
    $( '#flash_message' ).slideDown( 'slow' );
  }, 500 );
  setTimeout( function() {
    $( '#flash_message' ).slideUp( 'slow' );
  }, 5000 );
  
  setTimeout( function() {
    $( '#flash_error' ).slideDown( 'slow' );
  }, 500 );
  setTimeout( function() {
    $( '#flash_error' ).slideUp( 'slow' );
  }, 5000 );
  
</script>

<!-- flash message -->
<?php
	if( $message = $this->session->flashdata('message') )
		echo '<p id="flash_message" class="flash_message message">'.$message.'</p>';
?>

<!-- flash error -->
<?php
	if( $message = $this->session->flashdata('error_message') )
		echo '<p id="flash_error" class="flash_message error">'.$message.'</p>';
?>

<div id="header">
  
	<?php // $this->load->view( 'common/navigation/navigation' ); ?>
	
	<p>Header</p>
	
</div>