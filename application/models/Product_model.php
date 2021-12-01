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



        }

    }

?>