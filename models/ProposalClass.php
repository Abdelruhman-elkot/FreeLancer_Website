<?php
class Proposal {
    private int $propID;
    private int $freelancerId;
    private int $postID;
    private string $CV;
    private $proposalDate;
    private string $status;
    public $db;

    public function __construct() {
        include_once 'c:\xampp\htdocs\SW1_Project\include\DatabaseClass.php';
        $this->db = new database();
    }


    public function showProposals(){
        $sql = "SELECT *, jobposts.ClientID FROM proposals join jobposts on jobposts.PostID = proposals.PostID WHERE ClientID = '$_SESSION[id]'";
        $data = $this->db->display($sql);
        return $data;
    }
}

