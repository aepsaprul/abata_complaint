<?php

namespace App\Http\Controllers;

use App\Models\ComplaintCustomer;
use App\Models\MasterCabang;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
  public function index()
  {
    $cabang = MasterCabang::where('grup', 'abata')->get();

    return view('welcome', ['cabang' => $cabang]);
  }
  public function store(Request $request)
  {
    $validated = $request->validate([
      'nama_lengkap' => 'required',
      'telepon' => 'required',
      'email' => 'required|email:rfc,dns',
      'pengaduan' => 'required'
    ]);

    $complaints = new ComplaintCustomer;
    $complaints->nama_lengkap = $request->nama_lengkap;
    $complaints->telepon = $request->telepon;
    $complaints->email = $request->email;
    $complaints->cabang_id = $request->cabang_id;
    $complaints->pengaduan = $request->pengaduan;
    $complaints->status = "baru";
    $complaints->save();

    return redirect()->route('complaint')->with('status', 'Terima kasih sudah membantu kami untuk terus memberikan pelayanan terbaik.');
  }
  public function show($id)
  {
    $cabang = MasterCabang::where('id', $id)->where('grup', 'abata')->first();

    return view('complaint', ['cabang' => $cabang]);
  }
}
