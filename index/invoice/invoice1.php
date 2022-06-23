<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../style/invoice.css" rel="stylesheet">
    <title>Cart</title>
    
</head>
<body>
    <?php
    include "invoice-nav1.php"
    ?>

    <div class="container">
        <div class="brand-section">
            <div class="row1">
                <div class="col-6">
                    <h1 class="text-white">CART</h1>
                </div>
                <div class="col-6">
                    <div class="company-details">
                        <p class="text-white">XYZ Mall</p>
                        <p class="text-white">Thankot,KTM</p>
                        <p class="text-white">+977 9885xxxxxx</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="body-section">
            <div class="row1">
                <div class="col-6">
                    <h2 class="heading">Invoice No.: 001</h2>
                    <p class="sub-heading">Tracking No. cart2025 </p>
                    <p class="sub-heading">Order Date: XX-XX-2022 </p>
                    <p class="sub-heading">Email Address: customer@gmail.com </p>
                </div>
                <div class="col-6">
                    <p class="sub-heading">Full Name:  </p>
                    <p class="sub-heading">Address:  </p>
                    <p class="sub-heading">Phone Number:  </p>
                    <p class="sub-heading">City,State,Pincode:  </p>
                </div>
            </div>
        </div>

        <div class="body-section">
            <h3 class="heading">Ordered Items</h3>
            <br>
            <table class="table-bordered">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th class="w-20">Price</th>
                        <th class="w-20">Quantity</th>
                        <th class="w-20">Grandtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Product name</td>
                        <td>100</td>
                        <td>1</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right">Sub Total</td>
                        <td> 10.XX</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right">Tax Total %1X</td>
                        <td> 2</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right">Grand Total</td>
                        <td> 12.XX</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <h3 class="heading">Payment Status: Paid</h3>
            <h3 class="heading">Payment Mode: Cash on Delivery</h3>
        </div>

            

</body>
</html>