@extends('.layouts.app')
@section('title')
    Ajouter un technicien
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
                            <h4 class="card-title">Ajouter un technicien</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-vertical" method="POST" action="{{route('Technicien.store')}}">
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="first-name-icon">Nom</label>
                                                    <div class="position-relative">
                                                        <input type="text" name="Nom" class="form-control"
                                                            placeholder="Nom de technicien" value="{{old('Nom')}}">
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-person"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="first-name-icon">Prenom</label>
                                                    <div class="position-relative">
                                                        <input type="text" name="Prenom" class="form-control"
                                                            placeholder="Prenom de technicien" value="{{old('Prenom')}}">
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-person"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="first-name-icon">Email</label>
                                                    <div class="position-relative">
                                                        <input type="text" name="Email" class="form-control"
                                                            placeholder="Email de technicien" value="{{old('Email')}}">
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-person"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="first-name-icon">Telephone</label>
                                                    <div class="position-relative">
                                                        <input type="text" name="Telephone" class="form-control"
                                                            placeholder="Telephone de technicien" value="{{old('Telephone')}}">
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-person"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="first-name-icon">Select Specialite</label>
                                                    <div class="form-group">
                                                        <select name="Specialite_id" class="choices form-select">
                                                            @foreach ($Specialite as $specialite)
                                                                <option value="{{$specialite->id}}">{{$specialite->specialite}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="submit"
                                                    class="btn btn-primary me-1 mb-1">Ajouter un technicien</button>
                                                <button type="reset"
                                                    class="btn btn-light-secondary me-1 mb-1">Annuler</button>
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
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
@endsection