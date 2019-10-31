<?php

$user_email = $_GET['email'];
$project_id = $_GET['project_id'];

if(isset($user_email) && isset($project_id)){

    $proj_data = $wpdb->get_row("SELECT * FROM wp_ngo_projects WHERE project_id = $project_id");
    $user_data = $wpdb->get_row("SELECT * FROM wp_user_details WHERE email = $user_email");
    $proj_application = $wpdb ->insert('wp_applied_projects',
     array(
            'user_id' => $user_data->id,
            'user_email'=>$user_data->email,
            'project_email'=>$proj_data->email,
            'prject_name'=>$proj_data->project_mail,
            'end_date'=>$proj_data->end_date
     )
    );

    if(!$proj_application){
        echo"Error in project Application";
    }else{
        echo"Application Successful";
    }



}elseif(!isset($user_email)){

echo"Login or register to apply for a volunteering project";

}elseif(!isset($project_id)){


    echo"Project does not exist";
}
?>\