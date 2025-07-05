<?php
require_once $_SERVER["PWD"].'/Core/Model.php';

class TestModel extends Model {
    public function testConnection() {
        try {
            $this->db->query('SELECT 1');
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}
?>
