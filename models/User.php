<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */
class User {
    public int $id;
    public string $username;
    public string $email;
    public string $password;
    public string $role;
    public DateTime $created_at;

    public function __construct(int $id, string $username, string $email, string $password, string $role, DateTime $created_at) {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
        $this->created_at = $created_at;
    }
}

?>