
    @extends('layouts.app')
    @section('content')
<section class="u-carousel u-slide u-block-1dcd-1" id="carousel_f1ec" data-interval="5000" data-u-ride="carousel">
    <ol class="u-absolute-hcenter u-carousel-indicators u-block-1dcd-2">
        <li data-u-target="#carousel_f1ec" class="u-grey-30" data-u-slide-to="0"></li>
    </ol>
    <div class="u-carousel-inner" role="listbox">
        <div class="u-align-center u-carousel-item u-clearfix u-image u-shading u-active u-section-1-1"  data-image-width="1600" data-image-height="1067">
            <div class="u-clearfix u-sheet u-sheet-1">
                <h3 class="u-text u-text-default u-text-1">Editer son Profile</h3>
                <div class="u-form u-form-1">
                    <div class="container">
                       <div class="row">
                           <div class="col-lg-12">
                               <form action="{{ route('ed.store') }}" method="POST"  style="padding: 42px;" enctype="multipart/form-data">
                                   @csrf
                                   @foreach($errors->all() as $e)
                                       <p class="alert alert-danger">{{ $e }}</p>
                                   @endforeach
                                   <div class="u-form-group u-form-name">
                                       <label for="name-7c4e" class="u-label">Adresse</label>
                                       <input type="text" placeholder="Adresse" id="name-7c4e" name="adresse" class="u-border-3 u-border-palette-1-dark-1 u-input u-input-rectangle">
                                   </div>
                                   <div class="u-form-email u-form-group">
                                       <label for="email-7c4e" class="u-label">Telephonne</label>
                                       <input type="number" placeholder="Telephonne" id="email-7c4e" name="phone" class="u-border-3 u-border-palette-1-dark-1 u-input u-input-rectangle"  pattern="[\(\-]?([0-9]{3})[\)\-]?[\/\s]?([0-9\-]{3,9})">
                                   </div>
                                   <p></p>
                                   <button type="submit" class="btn btn-primary">Valider</button>
                                   <button type="reset" class="btn btn-danger">Annuler</button>
                                   <div class="u-form-send-message u-form-send-success">Je vous remercie! Votre message a été envoyé.</div>
                                   <div class="u-form-send-error u-form-send-message">Impossible d'envoyer votre message. Veuillez corriger les erreurs puis réessayer.</div>
                                   <input type="hidden" value="" name="recaptchaResponse">
                               </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    @endsection
