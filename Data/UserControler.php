<?php

require 'IUser.php';
require 'Database.php';
class UserControler implements IUser{

  
    private static  $instance=null;
    private function __construct()
    {
    
    }

    public static function getInstance(){
        if(self::$instance==null) self::$instance=new UserControler();
        return self::$instance;
   
    }
    //Overrides
  public  function tryToLogin($username,$password){
      $query="select * from users where username='$username' and password='$password'";
        $result=Database::getInstance()->conn->query($query);
        if($result->num_rows) return $result->num_rows;
        else return -1;
    }
    //Overrides
   public function tryToRegister($username,$password,$passwordRepeat){

    }
    
}