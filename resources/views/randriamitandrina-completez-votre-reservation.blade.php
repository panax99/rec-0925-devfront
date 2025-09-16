<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Complétez votre réservation</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/fontawesome.min.css" integrity="sha512-M5Kq4YVQrjg5c2wsZSn27Dkfm/2ALfxmun0vUE3mPiJyK53hQBHYCVAtvMYEC7ZXmYLg8DVG4tF8gD27WmDbsg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Styles -->
    @vite('resources/css/app.css')
</head>

<body class="antialiased">
    @include('components.navbar')
    <div class="w-full px-20 py-7 h-full bg-[#F2F3F5] mb-[18vh]">
        <p class="text-lg font-semibold pb-7 text-[#383838]">Complétez votre réservation</p>
        <!-- Card Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-14">
            <!-- Cards -->
            <x-card type="basic" title="Votre test psychotechnique simple" />
            <x-card type="assurance" title="Votre test psychotechnique sans stress" />
            <x-card type="complet" title="Votre test psychotechnique tout compris" />
        </div>
    </div>
    @include('components.footer')
</body>
</html>