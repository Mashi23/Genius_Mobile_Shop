<?php
ob_start();

include('header1.php');
?>

<?php

/*  cart   */
count($info->getData('cart')) ? include ('Templates/_cart.php') :  include ('Templates/notFound/_cart_notFound.php');
/*  cart  */

include ('Templates/_wishlist_template.php');

include ('Templates/_new-phones.php');



?>

<?php

include ('footer.php');
?>
