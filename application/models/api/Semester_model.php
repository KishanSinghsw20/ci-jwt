<?php

class Semester_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        // loading database
        $this->load->database();
    }
}