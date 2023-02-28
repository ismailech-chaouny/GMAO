@extends('layouts.app')
@section('title')
    Taches
@endsection
@section('content')
    <div id="app">
        <div id="sidebar" class="active">
            @include('layouts.header')
            @include('layouts.sidebar-menu')
        </div>
        <div id="main">
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-2 order-last">
                            <h5>La Tache </h5>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <a href="{{ route('Tache.index') }}" class="btn btn-primary ">
                                    <span> back to Taches </span>
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
        
                <section class="section">
                    <div class="row">
                        <div class="col-xl-9 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6>{{ $Taches->equipement->designation }}</h6>
                                            <div>
                                                <p class="mb-1"> Date planifiée</p>
                                                <strong>{{ $Taches->date }} {{ $Taches->duree }}</strong>
                                            </div>
                                        </div>
                                        <p class="mb-1"> Description</p>
                                        <strong class="mb-1">
                                            {{ $Taches->description }}
                                        </strong>
                                    </div>
                                    <div class="btn-group align-items-center mx-2 px-1">
                                        <form id="{{ $Taches->id }}" action="{{ route('Tache.destroy', $Taches->id) }}"
                                            method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <a href="{{ route('Tache.edit', $Taches->id) }}">
                                                <span class="badge bg-success mx-2 p-2 m-1"><i
                                                        class="bi bi-pencil-square"></i></span>
                                            </a>
                                            <a onclick="deleteEta({{ $Taches->id }})" type="button">
                                                <span class="badge bg-danger p-2 m-1"><i
                                                        class="bi bi-trash-fill"></i></span>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-last">
                                <h5>Les Activites de tache {{ $Taches->id }}</h5>
                            </div>
                            <div class="col-md-12">
                                <div class="row my-4">
                                    @foreach ($Activites as $activite)
                                        <div class="col-md-4 mb-2">
                                            <div class="card h-100">
                                                <div class="card-body">
                                                    <h6 class="card-title">
                                                        <div class="badge"
                                                            style="background-color:{{ $activite->etat->color }};">
                                                            {{ $activite->etat->etat }}</div>
                                                    </h6>
                                                    <p class="mt-2"><strong>Description :</strong>
                                                        {{ $activite->description }}</p>
                                                    <p class="mt-2"><strong> Reasliser le:</strong>
                                                        {{ $activite->date }} {{ $activite->duree }}</p>
                                                    <p class="mt-2"><strong> Reasliser par : </strong>
                                                        {{ $activite->Technicien->nom }}
                                                        {{ $activite->Technicien->prenom }}</p>

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-12">
                            @foreach ($Equipement as $equip)
                                <div class="card">
                                    <div class="card-content">
                                        <img class="card-img-top img-fluid"
                                            src="{{ asset('storage/uploads/' . $equip->image) }}" alt="Card image cap" />
                                        <div class="card-body">
                                            <h6 class="card-title">{{ $equip->designation }}</h6>
                                            <p class="card-text">
                                                {{ Str::limit($equip->description, 99, '...') }}
                                            </p>
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
    </div>
@endsection
