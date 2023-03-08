<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Abata</title>
  @vite('resources/css/app.css')
</head>
<body>
  <div>
    <div class="flex justify-center border-b">
      <div class="py-2 w-full flex justify-center">
        <div>
          <div class="flex justify-center">
            <img src="{{ asset('assets/logo-biru.png') }}" alt="logo" class="w-20">
          </div>
          <div class="font-bold mx-2">Kritik & Saran</div>
        </div>
      </div>
    </div>
    <div class="flex justify-center">
      <div class="w-full lg:w-2/4">
        <div class="text-sm text-center m-2">Kritik dan saran dari sahabat ABATA adalah semangat kami untuk terus memberikan pelayanan yang terbaik.</div>
        <div class="text-sm text-center m-2 font-bold">Kami mohon kritik & saran dengan mengisi form dibawah ini :</div>
        <form action="{{ route('complaint.store') }}" method="POST" class="mx-3">
          @csrf
          <div>
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="@error('nama_lengkap') is-invalid @enderror border border-sky-500 rounded py-1 px-2 my-1 w-full" placeholder="Nama Lengkap">
            @error('nama_lengkap')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div>
            <input type="text" name="telepon" id="telepon" class="@error('telepon') is-invalid @enderror border border-sky-500 rounded py-1 px-2 my-1 w-full" placeholder="No HP / Whatsapp">
            @error('telepon')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div>
            <input type="email" name="email" id="email" class="@error('email') is-invalid @enderror border border-sky-500 rounded py-1 px-2 my-1 w-full" placeholder="Email">
            @error('email')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div>
            <textarea name="pengaduan" id="pengaduan" cols="30" rows="10" class="border border-sky-500 rounded py-1 px-2 my-1 w-full" placeholder="Kritik dan Saran . . ."></textarea>
            @error('pengaduan')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div>
            <button type="submit" class="border border-sky-400 bg-sky-500 w-full rounded-md py-2 text-white font-bold">Kirim</button>
          </div>
        </form>
        @if(session('status'))
          <div class="text-lime-500 italic text-center m-2">{{ session('status') }}</div>
        @endif
      </div>
    </div>
  </div>
</body>
</html>