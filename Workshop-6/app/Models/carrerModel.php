<?php

namespace App\Models;

use CodeIgniter\Model;

class CarrerModel extends Model
{
    protected $table         = 'carrers';

    protected $primaryKey    = 'id_carrer';

    protected $allowedFields = ['code', 'name'];

    protected $useTimestamps = false;
}