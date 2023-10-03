<?php 
function getArticles(){
    try {
        $db = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->exec('SET NAMES utf8');

        $sql = "SELECT title, content, image  FROM articles ORDER BY id DESC LIMIT 3";
        $query = $db->query($sql);
        $articles = $query->fetchAll();
        return $articles;
    }
    catch (PDOException $e) {
        die('Erreur : ' . $e->getMessage()); 
    }
}

