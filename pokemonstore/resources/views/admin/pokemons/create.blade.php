@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Crear pokemon</div>
        <div class="card-body">
            @if($errors->any())
            <ul id="errors" class="alert alert-danger list-unstyled">
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif
            <form method="POST" action="{{ route('admin.pokemons.save') }}" enctype="multipart/form-data">
                @csrf
                <label for="name">Nombre</label>
                <input type="text" class="form-control" name="name" value="{{ old('name') }}" />
                
                <label for="type">Tipo</label>
                <input type="text" class="form-control" name="type" value="{{ old('type') }}" />\

                <label for="weakness">Debilidades</label>
                <input type="text" class="form-control" name="weakness" value="{{ old('weakness') }}" />

                <label for="ablity">Hailidades</label>
                <input type="text" class="form-control" name="ablity" value="{{ old('ablity') }}" />

                <label for="height">Altura</label>
                <input type="numeric" class="form-control" name="height" value="{{ old('height') }}" />

                <label for="weight">Peso</label>
                <input type="numeric" class="form-control" name="weight" value="{{ old('weight') }}" />

                <label for="description">Descripción</label>
                <input type="text" class="form-control" name="description" value="{{ old('description') }}" />
                
                <label for="cost">Precio</label>
                <input type="numeric" class="form-control" name="cost" value="{{ old('cost') }}" />

                <label for="evolution">Evolucion</label>
                <input type="hidden" name="evolution" value="0"/>
                <input type="checkbox" class="form-control" name="evolution" value="1" />

                <label for="stat_hp">Vida</label>
                <input type="numeric" class="form-control" name="stat_hp" value="{{ old('stat_hp') }}" />

                <label for="stat_attack">Ataque</label>
                <input type="numeric" class="form-control" name="stat_attack" value="{{ old('stat_attack') }}" />

                <label for="stat_defense">Defensa</label>
                <input type="numeric" class="form-control" name="stat_defense" value="{{ old('stat_defense') }}" />

                <label for="stat_special_attack">Ataque especial</label>
                <input type="numeric" class="form-control" name="stat_special_attack" value="{{ old('stat_special_attack') }}" />

                <label for="stat_special_defense">Defensa especial</label>
                <input type="numeric" class="form-control" name="stat_special_defense" value="{{ old('stat_special_defense') }}" />

                <label for="stat_speed">Velocidad</label>
                <input type="numeric" class="form-control" name="stat_speed" value="{{ old('stat_speed') }}" />
                
                <label for="of_the_month">Del mes</label>
                <input type="hidden" name="of_the_month" value="0"/>
                <input type="checkbox" class="form-control" name="of_the_month" value="1" />

                <label for="image">Url imagen</label>
                <input type="text" class="form-control" name="image" value="{{ old('image') }}">
                
                <input type="submit" class="mt-2 btn bg-primary text-black" value="Crear" />
            </form>
        </div>
    </div>
</div>
@endsection