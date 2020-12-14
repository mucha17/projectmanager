@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="pm-date"><span>{{ $project->start_date ? $project->start_date : "Nie podano" }} - {{ $project->finish_date ? $project->finish_date : "Nie podano"}}</span></div>
            <h1 class="pm-subtitle">{{ $project->name }}</h1>
            <div class="pm-author"><span>{{ $project->author }}</span></div>
            <p class="pm-typography">{{ $project->long_description }}</p>
            <div class="pm-manage">
                <a href="{{ route('manage.update', ['id' => $project->id]) }}">Edytuj</a>
                <a href="{{ route('manage.delete', ['id' => $project->id]) }}">Usuń</a>
            </div>
        </div>
    </div>
    <hr>
@endsection
