<?php
require APPPATH . '/libraries/REST_Controller.php';

class Example_api extends REST_Controller {

    function user_get()
    {
      $this->response("My first api call");
    }

    function users_get()
    {
        // respond with information about several users
    }
}
