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
        <div class="menu">
        <label for="hamburger" onClick="showMenu()" class="icon">&#9776;</label>  
        <ul>
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="shop1.php">Shop</a></li>
            <li><a href="articles1.php">Articles</a></li>
        </ul>
    </div>
    </div>
    <!-- end of header -->
    <div class="breadcrumbs">
        <a href="articles1.php">Articles</a>&nbsp;
        <i class="fa fa-arrow-right" aria-hidden="true"></i>
        &nbsp;<span>Storage Devices</span>
    </div>
    <section class="articlesBody">
         <div class="content">
             <h2>All about storage devices</h2>
            <div class="introArticle">
                 <p>A storage device is any type of computing hardware that is used for storing, porting or extracting data files and objects. Storage devices can hold and store information both temporarily and permanently. They may be internal or external to a computer, server or computing device.
                 Storage devices are one of the core components of any computing device. They store virtually all of the data and applications on a computer, except for hardware firmware which is generally managed through separate read-only memory or ROM.
                 Storage devices are available in different forms, depending on the type of underlying device. For example, a standard computer has multiple storage devices including RAM, a cache, and a hard disk. The same device may also have optical disk drives and externally connected USB drives.
                </p>
                 <img src="images/hdd.png" alt="usb">
            </div>
            <div>
            <p> There are two different types of storage devices:Primary storage devices: Generally smaller in size, primary storage devices are designed to hold data temporarily and are internal to the computer. They have the fastest data access speed. These types of devices include RAM and cache memory.
              Secondary storage devices: Secondary storage devices usually have larger storage capacity, and they store data permanently. They can be either internal or external to the computer. These types of devices include the hard disk, the optical disk drive and USB storage device.</p>
            <p>In order to really understand what storage devices used to look like and what they look like now, it can be helpful to look at a history of evolving storage devices in general.
            Early storage devices were primitive mechanical systems based on items like punch cards and later, magnetic tape. They presented binary through physical media.
            These became largely obsolete when other digital media was created. First, there were floppy disks and diskettes, then there were compact discs that could hold large amounts of binary in digital formats.
            At the same time, computers and other devices continued to be made with primary hard drives, where a traditional platter is read by an arm in order to read and write data.
            </p>
            <p>Eventually, a new option emerged called the solid-state drive or SSD.New solid-state drives and storage devices store data in a way that's different from the traditional platter hard drive.
            Solid-state storage involves running electrical currents through a substrate instead of using a spinning hard drive platter. It eliminates some of the mechanical parts of the traditional hard drive. It also makes the storage of digital information much more efficient.
            New computers may have solid-state drives as a primary device. New flash drives and thumb drives use solid-state storage for secondary devices.
            At the same time, companies have been updating how they approach storage device engineering for broader enterprise systems. Systems like Redundant Array of Independent Disk (RAID) designs allow companies to use a series of drives to store information in "slices."
            Then the storage area network (SAN) evolved, which links together individual storage devices to provide network storage. Something called "storage fabric" uses fiber channel switching to build network storage for enterprise systems.</p>
            </div>
         </div>
         <div class="articles">
            <br><br>
            <h2 align="center" >Read More</h2>
             <div class="otherArticles">
             <div class="card">
                <img src="images/smartphone.png">
                <h6>About smartphones &nbsp; <a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></h6>
            </div>
            <div class="card">
                <img src="images/computer.png">
                <h6>About personal computers &nbsp;<a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></h6>
            </div>
            <div class="card">
                <img src="images/earphones.png">
                <h6>About earphones  &nbsp;<a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></h6>
            </div>
        </div>
     </div>
     </section>
       <!--  newsletter subscription form -->
     <div class="newsletterSub"> 
        <form>
            <h4>Newsletter Subscription</h4>
            <label>Enter your Email Adress</label><br>
            <input type="text" name="email" placeholder="email address">
            <button type="submit" name="submit" class="btn">Submit</button>
        </form>
    </div>
       <!-- end of newsletter subscription form -->

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