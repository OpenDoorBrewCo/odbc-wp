<?php
	/*
		Template Name: Email Submit Form
	*/
?>

<?php get_header(); ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

	<?php the_post(); ?>

	<div id='main-content'>
		<div class="entry">

			<?php the_content(); ?>
			
			<?php
				// display form if user has not clicked submit
				if (!isset($_POST["submit"])) {
					?>
				<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					<section id="contactForm" class="center">
						<h3>Let us know your thoughts</h3>
						<textarea name ="message" id="txtContact" runat="server" rows="8" cols="80" class="content shadow"></textarea>
						<input type="submit" name="submit" id="btnContactSubmit" Class="center" ></input>
					</section>
				</form>
				<?php
				} else {    // the user has submitted the form
				  // Check if the "from" input field is filled out
					$from = "technical@opendoorbrewco.com"; // sender
					$subject = "Contact Message";
					$message = $_POST["message"];
					// message lines should not exceed 70 characters (PHP rule), so wrap it
					$message = wordwrap($message, 70);
					// send mail
					mail("technical@opendoorbrewco.com",$subject,$message,"From: $from\n");
					echo "Thank you for sending us feedback";
			  }
			 ?>
			
			
		</div>
	</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
</html>

