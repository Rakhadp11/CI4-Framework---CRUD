<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table = 'contact';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'phone', 'alamat'];

    public function search($keyword)
    {
        return $this->table('contact')->like('nama', $keyword)->orLike('alamat', $keyword);
    }
}
