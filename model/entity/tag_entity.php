<?php

function getAllTagsByPhoto(int $id): array {
    global $connection;
    
    $query = "SELECT
                tag.id,
                tag.libelle
            FROM tag
            INNER JOIN photo_has_tag ON tag.id = photo_has_tag.tag_id
            WHERE photo_has_tag.photo_id = :id;";
    
    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    
    return $stmt->fetchAll();
}

function insertTags(string $libelle) {
    global $connection;
    
    $query = "INSERT INTO tag (libelle) VALUES (:libelle)";
    
    $stmt = $connection->prepare($query);
    $stmt->bindParam(':libelle', $libelle);
    $stmt->execute();
    
    return $stmt->fetch();
}

function updateTags(int $id, string $libelle) {
    global $connection;
    
    $query = "UPDATE tag SET libelle = :libelle WHERE id = :id";
    
    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':libelle', $libelle);
    $stmt->execute();
    
    return $stmt->fetch();
}