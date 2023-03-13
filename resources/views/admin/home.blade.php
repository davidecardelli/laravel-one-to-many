@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h2>Pannello di controllo</h2>
        <a href="{{ route('admin.projects.index') }}" class="btn btn-primary">Gestisci i tuoi progetti</a>
        <a href="{{ route('admin.types.index') }}" class="btn btn-primary">Crea un nuovo tipo</a>
    </div>
@endsection
