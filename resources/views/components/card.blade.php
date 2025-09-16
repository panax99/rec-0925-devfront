@props(['type' => 'basic', 'title' => 'Votre test psychotechnique simple','price' => '+ 0€','descri_price' => "A peine le prix d'un resto",'borderColor' => '#0DBC0D'])

@php
    // Determine label and styles based on type
    $labels = [
        'basic' => 'Basic',
        'assurance' => 'Assurance',
        'complet' => 'Complet',
    ];

    $colors = [
        'basic' => 'bg-[#F2F3F5] text-black border-[#0DBC0D]',
        'assurance' => 'bg-[#0DBC0D] text-white border-[#0DBC0D]',
        'complet' => 'bg-[#36578A] text-white border-[#0DBC0D]',
    ];

    $iconColors = [
        'basic' => 'text-black',      
        'assurance' => 'text-[#0DBC0D]',
        'complet' => 'text-[#36578A]', 
    ];

    $label = $labels[$type] ?? 'Info';
    $colorClasses = $colors[$type] ?? 'bg-gray-100 text-gray-800';
    $iconColorClass = $iconColors[$type] ?? 'text-gray-600';
@endphp

<div 
    x-data="{ active: false }" 
    @click="active = !active"
    :class="active ? 'border-2 border-[{{ $borderColor }}]' : 'border-2 border-transparent'"
    class="flex flex-col min-h-[75dvh] items-center justify-start bg-white rounded-4xl shadow-lg overflow-hidden card-hover transition-all duration-300 cursor-pointer"
>
    <div class="w-full flex flex-col items-center justify-center {{ $colorClasses }} py-3">
        <p class="text-base font-semibold">{{ $label }}</p>
        <div class="mt-1 text-xs">{{ $title }}</div>
    </div>

    <div class="flex flex-col items-center justify-center gap-2 px-2 py-6">
        <div class="text-3xl font-semibold text-[#2C2C2C]">
            {{ $price }}
        </div>
        <p class="text-xs mb-1">{{ $descri_price }}</p>
        <div class="{{ $colorClasses }} flex items-center justify-center space-x-2 shadow rounded-[12px] py-2 px-6">
            <span class="rounded-full w-3 h-3 bg-white"></span>
            <p>Sélectionner</p> 
        </div>
    </div>

    <div class="h-[1px] w-full my-1 bg-gray-200"></div>

    <div class="flex flex-col w-full px-3 gap-4 my-7 text-xs">
        <div class="flex gap-2 items-center">
            <i class="fa-regular fa-hand-pointer {{ $iconColorClass }}"></i>
            <p>Entraînement illimité et gratuit</p>
        </div>
        <div class="flex gap-2 items-center">
            <i class="fa-regular fa-circle-check {{ $iconColorClass }}"></i>
            <p>Annulation jusqu'à 48 heures</p>
        </div>
        @if($type === 'complet' || $type === 'assurance')
            <div class="flex gap-2 items-center">
                <i class="fa-solid fa-rotate-right {{ $iconColorClass }}"></i>
                <p>Repassez votre test pour 0€ (si test échoué)</p>
            </div>
        @endif
        <div class="flex gap-2 items-center">
            <i class="fa-regular fa-file-lines {{ $iconColorClass }}"></i>
            <p>Recevez votre test le jour j</p>
        </div>
        @if($type === 'complet' || $type === 'assurance')
        <div class="flex gap-2 items-center">
            <i class="fa-solid fa-book-open {{ $iconColorClass }}"></i>
            <p>Livret de préparation au test psychotechnique</p>
        </div>
        @endif
        @if($type === 'complet')
            <div class="flex gap-2 items-center">
                <i class="fa-solid fa-download {{ $iconColorClass }}"></i>
                <p>Télechargez vos résultats en illimité</p>
            </div>
        @endif
    </div>
</div>