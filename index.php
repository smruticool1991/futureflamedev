<?php include("include/header.php");?>

<!--------------auto popup start------------------>

<style type="text/css">
#overlay {
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-color: #000;
filter:alpha(opacity=70);
-moz-opacity:0.7;
-khtml-opacity: 0.7;
opacity: 0.7;
z-index: 999;
display: none;
}
.cnt223 a{
text-decoration: none;
}
.popup{
width: 100%;
margin: 0 auto;
display: none;
position: fixed;
z-index: 1000;
}
.cnt223{
min-width: 600px;
width: 70%;
min-height: 60px;
margin: 5px auto;
background: #f3f3f3;
position: relative;
z-index: 103;
padding: 2px 2px;
border-radius: 5px;
box-shadow: 0 2px 5px #000;
}
.cnt223 p{
clear: both;
    color: #555555;
    /* text-align: justify; */
    font-size: 20px;
    font-family: sans-serif;
}
.cnt223 p a{
color: red;
font-weight: bold;
}
.cnt223 .x{
float: right;
height: 35px;
left: 22px;
position: relative;
top: -25px;
width: 34px;
}
.cnt223 .x:hover{
cursor: pointer;
}
.main-pop-up{
    position: fixed;
    top: 0px;
    width: 100%;
    height: 100vh;
    z-index: 1999;
    background-color: rgba(0,0,0,0.5);
}
.pop-img{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    max-width: 50vw;
}
.pop-img::after{
    content: 'hello';
    z-index: 9999;
}
@media only screen and (max-width: 600px){
  .pop-img{
    max-width: 80vw;
}  
}
</style>
<!--
<script type='text/javascript'>
$(function(){
var overlay = $('<div id="overlay"></div>');
overlay.show();
overlay.appendTo(document.body);
$('.popup').show();
$('.close').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});


 

$('.x').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});
});
</script>
<div class='popup'>
<div class='cnt223'>
<a style="color:red; opacity:1; padding:10px;" href='' class='close'>Close</a>
<img src="assets/img/FUTURE FLAME.jpg" />


</div>
</div>-->
  
