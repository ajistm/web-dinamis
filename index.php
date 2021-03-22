<!-- bagian atas -->
<?php

include "section/NavBar.php";

?>

<konten>
<?php

 if (isset($_GET['about']) ) {
     include "pages/about.php";
 }
else if (isset($_GET['programing']) ) {
    include "pages/programing.php";
}
else if (isset($_GET['networking']) ) {
    include "pages/networking.php";
}
else if (isset($_GET['client']) ) {
    include "pages/client.php";
}
else if (isset($_GET['cloude_solution']) ) {
    include "pages/cloude_solution.php";
}
else if (isset($_GET['desain_grafis']) ) {
    include "pages/desain_grafis.php";
}
else if (isset($_GET['digital_marketing']) ) {
    include "pages/digital_marketing.php";
}
else if (isset($_GET['engineering']) ) {
    include "pages/engineering.php";
}
else if (isset($_GET['hospital_technology']) ) {
    include "pages/hospital_technology.php";
}
else if (isset($_GET['it_computer']) ) {
    include "pages/it_computer.php";
}
else if (isset($_GET['it_security']) ) {
    include "pages/it_security.php";
}
else if (isset($_GET['mobile_apps_development']) ) {
    include "pages/mobile_apps_development.php";
}
else if (isset($_GET['office_aplication']) ) {
    include "pages/office_aplication.php";
}
else if (isset($_GET['seo_consultan']) ) {
    include "pages/seo_consultan.php";
}
else if (isset($_GET['video_editing']) ) {
    include "pages/video_editing.php";
}
else if (isset($_GET['web_development']) ) {
    include "pages/web_development.php";
}
else if (isset($_GET['it_management']) ) {
    include "pages/it_management.php";
}
else if (isset($_GET['news']) ) {
    include "pages/news.php";
}
else if (isset($_GET['registration']) ) {
    include "pages/registration.php";
}
else if (isset($_GET['client']) ) {
    include "pages/client.php";
}
else if (isset($_GET['contact']) ) {
    include "pages/contact.php";
}
else {
    include "pages/home.php";
}



?>
<konten>

<?php
include "section/javascriptAndFooter.php";
?>