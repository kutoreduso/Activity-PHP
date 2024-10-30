<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 1</title>
</head>
<body>
    <h1>Vendo Machine</h1>
        <form method="Post">
            <fieldset style="width:500px;">

            <legend>Products</legend>

            <label>
                <input type="checkbox" name="products[]" value="Coke"> Coke - P15
            </label><br>

            <label>
                <input type="checkbox" name="products[]" value="Sprite"> Sprite - ₱20
            </label><br>
            
            <label>
                <input type="checkbox" name="products[]" value="Royal"> Royal - ₱20
            </label><br>

            <label>
                <input type="checkbox" name="products[]" value="Pepsi"> Pepsi - ₱15
            </label><br>

            <label>
                <input type="checkbox" name="products[]" value="Mountain Dew"> Mountain Dew - ₱20
            </label><br>
</fieldset>
       

        <fieldset style= "width: 500px;">
            <legend>Option</legend>

            <label for="Size:"></label>
            <select name="size" id="size">
                <option value="Regular">Regular</option>
                <option value="Up-Size">Up-Size(add ₱5)</option>
                <option value="Regular">Jumbo (add ₱10)</option>    
                </select>

                <label for="Quantity">Qty</label>
                <input type="number" id="quantity" name="quantity" min="1" style="width: 140px;">
                &nbsp;
                <button type="submit" name="checkout">Checkout</button>
                </fieldset>
        </form>
        

        <?php 
            if(isset($_REQUEST['checkout'])) {
                $prices = [
                    "Coke" => 15,
                    "Sprite" => 20,
                    "Royal" => 20,
                    "Pepsi" => 15,
                    "Mountain Dew" => 20
                ];
                    $selectProduct = $_POST['products'] ?? [];
                    $size = $_POST['size'] ?? 'Regular';
                    $quantity = intval($_POST['quantity'] ?? 0);

                    $sizeCost = 0;
                    if ($size === "Up-Size") $sizeCost = 5;
                    elseif ($size === "Jumbo") $sizeCost = 10;
                    
                    if(empty($selectProduct)) {
                        echo '<hr><p> No Selected Product, Try Again</p>';
                    } else {

                        $totalProduct = 0;
                        $totalAmount = 0;
                        echo '<hr><p>Purchase Summary: </p><ul>';

                        foreach ($selectProduct as $product) {
                            $productprice = $prices[$product] + $sizeCost;
                            $producttotal = $productprice * $quantity;
                            $totalAmount += $producttotal;
                            $totalProduct += $quantity;

                            $pieceText = $quantity > 1 ? 'pieces' : 'pieces';

                            echo '<li> ' . $quantity . ' ' . $pieceText . ' of ' . $size . ' ' . $product . ' amounting to ₱' . $producttotal . '</li>';
                            
                        }
                        

                        echo '<ul>';
                        echo '<p> Total Number of Items:'.$totalProduct.'</p>';
                        echo '<p> Total Amount: ₱'. $totalAmount . '</p>';
                    }



            }
        
        ?>
</body>
</html>