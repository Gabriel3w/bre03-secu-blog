<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class CategoryManager extends AbstractManager
{

public function findAll() {
        // Retourne toutes les catégories
        $sql = "SELECT * FROM categories";
        $result = $db->query($sql);
        $categories = [];
        while ($row = $result->fetch()) {
            $categories[] = new Category($row['id'], $row['name']);
        }
        return $categories;
    }

    public function findOne(int $id) {
        // Retourne une catégorie par ID
        $sql = "SELECT * FROM categories WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$id]);
        $row = $stmt->fetch();
        if ($row) {
            return new Category($row['id'], $row['name']);
        }
        return null;
    }
}