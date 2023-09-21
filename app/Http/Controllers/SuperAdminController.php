<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;

use Illuminate\Http\Request;
use App\Models\AdminLab;
use App\Models\Student;
use App\Models\Laboratory;
use App\Models\User;

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

    /**
     * Shows add student form
     */
    public function addStudent() {
        return view('superadmin.students_add');
    }

    /**
     * Inserts student to DB
     */
    public function createStudent(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|string',

            /** Using Rule::unique to prevent duplicate data */
            'nim' => [
                'required',
                'integer',
                Rule::unique('students', 'nim'),
            ],
            'username' => [
                'required',
                'string',
                Rule::unique('users', 'username'),
            ],
            'email' =>  [
                'required',
                'string',
                'email',
                Rule::unique('users', 'email'),
            ],

            'password' => 'required|string',
            'class' => 'required|string',
        ]);


        try {
            $user = User::create([
                'name' => $validatedData['name'],
                'username' => $validatedData['username'],
                'email' => $validatedData['email'],
                'password' => $validatedData['password'],
                'role' => 'student',
            ]);

            Student::create([
                'user_id' => $user->id,
                'nim' => $validatedData['nim'],
                'class' => $validatedData['class'],
            ]);

            return redirect()->back()->with('success', 'Student successfully added');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Student failed to be added');
        }
    }

}
