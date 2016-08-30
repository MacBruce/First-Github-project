<?php
//sitekeys for website

$siteKey = "";
$secretKey = "";



//Place url in vars/array
$nav1['index.php'] = "Home";
$nav1['products.php'] = "Products";
$nav1['contact.php'] = "Contact Us";
$nav1['contact.php'] = "About Us";

//defines current page
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

//swith statements

switch(THIS_PAGE) {
    case "index.php":
    $myTitle = "MacLaren &amp; Co.";
    $myPic = "images/newestwreath.jpg";
    $myAlt = "Event planning services";
    $myPageID = "Welcome";
    break;
    
    case "services.php":
    $myTitle = "Event Services";
    $myPic = "images/newestwreath.jpg";
    $myAlt = "Event planning services";
    $myPageID = "Event Planning";
    break;
    
    case "contact.php":
    $myTitle = "Contact me";
    $myPic = "images/newestwreath.jpg";
    $myAlt = "Event planning services";
    $myPageID = "contact";
    break;
    
    case "about.php":
    $myTitle = "About me";
    $myPic = "images/newestwreath.jpg";
    $myAlt = "Event planning services";
    $myPageID = "About";
    break;
    
    default:
    $myTitle = THIS_PAGE;
    $myPic = "images/newestwreath.jpg";
    $myAlt = "Event Planning Services";
    $myPageID = "Welcome";
}
