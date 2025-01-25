<?php

namespace App\Http\Controllers;
use App\Models\StudentModel;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $student = StudentModel::all();
        return view("student.index", compact('student'));
    }

    public function view($id){
        $item = StudentModel::find($id);
        return view("student.view", compact('item'));
    }

    public function edit($id){
        $item = StudentModel::find($id);
        return view("student.edit", compact('item'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate(
            [
                'name' => 'required|string|max:255',
                'gender' => 'required|string|max:255',
                'email' => 'required|string|max:255',
                'phone_number' => 'required|string|max:255',
            ]
        );

        $item = StudentModel::find($id);
        $item->name = $request->input("name");
        $item->gender = $request->input("gender");
        $item->email = $request->input("email");
        $item->phone_number = $request->input("phone_number");

        $item->save();

        return redirect(route('student.index'))
                ->with('success', 'Student updated successfully');
    }
    
    public function destroy(int $id)
    {
        $item = StudentModel::find($id);
        $item->delete();
        return redirect(route('student.index'))
            ->with('success', 'Student deleted successfully');
    }
    
    public function create()
    {
        return view("student.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|string|max:10',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:15',
        ]);
        $student = new StudentModel();
        $student->name = $request->name;
        $student->gender = $request->gender;
        $student->email = $request->email;
        $student->phone_number = $request->phone_number;
        $student->save();


        return redirect()->route('student.index')->with('success', 'Student created successfully.');
    }
}
