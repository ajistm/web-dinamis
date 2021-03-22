<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<style>
footer{
    padding:20px;
}
</style>



</head>

<body>

    <!-- drop down navbar -->
    <section>
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="?networking">Networking</a></li>
            <li><a href="?programing">Programing</a></li>
            <li><a href="?it_security">IT Security</a></li>
            <li><a href="?it_management">IT Management</a></li>
            <li><a href="?office_aplication">Office Aplication</a></li>
            <li><a href="?desain_grafis">Desain Grafis</a></li>
            <li><a href="?video_editing">Video Editing</a></li>
            <li><a href="?engineering">Engineering</a></li>
        </ul>
        <ul id="dropdown2" class="dropdown-content">
            <li><a href="?hospital_technology">Hospital Technology</a></li>
            <li><a href="?web_development">Web Development</a></li>
            <li><a href="?mobile_apps_development">Mobile Apps Development</a></li>
            <li><a href="?cloude_solution">Cloude Solution</a></li>
            <li><a href="?it_computer">IT Computer Supply & Service </a></li>
            <li><a href="?digital_marketing">Digital Marketing</a></li>
            <li><a href="?seo_consultan">SEO Consultan</a></li>
        </ul>
            <!-- untuk yang sidenav -->
            <ul id="dropdown3" class="dropdown-content">
            <li><a href="?networking">Networking</a></li>
            <li><a href="?programing">Programing</a></li>
            <li><a href="?it_security">IT Security</a></li>
            <li><a href="?it_management">IT Management</a></li>
            <li><a href="?office_aplication">Office Aplication</a></li>
            <li><a href="?desain_grafis">Desain Grafis</a></li>
            <li><a href="?video_editing">Video Editing</a></li>
            <li><a href="?engineering">Engineering</a></li>
        </ul>
        <ul id="dropdown4" class="dropdown-content">
            <li><a href="?hospital_technology">Hospital Technology</a></li>
            <li><a href="?web_development">Web Development</a></li>
            <li><a href="?mobile_apps_development">Mobile Apps Development</a></li>
            <li><a href="?cloude_solution">Cloude Solution</a></li>
            <li><a href="?it_computer">IT Computer Supply & Service </a></li>
            <li><a href="?digital_marketing">Digital Marketing</a></li>
            <li><a href="?seo_consultan">SEO Consultan</a></li>
        </ul>
    </section>
    <!-- navbar -->
    <div class="navbar-fixed ">
        <nav class="orange">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#!" class="brand-logo">Logo</a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="?about">About us</a></li>
                        <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Training<i class="material-icons right">arrow_drop_down</i></a>
                        </li>
                        <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">IT Solution<i class="material-icons right">arrow_drop_down</i></a>
                        </li>
                        <li><a href="?news">News</a></li>
                        <li><a href="?registration">Registration</a></li>
                        <li><a href="?client">Client</a></li>
                        <li><a href="?contact">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <ul class="sidenav" id="mobile-demo">
        <li class="small "><a href="index.php">Home</a></li>
        <li><a href="?about">About us</a></li>
        <li><a class="dropdown-trigger" href="#!" data-target="dropdown3">Training<i class="material-icons right">arrow_drop_down</i></a>
        </li>
        <li><a class="dropdown-trigger" href="#!" data-target="dropdown4">IT Solution<i class="material-icons right">arrow_drop_down</i></a>
        </li>
        <li><a href="?news">News</a></li>
        <li><a href="?registration">Registration</a></li>
        <li><a href="?client">Client</a></li>
        <li><a href="?contact">Contact Us</a></li>
    </ul>
