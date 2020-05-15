<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Connexion">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Inscription</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Inscription.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>


    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"url": "index.html",
		"logo": "images/LOGOISLANDOFPROJECTS1-01.png",
		"sameAs": [
				"#",
				"#"
		]
}</script>
    <meta property="og:title" content="Inscription">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
  </head>
  <body class="u-body">
       <section class="u-clearfix u-color-scheme-u10 u-color-style-multicolor-1 u-section-1" id="sec-1b98">
      <div class="u-expanded-height-lg u-expanded-height-xl u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-shape u-shape-rectangle u-shape-1"></div>
      <div class="u-clearfix u-gutter-8 u-layout-wrap u-layout-wrap-1">
        <div class="u-gutter-0 u-layout">
          <div class="u-layout-row">
            <div class="u-size-29 u-size-60-md">
              <div class="u-layout-col">
                <div class="u-align-left u-container-style u-grey-5 u-layout-cell u-left-cell u-size-40 u-layout-cell-1">
                  <div class="u-container-layout u-valign-middle u-container-layout-1">
                    <img class="u-expand-resize u-image u-image-1" src="images/LOGOISLANDOFPROJECTS1-011.png">
                  </div>
                </div>
                <div class="u-align-left u-container-style u-grey-5 u-layout-cell u-left-cell u-size-20 u-layout-cell-2" src="">
                  <div class="u-container-layout u-valign-middle-sm u-valign-middle-xs u-container-layout-2">
                    <h5 class="u-custom-font u-font-montserrat u-text u-text-black u-text-1">Connectez vous et permettez a&nbsp;<br>votre projet d'etre vu de millions de fois
                    </h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-size-31 u-size-60-md">
              <div class="u-layout-col">
                <div class="u-container-style u-grey-5 u-layout-cell u-right-cell u-size-60 u-layout-cell-3">
                  <div class="u-container-layout u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-sm u-valign-bottom-xs u-container-layout-3">
                    <h2 class="u-align-center u-custom-font u-font-montserrat u-text u-text-2">Inscription</h2>
                    <div class="u-border-3 u-border-palette-2-base u-line u-line-horizontal u-line-1"></div>
                    <div class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-form u-form-1">
                      <form action="{{ route('register') }}" method="POST" >
                        <div class="u-form-group u-form-name u-form-group-1">
                          <label for="name-e7d2" class="u-label">Nom</label>
                          <input type="text" placeholder="Entrez une adresse email valide" id="name-e7d2" name="name" class=" form-control @error('name') is-invalid @enderror u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-1">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="u-form-email u-form-group u-form-group-2">
                          <label for="name-ed73" class="u-label">Email</label>
                          <input type="email" id="name-ed73" name="email" class=" form-control @error('email') is-invalid @enderror u-border-1 u-border-grey-30 u-input u-input-rectangle u-white"  placeholder="Entrez une adresse email valide">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="u-form-group u-form-group-3">
                          <label for="text-f1e6" class="u-label">Mot de passe</label>
                          <input type="password" placeholder="Confirmer le mot de passe " id="text-f1e6" name="password" class=" form-control @error('password') is-invalid @enderror u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-3">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="u-form-email u-form-group u-form-group-4">
                          <label for="email-ed73" class="u-label">Confirmation mot de passe</label>
                          <input type="password" placeholder="Definir votre mot de passe " id="email-ed73" name="password_confirmation" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                        </div>
                        <div class="u-align-right u-form-group u-form-submit">
                          <a href="#" class="u-black u-btn u-btn-rectangle u-btn-submit u-button-style u-btn-1">
                            <span>Valider</span>
                          </a>
                          <input type="submit" value="submit" class="u-form-control-hidden">
                        </div>
                        <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                        <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
                        <input type="hidden" value="" name="recaptchaResponse">
                      </form>
                    </div>
                    <a href="{{ route('login') }}" class="u-active-none u-border-2 u-border-palette-1-base u-btn u-btn-rectangle u-button-style u-hover-none u-none u-btn-2">Vous avez deja un compte? Connextez-Vous</a>
                    <a href="{{ route('facebook') }}" class="u-border-radius-33 u-btn u-btn-round u-button-style u-palette-1-dark-1 u-btn-3">Continuer avec&nbsp;Facebook</a>
                    <a href="{{ route('google') }}" class="u-border-radius-27 u-btn u-btn-round u-button-style u-palette-2-base u-btn-4">Continuer avec Google</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
