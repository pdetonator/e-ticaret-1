<?php

    class Product extends CI_Controller
    {

        public function __construct()
        {

            parent::__construct ();

            $this -> load -> model ('Product_model', 'product');

        }

        public function index ($product)
        {

            if ( $this -> product -> is_exist (array (
                'productUrl' => $this -> security -> xss_clean ($product),
                'isLive' => TRUE
            ))) {

                $product = $this -> product -> get (['productUrl' => $this -> security -> xss_clean ($product)]);

                $options = $this -> product -> get_options (['productID' => $product -> productID]);

                $slides = $this -> product -> get_images (['productID' => $product -> productID]);

                $this -> load -> view ('head/main_tag');

                $this -> load -> view ('head/header_nav');

                $this -> load -> view ('product', array (
                    'product' => $product,
                    'options' => $options,
                    'slides' => $slides
                ));

            }else {

                show_404();

            }

        }

    }

?>