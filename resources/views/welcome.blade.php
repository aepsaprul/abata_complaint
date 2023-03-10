@extends('app')

@section('content')
<form action="{{ route('complaint.store') }}" method="POST" class="mx-3 mb-16">
  @csrf
  <div>
    <input type="text" name="nama_lengkap" id="nama_lengkap" class="@error('nama_lengkap') is-invalid @enderror border border-sky-500 rounded py-1 px-2 my-1 w-full" placeholder="Nama Lengkap">
    @error('nama_lengkap')
      <div class="text-rose-500">{{ $message }}</div>
    @enderror
  </div>
  <div>
    <input type="text" name="telepon" id="telepon" class="@error('telepon') is-invalid @enderror border border-sky-500 rounded py-1 px-2 my-1 w-full" placeholder="No HP / Whatsapp">
    @error('telepon')
      <div class="text-rose-500">{{ $message }}</div>
    @enderror
  </div>
  <div>
    <input type="email" name="email" id="email" class="@error('email') is-invalid @enderror border border-sky-500 rounded py-1 px-2 my-1 w-full" placeholder="Email">
    @error('email')
      <div class="text-rose-500">{{ $message }}</div>
    @enderror
  </div>
  <div>
    <select name="cabang_id" id="cabang_id" class="@error('cabang_id') is-invalid @enderror border border-sky-500 rounded py-1 px-2 my-1 w-full" required>
      <option value="">Pilih Cabang</option>
      @foreach ($cabang as $item)
        <option value="{{ $item->id }}">{{ $item->nama_cabang }}</option>
      @endforeach
    </select>
    @error('cabang_id')
      <div class="text-rose-500">{{ $message }}</div>
    @enderror
  </div>
  <div>
    <textarea name="pengaduan" id="pengaduan" cols="30" rows="10" class="border border-sky-500 rounded py-1 px-2 my-1 w-full" placeholder="Kritik dan Saran . . ."></textarea>
    @error('pengaduan')
      <div class="text-rose-500">{{ $message }}</div>
    @enderror
  </div>
  <div>
    <button type="submit" class="border border-sky-400 bg-sky-500 w-full rounded-md py-2 text-white font-bold">Kirim</button>
  </div>
</form>

@if(session('status'))
  <div class="bg-emerald-500 text-white font-bold rounded fixed py-2 px-5 top-0 lg:top-10 lg:right-10 shadow-lg">
    <div>{{ session('status') }}</div>
  </div>
@endif  
@endsection
