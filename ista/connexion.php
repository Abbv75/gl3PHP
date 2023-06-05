<?php
try {
    $bd = new PDO("mysql:host=localhost;dbname=ista", "root", "");
} catch (Exception $e) {
    die($e->getMessage());
}
