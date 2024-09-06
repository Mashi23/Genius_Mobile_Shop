<?php
    $item_id = $_GET['item_id']??1;
    foreach ($info->getData()as $item):
        if ($item['item_id'] == $item_id):
?>

<section id="info" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo $item['item_image']?? "./assets/products/1.png"?>" alt="product" class="img-fluid">
                <div class="col-6">
                    <!-- product qty section -->
                    <div class="qty">
                        <h6 class="font-rubik fw-medium">Quantity</h6>
                        <div class="px-4 d-flex font-rale">
                            <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                            <input type="text" data-id="pro1" class="qty_input border px-2 w-25  bg-light" disabled value="1" placeholder="1">
                            <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                        </div>
                    </div>
                    <!-- !product qty section -->
                </div>
                <div class="col-6">
                    <!-- color -->
                    <div class="color my-3">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-rubik fw-medium">Color:</h6>
                            <div class="p-2 color-red-bg rounded-circle"><button class="btn font-size-14"></button></div>
                            <div class="p-2 color-gray-bg rounded-circle"><button class="btn font-size-14"></button></div>
                            <div class="p-2 color-second-bg rounded-circle"><button class="btn font-size-14"></button></div>
                        </div>
                    </div>
                    <!-- !color -->
                </div>


                <!-- size -->
                <div class="size my-3">
                    <h6 class="font-rubik fw-medium">Size :</h6>
                    <div class="d-flex justify-content-between w-75">
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">4GB RAM</button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">6GB RAM</button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">8GB RAM</button>
                        </div>
                    </div>
                </div>
                <!-- !size -->
            </div>

            <br>

            <div class="col-sm-6 py-5">
                <h5 class="font-rubik fs-4"><?php echo $item['item_name']??"Unknown"; ?></h5>
                <small>by <?php echo $item['item_brand']??"Brand"; ?></small>
                <div class="d-flex">
                    <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <a href="#" class="px-2 font-rubik font-size-14">15,534 ratings | 1K+ answered questions</a>
                </div>
                <hr class="m-0">

                <table class="my-3">
                    <tr class="font-rubik font-size-14">
                        <td>M.R.P:</td>
                        <td><strike>Rs.339,000</strike></td>
                    </tr>
                    <tr class="font-rubik font-size-14">
                        <td>Deal Price:</td>
                        <td class="font-size-20 text-danger">Rs.<span><?php echo $item['item_price']?? 0; ?></span><small class="text-dark font-size-12">&nbsp;&nbsp;Inclusive of all taxes</small></td>
                    </tr>
                    <tr class="font-rubik font-size-14">
                        <td>You Save:</td>
                        <td><span class="font-size-16 text-danger">Rs.5,900</span></td>
                    </tr>
                </table>

                <div id="policy">
                    <div class="d-flex">
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-retweet border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">10 Days <br> Replacement</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-truck  border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rubik font-size-12">Daily Tuition <br>Deliverd</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-check-double border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rubik font-size-12">1 Year <br>Warranty</a>
                        </div>
                    </div>
                </div>
                <!--    !policy -->
                <hr>

                <!-- order-details -->
                <div id="order-details" class="font-rubik d-flex flex-column text-dark">
                    <small>Estimated delivery date : May 29  - June 1</small>
                    <small>Sold by <a href="#">Daily Electronics </a>(4.8 out of 5 | 25,558 ratings)</small>
                    <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer - 552010</small>
                </div>
                <!-- !order-details -->
                <br>

                <div class="form-row pt-2 font-size-16 font-rubik">
                    <div class="col w-50">
                        <button type="submit" class="btn btn-danger form-control">Buy Now</button>
                    </div>
                    <br>
                    <div class="col w-50">
                        <?php
                        if (in_array($item['item_id'], $Cart->getCartId($info->getData('cart')) ?? [])){
                            echo '<button type="submit" disabled class="btn btn-info font-size-16 form-control">In the Cart</button>';
                        }else{
                            echo '<button type="submit" name="_available_submit" class="btn btn-success font-size-16 form-control">Add to Cart</button>';
                        }
                        ?>
                    </div>
                </div>


            </div>

            <div class="col-12">
                <h6 class="font-awesome fw-medium fs-5">Product Description</h6>
                <hr>
                <p class="font-awesome font-size-16">The iPhone 14 Plus boasts a 6.7-inch Super Retina XDR display, powered by the A16 Bionic chip for exceptional performance and efficiency. Its advanced dual-camera system,
                    including a 12MP primary and ultra-wide lens, ensures stunning photos and videos, while the 12MP TrueDepth front camera delivers excellent selfies and FaceTime calls. With 5G connectivity, all-day battery life, and the latest iOS 16, this device offers a seamless and intuitive user experience. </p>
                <p class="font-awesome font-size-16">Enhanced durability with Ceramic Shield, aerospace-grade aluminum, and IP68 water and dust resistance ensures the iPhone 14 Plus can withstand everyday wear and tear. Features like MagSafe technology for easy accessory attachment, spatial audio with Dolby Atmos for an
                    immersive sound experience, and robust privacy settings make this phone a top choice for those seeking both style and substance. Available in various colors, the iPhone 14 Plus combines cutting-edge technology with elegant design.</p>
            </div>
        </div>

    </div>
</section>

<?php
            endif;
            endforeach;
            ?>