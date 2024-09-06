<?php
 $info_shuffle = $info->getData();
 shuffle($info_shuffle );

if($_SERVER['REQUEST_METHOD'] == "POST"){
    if (isset($_POST['new-phones_submit'])) {
        // call method addToCart
        $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
    }
}
?>

<section id="new">
    <div class="container">
        <h4 class="font-rubik fs-2 text-center">New Phones</h4>
        <hr>
        <div class="owl-carousel owl-theme">
            <?php foreach ($info_shuffle as $item){?>
                <div class="item py-2">
                    <div class="product font-rubik">
                        <a href="<?php printf('%s?item_id=%s', 'info.php', $item['item_id']);?>"><img src="<?php echo $item['item_image']??"./assets/products/1.png";?>" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6><?php echo $item['item_name']??"Unknown"; ?></h6>
                            <div class="rating color-orange font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>Rs.<?php echo $item['item_price']??'0';?></span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                                <input type="hidden" name="user_id" value="<?php echo 1 ;?>">
                                <?php
                                if (in_array($item['item_id'], $Cart->getCartId($info->getData('cart')) ?? [])){
                                    echo '<button type="submit" disabled class="btn btn-info font-size-12">In the Cart</button>';
                                }else{
                                    echo '<button type="submit" name="new-phones_submit" class="btn btn-success font-size-12">Add to Cart</button>';
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <!-- !owl carousel -->

    </div>
</section>
<!-- !New Phones -->
