<!DOCTYPE html>
<html style="font-size: 16px;">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Connexion">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Connexion</title>
    <link rel="stylesheet" href="{{ asset('css/nicepage.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/Connexion.css') }}" media="screen">
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
    <meta property="og:title" content="Connexion">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="{{ asset('index.html') }}">
    <meta property="og:url" content="index.html">
</head>
<body class="u-body">
<section class="u-clearfix u-color-scheme-u10 u-color-style-multicolor-1 u-section-1" id="carousel_9ce7">
    <div class="u-expanded-height-lg u-expanded-height-xl u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-grey-5 u-shape u-shape-rectangle u-shape-1"></div>
    <div class="u-clearfix u-gutter-0 u-layout-wrap u-layout-wrap-1">
        <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
                <div class="u-size-29 u-size-60-md">
                    <div class="u-layout-col">
                        <div class="u-align-left u-container-style u-grey-5 u-layout-cell u-left-cell u-size-40 u-layout-cell-1">
                            <div class="u-container-layout u-valign-middle u-container-layout-1">
                                <img class="u-expand-resize u-image u-image-1" src="{{ asset('images/LOGOISLANDOFPROJECTS1-011.png') }}">
                            </div>
                        </div>
                        <div class="u-container-style u-grey-5 u-layout-cell u-left-cell u-size-20 u-layout-cell-2" src="">
                            <div class="u-container-layout u-container-layout-2">
                                <h5 class="u-align-center u-custom-font u-font-montserrat u-text u-text-black u-text-default u-text-1">Connectez vous et permettez a votre projet d'etre vu de millions de fois</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="u-size-31 u-size-60-md">
                    <div class="u-layout-col">
                        <div class="u-container-style u-layout-cell u-right-cell u-size-60 u-layout-cell-3">
                            <div class="u-container-layout u-valign-bottom-xs u-container-layout-3">
                                <h2 class="u-align-center u-custom-font u-font-montserrat u-text u-text-2">Connexion</h2>
                                <div class="u-border-3 u-border-palette-2-base u-line u-line-horizontal u-line-1"></div>
                                <div class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-form u-form-1">
                                    <form method="post" action="{{ route('login') }}"  >
                                        @csrf
                                       @error('email')
                                        {{ $message }}
                                        @enderror
                                        <div class="u-form-email u-form-group">
                                            <label for="name-ed73" class="u-label">Email</label>
                                            <input type="email" id="name-ed73" name="email" class=" form-control @error('email') is-invalid @enderror u-border-1 u-border-grey-30 u-input u-input-rectangle u-white"  placeholder="Entrez votre adresse email">
                                        </div>
                                        <div class="u-form-email u-form-group">
                                            <label for="email-ed73" class="u-label">Mot de passe</label>
                                            <input type="password" placeholder="Entre votre mot de passe" id="email-ed73" name="password" class=" form-control @error('password') is-invalid @enderror u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" >
                                        </div>
                                            <button type="submit" class="u-black u-btn u-btn-rectangle u-btn-submit u-button-style u-btn-1">valider</button>
                                        <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                                        <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
                                    </form>
                                </div>
                                <a href="{{ route('reset') }}" class="u-active-none u-border-2 u-border-palette-1-base u-btn u-btn-rectangle u-button-style u-hover-none u-none u-btn-2">Mot de passe oublier</a>
                                <a href="{{ route('register') }}" class="u-active-none u-border-2 u-border-palette-1-base u-btn u-btn-rectangle u-button-style u-hover-none u-none u-btn-3">pas de compte ? Inscrivez-vous</a>
                                <a href="{{ route('facebook') }}" class="u-border-radius-33 u-btn u-btn-round u-button-style u-palette-1-dark-1 u-btn-4">Continuer avec Facebook</a>
                                <a href="{{ route('google') }}" class="u-border-radius-27 u-btn u-btn-round u-button-style u-palette-2-base u-btn-5">Continuer avec Google</a>
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
