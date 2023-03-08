<?php

namespace App\Http\Controllers;

use App\Models\ComplaintCustomer;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
  public function index()
  {
    return view('welcome');
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
  $complaints->pengaduan = $request->pengaduan;
  $complaints->save();

  return redirect()->route('complaint')->with('status', 'Terima kasih sudah membantu kami untuk terus memberikan pelayanan terbaik.');
  }
}
