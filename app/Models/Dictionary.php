<?php
require_once __DIR__ . '/../../config/database.php';

class Dictionary {
    public static function findWord($word) {
        $conn = getConnection();
        $stmt = $conn->prepare("SELECT * FROM dictionary WHERE word = ?");
        $stmt->bind_param("s", $word);
        $stmt->execute();
        $result = $stmt->get_result();
        $definition = $result->fetch_assoc();
        $stmt->close();
        $conn->close();
        return $definition;
    }
}
