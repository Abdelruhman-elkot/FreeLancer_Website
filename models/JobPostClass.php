<?php
class JobPost{

    private int $ID;
    private int $clientID;
    private string $clientName;
    private string $jobType;
    private int $jobBudget;
    private string $description;
    private int $numProposals;
    private string $status;
    private int $jobPostTitle;
    private $postDate;
    private int $acceptedCounter;
    private int $refusedCounter;
    private int $pendingCounter;
    private string $propStatue;
    public $db;


    public function __construct() {
        include_once 'c:\xampp\htdocs\SW1_Project\include\DatabaseClass.php';
        $this->db = new database();
    }

    public function numProposals(){
        
    }
    
    public function acceptedCounter(){
        $sql = "SELECT * FROM jobposts";
        $data = $this->db->display($sql);
        $this->acceptedCounter=0;
        foreach ($data as $row){
            if(isset($row['Status']) && $row['Status'] == 'Accepted'){
                $this->acceptedCounter++;
            }
        }
        return $this->acceptedCounter;
    }

    public function refuesedCounter(){
        $sql = "SELECT * FROM jobposts";
        $data = $this->db->display($sql);
        $this->refusedCounter=0;
        foreach ($data as $row){
            if(isset($row['Status']) && $row['Status'] == 'Refused'){
                $this->refusedCounter++;
            }
        }
        return $this->refusedCounter;
    }

    public function pendingCounter(){
        $sql = "SELECT * FROM jobposts";
        $data = $this->db->display($sql);
        $this->pendingCounter=0;
        foreach ($data as $row){
            if(isset($row['Status']) && $row['Status'] == 'Pending'){
                $this->pendingCounter++;
            }
        }
        return $this->pendingCounter;
    }
}
?>