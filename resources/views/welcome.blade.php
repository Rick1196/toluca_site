@php
    use \App\Http\Controllers\ForumController;
@endphp
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.header')
    </head>
    <body>
            @include('partials.navbar')

                            <div class="top-search hidden-xs hidden-sm"> <!-- Top Search -->

                                <div class="toggle-container">
                                    <a class="toggle-link" href="#"><i class="fa fa-search"></i></a>
                                    <div class="togglebox">
                                        <form role="form">
                                            <div class="input-group">
                                                <span class="btn btn-primary input-group-addon"><i class="fa fa-search"></i></span>
                                                <input class="form-control" type="text" placeholder="Search">
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div><!-- /Top Search -->

                            <!-- /Navigation -->

                        </div>

                    </div> <!-- /Row -->

                </div> <!-- /Container -->

            </div>
            <!-- /Header Bottom Container -->

        </div>
        <!-- /Header Container -->

        <!-- Slider Container -->
        <div class="slider-wrapper">

            <div class="fullwidthbanner-container">
                <div class="fullwidthbanner">
                    <ul>
                        <li data-transition="slotslide-horizontal" data-slotamount="5" data-masterspeed="700" >
                            <img src="https://a.travel-assets.com/findyours-php/viewfinder/images/res60/200000/200876-Toluca-And-Vicinity.jpg"  alt="slider1-bg" data-lazyload="https://a.travel-assets.com/findyours-php/viewfinder/images/res60/200000/200876-Toluca-And-Vicinity.jpg" data-bgposition="bottom center" data-kenburns="on" data-duration="9000" data-ease="Linear.easeNone" data-bgfit="110" data-bgfitend="100" data-bgpositionend="top center">
                            <div class="caption very-large-strong color-white customin customout start" data-x="center" data-y="200" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1000"	data-start="500"
                                 data-easing="Back.easeInOut" data-endspeed="300" >
                                ALCALDÍA TOLUCA
                            </div>
                            <div class="caption medium-light color-white text-center skewfromleft start" data-x="100" data-y="216" data-speed="800" data-endspeed="300" data-start="1200" data-easing="Power4.easeOut" data-endeasing="Power1.easeIn">
                                <span class="fa fa-square"></span>
                            </div>
                            <div class="caption medium-light color-white skewfromright start" data-x="right" data-hoffset="-100" data-y="216" data-speed="800" data-endspeed="300" data-start="1200" data-easing="Power4.easeOut" data-endeasing="Power1.easeIn">
                                <span class="fa fa-square"></span>
                            </div>
                            <div class="caption big-light color-white customin customout"
                                 data-x="center"
                                 data-y="270"
                                 data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-start="1200"
                                 data-speed="600"
                                 data-easing="Linear.easeNone"
                                 data-endspeed="600"
                                 data-endeasing="Linear.easeNone">
                                {{-- Light and Beautiful Boostrap 3 Theme --}}
                            </div>
                            <div class="caption big-light color-white customin customout"
                                 data-x="center"
                                 data-y="320"
                                 data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-start="1800"
                                 data-speed="600"
                                 data-easing="Linear.easeNone"
                                 data-endspeed="600"
                                 data-endeasing="Linear.easeNone">
                                {{-- with smart and easy to use functions and shortcodes. --}}
                            </div>
                            <div class="caption customin customout start" data-x="center" data-y="400" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1000"	data-start="2000"
                                 data-easing="Back.easeInOut" data-endspeed="300"><button class="btn btn-lg btn-white btn-border">ARE YOU READY?</button></div>
                        </li>
                        <li data-transition="parallaxtotop" data-slotamount="5" data-masterspeed="700">
                            <img src="https://www.gob.mx/cms/uploads/article/main_image/62896/Blog_Toluca.jpg"  alt="slider2-bg" data-lazyload="https://www.gob.mx/cms/uploads/article/main_image/62896/Blog_Toluca.jpg" data-bgposition="center center" data-kenburns="on" data-duration="8000" data-ease="Linear.easeNone" data-bgfit="110" data-bgfitend="100" data-bgpositionend="center center">
                            <div class="caption very-large-light color-white customin customout start"
                                 data-x="center"
                                 data-y="center"
                                 data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="1000"
                                 data-start="800"
                                 data-easing="Back.easeInOut"
                                 data-endspeed="300">
                                GOBIERNO MUNICIPAL DE TOLUCA
                            </div>
                            <div class="caption medium-strong color-white skewfromtop"
                                 data-x="center"
                                 data-y="390"
                                 data-speed="400"
                                 data-start="3800"
                                 data-easing="Cube.easeOut"
                                 data-endspeed="300"
                                 data-endeasing="Power1.easeIn">
                                and this is just the beginning!
                            </div>
                            <div class="caption medium-strong color-white text-center bg-color-default skewfromleft"
                                 data-x="200"
                                 data-y="150"
                                 data-speed="400"
                                 data-start="1200"
                                 data-easing="Cube.easeOut"
                                 data-endspeed="300"
                                 data-endeasing="Power1.easeIn">
                                SOLICITA MÁS INFORMACIÓN
                            </div>
                            <div class="caption medium-strong color-white bg-color-purple lft"
                                 data-x="center"
                                 data-y="100"
                                 data-speed="400"
                                 data-start="1600"
                                 data-easing="Cube.easeOut"
                                 data-endspeed="300"
                                 data-endeasing="Power1.easeIn">
                                OBLIGACIONES
                            </div>
                            <div class="caption medium-strong color-white bg-color-orange skewfromright"
                                 data-x="right"
                                 data-hoffset="-204"
                                 data-y="150"
                                 data-speed="400"
                                 data-start="2000"
                                 data-easing="Cube.easeOut"
                                 data-endspeed="300"
                                 data-endeasing="Power1.easeIn">
                                INFORMACIÓN FINANCIERA
                            </div>
                            <div class="caption medium-strong color-white bg-color-info skewfromright"
                                 data-x="right"
                                 data-hoffset="-204"
                                 data-y="bottom"
                                 data-voffset="-150"
                                 data-speed="400"
                                 data-start="2400"
                                 data-easing="Cube.easeOut"
                                 data-endspeed="300"
                                 data-endeasing="Power1.easeIn">
                                3 DE 3
                            </div>
                            <div class="caption medium-strong color-white bg-color-success lfb"
                                 data-x="center"
                                 data-y="bottom"
                                 data-voffset="-75"
                                 data-speed="400"
                                 data-start="2800"
                                 data-easing="Cube.easeOut"
                                 data-endspeed="300"
                                 data-endeasing="Power1.easeIn">
                                INFORMACIÓN A TU ALCANCE
                            </div>
                            <div class="caption medium-strong color-white bg-color-danger skewfromleft"
                                 data-x="200"
                                 data-y="bottom"
                                 data-voffset="-150"
                                 data-speed="400"
                                 data-start="3200"
                                 data-easing="Cube.easeOut"
                                 data-endspeed="300"
                                 data-endeasing="Power1.easeIn">
                                TRANSPARENCIA
                            </div>
                        </li>
                        <li data-transition="slotslide-vertical" data-slotamount="5" data-masterspeed="700" >
                            <img src="https://a.travel-assets.com/findyours-php/viewfinder/images/res60/200000/200901-Toluca-And-Vicinity.jpg"  alt="slider3-bg" data-lazyload="https://a.travel-assets.com/findyours-php/viewfinder/images/res60/200000/200901-Toluca-And-Vicinity.jpg" data-bgposition="center right" data-kenburns="on" data-duration="9000" data-ease="Linear.easeNone" data-bgfit="116" data-bgfitend="100" data-bgpositionend="center left">
                            <div class="caption very-large-strong color-white randomrotate"
                                 data-x="center"
                                 data-y="320"
                                 data-speed="900"
                                 data-start="800"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="600"
                                 data-endeasing="Power0.easeIn">
                                NODO DE INNOVACIÓN
                            </div>
                            <div class="caption medium-light text-center bg-color-default color-white randomrotate"
                                 data-x="center"
                                 data-y="410"
                                 data-speed="900"
                                 data-start="1000"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="600"
                                 data-endeasing="Power0.easeIn">
                                MORENA<br/>
                                La esperanza de méxico
                            </div>
                            <div class="caption very-large-strong color-white fade"
                                 data-x="center"
                                 data-y="140"
                                 data-speed="900"
                                 data-start="1200"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="600"
                                 data-endeasing="Power0.easeIn">
                                <img src="img/theme/revolution/logo-icon.png" width="130" height="130" alt="SmartOn">
                            </div>
                        </li>
                        {{-- <li data-transition="parallaxtoright" data-slotamount="7" data-masterspeed="1000"  data-fstransition="fade" data-fsmasterspeed="1000" data-fsslotamount="7">
                            <img src="img/theme/revolution/video-bg.jpg"  alt="video_bg"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                            <div class="tp-caption tp-fade fadeout fullscreenvideo"
                                 data-x="0"
                                 data-y="0"
                                 data-speed="1000"
                                 data-start="1100"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="1500"
                                 data-endeasing="Power4.easeIn"
                                 data-autoplay="true"
                                 data-autoplayonlyfirsttime="false"
                                 data-nextslideatend="true"
                                 data-forceCover="1" data-dottedoverlay="twoxtwo" data-aspectratio="16:9" data-forcerewind="on"			style="z-index: 2">

                                <video class="video-js vjs-default-skin" preload="none" poster='img/theme/revolution/video-bg.jpg' data-setup="{}">
                                    <source src='http://fourgrafx.com/video/video1.mp4' type='video/mp4' />
                                    <source src='http://fourgrafx.com/video/video1.webm' type='video/webm' />
                                    <source src='http://fourgrafx.com/video/video1.ogv' type='video/ogg' />
                                </video>
                            </div>

                            <div class="caption very-large-strong color-white customin customout tp-resizeme"
                                 data-x="center" data-hoffset="0"
                                 data-y="370"
                                 data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:5;scaleY:5;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="900"
                                 data-start="800"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="600"
                                 data-endeasing="Power0.easeIn"
                                 style="z-index: 3">
                                HTML5 Video Background
                            </div>

                            <div class="caption medium-light color-white customin customout tp-resizeme"
                                 data-x="center" data-hoffset="0"
                                 data-y="440"
                                 data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:5;scaleY:5;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="900"
                                 data-start="1200"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="600"
                                 data-endeasing="Power0.easeIn"
                                 style="z-index: 3">
                                Amazing easy to use videos as background.
                            </div>
                        </li> --}}
                    </ul>
                    <div class="tp-bannertimer tp-bottom"></div>
                </div>
            </div>

        </div>
        <!-- /Slider Container -->

        <!-- Main Container -->
        <div class="main-wrapper">

            {{--<div class="container"> <!-- Container -->

                <div class="blank-spacer padding-top20 padding-bottom20"></div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="service-block sb-border sb-default animation bounceIn">
                            <div class="service-block-icon text-center">
                                <div class="icon-wrapper icon-border-radius fa-4x color-default">
                                    <i class="fa fa-tablet"></i>
                                </div>
                            </div>
                            <div class="service-block-title text-center">
                                <p>Noticia 1</p>
                            </div>
                            <div class="service-block-content text-center">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid in atque dolorum hic neque unde ex, quisquam soluta voluptas officia magnam doloremque, quasi ducimus impedit voluptatibus sed, autem facere?</p>
                                <a href="#" class="link-icon">Leer más <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-block sb-border sb-purple animation bounceIn">
                            <div class="service-block-icon text-center">
                                <div class="icon-wrapper icon-border-radius fa-4x color-purple">
                                    <i class="fa fa-cogs"></i>
                                </div>
                            </div>
                            <div class="service-block-title text-center">
                                <p>Noticia 2</p>
                            </div>
                            <div class="service-block-content text-center">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid in atque dolorum hic neque unde ex, quisquam soluta voluptas officia magnam doloremque, quasi ducimus impedit voluptatibus sed, autem facere?</p>
                                <a href="#" class="link-icon purple">Leer más <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-block sb-border sb-orange animation bounceIn">
                            <div class="service-block-icon text-center">
                                <div class="icon-wrapper icon-border-radius fa-4x color-orange">
                                    <i class="fa fa-credit-card"></i>
                                </div>
                            </div>
                            <div class="service-block-title text-center">
                                <p>Noticia 3</p>
                            </div>
                            <div class="service-block-content text-center">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid in atque dolorum hic neque unde ex, quisquam soluta voluptas officia magnam doloremque, quasi ducimus impedit voluptatibus sed, autem facere?</p>
                                <a href="#" class="link-icon orange">Leer más <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="blank-spacer padding-top20 padding-bottom20"></div>

            </div>--}} <!-- /Container -->

            <div class="fullsize fullsize-background"> <!-- Full Size -->

                <div class="container container-inner">
                    <div class="row">
                        <div class="col-md-6">
                            <img alt="" class="img-responsive animation fadeInLeft aligncenter" src="{{ asset('img/ciudadano.png') }}" >
                        </div>
                        <div class="col-md-6 animation fadeInRight">
                            <h2 class="title-medium title-color">LABORATORIOS CIUDADANOS</h2>
                            <p class="lead">Será un espacio para escuchar y participar sobre algunos de los temas que nos interesan como toluqueños</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="box-icon-wrapper">
                                        <h4 class="box-icon-title margin-top20 margin-bottom20">
                                            <span class="icon-wrapper icon-full-round bg-color-default"><i class="fa fa-university color-white"></i></span>Un nuevo paradigma para el emprendimiento en Toluca
                                        </h4>
                                        {{-- <p>Turpis venenatis at laoreet. Etiam lorem nulla fuviverra minim sed metus egestas sapien conseto actetuer.</p> --}}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="box-icon-wrapper">
                                        <h4 class="box-icon-title margin-top20 margin-bottom20">
                                            <span class="icon-wrapper icon-full-round bg-color-purple"><i class="fa fa-book color-white"></i></span>Las bibliotecas municipales como espacios comunitarios de aprendizaje 
                                        </h4>
                                        {{-- <p>Sed consectetur, tellus in tristique cursus, nibh magna malesuada tortor, sed adipiscing orci mauris in arcu.</p> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="box-icon-wrapper">
                                        <h4 class="box-icon-title margin-top20 margin-bottom20">
                                            <span class="icon-wrapper icon-full-round bg-color-orange"><i class="fa fa-globe color-white"></i></span>Retos y oportunidades de Toluca ante el cambio climático
                                        </h4>
                                        {{-- <p>Aenean at tortor pretium, tempor nibh nec, iaculis mauris. Pellentesque tincidunt ipsum eu nibh mollis. </p> --}}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="box-icon-wrapper">
                                        <h4 class="box-icon-title margin-top20 margin-bottom20">
                                            <span class="icon-wrapper icon-full-round bg-color-success"><i class="fa fa-users color-white"></i></span>Trascendencia en los servidores públicos
                                        </h4>
                                        {{-- <p> Fusce mattis ante sed quam tristique sollicitudin. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <p class="lead">Tú presencia es especial para lograr el objetivo de este espacio y producir conocimiento colectivo que contribuya al desarrollo de nuestro municipio.</p>
                            </div>
                        </div>
                    </div> <!-- End row-->
                    <div class="row">
                        <div class="col-md-12">
                            <blockquote>
                                <p class="text-center"><b>“No importa lo que nos separa, no importa lo que nos une; lo que verdaderamente importa es lo que podemos hacer juntos”.</b></p>
                                <footer class="pull-left"> Antonio Lafuente</footer>
                              </blockquote>
                        </div>
                    </div>
                </div>


            </div><!-- /Full Size -->


            <div class="fullsize padding-none"> <!-- Container Full Size -->

                <div class="parallax-wrapper parallax-background" data-stellar-background-ratio="0.6" >

                    <div class="parallax-wrapper padding-large">
                        <div class="container">

                            <div class="row">
                                <div class="col-md-12">

                                    <div class="panel panel-default">
                                        <div class="panel-body">

                                            <div class="row">

                                                <div class="col-md-12">

                                                    <div class="blank-spacer margin-top10 margin-bottom10"></div>

                                                    <h1 class="title-large text-center color-white animation bounceIn">LABORATORIOS CIUDADANOS</h1>
                                                    <p class="lead text-center color-white"><strong>TOLUCA</strong> Cupo limitado.
                                                        Confirma tu asistencia en eventbrite “Laboratorios Ciudadanos Toluca 2018”
                                                        </p><br>
                                                        <img src="{{ asset('img/evtlc.png') }}" alt="" class="center-block">
                                                    <div class="blank-spacer padding-small"></div>
                                                    <p class="text-center animation fadeInUp"><a target="_blank" class="btn btn-primary btn-lg" href="https://www.eventbrite.es/e/entradas-laboratorios-ciudadanos-toluca-2018-51992054635">Ver más <i class="fa fa-arrow-right fa-margin-left"></i></a></p>

                                                    <div class="blank-spacer margin-top10 margin-bottom10"></div>

                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                </div>

                            </div>


                        </div>
                    </div>
                </div>

            </div><!-- /Container Full Size-->


            <div class="container container-inner"> <!-- Container -->
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="heading-single text-center title-small title-color"><span>Atención Ciudadana</span></h2>
                        <h4 class="text-center margin-bottom20"><span>Participa actiavente, estamos para servirte</span></h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">

                        <div class="tabs">
                            <ul class="nav nav-tabs nav-justified">
                                <li class="active"><a data-toggle="tab" href="#webdesign"><span class="fa fa-desktop"></span> Transparencia</a></li>
                                <li><a data-toggle="tab" href="#jquery"><span class="fa fa-code-fork"></span> Infrestructura</a></li>
                                <li><a data-toggle="tab" href="#php"><span class="fa fa-code"></span> Trámites</a></li>
                                <li><a data-toggle="tab" href="#marketing"><span class="fa fa-bullhorn"></span> Servicios</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="webdesign" class="tab-pane fade active in">
                                    @php
                                       $transparencia = ForumController::showForum(1);
                                   @endphp
                                   <h3 class="text-center">Foros transparencia</h3>
                                 <div class="blank-spacer padding-bottom10 padding-top10"></div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul class="fa-ul list-divider">
                                   @foreach($transparencia as $t)
                                        <li><i class="fa-li fa fa-chevron-circle-right color-default"></i> <a href="{{ url('/detalles/'.$t['Id']) }}">{{ $t['Title'] }}</a></li>
                                   @endforeach
                                      </ul>
                                        </div>
                                   </div>
                                </div>
                                <div id="jquery" class="tab-pane fade">
                                    @php
                                       $infrae = ForumController::showForum(2);
                                   @endphp
                                </div>
                                <div id="php" class="tab-pane fade">
                                   @php
                                       $tramites = ForumController::showForum(3);
                                   @endphp
                                </div>
                                <div id="marketing" class="tab-pane fade">
                                    @php
                                       $servicios = ForumController::showForum(4);
                                   @endphp
                                    
                                    <div class="blank-spacer padding-bottom10 padding-top10"></div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul class="fa-ul list-divider">
                                                <li><i class="fa-li fa fa-chevron-circle-right color-default"></i>Cras sit amet rutrum ante</li>
                                                <li><i class="fa-li fa fa-chevron-circle-right color-default"></i>Aliquam placerat porta nunc, id interdum</li>
                                                <li><i class="fa-li fa fa-chevron-circle-right color-default"></i>Donec congue purus mauris</li>
                                                <li><i class="fa-li fa fa-chevron-circle-right color-default"></i>Integer et nisi dictum</li>

                                            </ul>
                                        </div>
                                      
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    {{-- <div class="col-md-4">
                        <div class="progress-bars margin-top30">
                            <h5 class="progress-title">Web Design <span class="pull-right">92%</span></h5>
                            <div class="progress progress-striped">
                                <div class="progress-bar animation fadeInLeftBig"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 92%">
                                    <span class="sr-only">92% Complete</span>
                                </div>
                            </div>
                            <h5 class="progress-title">jQuery <span class="pull-right">73%</span></h5>
                            <div class="progress progress-striped">
                                <div class="progress-bar animation fadeInLeftBig"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 73%">
                                    <span class="sr-only">73% Complete</span>
                                </div>
                            </div>
                            <h5 class="progress-title">PHP <span class="pull-right">85%</span></h5>
                            <div class="progress progress-striped">
                                <div class="progress-bar animation fadeInLeftBig"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                    <span class="sr-only">85% Complete</span>
                                </div>
                            </div>
                            <h5 class="progress-title">Marketing &amp; PR <span class="pull-right">64%</span></h5>
                            <div class="progress progress-striped">
                                <div class="progress-bar animation fadeInLeftBig"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 64%">
                                    <span class="sr-only">64% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>

            </div> <!-- /Container -->

            {{--<div class="fullsize fullsize-background padding-medium"> <!-- Full Size -->

                <div class="container"> <!-- Container -->

                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="heading-single text-center title-small title-color"><span>Últimas noticias</span></h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <p class="text-center">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas convallis lectus eget velit sagittis, sit amet convallis felis ultricies.</p>
                        </div>
                    </div>

                </div> <!-- /Container -->

                <!-- Carousel -->
                <div  class="caroursel-work">

                    <div class="list_carousel responsive" >
                        <div class="carousel-navigation">
                            <a id="carou-prev" class="prev" href="#"><i class="fa fa-angle-left"></i></a>
                            <a id="carou-next" class="next" href="#"><i class="fa fa-angle-right"></i></a>
                        </div>
                        <ul class="latest-work disable-select">
                            <li>
                                <div class="work-entry">
                                    <div class="work-entry-content">
                                        <div class="image-overlay">
                                            <img alt="" src="img/demo/demoimg/1.jpg" >
                                            <div class="overlay-fade">
                                                <a href="img/demo/demoimg/1.jpg" data-lightbox="image"><i class="icon-overlay fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                        <div class="work-entry-details">
                                            <h3>Nunc eu nunc eget</h3>
                                            <p>Vivamus in mollis arcu, ac egestas felis. Integer non lacus sodales dolor.</p>
                                            <a class="link-icon" href="#">Leer más <i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="work-entry">
                                    <div class="work-entry-content">
                                        <div class="image-overlay">
                                            <img alt="" src="img/demo/demoimg/2.jpg">
                                            <div class="overlay-hslide">
                                                <a href="http://www.youtube.com/watch?v=B4PcV06hz9g" data-lightbox="video"><i class="icon-overlay fa fa-link"></i></a>
                                            </div>
                                        </div>
                                        <h3>Donec egestas aliquet</h3>
                                        <p>Nulla eget suscipit odio. Curabitur eleifend mi eget tincidunt porta.</p>
                                        <a class="link-icon" href="#">Leer más <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="work-entry">
                                    <div class="work-entry-content">
                                        <div class="image-overlay zoom-image">
                                            <img alt="" src="img/demo/demoimg/3.jpg">
                                            <div class="overlay-zoom">
                                                <a href="https://vimeo.com/1084537" data-lightbox="video"><i class="icon-overlay fa fa-play"></i></a>
                                            </div>
                                        </div>
                                        <h3>Enim urna eget odio</h3>
                                        <p>Fusce facilisis tincidunt sem et dictum. In faucibus vulputate nibh.</p>
                                        <a class="link-icon" href="#">Leer más <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="work-entry">
                                    <div class="work-entry-content">
                                        <div class="image-overlay">
                                            <img alt="" src="img/demo/demoimg/4.jpg">
                                            <div class="overlay-vslide">
                                                <a href="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=venice&amp;sll=19.2918647,-99.6567499&amp;sspn=19.2918647,-99.6567499&amp;ie=UTF8&amp;hq=&amp;" data-lightbox="map"><i class="icon-overlay fa fa-link"></i></a>
                                            </div>
                                        </div>
                                        <h3>Suspen disse vulputate tristique</h3>
                                        <p>Vestibulum fermentum sapien pellentesque velit dictum malesuada.</p>
                                        <a class="link-icon" href="#">Leer más <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="work-entry">
                                    <div class="work-entry-content">
                                        <div class="image-overlay">
                                            <img alt="" src="img/demo/demoimg/5.jpg">
                                            <div class="overlay-fade">
                                                <a href="http://www.themeforest.net" data-lightbox="iframe"><i class="icon-overlay fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                        <h3>Tristique urna neconios urne feugia</h3>
                                        <p>Cras ligula dui, mattis in augue eget, mattis tristique dolor.</p>
                                        <a class="link-icon" href="#">Leer más <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="work-entry">
                                    <div class="work-entry-content">
                                        <div class="image-overlay">
                                            <img alt="" src="img/demo/demoimg/6.jpg">
                                            <div class="overlay-hslide">
                                                <a href="http://www.placehold.it/1000x1000" data-lightbox="image"><i class="icon-overlay fa fa-link"></i></a>
                                            </div>
                                        </div>
                                        <h3>Maecen nulla culis justo metisto</h3>
                                        <p>Etiam nec elementum diam. Donec pharetra felis lacus, eget molestie.</p>
                                        <a class="link-icon" href="#">Leer más <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="work-entry">
                                    <div class="work-entry-content">
                                        <div class="image-overlay zoom-image">
                                            <img alt="" src="img/demo/demoimg/7.jpg">
                                            <div class="overlay-zoom">
                                                <a class=""><i class="icon-overlay fa fa-play"></i></a>
                                            </div>
                                        </div>
                                        <h3>Vestibulis accumsan fanno</h3>
                                        <p>In interdum pharetra urna eget feugiat. Integer placerat imperdiet.</p>
                                        <a class="link-icon" href="#">Leer más <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="work-entry">
                                    <div class="work-entry-content">
                                        <div class="image-overlay">
                                            <img alt="" src="img/demo/demoimg/8.jpg">
                                            <div class="overlay-vslide">
                                                <a class=""><i class="icon-overlay fa fa-link"></i></a>
                                            </div>
                                        </div>
                                        <h3>Justo aliquam males uada</h3>
                                        <p>Mauris est mi, semper dapibus dictum sit amet, sodales ut dolor.</p>
                                        <a class="link-icon" href="#">Leer más <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="work-entry">
                                    <div class="work-entry-content">
                                        <div class="image-overlay">
                                            <img alt="" src="img/demo/demoimg/9.jpg">
                                            <div class="overlay-fade">
                                                <a class=""><i class="icon-overlay fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                        <h3>Ut sagittis – lorem ipsum sit amet</h3>
                                        <p>Nam facilisis at quam eget porta. Donec sollicitudin aliquet mauris.</p>
                                        <a class="link-icon" href="#">Leer más <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="work-entry">
                                    <div class="work-entry-content">
                                        <div class="image-overlay">
                                            <img alt="" src="img/demo/demoimg/10.jpg">
                                            <div class="overlay-hslide">
                                                <a class=""><i class="icon-overlay fa fa-link"></i></a>
                                            </div>
                                        </div>
                                        <h3>Etiam lorem nulla</h3>
                                        <p>Vestibulum fermentum sapien pellentesque velit dictum malesuada.</p>
                                        <a class="link-icon" href="#">Leer más <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="clearfix"></div>

                    </div>

                </div>
                <!-- /Carousel -->

            </div>--}} <!-- /Full Size -->


            {{-- <div class="container container-inner"><!-- Container --> --}}

                {{-- <div class="row">

                    <div class="col-md-8">
                        <h3>Our Happy Clients</h3>
                        <div class="clients-wrapper">

                            <ul class="grid-list">
                                <li>
                                    <a class="tooltip-on" title="WordPress" href="http://wordpress.org/">
                                        <img alt="" class="img-responsive animation bounceIn" src="img/demo/clients/1.png">
                                    </a>
                                </li>
                                <li>
                                    <a class="tooltip-on" title="Joomla" href="http://www.joomla.org/">
                                        <img alt="" class="img-responsive animation bounceIn" src="img/demo/clients/2.png">
                                    </a>
                                </li>
                                <li>
                                    <a class="tooltip-on" title="jQuery" href="http://jquery.com/">
                                        <img alt="" class="img-responsive animation bounceIn" src="img/demo/clients/3.png">
                                    </a>
                                </li>
                                <li>
                                    <a class="tooltip-on" title="Envato Marketplace" href="http://envatomarketplaces.com/">
                                        <img alt="" class="img-responsive animation bounceIn" src="img/demo/clients/4.png">
                                    </a>
                                </li>
                                <li>
                                    <a class="tooltip-on" title="Microlancer" href="http://www.microlancer.com/">
                                        <img alt="" class="img-responsive animation bounceIn" src="img/demo/clients/5.png">
                                    </a>
                                </li>
                                <li>
                                    <a class="tooltip-on" title="Tuts+" href="https://tutsplus.com/">
                                        <img alt="" class="img-responsive animation bounceIn" src="img/demo/clients/6.png">
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>

                    <div class="col-md-4">
                        <h3>Testimonios</h3>
                        <div class="list_carousel responsive" >
                            <div class="testimonials-wrapper">
                                <ul class="testimonials testimonials-slider disable-select">
                                    <li>
                                        <div class="testimonial-content">
                                            <p>Nullam gravida neque quis augue vestibulum euismod. Suspendisse risus tortor, varius ac malesuada in, mattis vitae mauris. Auctor sit amet feugiat eu &amp; viverra ac felis.</p>
                                        </div>
                                        <div class="testimonial-meta">
                                            <div class="testimonial-image"><img alt="" src="img/demo/testimonials/author1.jpg"></div>
                                            <div class="testimonial-author">Carolyne Dones</div>
                                            <div class="author-job">CEO - <span class="author-link"><a href="#">Artimest</a></span></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-content">
                                            <p>Aenean nibh erat, sagittis sit amet congue at, aliquam eu libero. Integer molestie, turpis vel ultrices facilisis, nisi mauris sollicitudin mauris, volutpat elementum enim urna eget odio.</p>
                                        </div>
                                        <div class="testimonial-meta">
                                            <div class="testimonial-image"><img alt="" src="img/demo/testimonials/author2.jpg"></div>
                                            <div class="testimonial-author">Lance Dorgan</div>
                                            <div class="author-job">CEO - <span class="author-link"><a href="#">SmartOn</a></span></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-content">
                                            <p>Nullam gravida neque quis augue vestibulum euismod. Suspendisse risus tortor, varius ac malesuada in, mattis vitae mauris. Auctor sit amet feugiat eu &amp; viverra ac felis.</p>
                                        </div>
                                        <div class="testimonial-meta">
                                            <div class="testimonial-author">Jhon Doe</div>
                                            <div class="author-job">CEO - <span class="author-link"><a href="#">SmartOn</a></span></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="pagination-carousel" id="testimonials_pag"></div>
                        </div>

                    </div>

                </div> --}}

            {{-- </div><!-- /Container --> --}}

        </div>
        <!-- /Main Container -->
        @include('partials.footer')
        @include('partials.scripts');
    </body>
</html>
