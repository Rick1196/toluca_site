<!-- Page Main Wrapper -->
        {{-- <div class="page-wrapper">

            <!-- Slide Top Panel Container -->
            <div class="slide-pannel-wrapper">
                <div id="slide-panel">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <div class="blank-spacer padding-xsmall"></div>
                                <h3 class="color-white">Nice Sliding Panel</h3>
                                <img alt="" class="img-rounded alignleft" src="img/theme/who-thumb.jpg"><p><strong>Sliding Panel</strong> can be filled with any html content. The Boostrap Grid can be used to create the necesary columns and rows. It supports any element provided in this theme starting from typography elements, videos and images gallery and go all the way to complex elements.</p>

                                <p class="lead margin-top20">We hope you enjoy it.</p>
                                <div class="btn-group">
                                    <a class="btn btn-primary btn-border">Leer más<i class="fa fa-share fa-margin-left"></i></a>
                                    <a class="btn btn-default btn-border">Order SmartOn<i class="fa fa-shopping-cart fa-margin-left"></i></a>
                                </div>
                                <div class="blank-spacer padding-xsmall"></div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="blank-spacer padding-xsmall"></div>
                                <h3 class="color-white">Contact Us</h3>
                                <form class="clean-form dark-form" role="form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputName">Name</label>
                                                <input type="email" class="form-control" id="exampleInputName" placeholder="Enter your name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputEmail">Email</label>
                                                <input type="password" class="form-control" id="exampleInputEmail" placeholder="Enter email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea class="form-control" rows="4" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-default btn-border">Sign in</button>
                                </form>
                                <div class="blank-spacer padding-xsmall"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-btn-wrapper"><a href="#" class="slide-panel-btn"></a></div>
            </div>
        </div><!-- /Slide Top Panel Container --> --}}
        <!-- Header Container -->
        <div class="header-wrapper">

                <!-- Header Top Container -->
                <div class="header-top">
    
                    <div class="container"> <!-- Container -->
    
                        <div class="row"><!-- Row-->
    
                            <div class="col-md-6">
    
                                <div class="top-menu-left"><!-- Top Menu Left -->
                                    <ul class="top-social list-inline navbar-nav"> 
                                         <!-- Authentication Links -->
                                        @guest
                                         <li class="nav-item">
                                             <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}&nbsp;&nbsp;</a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                         </li>
                                        @else
                                         <li class="nav-item dropdown">
                                             <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                 {{ Auth::user()->name }} <span class="caret"></span>
                                             </a>
                               
                                             <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                 <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                  document.getElementById('logout-form').submit();">
                                                     {{ __('Cerrar sesión') }}
                                                 </a>
                               
                                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                     @csrf
                                                 </form>
                                             </div>
                                         </li>
                                         <li>
                                            <div class="top-login">                           
                                                @include('foro.modalAlta')
                                                @include('foro.modalAltaDenuncia')
                                            </div> 
                                        </li>
                
                                        @endguest
                                        
                                    </ul>
                                </div><!-- /Top Menu Left -->
    
                            </div>
    
                            <div class="col-md-6">
    
                                <div class="top-menu-right"><!-- Top Menu right -->
    
                                    <ul class="top-social list-inline">
                                        <li><a class="tooltip-on" title="Facebook" href="http://www.facebook.com"><div class="icon-wrapper icon-border-round"><i class="fab fa-facebook-f"></i></div></a></li>
                                        <li><a class="tooltip-on" title="Twitter" href="http://www.twitter.com"><div class="icon-wrapper icon-border-round"><i class="fab fa-twitter"></i></div></a></li>
                                       
                                    </ul>
    
                                </div><!-- /Top Menu right -->
    
                            </div>
    
                        </div> <!-- /Row-->
    
                    </div> <!-- /Container -->
    
                </div>
                <!-- /Header Top Container -->
    
                <!-- Header Middle Container -->
                <div class="header-middle">
    
                    <div class="container"> <!-- Container -->
    
                        <div class="row"><!-- Row-->
    
                            <div class="col-md-8">
    
                                <div class="logo">
                                    <a href="index.html"><img src="{{ asset('img/jrl.png') }}" width="150" height="68" alt="SmartON Logo"></a>
                                </div>
    
                            </div>
    
                            <div class="col-md-4  hidden-xs">
    
                                <div class="contact-info">
                                    <ul class="fa-ul list-inline">
                                        <li><i class="fa-li fa fa-map-marker"></i>Palacio Municipal, Toluca</li>
                                        <li><i class="fa-li fa fa-phone"></i>(722) 2761900</li>
                                        <li><i class="fa-li fa fa-envelope"></i>atencion@toluca.com</li>
                                    </ul>
                                </div>
    
                            </div>
    
                        </div><!-- /Row-->
    
                    </div> <!-- /Container -->
    
                </div>
                <!-- /Header Middle Container -->
<!-- Header Bottom Container -->
<div class="header-bottom" >

        <div class="container"> <!-- Container -->

            <div class="row"><!-- Row-->

                <div class="col-md-12">

                    <!-- Navigation -->
                    <div class="main-navigation">
                        <a id="menu-button"></a>
                        <ul id="main-menu" class="sm sm-default">
                            <li><a class="disabled has-submenu" href="index.html">Inicio</a>
                                
                            </li>
                            <li ><a class="disabled has-submenu">H. Ayuntamiento</a>
                               
                            </li>
                            <li><a class="disabled has-submenu">Prensa</a>
                               
                            </li>
                            <li><a class="disabled has-submenu">Atención Ciudadana</a>
                               
                            </li>
                            <li><a class="disabled has-submenu">Transparencia</a>
                               
                            </li>
                            <li><a class="" href="http://agenda-tol.siepg.com" target="_blank">Agenda</a>
                                {{-- <ul >
                                    <li><a href="index-shop.html">Home Shop Page</a></li>
                                    <li><a href="shop-default.html">Interior Shop Page</a></li>
                                    <li><a href="shop-item.html">Product Page</a></li>
                                    <li><a href="shop-checkout.html">Checkout</a></li>
                                </ul> --}}
                            </li>
                            {{--
                            <li><a class="disabled has-submenu">Blog</a>
                                <ul >
                                    <li><a class="disabled has-submenu">Blog Image</a>
                                        <ul>
                                            <li><a href="blog-image-big.html">Blog Big Image</a></li>
                                            <li><a href="blog-image-medium.html">Blog Medium Image</a></li>
                                            <li><a href="blog-image-small.html">Blog Small Image</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="disabled has-submenu">Blog Double Sidebar</a>
                                        <ul>
                                            <li><a href="blog-double-left.html">Blog Double Left</a></li>
                                            <li><a href="blog-double-right.html">Blog Double Right</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog-grid.html">Blog Grid Layout</a></li>
                                    <li><a href="blog-timeline.html">Blog Timeline Layout</a></li>
                                    <li><a class="disabled has-submenu">Blog Single Article</a>
                                        <ul>
                                            <li><a href="blog-single.html">Blog Single Article Sidebar</a></li>
                                            <li><a href="blog-single-nosidebar.html">Blog Single Article No Sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> --}}
                            <li><a class="disabled has-submenu">Contacto</a>
                                
                            </li>
                        </ul>
                    </div>
                </div>