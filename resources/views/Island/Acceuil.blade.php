    @extends('layouts.app')

        @section('content')
<section class="skrollable skrollable-between u-align-center u-clearfix u-image u-shading u-section-1" src="" id="sec-51da">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-1">ISLAND OF PROJECTS</h1>
        <div class="u-align-center u-container-style u-group u-group-1">
            <div class="u-container-layout u-container-layout-1">


                    <h3 class="text-center">
                        LE PREMIER RESERVOIR DE VISUALISATION LIBRE DE PROJETS POUR LES
                        <marquee behavior="slide" direction="down">
                      <center>
                          INVESTISSEURS ET INNOVATUERS
                      </center>
                        </marquee>

                    </h3>
            </div>
        </div>
        <div class="u-align-center u-container-style u-group u-group-2">
            <div class="u-container-layout u-container-layout-2">
                <h4 class="text-center"> Saissisez l'opportunite de mettre en evidence votre projet/idees qui sera consulte chaque jour par de millions d'investisseurs</h4>
            </div>
        </div>
        <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
            <div class="u-layout">
                <div class="u-layout-row">
                    <div class="u-align-center-sm u-align-center-xs u-align-right-lg u-align-right-md u-align-right-xl u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                        <div class="u-container-layout u-valign-bottom u-container-layout-3">
                            <a href="{{ route('voir') }}" class="u-border-2 u-border-hover-white u-border-palette-2-base u-border-radius-50 u-btn u-btn-round u-button-style u-palette-2-base u-text-hover-black u-btn-1">VIsitez l'ile des projets</a>
                        </div>
                    </div>
                    <div class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
                        <div class="u-container-layout u-valign-bottom-lg u-valign-bottom-xl u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-4">
                            <a href="{{ route('soumettre') }}" class="u-border-2 u-border-radius-50 u-border-white u-btn u-btn-round u-button-style u-text-hover-palette-1-light-1 u-text-white u-btn-2">Soumettre son projet</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="u-align-left u-clearfix u-palette-1-dark-1 u-valign-middle-sm u-valign-middle-xs u-section-2" id="sec-5688">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
            <div class="u-layout">
                <div class="u-layout-row">
                    <div class="u-container-style u-layout-cell u-left-cell u-size-12 u-size-20-md u-layout-cell-1">
                        <div class="u-container-layout u-valign-middle u-container-layout-1">
                            <a href="{{ route('categorie', ['name' => 'social']) }}" class="u-align-center text-white u-text u-text-default u-text-1 font-weight-bold">SOCIAL</a>
                        </div>
                    </div>
                    <div class="u-align-center-sm u-align-center-xs u-container-style u-layout-cell u-size-12 u-size-20-md u-layout-cell-2">
                        <div class="u-container-layout u-valign-middle u-container-layout-2">
                            <a href="{{ route('categorie', ['name' => 'agriculture']) }}" class="u-align-center-lg text-white u-align-center-md u-align-center-xl u-text u-text-default u-text-2 font-weight-bold">AGRICULTURE</a>
                        </div>
                    </div>
                    <div class="u-container-style u-layout-cell u-size-12 u-size-20-md u-layout-cell-3">
                        <div class="u-container-layout u-valign-middle u-container-layout-3">
                            <a href="{{ route('categorie', ['name' => 'numerique']) }}" class="u-align-center text-white u-text u-text-default u-text-3 font-weight-bold">NUMERIQUE
                            </a>
                        </div>
                    </div>
                    <div class="u-container-style u-layout-cell u-size-12 u-size-30-md u-layout-cell-4">
                        <div class="u-container-layout u-valign-middle u-container-layout-4">
                            <a href=" {{ route('categorie', ['name' => 'services']) }} " class="u-align-center u-text u-text-default u-text-4 text-white font-weight-bold">SERVICES</a>
                        </div>
                    </div>
                    <div class="u-container-style u-layout-cell u-right-cell u-size-12 u-size-30-md u-layout-cell-5">
                        <div class="u-container-layout u-valign-middle u-container-layout-5">
                            <a href="{{ route('categorie', ['name' => 'industrie']) }}" class="u-align-center u-text u-text-5 text-white font-weight-bold">INDUSTRIE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="u-align-center u-clearfix u-white u-section-3" id="sec-77da">


    <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-palette-2-base u-text-1">Projet COVID 19</h2>
        <div class="u-clearfix u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-gutter-20 u-layout-wrap u-layout-wrap-1">
            <div class="u-layout">
                <div class="u-layout-row">
                    @foreach($covid as $c)
                    <div class="u-container-style u-layout-cell u-left-cell u-palette-1-dark-2 u-size-20 u-size-60-md u-layout-cell-1">
                        <div class="u-container-layout u-valign-bottom-md u-valign-bottom-sm u-container-layout-1">
                            <div class="u-container-style u-expanded-width u-group u-group-1">
                                <div class="u-container-layout u-container-layout-2">
                                    <a href="{{ route('projet', ['projets' => $c->id]) }}">
                                    <img class="u-expand-resize u-expanded-width u-image u-image-1" src="{{ asset('uploads/'.$c->logo) }}" data-image-width="1280" data-image-height="800">
                                    </a>
                                </div>
                            </div>
                            <div class="u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-expanded-width u-group u-group-2">
                                <div class="u-container-layout u-valign-top u-container-layout-3">
                                    <p class="u-align-left btn btn-primary btn-sm"> {{$c->nbr}}Consultations</p>
                                    <h4 class="u-align-left u-text u-text-3">{{ $c->name }}</h4>
                                    <h4 class="u-align-left-lg u-align-left-xl u-align-right-md u-align-right-sm u-align-right-xs u-text u-text-4">{{ $c->adresse }}</h4>
                                    <h4 class="u-align-center u-text u-text-5">{{$c->titre}}</h4>
                                    <p class="u-align-center u-text u-text-6">
                                        {{ $c->description }}
                                    </p>
                                    <h3 class="u-text u-text-palette-2-base u-text-7 badge badge-light">{{ $c->categorie }}</h3>
                                    <h4 class="u-text u-text-8">{{$c->stade}}</h4>
                                    <h4 class="u-text u-text-9">Stade</h4>
                                    <h4 class="u-align-left-lg u-align-left-xl u-text u-text-10">Produit</h4>
                                    <h4 class="u-align-left-xl u-text u-text-11">{{ $c->nature }}</h4>
                                </div>
                            </div>
                            <div class="u-container-style u-expanded-width u-group u-group-3">
                                <div class="u-container-layout u-valign-top-lg u-valign-top-xs u-container-layout-4">
                                    <a href="https://{{$c->site}}" class="u-border-radius-10 u-btn u-btn-round u-button-style u-white u-btn-1">visiter le site web</a>
                                    <a href="{{ $c->video }}" class="u-border-2 u-border-palette-2-base u-border-radius-10 u-btn u-btn-round u-button-style u-none u-btn-2">Pich deck video&nbsp;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @if ($t == 3)
            <a href="{{ route('covid19') }}" class="u-border-radius-20 u-btn u-btn-round u-button-style u-palette-2-base u-btn-7">Voir Plus de projet covid </a>
        @endif
    </div>
