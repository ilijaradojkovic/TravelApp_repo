<?php
require 'IProducts.php';
require 'Database.php';
class ProductControl implements IProducts{

  
    private static  $instance=null;
     public $res ;
     public $drzave;

    private function __construct()
    {
    
    }

    public static function getInstance(){
        if(self::$instance==null) self::$instance=new ProductControl();
        return self::$instance;
   
    }

    public function getAllDrzave()
    {
        $query="SELECT * from drzava";
        $this->drzave=Database::getInstance()->conn->query($query);
        
    }
    function insertGrad($ImeGrada,$Cena,$DrzavaID){
        $query ="INSERT INTO grad(Ime,Cena,DrzavaID) VALUES('$ImeGrada','$Cena','$DrzavaID')";
        if(Database::getInstance()->conn->query($query)) return 1;
        else return -1;
    }
    function updateGrad(){

    }
    function deleteGrad($id){
        $query="DELETE FROM grad WHERE GradID='$id'";
        if(Database::getInstance()->conn->query($query)) return 1;
        else return -1;

    }
    function getAllGradovi(){

        $query="SELECT g.GradID as GradID ,d.Ime as ImeDrzave,g.Ime as ImeGrada,g.Cena as Cena FROM drzava d JOIN grad g ON d.DrzavaID=g.DrzavaID;";
        $this->res=Database::getInstance()->conn->query($query);
        if($this->res->num_rows!=0) return "Success";
        
        else return "Failed";
    }
}