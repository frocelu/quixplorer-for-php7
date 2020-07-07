<?php
/**
 footer for html-page
 */
function show_footer()
{
	?>
    <hr>
    <small>
        <a class="title" href="https://github.com/frocelu/quixplorer-for-php7/tree/frocelu%40quixplorer-for-php7" target="_blank"> QuiXplorer for php 7 Version 2.5.8</a>
   </small>
   <small>Thanks for usage!</small>
   <?php show_login(); ?>
   </center>
   </body>
   </html>
   <?php
}

/**
  If no user is logged in, show the login option
  */
function show_login ()
{
	if (login_is_user_logged_in())
		return;
	echo '<small> - <a href="' . make_link("login", NULL) . '">' . $GLOBALS['messages']['btnlogin'] . "</a></small>";
}
?>
