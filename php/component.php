<style>body{
    width: 100%;
    height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)), url(background.jpeg);

   background-size: cover;
    background-position: center;
}
h5{
    color:black;
}
</style>
<script src="./custom.js"></script>

<?php

function component($productname,$productprice,$productimg,$productid,$quantity)
{
    if($quantity>0){
        $element=<<<EOD
    <form style="display:inline-block;" method="post">
    <table style=" 
    border-radius: 10px;
    width:250px;
    height:350px;
    margin:50px;
    background-color:#c68c53">
            <tr>
                <th style="padding: 10px;"><img src="$productimg" style="width:250px;
                height:270px;
                
            "></th>
            </tr>
            <tr><th style="text-align:center;
            font-size:20px;">$productname</th></tr>
            <tr><th style="text-align:center;
            font-size:20px;">&#8377; $productprice /-</th></tr>
            <tr><th>
                <center>
                <button style="height: 30px;
                border-radius:10px;
                border:0;
                background-color:#ac7339;
                cursor:pointer;
                margin-bottom:10px;
                font-size:15px;"
                type="submit" name="add">Add to cart</button>
                </center>
                <input type='hidden' name='product_id' value='$productid'>
            </th></tr>
        </table>
    </form>
    EOD;
    echo $element;
}
else{
    $element=<<<EOD
    <form style="display:inline-block;" method="post">
    <table style=" 
    border-radius: 10px;
    width:250px;
    height:350px;
    margin:50px;
    background-color:#c68c53">
            <tr>
                <th style="padding: 10px;"><img src="$productimg" style="width:250px;
                height:270px;opacity:0.3;
                
            "></th>
            </tr>
            <tr><th style="text-align:center;
            font-size:20px;">$productname</th></tr>
            <tr><th style="text-align:center;
            font-size:20px;">&#8377; $productprice /-</th></tr>
            <tr><th>
                <center>
                <h6 style="height: 30px;
                border-radius:10px;
                padding:5px;
                background-color:#ac7339;
                margin:0px;
                font-size:15px;">OUT OF STOCK</h6>
                </center>
                <input type='hidden' name='product_id' value='$productid'>
            </th></tr>
        </table>
    </form>
    EOD;
    echo $element;
}
    
}

function cartElement($productimg, $productname, $productprice, $productid){
    $element = "
    
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items data\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 style=\"color:black;\" class=\"pt-2\">$productname</h5>
                                <h5 style=\"color:black;\" class=\"pt-2\">&#8377 $productprice</h5>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                            </div>
                            <div class=\"col-md-3 py-5\">
                            <div>
                            <button type=\"button\" class=\"btn bg-light border rounded-circle decrement-btn\"><i class=\"fas fa-minus \"></i></button>
                            <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline input-qty\">
                            <button type=\"button\" class=\"btn bg-light border rounded-circle increment-btn\"><i class=\"fas fa-plus \"></i></button>
                        </div>
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}
