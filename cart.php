<?php
ob_start();
    /* Include header.php */
    @include ('header.php');
?>

<?php
    /* Load Template */

        /* Include cart.php */
        @include ('template/_cart.php');

?>

<?php
    /* Include footer.php */
    @include ('footer.php');
?>