<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Restaurer mot de passe">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Reset Password</title>
    <link rel="stylesheet" href="{{ asset('css/nicepage.css') }}" media="screen">
<link rel="stylesheet" href="{{ asset('css/Reset-Password.css') }}" media="screen">
    <script class="u-script" type="text/javascript" src="{{ asset('js/jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('js/nicepage.js') }}" defer=""></script>


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
    <meta property="og:title" content="Reset Password">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
  </head>
  <body class="u-body">
    <section class="u-clearfix u-color-scheme-u10 u-color-style-multicolor-1 u-section-1" id="sec-30c6">
      <div class="u-expanded-height-lg u-expanded-height-xl u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-grey-5 u-shape u-shape-rectangle u-shape-1"></div>
      <div class="u-clearfix u-gutter-0 u-layout-wrap u-layout-wrap-1">
        <div class="u-gutter-0 u-layout">
          <div class="u-layout-row">
            <div class="u-size-29 u-size-60-md">
              <div class="u-layout-col">
                <div class="u-align-left u-container-style u-grey-5 u-layout-cell u-left-cell u-size-40 u-layout-cell-1">
                  <div class="u-container-layout u-valign-middle u-container-layout-1">
                    <img class="u-expand-resize u-image u-image-1" src="images/LOGOISLANDOFPROJECTS1-011.png">
                  </div>
                </div>
                <div class="u-container-style u-grey-5 u-layout-cell u-left-cell u-size-20 u-layout-cell-2" src="">
                  <div class="u-container-layout u-container-layout-2">
                    <h5 class="u-align-center u-custom-font u-font-montserrat u-text u-text-black u-text-1">Connectez vous et permettez a votre projet d'etre vu de millions de fois</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-size-31 u-size-60-md">
              <div class="u-layout-col">
                <div class="u-container-style u-layout-cell u-right-cell u-size-60 u-layout-cell-3">
                  <div class="u-container-layout u-valign-bottom-xs u-container-layout-3">
                    <h2 class="u-align-center u-custom-font u-font-montserrat u-text u-text-2">Restaurer mot de passe</h2>
                    <div class="u-border-3 u-border-palette-2-base u-line u-line-horizontal u-line-1"></div>
                    <div class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-form u-form-1">
                      <form action="{{ route('password.email') }}"  method="POST" >
                          @csrf
                          @if (session('status'))
                              <div class="alert alert-success" role="alert">
                                  {{ session('status') }}
                              </div>
                          @endif

                          <div class="u-form-email u-form-group u-form-group-1">
                          <label for="name-e7d2" class="u-form-control-hidden u-label"></label>
                          <input type="email" placeholder="Entrez Votre Email pour restaurer le mot de passe " id="name-e7d2"
                                 name="email" class="@error('email') is-invalid @enderror u-border-1
                                 u-border-grey-30 u-input u-input-rectangle u-white u-input-1">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="u-align-center-lg u-align-center-xl u-align-right-md u-align-right-sm u-align-right-xs u-form-group u-form-submit">
                              <button type="submit" class="u-black u-btn u-btn-rectangle u-btn-submit u-button-style u-btn-1">
                                 Valider
                              </button>
                        </div>
                      </form>
                    </div>
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
