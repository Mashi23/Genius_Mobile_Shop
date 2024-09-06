<?php
$info_shuffle = $info->getData();
shuffle($info_shuffle );

if (isset($_POST['category_submit'])){
    // call method addToCart
    $Cart->addToCart($_POST['user_id'], $_POST['item_id']);

}

$in_cart = $Cart->getCartId($info->getData('cart'));

?>

<br>

<section id="category">
    <div class="container">
        <h4 class="font-rubik fs-2 text-center">Category</h4>
        <hr>
        <div id="filters" class="button-group text-right font-rale font-size-16">
            <button class="btn is-checked" data-filter="*">All Brand</button>
            <button class="btn" data-filter=".iPhone">iPhone</button>
            <button class="btn" data-filter=".Samsung">Samsung</button>
            <button class="btn" data-filter=".Redmi">Redmi</button>
            <button class="btn" data-filter=".Google">Google</button>
            <button class="btn" data-filter=".Vivo">Vivo</button>
            <button class="btn" data-filter=".Sony">Sony</button>
        </div>

        <div class="grid">
            <?php array_map(function ($item)use($in_cart){ ?>
            <div class="grid-item border <?php echo $item['item_brand']??"Brand";?>">
                <div class="item py-2" style="width: 200px;">
                    <div class="product font-rubik">
                        <a href="<?php printf('%s?item_id=%s', 'info.php', $item['item_id']);?>"><img src="<?php echo $item['item_image']??"./assets/products/1.png"; ?>" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6><?php echo $item['item_name']??"Unknown";?></h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>Rs.<?php echo $item['item_price']?? 0 ?></span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                                <input type="hidden" name="user_id" value="<?php echo 1 ;?>">
                                <?php
                                if (in_array($item['item_id'], $in_cart)){
                                    echo '<button type="submit" disabled class="btn btn-info font-size-12">In the Cart</button>';
                                }else{
                                    echo '<button type="submit" name="category_submit" class="btn btn-success font-size-12">Add to Cart</button>';
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php },$info_shuffle)?>
        </div>
    </div>
</section>

<br>