</section>
<section class="u-align-center u-clearfix u-white u-section-3" id="sec-77da">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-palette-2-base u-text-1">Top Projets</h2>
        <div class="u-clearfix u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-gutter-20 u-layout-wrap u-layout-wrap-1">
            <div class="u-layout">
                <div class="u-layout-row">
                    @foreach($p as $ps)
                    <div class="u-container-style u-layout-cell u-left-cell u-palette-1-dark-2 u-size-20 u-size-60-md u-layout-cell-1">
                        <div class="u-container-layout u-valign-bottom-md u-valign-bottom-sm u-container-layout-1">
                            <div class="u-container-style u-expanded-width u-group u-group-1">
                                <div class="u-container-layout u-container-layout-2">
                                    <a href="{{ route('projet', ['projets' => $ps->id]) }}">
                                        <img class="u-expand-resize u-expanded-width u-image u-image-1"
                                             src="{{ asset('uploads/'.$ps->logo) }}" data-image-width="1280" data-image-height="800">
                                    </a>
                                </div>
                            </div>
                            <div class="u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-expanded-width u-group u-group-2">
                                <div class="u-container-layout u-valign-top u-container-layout-3">
                                    <h4  class="u-align-left btn btn-primary btn-sm"> {{$ps->nbr}} Consultaions</h4>
                                    <h4 class="u-align-left u-text u-text-3">{{$ps->name}}</h4>
                                    <h4 class="u-align-left-lg u-align-left-xl u-align-right-md u-align-right-sm u-align-right-xs u-text u-text-4">{{ $ps->adresse }}</h4>
                                    <h4 class="u-align-center u-text u-text-5">{{$ps->titre}}</h4>
                                    <p class="u-align-center u-text u-text-6">
                                        {{$ps->description}}
                                    </p>
                                    <h3 class="u-text u-text-palette-2-base u-text-7 badge badge-light">{{$ps->categorie}}</h3>
                                    <h4 class="u-text u-text-8">{{$ps->stade}}</h4>
                                    <h4 class="u-text u-text-9">Stade : </h4>
                                    <h4 class="u-align-left-lg u-align-left-xl u-text u-text-10">Produit : </h4>
                                    <h4 class="u-align-left-xl u-text u-text-11">{{ $ps->nature }}</h4>
                                </div>
                            </div>
                            <div class="u-container-style u-expanded-width u-group u-group-3">
                                <div class="u-container-layout u-valign-top-lg u-valign-top-xs u-container-layout-4">
                                    <a href="#" class="u-border-radius-10 u-btn u-btn-round u-button-style u-white u-btn-1">visiter le site web</a>
                                    <a href="#" class="u-border-2 u-border-palette-2-base u-border-radius-10 u-btn u-btn-round u-button-style u-none u-btn-2">Pich deck video&nbsp;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <a href="{{ route('voir') }}" class="u-border-radius-20 u-btn u-btn-round u-button-style u-palette-2-base u-btn-7">Voir tous les projets</a>
    </div>
