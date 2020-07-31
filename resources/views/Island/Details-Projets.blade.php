@extends('layouts.app')

    @section('content')
        <section class="u-clearfix u-section-1" id="sec-e831">
            <div class="u-clearfix u-sheet u-sheet-1">
                <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
                    <div class="u-layout">
                        <div class="u-layout-row">
                            <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-22-md u-size-22-sm u-size-22-xs u-size-23-lg u-size-23-xl u-layout-cell-1" data-href="#">
                                <div class="u-container-layout u-valign-middle u-container-layout-1">
                                    <div class="u-container-style u-expanded-width-sm u-expanded-width-xs u-group u-group-1">
                                        <div class="u-container-layout u-container-layout-2">
                                            <img class="u-absolute-hcenter-xs u-expand-resize u-expanded u-image" src="{{asset('uploads/'.$projets->logo)}}" data-image-width="1280" data-image-height="800">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-37-lg u-size-37-xl u-size-38-md u-size-38-sm u-size-38-xs u-layout-cell-2">
                                <div class="u-container-layout u-container-layout-3">
                                    <div class="u-container-style u-expanded-width u-grey-5 u-group u-group-2">
                                        <div class="u-container-layout u-valign-bottom-lg u-valign-bottom-md u-container-layout-4">
                                            @foreach($user as $us)
                                            <p class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-align-left-xl u-text u-text-black u-text-1">Poste par :
                                                {{$projets->user->name}}</p>
                                            <p class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-align-left-xl u-text u-text-black u-text-2">{{ $us->adresse }}</p>
                                            <h2 class="u-align-center u-text u-text-3">{{$projets->titre}}</h2>
                                            <h2 class="u-align-center u-text u-text-3">Probleme</h2>
                                                <p class="u-align-center u-text u-text-4"> {{ $projets->probleme }}</p>
                                                <h2 class="u-align-center u-text u-text-3">Solution</h2>
                                                <p class="u-align-center u-text u-text-4"> {{ $projets->solution }}</p>
                                                <p class="u-text u-text-palette-2-base u-text-5">Duree : {{$projets->dure}}</p>
                                            <p class="u-text u-text-default u-text-palette-2-base u-text-3 badge badge-light">{{$projets->categorie}}</p>
                                            <p class="u-text u-text-black u-text-default u-text-9">{{$projets->nature}}</p>
                                            <p class="u-text u-text-black u-text-default u-text-10">PRODUIT : </p>
                                                <p class="u-text u-text-black u-text-default u-text-9">{{$projets->stade}}</p>
                                                <p class="u-text u-text-black u-text-default u-text-10">STADE : </p>
                                            <a href="https://{{$projets->video}}" class="u-border-radius-33 u-btn u-btn-round u-button-style u-palette-2-base u-btn-1">Pick deck video</a>
                                            <a href="https://{{$projets->site}}" class="u-border-radius-33 u-btn u-btn-round u-button-style u-btn-2">visiter le site web</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="u-clearfix u-section-2" id="carousel_9db3">
            <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
                <h3 class="u-align-center u-text u-text-1">Notre Equipes</h3>
                <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
                    <div class="u-layout">
                        <div class="u-layout-row">
                            @foreach(unserialize($projets->equipes) as $img)
                            <div class="u-container-style u-layout-cell u-left-cell u-size-20 u-layout-cell-1">
                                <div class="u-container-layout u-container-layout-1">
                                    <img src="{{ asset("uploads/$projets->titre/".$img) }}" alt="" class="u-expanded-width u-image u-image-default u-image-1">
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="u-clearfix u-white u-section-3" id="sec-c3df">
            <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
                <div class="u-clearfix u-expanded-width-xs u-gutter-6 u-layout-wrap u-layout-wrap-1">
                    <div class="u-layout">
                        <div class="u-layout-row">
                            <div class="u-container-style u-layout-cell u-left-cell u-size-28 u-layout-cell-1">
                                <div class="u-container-layout u-container-layout-1">
                                    <div class="u-container-style u-expanded-width-xs u-group u-group-1">
                                        <div class="u-container-layout u-valign-top u-container-layout-2">
                                            @if ($projets->user->file)
                                                <img class="u-expand-resize u-image u-image-default u-image-1 rounded-circle" data-image-width="1280" data-image-height="800" src="{{ asset('uploadprofile/'.$projets->user->file) }}">
                                            @else
                                                <img class="u-expand-resize u-image u-image-default u-image-1 rounded-circle" data-image-width="1280" data-image-height="800" src="{{ asset('images/avatar.jpg') }}">
                                            @endif
                                                <a href="https://wa.me/{{ $us->phone }}" class="u-border-radius-33 u-btn u-btn-round u-button-style u-btn-1">Contacter</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-layout-cell u-right-cell u-size-32 u-layout-cell-2">
                                <div class="u-container-layout u-container-layout-3">
                                    <h2 class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-text u-text-1">
                                        {{$projets->user->name}}</h2>
                                    <p class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-text u-text-2">
                                        {{$projets->user->email}}</p>
                                    <p class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-text u-text-3">TEL : {{ $us->phone }}</p>
                                    <p class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-text u-text-4">Adresse: {{ $us->adresse }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endforeach
    @endsection


