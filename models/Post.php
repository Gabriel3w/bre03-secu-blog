<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */
class Post {
    public ?int $id = null; // L'ID peut être null par défaut
    public string $title;
    public string $excerpt;
    public string $content;
    public string $author;
    public DateTime $created_at;
    public User $user;  // Instance de User
    public array $categories;  // Liste des catégories liées

    // Constructeur
    public function __construct( string $title, string $excerpt, string $content, string $author, DateTime $created_at, User $user, array $categories) {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->content = $content;
        $this->author = $author;
        $this->created_at = $created_at;
        $this->user = $user;
        $this->categories = $categories;
    }

    // Getter et Setter pour l'ID
    public function getId(): ?int {
        return $this->id;
    }

    public function setId(?int $id): void {
        $this->id = $id;
    }

    // Getter et Setter pour le titre
    public function getTitle(): string {
        return $this->title;
    }

    public function setTitle(string $title): void {
        $this->title = $title;
    }

    // Getter et Setter pour l'extrait
    public function getExcerpt(): string {
        return $this->excerpt;
    }

    public function setExcerpt(string $excerpt): void {
        $this->excerpt = $excerpt;
    }

    // Getter et Setter pour le contenu
    public function getContent(): string {
        return $this->content;
    }

    public function setContent(string $content): void {
        $this->content = $content;
    }

    // Getter et Setter pour l'auteur
    public function getAuthor(): string {
        return $this->author;
    }

    public function setAuthor(string $author): void {
        $this->author = $author;
    }

    // Getter et Setter pour la date de création
    public function getCreatedAt(): DateTime {
        return $this->created_at;
    }

    public function setCreatedAt(DateTime $created_at): void {
        $this->created_at = $created_at;
    }

    // Getter et Setter pour l'utilisateur (User)
    public function getUser(): User {
        return $this->user;
    }

    public function setUser(User $user): void {
        $this->user = $user;
    }

    // Getter et Setter pour les catégories
    public function getCategories(): array {
        return $this->categories;
    }

    public function setCategories(array $categories): void {
        $this->categories = $categories;
    }
}
?>