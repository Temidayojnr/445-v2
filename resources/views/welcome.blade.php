@extends('layouts.master')

@section('content')
<section id="about" class="section-padding wow fadeIn delay-05s">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-right">
          <h2 class="title-text">
            Meet<br><span class="deco">Temidayo</span> Onifade
          </h2>
        </div>
        <div class="col-md-6 text-left">
          <div class="about-text">
            <p>I am a backend software engineer from Lagos, Nigeria</p>
            <p>&nbsp;</p>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>&nbsp;</p>
            <ul class="abt-list">
              <li>- Excepteur sint occaecat cupidatat non proident.</li>
              <li>- Duis aute irure dolor in reprehenderit.</li>
              <li>- Ask the experts.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="portfolio" class="section-padding wow fadeInUp delay-05s">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="title text-center">Let's <span class="deco">See</span> My Work</h2>
        </div>
        <div class="col-md-12">
          <div id="myGrid" class="grid-padding">
            <div class="col-md-4 col-sm-4 padding-right-zero">
              <img src="img/portfolio01.jpg" class="img-responsive">
              <img src="img/port01.jpg" class="img-responsive">
              <img src="img/port02.jpg" class="img-responsive">
              <img src="img/portfolio01.jpg" class="img-responsive">
            </div>
            <div class="col-md-4 col-sm-4 padding-right-zero">
              <img src="img/portfolio02.jpg" class="img-responsive">
              <img src="img/port01.jpg" class="img-responsive">
              <img src="img/port02.jpg" class="img-responsive">
              <img src="img/portfolio01.jpg" class="img-responsive">
              <img src="img/port03.jpg" class="img-responsive">
            </div>
            <div class="col-md-4 col-sm-4 padding-right-zero">
              <img src="img/port01.jpg" class="img-responsive">
              <img src="img/portfolio01.jpg" class="img-responsive">
              <img src="img/portfolio02.jpg" class="img-responsive">
              <img src="img/port03.jpg" class="img-responsive">
              <img src="img/portfolio02.jpg" class="img-responsive">
              <img src="img/port02.jpg" class="img-responsive">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="testimonial" class="section-padding wow fadeInUp">
    <div class="container">
      <div class="row">
        <h2 class="title text-center">See What Our <span class="deco">Client</span> Are Saying ?</h2>
        <div class="test-sec">
          <div class="col-sm-4">
            <blockquote>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamsed commodo nibh ante facilisis bibendum dolor feugiat at. </p>
            </blockquote>
            <div class="carousel-info">
              <div class="pull-left"> <span class="testimonials-name">John Doe</span> <span class="testimonials-post">CEO,  Company Inc.</span> </div>
            </div>
          </div>
          <div class="col-sm-4">
            <blockquote>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamsed commodo nibh ante facilisis bibendum dolor feugiat at. </p>
            </blockquote>
            <div class="carousel-info">
              <div class="pull-left"> <span class="testimonials-name">John Doe</span> <span class="testimonials-post">CEO,  Company Inc.</span> </div>
            </div>
          </div>
          <div class="col-sm-4">
            <blockquote>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamsed commodo nibh ante facilisis bibendum dolor feugiat at. </p>
            </blockquote>
            <div class="carousel-info">
              <div class="pull-left"> <span class="testimonials-name">John Doe</span> <span class="testimonials-post">CEO,  Company Inc.</span> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="contact" class="section-padding wow fadeIn delay-05s">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="contact-sec text-center">
            <h2>Want To <span class="deco">Hire</span> Me?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
          </div>
        </div>

        <div class="col-md-8 col-md-push-2">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>

            <div class="text-center"><button type="submit" class="btn btn-primary btn-lg">Send Message</button></div>
          </form>
        </div>

      </div>
    </div>
  </section>
@endsection