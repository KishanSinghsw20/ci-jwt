<?php

require APPPATH . "libraries/REST_Controller.php";

// headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET");

class Student extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("api/student_model");
        $this->load->helper(
            array(
                "authorization",
                "jwt"
            )
        );
    }

    // Create student
    public function register_post()
    {

    }

    // List student
    public function list_get()
    {

    }
}