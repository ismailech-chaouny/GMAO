@extends('.layouts.app')
@section('title')
    Modifier
@endsection
@section('content')
<div id="app">
    <div id="sidebar" class="active">
        @include('layouts.header')
        @include('layouts.sidebar-etab')
    </div>
    <div id="main">
        <section id="basic-vertical-layouts">
                <div class="col-md-9 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Modifier Etablissement</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-vertical" method="POST" action="{{route('Etablissement.update',$etabl->id)}}">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="first-name-icon">Raison Social</label>
                                                    <div class="position-relative">
                                                        <input type="text" name="raison_social" id="RaisonSocial" class="form-control"
                                                            placeholder="Nom de Etablissement" value="{{old('raison_social',$etabl->raison_social)}}">
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-person"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">

                                                <div class="form-group has-icon-left">
                                                    <label for="email-id-icon">Adresse</label>
                                                    <div class="position-relative">
                                                        <input type="text" name="adresse" class="form-control"
                                                            placeholder="Adresse" value="{{old('adresse',$etabl->adresse)}}">
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-envelope"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="mobile-id-icon">Telephone</label>
                                                    <div class="position-relative">
                                                        <input type="text" name="telephone" id="Telephone" class="form-control"
                                                            placeholder="Telephone" value="{{old('telephone',$etabl->telephone)}}">
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-phone"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="password-id-icon">Responsable</label>
                                                    <div class="position-relative">
                                                        <input type="text" name="responsable" id="Responsable" class="form-control"
                                                            placeholder="Responsable de Etablissement" value="{{old('responsable',$etabl->responsable)}}">
                                                        <div class="form-control-icon" >
                                                            <i class="bi bi-lock"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="submit"
                                                    class="btn btn-primary me-1 mb-1">Enregister</button>
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