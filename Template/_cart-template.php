        <!--Shopping Cart Section-->
        <section id="cart" class="py-3 mb-5">
            <div class="container-fluid w-75">
                <h5 class="font-baloo font-size-20">Shopping Cart</h5>

                <!--Shopping Cart Items-->
                <div class="row">
                    <div class="col-sm-9">
                        <?php
                        foreach ($product->getData('cart') as $item) :
                            // to get the product using the item id
                            $cart = $product->getProduct($item['item_id']);
                            $subTotal = array_map(function ($item) {
                        ?>
                                <!--Cart item-->
                                <div class="row border-top py-3 mt-3">
                                    <div class="col-sm-2">
                                        <img src="<?php echo $item['item_image'] ?? './assets/products/1.png';?>" style="height: 120px;" alt="cart1" class="img-fluid">
                                    </div>
                                    <div class="col-sm-8">
                                        <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? 'Unknown';?></h5>
                                        <small>by <?php echo $item['item_brand'] ?? 'Brand'?></small>

                                        <!--Product rating-->
                                        <div class="d-flex">
                                            <div class="rating text-warning font-size-12">
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="far fa-star"></i></span>
                                            </div>
                                            <a href="#" class="px-2 font-rale font-size-14">20, 534 ratings</a>
                                        </div>
                                        <!--!Product rating-->

                                        <!--Product Qty-->
                                        <div class="qty d-flex pt-2">
                                            <div class="d-flex font-rale w-25">
                                                <button class="qty-up border bg-light" data-id="prod1"><i class="fas fa-angle-up"></i></button>
                                                <input type="text" class="qty-input border px-2 w-100 bg-light" disabled value="1" placeholder="1" data-id="prod1">
                                                <button class="qty-down border bg-light" data-id="prod1"><i class="fas fa-angle-down"></i></button>
                                            </div>
                                            <button class="btn font-baloo text-danger px-3 border-right">Delete</button>
                                            <button class="btn font-baloo text-danger px-3">Save for Later</button>
                                        </div>
                                        <!--!Product Qty-->
                                    </div>

                                    <!--Product Price-->
                                    <div class="col-sm-2 text-right">
                                        <div class="font-size-20 text-danger font-baloo">
                                            $<span class="product_price"><?php echo $item['item_price'] ?? 0; ?></span>
                                        </div>
                                    </div>
                                    <!--!Product Price-->

                                </div>
                                <!--!Cart item-->
                        <?php
                            return $item['item_price'];
                            }, $cart); // closing array_map function
                        endforeach;
                        print_r($subTotal);
                        ?>
                    </div>

                    <!--Subtotal Section-->
                    <div class="col-sm-3">
                        <div class="sub-total border text-center mt-2">
                            <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i>Your order
                                is eligible for delivery.</h6>
                            <div class="border-top py-4">
                                <h5 class="font-baloo font-size-20">Subtotal(2 items): &nbsp; <span class="text-danger">$</span><span class="text-danger" id="deal-price">152</span>
                                </h5>
                                <button type="submit" class="btn btn-warning mt-3">Proceed to Buy</button>
                            </div>
                        </div>
                    </div>
                    <!--!Subtotal Section-->
                </div>
                <!--!Shopping Cart Items-->
            </div>
        </section>
        <!--!Shopping Cart Section-->