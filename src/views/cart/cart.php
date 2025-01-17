<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo _WEB_ROOT?>/cart/file" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>
    <h1>giỏ hàng</h1>
    <?php foreach ($cart_list as $item) { ?>
        <div> <?php print_r($item); ?> </div>
    <?php } ?>
    <form action="<?php echo _WEB_ROOT; ?>/cart/create" method="post">
        <input type="hidden" name="tour_id" value="<?php echo $_COOKIE['cart'][0]['tour_id'] ?>">
        <button type="submit">Order</button>
    </form>


    <script>
    </script>
</body>

</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <script src="https://kit. fontawesome.com/54f0cb7e4a.js" .crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./src/views/cart/style.css">
</head>
<body>
    <div class="cart-icon">
        <!-- <p><i class="fa-solid fa-cart-shopping"></i><span>390.000</span><sup>đ</sup></p> -->
    </div>
    <div>
        <div id="wrapper">
        <div id="header">
            <ul id="nav">
                <li><a href="">Home</a></li>
                <li><a href="">Band</a></li>
                <li><a href="">Tour</a></li>
                <li><a href="">Contact</a></li>
                <li>
                    <a href="#">More</a>
                </li>
            </ul>
        </div>
    </div>
    <section class="product">
        <div class="container">
            <div class="product-items">
                <div class="product-item">
                    <img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/400976223_687089660204675_3624503934333500228_n.png?stp=dst-png_p206x206&_nc_cat=109&ccb=1-7&_nc_sid=510075&_nc_ohc=mYfUEJpdOzoAX8Q7pPP&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdRSAycHZcG1AGMvEiEPwAJKUFxBSMoethocIWlf8bysTA&oe=65A75496" alt="">
                    <div class="product-item-text">
                        <p><span>25</span>$</p>
                        <h1 style="front-weight: bold; font-size: 18px;">Paris</h1>
                    </div>
                    <button>Buy</button>
                </div>
                <div class="product-item">
                    <img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/385557039_858693336038849_3209243677570663189_n.png?stp=dst-png_p206x206&_nc_cat=100&ccb=1-7&_nc_sid=510075&_nc_ohc=uAc-hpIhV6cAX8EABwe&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdTiPrXDNiya5jCV9nvucrp-KtCCD-TW-ysCAfLjTCHq2g&oe=65A7617B" alt="">
                    <div class="product-item-text">
                        <p><span>25</span>$</p>
                        <h1 style="front-weight: bold; font-size: 18px;">Washington, D.C</h1>
                    </div>
                    <button>Buy</button>
                </div>
                <div class="product-item">
                    <img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/410377162_1429831814285474_393651852596417383_n.png?stp=dst-png_p75x225&_nc_cat=101&ccb=1-7&_nc_sid=510075&_nc_ohc=DSjHdlz3YL4AX-TYN76&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdQAV_UeIJEitcx9eliOuzkNqG7pBFOLkyyQiqNtTKFcGQ&oe=65A75849" alt="">
                    <div class="product-item-text">
                        <p><span>25</span>$</p>
                        <h1 style="front-weight: bold; font-size: 18px;">Ha Noi</h1>
                    </div>
                    <button>Buy</button>
                </div>
                <div class="product-item">
                    <img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/385404491_713034426823264_2745194809182293040_n.png?stp=dst-png_s206x206&_nc_cat=105&ccb=1-7&_nc_sid=510075&_nc_ohc=IEZvDtmBMgIAX9PQuyw&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdTJWuviKNnjCn_Gyj9tz2PkMhVYfteoaJxZmryOPU2PVg&oe=65A75602" alt="">
                    <div class="product-item-text">
                        <p><span>25</span>$</p>
                        <h1 style="front-weight: bold; font-size: 18px;">Tokyo</h1>
                    </div>
                    <button>Buy</button>
                </div>
                <div class="product-item">
                    <img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/385544988_390685079977467_5383288911234620663_n.png?stp=dst-png_p206x206&_nc_cat=102&ccb=1-7&_nc_sid=510075&_nc_ohc=7MQ5e1ojpg8AX-9oO1E&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdRuyJ2jktx8IkEuHiEcOBPRo86z3aDp4vYJtUZbSQzOzA&oe=65A7642B" alt="">
                    <div class="product-item-text">
                        <p><span>25</span>$</p>
                        <h1 style="front-weight: bold; font-size: 18px;">London</h1>
                    </div>
                    <button>Buy</button>
                </div>
                
            </div>
        </div>
    </section>
    <section class = "cart">
        <h2>Cart</h2>
        <form action="">
            <table>
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Money/Ticket</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <tr>
                        <td style="display: flex; align-items: left;"><img style = "width:70px" src="https://scontent.fhan15-1.fna.fbcdn.net/v/t1.15752-9/386868896_376247001458963_2782217720888175581_n.png?_nc_cat=102&ccb=1-7&_nc_sid=8cd0a2&_nc_ohc=WeSmUeCtnvMAX98skRE&_nc_ht=scontent.fhan15-1.fna&oh=03_AdTbeP6aRN_p4pCFCO07899TgmGhS-8GepoC1O0SUSYXqg&oe=65A7309A" alt=""></td>
                        <td><input style="width: 50px; outline: none;" type="number" value="1" min = "0"></td>
                        <td><p><span>320.000</span></p></td>
                        <td style="cursor: pointer;">Xóa</td>
                    </tr>   
                    <tr>
                        <td style="display: flex; align-items: left;"><img style = "width:70px" src="C:/Users/admin/OneDrive/Pictures/Hoàng hôn_ (10).jpg"></td>
                        <td><input style="width: 50px; outline: none;" type="number" value="1" min = "0"></td>
                        <td><p><span>370.000</span></p></td>
                        <td style="cursor: pointer;">Xóa</td>
                    </tr> -->
                </tbody>
            </table>
            <div style="text-align: right;" class="price-total">
                <p style="font-weight: bold; margin-top: 20px"> Sum:<span>0</span>$</p>
            </div>
            <button> Done </button>
        </form>
    </section>
    </div>
    
    <script src="./src/views/cart/script.js"></script>
</body>
</html>