<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="text"], input[type="tel"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #333;
            color: #fff;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Checkout</h2>
        <?php require_once('../../model/checkoutdb.php');
        $total = getTotal();
        ?> 
        <form method="POST" action="../../controller/checkout_controller.php">
            <label for="customer_name">Deliver to:</label>
            <input type="text" id="customer_name" name="customer_name" value="<?php echo $_SESSION['user']['name'] ?>" readonly>

            <label for="delivery_address">Delivery Address:</label>
            <input type="text" id="delivery_address" name="delivery_address" required>

            <label for="mail_address">Mail Address:</label>
            <input type="text" id="mail_address" name="mail_address" required>

            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="total">Total:</label>
            <input type="text" id="total" name="total" value="<?php echo $total ?>" readonly>

            <label for="payment_method">Payment Method:</label>
            <select id="payment_method" name="payment_method" required>
                <option value="credit_card">Credit Card</option>
                <option value="debit_card">Debit Card</option>
                <option value="Bkash">Bkash</option>
                <option value="Cash">Cash</option>
            </select>

            <input type="submit" value="Place Order">
        </form>
    </div>
</body>
</html>
