<?php
class ErrorController extends Controller
{
    public function index()
    {
        if (isset($_GET["debug"]) and $_GET["debug"] == true) {
            require_once $_SERVER["PWD"] . '/Tests/run_tests.php';
        } else {
            $this->view('error/index', ['title' => 'Error']);
        }
    }
}
