@include('layouts.estilos')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard for Admin') }}
        </h2>
    </x-slot>
    <div class="py-2">
        <h2>You're logged in as a Administrator!</h2>
    </div>
</x-app-layout>
<div class="container">
    @include('layouts.leftBar')
</div>
