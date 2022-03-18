@include('layouts.estilos')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard for a User') }}
        </h2>
    </x-slot>
    <div class="py-2">
        <h2>You're logged in as a user!</h2>
    </div>
</x-app-layout>
<div class="container">
    @include('layouts.leftBar')
</div>
