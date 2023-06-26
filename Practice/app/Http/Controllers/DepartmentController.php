<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Department;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class DepartmentController extends BaseController
{
    public function index()
    {
        $departments = Department::all();
        return view('department.index', compact('departments'));
    }
    public function create()
    {
        {
            $workers = Worker::all();
            return view('department.create', compact('workers'));
        }

    }
    public function store(Request $request)
    {
        return view('department.store');

    }
    public function show(string $id)
    {
        return view('department.show');
    }
    public function edit(string $id)
    {
        return view('department.edit');
    }
    public function update(Request $request, string $id)
    {
        return view('department.update');
    }
    public function delete(string $id)
    {
        return view('department.delete');
    }
}
