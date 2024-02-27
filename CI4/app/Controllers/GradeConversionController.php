<?php

namespace App\Controllers;

use App\Models\GradeModel;
use CodeIgniter\Controller;


class GradeConversionController extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('grade_conversion');
    }

    public function convert()
{
    helper(['form']);
    $validationRules = [
        'partisipasi' => 'required|numeric|greater_than_equal_to[0]|less_than_equal_to[100]',
        'tugas' => 'required|numeric|greater_than_equal_to[0]|less_than_equal_to[100]',
        'uts' => 'required|numeric|greater_than_equal_to[0]|less_than_equal_to[100]',
        'uas' => 'required|numeric|greater_than_equal_to[0]|less_than_equal_to[100]'
    ];
    if ($this->validate($validationRules)) {
        $partisipasi = $_POST['partisipasi'];
        $tugas = $_POST['tugas'];
        $uts = $_POST['uts'];
        $uas = $_POST['uas'];
        $na = $partisipasi * 0.1 + $tugas * 0.2 + $uts * 0.3 + $uas * 0.4;
        $nh = $this->convertToLetterGrade($na);
        echo view('grade_conversion_result', ['na' => $na, 'nh' => $nh]);
    } else {
        echo view('grade_conversion');
    }
}

private function convertToLetterGrade($na)
{
    if ($na >= 85) {
        return 'A';
    } elseif ($na >= 80) {
        return 'A-';
    } elseif ($na >= 75) {
        return 'B+';
    } elseif ($na >= 70) {
        return 'B';
    } elseif ($na >= 65) {
        return 'B-';
    } elseif ($na >= 60) {
        return 'C+';
    } elseif ($na >= 55) {
        return 'C';
    } elseif ($na >= 40) {
        return 'D';
    } else {
        return 'E';
    }
}

}
