<?php 

$maintenance = "yes";

if ($maintenance == "yes"){
    include('maintenance.php');
}else {
    include('resume.php');
}

?>