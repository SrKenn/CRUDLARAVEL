@extends('layouts.app')

@section('template_title')
    {{ $productoReceta->name ?? 'Show Producto Receta' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Producto Receta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('producto-recetas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Producto Id:</strong>
                            {{ $productoReceta->producto_id }}
                        </div>
                        <div class="form-group">
                            <strong>Receta Id:</strong>
                            {{ $productoReceta->receta_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
