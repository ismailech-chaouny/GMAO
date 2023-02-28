@extends('layouts.app')
@section('title')
    Services
@endsection
@section('content')
<div id="app">
    <div id="sidebar" class="active">
        @include('layouts.header')
        @include('layouts.sidebar-menu')
    </div>
    <div id="main">
        <div class="page-heading">
            <section class="section">
                <div class="col-md-9 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Créer un activite</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-vertical" method="POST" action="{{ route('PieceActivite.store') }}">
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="first-name-icon">Equipement</label>
                                                    <div class="form-group">
                                                        <select class="choices form-select" name="equipement_id">
                                                            <option value="" selected disabled>Sélectionner Un Piece</option>
                                                            @foreach ($Equipement as $equipement)
                                                                <option value="{{ $equipement->id }}">
                                                                    {{ $equipement->designation }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="first-name-icon">Activite</label>
                                                    <div class="form-group">
                                                        <select name="activite_id" class="choices form-select">
                                                            <option value="" selected disabled>Sélectionner votre Activite</option>
                                                            @foreach ($Activite as $activite)
                                                                <option value="{{ $activite->id }}">
                                                                    {{ $activite->description }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary me-1 mb-1">Créer</button>
                                                <a href="{{ route('PieceActivite.index') }}"
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
    </div>
</div>
@endsection