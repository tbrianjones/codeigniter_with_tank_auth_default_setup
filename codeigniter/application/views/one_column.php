<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/strict.dtd">
<html>

	<!-- head -->
	<head>
		<?php
			// $this->data contains common data usually set in MY_Controller.php
			//	or in 
			$this->load->view( 'common/head.php', $this->head );
		?>
	</head>

	<!-- body -->
	<body>
		<div id="body_wrapper">
			<?php
				$this->load->view( 'common/header.php' );
				$this->load->view( 'common/content.php' );
				$this->load->view( 'common/footer.php' );
			?>
		</div>
	</body>
	
</html>