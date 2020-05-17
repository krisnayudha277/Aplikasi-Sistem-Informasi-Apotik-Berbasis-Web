<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DataAdmin;
use App\Http\Controllers\Controller;
use App\User;
use Session;
use PDF;
class AdminController extends Controller
{
    //
        public function index()
    {
        $admin=\App\User::all();
        return view('admin.index',['admin'=>$admin]);
    }

        public function export_dataadmin()
    {
        return Excel::download(new DataAdmin, 'dataadmin.xlsx');
    }

         public function cetak_pdfadmin()
    {
        $user = User::all();
 
        $pdf = PDF::loadview('admincrud/data_admin',['user'=>$user]);
        return $pdf->download('data-admin');
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
