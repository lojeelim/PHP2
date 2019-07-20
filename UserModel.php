<?php
require ("Database.php");
class UserModel{
    public $name;
    public $email;
    public $password;
    public $address;
    private $db;
    public $id;
    private $tablename = "databasetable";

    public function __construct(){
        $this->db = new Database();
    }


    public function insert(){
        $sql = "INSERT INTO $this->tablename (name, email,password,address) VALUES('$this->name','$this->email', '$this->password' , '$this->address')";
        if($this->db->execute($sql)){
            return true;
        }
        else{
            return false;
        }   
   }

    public function update(){
        $sql = "UPDATE $this->tablename SET name = $this->name , email = $this->email , password = $this->password, address = $this->address  WHERE id=$this->id ";
        if($this->db->execute($sql)){
            return true;
        }
        else{
            return false;
        }
    }


    public function readAll(){
        $sql = "SELECT * FROM $this->tablename";
        if($this->db->execute($sql)){
            return true;
        }
        else{
            return false;
        }
     }
    
    public function delete(){
        $sql = "DELETE FROM databasetable WHERE id =$this->id ";
        if($this->db->execute($sql)){
            return true;
        }
        else{
            return false;
        }
     
    }


    public function __destruct(){
        unset($this->db);
    }
}
// $userModel = new UserModel();
// $userModel->name = "Art";
// $userModel->email = "a@y.ocm";
// $userModel->username = "art123";
// $userModel->password = "testpassword";
// $userModel->insert();
?>