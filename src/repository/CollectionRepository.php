<?php

namespace repository;

require_once "Repository.php";

class CollectionRepository extends Repository
{
    public function findOrCreateCollection(string $collectionName): int
    {
        $collectionName = strtoupper($collectionName);
        $conn = $this->database->connect();

        $stmt = $conn->prepare("SELECT id FROM collections WHERE name = :name");
        $stmt->bindParam(':name', $collectionName);
        $stmt->execute();
        $foundId = $stmt->fetchColumn();
        if ($foundId) {
            return $foundId;
        }

        $stmt2 = $conn->prepare("INSERT INTO collections (name) VALUES (:name) RETURNING id");
        $stmt2->bindParam(':name', $collectionName);
        $stmt2->execute();
        return $stmt2->fetchColumn();
    }

    public function getCollectionIdByName(string $collectionName): ?int
    {
        $collectionName = strtoupper($collectionName);
        $conn = $this->database->connect();
        $stmt = $conn->prepare("SELECT id FROM collections WHERE name = :name");
        $stmt->bindParam(':name', $collectionName);
        $stmt->execute();
        $id = $stmt->fetchColumn();
        return $id ?: null;
    }
}