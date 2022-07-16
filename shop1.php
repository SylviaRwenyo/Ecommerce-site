<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Eshop">
    <meta name="keywords" content="Shop electronics gadgets">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>    <link href="style.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <title>Tech Shop</title>

</head>
 <body>
    <!-- header -->
    <div class="header">
    <!-- search bar -->
    <div class="search"> 
        <form>
            <input type="text" name="keyword" placeholder="search here...">
            <button type="submit" name="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
        </form>
    </div>
    <!-- contact links -->
    <div class="contacts">
        <a href="#" ><i class="fa fa-map-marker" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;
        <a href="tel:1234567"> <i class="fa fa-phone" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;
        <a href="mailto:maryjoe@gmail.com"> <i class="fa fa-envelope" aria-hidden="true"></i></a>
    </div>
    </div>
    <!-- menu bar  -->
    <div class="menuBar">
        <div class="logo">
        <img src="images/logo.png">
    </div>
    <div class="menuCollapse">
        <label for="hamburger" onClick="showMenu()" class="icon">&#9776;</label>  
        <ul>
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="shop1.php">Shop</a></li>
            <li><a href="articles1.php">Articles</a></li>
        </ul>
    </div>
       <div class="menu">
        <ul>
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="shop1.php">Shop</a></li>
            <li><a href="articles1.php">Articles</a></li>
        </ul>
    </div>
    </div>
    <!-- end of header -->

  <!-- intro cards -->
<div class="categories">
    <div class="card">
        <img src="images/smartphone.png">
        <h5>Smartphones &nbsp; <i class="fa fa-arrow-right" aria-hidden="true"></i></h5>
    </div>
    <div class="card">
        <img src="images/computer.png">
        <h5>Computers &nbsp; <i class="fa fa-arrow-right" aria-hidden="true"></i></h5>
    </div>
    <div class="card">
        <img src="images/phonecase.jpg">
        <h5>Accessories &nbsp; <i class="fa fa-arrow-right" aria-hidden="true"></i></h5>
    </div>
    <div class="card">
        <img src="images/record-player.png">
        <h5>Collectables &nbsp; <i class="fa fa-arrow-right" aria-hidden="true"></i></h5>
    </div>
    <div class="card">
        <img src="images/earphones.png">
        <h5>Offers &nbsp; <i class="fa fa-arrow-right" aria-hidden="true"></i></h5>
    </div>
</div>
<!-- end of intro cards -->
<!-- products -->
<div class="productsSection">
    <div class="productsInner">
        <img src="images/smartphone.png" alt="phone package">
    <div class="description">
        <h5>Phone g5s</h5>
        <h6>Ksh 13, 999</h6>&nbsp;<button class="btn"><i class="fas fa-shopping-cart"></i></button>
    </div>
    </div> 
    <div class="productsInner">
        <img src="images/speakers.png" alt="phone package">
    <div class="description">
        <h5>Bluetooth Speaker</h5>
        <h6>Ksh 10, 999</h6>&nbsp;<button class="btn"><i class="fas fa-shopping-cart"></i></button>
    </div>
    </div> 
    <div class="productsInner">
        <img src="images/earphones.png" alt="phone package">
    <div class="description">
        <h5>Earphones</h5>
        <h6>Ksh 1, 999</h6>&nbsp;<button class="btn"><i class="fas fa-shopping-cart"></i></button>
    </div>
    </div> 
    <div class="productsInner">
        <img src="images/computer.png" alt="phone package">
    <div class="description">
        <h5>Desktop PC </h5>
        <h6>Ksh 20, 999</h6>&nbsp;<button class="btn"><i class="fas fa-shopping-cart"></i></button>
   </div>
    </div> 
    <div class="productsInner">
        <img src="images/usb.png" alt="phone package">
    <div class="description">
        <h5>16gb Usb</h5>
        <h6>Ksh 599</h6>&nbsp;<button class="btn"><i class="fas fa-shopping-cart"></i></button>
    </div>
    </div> 
    <div class="productsInner">
        <img src="images/laptop.png" alt="phone package">
    <div class="description">
        <h5>Laptop</h5>
        <h6>Ksh 31, 999</h6>&nbsp;<button class="btn"><i class="fas fa-shopping-cart"></i></button>
    </div>
    </div> 
    <div class="productsInner">
        <img src="images/headphones.png" alt="phone package">
    <div class="description">
        <h5>Headphones</h5>
        <h6>Ksh 5, 999</h6>&nbsp;<button class="btn"><i class="fas fa-shopping-cart"></i></button>
    </div>
    </div> 
    <div class="productsInner">
        <img src="images/camera.png" alt="phone package">
    <div class="description">
        <h5>Camera</h5>
        <h6>Ksh 19, 999</h6>&nbsp;<button class="btn"><i class="fas fa-shopping-cart"></i></button>
    </div>
    </div> 
    <!-- <div class="productsInner">
        <img src="images/phonecase.jpg" alt="phone package">
        <h5>Phone case</h5>
        <h6>Ksh 999</h6>&nbsp;<button><i class="fa fa-cart" aria-hidden="true"></i></button>
    </div>  -->
</div>

   <!--  footer -->
   <footer>
    <div class="footer">
        <div class="footerIntro">
        <img class="logo" src="images/logo.png" alt="#"/>
        <h6>Tech Gear Shop</h6>
        </div>
    <div class="location">
            <h5>Visit us</h5>
            <p> Nairobi CBD, <br>Kimathi Street 123 Towers <br>2nd floor left Wing </p>
         </div>
         <div class="about">
            <h5>About Us</h5>
            <p>Since 2020, we've supplied the best<br> electronics with sustainable packaging, <br> and guaranteed warranties</p>
         </div>
         
         <div class="socials">
            <h5>Social Media</h5>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a><br>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a><br>
                <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a><br>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a><br>
        </div>
        </div>
        <p>© 2022 All Rights Reserved.</p>   
    </footer>
      <!-- end footer -->
</body>
</html>