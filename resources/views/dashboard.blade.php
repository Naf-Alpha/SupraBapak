<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>


        <header class="w3-display-container w3-content w3-wide" style="max-width:1500px;"  id="home">
            <img class="w3-image" src="{{ asset('Home.png') }}" alt="Architecture" width="1500">
            <div class="w3-display-middle w3-margin-top w3-center">
                <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>TT</b></span> <span class="w3-hide-small w3-text-light-grey">Supra Bapak</span></h1>
            </div>
        </header>
</x-app-layout>
