<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $data = DB::table('teachers')->paginate(7);
        //return view('tampildata',['dataguru'=>$data]);

        $data = Teacher::all();
        return view('tampildata', ['dataguru'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guru');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //$request->validate
       // ([
       //     'nik' => ['required'],
       //     'name' => ['required'],
      //      'gender' => ['required'],
       //     'subject' => ['required'],
       //     'religion'=> ['required'],
        //    'address' => ['required']
       // ]);

        // Teacher::create($request->all());

        $teacher = new Teacher();
        $teacher->fill($request->all());
        $teacher->save();

        return redirect()->route('teachers.index')
         ->with('success', 'Add Teacher Successfully');



         // DB::table('Teacher')->insert(['nik'=>$request->nik,
         // 'name'=>$request->nama,
         // 'gender'=>$request->kel,
         // 'subject'=>$request->mapel,
         // 'religion'=>$request->agama,
         // 'address'=>$request->alamat
        // ]);
        //return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher  $teacher)
    {
        return view('show', ['dataguru' => $teacher]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        return view('edit', ['dataguru' => $teacher]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $teacher)
    {
       // $request->validate
        ([
           // 'nik' => ['required'],
           // 'name' => ['required'],
           // 'gender' => ['required'],
           // 'subject' => ['required'],
           // 'religion'=> ['required'],
            //'address' => ['required']
        ]);

       //$teacher->update($request->all());
       $teacher = new Teacher();
       $teacher->fill($request->all());
       $teacher->save();

        return redirect()->route('teachers.index')
        ->with('success', 'Teacher Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete('id');

        return redirect()->route('teachers.index')->with('success', 'Teacher Deleted Successfully');
    }
}
