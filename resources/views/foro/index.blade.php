{{-- {{ dd($forums) }} --}}

@extends('layouts.app')
@section('content')
<h3 class="text-center">Bienvenid@ al Foro de Atención Ciudadana</h3>    

        <!-- Main Container -->
<div class="main-wrapper">

        <div class="container container-inner">    
           
            <div class="row">
    
                <div class="col-md-9">
                @if(Auth::id()==1)
                    <!-- medium blog post -->
                    @foreach ($forums as $i)
                    <div class="blog-post post-format-standard medium-post">
                    
                        <div class="row">
                            
                            <div class="col-md-4 col-sm-4">
                                <div class="post-media">
                                    <div class="image-overlay">
                                        <img alt="" src="img/demo/blog/1-medium.jpg" >
                                        <div class="overlay-fade">
                                            <a href="blog-single.html" ><i class="icon-overlay fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>                        
                            </div>
                            
                            <div class="col-md-8 col-sm-8">
                                <div class="post-format"></div>
                                <div class="post-info">
                                    <h3 class="post-title"><a href="#">{{ $i['a.Title'] }}</a></h3>
                                    <ul class="list-inline post-meta-info">
                                        <li class="meta-author"><a href="">{{ $i['b.Name'] }}</a></li>
                                        <li class="meta-date"><a href="">{{ $i['a.CreatedAt'] }}</a></li>
                                        {{-- <li class="meta-comments"><a href="">16 comentarios</a></li> --}}
                                        <li class="meta-tags"><a href="">{{ $i['c.Title'] }}</a>, <a href="">toluca</a></li>
                                    </ul>
                                </div>
                                <div class="post-content">
                                    <p>
                                        {{ $i['a.Description'] }}
                                    </p>
                                </div>                    		                       
                            </div>                  
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <a class="btn btn-default btn-sm read-more pull-right" href='{{ url('/detalle/'.$i['a.Id']) }}'>Leer más<i class="fa fa-margin-left fa-arrow-circle-right"></i></a>
                            </div>                    
                        </div>
                    
                    </div>
                    @endforeach
                    <!-- /medium blog post -->
    
                    
        
                    <!-- pagination -->
                    <div class="text-center">
                        <ul class="pagination">
                            <li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li  class="disabled"><a href="#">...</a></li>
                            <li><a href="#">14</a></li>
                            <li><a href="#">15</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul> 
                    </div>           
                    <!-- /pagination -->
                       @else
                       @include('foro.denuncia')
                @endif             
                </div>
                
                <div class="col-md-3">
                    <div class="sidebar">
                    
                        <!-- sidebar widget -->
                        {{-- <button class="btn btn-success center-block">NUEVA ENTRADA</button> --}}
                        <!-- Button trigger modal -->
@if(Auth::id()==1)
<button type="button" href="#login" data-toggle="modal" class="toggle-link btn btn-primary center-block">
    Nueva Foro
</button>
@else
<button type="button" href="#login2" data-toggle="modal" class="toggle-link btn btn-primary center-block">
    Nueva entrada
