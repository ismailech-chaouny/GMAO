@extends('layouts.app')
@section('title')
    Taches
@endsection
@section('content')
    <div id="app">
        <div id="sidebar" class="active">
            @include('layouts.header')
            <div class="sidebar-menu">
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
                    <li class="sidebar-item has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-browser-safari"></i>
                            <span>Services</span>
                        </a>
                        <ul class="submenu">
                            <li class="submenu-item">
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
                    <li class="sidebar-item active">
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
                    @include('layouts.auth')
                </ul>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-2 order-last">
                            <h3>Les Taches</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <a href="{{ route('Tache.create') }}" class="btn btn-primary ">
                                    <i class="bi bi-plus-circle mx-1"></i>
                                    <span>Ajouter un tache</span>
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="col-md-12">
                        <div class="row my-4">
                            @foreach ($taches as $tache)
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-body">
                                                <a href="{{ route('Tache.show', $tache->id) }}"
                                                    class="list-group-item list-group-item-action">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <h5>{{ $tache->equipement->designation }}</h5>
                                                        <div>
                                                            <p class="mb-1"> Date planifiée</p>
                                                            <strong>{{ $tache->date }} {{ $tache->duree }}</strong>
                                                        </div>
                                                    </div>
                                                    <p class="mb-1"> Description</p>
                                                    <strong class="mb-1">
                                                        {{ $tache->description }}
                                                    </strong>

                                                </a>

                                            </div>
                                            <div class="btn-group align-items-center mx-2 px-1">
                                                <a href="{{ route('Tache.show', $tache->id) }}">
                                                    <span class="badge bg-info p-2 m-1"><i class="bi bi-eye"></i></span>
                                                </a>
                                                <a href="{{ route('Tache.edit', $tache->id) }}">
                                                    <span class="badge bg-success mx-2 p-2 m-1"><i
                                                            class="bi bi-pencil-square"></i></span>
                                                </a>
                                                <a onclick="deleteEta({{ $tache->id }})" type="button">
                                                    <span class="badge bg-danger p-2 m-1"><i
                                                            class="bi bi-trash-fill"></i></span>
                                                </a>
                                                <form id="{{ $tache->id }}"
                                                    action="{{ route('Tache.destroy', $tache->id) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
            @section('scripts')
                @if (session()->has('success'))
                    <script>
                        Swal.fire({
                            position: '',
                            icon: 'success',
                            title: "{{ session()->get('success') }}",
                            showConfirmButton: false,
                            timer: 2500
                        })
                    </script>
                @endif
                <script>
                    function deleteEta($id) {
                        Swal.fire({
                            title: 'Are you sure?',
                            text: "You won't be able to revert this!",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Yes, delete it!'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                document.getElementById($id).submit()
                            }
                        })
                    }
                </script>
            @endsection
            <link rel="stylesheet" href="assets/css/bootstrap.css">
        </div>
    @endsection
