<?php
class Client extends Controller
{

    // Loading the models
    public function __construct()
    {
        
        $this->advertisement_model = $this->model('Advertisement');
        $this->user_model = $this->model('User');
    }

    public function index()
    {
        // load the index view
        $this->view('index');
    }

    public function users()
    {
        // Get all users
        $users = $this->user_model->getAllUser();

        // Pass users to the view
        $this->view('users', [
            'users' => $users
        ]);
    }

    public function advertisements()
    {
        // Get all advertisements with users data
        $advertisements = $this->advertisement_model->getAllAdvertisement();

        $this->view('advertisements', [
            'advertisements' => $advertisements
        ]);
        
    }
}
