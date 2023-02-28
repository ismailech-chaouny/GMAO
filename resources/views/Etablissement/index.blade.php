@extends('layouts.app')
@section('title')
    Etablissement
@endsection
@section('content')
<div id="app">
    <div id="sidebar" class="active">
        @include('layouts.header')
        @include('layouts.sidebar-etab')
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
                        <h3>Table des Etablissements</h3>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        Les Etablissements
                    </div>
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>Raison Social</th>
                                    <th>Adresse</th>
                                    <th>Telephone</th>
                                    <th>Responsable</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($etablissements as $etabl )
                                    <tr>
                                        <td>{{$etabl->raison_social}}</td>
                                        <td>{{$etabl->adresse}}</td>
                                        <td>{{$etabl->telephone}}</td>
                                        <td>{{$etabl->responsable}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ route('Etablissement.show',$etabl->id)}}">
                                                    <span class="badge bg-info"><i class="bi bi-eye"></i></span>
                                                </a>
                                            <a href="{{ route('Etablissement.edit',$etabl->id)}}">
                                                <span class="badge bg-success mx-2"><i class="bi bi-pencil-square"></i></span>
                                            </a>
                                            <a onclick="deleteEta({{$etabl->id}})" type="button">
                                                <span class="badge bg-danger"><i class="bi bi-trash-fill"></i></span>
                                            </a>
                                            <form id="{{$etabl->id}}" action="{{ route('Etablissement.destroy',$etabl->id)}}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                            </form>
                                        </div>
                                        </td>
                                    </tr>
                                    @endforeach   
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
        @section('scripts')
        @if (session()->has('success'))
            <script>
                Swal.fire({
                    position: '',
                    icon: 'success',
                    title: "{{session()->get('success')}}",
                    showConfirmButton: false,
                    timer: 2500
                })
            </script>
        @endif
        <script>
         
            function deleteEta($id){
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
</div>
@endsection
