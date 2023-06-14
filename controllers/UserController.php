<?php
require "models/UserModel.php";

class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function create($value) {
        $this->userModel->INSERINGDB($value['User_Name'],$value['User_Email'],$value['Password']);
//        var_dump($value);
        // Handle form submission for creating a new user 
    }

    public function edit($post) {
        // Handle form submission for updating an existing user
        var_dump($post);
     $this->userModel->update($post['id'],$post['name'],$post['email'],$post['password']);
//    $this->userModel->update('','','','');
    }

    public function delete($id) {
        // Handle user deletion
        echo $id;
        $this->userModel->delete($id);
    }

    public function index() {
 $getUserdata = $this->userModel->getAllUsers();
 require "views/user/index.php";

        // Retrieve all users from the UserModel and load the index view
    }

    public function view($id) {
//        echo $id;
        $user = $this->userModel->read($id);
//        var_dump($user);
        require "views/user/view.php";
        // Retrieve a specific user from the UserModel and load the view view
    }
  
}
