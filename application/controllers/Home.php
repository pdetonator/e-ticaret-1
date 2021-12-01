<?php

    class Home extends CI_Controller
    {

        public function __construct()
        {

            parent::__construct ();

            $this -> load -> model ('Product_model', 'product');

        }

        public function index ()
        {

            $data ['products'] = $this -> product -> get_all (array (
                'stock >' => 0,
                'isLive' => 1
            ), 20);

            $this -> load -> view ('head/main_tag');

            $this -> load -> view ('head/header_nav');

            $this -> load -> view ('homepage', $data);

        }

    }

?>