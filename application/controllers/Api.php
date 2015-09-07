<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . 'libraries/REST_Controller.php';

/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         CodeIgniter
 * @subpackage      Rest Server
 * @category        Controller
 * @author          Phil Sturgeon, Chris Kacerguis
 * @license         MIT
 * @link            https://github.com/chriskacerguis/codeigniter-restserver
 */
class Api extends REST_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
    }

    function student_get()
    {
        $id = $this->get('id');

        $student = array(
          1=> array('first_name' => 'Chanaka','last_name'=>'De Silva'),
          2=> array('first_name' => 'Dewmal','last_name'=>'Nilanka'),
          3=> array('first_name' => 'Pramoda','last_name'=>'Nadeeshan'),
          4=> array('first_name' => 'Shehan','last_name'=>'Anushka'),
          5=> array('first_name' => 'Nishan','last_name'=>'Lakmal')
        );

        if(isset($student[$id])){
            $this->response(array('status' => 'success', 'message'=>$student[$id]));
        }else{
          $this->response(array('status'=>'failure', 'message'=>'No such student found'),404);
        }
    }
}
