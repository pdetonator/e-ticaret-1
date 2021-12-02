<?php

    class User_model extends CI_Model
    {

        private $table_name = 'users';

        public function __construct()
        {

            parent::__construct ();

        }

        public function add ($data)
        {

            $new_user = $this -> db
                -> insert ($this -> table_name, $data);

            if ( $this -> db -> affected_rows () > 0 ) return true;

            return false;

        }

        public function is_exist ($where)
        {

            $user = $this -> db
                          -> get_where ($this -> table_name, $where);

            if ( $user -> num_rows () > 0 ) return true;

            return false;

        }

    }

?>