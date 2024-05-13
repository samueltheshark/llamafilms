<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Llama films | Video Production</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
    
<meta property="og:locale" content="en_GB" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Llama Films | Video Production Company | London, Chelmsford Essex" />
<meta property="og:description" content="We are the UK&#039;s full-service video production company. We make content with impact - from promos, to documentaries, animations, and event films." />
<meta property="og:url" content="https://llamafilms.co.uk/" />
<meta property="og:site_name" content="Llama Films" />
    

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="llamafilms.ico">

  <!-- =======================================================
    Theme Name: TheEvent
    Theme URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
	
<style>
	html, body {
    height: 100%;
    margin: 0;
}
#videowrapper{  
    position: relative;
    overflow: hidden;
} 

#fullScreenDiv{
    min-height: 100%; 
    height: 100vh;
    width: 100vw;
    padding:0;
    margin: 0;
    background-color: black;
    position: relative;
}

#video{    
    width: 100vw; 
    height: auto;
    margin: auto;
    display: block;
}
@media (min-aspect-ratio: 16/9) {
  #video{
    width: 100vw; 
    height:auto;
  }
}

@media (max-aspect-ratio: 16/9) {
  #video {
    height: 100vh; 
    width:auto;
    margin-left: 50vw;
    transform: translate(-50%);
  }
}

#videoMessage{
    width: 100%; 
    height: 100%;
    position: absolute; 
    top: 0; 
    left: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
	

