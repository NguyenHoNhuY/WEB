<div class="products" data-aos="zoom-in">
    <?php
    $hihi;
    // foreach($data['product'] as $key => $value){
    for ($i = 0; $i < 8; $i++) {
        $hihi = $data["product"][$i]["id"];
    ?>
        <div class="col">
            <div class="product-img">
                <div class="img img1"><img src="<?php echo URL_LAYOUT . 'img/product/' . $data["product"][$i]["image1"]; ?>" alt=""></div>
                <div class="img img2"><img src="<?php echo URL_LAYOUT . 'img/product/' . $data["product"][$i]["image1"]; ?>" alt=""></div>
                <a href="#" class="wishlist"><i class="fas fa-heart"></i></a>
                <div class="hover-button">
                    <div class="bt-view flex bt" id="<?php echo $i ?>">
                        <span class="flex view">Quick View</span>
                        <span class="bt-icon flex"> <i class="far fa-eye"></i></span>
                    </div>
                    <a class="bt flex bt" href="<?php echo URL . 'layout/detail/' . $data["product"][$i]["id"]; ?>">
                        <span class="flex view">detail</span>
                        <span class="bt-icon flex"> <i class="far fa-eye"></i></span>
                    </a>
                    <a class="bt-add flex bt addCart" href="<?php echo URL . 'cart/store/' . $data["product"][$i]["id"]; ?>">
                        <span class="flex">Quick Shop</span>
                        <span class="bt-icon flex"> <i class="fas fa-shopping-cart"></i></span>
                    </a>
                </div>
            </div>
            <div class="product-info">
                <div class="pr-name">
                    <a href="#"><?php echo $data["product"][$i]["tensanpham"] ?></a>
                </div>
                <div class="pr-price">
                    <p class="cost">$35.00 </p>
                    <p class="pr-sale"><?php echo $data["product"][$i]["gia"] ?></p>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    <div class="button-show-product flex">
        <button>Load more</button>
    </div>
    <?php
    for ($i = 8; $i < 16; $i++) {
    ?>
        <div class="col dn">
            <div class="product-img">
                <div class="img img1"><img src="<?php echo URL_LAYOUT . 'img/product/' . $data["product"][$i]["image1"]; ?>" alt=""></div>
                <div class="img img2"><img src="<?php echo URL_LAYOUT . 'img/product/' . $data["product"][$i]["image2"]; ?>" alt=""></div>
                <a href="#" class="wishlist"><i class="fas fa-heart"></i></a>
                <div class="hover-button">
                    <div class="bt-view flex bt" href="#">
                        <span class="flex">Quick View</span>
                        <span class="bt-icon flex"> <i class="far fa-eye"></i></span>

                    </div>
                    <a class="bt-add flex bt addCart" href="<?php echo URL . 'cart/store/' . $data["product"][$i]["id"]; ?>">
                        <span class="flex">Quick Shop</span>
                        <span class="bt-icon flex"> <i class="fas fa-shopping-cart"></i></span>
                    </a>
                </div>
            </div>
            <div class="product-info">
                <div class="pr-name">
                    <a href="#"><?php echo $data["product"][$i]["tensanpham"] ?></a>
                </div>
                <div class="pr-price">
                    <p class="cost">$35.00</p>
                    <p class="pr-sale"><?php echo $data["product"][$i]["gia"] ?></p>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>