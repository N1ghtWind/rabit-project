<?php
/*
   * App Core Class
   * Creates URL & loads core controller
   * URL FORMAT - /controller/method/params

*/
class Core
{
    protected $currentController = 'Client';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct()
    {

        // gets the url data
        $url = $this->getUrl();

        // if the url is empty then it will load the default route
        $url ? $url : $url = ['Client', 'index'];

    
        // Require the controller
        require_once '../app/controllers/' . $this->currentController . '.php';

        // Instantiate controller class
        $this->currentController = new $this->currentController;

        // Check for the route
        if (isset($url[0])) {
            // Check to see if method exists in controller
            if (method_exists($this->currentController, $url[0])) {

                // Set current method
                $this->currentMethod = $url[0];

                // Unset the url[0] index for the next request
                unset($url[0]);
            }
        }

        // Get params
        $this->params = $url ? array_values($url) : [];

        // Call a callback with array of params
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }

    public function getUrl()
    {
        // Check if any url is set
        if (isset($_GET['url'])) {

            // Remove the last slash
            $url = rtrim($_GET['url'], '/');

            // Sanitize the url
            $url = filter_var($url, FILTER_SANITIZE_URL);

            // Break the url into an array
            $url = explode('/', $url);
            return $url;
        }
    }
}
