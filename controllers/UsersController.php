<?php 
/**
* 
*/
class UsersController
{
  
  function index()
  {
    $users = App::get('database')->selectAll('users');

    require 'views/users.view.php';
  }

  public function store()
  {
    App::get('database')->insert("users",[
      "name" => $_POST['name']
    ]);

    header("Location: /users");
  }
}