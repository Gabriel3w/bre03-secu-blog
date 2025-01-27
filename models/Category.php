<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */
class Category {
    public ?int $id = null;  // L'ID peut être null par défaut
    public string $title;
    public ?string $description;  // La description peut être null

    // Constructeur
    public function __construct(string $title, ?string $description = null) {
        $this->title = $title;
        $this->description = $description;
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

    // Getter et Setter pour la description
    public function getDescription(): ?string {
        return $this->description;
    }

    public function setDescription(?string $description): void {
        $this->description = $description;
    }
}
?>