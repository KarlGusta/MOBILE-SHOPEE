<?php 
    $product_shuffle = $product->getData();
?>

<!-- Top sale -->
<section id="top-sale">
    <div class="container py-5">
        <h4 class="font-rubik font-size-20">Top sale</h4>

        <!--Owl Carousel-->
        <div class="owl-carousel owl-theme">
            <?php foreach ($product_shuffle as $item) {?>
            <div class="item py-2">
                <div class="product font-rale">
                    <a href="#"><img src="./assets/products/1.png" alt="product1" class="img-fluid"></a>
                    <div class="text-center">
                        <h6>Samsung Galaxy 10</h6>
                        <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                            <span>$152</span>
                        </div>
                        <button type="submit" class="btn btn-warning">Add to Cart</button>
                    </div>
                </div>
            </div>
            <?php } // Closing foreach function?>
        </div>
        <!--! Owl Carousel-->
    </div>
</section>
<!--!Top sale -->