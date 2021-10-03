@extends('app')

@section('content')

<div class="container w-25 border p-4">
    <div class="row mx-auto">
    <form  method="POST" action="{{route('todos-update', ['id' => $todo->id])}}">
        @method('PATCH')
        @csrf

        <div class="mb-3 col">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            @if (session('success'))
                    <h6 class="alert alert-success">{{ session('success') }}</h6>
            @endif

            <label for="exampleFormControlInput1" class="form-label">Título de la tarea</label>
            <input type="text" class="form-control mb-2" name="title" id="exampleFormControlInput1" placeholder="Comprar la cena" value="{{ $todo->title }}">
            <input type="submit" value="Actualizar tarea" class="btn btn-primary" />
        </div>
    </form>

    
    </div>
</div>
@endsection