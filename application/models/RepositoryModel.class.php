<?php
// application/models/RepositoryModel.class.php

class RepositoryModel extends Model {
    
    // repositories :: void -> [[string -> a]]|false
    public function repositories() {
        $sql = "SELECT * FROM {$this->table}";
        $repositories = $this->db->rows($sql);

        return $repositories;
    }
}