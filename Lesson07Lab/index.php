<?php
// index.php
// index.php

require_once 'app/controllers/UserController.php';
require_once 'app/models/UserModel.php';
require_once 'config/database.php';
// Tạo kết nối cơ sở dữ liệu
$db = new Database();
$dbConnection = $db->getConnection();

// Tạo đối tượng UserModel
//$userModel = new UserModel($dbConnection);

// Tạo đối tượng UserController và truyền đối tượng UserModel vào
//$userController = new UserController($userModel);

// Kiểm tra và gọi phương thức tương ứng của controller
$controllerName = isset($_GET['controller']) ? $_GET['controller'] : 'user';
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

// Lấy tên model
$modelClass = ucfirst($controllerName) . 'Model';
require_once 'app/models/'.$modelClass.'.php';

// Tạo đối tượng UserModel
$model = new $modelClass($dbConnection);

// Lấy tên controller
$controllerClass = ucfirst($controllerName) . 'Controller';
require_once 'app/controllers/'.$controllerClass .'.php';

// Tạo đối tượng controller
$controller = new $controllerClass($model);

if (method_exists($controller, $actionName)) {
    // gọi phương thức trong contrller
    $controller->$actionName();
} else {
    echo "Action not found!";
}
