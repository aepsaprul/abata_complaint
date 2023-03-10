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
        @yield('content')
      </div>
    </div>
  </div>
</body>
</html>