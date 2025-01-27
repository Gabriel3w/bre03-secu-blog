<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */
class Category {
    public int $id;
    public string $title;
    public ?string $description;  // La description peut être null, donc elle est de type ?string

    public function __construct(int $id, string $title, ?string $description = null) {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
    }
}
?>