@role('user')
    @include('layouts.estilos')
    @extends('layouts.app')
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-2">
                    @include('layouts.leftBar')
                </div>
                <div class="col-10">
                    <div class="titulo-pagina">
                        <h3>Listagem de Produtos</h3>
                    </div>
                    <div id="tabela">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" class="fw-bold">
                                        #ID
                                    </th>
                                    <th scope="col" class="fw-bold">
                                        Nome:
                                    </th>
                                    <th scope="col" class="fw-normal">
                                        Categorias:
                                    </th>
                                    <th scope="col" class="fw-normal">
                                        Marcas:
                                    </th>
                                    <th scope="col" class="text-end fw-bolder">
                                        Ações
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"></th>
                                    <td></td>
                                    <td class="row">
                                        <div></div>
                                    </td>
                                    <td class="row">
                                        <div></div>
                                    </td>
                                    <td colspan="2" class="bg-white text-end" style="border-width:0px;">
                                        <a class="btn btn-outline-success" href="">Ver detalhes</a>
                                    </td>
                                    <td class="bg-white text-end">
                                        <form action="" method="">
                                            @csrf
                                            <input class="btn btn-outline-danger" type="submit" value="Remover" />
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
@endrole
