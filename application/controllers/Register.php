<?php

    class Register extends CI_Controller
    {

        public function __construct()
        {

            parent::__construct ();

        }

        public function index ()
        {

            $this -> load -> view ('head/main_tag');

            $this -> load -> view ('head/header_nav');

            $this -> load -> view ('register');

        }

    }

?>