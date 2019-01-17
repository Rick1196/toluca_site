{{-- {{ dd($foro) }} --}}
@extends('layouts.app')
@section('content')
<!-- Main Container -->
<div class="main-wrapper">

        <div class="container container-inner">    
           
            <div class="row">
    
                <div class="col-md-9">
                
                    <!-- blog post -->
                    <div class="blog-post post-format-standard">
                        <div class="post-media">
                            <div class="image-overlay">
                                <img alt="" src="img/demo/blog/2-large.jpg" >
                                <div class="overlay-fade">
                                    <a href="img/demo/blog/2-large.jpg" data-lightbox="image"><i class="icon-overlay fa fa-search-plus"></i></a>
                                </div>
                            </div>
                        </div>                  
                        <div class="post-format"></div>
                        <div class="post-info">
                            <h3 class="post-title"><a href="#">{{ $foro['a.Title'] }} </a></h3>
                            <ul class="list-inline post-meta-info">
                                <li class="meta-author"><a href="">{{ $foro['b.Name'] }}</a></li>
                                <li class="meta-date"><a href="">{{ $foro['a.CreatedAt'] }}</a></li>
                                {{-- <li class="meta-comments"><a href="">4 commentst</a></li> --}}
                            </ul>
                        </div> 
                        <div class="post-content">
                          
     
                            <blockquote>
                                  <p>{{ $foro['a.Description'] }}</p>
                            </blockquote>
    
    
                        </div>
                        
                        <hr/>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="tags">
                                    <a href="#">{{ $foro['c.Title'] }}</a> <a href="#">Toluca</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                            </div>
                        </div>
                        
                        <!-- author box -->
                        {{-- <div class="author-box">
                            <div class="panel">
                                <div class="panel-body">
                                    <div class="author-avatar">
                                           <img alt="" src="img/demo/testimonials/author1.jpg">
                                    </div>
                                    <div class="author-info">
                                        <h4 class="heading-single"><span>About the author</span></h4>
                                        <p>Duis rhoncus a tortor non interdum. Aliquam felis sapien, congue vitae elementum in, sodales ut lectus. Nunc faucibus tellus sit amet dolor mollis mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>                                
                                    </div>
                                    <div class="author-social">
                                        <ul class="list-inline">
                                            <li><a class="tooltip-on white" title="Facebook" href="http://www.facebook.com"><div class="icon-wrapper icon-full-radius bg-color-default"><i class="fa fa-facebook"></i></div></a></li>
                                            <li><a class="tooltip-on white" title="Twitter" href="http://www.twitter.com"><div class="icon-wrapper icon-full-radius bg-color-info"><i class="fa fa-twitter"></i></div></a></li>
                                            <li><a class="tooltip-on white" title="Google Plus" href="http://www.google.com"><div class="icon-wrapper icon-full-radius bg-color-danger"><i class="fa fa-google-plus"></i></div></a></li>
                                            <li><a class="tooltip-on white" title="Linkedin" href="http://www.linkedin.com"><div class="icon-wrapper icon-full-radius bg-color-default"><i class="fa fa-linkedin"></i></div></a></li>
                                            <li><a class="tooltip-on white" title="Pinterest" href="http://www.pinterest.com"><div class="icon-wrapper icon-full-radius bg-color-orange"><i class="fa fa-pinterest"></i></div></a></li>
                                        </ul>                                
                                    </div>                       	
                                </div>
                            </div>
                        </div>                    --}}
                        <!-- /author box -->
                        
                        <!-- related posts -->
                        {{-- <div class="related-posts">
                            <div class="related-icon"></div>
                            <h3 class="heading-single"><span>Post Relacionados</span></h3>   
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                       <div class="related-post-media"><img alt="" class="img-thumbnail" src="img/demo/blog/1-medium.jpg" width="550" height="403"></div>
                                    <div class="related-post-content">
                                        <div class="related-post-title"><a href="#">Duis mattis velit at justo dignissim, ac rutrum dolor mattis.</a></div>
                                        <div class="related-post-meta"><span class="meta-date">14 November 2013</span></div>
                                    </div>
                                </div>                        
                                <div class="col-md-4 col-sm-4">
                                       <div class="related-post-media"><img alt="" class="img-thumbnail" src="img/demo/blog/2-medium.jpg" width="550" height="403"></div>
                                    <div class="related-post-content">
                                        <div class="related-post-title"><a href="#">Vivamus non nunc sed diam auctor laoreet.</a></div>
                                        <div class="related-post-meta"><span class="meta-date">26 November 2013</span></div>
                                    </div>
                                </div> 
                                <div class="col-md-4 col-sm-4">
                                       <div class="related-post-media"><img alt="" class="img-thumbnail" src="img/demo/blog/3-medium.jpg" width="550" height="403"></div>
                                    <div class="related-post-content">
                                        <div class="related-post-title"><a href="#">Phasellus vitae erat nec magna varius iaculis.</a></div>
                                        <div class="related-post-meta"><span class="meta-date">12 December 2013</span></div>
                                    </div>
                                </div>                         
                            </div>                 
                        </div> --}}
                        <!-- /related posts -->
     
                         <!-- comments -->
                        <div class="comments-post">
                            <div class="comments-icon"></div>
                            <h3 class="heading-single"><span>Comentarios</span></h3>  
                            <div class="row">
                                <div class="col-md-12">
                                       {{--  <div id="disqus_thread"></div>
                                        <script>
                                        
                                        /**
                                        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                                        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                                        
                                        var disqus_config = function () {
                                        this.page.url = '{{ Request::url() }}';  // Replace PAGE_URL with your page's canonical URL variable
                                        this.page.identifier = '{{ $foro['a.Id'] }}'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                                        };
                                        
                                        (function() { // DON'T EDIT BELOW THIS LINE
                                        var d = document, s = d.createElement('script');
                                        s.src = 'https://sitetoluca.disqus.com/embed.js';
                                        s.setAttribute('data-timestamp', +new Date());
                                        (d.head || d.body).appendChild(s);
                                        })();
                                        </script>
                                        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript> --}}
                                    @if($numR<=0)
                                        <div class="alert alert-warning alert-dismissible" role="alert">
                                        <strong> <p class="text-center"> Aún no hay comentarios.</p></strong>
                                        </div>
                                    @else                        
                                    <div class="commnets-list">
                                        <ul>
                                            @foreach ($replies as $re)
                                                <li class="comment">
                                                <div class="user-avatar"><img alt="" src="img/demo/avatar.jpg" width="180" height="180"></div>
                                                <div class="comment-content">
                                                    <h4 class="comment-author">{{ $re['Nombre'].' '.$re['Apellidos'] }}</h4>
                                                    <p class="comment-date">{{ $re['CreatedAt'] }}</p>
                                                    <p>Consectetur adipisicing elit. In, placeat, quo ipsa corrupti reiciendis quisquam est eaque! Ipsam, aliquam, eligendi, tempora, fuga id aut ab ad ex mollitia asperiores cum.</p>
                                                </div>
                                                
                                              </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                </div> 
                            </div>              
                        </div>
                        <!-- /comments -->
                        
                         <!-- comments -->
                        <div class="leave-comment">
                            <div class="leave-comment-icon"></div>
                            <h3 class="heading-single"><span>Dejar comentario</span></h3> 
                            <div class="row">
                                <div class="col-md-12">
                            <!-- leave comments form -->
                                <form mehtod="POST" action="{{ route('addCommentP') }}" id="replyF">
                                @csrf
                                <div class="row">
                                    <input type="hidden" value="{{ request()->id }}" name="idf">
                                    @if (Auth::check())
                                        <input type="hidden" value="{{ Auth::id() }}" name="iduser">
                                    @else
                                    <input type="hidden" value="2" name="iduser">
                                    @endif
                                    <div class="col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <input id="inputName" class="form-control" name="name" type="text" placeholder="Nombre(s)" required></div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="form-group"><input id="inputWeb" class="form-control" name="apps" type="text" placeholder="Apellidos" required></div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="form-group"><input id="inputEmail" class="form-control" name="mail" type="email" placeholder="Correo elctrónico" required></div>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group"><textarea class="form-control" name="message" placeholder="Comentario(s)" rows="5" required></textarea></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-primary" id="addC" value="Enviar">
                                        {{-- <a class="btn btn-primary" id="addC">Enviar</a> --}}
                                    </div>
                                </div>
                                </form>
                            <!-- /leave comments form -->
                                </div>
                            </div>
                        </div>
                        <!-- /comments -->
                        
                    </div>
                    <!-- /blog post -->
                                    
                </div>
    
                <div class="col-md-3">
                    <div class="sidebar">
                    
                        <!-- sidebar widget -->
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
                        <div class="sidebar-widget animation fadeInUp">
                            <!-- tabs top -->
                            {{-- <div class="tabs sidebar-tabs">
                                <ul id="tab" class="nav nav-tabs">
                                    <li class="active"><a href="#popular" data-toggle="tab">Popular</a></li>
                                    <li><a href="#comments" data-toggle="tab">Comments</a></li>
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
                            </div> --}}
                            <!-- /tabs -->                        
                        </div>
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
    
                        <!-- sidebar widget -->
                        {{-- <div class="sidebar-widget animation fadeInUp">
                            <h4 class="widget-title"><span>Accordion Widget</span></h4>
                        <div class="panel-group accordion accordion-bordered" id="accordion3">
    
                            <div class="panel">
                                <div class="panel-heading">
                                    <p class="panel-title">
                                    <a class="accordion-toggle collapsed-icon" data-toggle="collapse" data-parent="#accordion3" href="#collapse12">
                                        <i class="fa fa-cloud"></i><small>Icon Accordion Item 1</small>
                                    </a>
                                    </p>
                                </div>
                                <div id="collapse12" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut commodo consequat.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <p class="panel-title">
                                    <a class="accordion-toggle collapsed collapsed-icon" data-toggle="collapse" data-parent="#accordion3" href="#collapse13">
                                        <i class="fa fa-lightbulb-o"></i><small>Icon Accordion Item 2</small>
                                    </a>
                                    </p>
                                </div>
                                <div id="collapse13" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut commodo consequat.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <p class="panel-title">
                                    <a class="accordion-toggle collapsed collapsed-icon" data-toggle="collapse" data-parent="#accordion3" href="#collapse14">
                                        <i class="fa fa-plane"></i><small>Icon Accordion Item 3</small>
                                    </a>
                                    </p>
                                </div>
                                <div id="collapse14" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut commodo consequat.</p>
                                    </div>
                                </div>
                            </div>
                                
                        </div>
                        </div> --}}
                        <!-- /sidebar widget --> 
                                       
                    </div>                    
                </div>
    
            </div>
    
        </div>
    
    </div>
    <!-- /Main Container -->
    {{-- @include('partials.footer') --}}
@endsection
@section('scriptcase')
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
@include('partials.jsFunctions')
<script>
        $('#addC').click(function(e){
        e.preventDefault();
        var form = document.querySelector('#replyF');
        var fD = new FormData(form);
        fD.append('_token', "{{ csrf_token() }}");
        var ajax = new XMLHttpRequest();
        ajax.open('POST',form.action,true);
        ajax.responseType = "json";
        ajax.addEventListener('load',function(e){
            console.log(this.response);
            var m = this.response.errorMsg;
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
