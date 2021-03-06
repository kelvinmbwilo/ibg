
<div class="panel panel-default" style="background-image: url({{asset("pattern/pattern8.png")}})">
  <div class="panel-body">
      <div class="panel-group" id="accordion">
          
          @foreach(Category::all() as $cat )
               <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $cat->id }}">
                      {{ $cat->name }} <i class='fa fa-chevron-circle-right pull-right'></i>
                    </a>
                  </h4>
                </div>
                 <div id="collapse{{$cat->id }}" class="panel-collapse collapse">
                    <div class="panel-body">
                      <ul class="nav nav-pills nav-stacked">
                      <li><a href="{{url("/?cat={$cat->id}")}}"><b>All</b> </a></li>
                      @foreach($cat->subcategory as $sub)
                        <li><a href="{{url("/?cat={$cat->id}&sub={$sub->id}")}}">{{ $sub->name }}<i class='fa fa-chevron-right pull-right'></i></a></li>
                      @endforeach
                    </ul>
                    </div>
                  </div>
                </div>
          @endforeach
  
</div>
      
  </div>
</div>

<div class="thumbnail">
    <div class="fb-like-box" data-href="https://www.facebook.com/pages/Tomcat-Fashions/1445389765673934?ref=hl" data-width="250" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="false"></div>
</div>

<?php 
$prod = Post::orderBy('created_at','desc')->first();
?>
@if($prod)
<div class="thumbnail" style="background-image: url(pattern/pattern8.png)">
    <h4 class='text-muted text-center'>Latest Product </h4>
      {{ HTML::image("uploads/rooms/{$prod->img1}","",array("class"=>"img-responsive img-rounded","style"=>"height:250px;padding-bottom:15px")) }}
       <div class="caption">
        <h3>{{ $po->name }}</h3>
        <p>{{ $po->discr }}</p>
        <p class="text-center"><button class="btn btn-primary btn-xs">{{ $po->price }}</button></p>
        <div class="fb-share-button pull-left" data-href="http://developers.facebook.com/docs/plugins/" data-type="button_count"></div>&nbsp;&nbsp;&nbsp;&nbsp;
   
   <a href="https://twitter.com/share" class="twitter-share-button " data-url="http://fsfsafs">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
      
      </div>
    </div>
@endif

