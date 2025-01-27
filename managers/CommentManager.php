<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class CommentManager extends AbstractManager
{
 public function findByPost(int $postId) {
        // Retourne les commentaires pour un post donné
        $sql = "SELECT * FROM comments WHERE post_id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$postId]);
        $comments = [];
        while ($row = $stmt->fetch()) {
            // Hydrater un objet Comment
            $comments[] = new Comment($row['id'], $row['content'], $row['user'], $row['post'], $row['created_at']);
        }
        return $comments;
    }

    public function create(Comment $comment) {
        // Insère un commentaire
        $sql = "INSERT INTO comments (content, user_id, post_id, created_at) VALUES (?, ?, ?, ?)";
        $stmt = $db->prepare($sql);
        $stmt->execute([$comment->content, $comment->user->id, $comment->post->id, $comment->created_at]);
    }
}