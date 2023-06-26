<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\View\View;

class WorkerController extends BaseController
{
    public function index()
    {
        $workers = Worker::all();
        return view('worker.index', compact('workers'));
    }
    public function create()
    {
        return view('worker.create');
    }
    public function store(Request $request)
    {
        return view('worker.store');

    }
    public function show(string $id)
    {
        return view('worker.show');
    }
    public function edit(string $id)
    {
        return view('worker.edit');
    }
    public function update(Request $request, string $id)
    {
        return view('worker.update');

    }
    public function delete(string $id)
    {
        return view('worker.delete');
    }
}
