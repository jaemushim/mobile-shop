<?php
ob_start();
    /* Include header.php */
    @include ('header.php');
?>

<?php
    /* Load Template */

        /* Include _product.php */
        @include ('template/_product.php');
        
        /* Include _hottest-Item.php */
        @include ('template/_hot-item.php');
?>

<?php
    /* Include footer.php */
    @include ('footer.php');
?>