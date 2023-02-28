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
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-2 order-last">
                            <h4>Etablissement {{ $Etablissement->raison_social }}</h4>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <a href="{{ route('Etablissement.index') }}" class="btn btn-primary ">
                                    <span> back to Liste Etablissements </span>
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        
                                            <div class="d-flex w-100 justify-content-between">
                                                <div>
                                                    <p class="mb-1"> Raison Social</p>
                                                    <strong>{{ $Etablissement->raison_social }}</strong>
                                                </div>
                                                <div>
                                                    <p class="mb-1"> Adresse</p>
                                                    <strong>{{ $Etablissement->adresse }}</strong>
                                                </div>
                                            </div>
                                            <div class="d-flex w-100 justify-content-between">
                                                <div>
                                            <p class="mb-1"> Numero Telephone</p>
                                            <strong class="mb-1">
                                                {{ $Etablissement->telephone }}
                                            </strong>
                                        </div>
                                        <div>
                                            <p class="mb-1"> Responsable</p>
                                            <strong class="mb-1">
                                                {{ $Etablissement->responsable }}
                                            </strong>
                                        </div>
                                            </div>
                                    
                                    </div>
                                </div>
                            </div>
                            
                              
                        </div>
                        <div class="col-xl-6 col-md-6 col-sm-12">
                            <div class="col-12 col-md-6 order-md-2 order-last">
                                <h5>Services de {{ $Etablissement->raison_social }} </h3>
                            </div>
                               
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-body">
                                             @foreach ($Services as $key => $service)
                                                <div class="d-flex w-100 justify-content-between">
                                                    <div>
                                                        <span>Service {{ $key+=1 }} :</span> <strong>{{ $service->nom_service }}</strong> 
                                                    </div>
                                                </div> @endforeach
                                         
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div> 
                </section>
            </div>
        </div>
    </div>
        @endsection
