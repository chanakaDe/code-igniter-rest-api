<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Model_users extends MY_Model
{

  protected $_table = 'students';
  protected $primary_key = 'student_id';
  protected $return_type = 'array';
}
