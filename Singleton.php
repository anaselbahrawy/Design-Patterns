<?php
/*
* Design Patterns
* Singleton Design Patterns
* Example
*/

class Registry
{

  private static $instance;         // it use a create new in this class when called namespace global

  private function __construct(){}  //this is meaning not access anywhere this class

  private function __clone(){}     // this is meaning not editing the class, it use change method before called

  public static function getInstance()  //the function check the class exist or no, if not exist it is exist call
  {
    if (self::$instance === null) {
       self::$instance = new self();
    }
    return self::$instance;
  }

}
var_dump(Registry::getInstance());

//$reg = new Registry(); //  Uncaught Error: Call to private Registry::__construct() , can't call class is construct private
