@extends('layouts.app')
@section('title')
    Activite
@endsection
@section('content')
    <div id="app">
        <div id="sidebar" class="active">
            @include('layouts.header')
            @include('layouts.sidebar-menu')
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
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Activite</h3>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <a href="{{ route('Activite.create') }}" class="btn btn-primary ">
                                <i class="bi bi-plus-circle mx-1"></i>
                                <span>Ajouter un Activite</span>
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="section">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row my-4">
                                @foreach ($Activites as $activite)
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="card-title"><div class="badge" style="background-color:{{ $activite->etat->color }};"> {{ $activite->etat->etat }}</div></h6>
                                        <p class="mt-2"><strong>Description :</strong> {{ $activite->description }}</p>
                                        <p class="mt-2"><strong> Reasliser le:</strong> {{ $activite->date }} {{ $activite->duree }}</p>
                                        <p class="mt-2"><strong> Reasliser par : </strong> {{ $activite->Technicien->nom }}
                                            {{ $activite->Technicien->prenom }}</p>
                                        <div class="btn-group">
                                            
                                            <a href="{{ route('Activite.edit', $activite->id) }}">
                                                <span class="badge bg-success mx-2"><i
                                                        class="bi bi-pencil-square"></i></span>
                                            </a>
                                            <a onclick="deleteEta({{ $activite->id }})" type="button">
                                                <span class="badge bg-danger"><i class="bi bi-trash-fill"></i></span>
                                            </a>
                                            <form id="{{ $activite->id }}"
                                                action="{{ route('Activite.destroy', $activite->id) }}" method="POST">
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
                </div>
            </section>
        </div>
    </div>
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
@endsection
