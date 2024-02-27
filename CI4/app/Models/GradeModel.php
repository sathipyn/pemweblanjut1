<?php

namespace App\Models;

use CodeIgniter\Model;

class GradeModel extends Model
{
    protected $table = 'grades';
    protected $allowedFields = ['partisipasi', 'tugas', 'uts', 'uas'];
}


