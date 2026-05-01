<?php

namespace App\Controllers;

use App\Models\User;

class UserController
{
    private $model;

    public function __construct()
    {
        $this->model = new User();
    }

    public function index()
    {
        $users = $this->model->all();
        // Adicionado o parêntese conforme sua preferência
        require('../app/Views/users/index.php');
    }

    public function edit($id)
    {
        $user = $this->model->find($id);
        require('../app/Views/users/edit.php');
    }

    public function create()
    {
        require('../app/Views/users/create.php');
    }

    public function show($id)
    {
        $user = $this->model->find($id);
        require('../app/Views/users/show.php');
    }

    public function store()
    {
        $this->model->create($_POST);
        header('Location: /Mvc/user');
    }

    public function update($id)
    {
        $this->model->update($id, $_POST);
        header('Location: /Mvc/user');
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header('Location: /Mvc/user');
    }
}
