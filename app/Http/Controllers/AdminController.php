<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
        public function index()
    {
        $admin=\App\User::all();
        return view('admin.index',['admin'=>$admin]);
    }

    //    public function edit($id)
    // {
    //     $admin=\App\User::find($id);
    //     return redirect('admin/set_admin',['admin'=>$admin]);
    // }

    //       public function update(Request $request, $id)
    // {
    //     $admin=\App\User::find($id);
    //     $admin->update($request->all());
    //     return redirect('/admin/set_admin')->with('sukses','Data berhasil diupdate');
    // }
//     public function attendance()
// {
//     $this->authorize('modifyUser', auth()->user());

//    return redirect ('user.attendance');
// }

}
