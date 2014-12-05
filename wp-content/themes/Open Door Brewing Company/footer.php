        
        <footer class="masterFooter">
        <nav class="content center">
              <table class="tableFixed">
                <tr>
                    <td class="tdHalf footerLeft">
                        <a href="https://www.facebook.com/opendoorbrewco" title="Facebook" target="_blank">
                            <div class="fbFooter rotateSubtle"></div>
                        </a>
                        <a href="https://twitter.com/OpenDoorBrewCo" title="Twitter" target="_blank">
                            <div class="twitterFooter rotateSubtle"></div>
                        </a>
                    </td>
                    <td class="tdHalf footerRight">
						<?php $page = get_page_by_title("Contact");?>
                        <a href="<?php echo get_permalink( $page->ID );?>" title="Contact Us" class="moveUp">
                            <h2>Contact Us</h2>
                        </a>
                    </td>
                </tr>
            </table>
            <!--&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?>-->
        </nav>
        
        
    </footer>

	</div>

	<?php wp_footer(); ?>
	
	<!-- Don't forget analytics -->
	
</body>

</html>