<!-----------------auto popup end------------------>
<!--<div class="main-pop-up" id="pop">-->
<!--    <div style="">-->
<!--   <a href="#"><i style="position: absolute; z-index: 99999; top: 10px; right: 10px; transform: rotate(45deg);" class="fa fa-plus-circle fa-3x"></i></a>-->
<!--    <img src="images/puja-min.jpg" class="pop-img" />-->
<!--    </div>-->
<!--</div>-->
    
    <div class="main-content">
      <div id="sliderpro1" class="slider-pro main-slider">
        <div class="sp-slides">
          <div class="sp-slide"> <img class="sp-image" src="assets/img/3.jpg"
					data-src="assets/img/3.jpg"
					data-retina="assets/img/3.jpg" alt="img"/>
            <div class="item-wrap sp-layer  sp-padding" data-horizontal="700" data-vertical="1"
					data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
              <div class="main-slider__inner text-center">
                <div class="main-slider__title" >BEST ONLINE LEARNING</div>
                <div class="main-slider__subtitle ">THE EASIER WAY</div>
                <a class="main-slider__btn btn btn-warning btn-effect" href="#">START A COURSE</a> </div>
            </div>
          </div>
          <div class="sp-slide"> <img class="sp-image" src="assets/img/1.jpg"
					data-src="assets/img/1.jpg"
					data-retina="assets/img/1.jpg" alt="img"/>
            <div class="item-wrap sp-layer  sp-padding" data-horizontal="200" data-vertical="30"
					data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
              <div class="main-slider__inner">
                <div class="main-slider__title" >BEST ONLINE LEARNING</div>
                <div class="main-slider__subtitle ">THE EASIER WAY</div>
                <a class="main-slider__btn btn btn-warning btn-effect" href="#">START A COURSE</a> </div>
            </div>
          </div>
          <div class="sp-slide"> <img class="sp-image" src="assets/img/2.jpg"
					data-src="assets/img/2.jpg"
					data-retina="assets/img/2.jpg" alt="img"/>
            <div class="item-wrap sp-layer  sp-padding" data-horizontal="200" data-vertical="30"
					data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
              <div class="main-slider__inner">
                <div class="main-slider__title" >BEST ONLINE LEARNING</div>
                <div class="main-slider__subtitle ">THE EASIER WAY</div>
                <a class="main-slider__btn btn btn-warning btn-effect" href="#">START A COURSE</a> </div>
            </div>
          </div>
          
          <div class="sp-slide"> <img class="sp-image" src="assets/img/4.jpg"
					data-src="assets/img/4.jpg"
					data-retina="assets/img/4.jpg" alt="img"/>
            <div class="item-wrap sp-layer  sp-padding" data-horizontal="200" data-vertical="30"
					data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
              
            </div>
          </div>
          
          <div class="sp-slide"> <img class="sp-image" src="assets/img/5.jpg"
					data-src="assets/img/5.jpg"
					data-retina="assets/img/5.jpg" alt="img"/>
            <div class="item-wrap sp-layer  sp-padding" data-horizontal="200" data-vertical="30"
					data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
              
            </div>
          </div>
          
          <div class="sp-slide"> <img class="sp-image" src="assets/img/6.jpg"
					data-src="assets/img/6.jpg"
					data-retina="assets/img/6.jpg" alt="img"/>
            <div class="item-wrap sp-layer  sp-padding" data-horizontal="200" data-vertical="30"
					data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
              
            </div>
          </div>
          
          <div class="sp-slide"> <img class="sp-image" src="assets/img/7.jpg"
					data-src="assets/img/7.jpg"
					data-retina="assets/img/7.jpg" alt="img"/>
            <div class="item-wrap sp-layer  sp-padding" data-horizontal="200" data-vertical="30"
					data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
              
            </div>
          </div>
          
          
          
          
          
          
        </div>
      </div>
      
      <!-- end main-slider -->
      
      <div class="section_mod-a">
        <div class="container">
          <div class="section_mod-a__inner">
            <div class="row">
              <div class="col-md-8">
                <section class="section-advantages wow bounceInLeft" data-wow-duration="2s">
                  <h2 class="ui-title-block ui-title-block_mod-a">We Bring You The World’s Best Courses From All The Top Publishers, Absolutely FREE!</h2>
                  <div class="ui-subtitle-block ui-subtitle-block_mod-a">Having over thousand students worldwide and more than 500 online courses available.</div>
                  <ul class="advantages advantages_mod-a list-unstyled">
                    <li class="advantages__item"> <span class="advantages__icon"><i class="icon stroke icon-Cup"></i></span>
                      <div class="advantages__inner">
                        <h3 class="ui-title-inner decor decor_mod-a">HIGHEST RATED</h3>
                        <div class="advantages__info">
                          <p style="text-align: justify;">FUTURE FLAME is the most popular institute among the new generation student's 
for it's course curriculum and unique training methods.As somany student's passing out 
our certified course and successfully build a professional carrier is a credit'no doubt.</p>
                        </div>
                      </div>
                    </li>
                    <li class="advantages__item"> <span class="advantages__icon"><i class="icon stroke icon-DesktopMonitor"></i></span>
                      <div class="advantages__inner">
                        <h3 class="ui-title-inner decor decor_mod-a">LAB $ WI-FI</h3>
                        <div class="advantages__info">
                          <p style="text-align: justify;">With top class infrastructure and the entire premises is wi-fi enable.Student
gets extra lab and practical assistance at any given working hour.</p>
                        </div>
                      </div>
                    </li>
                    <li class="advantages__item"> <span class="advantages__icon"><i class="icon stroke icon-WorldGlobe"></i></span>
                      <div class="advantages__inner">
                        <h3 class="ui-title-inner decor decor_mod-a">100% PLACEMENT</h3>
                        <div class="advantages__info">
                          <p style="text-align: justify;">Placement is our strongest point.We have in close aliance with more than 60 IT
