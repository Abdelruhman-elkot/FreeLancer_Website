<?php
class JobPost{

    protected $ID;
    protected $clientID;
    protected $clientName;
    protected $jobType;
    protected $jobBudget;
    protected $creationDate;
    protected $description;
    protected $numProposals;
    protected $status;

    public function __construct($jobType, $jobBudget, $description, $numProposals, $status){
        $this->jobType = $jobType;
        $this->jobBudget = $jobBudget;
        $this->description = $description;
        $this->numProposals = $numProposals;
        $this->status = $status;
    }


    // Setter 
    function setJobType($jobType){
        $this->jobType = $jobType;
    }
    function setJobBudget($jobBudget){
        $this->jobBudget = $jobBudget;
    }
    function setDescription($description){
        $this->description = $description;
    }
    function setStatus($status){
        $this->status = $status;
    }
    // Getter
    function getID(){
        return $this->ID;
    }
    function getClientID(){
        return $this->clientID;
    }
    function getClientName(){
        return $this->clientName;
    }
    function getJobType(){
        return $this->jobType;
    }
    function getJobBudget(){
        return $this->jobBudget;
    }
    function getCreationDate(){
        return $this->creationDate;
    }
    function getDescription(){
        return $this->description;
    }
    function getNumProposals(){
        return $this->numProposals;
    }
    function getStatus(){
        return $this->status;
    }
}
?>