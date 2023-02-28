@extends('layouts.app')
@section('title')
    Creation d'activite
@endsection
@section('content')
    <div id="app">
        <div id="sidebar" class="active">
            @include('layouts.header')
            @include('layouts.sidebar-menu')
        </div>
    </div>
    <div id="main">
        <section id="basic-vertical-layouts">
            <div class="col-md-9 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Créer un activite</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-vertical" method="POST" action="{{ route('Activite.store') }}">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="first-name-icon">Description</label>
                                                <div class="position-relative">
                                                    <textarea type="text" name="description"class="form-control @error('description') is-invalid @enderror"
                                                        value="{{ old('description') }}" rows="3" placeholder="Description de Activite"></textarea>
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
                                                        name="date"class="form-control @error('date') is-invalid @enderror"
                                                        value="{{ old('date') }}" />
                                                    @error('date')
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
                                                    <input type="time" name="duree" class="form-control @error('duree') is-invalid @enderror"
                                                        placeholder="duree" value="{{ old('duree') }}">
                                                        @error('duree')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group has-icon-left">
                                                <label for="first-name-icon">Technicien</label>
                                                <div class="form-group">
                                                    <select class="choices form-select" name="technicien_id">
                                                        <option value="" selected disabled>Sélectionner votre
                                                            technicien</option>
                                                        @foreach ($techniciens as $technicien)
                                                            <option value="{{ $technicien->id }}">
                                                                {{ $technicien->nom }} {{ $technicien->prenom }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="first-name-icon">Tache</label>
                                                <div class="form-group">
                                                    <select name="tache_id" class="choices form-select">
                                                        <option value="" selected disabled>Sélectionner votre
                                                            Tache</option>
                                                        @foreach ($taches as $tache)
                                                            <option value="{{ $tache->id }}">
                                                                {{ $tache->description }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="first-name-icon">Etat</label>
                                                <div class="form-group">
                                                    <select name="etat_id" class="choices form-select">
                                                        <option value="" selected disabled>Sélectionner votre
                                                            Etat</option>
                                                        @foreach ($etats as $etat)
                                                            <option value="{{ $etat->id }}">{{ $etat->etat }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group ">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="checkEmail" type="checkbox">
                                                    <label class="form-check-label" for="flexSwitchCheckDefault">Notifier
                                                        les assignés de cette
                                                        tâche par e-mail</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Créer un
                                                activite</button>
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
        </section>
    </div>
@endsection