companies for direct recruitment.Till now we have been achieving 100% placement till date.We have
a placement cell any student enroling with us,becomes a permanent candidate for lifelong and can
appear for interview anytime he wants.
</p>
                        </div>
                      </div>
                    </li>
                    <li class="advantages__item"> <span class="advantages__icon"><i class="icon stroke icon-Users"></i></span>
                      <div class="advantages__inner">
                        <h3 class="ui-title-inner decor decor_mod-a">SKILLED FACULTY</h3>
                        <div class="advantages__info">
                          <p style="text-align: justify;">No doubt our faculties are the best in the industry.We train our student's in live
platform so that they get the best practical exposure to face any competition in the IT world.</p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </section>
                <!-- end section-advantages --> 
              </div>
              <!-- end col -->
              <div class="col-md-4">
                <section class="find-course find-course_mod-a wow bounceInRight" data-wow-duration="2s">
                  <h2 style="text-align:center" class="find-course__title"><i class="icon stroke icon-Search"></i>REGISTER FOR 
                 <span style="font-family: Comic Sans MS;/* text-shadow: 7px 3px 21px black; */color: #f0ff07;font-size: 20px;">FREE DEMO CLASS</span> 
                  
                  NOW !</h2>
                  
                  
                  <form class="find-course__form" action="http://templines.rocks/html/academica/get">
                    <div class="form-group">
                      <input class="form-control" type="text" placeholder="Name">
                      <input class="form-control" type="text" placeholder="Email Id">
                      <input class="form-control" type="text" placeholder="Number">
                      <input class="form-control" type="text" placeholder="Course">
                     <!-- <textarea class="form-control" type="text" placeholder="Message"></textarea>-->
                      <!-- end jelect -->
                      <!--<div class="jelect" >
                        <input value="0" type="text" class="jelect-input">
                        <div  class="jelect-current">Select A Level</div>
                        <ul class="jelect-options">
                          <li  class="jelect-option jelect-option_state_active">Level 1</li>
                          <li  class="jelect-option">Level 2</li>
                          <li  class="jelect-option">Level 3</li>
                        </ul>
                      </div>-->
                      <!-- end jelect -->
                      <!--<div class="jelect" >
                        <input value="0" type="text" class="jelect-input">
                        <div tabindex="0" role="button" class="jelect-current">Course Length</div>
                        <ul class="jelect-options">
                          <li  class="jelect-option jelect-option_state_active">Length 1</li>
                          <li  class="jelect-option">Length 2</li>
                          <li  class="jelect-option">Length 3</li>
                        </ul>
                      </div>-->
                      <!-- end jelect --> 
                    </div>
                    <!-- end form-group -->
                    <div class="find-course__wrap-btn">
                      <button class="btn btn-effect btn-info">SUBMIT</button>
                    </div>
                  </form>
                </section>
                <!-- end find-course --> 
              </div>
              <!-- end col --> 
            </div>
            <!-- end row --> 
          </div>
          <!-- end section_mod-a__inner --> 
        </div>
        <!-- end container --> 
      </div>
      <!-- end section_mod-a -->
      
      <section class="section-default">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="wrap-title">
                <h2 class="ui-title-block">Most <strong>Popular Courses</strong></h2>
                <div class="ui-subtitle-block ui-subtitle-block_mod-b">Having over thousand students worldwide and more than 500 online courses available.</div>
              </div>
              <div class="posts-wrap">
             
             
             <article class="post post_mod-a clearfix wow zoomIn" data-wow-duration="2s" data-wow-delay=".5s">
                  <div class="entry-media">
                    <div class="entry-thumbnail"> <a href="javascript:void(0);" ><img class="img-responsive" src="assets/img/1post.jpg" width="250" height="250" alt="Foto"/></a> </div>
                    <div class="entry-hover">
                      <div class="box-comments"> <a href="javascript:void(0);"><i class="icon stroke icon-Message"></i>25</a> <a href="javascript:void(0);"><i class="icon stroke icon-User"></i>65</a> </div>
                      <a href="course.php" id="php" class="post-btn btn btn-primary btn-effect">READ MORE</a> </div>
                  </div>
                  <div class="entry-main">
                    
                    <h3 class="entry-title ui-title-inner decor decor_mod-b"><a href="javascript:void(0);">PHP</a></h3>
                    <div class="entry-content">
                      <p>PHP is a powerful programming language for writing server-side web applications.</p>
                    </div>
                  </div>
                </article>
                
                
             
             
             
             
             
             
             
             
                <!-- end post -->
                <article class="post post_mod-a clearfix wow zoomIn" data-wow-duration="2s" data-wow-delay=".5s">
                  <div class="entry-media">
                    <div class="entry-thumbnail"> <a href="javascript:void(0);" ><img class="img-responsive" src="assets/img/2post.jpg" width="250" height="250" alt="Foto"/></a> </div>
                    <div class="entry-hover">
                      <div class="box-comments"> <a href="javascript:void(0);"><i class="icon stroke icon-Message"></i>25</a> <a href="javascript:void(0);"><i class="icon stroke icon-User"></i>65</a> </div>
                      <a href="course.php" class="post-btn btn btn-primary btn-effect">READ MORE</a> </div>
                  </div>
                  <div class="entry-main">
                    
                    <h3 class="entry-title ui-title-inner decor decor_mod-b"><a href="javascript:void(0);">JAVA</a></h3>
                    <div class="entry-content">
                      <p>JAVA is a programming language.it makes bright future.</p>
                    </div>
                  </div>
                </article>
                <!-- end post -->
                <article class="post post_mod-a clearfix wow zoomIn" data-wow-duration="2s" data-wow-delay="1s">
                  <div class="entry-media">
                    <div class="entry-thumbnail"> <a href="javascript:void(0);" ><img class="img-responsive" src="assets/img/3post.jpg" width="250" height="250" alt="Foto"/></a> </div>
                    <div class="entry-hover">
                      <div class="box-comments"> <a href="javascript:void(0);"><i class="icon stroke icon-Message"></i>25</a> <a href="javascript:void(0);"><i class="icon stroke icon-User"></i>65</a> </div>
                      <a href="course.php" class="post-btn btn btn-primary btn-effect">READ MORE</a> </div>
                  </div>
                  <div class="entry-main">
                   
                    <h3 class="entry-title ui-title-inner decor decor_mod-b"><a href="javascript:void(0);">WEB DESIGNING</a></h3>
                    <div class="entry-content">
                      <p>Web design is used to creat a website.It helps to attract your website.</p>
                    </div>
                  </div>
                </article>
                <!-- end post -->
                <article class="post post_mod-a clearfix wow zoomIn" data-wow-duration="2s" data-wow-delay="1.5s">
                  <div class="entry-media">
                    <div class="entry-thumbnail"> <a href="javascript:void(0);" ><img class="img-responsive" src="assets/img/4post.jpg" width="250" height="250" alt="Foto"/></a> </div>
                    <div class="entry-hover">
                      <div class="box-comments"> <a href="javascript:void(0);"><i class="icon stroke icon-Message"></i>25</a> <a href="javascript:void(0);"><i class="icon stroke icon-User"></i>65</a> </div>
                      <a href="course.php" class="post-btn btn btn-primary btn-effect">READ MORE</a> </div>
                  </div>
                  <div class="entry-main">
                    
                    <h3 class="entry-title ui-title-inner decor decor_mod-b"><a href="javascript:void(0);">GRAPHIC DESGING</a></h3>
                    <div class="entry-content">
                      <p>After graphic designing you can creat banner,leaflet,visiting card.</p>
                    </div>
                  </div>
                </article>
                <!-- end post --> 
              </div>
              <!-- end posts-wrap --> 
            </div>
            <!-- end col --> 
          </div>
          <!-- end row --> 
        </div>
        <!-- end container --> 
      </section>
      <!-- end section-default -->
      
      <div class="section-progress wow fadeInUp section-parallax"  data-speed="25"  data-wow-duration="2s">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <ul class="list-progress list-unstyled">
                <li class="list-progress__item"> <span class="chart label-chart decor decor_mod-c" data-percent="190"><i class="icon stroke icon-WorldWide"></i><span class="percent"></span> </span> <span class="list-progress__name">COUNTRIES REACHED</span> </li>
                <li class="list-progress__item"> <span class="chart label-chart decor decor_mod-c" data-percent="250000"><i class="icon stroke icon-Book"></i><span class="percent"></span> </span> <span class="list-progress__name">PASSED GRADUATES</span> </li>
                <li class="list-progress__item"> <span class="chart label-chart decor decor_mod-c" data-percent="824"><i class="icon stroke icon-User"></i><span class="percent"></span> </span> <span class="list-progress__name">QUALIFIED STAFF</span> </li>
                <li class="list-progress__item"> <span class="chart label-chart decor decor_mod-c" data-percent="1500"><i class="icon stroke icon-Edit"></i><span class="percent"></span> </span> <span class="list-progress__name">COURSES PUBLISHED</span> </li>
              </ul>
              <!-- end list-progress --> 
            </div>
            <!-- end col  --> 
          </div>
          <!-- end row  --> 
        </div>
        <!-- end container--> 
      </div>
      <!-- end section-progress-->
      
      
      <!-- end section-default -->
      
      <section class="section-video wow fadeInUp" data-wow-duration="2s">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="video-block"> <a class="video-block__link" href="https://www.youtube.com/watch?v=kjWUI9Nag_U&feature=youtu.be" rel="prettyPhoto"><i class="icon stroke icon-Play"></i></a>
                <h2 class="video-block__title">Video Tour</h2>
                <div class="video-block__subtitle">Having over thousand students worldwide and more than 50 online courses available.</div>
              </div>
            </div>
            <!-- end col --> 
          </div>
          <!-- end row --> 
        </div>
        <!-- end container --> 
      </section>
      <!-- end section-video -->
      
      <section class="section-subscribe wow fadeInUp" data-wow-duration="2s">
        <div class="subscribe">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <div class="subscribe__icon-wrap"> <i class="icon_bg stroke icon-Imbox"></i><i class="icon stroke icon-Imbox"></i> </div>
                <div class="subscribe__inner">
                  <h2 class="subscribe__title">STAY UPDATED WITH FUTURE FLAME</h2>
                  <div class="subscribe__description">FUTURE FLAME is the NO.1 Computer training institute in Odisha.</div>
                </div>
              </div>
              <!-- end col -->
              <div class="col-sm-6">
                <form class="subscribe__form" action="http://templines.rocks/html/academica/get">
                  <input class="subscribe__input form-control" type="text" placeholder="Your Email address ...">
                  <button class="subscribe__btn btn btn-success btn-effect">SUBSCRIBE</button>
                </form>
              </div>
              <!-- end col --> 
            </div>
            <!-- end row --> 
          </div>
          <!-- end container --> 
        </div>
      </section>
      <!-- end section-subscribe -->
      
      <div class="container">
        <div class="row">
          <div class="border-decor_top">
            <div class="col-md-6">
              <section class="section-default wow bounceInLeft" data-wow-duration="2s">
                <h2 class="ui-title-block">What <strong>Students Say</strong></h2>
                <div class="slider-reviews owl-carousel owl-theme owl-theme_mod-c enable-owl-carousel"
												data-single-item="true"
												data-auto-play="7000"
												data-navigation="true"
												data-pagination="false"
												data-transition-style="fade"
												data-main-text-animation="true"
												data-after-init-delay="4000"
												data-after-move-delay="2000"
												data-stop-on-hover="true">
                  <div class="reviews">
                    <div class="reviews__text">FUTURE FLAME is a reputed training institute in Bhubaneshwar that has offered me 
