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
                        <h3>Listagem de Marcas</h3>
                    </div>
                    <div id="tabela">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" class="fw-bold">
                                        ID
                                    </th>
                                    <th scope="col" class="fw-normal">
                                        Nome:
                                    </th>
                                    <th scope="col" class="fw-normal">
                                        E-mail:
                                    </th>
                                    <th scope="col" class="text-end fw-bolder">
                                        Ações:
                                    </th>
                                    <th scope="col" class="text-end fw-bolder">
                                        <a class="btn btn-outline-primary" href="{{ route('user.store') }}">Novo</a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                        <td colspan="3" class="bg-white text-end" style="border-width:0px;">
                                            <a class="btn btn-outline-success btn-sm"
                                                href="{{ route('usuarios.show', ['user' => $user->id]) }}">Ver detalhes</a>
                                        </td>
                                        <td class="bg-white text-end">
                                            <form action="{{ route('usuarios.destroy', ['user' => $user->id]) }}"
                                                method="POST">
                                                @csrf
                                                @method('delete')
                                                <input class="btn btn-outline-danger btn-sm" type="" value="Remover" />
                                            </form>
                                        </td>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
@endrole
