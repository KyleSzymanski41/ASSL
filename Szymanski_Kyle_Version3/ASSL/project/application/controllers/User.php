<?php defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {
    /**
     * __construct function.
     *
     * @access public
     * @return void
     */
    public function __construct() {

        parent::__construct();
        $this->load->library(array('session'));
        $this->load->helper(array('url'));
        $this->load->model('user_model');

    }


    public function index($username = false) {

        if ($username === false) {
            redirect(base_url());
            return;
        }

        // create the data object
        $data = new stdClass();



        // get user id from username
        $user_id = $this->user_model->get_user_id_from_username($username);

        // create the user object
        $user = $this->user_model->get_user($user_id);


        // create breadcrumb
        $breadcrumb  = '<ol class="breadcrumb">';
        $breadcrumb .= '<li><a href="' . base_url() . '">Home</a></li>';
        $breadcrumb .= '<li class="active">' . $username . '</li>';
        $breadcrumb .= '</ol>';

        // create a button to permit profile edition
        $edit_button = '<a href="' . base_url('index.php/user/' . $user->username . '/edit') . '" class="btn btn-xs btn-success">Edit your profile</a>';

        // assign created objects to the data object
        $data->user       = $user;
        $data->breadcrumb = $breadcrumb;
        if (isset($_SESSION['username']) && $_SESSION['username'] === $username) {
            // user is on his own profile
            $data->edit_button = $edit_button;
        } else {
            // user is not on his own profile
            $data->edit_button = null;
        }

        $this->load->view('templates/header');
        $this->load->view('user/profile/profile', $data);
        $this->load->view('templates/footer');

    }


    /**
     * register function.
     *
     * @access public
     * @return void
     */
    public function register() {

        // create the data object
        $data = new stdClass();

        // load form helper and validation library
        $this->load->helper('form');
        $this->load->library('form_validation');

        // set validation rules
        $this->form_validation->set_rules('username', 'Username', 'trim|required|alpha_numeric|min_length[4]|is_unique[users.username]', array('is_unique' => 'This username already exists. Please choose another one.'));
        $this->form_validation->set_rules('fname', 'First name', 'trim|required|alpha_numeric|min_length[3]');
        $this->form_validation->set_rules('lname', 'Last name', 'trim|required|alpha_numeric|min_length[3]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('password_confirm', 'Confirm Password', 'trim|required|min_length[6]|matches[password]');

        if ($this->form_validation->run() === false) {

            // validation not ok, send validation errors to the view
            $this->load->view('templates/header');
            $this->load->view('user/register/register', $data);
            $this->load->view('templates/footer');

        } else {

            // set variables from the form
            $username = $this->input->post('username');
            $email    = $this->input->post('email');
            $password = $this->input->post('password');
            $fname = $this->input->post('fname');
            $lname = $this->input->post('lname');

            if ($this->user_model->create_user($username,  $email, $password, $fname, $lname)) {

                // user creation ok
                $this->load->view('templates/header');
                $this->load->view('user/register/register_success', $data);
                $this->load->view('templates/footer');

            } else {

                // user creation failed, this should never happen
                $data->error = 'There was a problem creating your new account. Please try again.';

                // send error to the view
                $this->load->view('templates/header');
                $this->load->view('user/register/register', $data);
                $this->load->view('templates/footer');

            }

        }

    }






    /**
     * login function.
     *
     * @access public
     * @return void
     */
    public function login() {

        // create the data object
        $data = new stdClass();

        // load form helper and validation library
        $this->load->helper('form');
        $this->load->library('form_validation');

        // set validation rules
        $this->form_validation->set_rules('username', 'Username', 'required|alpha_numeric');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == false) {

            // validation not ok, send validation errors to the view
            $this->load->view('templates/header');
            $this->load->view('user/login/login');
            $this->load->view('templates/footer');

        } else {

            // set variables from the form
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            if ($this->user_model->resolve_user_login($username, $password)) {

                $user_id = $this->user_model->get_user_id_from_username($username);
                $user    = $this->user_model->get_user($user_id);

                // set session user datas
                $_SESSION['user_id']      = (int)$user->id;
                $_SESSION['username']     = (string)$user->username;
                $_SESSION['fname']     = (string)$user->fname;
                $_SESSION['lname']     = (string)$user->lname;
                $_SESSION['email']     = (string)$user->email;
                $_SESSION['logged_in']    = (bool)true;
                $_SESSION['is_confirmed'] = (bool)$user->is_confirmed;
                $_SESSION['is_admin']     = (bool)$user->is_admin;

                // user login ok
                $this->load->view('templates/header');
                $this->load->view('user/login/login_success', $data);
                $this->load->view('templates/footer');

            } else {

                // login failed
                $data->error = 'Wrong username or password.';

                // send error to the view
                $this->load->view('templates/header');
                $this->load->view('user/login/login', $data);
                $this->load->view('templates/footer');

            }

        }

    }




    /**
     * logout function.
     *
     * @access public
     * @return void
     */
    public function logout() {

        // create the data object
        $data = new stdClass();

        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {

            // remove session datas
            foreach ($_SESSION as $key => $value) {
                unset($_SESSION[$key]);
            }

            // user logout ok
            $this->load->view('templates/header');
            $this->load->view('user/logout/logout_success', $data);
            $this->load->view('templates/footer');

        } else {

            // there user was not logged in, we cannot logged him out,
            // redirect him to site root
            redirect('/');

        }

    }
    public function edit($username = false) {

        // a user cann only edit his own profile
        if ($username === false || $username !== $_SESSION['username']) {

        }

        // create the data object
        $data = new stdClass();

        // load form helper and form validation library
        $this->load->helper('form');
        $this->load->library('form_validation');

        // form validation
        $password_required_if = $this->input->post('password') ? '|required' : ''; // if there is something on password input, current password is required
        $this->form_validation->set_rules('username', 'Username', 'trim|min_length[4]|max_length[20]|alpha_numeric|is_unique[users.username]', array('is_unique' => 'This username already exists. Please choose another username.'));
        $this->form_validation->set_rules('email', 'Email', 'trim|valid_email|is_unique[users.email]', array('is_unique' => 'The email you entered already exists in our database.'));
        $this->form_validation->set_rules('current_password', 'Current Password', 'trim' . $password_required_if . '|callback_verify_current_password');
        $this->form_validation->set_rules('password', 'New Password', 'trim|min_length[6]|matches[password_confirm]');
        $this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'trim|min_length[6]');

        // get the user object
        $user_id = $this->user_model->get_user_id_from_username($username);
        $user    = $this->user_model->get_user($user_id);

        // create breadcrumb
        $breadcrumb  = '<ol class="breadcrumb">';
        $breadcrumb .= '<li><a href="' . base_url() . '">Home</a></li>';
        $breadcrumb .= '<li><a href="' . base_url('user/' . $username) . '">' . $username . '</a></li>';
        $breadcrumb .= '<li class="active">Edit</li>';
        $breadcrumb .= '</ol>';

        // assign objects to the data object
        $data->user       = $user;
        $data->breadcrumb = $breadcrumb;

        if ($this->form_validation->run() === false) {

            // validation not ok, send validation errors to the view
            $this->load->view('templates/header');
            $this->load->view('user/profile/edit', $data);
            $this->load->view('templates/footer');

        } else {

            $user_id = $_SESSION['user_id'];
            $update_data = [];

            if ($this->input->post('username') != '') {
                $update_data['username'] = $this->input->post('username');
            }
            if ($this->input->post('email') != '') {
                $update_data['email'] = $this->input->post('email');
            }

            if ($this->input->post('fname') != '') {
                $update_data['fname'] = $this->input->post('fname');
            }

            if ($this->input->post('lname') != '') {
                $update_data['lname'] = $this->input->post('lname');
            }
            if ($this->input->post('password') != '') {
                $update_data['password'] = $this->input->post('password');
            }



            // if everything is ok
            if ($this->user_model->update_user($user_id, $update_data)) {

                // if username change, update session
                if(isset($update_data['username'])) {
                    $_SESSION['username'] = $update_data['username'];
                    if ($this->input->post('username') != '') {
                        // a little hook to send success message the new profile edit url if the username was updated
                        $_SESSION['flash']    = 'Your profile has been successfully updated!';
                    }
                }



                if ($this->input->post('username') != '') {

                    // redirect to the new profile edit url
                    redirect(base_url('index.php/user/' . $update_data['username'] .'/edit', 'refresh'));

                } else {

                    // create a success message
                    $data->success = 'Your profile has been successfully updated!';

                    // send success message to the views
                    $this->load->view('templates/header');
                    $this->load->view('user/profile/edit', $data);
                    $this->load->view('templates/footer');

                }

            } else {

                // update user not ok : this should never happen
                $data->error = 'There was a problem updating your account. Please try again.';

                //send errors to the views
                $this->load->view('templates/header');
                $this->load->view('user/profile/edit', $data);
                $this->load->view('templates/footer');

            }

        }

    }

    /**
     * delete function.
     *
     * @access public
     * @param mixed $username (default: false)
     * @return void
     */
    public function delete($username = false) {

        // a user can only delete his own profile and must be logged in
        if ($username == false || !isset($_SESSION['username']) || $username !== $_SESSION['username']) {
            redirect('/');
            return;
        }

        // create the data object
        $data = new stdClass();

        if ($_SESSION['username'] === $username) {

            // create breadcrumb
            $breadcrumb  = '<ol class="breadcrumb">';
            $breadcrumb .= '<li><a href="' . base_url() . '">Home</a></li>';
            $breadcrumb .= '<li><a href="' . base_url('user/' . $username) . '">' . $username . '</a></li>';
            $breadcrumb .= '<li class="active">Delete</li>';
            $breadcrumb .= '</ol>';

            $user_id          = $this->user_model->get_user_id_from_username($username);
            $data->user       = $this->user_model->get_user($user_id);
            $data->breadcrumb = $breadcrumb;

            if ($this->user_model->delete_user($user_id)) {

                $data->success = 'Your user account has been successfully deleted';

                // user delete ok, load views
                $this->load->view('templates/header');
                $this->load->view('user/profile/delete', $data);
                $this->load->view('templates/footer');

            } else {

                // user delete not ok, this should never happen
                $data->error = 'There was a problem deleting your user account. Please contact an administrator.';

                // send errors to the views
                $this->load->view('templates/header');
                $this->load->view('user/profile/edit', $data);
                $this->load->view('templates/footer');

            }

        } else {

            // a user can only delete his own profile and must be logged in
            redirect(base_url());
            return;

        }

    }

    public function verify_current_password($str) {

        if ($str != '') {

            if ($this->user_model->resolve_user_login($_SESSION['username'], $str) === true) {
                return true;
            }
            $this->form_validation->set_message('verify_current_password', 'The {field} field does not match your password.');
            return false;

        }
        return true;

    }



       }?>