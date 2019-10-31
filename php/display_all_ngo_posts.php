
<?php
class display{ 


    

    /*If user is not logged in but access this page this will be the fucntion all events */
    public function displayEvents(){

        global $wpdb;
        
    $all_events = $wpdb->get_results("SELECT * FROM  wp_ngo_activity ");

        foreach($all_events as $event){

            echo"";

        }
    }


    /*If user is logged in we take any prefference available and use it to get custom events */

    function displayEventsFiltered($filters){

        global $wpdb;
        
        $all_events = $wpdb->get_results("SELECT * FROM wp_ngo_activity WHERE x=$filters[0] OR y=$filters[1] OR z = $filters[2]");

    foreach($all_events as $event){
    
        echo"";

}}

    /*If user is not logged in but access this page this will be the fucntion to display all opportunities */
    function displayOpportunities(){

        global $wpdb;

        $all_events = $wpdb->get_results("SELECT * FROM wp_ngo_opportunities");

        foreach($all_events as $event){

        echo "";
        }
    }


    /*If user is logged in we take any prefference available and use it to get custom events */

    function displayOpportunitiesFiltered($filters){

        global $wpdb;
        
    $all_events = $wpdb->get_results("SELECT * FROM wp_ngo_opportunities WHERE x=$filters[0] OR y=$filters[1] OR z = $filters[2]");

    foreach($all_events as $event){

        echo"";

}} 

   /*This function will be used to display partners */
   function displayPartners(){

    $table_with_allPartners = "";
    global $wpdb;

    $all_events = $wpdb->get_results("SELECT * FROM wp_ngo_info");

    foreach($all_events as $event){

    echo "";
    }
}


}
?>