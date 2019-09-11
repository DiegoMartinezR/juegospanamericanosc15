@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            <a href="{{ route('producto.create') }}" class="btn btn-success btn-lg btn-block">Agregar Deporte</a>  
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table id="mytable" class="table table-bordred table-striped">

<tbody>
@if($deportes->count())
@foreach($deportes as $producto)
<tr>


<div class="card mb-3" style="max-width: 590px;">
<th>
  <!-- <div class="row"> -->
        <div class="col-md-6">
        <img src="{{$producto->imagen}}" class="card-img" style="height:150px; width:300px">
        </div>

</th>
<th>
    <div class="col-md-6">
        <div class="card-body">
            <p style="font-size:20px" class="card-title">{{$producto->deporte}}</p>
            <p class="card-text">{{$producto->descripcion}}</p>
            <p class="card-text"><small class="text-muted">{{$producto->historia}}</small></p>
        </div>
    </div>
  <!-- </div> -->
</div>
</th>


</br>
</br>


{{csrf_field()}}


</tr>
@endforeach
@else
<tr>
<td colspan="8">No hay registro !!</td>
</tr>
@endif
</tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
