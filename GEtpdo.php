<?php
    try {
        $pdo = new PDO($dsn, $dbUser, $dbPass);
        if ($pdo) {
            return $pdo;
        } else {
            echo "Intern server-error";
        }
    } catch(PDOException $e) {
        $e->getMessage();
    }