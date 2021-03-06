@extends('layouts.admin')

@section('titulo','Alterar de categoria')

@section('content')

    <div class="container">

        <div class="row">
            <div class="col-12 col-sm-12 mt-4">
                @include('alert_danger')
            </div>
        </div>


        <div class="row">
            <div class="col-sm-12">
                <div class="card shadow">
                    <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-primary">Alterar Categoria</h6>
                    </div>

                    <div class="card-body">
                        <form method="post" action="{{url('/admin/lotes_categorias/update')}}" enctype="multipart/form-data" autocomplete="off">
                            @csrf
                            @method('PUT')
                            <input type="hidden" value="{{$lote_categoria[0]->id}}" name="id" id="id">

                            <div class="form-row">

                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="nome">Nome</label>
                                        <input type="text" class="form-control  @error('nome') is-invalid @enderror"
                                               value="{{ old('nome',$lote_categoria[0]->nome) }}" name="nome" id="nome" placeholder="">
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="tipo">
                                            Tipo de imóvel
                                        </label>
                                        <select id="tipo" name="tipo" class="form-control">
                                            <option value="">Selecione</option>
                                            <option value="1" {{old('tipo',$lote_categoria[0]->tipo) == '1' ? 'selected' : ''}}>Residencial</option>
                                            <option value="2" {{old('tipo',$lote_categoria[0]->tipo) == '2' ? 'selected' : ''}}>Comercial</option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <button type="submit" class="btn btn-primary">
                                <span class="text">Alterar</span>
                            </button>

                            <a href="{{url('/admin/lotes_categorias')}}" class="btn btn-secondary">
                                <span class="text">Cancelar</span>
                            </a>
                        </form>
                    </div>
                </div>
            </div>

        </div>


    </div>

@endsection

@section('scripts')

    <!-- Máscara de formulários -->
    <script src="{{asset('/js/formulario_mascaras.js')}}"></script>

@endsection
