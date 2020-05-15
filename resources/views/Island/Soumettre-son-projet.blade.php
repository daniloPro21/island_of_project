@extends('layouts.app')

    @section('content')
        <section class="skrollable skrollable-between u-align-center u-clearfix u-image u-shading u-section-1" src="" id="sec-64b1">
            <div class="u-clearfix u-sheet u-sheet-1">
                <h1 class="u-align-center u-text u-text-1">Soumission Projet/Idee</h1>
                <div class="u-container-style u-group u-group-1">
                    <div class="u-container-layout u-valign-middle u-container-layout-1">
                        <h2 class=text-white">Soumettez votre projet de startup et donnez une chance a votre projet d'etre vu de milliers de foisn</h2>
                    </div>
                </div>
            </div>
        </section>
        <section class="u-clearfix u-section-2" id="sec-77f0">
            <div class="container mt-4 mb-4">
                <h1 class="text-center">Soumettez Votre Projet</h1>
                <div class="row">
                    <form action="{{ route('p.store') }}" method="post"  enctype="multipart/form-data" style="padding: 21px;">
                        @csrf
                        @foreach($errors->all() as $e)
                            <p class="alert alert-danger">{{ $e }}</p>
                        @endforeach
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="text-1af5" class="u-label">Logo</label>
                                <input type="file" placeholder="Logo" id="text-1af5" name="logo"
                                       class="u-border-2 u-border-grey-75 u-input u-input-round u-white u-input-1" >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name-6255" class="u-label">Titre du Projet</label>
                                <input type="text" placeholder="Nom du projet" id="name-6255" name="titre"
                                       class="u-border-2 u-border-grey-75 u-input u-input-round u-white">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="select-1975" class="u-label">Categorie du Project</label>
                                <div class="u-form-select-wrapper">
                                    <select id="select-1975" name="categorie"
                                            class="u-border-2 u-border-grey-75 u-input u-input-round u-white u-input-3"
                                            autofocus="autofocus">
                                        <option value="covid19">COVID-19</option>
                                        <option value="Social">Social</option>
                                        <option value="Agriculture">Agriculture</option>
                                        <option value="Numerique">Numerique</option>
                                        <option value="Services">Services</option>
                                        <option value="Industries">Industries</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="select-0088" class="u-label">Duree du Projet</label>
                                <div class="u-form-select-wrapper">
                                    <select id="select-0088" name="dure"
                                            class="u-border-2 u-border-grey-75 u-input u-input-round u-white u-input-4">
                                        <option value="1 ans">1 ans</option>
                                        <option value="2 ans">2 ans</option>
                                        <option value="3-4 ans">3-4 ans</option>
                                        <option value="5-6 ans">5-6 ans</option>
                                        <option value="+ 6 ans">+ 6 ans</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="message-6255" class="u-label">Description</label>
                                <textarea placeholder="Breve description du projet" rows="4" cols="50" id="message-6255" name="description"
                                          class="u-border-2 u-border-grey-75 u-input u-input-round u-white"></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="textarea-e662" class="u-label">Presentation du probleme</label>
                                <textarea placeholder="Description du probleme" rows="4" cols="50" id="textarea-e662" name="probleme"
                                          class="u-border-2 u-border-grey-75 u-input u-input-round u-white u-input-6" ></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="textarea-47c1" class="u-label">Solution</label>
                                <textarea placeholder="Decrivez votre solution" rows="4" cols="50" id="textarea-47c1" name="solution"
                                          class="u-border-2 u-border-grey-75 u-input u-input-round u-white u-input-8" type="text">
                                </textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="select-4f2a" class="u-label">Stade du projet</label>
                                <div class="u-form-select-wrapper">
                                    <select id="select-4f2a" name="stade"
                                            class="u-border-2 u-border-grey-75 u-input u-input-round u-white u-input-7">
                                        <option value="Idee">Idee</option>
                                        <option value="Preuve du concept">Preuve du concept</option>
                                        <option value="Prototype">Prototype</option>
                                        <option value="Produit">Produit</option>
                                        <option value="Expension">Expension</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="textarea-47c1" class="u-label">Nature du produit final</label>
                                <input placeholder="" rows="4" cols="50" id="textarea-47c1" name="nature"
                                       class="u-border-2 u-border-grey-75 u-input u-input-round u-white u-input-8" type="text">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="text-fda2" class="u-label">Lien vers le site web</label>
                                <input type="text" placeholder="Lien vers le site web" id="text-fda2" name="site"
                                       class="u-border-2 u-border-grey-75 u-input u-input-round u-white u-input-9">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="text-d003" class="u-label">Lien vers le pick Video</label>
                                <input type="text" placeholder="Lien vers le pick video" id="text-d003" name="video"
                                       class="u-border-2 u-border-grey-75 u-input u-input-round u-white u-input-10">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="text-d003" class="u-label">Image de Votre Equipes</label>
                                <input type="file" name="equipes[]"  placeholder="les images de votre equipes" id="text-d003" multiple
                                       class="u-border-2 u-border-grey-75 u-input u-input-round u-white u-input-10">
                            </div>
                        </div>
                        <div>
                            <input type="submit" value="Valider" class="btn btn-primary">
                            <input type="reset" value="Annuler" class="btn btn-danger offset-4">
                        </div>
                    </form>
                </div>

            </div>
        </section>
    @endsection
