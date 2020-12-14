@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-11 text-center">
            <h1 class="pm-title">Lista projektów</h1>
        </div>
        <div class="col-1">
            <a class="pm-manage-create" href="{{ route('manage.create') }}">Dodaj</a>
        </div>
    </div>
    <hr>
    @foreach($projects as $project)
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="pm-date"><span>{{ $project->start_date ? $project->start_date : "Nie podano" }} - {{ $project->finish_date ? $project->finish_date : "Nie podano" }}</span></div>
                <h1 class="pm-subtitle">{{ $project->name }}</h1>
                <div class="pm-author"><span>{{ $project->author }}</span></div>
                <p class="pm-typography">{{ $project->short_description }}</p>
                <div class="pm-find-out-more"><a href="{{ route('pages.details', ['id' => $project->id]) }}">Więcej</a></div>
            </div>
        </div>
        <hr>
    @endforeach
@endsection
