<?php require 'inc/head.php';
require 'inc/data/products.php';

if (!isset($_SESSION['loginname'])) {
    header('Location: login.php');
}

?>
<section class="cookies container-fluid">
    <div class="row">

        <?php

        $cart = [];

        if (isset($_SESSION['cart'])) {

            foreach ($_SESSION['cart'] as $incart ){

                $Product = $catalog[$incart]['name'];
        ?>
                <p><?= $Product; ?></p>
        <?php }
        } else echo 'Your cart is empty!';
        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>