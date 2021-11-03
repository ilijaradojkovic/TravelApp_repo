<?php
require 'IProducts.php';
require 'Database.php';
class ProductControl implements IProducts{

  
    private static  $instance=null;
     public $res ;

    private function __construct()
    {
    
    }

    public static function getInstance(){
        if(self::$instance==null) self::$instance=new ProductControl();
        return self::$instance;
   
    }

    function insertGrad(){

    }
    function updateGrad(){

    }
    function deleteGrad(){

    }
    function getAllGradovi(){
        $query="Select * from grad";
        $this->res=Database::getInstance()->conn->query($query);
        if($this->res->num_rows!=0) return "Success";
        
        else return "Failed";
    }
}