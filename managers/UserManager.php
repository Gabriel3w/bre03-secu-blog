<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class UserManager extends AbstractManager
{
public function findByEmail(string $email) {
        // Retourne un utilisateur par email
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$email]);
        $row = $stmt->fetch();
        if ($row) {
            return new User($row['id'], $row['username'], $row['email'], $row['password'], $row['role'], $row['created_at']);
        }
        return null;
    }

    public function create(User $user) {
        // Insère un utilisateur
        $sql = "INSERT INTO users (username, email, password, role, created_at) VALUES (?, ?, ?, ?, ?)";
        $stmt = $db->prepare($sql);
        $stmt->execute([$user->username, $user->email, password_hash($user->password, PASSWORD_BCRYPT), $user->role, $user->created_at]);
    }
    
}