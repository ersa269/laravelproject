<?php

namespace App\Http\Controllers;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create()
    {
        return view ('create');
    }

    public function store(Request $request)
    {
        $data =new Student();
        $data->StdName=$request->StdName;
        $data->StdContact=$request->StdContact;
        $data->StdStAddress=$request->StdStAddress;
        $data->save();
        return redirect ('create');
    }

    public function show()
    {
        $data=Student::all();
        return view ('show',compact('data'));
    }

    public function edit($id)
    {
        $data=Student::find($id);
        return view ('edit',['data'=>$data]);
    }
    public function update(Request $request)
    {
        $data=Student::find($request->$id);
        $data->StdName=$request->StdName;
        $data->StdContact=$request->StdContact;
        $data->StdStAddress=$request->StdStAddress;
        $data->save();
        return redirect ('show');
    }
    public function delete($id)
    {
       $data=Student::find($id);
       $data->delete();
       return redirect('show');
    }
}
