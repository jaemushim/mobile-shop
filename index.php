<?php
    ob_start();
    /* Include header.php */
    @include ('header.php');
?>

<?php
    /* Load Template */

        /* Include main-banner.php */
        @include ('template/_main-banner.php');

        /* Include _hottest-Item.php */
        @include ('template/_hot-item.php');

        /* Include _promotion-banner.php */
        @include ('template/_promotion-banner.php');

         /* Include _special-price.php */
         @include ('template/_special-price.php');

         /* Include _blog.php */
         @include ('template/_blog.php');
?>

<?php
    /* Include footer.php */
    @include ('footer.php');
?>