</button>
@endif
<hr>

                         
                        {{-- <div class="sidebar-widget animation fadeInUp">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
                                </span>
                                <input class="form-control" type="text">
                            </div>
                        </div> --}}
                        <!-- /sidebar widget -->  
                         
                        <!-- sidebar widget -->
                        <div class="sidebar-widget animation fadeInUp">
                            <h4 class="widget-title"><span>Temas</span></h4>
                            <ul class="fa-ul list-divider">
                                <li><a href=""><i class="fa-li fa fa-chevron-circle-right"></i>Transparencia <span>(6)</span></a></li>
                                <li><a href=""><i class="fa-li fa fa-chevron-circle-right"></i>Tramites <span>(24)</span></a></li>
                                <li><a href=""><i class="fa-li fa fa-chevron-circle-right"></i>Convocatorias <span>(17)</span></a></li>
                                <li><a href=""><i class="fa-li fa fa-chevron-circle-right"></i>Servicios <span>(3)</span></a></li>                            					
                            </ul>                        
                        </div>
                        <!-- /sidebar widget --> 
    
                        <!-- sidebar widget -->
                       {{--  <div class="sidebar-widget animation fadeInUp">
                            <!-- tabs top -->
                            <div class="tabs sidebar-tabs">
                                <ul id="tab" class="nav nav-tabs">
                                    <li class="active"><a href="#popular" data-toggle="tab">Popular</a></li>
                                    <li><a href="#comments" data-toggle="tab">Comentarios</a></li>
                                </ul>
                                <div id="tab-content" class="tab-content">
                                    <div id="popular" class="tab-pane active in">
                                        <ul class="recent-posts">
                                            <li class="clearfix">
                                                <div class="recent-post-image">
                                                       <img alt="" src="img/demo/portfolio/08.jpg" width="400" height="300">
                                                </div>
                                                <div class="recent-post-content">
                                                    <div class="recent-post-title">
                                                        <a href="#">This is a standard post</a>
                                                    </div>
                                                    <div class="recent-post-meta">
                                                           <span class="meta-date">1 December 2013</span>
                                                    </div>                                                
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="recent-post-image">
                                                       <img alt="" src="img/demo/portfolio/06.jpg" width="400" height="300">
                                                </div>
                                                <div class="recent-post-content">
                                                    <div class="recent-post-title">
                                                        <a href="#">Using video in a blog article it's quite easy</a>
                                                    </div>
                                                    <div class="recent-post-meta">
                                                           <span class="meta-date">23 November 2013</span>
                                                    </div>                                                
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="recent-post-image">
                                                       <img alt="" src="img/demo/portfolio/10.jpg" width="400" height="300">
                                                </div>
                                                <div class="recent-post-content">
                                                    <div class="recent-post-title">
                                                        <a href="#">Gallery media used in the preview of the article.</a>
                                                    </div>
                                                    <div class="recent-post-meta">
                                                           <span class="meta-date">15 September 2013</span>
                                                    </div>                                                
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="comments" class="tab-pane">
                                        <ul class="recent-posts">
                                            <li class="clearfix">
                                                <div class="recent-post-image">
                                                       <img alt="" src="img/demo/team/team-member1-small.jpg" width="280" height="200">
                                                </div>
                                                <div class="recent-post-content">                                            	
                                                    <a class="meta-author" href="#">Brian Iorgsten</a> on                                          	
                                                    <div class="recent-post-meta">
                                                           <a href="#">Simple article with single image media.</a>
                                                    </div>                                                
                                                </div>
                                          </li>
                                            <li class="clearfix">
                                                <div class="recent-post-image">
                                                       <img alt="" src="img/demo/team/team-member2-small.jpg" width="280" height="200">
                                                </div>
                                                <div class="recent-post-content">                                            	
                                                    <a class="meta-author" href="#">Bruce Dingeling</a> on                                          	
                                                    <div class="recent-post-meta">
                                                           <a href="#">Why not use quote in article preview?</a>
                                                    </div>                                                
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="recent-post-image">
                                                       <img alt="" src="img/demo/team/team-member3-small.jpg" width="280" height="200">
                                                </div>
                                                <div class="recent-post-content">                                            	
                                                    <a class="meta-author" href="#">Carolyne Dones</a> on                                          	
                                                    <div class="recent-post-meta">
                                                           <a href="#">Gallery media used in the preview of the article.</a>
                                                    </div>                                                
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /tabs -->                        
                        </div> --}}
                        <!-- /sidebar widget --> 
    
                        <!-- sidebar widget -->
                        {{-- <div class="sidebar-widget animation fadeInUp">
                            <h4 class="widget-title"><span>Twitter Widget</span></h4>
                            <div class="recent-tweets">
                                <div class="tweet"></div>                  
                            </div>
                        </div> --}}
                        <!-- /sidebar widget --> 
    
                        <!-- sidebar widget -->
                        {{-- <div class="sidebar-widget animation fadeInUp">
                            <h4 class="widget-title"><span>Tags</span></h4>
                            <div class="tags">
                                <a href="#">Business</a> <a href="#">Clean</a> <a href="#">Gallery</a> <a href="#">HTML5</a> <a href="#">CSS3</a> <a href="#">dolor</a> <a href="#">Corporate</a> <a href="#">Responsive</a> <a href="#">jQuery</a> <a href="#">Portfolio</a> <a href="#">2013</a> <a href="#">Retina</a> <a href="#">Animation</a>
                            </div>
                        </div> --}}
                        <!-- /sidebar widget --> 
    
                        <!-- sidebar widget -->
                        {{-- <div class="sidebar-widget animation fadeInUp">
                            <h4 class="widget-title"><span>Archives</span></h4>
                            <ul class="fa-ul list-divider">
                                <li><a href=""><i class="fa-li fa fa-chevron-circle-right"></i>September 2013</a></li>
                                <li><a href=""><i class="fa-li fa fa-chevron-circle-right"></i>October 2013</a></li>
                                <li><a href=""><i class="fa-li fa fa-chevron-circle-right"></i>November 2013</a></li>
                                <li><a href=""><i class="fa-li fa fa-chevron-circle-right"></i>December 2013</a></li>                              					
                            </ul>
                        </div> --}}
                        <!-- /sidebar widget --> 
    
                                       
                    </div>                    
                </div>
    
            </div>
    
        </div>
    
    </div>
     <!-- /Main Container -->
     @include('foro.modalAlta')
    {{-- <div id="map-canvas"></div> --}}
    
@endsection
@section('scriptcase')
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
@include('partials.jsFunctions')
<script>
        $('#nclic').click(function(e){
        e.preventDefault();
        var form = document.querySelector('#newForo');
        var fD = new FormData(form);
        fD.append('_token', "{{ csrf_token() }}");
        var ajax = new XMLHttpRequest();
        ajax.open('POST',"{{ url('altaForo') }}",true);
        ajax.responseType = "json";
        ajax.addEventListener('load',function(e){
            console.log(e);
            var m = this.response.errorMsg ;
            if(this.response.success){
                alertaSuccess('Éxito!', m);
                setTimeout(function(){
                    window.location.reload(1);
                }, 5000);
            }else{
                alertaError('Error', m);
            }
        },false);
        ajax.send(fD);
        return false;
    });
        $('#nclic2').click(function(e){
        e.preventDefault();
        var form = document.querySelector('#newDenuncia');
        var fD = new FormData(form);
        fD.append('_token', "{{ csrf_token() }}");
        var ajax = new XMLHttpRequest();
        ajax.open('POST',form.action,true);
        ajax.responseType = "json";
        ajax.addEventListener('load',function(e){
            console.log(e);
            var m = this.response.errorMsg ;
            if(this.response.success){
                alertaSuccess('Éxito!', m);
                setTimeout(function(){
                    window.location.reload(1);
                }, 5000);
            }else{
                alertaError('Error', m);
            }
        },false);
        ajax.send(fD);
        return false;
    });
      </script>
@endsection