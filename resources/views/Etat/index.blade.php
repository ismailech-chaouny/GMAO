@extends('layouts.app')
@section('title')
    Etat
@endsection
@section('content')
    <div id="app">
        <div id="sidebar" class="active">
            @include('layouts.header')
            @include('layouts.sidebar-menu')
        </div>
        <div id="main">
            <div class="col-12 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <a href="{{ route('Etat.create') }}" class="btn btn-primary ">
                        <i class="bi bi-plus-circle mx-1"></i>
                        <span>Ajouter un Etat</span>
                    </a>
                </nav>
            </div>
            <section class="section">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Les Etat</h4>
                            </div>
                            <div class="card-body">
                                @foreach ($etats as $etat)
                                    <div class="alert " style="background-color:{{ $etat->color }};">
                                        <h6 class="alert-heading text-black">{{ $etat->etat }}</h6>
                                        <div class="btn-group align-items-center">
                                            <a onclick="deleteEta({{ $etat->id }})" type="button">
                                                <span class="badge bg-danger p-2 m-1"><i
                                                        class="bi bi-trash-fill"></i></span>
                                            </a>
                                            <form id="{{ $etat->id }}"
                                                action="{{ route('Etat.destroy', $etat->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
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
                            timer: 1500
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
