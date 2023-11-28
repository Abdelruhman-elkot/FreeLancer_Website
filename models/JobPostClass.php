<?php
class JobPostClass{
    private String $clientName;

    private String $title;

    private String $jobTitle;

    private String $fixedOrHourly;

    private int $jobBudget;

    private String $postCreator;

    private string $date;

    private String $jopDescription;

    private int $numberOfProposal;

    function setTitle(string $title) {
        $this->title = $title;
    
    }
    function setJobTitle(String $jobTitle) {
        $this->jobTitle = $jobTitle;
    }
    function setfixedOrHourly(String $fixedOrHourly) {
        $this->fixedOrHourly = $fixedOrHourly;
    }
    function setJobBudget(int $jobBudget) {
        $this->jobBudget = $jobBudget;
    }
    function setPostCreator(String $postCreator) {
        $this->postCreator = $postCreator;
    }
    function setDate(String $date) {
        $this->date = $date;
    }
    function setJopDescription(String $jopDescription) {
        $this->jopDescription = $jopDescription;
    }
    function setNumberOfProposal(int $numberOfProposal) {
        $this->numberOfProposal = $numberOfProposal;
    }
    function getTitle() {
        return $this->title;
    }
    function getJobTitle(){
        return $this->jobTitle;
    }
    function getfixedOrHourly() {
        return $this->fixedOrHourly;
    }
    function getJobBudget() {
        return $this->jobBudget;
    }
    function getPostCreator() {
        return $this->postCreator;
    }
    function getDate() {
        return $this->date;
    }
    function getJopDescription() {
        return $this->jopDescription;
    }
    function getNumberOfProposal() {
        return $this->numberOfProposal;
    }
}
?>