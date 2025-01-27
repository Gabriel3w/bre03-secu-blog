<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class PostManager extends AbstractManager
{
 public function findLatest() {
        // Retourne les 4 derniers posts
        $sql = "SELECT * FROM posts ORDER BY created_at DESC LIMIT 4";
        $result = $db->query($sql);
        $posts = [];
        while ($row = $result->fetch()) {
            // Hydratation des objets User et Category pour chaque post
            $user = new User($row['user_id'], $row['username'], $row['email'], $row['password'], $row['role'], $row['created_at']);
            $categories = []; // Ici, vous ajouteriez les catégories du post en fonction de la table `posts_categories`
            $posts[] = new Post($row['id'], $row['title'], $row['content'], $user, $categories, $row['created_at']);
        }
        return $posts;
    }

    public function findOne(int $id) {
        // Retourne un post par ID
        $sql = "SELECT * FROM posts WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$id]);
        $row = $stmt->fetch();
        if ($row) {
            return new Post($row['id'], $row['title'], $row['content'], $row['user'], $row['category'], $row['created_at']);
        }
        return null;
    }

    public function findByCategory(int $categoryId) {
        // Retourne les posts pour une catégorie donnée
        $sql = "SELECT * FROM posts p JOIN posts_categories pc ON p.id = pc.post_id WHERE pc.category_id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$categoryId]);
        $posts = [];
        while ($row = $stmt->fetch()) {
            // Hydrater un objet Post
            $posts[] = new Post($row['id'], $row['title'], $row['content'], $row['user'], $row['category'], $row['created_at']);
        }
        return $posts;
    }
}