@extends('layouts.app')
@extends('layouts.inicial')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        
                        @if (Auth::check() === true)
                            <x-app-layout>
                                <x-slot name="header">
                                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                                        {{ __('Dashboard') }}
                                    </h2>  
                                </x-slot>
                                <div class="py-2">
                                    <h2>Você esta Logado!!</h2>
                                </div>
                            </x-app-layout>
                        @else
                            {{ __('Você Não esta logado!') }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
