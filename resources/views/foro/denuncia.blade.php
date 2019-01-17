 @php

     use \App\Http\Controllers\DenunciaController;
     $denuncias = DenunciaController::viewDetail(Auth::id());
 @endphp
 <!-- timeline -->
        <ul class='timeline'>
            <li class="timeline-start">
                <div class="icon-wrapper icon-full-round">
                    <i class="fa fa-comments-o"></i>
                </div>
            </li>
            <li class="timeline-date"><span>2018</span></li>
            {{-- <li class='event offset-first'>
            <!-- blog post -->
                <div class="blog-post post-format-standard post-timeline animation fadeInLeft">
                    <div class="post-media">
                        <div class="image-overlay">
                            <img alt="" src="img/demo/blog/1-medium.jpg" >
                            <div class="overlay-fade">
                                <a href="blog-single.html" ><i class="icon-overlay fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="post-format"></div>
                    <div class="post-info">
                        <h3 class="post-title"><a href="#">This is a standard simple post</a></h3>
                        <ul class="list-inline post-meta-info">
                            <li class="meta-author"><a href="">webmastert</a></li>
                            <li class="meta-date"><a href="">28/12/2013</a></li>
                            <li class="meta-comments"><a href="">16 comments</a></li>
                        </ul>
                    </div>
                    <hr class="hr-circle-center">
                    <div class="post-content">
                        <p>Nulla sapien lorem, <strong>lobortis non dui vitae</strong>, gravida imperdiet velit. Vivamus nec bibendum odio. Smart at adipiscing leo, eget sodales purus. Nullam ante tellus, tempus vitae est ut, smart rhoncus ligula. Donec molestie arcu in nisl luctus volutpat. Nullam porttitor metus sapien, sit amet suscipit massa laoreet eu.</p>
                    </div>
                    <hr class="hr-circle-center">
                    <a class="link-icon read-more" href="#">Read More<i class="fa fa-arrow-circle-right"></i></a>
                </div>  
            <!-- /blog post-->  
            </li> --}}
            @foreach ($denuncias as $d)
                {{-- expr --}}
            
            <li class='event'>
            <!-- blog post -->
                <div class="blog-post post-format-link post-timeline animation fadeInLeft">
                    <div class="post-format"></div>
                    <div class="post-info">
                        <h3 class="post-title"><a href="{{ url('/detalleD/'.$d['a.Id']) }}">{{$d['a.Titulo']}}</a></h3>
                        <ul class="list-inline post-meta-info">
                            <li class="meta-author"><a href="">{{ $d['b.Name'] }}</a></li>
                            <li class="meta-date"><a href="">{{ $d['a.CreatedAt'] }}</a></li>
                        </ul>
                    </div>
                </div>
            <!-- /blog post-->  
            </li>
            @endforeach
        </ul>