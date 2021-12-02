<?php

    class Product_model extends CI_Model
    {

        private $table_name = 'products';

        public function __construct()
        {

            parent::__construct ();

        }

        public function get_all ($where = array (), $limit = null)
        {

            $product = $this -> db
                             -> join ('categories', 'categories.categoryID = products.productCategory', 'join')
                             -> limit ($limit)
                             -> order_by ('productID', 'DESC')
                             -> get_where ($this -> table_name, $where)
                             -> result ();

            return $product;

        }

        public function get ($where = array ())
        {

            $product = $this -> db
                             -> join ('categories', 'categoryID = productCategory', 'inner')
                             -> get_where ($this -> table_name, $where)
                             -> row ();


            return $product;

        }

        public function get_options ($where)
        {

            $options = $this -> db
                             -> get_where ('product_options', $where)
                             -> result ();

            return $options;

        }

        public function get_images ($where)
        {

            $options = $this -> db
                -> get_where ('product_slides', $where)
                -> result ();

            return $options;

        }

        public function is_exist ($where)
        {

            $product = $this -> db
                             -> get_where ($this -> table_name, $where);

            if ( $product -> num_rows () > 0) return true;

            return false;

        }

    }

?>