@extends('layouts.app')
@section('title')
    Modifier d'une tache
@endsection
@section('content')
    <div id="app">
        <div id="sidebar" class="active">
            @include('layouts.header')
            @include('layouts.sidebar-menu')
        </div>
        <div id="main">
            <section id="basic-vertical-layouts">
                <div class="col-md-9 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Créer une tâche</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-vertical" method="POST" action="{{ route('Tache.update',$Tache->id) }}">
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="first-name-icon">Equipement</label>
                                                    <div class="form-group">
                                                        <select name="equipement_id" class="choices form-select">
                                                            <option value="" selected disabled>Sélectionner votre
                                                                Equipement</option>
                                                            @foreach ($Equipement as $equipement)
                                                                <option value="{{ $equipement->id }}" {{$Tache->equipement_id == $equipement->id ? "selected" : ""}}>
                                                                    {{ $equipement->designation }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-icon">Description</label>
                                                    <div class="position-relative">
                                                        <textarea type="text" name="description"class="form-control @error('description') is-invalid @enderror"
                                                            value="{{$Tache->description}}" rows="3" placeholder="Description de tache"></textarea>
                                                        @error('description')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-icon">Date</label>
                                                    <div class="position-relative">
                                                        <input type="Date"
                                                            name="Date"class="form-control @error('Date') is-invalid @enderror"
                                                            value="{{$Tache->date}}" />
                                                        @error('Date')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group ">
                                                    <label for="first-name">Duree</label>
                                                    <div class="position-relative">
                                                        <input type="time" name="Duree" class="form-control"
                                                            placeholder="Duree" value="{{$Tache->duree}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary me-1 mb-1">Créer un
                                                    tache</button>
                                                <a href="{{ route('Activite.index') }}"
                                                    class="btn btn-light-secondary me-1 mb-1">Annuler</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </section>
    </div>
    </div>
    </div>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    </div>
@endsection
