<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Prefecture;

class TeacherController extends Controller
{
    public function index() {
        return view('teacher/index');
    }
    public function add(Request $request) {
        $prefectures = Prefecture::select('id', 'name')->get();
        // key,value ペアに直す
        $prefecture_id_loop = $prefectures->pluck('name', 'id');

        return view('teacher/add', compact('prefecture_id_loop'));
    }
    public function create(Request $request) {
        $this->validate($request, Teacher::$rules);
        $teacher = new Teacher;
        $form = $request->all();
        unset($form['_token']);
        $teacher->fill($form)->save();
        return redirect('teacher');
    }
    public function list() {
        $items = Teacher::all();
        return view('teacher/list', ['items' => $items]);
    }
}
