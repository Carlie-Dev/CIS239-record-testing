<?php 
// data/function.php
    require 'db.php';
    
    function formats_all(): array {
        $pdo = get_pdo();
        $stmt = $pdo->query('SELECT * FROM formats ORDER BY name DESC');
        return $stmt->fetchAll();
    }

    function records_all(): array {
        $pdo = get_pdo();
        $stmt = $pdo->query('SELECT * FROM records JOIN formats ON records.format_id = formats.id');
        return $stmt->fetchAll();
    }
?>