</section>

<section class="u-clearfix u-grey-10 u-section-5" id="sec-b0fc">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-container-style u-expanded-width u-group u-group-1">
            <div class="u-container-layout u-container-layout-1">
                <h1 class="u-align-center u-text u-text-default u-text-1">Nos Statistiques</h1>
                <div class="u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-group-2">
                    <div class="u-container-layout u-valign-bottom-xs u-valign-top-lg u-valign-top-md u-valign-top-xl u-container-layout-2">
                        <h3 class="u-align-center u-custom-font u-font-montserrat u-text u-text-2" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000"><b>+300 000</b>
                            <br>
                        </h3>
                        <h3 class="u-align-center u-text u-text-palette-2-base u-text-3">&nbsp;projets references</h3>
                        <h3 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-4" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000"><b>+500 000</b>
                            <br>
                        </h3>
                        <h3 class="u-align-center u-text u-text-default u-text-palette-2-base u-text-5">&nbsp;consultations par jour</h3>
                        <h3 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-6" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000"><b>+200 000</b>
                            <br>
                        </h3>
                        <h3 class="u-align-center u-text u-text-palette-2-base u-text-7">redirection vers les sites projets</h3>
                        <h3 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-8" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000"><b>+100 000</b>
                            <br>
                        </h3>
                        <h3 class="u-align-center u-text u-text-palette-2-base u-text-9">contacts des&nbsp;proteurs deprojets</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="u-clearfix u-section-6" id="sec-3af7">
    <div class="u-clearfix u-sheet u-valign-bottom-sm u-valign-middle-xs u-valign-top-lg u-valign-top-md u-sheet-1">
        <div class="u-container-style u-expanded-width u-group u-group-1">
            <div class="u-container-layout u-container-layout-1">
                <h1 class="u-align-center u-text u-text-1">Les Startup qui nous font confiance</h1>
            </div>
        </div>
        <div class="u-clearfix u-expanded-width-sm u-expanded-width-xs u-gutter-20 u-layout-wrap u-layout-wrap-1">
            <div class="u-gutter-0 u-layout">
                <div class="u-layout-row">
                    <div class="u-container-style u-layout-cell u-left-cell u-size-15 u-size-30-md u-layout-cell-1">
                        <div class="u-container-layout u-valign-middle-sm u-container-layout-2" src="">
                            <img class="u-expand-resize u-image u-image-contain u-image-1" src="images/covid.jpeg">
                        </div>
                    </div>
                    <div class="u-container-style u-layout-cell u-size-15 u-size-30-md u-layout-cell-2">
                        <div class="u-container-layout u-container-layout-3" src="">
                            <img class="u-expanded-width u-image u-image-contain u-image-2" src="images/moov.jpeg">
                        </div>
                    </div>
                    <div class="u-container-style u-layout-cell u-size-15 u-size-30-md u-layout-cell-3">
                        <div class="u-container-layout u-container-layout-4" src="">
                            <img class="u-expanded-width u-image u-image-contain u-image-3" src="images/affait.jpeg">
                        </div>
                    </div>
                    <div class="u-container-style u-layout-cell u-right-cell u-size-15 u-size-30-md u-layout-cell-4">
                        <div class="u-container-layout u-valign-top-xs u-container-layout-5" src="">
                            <img class="u-expanded-width-lg u-expanded-width-md u-expanded-width-xl u-image u-image-contain u-image-4" src="images/dream.jpeg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="u-align-center u-black u-clearfix u-section-7" id="sec-a6d3">
    <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1">
        <div class="u-align-left u-container-style u-expanded-width u-group u-group-1">
            <div class="u-container-layout u-container-layout-1">
                <p class="u-text u-text-palette-2-base u-text-1">&nbsp;vous etez une startup.&nbsp;<br>ou vous avez un projet ?
                </p>
                <a href="Soumettre-son-projet.html" class="u-border-radius-29 u-btn u-btn-round u-button-style u-text-palette-2-base u-white u-btn-1">Soumettez votre projet</a>
            </div>
        </div>
    </div>
</section>
        @endsection

