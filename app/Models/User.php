<?php

namespace App\Models;

use Core\Database;
use PDO;

class User
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function all()
    {
        $stmt = $this->db->query("SELECT * FROM USER_MVC"); // Alterado: USER_MVC
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM USER_MVC WHERE ID = ?"); // Alterado: USER_MVC
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data)
    {
        $stmt = $this->db->prepare("INSERT INTO USER_MVC (NOME, EMAIL) VALUES (?,?)"); // Alterado: USER_MVC
        return $stmt->execute([$data['nome'], $data['email']]);
    }

    public function update($id, $data)
    {
        $stmt = $this->db->prepare("UPDATE USER_MVC SET NOME=?, EMAIL=? WHERE ID = ?"); // Alterado: USER_MVC
        return $stmt->execute([$data['nome'], $data['email'], $id]);
    }

    public function delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM USER_MVC WHERE ID = ?"); // Alterado: USER_MVC
        return $stmt->execute([$id]);
    }
}
