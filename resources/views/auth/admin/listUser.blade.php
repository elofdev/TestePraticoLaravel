@include('layouts.estilos')
@role('administrator')
    @extends('layouts.app')
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-2">
                    @include('layouts.leftBar')
                </div>
                <div class="col-10">
                    <div class="titulo-pagina">
                        <h3>Informações do Usuário</h3>
                    </div>
                    <div id="tabela">
<!-- Utilizará o método Show() no TestController.php -->
<table>
    <tbody>
        <th scope="row">id:</th>
            <th>
                #ID
            </td>
<p><span class="fw-bold"></span> {{ $user->id }}</p>
<p><span class="fw-bold">Nome:</span>  {{ $user->name }}</p>
<p> <span class="fw-bold">Cadastrado em :</span>{{ date('d/m/y H:i', strtotime($user->created_at)) }}

</p>
</table>
</div>
</div>
</div>
</div>
@endsection
@endrole