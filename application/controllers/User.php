<?php

    class User extends CI_Controller
    {

        public function __construct()
        {

            parent::__construct ();

            $this -> load -> model ('User_model', 'user');

            $this -> load -> library ('form_validation');

        }

        public function register ()
        {

            if ( $this -> input -> method ('REQUEST_METHOD') == 'POST') {

                if ( $this -> input -> post ( $this -> security -> get_csrf_token_name ()) == $this -> security -> get_csrf_hash ()) {

                    $this -> form_validation -> set_rules ('user-name', 'İsminiz', 'required|trim|min_length[3]|max_length[50]');

                    $this -> form_validation -> set_rules ('user-email', 'E-posta adresiniz', 'required|trim|valid_email|is_unique[users.userEmail]', array (

                        'is_unique' => 'E-posta adresi kullanımda.'

                    ));

                    $this -> form_validation -> set_rules ('user-password', 'Şifreniz', 'required|trim|min_length[3]|max_length[30]');

                    $this->form_validation->set_rules('user-repassword', 'Şifreniz', 'matches[user-password]', array (
                        'matches' => 'Şifreler eşleşmiyor.'
                    ));

                    if ($this -> form_validation -> run () == TRUE) {

                        $user_data = html_escape($this -> security ->  xss_clean(array (
                                                'userName' => $this -> input -> post ('user-name'),
                                                'userEmail' => $this -> input -> post ('user-email'),
                                                'userPassword' => md5($this -> input -> post ('user-password')),
                                            )));


                        if ( $this -> user -> add ($user_data)) {

                            $this -> session -> set_flashdata ('msg_succes', '<li>Kayıt başarılı, Lütfen giriş yapınız.</li>');

                            redirect (base_url('giris-yap'));

                        }

                    }else {

                        $this -> session -> set_flashdata ('msg_error', validation_errors('<li>', '</li>'));

                        redirect (base_url('kayit-ol'));

                    }

                }

            }

        }

        public function login ()
        {



        }

    }

?>