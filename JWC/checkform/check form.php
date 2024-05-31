
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styel.css">
    <title>Jwc</title>
</head>
<body>
<div class="wrapper">
    <div class="container">
        <form action="/">
            <h1>
                <i class="fas fa-shipping-fast"></i>
                Address Information
            </h1>
            <div class="name">
                <div>
                    <label for="f-name">Name</label>
                    <input type="text" name="f-name">
                </div>
                <div>
                    <label for="l-name">Surname</label>
                    <input type="text" name="l-name">
                </div>
            </div>
            <div class="street">
                <label for="name">Street</label>
                <input type="text" name="address">
            </div>
            <div class="address-info">
                <div>
                    <label for="city">City</label>
                    <input type="text" name="city">
                </div>
                <div>
                    <label for="state">Province</label>
                    <input type="text" name="state">
                </div>
                <div>
                    <label for="zip">Zip</label>
                    <input type="text" name="zip">
                    
                </div>
            </div>
            <div>
                    <label for="Amount">Amount</label>
                    <input type="number" name="amount">
                </div>
                <div  class="custom-select" style="width:200px;">
                    <label for="Payment">Payment</label>
                    <select>
                        <option value="0">Once Off Donation</option>
                        <option value="1">Monthly Donation</option>
                    </select>
                </div>
            <div class="btns">
                <button>Proceed</button>
            </div>
        </form>
    </div>
</div>
<script src="main.js"></script>
</body>
</html>