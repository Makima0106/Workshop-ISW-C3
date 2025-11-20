<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $table         = 'students';
    
    protected $primaryKey    = 'id_student';

    protected $allowedFields = ['first_name', 'last_name', 'id_carrer'];

    protected $useTimestamps = false;
}