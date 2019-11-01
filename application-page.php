<?php
/*
Template name: volunteer application for project && Events
*/
get_header();
?>

<div class="application-house">
<?php 
if(isset($_GET['project_id']) && isset($_SESSION['email'])){

require('php/Application_for_volunteer.php');

$app =  new Application();
$app->Apply($_GET['project_id'],$_SESSION['email']);



}elseif(isset($_GET['event_id']) && isset($_SESSION['email'])){

    $evt =  new Event();
    $evt->confirmEvents($_GET['project_id'],$_SESSION['email']);
    

}



?>
</div>


<?php
get_footer();
?>
