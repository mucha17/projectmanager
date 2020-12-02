@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="pm-title">Lista projektów</h1>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="pm-date"><span>Data rozp. proj. - Data zak. proj.</span></div>
            <h1 class="pm-subtitle">Nazwa projektu</h1>
            <div class="pm-author"><span>Autor</span></div>
            <p class="pm-typography">Krótki opis projektu</p>
            <div class="pm-find-out-more"><a href="{{ route('pages.details', ['id' => 1]) }}">Więcej</a></div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="pm-date"><span>Data rozp. proj. - Data zak. proj.</span></div>
            <h1 class="pm-subtitle">Nazwa projektu</h1>
            <div class="pm-author"><span>Autor</span></div>
            <p class="pm-typography">Krótki opis projektu</p>
            <div class="pm-find-out-more"><a href="{{ route('pages.details', ['id' => 2]) }}">Więcej</a></div>
        </div>
    </div>
    <hr>
@endsection