.styling *{ margin:0.2em; text-align:left;color:#ffffff;}
.styling h1{font-size: 3em; text-shadow: 2px 2px 2px #000000;}
.styling h2{font-size: 1.5em;}
.styling h3{font-size: 1.2em;}
.videoClick a{padding:0.2em 0.5em;
    border-radius:0.5em;
    color:white;background-color:rgba(241, 241, 241, 0.45);
    font-size: 1.7em;
    cursor:pointer;cursor:hand;
}
	
</style>
</head>

<body style="box-sizing: border-box; margin: 0;">

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container" >

      <div id="logo" class="pull-left" style="border: 0px yellow solid; padding: 0px;">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="#intro" class="scrollto"><img src="img/llamalogohead.png" alt="" title=""></a>
      </div>


      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#speakers">Projects</a></li>
          <li><a href="#venue">Location</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#supporters">Partnerships</a></li>
          <li class="buy-tickets"><a href="#contact">Contact</a></li>
          <!--<li class="buy-tickets"><a href="#buy-tickets">Donate</a></li>-->
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container wow fadeIn">
<br />
      <img src="img/llamalogofinal.png" alt="" title="" style="width: 100px; height: auto;"><br />
      <h1 class="mb-4 pb-0"><span>Llama</span> Productions</h1>
      <p class="mb-4 pb-0" >Fiction and social cinema, expression and voice for everyone.</p>
      <a href="https://www.youtube.com/watch?v=AmrF9LtAuEE" class="venobox play-btn mb-4" data-vbtype="video"
        data-autoplay="true"></a>
      <a href="#about" class="about-btn scrollto">About Llama Productions</a>
    </div>
  </section>

  <main id="main" style="margin: 0px;">

    <!--==========================
      About Section
    ============================-->
 <section id="about" style="padding: 0 0 0 0;">
		
		<div id="videowrapper">
			<div id="fullScreenDiv">
				<!--
			   <video id="video" role="presentation" preload="auto" poster="http://media.w3.org/2010/05/sintel/poster.png" playsinline="" crossorigin="anonymous" loop="" muted="" autoplay="" class="blur">
					<source src="videos/videocover.webm" type="video/webm">
					<source src="videos/videocover.mp4" type="video/mp4">
filter: grayscale(100%); -webkit-filter: grayscale(100%);
				</video> 
				-->
                
			<video id="video" role="presentation" preload="auto" poster="poster.jpg" loop="" muted="" autoplay="" class="blur" style="opacity: .7; border: 5px solid black;">
  					<source src="videocover.mp4" type="video/mp4">
  					<source src="videocover.ogg" type="video/ogg">
            </video>
				
				
				<div id="videoMessage" class="styling">
				  <div class="container" style="background: rgba(3,4,3,.4); border-radius: 25px;">
					<div class="row">
					  <div class="col-lg-12"><br><br>
                          <p style="font-size: 15px;">
                            I founded Llama Productions in 2015 in England and my main motivation is to give a voice to those who do not have it. Filming and supporting people, especially vulnerable and disadvantaged youth, makes me happy. This is my passion and there is nothing better than that.
                         </p>
                          <p style="font-size: 15px;">
                            At Llama Films we create documentaries, short films and mockumentaries. We are interested in stories that explore identity conflicts, human and existential relationships; characters on the fringes of society, utopians and anonymous heroes.
						  </p><br>
                          <p style="text-align: right;"><i>Samuel Espinoza</i><!--<br>Director of Llama Films--><br>
              <a href="cv/cv.pdf" target="_blank"><i style="font-size:16px" class="fa">&#xf019;</i>CV |</a>
						  <a href="https://www.youtube.com/watch?v=JefnTl1XOCM&ab_channel=Llamafilms%7CTv" target="_blank"><i style="font-size:16px" class="fa">&#xf16a;</i>Showreel</a><br>
						  <a href="https://www.linkedin.com/in/samueltheshark/" target="_blank"><i style="font-size:16px" class="fa">&#xf0e1;</i></a>
						  <a href="https://www.facebook.com/LlamaFilmsProductions" target="_blank"><i style="font-size:16px" class="fa">&#xf09a;</i></a>
						  <a href="https://www.instagram.com/llama.films/" target="_blank"><i style="font-size:16px" class="fa">&#xf16d;</i></a>

                      	  </p>
					  </div>
					</div><!--MY PARRAFOS-->
				   </div>
 
				</div>   
			</div>
		</div>
    </section>

    <!--==========================
      Speakers Section
    ============================-->
    <section id="speakers" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>projects</h2>
          <p>The following projects were carried out in Peru and England</p>
        </div>

        <div class="row">


            <div class="col-lg-12 col-md-12">
            <div class="speaker">
              <!--<a href="project-mirror.html">-->
              <img src="img/projects/algarrobo.jpg" alt="Speaker 1" class="img-fluid">
              <!--</a>-->
              <div class="details">
                <h3><a href="project-mirror.html">Documentary: ALGARROBO</a></h3>
                <p style="line-height: 1.2; padding: 10px;">This documentary will soon be presented to the public.</p>
                <div class="social">
                  <!--<a href="project-mirror.html" class="btn btn-default site-btn"><small>READ MORE</small></a>
                  <a href="https://www.youtube.com/watch?v=LgtxmA7Tnmw" class="btn btn-default site-btn" target="_blank"><small>WATCH FILM</small></a>-->
                </div>
              </div>
            </div>
          </div>

           <div class="col-lg-12 col-md-12">
            <div class="speaker">
              <a href="project-mirror.html">
              <img src="img/projects/mirror.jpg" alt="Speaker 1" class="img-fluid">
              </a>
              <div class="details">
                <h3><a href="project-mirror.html">Shortfilm: MIRROR</a></h3>
                <p style="line-height: 1.2; padding: 10px;">Film project made for the Film TV course at South Essex University in the United Kingdom.</p>
                <div class="social">
                  <a href="project-mirror.html" class="btn btn-default site-btn"><small>READ MORE</small></a>
                  <a href="https://www.youtube.com/watch?v=LgtxmA7Tnmw" class="btn btn-default site-btn" target="_blank"><small>WATCH FILM</small></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6">
            <div class="speaker">
			        <a href="project-im-too-able.html">
              <img src="img/projects/1mencaphoodweenk.jpg" alt="Speaker 1" class="img-fluid">
			        </a>
              <div class="details">
                <h3><a href="project-im-too-able.html">I, Too, Am Able</a></h3>
                <p style="line-height: 1.2; padding: 10px;">Students learned presentation, drama and technical skills to produce a short film about their lived experiences. </p>
                <div class="social">
                  <a href="project-im-too-able.html" class="btn btn-default site-btn"><small>READ MORE</small></a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-6 col-md-6">
            <div class="speaker">
              <a href="project-filmperuvian-youth.html">
              <img src="img/projects/3filmworshopperucover.jpg" alt="Speaker 3" class="img-fluid">
              </a>
              <div class="details">
                <h3><a href="project-filmperuvian-youth.html">Workshop 2 for Peruvian Youth</a></h3>
                <p>Filmmaking and acting to young people of low-income backgrounds in Peru.</p>
                <div class="social">
                  <a href="project-filmperuvian-youth.html" class="btn btn-default site-btn"><small>READ MORE</small></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-12 col-md-12">
            <div class="speaker">
              <a href="project-im-too-able.html">
              <img src="img/projects/brokencode2script.jpg" alt="Speaker 1" class="img-fluid">
              </a>
              <div class="details">
                <h3><a href="project-im-too-able.html">Shortfilm: BROKEN CODE</a></h3>
                <p style="line-height: 1.2; padding: 10px;">Film project made for the Film TV course at South Essex University in the United Kingdom.</p>
                <div class="social">
                  <a href="https://www.youtube.com/watch?v=AHZYieFSY2Q" class="btn btn-default site-btn" target="_blank"><small>WATCH FILM</small></a>
                  <a href="brokencode_script.pdf" target="_blank" class="btn btn-default site-btn"><small> READ FULL SCRIPT</small></a>
                </div>
              </div>
            </div>
          </div>
            
         <div class="col-lg-6 col-md-6">
            <div class="speaker">
              <a href="project-encouragement-shortfilm.html">
              <img src="img/projects/2encouragementcover.jpg" alt="actress" class="img-fluid">
              </a>
              <div class="details">
                <h3><a href="project-encouragement-shortfilm.html">Encouragement | Short film</a></h3>
                <p>A piece of hope after the tribulation</p>
                <div class="social">
                  <a href="project-encouragement-shortfilm.html" class="btn btn-default site-btn"><small>READ MORE</small></a>
                </div>
              </div>
            </div>
          </div>
            
          <div class="col-lg-6 col-md-6">
            <div class="speaker">
                <a href="project-sentinel-shortfilm.html">
              <img src="img/projects/4sentinelcover.jpg" alt="Speaker 4" class="img-fluid">
                </a>
              <div class="details">
                <h3><a href="project-sentinel-shortfilm.html">Sentinel | Short film</a></h3>
                <p>A deceased WW2 soldier of the home guard, whose unsettled spirit still watches over the pillbox he was assigned to, with deadly force.</p>
                <div class="social">
                  <a href="project-sentinel-shortfilm.html" class="btn btn-default site-btn"><small>READ MORE</small></a>
                </div>
              </div>
            </div>
          </div>
            
          <div class="col-lg-6 col-md-6">
            <div class="speaker">
                <a href="project-rumbosinc-film.html">
              <img src="img/projects/56eliuespinoza.jpg" alt="Speaker 5" class="img-fluid">
                </a>
              <div class="details">
                <h3><a href="project-rumbosinc-film.html">Workshop 1 for Peruvian Youth</a></h3>
                <p>Filmmaking and acting to young people of low-income backgrounds in Peru.</p>
                <div class="social">
                  <a href="project-rumbosinc-film.html" class="btn btn-default site-btn"><small>READ MORE</small></a>
                </div>
              </div>
            </div>
          </div>
            
        <div class="col-lg-6 col-md-6">
            <div class="speaker">
              <a href="project-juanita-shortfilm.html">
              <img src="img/projects/projectspicscover2.jpg" alt="Speaker 6" class="img-fluid">
              </a>
              <div class="details">
                <h3><a href="project-juanita-shortfilm.html">Juanita | Short film</a></h3>
                <p>A look inside the experience of Juanita, a young woman from the Peruvian countryside who becomes a victim of human trafficking. </p>
                <div class="social">
                  <a href="project-juanita-shortfilm.html" class="btn btn-default site-btn"><small>READ MORE</small></a>
                </div>
              </div>
            </div>
          </div>
<!--
			<div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/projects/7taketimetoplaycover.jpg" alt="Speaker 6" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Willow Trantow</a></h3>
                <p>Non autem dicta</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
			<div class="col-lg-6 col-md-6">
            <div class="speaker">
              <img src="img/projects/8salsacarnacover.jpg" alt="Speaker 6" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Willow Trantow</a></h3>
                <p>Non autem dicta</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
            
			<div class="col-lg-6 col-md-6">
            <div class="speaker">
              <img src="img/projects/9yapateracover.jpg" alt="Speaker 6" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Willow Trantow</a></h3>
                <p>Non autem dicta</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
      -->      
        </div>
      </div>

    </section>


    <!--==========================
      Venue Section
    ============================-->
    <section id="venue" class="wow fadeInUp">

      <div class="container-fluid">

        <div class="section-header">
          <h2>Location</h2>
          <p>Llama Films location info and gallery</p>
        </div>

        <div class="row no-gutters">
          <div class="col-lg-6 venue-map">
              <!--
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0" allowfullscreen></iframe>-->
              
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d79084.53539980936!2d0.4089022467030411!3d51.72587003032078!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d892c32191ebe3%3A0xaed2af1e3fcaaaf0!2sChelmsford!5e0!3m2!1sen!2suk!4v1626640606411!5m2!1sen!2suk" frameborder="0" style="border:0;" allowfullscreen></iframe>
              
          </div>

          <div class="col-lg-6 venue-info">
            <div class="row justify-content-center">
              <div class="col-11 col-lg-8">
                <h3>Chelmsford Essex, Uk</h3>
                <p>Chelmsford is a city and the county town of Essex, in the East of England. It is located in the London commuter belt, approximately 30 miles (50 kilometres).</p>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="container-fluid venue-gallery-container">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/1a.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/1a.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/2a.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/2a.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/3amichaelmooreeliuespinoza.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/3amichaelmooreeliuespinoza.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/projects/44eliuespinozalfa.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/4a.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/5a.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/5a.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/7a.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/7a.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/6a.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/6a.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/8a.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/8a.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>
      </div>

    </section>

    

    <!--==========================
      Gallery Section
    ============================-->
    <section id="gallery" class="wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Gallery</h2>
        </div>
      </div>

      <div class="owl-carousel gallery-carousel">
<a href="img/projects/35eliuespinoza.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/projects/35eliuespinoza.jpg" alt=""></a>
          
        <a href="img/projects/33eliuespinoza.png" class="venobox" data-gall="gallery-carousel"><img src="img/projects/33aeliuespinoza.jpg" alt=""></a>
          
        <a href="img/projects/37eliuespinoza.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/projects/37eliuespinoza.jpg" alt=""></a>
          
                  <a href="img/projects/41eliuespinoza.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/projects/41eliuespinoza.jpg" alt=""></a>
          
        <a href="img/projects/38eliuespinoza.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/projects/38eliuespinoza.jpg" alt=""></a>
          
                    
        <a href="img/projects/39eliuespinoza.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/projects/39eliuespinoza.jpg" alt=""></a>
          
        <a href="img/projects/40eliuespinoza.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/projects/40eliuespinoza.jpg" alt=""></a>
          
        <a href="img/projects/36eliuespinoa.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/projects/36eliuespinoa.jpg" alt=""></a>
          
        <a href="img/projects/34eliuespinoza.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/projects/eliuespinozateaching3.jpg" alt=""></a>
          
        <a href="img/projects/redcap2.jpg"><img src="img/projects/redcap2.jpg" alt=""></a>
          
        <a href="img/projects/1mencaphoodweenkaux.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/projects/1mencaphoodweenkaux.jpg" alt=""></a>
          
        <a href="img/projects/mencaphoodweenk.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/projects/mencaphoodweenk.jpg" alt=""></a>
          
        <a href="img/projects/30eliuespinoza.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/projects/30eliuespinoza.jpg" alt=""></a>
          
        <a href="img/projects/31xeliuespinoza.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/projects/31xeliuespinoza.jpg" alt="menc"></a>
          
        <a href="img/projects/32eliuespinoza.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/projects/32eliuespinoza.jpg" alt="menc"></a>
          
          
          
         <a href="img/projects/13eliuespinozareel.jpg"><img src="img/projects/13eliuespinozareel.jpg" alt="eliureel"></a>
          
        <a href="img/projects/13film.jpg"><img src="img/projects/13film.jpg" alt="ws"></a>
          
        <a href="img/projects/10891551_335041930029721_8263533568333100846_n.jpg"><img src="img/projects/eliufilmingsuyakuy.jpg" alt=""></a>
          
        <a href="img/projects/15fotoeliuespinoza.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/projects/15fotoeliuespinoza.jpg" alt=""></a>
          
        <a href="img/projects/16akideliuespinoza.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/projects/16akideliuespinoza.jpg" alt=""></a>
          
        <a href="img/projects/11wokeliu.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/projects/11awokeliu.jpg" alt=""></a>
          
        <a href="img/projects/17eliuespinoza.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/projects/17eliuespinoza.jpg" alt=""></a>
          
        <a href="img/projects/18eliuespinoza.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/projects/18aeliuespinoza.jpg" alt=""></a>
          
        <a href="img/projects/19eliuespinoza.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/projects/19aeliuespinoza.jpg" alt=""></a>
          
        <a href="img/projects/20eliuespinoza.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/projects/20eliuespinoza.jpg" alt=""></a>
          
        <a href="img/projects/21eliuespinoza.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/projects/21eliuespinoza.jpg" alt=""></a>
          
        <a href="img/projects/22eliuespinoza.png" class="venobox" data-gall="gallery-carousel"><img src="img/projects/22aeliuespinoza.jpg" alt=""></a>
          
        <a href="img/projects/23eliuespinoza.jpg"><img src="img/projects/23eliuespinoza.jpg" alt=""></a>
          
        <a href="img/projects/24eliuespinoza.jpg"><img src="img/projects/24aeliuespinoza.jpg" alt=""></a>
          
        <a href="img/projects/25eliuespinoza.jpg"><img src="img/projects/25eliuespinoza.jpg" alt=""></a> 
          
          
           <a href="img/projects/46eliuespinoza.jpg"><img src="img/projects/46eliuespinoza.jpg" alt="eliureel"></a>
          
        <a href="img/projects/47eliuespinoza.jpg"><img src="img/projects/47aeliuespinoza.jpg" alt="ws"></a>
          
        <a href="img/projects/48eliuespinoza.jpg"><img src="img/projects/48aeliuespinoza.jpg" alt=""></a>
          
        <a href="img/projects/49eliuespinoza.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/projects/49aeliuespinoza.jpg" alt=""></a>
          
        <a href="img/projects/50eliuespinoza.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/projects/50eliuespinoza.jpg" alt=""></a>
          
        <a href="img/projects/51eliuespinoza.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/projects/51eliuespinoza.jpg" alt=""></a>
          
        <a href="img/projects/52eliuespinoza.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/projects/52eliuespinoza.jpg" alt=""></a>
          
        <a href="img/projects/53eliuespinoza.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/projects/53eliuespinoza.jpg" alt=""></a>
          
           <a href="img/projects/58rumbos159.jpg"><img src="img/projects/58arumbos159.jpg" alt="eliureel"></a>
          
        <a href="img/projects/rumbos138.jpg"><img src="img/projects/rumbos138.jpg" alt="ws"></a>
          
        <a href="img/projects/59eliuespinoza.jpg"><img src="img/projects/59eliuespinoza.jpg" alt=""></a>
          
          
        <a href="img/projects/casa1.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/projects/casa1.jpg" alt=""></a>
          
        <a href="img/projects/carro3.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/projects/carro3.jpg" alt=""></a>
          
        <a href="img/projects/casa2.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/projects/casa2.jpg" alt=""></a>
          
        <a href="img/projects/carro2.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/projects/carro2.jpg" alt=""></a>
          
        <a href="img/projects/banda.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/projects/abanda.jpg" alt=""></a>
          
        <a href="img/projects/maquillaje.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/projects/maquillaje.jpg" alt=""></a>
          
        <a href="img/projects/60eliuespinoza.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/projects/60aeliuespinoza.jpg" alt=""></a>
          
        <a href="img/projects/61eliuespinoza.jpg"><img src="img/projects/61eliuespinoza.jpg" alt=""></a>
          
        <a href="img/projects/62eliuespinoza.jpg"><img src="img/projects/62eliuespinoza.jpg" alt=""></a>
      </div>

    </section>

    <!--==========================
      Sponsors Section
    ============================-->
    <section id="supporters" class="section-with-bg wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>In partnership with</h2>
        </div>

        <div class="row no-gutters supporters-wrap clearfix">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/1b.jpg" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/2a.jpg" class="img-fluid" alt="">
            </div>
          </div>
        
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/3a.jpg" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/4a.jpg" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/5b.jpg" class="img-fluid" alt="">
            </div>
          </div>
        
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/5a.jpg" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/7a.jpg" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/8a.jpg" class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div>

    </section>

    

    <!--==========================
      Subscribe Section
    ============================-->
    <section id="subscribe" style="color: white;">
      <div class="container wow fadeInUp" style="text-align: center;">
       
          <h2 style="color: white;">“You must be the change you wish to see in the world.”</h2>
          <p>— Gandhi.</p>
        

      </div>
    </section>

   

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">

      
      <div class="container"> <!---->

        <div class="section-header">
          <h2>Contact Us</h2>
        </div>

        <div class="formX">
            
            <!--
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage">nada</div>
-->
          <form action="03bdd-php/contact-server.php" method="post" role="form" class="contactFormX">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" value="" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars"  required/>
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" value="" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required/>
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" value="" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required/>
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" value="" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" required></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit" name="save">Send Message</button></div>

          </form>     
            <br>
<?php
      if( isset( $_SESSION['success']) && $_SESSION['success'] !=''  ){
        echo '<small id="success" style="color: white; background-color: green; font-size:16px; padding:5px; border-radius: 25px;">'.$_SESSION['success'].'</small>';
        unset($_SESSION['success']);
      }

      if( isset( $_SESSION['status']) && $_SESSION['status'] !=''  ){
        echo '<small style="color: white; background-color: red;">'.$_SESSION['status'].'</small>';
        unset($_SESSION['status']);
      }
?>
       </div>  <!--end form-->
      </div> <!--container-->
        
        
        
        
        
                <div class="row contact-info">
<!--
          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>A108 Adam Street, NY 535022, USA</address>
            </div>
          </div>
-->
            

          <div class="col-md-12">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+44 79312 77307</a></p>
            </div>
          </div>

          <div class="col-md-6" style="visibility: hidden;">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@llamafilms.co.uk">info@llamafilms.co.uk</a></p>
            </div>
          </div>

        </div>
    </section><!-- #contact -->

  </main>

<footer id="footer" style="padding: 10px 0 10px 0">
    <div class="container">
      <div class="copyright" style="padding: 0;">
        &copy; Copyright <strong>Llama Films</strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="">SamuelTheShark</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
</body>

</html>
