@extends('layouts.app')
   @section('content')
       <section class="skrollable skrollable-between u-align-center u-clearfix u-image u-shading u-section-1" src="" id="sec-f1b9">
           <div class="u-clearfix u-sheet u-sheet-1">
               <h1 class="u-text u-text-1">ISLAND OF PROJECTS</h1>
               <div class="u-align-center u-container-style u-group u-group-1">
                   <div class="u-container-layout u-container-layout-1">
                       <h3 class="text-center">LE PREMIER RESERVOIR DE VISUALISATION LIBRE DE PROJETS POUR LES INVESTISSEURS</h3>
                   </div>
               </div>
               <div class="u-align-center u-container-style u-group u-group-2">
                   <div class="u-container-layout u-container-layout-2">
                       <p class="u-text u-text-3"> Saissisez l'opportunite de mettre en evidence votre projet/idees qui sera consulte chaque jour par de millions d'investisseurs</p>
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


       <section class="u-align-center u-clearfix u-white u-section-3" id="sec-22b7">
           <div class="u-clearfix u-sheet u-sheet-1">

               <div class="u-clearfix u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-gutter-20 u-layout-wrap u-layout-wrap-1">
                   <div class="u-layout">
                       <div class="u-layout-row">
                           @foreach($t as $ts)
                           <div class="u-container-style u-layout-cell u-left-cell u-palette-1-dark-2 u-size-20 u-size-60-md u-layout-cell-1">
                               <div class="u-container-layout u-valign-bottom-md u-valign-bottom-sm u-container-layout-1">
                                   <div class="u-container-style u-expanded-width u-group u-group-1">
                                       <div class="u-container-layout u-container-layout-2">
                                           <a href="{{route('detail', ['projets' => $ts->id])}}">
                                               <img class="u-expand-resize u-expanded-width u-image u-image-1"
                                                    src="{{asset('uploads/'.$ts->logo)}}" data-image-width="1280" data-image-height="800">
                                           </a>
                                       </div>
                                   </div>
                                   <div class="u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-expanded-width u-group u-group-2">
                                       <div class="u-container-layout u-valign-top u-container-layout-3">
                                           <p class="u-align-left btn btn-primary btn-sm"> {{ $ts->nbr }} Consultaions</p>
                                           <h4 class="u-align-left u-text u-text-3">{{$ts->name}}</h4>
                                           <h4 class="u-align-left-lg u-align-left-xl u-align-right-md u-align-right-sm u-align-right-xs u-text u-text-4">
                                               {{$ts->adresse}}</h4>
                                           <h4 class="u-align-center u-text u-text-5">{{$ts->titre}}</h4>
                                           <p class="u-align-center u-text u-text-6">
                                             {{ $ts->description }}
                                           </p>
                                           <h3 class="u-text u-text-palette-2-base u-text-7 badge badge-primary">{{ $ts->categorie }}</h3>
                                           <h4 class="u-text u-text-8">{{$ts->stade}}</h4>
                                           <h4 class="u-text u-text-9">Stade</h4>
                                           <h4 class="u-align-left-lg u-align-left-xl u-text u-text-10">Produit</h4>
                                           <h4 class="u-align-left-xl u-text u-text-11">${{ $ts->nature }}</h4>
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
               <a href="{{ route('soumettre') }}" class="u-border-radius-20 u-btn u-btn-round u-button-style u-palette-2-base u-btn-7">Soumettre son Projet</a>
           </div>
       </section>


   @endsection
