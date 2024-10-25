<?php
require_once __DIR__ . '/../models/Dictionary.php';

class DictionaryController {
    public function index() {
        include __DIR__ . '/../views/index.php';
    }

    public function showDefinition() {
        $word = isset($_GET['word']) ? trim($_GET['word']) : '';
        $definition = null;

        if (!empty($word)) {
            $definition = Dictionary::findWord($word);
        }
        include __DIR__ . '/../views/definition.php';
    }
}
