@include('layouts.estilos')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>{{ config('app.name', 'Avalia_auto') }}</title>

</head>
<body>
    <div class="btn-group-vertical text-left">
        @role('administrator')
        <a href="{{ route('usuarios.index') }}"
        @if (url()->current() == route('usuarios.index')) class="btn btn-lg btn-light text-start"  @else class="btn btn-lg btn-primary text-start"  @class(['p-5', 'font-bold' => true, 'bg-navy']) @endif>
        {{ __('Usuarios') }}</a>
        <a href="#"
        @if (url()->current() == route('register')) class="btn btn-lg btn-light text-start"  @else class="btn btn-lg btn-primary text-start"  @class(['p-5', 'font-bold' => true, 'bg-navy']) @endif>
        Permissions
        </a>
        @endrole
        @role('user')
        <a href="{{ route('produtos') }}"
        @if (url()->current() == route('produtos')) class="btn btn-lg btn-light text-start"  @else class="btn btn-lg btn-primary text-start"  @class(['p-5', 'font-bold' => true, 'bg-navy']) @endif>
        {{ __('Products') }}
        </a>
        <a href="{{ route('categorias') }}"
        @if (url()->current() == route('categorias')) class="btn btn-lg btn-light text-start"  @else class="btn btn-lg btn-primary text-start"  @class(['p-5', 'font-bold' => true, 'bg-navy']) @endif>
        {{ __('Categories') }}
        </a>
        <a href="{{ route('marcas') }}"
        @if (url()->current() == route('marcas')) class="btn btn-lg btn-light text-start"  @else class="btn btn-lg btn-primary text-start"  @class(['p-5', 'font-bold' => true, 'bg-navy']) @endif>
        Brands
        </a>
        @endrole
    </div>
</body>

</html>
