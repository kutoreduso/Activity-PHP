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
                <input type="checkbox" name="product[]" value="Sprite"> Sprite - ₱20
            </label><br>
            
            <label>
                <input type="checkbox" name="product[]" value="Royal"> Royal - ₱20
            </label><br>

            <label>
                <input type="checkbox" name="product[]" value="Pepsi"> Pepsi - ₱15
            </label><br>

            <label>
                <input type="checkbox" name="product[]" value="Mountain Dew"> Mountain Dew - ₱20
            </label><br>
</fieldset>
       

        <fieldset style= "width: 500px">
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
        
</body>
</html>