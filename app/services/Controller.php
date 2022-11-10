<?php
//Load the model and the view
class Controller
{
    public function model($model)
    {
        //Require model file

        require_once '../app/models/' . $model . '.php';
        //Instantiate model
        return new $model();
    }

    //Load the view (checks for the file, and also passes the data to the view)
    public function view($view, $data = [])
    {
        foreach ($data as $key => $value) {
            $$key = $value;
        }
     
        if (file_exists('../app/views/' . $view . '.php')) {
            require_once '../app/views/' . $view . '.php';
        } else {
            die("View does not exists.");
        }
    }
}
