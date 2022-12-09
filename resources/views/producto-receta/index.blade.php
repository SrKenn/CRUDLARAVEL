@extends('layouts.app')

@section('template_title')
    Producto Receta
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Producto Receta') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('producto-recetas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Producto Id</th>
										<th>Receta Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productoRecetas as $productoReceta)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $productoReceta->producto_id }}</td>
											<td>{{ $productoReceta->receta_id }}</td>

                                            <td>
                                                <form action="{{ route('producto-recetas.destroy',$productoReceta->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('producto-recetas.show',$productoReceta->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('producto-recetas.edit',$productoReceta->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $productoRecetas->links() !!}
            </div>
        </div>
    </div>
@endsection
