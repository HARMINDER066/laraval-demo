<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Foundation\Http\FormRequest;
use DataTables;


class TeacherController extends Controller
{

     public function index()
    {
        return view('admin.teacher.index');
    }
    public function teacher_list()
    {
        $data = Teacher::orderBy('id','asc');
           return DataTables::of($data)
                    ->addIndexColumn()
                     ->addColumn('name', function($data){
                        return $data->first_name.' '.$data->last_name;
                    })
                     ->addColumn('email', function($data){
                        return $data->email;
                    })
                      ->addColumn('mobile', function($data){
                        return $data->mobile;
                    })
                       ->addColumn('address', function($data){
                        return $data->address.', '.$data->city.', '.$data->zip;
                    })
                        ->addColumn('active', function($data){
                         if($data->active == 0) 
                         {
                            $active='<span class="badge bg-light-success text-success w-100">Active</span>';
                         }
                         else {
                            $active='<span class="badge bg-light-danger text-success w-100">Not Active</span>';
                         }
                        return $active;
                    })
                    ->addColumn('action', function($data){
     
                           return '<div class="table-actions d-flex align-items-center gap-3 fs-6">
                               <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a>
                               <a href="'.route('admin.teacher_edit', ['id' => $data->id] ).'" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                               <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>
                             </div>';
                    })
                    ->rawColumns(['name', 'email', 'mobile', 'address', 'active', 'action'])
                    ->make(true);
    }
    
    public function teacher_add(Request $request){
        if ($request->post())
        {
            $validated = $request->validate([
            'email' => 'required|unique:teacher,email',
            'mobile' => 'required|unique:teacher,mobile',
                 ]);
                $data=$request->all();
            if($request->hasFile('photo')) {
                $img_ext = $request->file('photo')->getClientOriginalExtension();
                $filename = 'teacher_image-' . time() . '.' . $img_ext;
                $path = $request->file('photo')->move(storage_path('app/public/teacher'), $filename);
            }
                $data['photo'] = $filename;
                $status = Teacher::create($data); 
                if($status){
            request()->session()->flash('success','Teacher Profile Update');
        }
        else{
            request()->session()->flash('error','Please try again!!');
        }
        return redirect()->route('admin.teacher_add');
                }
            

            return view('admin.teacher.add');
    }


     public function teacher_edit($id){
            $data = Teacher::findOrFail($id);
                return view('admin.teacher.edit', ['data' => $data]); 
    }

     public function teacher_edit_save(Request $request, $id){
        $data=$request->all();
        $validated = $request->validate([
            'email' => 'required|unique:teacher,email',
            'mobile' => 'required|unique:teacher,mobile',
                 ]);
            $check = Teacher::findOrFail($id);
            if($request->hasFile('photo')) {
                $img_ext = $request->file('photo')->getClientOriginalExtension();
                $filename = 'teacher_image-' . time() . '.' . $img_ext;
                $path = $request->file('photo')->move(storage_path('app/public/teacher'), $filename);
            }
            else
            {

               $filename=$check->photo; 
            }
            $data['photo']=$filename;
            $status =$check->fill($data)->save();
            if($status){
            request()->session()->flash('success','Teacher Profile Update');
        }
        else{
            request()->session()->flash('error','Please try again!!');
        }
        return redirect()->route('admin.teacher_add');
                }
    
}
