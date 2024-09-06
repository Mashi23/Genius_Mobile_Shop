

<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h5 class="font-rubik fs-3  text-center">Shopping Cart</h5>

        <!--  shopping cart items   -->
        <div class="row">
            <div class="col-sm-9">

                <!--Empty cart-->
                <div class="row border-top py-3 mt-3">
                    <div class="col-sm-12 text-center py-2">
                        <img src="./assets/Cart.png" alt="Empty Cart" class="img-fluid" style="height: 200px;">
                        <p class="font-rale font-size-20">Empty Cart</p>
                    </div>
                </div>

                <!--Empty cart-->

            </div>
            <!-- subtotal section-->
            <div class="col-sm-3">
                <div class="sub-total border text-center mt-2">
                    <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i> Your order is eligible for FREE Delivery.</h6>
                    <div class="border-top py-4">
                        <h5 class="font-rubik font-size-20">Total Price(<?php echo isset($subTotal)? count ($subTotal): 0; ?> Item) &nbsp; <span class="text-danger"><br>Rs.<span class="text-danger" id="deal-price"><?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?></span> </span> </h5>
                        <a href="payment.php"><button type="submit" class="btn btn-warning mt-3">Proceed to Buy</button></a>
                    </div>
                </div>
            </div>
            <!-- !subtotal section-->
        </div>
        <!--  !shopping cart items   -->
    </div>
</section>
