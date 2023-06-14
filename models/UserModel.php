<?php

require 'connection.php';

class UserModel extends DB {
    // Database connection and other necessary properties

    public function INSERINGDB($name,$email,$password) {
        $this->db->query("insert into form (name,email,pass) values('$name','$email','$password')");
        header("location:/");
        // Perform database insert operation using $data
    }

    public function read($id) {
        $data = $this->db->query("select * from form where id='$id' ");
        $alldata= $data->fetchAll();
        return $alldata;
        // Perform database select operation based on $id
    }

    public function update($id,$name,$email,$password) {
            $this->db->query("Update form set name ='$name',email='$email',pass='$password' where id ='$id'");
            header("location:/");
        // Perform database update operation based on $id and $data
    }

    public function delete($id) {
        $this->db->query("delete  from form where id=$id ");
        // Perform database delete operation based on $id
        header("location:/");

    }

    public function getAllUsers() {
        $select = $this->db->query("SELECT * FROM form");
        $select->execute();
        $getdatas = $select ->fetchAll(PDO::FETCH_OBJ);
        return $getdatas;
        // Retrieve all users from the database
    }
}