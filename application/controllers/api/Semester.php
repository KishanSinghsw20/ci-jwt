<?php

require APPPATH . "libraries/REST_Controller.php";

// headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET");

class Semester extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("api/semester_model");
    }

    // Create project
    public function create_project_post()
    {

    }

    // List project
    public function projects_list_get()
    {

    }
}