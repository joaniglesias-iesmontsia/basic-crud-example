<?php
require_once 'models/Person.php';

class PersonController {
    private $model;

    public function __construct() {
        $this->model = new Person();
    }

    public function index() {
        $persons = $this->model->getAll();
        require 'views/list.php';
    }

    public function create() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $this->model->create($_POST['name'], $_POST['surname']);
            header("Location: index.php");
        } else {
            require 'views/create.php';
        }
    }
/*
    public function update($id) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $this->model->update($id, $_POST['name'], $_POST['surname']);
            header("Location: index.php");
        } else {
            $person = $this->model->getById($id);
            require 'views/update.php';
        }
    }
*/
    public function delete($id) {
        $this->model->delete($id);
        header("Location: index.php");
    }
}
?>
