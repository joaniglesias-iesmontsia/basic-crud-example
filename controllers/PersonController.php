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
        }
    }

    public function update($id,$name,$surname) {
        $this->model->update($id, $name, $surname);
        header("Location: index.php");
    }

    public function delete($id) {
        $this->model->delete($id);
        header("Location: index.php");
    }
}
?>
