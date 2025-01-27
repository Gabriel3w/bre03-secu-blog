<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */

class Comment {
    public ?int $id = null;  // L'ID peut être null par défaut
    public string $content;
    public User $user;  // Instance de User
    public Post $post;  // Instance de Post

    // Constructeur
    public function __construct( string $content, User $user, Post $post) {
       
        $this->content = $content;
        $this->user = $user;
        $this->post = $post;
    }

    // Getter et Setter pour le contenu
    public function getContent(): string {
        return $this->content;
    }

    public function setContent(string $content): void {
        $this->content = $content;
    }

    // Getter et Setter pour l'utilisateur (User)
    public function getUser(): User {
        return $this->user;
    }

    public function setUser(User $user): void {
        $this->user = $user;
    }

    // Getter et Setter pour le post (Post)
    public function getPost(): Post {
        return $this->post;
    }

    public function setPost(Post $post): void {
        $this->post = $post;
    }
}
?>