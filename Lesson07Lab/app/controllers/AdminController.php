<?php
class AdminController {
    private $model;
    public function __construct($model) {
        $this->model = $model;
    }
    public function index() {
        $users = $this->model->getAllAdmins();
        include __DIR__ .'../../views/admin_list.php';

    }
}
