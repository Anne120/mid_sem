<?php
function component($productname, $productprice, $productimage, $productid){

    $element =  "
        <div class= \"product-grids simpleCart_shelfItem wow fadeInUp animated\" data-wow-delay=\".5s\">
                <form action=\"sea.php\" method= \"POST\">
					<div class= \"new-top\">
						<a href= \"oysterdeets.html\"><img src= \"$productimage\" class= \"img-responsive\" alt=\"\"/></a>
						<div class= \"new-text\">
							<ul>
								<li><a href= \"oysterdeets.html\">Quick View </a></li>
								<li><input type= \"number\" class=\"item_quantity\" min=\"1\" value=\"1\"></li>
								<li><button type =\"submit\" class=\"btn btn-warning my-3\" name=\"add\"> Add To Cart <i class=\"fas fa-shopping-cart\"></i></button>
                                <input type='hidden' name='product_id' value='$productid'> 
                                </ul>
						</div> 
					</div>
					<div class= \"new-bottom\">
						<h5><a class=\"name\" href=\"oysterdeets.html\"> $productname </a></h5>
						<div class= \"ofr\">
							<p><span class= \"item_price\">KSH $productprice</span></p>
                            </form>
						</div>
					</div>
                    </form>
				</div>

               ";
    echo $element;

}

function cartElement($productimage, $productname, $productprice, $productid){
    $element = "
    
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$productimage alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$productname</h5>
                                <small class=\"text-secondary\">Seller: dailytuition</small>
                                <h5 class=\"pt-2\">KSH $productprice</h5>
                                <button type=\"submit\" class=\"button btn-warning\">Save for Later</button>
                                <button type=\"submit\" class=\"button btn-danger mx-2\" name=\"remove\">Remove</button>
                            </div>
                            <div class=\"col-md-3 py-5\">
                                <div>
                                    <button type=\"button\" class=\"button bg-light border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
                                    <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
                                    <button type=\"button\" class=\"button bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}

?>