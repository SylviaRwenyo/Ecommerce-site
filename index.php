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
     <div class="menu">
        <label for="hamburger" onClick="showMenu()" class="icon">&#9776;</label>  
        <ul>
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="shop1.php">Shop</a></li>
            <li><a href="articles1.php">Articles</a></li>
        </ul>
    </div>
    </div>
    <!-- intro products carousel -->
    <section class="introSection">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/smartphone.png"   alt="smartphone">
            <div class="carousel-caption d-none d-md-block" >
                <h5>Smartphone </h5>
                <h6>Ksh 13, 999</h6>
                <h6>Available in stores countrywide today!</h6>
            </div>
            <div id="caption">
                <h5>Smartphone </h5
                <h6>Ksh 13, 999</h6
                <button class="btn"><a href="shop1.php">Shop now</a></button>
            </div>
        </div>
    <div class="carousel-item">
        <img src="images/tablet.png"  alt="tablet">
        <br>
      <div class="carousel-caption d-none d-md-block" id="caption">
            <h5>Tablet</h5>
            <h6>Ksh 19, 999</h6>
            <h6>Available in stores countrywide today!</h6>
      </div>
       <div id="caption">
                <h5>Tablet</h5>
                <h6>Ksh 19, 999</h6>
                <button class="btn"><a href="shop1.php">Shop now</a></button>
       </div>
    </div>
    <div class="carousel-item">
      <img src="images/earphones.png"  alt="...">
      <div class="carousel-caption d-none d-md-block"  id="caption">
            <h5>Earphones</h5>
            <h6>Ksh 1,999</h6>
            <h6>Available in stores countrywide today!</h6>
      </div>
      <div id="caption">
            <h5>Earphones</h5>
            <h6>Ksh 1,999</h6>
            <button class="btn"><a href="shop1.php">Shop now</a></button>
       </div>
    </div>
  </div>
    </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </section>
<!-- three_box -->
<section class="generalSection">
<h1>Our Catalogue</h1>
<div class="three_box" >
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="box_text">
                     <i><img src="images/thr.png" alt="#"/></i>
                     <h3>Computers</h3>
                     <ul>
                        <li>Lenovo: IdeaPad, Legion, ThinkPad, ThinkBook, Yoga</li>
                        <li>HP: Elitebook, Envy, Omen, Pavilion, ZBook, Spectre</li>
                        <li> Asus: ProArt, Zenbook, Aspire, Vivobook </li>
                     </ul>
                     </div>
               </div>
               <div class="col-md-4">
                  <div class="box_text">
                     <i><img src="images/thr1.png" alt="#"/></i>
                     <h3>Laptops</h3>
                     <ul>
                        <li>Lenovo: IdeaPad, Legion, ThinkPad, ThinkBook, Yoga</li>
                        <li>HP: Elitebook, Envy, Omen, Pavilion, ZBook, Spectre</li>
                        <li> Asus: ProArt, Zenbook, Aspire, Vivobook </li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-4">
               <div class="box_text">
               <i><img src="images/thr2.png" alt="#"/></i>
               <h3>Speakers</h3>
               <ul>
                  <li>Acoustic Research	,Advent	,Alesis</li>
                  <li>Altec Lansing, Amphion Loudspeakers, Armstrong Audio	</li>
                  <li>Audiovox, Audison, Auro-3D</li>
                  <li>Bang & Olufsen</li>	
               </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
</section>
      <!-- three_box -->
<!-- articles intro carousel -->
<section class="articlesSection">
    <h3>Learn About Gadgets</h3>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="articlesPreview">
                <div>
                    <img src="images/noisecancellingheadphones.png" alt="headphones">
                </div>
                <div class="text">
                    <h5> All about Headphones</h5>
                    <p>Headphones are all different, from price point to appearance... <a href="articles.php">read more</a></p>  
                </div>
       
            </div>
        </div>
    <div class="carousel-item">
        <div class="articlesPreview">
            <div>
                <img src="images/camera.png" alt="tablet">
            </div>
            <div class="text">
                <h5> All about Cameras</h5>
                <p>Cameras are all different, from size to in built features... <a href="articles.php">read more</a></p>  
            </div>
        </div>
    </div>
    <div class="carousel-item">
    <div class="articlesPreview">
            <div>
                <img src="images/earphones.png" alt="tablet">
            </div>
            <div class="text">
                <h5> All about Earphones</h5>
                <p>Earphones are all different, from price point to appearance... <a href="articles.php">read more</a></p>  
            </div>
        </div>
   </div>
</div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>
<div class="messageForm">
    <form>
        <h3>Leave Us a Message</h3>
        <label>Your Name</label>
        <input type="text" name="name">
        <label>Email Address</label>
        <input type="text" name="email">
        <label>Your message</label>
        <textarea  name="message"></textarea>
        <button type="button" class="btn" name="submit">Send</button>
    </form>
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