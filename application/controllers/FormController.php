<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FormController extends CI_Controller
{

  public function index()
  {
    // Load the view that displays the form
    $this->load->view('form_view');
  }

  public function process_form()
  {
    // Load the User_model
    $this->load->model('User_model');

    // Handle form submission here
    $email = $this->input->post('email');
    $comment = $this->input->post('comment');

    // Prepare the data to be saved
    $user_data = array(
      'email' => $email,
      'comment' => $comment,
    );

    // Save the user data using the model
    $user_id = $this->User_model->save_user($user_data);

    // Pass the data back to the form view
    $data['email'] = $email;
    $data['comment'] = $comment;

    // Load the view that displays the form with the submitted data
    $this->load->view('form_view', $data);
  }
}