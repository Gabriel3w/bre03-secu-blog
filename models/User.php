<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */
class User {
    public ?int $id = null;
    public string $username;
    public string $email;
    public string $password;
    public string $role;
    public DateTime $created_at;

    // Constructeur
    public function __construct( string $username, string $email, string $password, string $role, DateTime $created_at) {
        
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
        $this->created_at = $created_at;
    }

      // Getter et Setter pour le nom d'utilisateur
    public function getUsername(): string {
        return $this->username;
    }

    public function setUsername(string $username): void {
        $this->username = $username;
    }

    // Getter et Setter pour l'email
    public function getEmail(): string {
        return $this->email;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

    // Getter et Setter pour le mot de passe
    public function getPassword(): string {
        return $this->password;
    }

    public function setPassword(string $password): void {
        $this->password = $password;
    }

    // Getter et Setter pour le rôle
    public function getRole(): string {
        return $this->role;
    }

    public function setRole(string $role): void {
        $this->role = $role;
    }

    // Getter et Setter pour la date de création
    public function getCreatedAt(): DateTime {
        return $this->created_at;
    }

    public function setCreatedAt(DateTime $created_at): void {
        $this->created_at = $created_at;
    }
}
?>