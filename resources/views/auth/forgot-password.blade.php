@include('layouts.estilos')
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="titulo-pagina">
            <h4>Recuperar senha</h4>
        </div>
        <div class="mb-4 text-sm text-gray-600 fs-6">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}" class="form">
            @csrf
            <!-- Email Address -->
            <div>
                <label for="email" class="form-label fs-5">Informe seu email:</label>
                <input type="email" class="form-control" id="email" name="enail" aria-describedby="emailHelp">
                <p id="emailHelp" class="form-text">We'll never share your email with anyone else.</p>
            </div>
                <button id="btn-confirmar" name="btn-confirmar" class="btn btn-primary btn-lg" type="submit"
                    value="Confirmar">{{_('Link de redefinição de senha de e-mail') }}</button>
        </form>
    </div>
    </div>
@endsection