training and improved my skills in Digital Marketing. 
I have come across various other institutes as well, but the teaching process in FUTURE FLAME is 
simply unparallel. Here you can get the real time experience, troubleshooting session, etc.,
 which are usually not offered in other training organizations. The faculty members teach you 
about the latest market trends and techniques and follow the latest industry endorsed curriculum. 
This actually helps you during interviews and once you start working with a company.
Today I am with CV Online, one of my dream company to start my job with. 
</div>
                    <div class="reviews__img"><img class="img-responsive" src="assets/media/avatar_review/1.jpg" height="60" width="60" alt="foto"></div>
                    <span class="reviews__autor">-- Sandeep Rana</span> <span class="reviews__categories">(PHP Student)</span> </div>
                  <!-- end reviews -->
                  
                  <div class="reviews">
                    <div class="reviews__text">FUTURE FLAME is one of the most reputed and credible training institute in Bhubaneswar.i joined
in php course. Institute offers practical knowledge and full assistance with basic and advanced level
PHP training.The training sessions are conducted by professionals having expertise in handling 
real time PHP projects.The organization also offered me 100% placement support and has specially 
trained me for interview sessions. I am very glad that I had joined FUTURE FLAME PHP training classes 
without which I wouldn’t reached where I am today!</div>
                    <div class="reviews__img"><img class="img-responsive" src="assets/media/avatar_review/2.jpg" height="60" width="60" alt="foto"></div>
                    <span class="reviews__autor">-- Smita Das</span> <span class="reviews__categories">(Web Designing)</span> </div>
                  <!-- end reviews -->
                  
                  
                  <!-- end reviews --> 
                </div>
                <!-- end slider-reviews --> 
              </section>
              <!-- end section-default --> 
            </div>
            <!-- end col -->
            
            <div class="col-md-6">
              <section class="section-default wow bounceInRight" data-wow-duration="2s">
                <h2 class="ui-title-block">Why <strong>FUTURE FLAME ?</strong></h2>
                <div class="panel-group accordion accordion" id="accordion-1">
                  <div class="panel panel-default">
                    <div class="panel-heading"> <a class="btn-collapse" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-1"><i class="icon"></i></a>
                      <h3 class="panel-title">High-standards of training available here.</h3>
                    </div>
                    <div id="collapse-1" class="panel-collapse collapse in">
                      <div class="panel-body">
                        <p class="ui-text"></p>
                      </div>
                    </div>
                  </div>
                  <!-- end panel -->
                  
                  <div class="panel">
                    <div class="panel-heading"> <a class="btn-collapse collapsed" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-2"><i class="icon"></i></a>
                      <h3 class="panel-title">One to one interaction with each student,also personal workstations.</h3>
                    </div>
                    <div id="collapse-2" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p class="ui-text"></p>
                      </div>
                    </div>
                  </div>
                  <!-- end panel -->
                  
                  <div class="panel">
                    <div class="panel-heading"> <a class="btn-collapse collapsed" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-3"><i class="icon"></i></a>
                      <h3 class="panel-title">Speed broadband internet access.</h3>
                    </div>
                    <div id="collapse-3" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p class="ui-text"></p>
                      </div>
                    </div>
                  </div>
                  <!-- end panel -->
                  
                  <div class="panel">
                    <div class="panel-heading"> <a class="btn-collapse collapsed" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-4"><i class="icon"></i></a>
                      <h3 class="panel-title">Regularly updated course material.</h3>
                    </div>
                    <div id="collapse-4" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p class="ui-text"></p>
                      </div>
                    </div>
                  </div>
                  <!-- end panel --> 
                  
                  <div class="panel">
                    <div class="panel-heading"> <a class="btn-collapse collapsed" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-4"><i class="icon"></i></a>
                      <h3 class="panel-title">Library</h3>
                    </div>
                    <div id="collapse-4" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p class="ui-text"></p>
                      </div>
                    </div>
                  </div>
                  <!-- end panel --> 
                  
                  <div class="panel">
                    <div class="panel-heading"> <a class="btn-collapse collapsed" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-4"><i class="icon"></i></a>
                      <h3 class="panel-title">All time lab exes.</h3>
                    </div>
                    <div id="collapse-4" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p class="ui-text"></p>
                      </div>
                    </div>
                  </div>
                  <!-- end panel --> 
                  
                  <div class="panel">
                    <div class="panel-heading"> <a class="btn-collapse collapsed" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-4"><i class="icon"></i></a>
                      <h3 class="panel-title">Weekend classes for working professional.</h3>
                    </div>
                    <div id="collapse-4" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p class="ui-text"></p>
                      </div>
                    </div>
                  </div>
                  <!-- end panel --> 
                  
                  <div class="panel">
                    <div class="panel-heading"> <a class="btn-collapse collapsed" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-4"><i class="icon"></i></a>
                      <h3 class="panel-title">100% career assistance for you future.</h3>
                    </div>
                    <div id="collapse-4" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p class="ui-text"></p>
                      </div>
                    </div>
                  </div>
                  <!-- end panel --> 
                </div>
                <!-- end accordion --> 
              </section>
            </div>
            <!-- end col --> 
          </div>
          <!-- end section-default --> 
        </div>
        <!-- end row --> 
      </div>
      <!-- end container -->
      
      <section class="section-clients wow fadeInUp" data-wow-duration="2s">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <h2 class="ui-title-block ui-title-block_mod-b">Our <strong>Global Partners</strong></h2>
              <ul class="list-clients list-unstyled clearfix">
                <li class="list-clients__item"><img class="img-responsive" src="assets/media/clients/1.jpg" height="100" width="200" alt="Partners"></li>
                <li class="list-clients__item"><img class="img-responsive" src="assets/media/clients/2.jpg" height="100" width="200" alt="Partners"></li>
                <li class="list-clients__item"><img class="img-responsive" src="assets/media/clients/3.jpg" height="100" width="200" alt="Partners"></li>
                <li class="list-clients__item"><img class="img-responsive" src="assets/media/clients/4.jpg" height="100" width="200" alt="Partners"></li>
                <li class="list-clients__item"><img class="img-responsive" src="assets/media/clients/5.jpg" height="100" width="200" alt="Partners"></li>
              </ul>
              <div class="list-clients__description">Nulla feugiat nibh placerat fermentum rutrum ante risus euismod eros pharetra felis justo ac tortor Maecenas odio sit amet odio euismod eaculis. Donec ac tellus nullam risus turpis rhoncus</div>
            </div>
            <!-- end col --> 
          </div>
          <!-- end row --> 
        </div>
        <!-- end container --> 
      </section>
      <!-- end section-clients -->
      
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <section class="section_mod-b text-center wow fadeInUp" data-wow-duration="2s">
              <h2 class="ui-title-block">We provide universal access to the world’s best education & offer courses for anyone, <strong>Absolutely FREE.</strong></h2>
              <div class="ui-subtitle-block ui-subtitle-block_mod-c">We continuously keep track record of the jobs in the market.</div>
              <a class="btn btn-primary btn-effect" href="javascript:void(0);">ENROLL NOW</a> </section>
            <!-- end section-default --> 
          </div>
          <!-- end col --> 
        </div>
        <!-- end row --> 
      </div>
      <!-- end container --> 
      
    </div>
    <!-- end main-content -->
    
   <?php include("include/footer.php");?>