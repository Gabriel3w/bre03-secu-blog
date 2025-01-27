<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */
class Post {
    public int $id;
    public string $title;
    public string $excerpt;
    public string $content;
    public string $author;
    public DateTime $created_at;
    public User $user;  // Instance de User
    public array $categories;  // Liste des catégories liées

    public function __construct(int $id, string $title, string $excerpt, string $content, string $author, DateTime $created_at, User $user, array $categories) {
        $this->id = $id;
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->content = $content;
        $this->author = $author;
        $this->created_at = $created_at;
        $this->user = $user;  // L'utilisateur qui a créé le post
        $this->categories = $categories;  // Les catégories liées à ce post
    }
}
?>