<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Paiement</title>

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

<body class="antialiased w-[100vw]">
    @include('components.navbar')
    <div class="w-full px-20 flex justify-between gap-20 py-7">
        <div class="w-1/2 h-full flex flex-col gap-5">
            <p class="text-lg font-semibold">Confirmer et payer</p>
            <div class="flex items-center justify-start space-x-5 ring-1 ring-gray-300 rounded-lg p-4">
                <i class="fa-solid fa-arrow-trend-up text-red-400"></i>
                <div class="flex flex-col text-sm">
                    <p>Date de réservation en forte demande</p>
                    <p>Les réservations sont fréquentes pour ce centre</p>
                </div>
            </div>

            <p class="text-base font-semibold">Vos informations personnelles</p>
            <div class="flex flex-col gap-2">
                <input 
                    type="text" 
                    placeholder="Nom Prenom" 
                    class="rounded-lg bg-gray-200 outline-0 text-sm py-3 px-3"
                >
                <input 
                    type="text" 
                    placeholder="Email" 
                    class="rounded-lg bg-gray-200 outline-0 text-sm py-3 px-3"
                >
                <input 
                    type="text" 
                    placeholder="Numéro de téléphone" 
                    class="rounded-lg bg-gray-200 outline-0 text-sm py-3 px-3"
                >
            </div>

            <div class="h-[1px] w-full my-1 bg-gray-400"></div>

            <p class="text-base font-semibold">Votre test psychotechnique</p>
            <div class="flex flex-col gap-2">
                <div class="flex items-center text-sm gap-3">
                    <i class="fa-regular fa-calendar w-[10px] h-[10px]"></i>
                    <div class="flex flex-col">
                        <p class="font-semibold">Date</p>
                        <p>12 Mai 2025</p>
                    </div>
                </div>
                <div class="flex items-center text-sm gap-3">
                    <i class="fa-regular fa-clock w-[10px] h-[10px]"></i>
                    <div class="flex flex-col">
                        <p class="font-semibold">Horaire</p>
                        <p>12:30</p>
                    </div>
                </div>
                <div class="flex items-center text-sm gap-3">
                    <i class="fa-solid fa-location-dot w-[10px] h-[10px]"></i>
                    <div class="flex flex-col">
                        <p class="font-semibold">Adresse</p>
                        <p>39 Rue Emile Steiner, 27200 Vernon</p>
                    </div>
                </div>
            </div>

            <div class="h-[1px] w-full my-2 bg-gray-400"></div>

            <p class="text-lg font-semibold">Choisissez votre moyen de paiement</p>
            <div class="flex items-center justify-start gap-2 -mt-3">
                <i class="fa-solid fa-lock"></i>
                <p class="text-sm">100% SECURISE</p>
            </div>

            <div class="flex flex-col justify-center">
                <div class="flex flex-col">
                    <div class="flex items-center py-3 gap-4">
                        <div class="w-3 h-3 ring-1 ring-gray-400 rounded-full"></div>
                        <div class="relative w-12 h-8 mt-3">
                            <img src="images/carte-bancaire.png" class="object-cover" alt="Logo carte bancaire">
                        </div>
                        <div class="text-sm">Carte bancaire</div>
                    </div>
                    <div class="h-[1px] w-full bg-gray-200"></div>
                </div>
                
                <div class="flex flex-col">
                    <div class="flex items-center py-3 gap-4">
                        <div class="w-3 h-3 ring-1 ring-gray-400 rounded-full"></div>
                        <div class="relative w-12 h-8 mt-3">
                            <img src="images/apple-pay.png" class="object-cover" alt="Logo apple pay">
                        </div>
                        <div class="text-sm">Apple pay</div>
                    </div>
                    <div class="h-[1px] w-full bg-gray-200"></div>
                </div>

                <div class="flex flex-col">
                    <div class="flex items-center py-3 gap-4">
                        <div class="w-3 h-3 ring-1 ring-gray-400 rounded-full"></div>
                        <div class="relative w-12 h-8 mt-4">
                            <img src="images/paypal.png" class="object-cover" alt="Logo paypal">
                        </div>
                        <div class="text-sm">Paypal</div>
                    </div>
                    <div class="h-[1px] w-full bg-gray-200"></div>
                </div>

                <div class="flex flex-col">
                    <div class="flex items-center py-3 gap-4">
                        <div class="w-3 h-3 ring-1 ring-gray-400 rounded-full"></div>
                        <div class="relative w-12 h-8 mt-4">
                            <img src="images/alma.png" class="object-cover" alt="Logo alma">
                        </div>
                        <div class="text-sm">Alma</div>
                    </div>
                    <div class="h-[1px] w-full bg-gray-200"></div>
                </div>
            </div>

            <x-button>
                Je réserve mon test psychotechnique 
            </x-button>
        </div>

         <!-- Informations -->
        <div class="w-5/12 gap-6 flex flex-col items-center">
            <div class="w-full flex flex-col gap-6 ring-1 ring-gray-300 rounded-lg p-6">
                <p class="text-[#BF2A6B] font-semibold">Récapitulatif de votre test psychotechnique</p>
                <p class="text-sm">Total à payer : <span class="font-semibold">130.00€</span></p>
                <p class="text-xs">
                    En passant votre commande, vous acceptez les conditions générales de vente de la société AAAEP.
                    Veuillez consulter notre politique de protection des données.
                </p>
            </div>

            <div class="flex justify-between w-10/12">
                <div class="flex flex-col items-center justify-center gap-4">
                    <div class="shadow rounded-full w-12 h-12 flex items-center justify-center p-3">
                        <i class="fa-regular fa-hand-pointer text-[#0DBC0D]"></i>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <p class="font-semibold text-sm">Entraînement</p>
                        <p class="text-sm">Gratuit illimité</p>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-center gap-4">
                    <div class="shadow rounded-full w-12 h-12 flex items-center justify-center p-3">
                        <i class="fa-regular fa-file-lines text-[#0DBC0D]"></i>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <p class="font-semibold text-sm">Résultats</p>
                        <p class="text-sm">le Jour Même</p>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-center gap-4">
                    <div class="shadow rounded-full w-12 h-12 flex items-center justify-center p-3">
                        <i class="fa-regular fa-circle-check text-[#0DBC0D]"></i>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <p class="font-semibold text-sm">Annulation</p>
                        <p class="text-sm">Gratuite jusqu'à 48h</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>