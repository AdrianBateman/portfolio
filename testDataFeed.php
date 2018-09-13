<?php 
    $feed = "https://www.dreams.co.uk/";
    $feed .= "deacon-fabric-upholstered-ottoman-bed-frame/p/254-00047-configurable";
    $feed .= "/variantSelector";

    $json = file_get_contents($feed);
    $array = json_decode($json, true);


    $arrayProductData = $array["productData"];

        $arrayImages = $array["productData"]["images"];



    $arrayIfcAmount = $array["ifcAmount"];

    $arrayOtherProducts = $array["products"];

?>
<!-- Add to cart -->
<form id="addToCartForm" 
    class="add_to_cart_form dreams-pdp__add-to-cart" 
    action="https://www.dreams.co.uk/cart/add"
    method="post">

    <input class="js-productCode" 
        type="hidden" 
        name="productCodePost" 
        value="<?php echo $arrayProductData["code"];?>">

    <div id="jsOutOfStock"></div>

    <div id="jsAddToBasket">
        <button id="addToCartButton" 
            type="submit" 
            class="btn btn-brand-primary btn-brand-primary--noshadow js-add-to-cart js-enable-btn">
            Add to basket
        </button>
    </div>
    <!-- We need to find out where this CSRFTokn is coming from -->
    <input type="hidden" name="CSRFToken" value="1984709b-5888-4e4e-b834-a5ff6aa5acae">
</form>

<!-- Add to wishlist -->

<form id="addToShortList" 
    action="https://www.dreams.co.uk/wishlist/addwishlist" 
    method="post">

    <input type="hidden" 
        id="productCode" 
        name="productCode" 
        value="<?php echo $arrayProductData["code"];?>">

    <button
        id="addToShortListButton" 
        class="btn brand-btn-tertiary btn-add-to-shortlist " 
        data-name="<?php echo $arrayProductData["name"];?>"
        data-code="<?php echo $arrayProductData["code"];?>" 
        data-price="<?php echo $arrayProductData["price"]["value"];?>.0" 
        data-brand="<?php echo $arrayProductData["brand"];?>" 
        data-variant="<?php echo $arrayProductData["selectedVariantSize"];?>" 
        data-color="<?php echo $arrayProductData["color"];?>"
        type="button" >
        
        <span class="icon icon--button-heart"></span>

        Add to shortlist
    </button>
</form>

<?php 
    foreach ($arrayImages as $image){
        echo "<img src='".$image['url']."' alt='".$image['altText']."' >";
    }
?>