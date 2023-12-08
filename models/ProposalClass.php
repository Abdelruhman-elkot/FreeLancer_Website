<?php
class Proposal {
    protected $ID;
    protected $freelancerId;
    protected $jobPostId;
    protected $status;

    public function __construct($id, $freelancerId, $jobPostId, $status) {
        $this->ID = $id;
        $this->freelancerId = $freelancerId;
        $this->jobPostId = $jobPostId;
        $this->status = $status;
    }
}

