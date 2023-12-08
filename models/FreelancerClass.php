<?php
class Freelancer extends User{
    private static $freelancerCounter;

    function getfreelancerCounter(){
        return self::$freelancerCounter;
    }

    public function __construct(){

    }

    public function viewAllJobPosts(){

    }
    public function viewClientPosts(Client $client){

    }

    public function searchForJop($title, $date, $clientName){
    
    }

    public function saveJobPost(){

    }

    public function applyToJob(){
        
    }


}


?>