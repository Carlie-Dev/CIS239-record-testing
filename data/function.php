<?php 
// data/function.php
    function formats_all(): array {
        require 'db.php';
        $pdo = get_pdo();
        $stmt = $pdo->query('SELECT * FROM formats ORDER BY name DESC');
        return $stmt->fetchAll();
    }
?>