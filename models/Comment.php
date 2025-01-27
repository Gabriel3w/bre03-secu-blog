<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */

class Comment {
    public int $id;
    public string $content;
    public User $user;  // Instance de User
    public Post $post;  // Instance de Post

    public function __construct(int $id, string $content, User $user, Post $post) {
        $this->id = $id;
        $this->content = $content;
        $this->user = $user;
        $this->post = $post;
    }
}
?>