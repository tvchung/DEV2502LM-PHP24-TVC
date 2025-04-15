<?php
class UserController {
    private $model;
    public function __construct($model) {
        $this->model = $model;
    }
    public function index() {
        $users = $this->model->getAllUsers();
        include __DIR__ .'../../views/user_list.php';

    }
}
