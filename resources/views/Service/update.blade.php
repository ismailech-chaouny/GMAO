@extends('.layouts.app')
@section('title')
    Modifier Service
@endsection
@section('content')
<div id="app">
    <div id="sidebar" class="active">
        <div id="sidebar" class="active">
            @include('layouts.header')
            <ul class="menu">
                <li class="sidebar-title">Menu</li>
                <li class="sidebar-item">
                    <a href="{{ url('/') }}" class='sidebar-link'>
                        <i class="bi bi-house-fill"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="sidebar-item has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-bank2"></i>
                        <span>Etablissement</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item ">
                            <a href="{{ route('Etablissement.index') }}">List Etablissement</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{ route('Etablissement.create') }}">Ajouter</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item has-sub active">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-browser-safari"></i>
                        <span>Services</span>
                    </a>
                    <ul class="submenu active">
                        <li class="submenu-item active">
                            <a href="{{ route('Service.index') }}">List Service</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{ route('Service.create') }}">Ajouter Service</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-bookmark-fill"></i>
                        <span>Categorie</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="{{ route('Categorie.index') }}">List Categorie</a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('Categorie.create') }}">Ajouter Categorie</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-tools"></i>
                        <span>Equipement</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="{{ route('Equipement.index') }}">List Equipement</a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('Equipement.create') }}">Ajouter Equipement</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('Tache.index') }}" class='sidebar-link'>
                        <i class="bi bi-card-checklist"></i>
                        <span>Taches</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('Spécialite.create') }}" class='sidebar-link'>
                        <i class="bi bi-person-vcard-fill"></i>
                        <span>Spécialite</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('Technicien.index') }}" class='sidebar-link'>
                        <i class="bi bi-person-fill-gear"></i>
                        <span>Technicien</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('Activite.index') }}" class='sidebar-link'>
                        <i class="bi bi-hurricane"></i>
                        <span>Activite</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('PieceActivite.index') }}" class='sidebar-link'>
                        <i class="bi bi-wrench-adjustable"></i>
                        <span>Piece Activite</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('Etat.create') }}" class='sidebar-link'>
                        <i class="bi bi-arrow-repeat"></i>
                        <span>Etat</span>
                    </a>
                </li>
                @include('layouts.auth')
            </ul>
        </div>
    </div>
    <div id="main">
        <section id="basic-vertical-layouts">
                <div class="col-md-9 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Modifier Service</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-vertical" method="POST" action="{{route('Service.update',$service->id)}}">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="first-name-icon">Nom Service</label>
                                                    <div class="position-relative">
                                                        <input type="text" name="nom_service" id="NomService" class="form-control"
                                                            placeholder="Nom de Service" value="{{old('nom_service',$service->nom_service)}} ">
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-person"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="first-name-icon">Select Raison Social</label>
                                                    <div class="form-group">
                                                        <select name="etablissement_id" class="choices form-select">
                                                            @foreach ($etablissements as $etabl)
                                                                <option value="{{$etabl->id}}"{{($etabl->id == $service->etablissement_id)? "selected" : ""}}>{{$etabl->raison_social}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="submit"
                                                    class="btn btn-primary me-1 mb-1">Submit</button>
                                                <button type="reset"
                                                    class="btn btn-light-secondary me-1 mb-1">Cancel</button>
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
@endsection