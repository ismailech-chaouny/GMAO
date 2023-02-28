@extends('layouts.app')
@section('title')
    Home
@endsection

@section('content')
    <div id="app">
        <div id="sidebar" class="active">
            @include('layouts.header')
            @include('layouts.sidebar-home')
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <div class="mb-4">
                <h3>Bienvenus dans gestion maintenance assistée</h3>
            </div>
            <div class="page-content">
                <section class="section">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 col-sm-12">
                            <div class="col-12 col-md-6 order-md-2 order-last">
                                <h5>Votre établissements</h3>
                            </div>
                            @foreach ($Etablissements as $Etablissement)
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
                                            @foreach ($Etablissement->services as $key => $service)
                                                <div class="d-flex w-100 justify-content-between">
                                                    <div>
                                                        <p class="mb-1"> service {{ $key += 1 }} </p>
                                                        <strong class="mb-1">
                                                            {{ $service->nom_service }}
                                                        </strong>
                                                    </div>
                                                    @foreach ($service->equipements as $key => $equipement)
                                                        <div>
                                                            <p class="mb-1">equipement est</p>
                                                            <strong class="mb-1">
                                                                {{ $equipement->designation }}
                                                            </strong>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="col-xl-6 col-md-6 col-sm-12">
                            <div class="col-12 col-md-6 order-md-2 order-last">
                                <h5>Votre Taches</h3>
                            </div>
                            @foreach ($Taches as $tache)
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="d-flex w-100 justify-content-between">
                                                <div>
                                                    <span>Description de La tache :</span><br>
                                                    <strong>{{ $tache->description }}</strong>
                                                </div>
                                            </div>
                                            <div>
                                                <span>Service :</span><br>
                                                <strong>{{ $tache->equipement->service->nom_service}}</strong>
                                            </div>
                                            <div>
                                                <span>Equipement :</span><br>
                                                <strong>{{ $tache->equipement->designation }}</strong>
                                            </div>
                                            <div>
                                                <span>Activite de tache :</span> <br>
                                                @foreach ($tache->activites  as $key => $activite )
                                                <strong>{{ $key += 1 }} - {{ $activite->description }} .</strong><br>
                                            @endforeach
                                            </div>
                                            <div class="col-12 d-flex justify-content-end">
                                                <a href="{{ route('Tache.show', $tache->id) }}"
                                                    class="btn btn-outline-info me-1 mb-1">Details de la tache
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    </div>
@endsection
