<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminLab;
use App\Models\Student;
use App\Models\Laboratory;

class SuperAdminController extends Controller
{
    public function index() {
        $adminLabQuantity = AdminLab::count();
        $studentsQuantity = Student::count();
        $labsQuantity = Laboratory::count();

        return view('superadmin.dashboard',
            compact('adminLabQuantity', 'studentsQuantity', 'labsQuantity'));
    }

    public function showLaboratories() {
        $data = Laboratory::simplePaginate(5);

        foreach ($data as $lab) {
            $headAdmin = $lab->adminlabs->where('is_head_admin', true)->first();
            $lab->headAdminName = $headAdmin ? $headAdmin->user->name : 'Nobody';
        }

        return view('superadmin.laboratories', compact('data'));
    }


    public function showAdminLab() {
        $data = AdminLab::simplePaginate(5);

        // dd($data[0]->laboratory->name);
        return view('superadmin.adminlab', compact('data'));
    }

    public function showStudent() {
        $data = Student::simplePaginate(2);

        return view('superadmin.students', compact('data'));
    }


    public function addStudent() {
        return view('superadmin.students_add');
    }
}
