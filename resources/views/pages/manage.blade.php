@extends('layouts.main')

@section('content')
    @if(\Illuminate\Support\Facades\Session::has('info'))
        <div class="row">
            <div class="col-md-12">
                <p class="alert alert-info">{{ \Illuminate\Support\Facades\Session::get('info') }}</p>
            </div>
        </div>
    @endif
    @include('partials.errors')
    <div class="row">
        <div class="col-md-12">
            @if(!isset($formType))
            @elseif($formType === 'create')
                <form action="{{ route('manage.create') }}" method="post">
                    <div class="form-group">
                        <label for="name">Nazwa projektu</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="author">Autor</label>
                        <input type="text" class="form-control" id="author" name="author">
                    </div>
                    <div class="form-group">
                        <label for="start_date">Data rozpoczęcia projektu</label>
                        <div class="row">
                            <div class="col-1">
                                <input type="checkbox" class="form-check form-check-inline" id="start_date_available" name="start_date_available"
                                       checked style="width: 37px; height: 37px" onchange="document.getElementById('start_date').disabled
                               ? document.getElementById('start_date').removeAttribute('disabled')
                               : document.getElementById('start_date').setAttribute('disabled', 'true')">
                            </div>
                            <div class="col">
                                <input type="date" class="form-control" id="start_date" name="start_date">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="finish_date">Data zakończenia projektu</label>
                        <div class="row">
                            <div class="col-1">
                                <input type="checkbox" class="form-check form-check-inline" id="finish_date_available" name="finish_date_available"
                                       style="width: 37px; height: 37px" onchange="document.getElementById('finish_date').disabled
                               ? document.getElementById('finish_date').removeAttribute('disabled')
                               : document.getElementById('finish_date').setAttribute('disabled', 'true')">
                            </div>
                            <div class="col">
                                <input type="date" class="form-control" id="finish_date" name="finish_date" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="short_description">Krótki opis</label>
                        <input type="text" class="form-control" id="short_description" name="short_description">
                    </div>
                    <div class="form-group">
                        <label for="long_description">Pełny opis</label>
                        <input type="text" class="form-control" id="long_description" name="long_description">
                    </div>
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-dark">Zatwierdź</button>
                </form>
            @elseif($formType === 'update')
                <form action="{{ route('manage.update', ['id' => $projectId]) }}" method="post">
                    <div class="form-group">
                        <label for="name">Nazwa projektu</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $project->name }}">
                    </div>
                    <div class="form-group">
                        <label for="author">Autor</label>
                        <input type="text" class="form-control" id="author" name="author" value="{{ $project->author }}">
                    </div>
                    <div class="form-group">
                        <label for="start_date">Data rozpoczęcia projektu</label>
                        <div class="row">
                            <div class="col-1">
                                <input type="checkbox" class="form-check form-check-inline" id="start_date_available" name="start_date_available"
                                       checked style="width: 37px; height: 37px" onchange="document.getElementById('start_date').disabled
                               ? document.getElementById('start_date').removeAttribute('disabled')
                               : document.getElementById('start_date').setAttribute('disabled', 'true')">
                            </div>
                            <div class="col">
                                <input type="date" class="form-control" id="start_date" name="start_date" value="{{ \Carbon\Carbon::parse($project->start_date)->format('Y-m-d') }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="finish_date">Data zakończenia projektu</label>
                        <div class="row">
                            <div class="col-1">
                                <input type="checkbox" class="form-check form-check-inline" id="finish_date_available" name="finish_date_available"
                                       style="width: 37px; height: 37px" onchange="document.getElementById('finish_date').disabled
                               ? document.getElementById('finish_date').removeAttribute('disabled')
                               : document.getElementById('finish_date').setAttribute('disabled', 'true')">
                            </div>
                            <div class="col">
                                <input type="date" class="form-control" id="finish_date" name="finish_date" disabled value="{{ \Carbon\Carbon::parse($project->finish_date)->format('Y-m-d') }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="short_description">Krótki opis</label>
                        <input type="text" class="form-control" id="short_description" name="short_description" value="{{ $project->short_description }}">
                    </div>
                    <div class="form-group">
                        <label for="long_description">Pełny opis</label>
                        <input type="text" class="form-control" id="long_description" name="long_description" value="{{ $project->long_description }}">
                    </div>
                    <input type="hidden" name="id" value="{{ $projectId }}">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-dark">Zatwierdź</button>
                </form>
            @endif
        </div>
    </div>
@endsection
