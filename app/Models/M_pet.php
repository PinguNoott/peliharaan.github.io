<?php

namespace App\Models;

use CodeIgniter\Model;

class M_pet extends Model
{
    protected $table = 'user'; // Default table is 'user'
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['username', 'password', 'email', 'level'];
    protected $useTimestamps = false;

    // Method for handling 'gambar' table
    public function gambar()
    {
        $this->table = 'gambar'; // Switch to 'gambar' table
        $this->primaryKey = 'id_gambar'; // Set primary key
        $this->allowedFields = ['makanan', 'habitat', 'merawat', 'kelebihan', 'kekurangan', 'jenis', 'foto'];
        return $this;
    }


public function update($id = null, $data = null): bool
{
    return $this->db->table('gambar')->update($data, ['id_gambar' => $id]);
}

public function addUser($data)
{
    return $this->insert($data);
}
public function getById($id)
{
    // Query manual dengan builder
    $query = $this->db->query("SELECT * FROM gambar WHERE id_gambar = ?", [$id]);
    return $query->getRow(); // Mengembalikan satu baris hasil
}

    public function tampil($tabel)
    {
        return $this->db
                    ->table($tabel)
                    ->get()
                    ->getResult();
    }
    public function edit($tabel, $data, $where)
    {
        return $this->db
                    ->table($tabel)
                    ->update($data,$where);
    }
    public function getwhere($tabel, $where)
    {
        return $this->db
                    ->table($tabel)
                    ->getWhere($where)
                    ->getRow();
    }
    public function tambah($tabel, $data)
    {
        return $this->db
                    ->table($tabel)
                    ->insert($data);
                    
    }

    public function hapus($tabel, $where)
    {
        return $this->db
                    ->table($tabel)
                    ->delete($where);
    }
}