<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Table</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #ddd; /* Border for the whole table */
        }
        th, td {
            border: 1px solid #ddd; /* Border for table cells */
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        #checkout  {
      
        padding: 6px; /* Adjust padding as needed */
        font-size: 16px; /* Adjust font size as needed */
        background-color: maroon;
        color: #ddd;
      
        }
        #remove  {
      
      padding: 6px; /* Adjust padding as needed */
      font-size: 16px; /* Adjust font size as needed */
      background-color: maroon;
      color: #ddd;
    
      }
        
    </style>
</head>
<body>
    <h2 align="center">Cart</h2>
        <table>
            <tr>
                <th colspan="5" align="center"><strong>YOUR CART</strong></th>
            </tr>
            <tr>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
            <?php 
            require_once('../../model/cart_viewdb.php'); 
            if(empty($cart_items))
            {
                $cart_items = get_cart_items(); 
            }
            if (!empty($cart_items)) { ?>
                <?php foreach ($cart_items as $cart) { $cart["total"] = $cart["qty"] * $cart["price"]; ?>
                    <form method="post" action="../../controller/cart_controller.php">
                    <input type="hidden" name="cart_id" value=<?php echo $cart['id'] ?>> 
                        <tr>
                            <td><?php echo $cart["name"]; ?></td>
                            <td><?php echo $cart["qty"]; ?></td>
                            <td><?php echo $cart["price"]; ?></td>
                            <td><?php echo $cart["total"]; ?></td>
                            <td><input type="submit" id="remove" name="remove_from_cart" value="Remove"></td>
                        </tr>
                    </form>
                <?php } ?>
            <?php } else { ?>
                <tr>
                    <td colspan="4">Your cart is empty</td>
                </tr>
            <?php } ?>
        </table>
        <form method="POST" action="checkout.php">
        <!-- Remove the input fields -->
            <button type="submit" id="checkout" name="checkout">Checkout</button>
        </form>
</body>
</html>
