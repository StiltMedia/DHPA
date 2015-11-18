<?php include 'header.php';?>

      <ul class="bxslider">
        <li>
          <div class="caption">
            <h5>WELCOME TO DHPA.COM</h5>
            <span>Photo Agency</span>
            <a href="#">LEARN MORE</a>
          </div>
          <img src="images/slide1.jpg" />
        </li>
        <li>
          <div class="caption">
            <h5>WELCOME TO DHPA.COM</h5>
            <span>Photo Agency</span>
            <a href="#">LEARN MORE</a>
          </div>
          <img src="images/slide2.jpg" />
        </li>
        <li>
          <div class="caption">
            <h5>WELCOME TO DHPA.COM</h5>
            <span>Photo Agency</span>
            <a href="#">LEARN MORE</a>
          </div>
          <img src="images/slide3.jpg" />
        </li>
      </ul>

      <script>
      $(document).ready(function(){

          $('.bxslider').bxSlider({
            mode: 'fade',
            infiniteLoop: 'true',
            responsive: 'false',
            controls: 'true',
            pager: 'true',
            auto: 'true',
            pause: 8000
          });

          $("body").attr("class", "home");
      });
      </script> 


      <section class="bg-grey">
        <div class="container">
          <div class="row">
            <div class="five columns">
                <input class="search-input" type="text" placeholder="Search photos...">
            </div>
            <div class="seven columns align-right">
                <a class="photos">Photos</a>
                <a class="refine">Refine</a>
            </div>
          </div>
        </div>
      </section>


      <section class="events">
        <div class="container">
          <div class="events-content">
              <h5>LATEST EVENTS</h5>

              <ul class="event-list three-columns">
                  <li><a href="#"><img src="images/event1.jpg"><span class="caption">LOWLINE 2015</span></a></li>
                  <li><a href="#"><img src="images/event2.jpg"><span class="caption">LOWLINE 2015</span></a></li>
                  <li><a href="#"><img src="images/event3.jpg"><span class="caption">LOWLINE 2015</span></a></li>
              </ul>

              <ul class="event-list four-columns">
                  <li><a href="#"><img src="images/event4.jpg"><span class="caption">LOWLINE 2015</span></a></li>
                  <li><a href="#"><img src="images/event5.jpg"><span class="caption">LOWLINE 2015</span></a></li>
                  <li><a href="#"><img src="images/event6.jpg"><span class="caption">LOWLINE 2015</span></a></li>
                  <li><a href="#"><img src="images/event7.jpg"><span class="caption">LOWLINE 2015</span></a></li>
              </ul>

              <ul class="event-list three-columns">
                  <li><a href="#"><img src="images/event8.jpg"><span class="caption">LOWLINE 2015</span></a></li>
                  <li><a href="#"><img src="images/event9.jpg"><span class="caption">LOWLINE 2015</span></a></li>
                  <li><a href="#"><img src="images/event10.jpg"><span class="caption">LOWLINE 2015</span></a></li>
              </ul>

              <ul class="event-list four-columns">
                  <li><a href="#"><img src="images/event11.jpg"><span class="caption">LOWLINE 2015</span></a></li>
                  <li><a href="#"><img src="images/event12.jpg"><span class="caption">LOWLINE 2015</span></a></li>
                  <li><a href="#"><img src="images/event13.jpg"><span class="caption">LOWLINE 2015</span></a></li>
                  <li><a href="#"><img src="images/event14.jpg"><span class="caption">LOWLINE 2015</span></a></li>
              </ul>
          </div>
          <a class="button" href="#">VIEW MORE</a>
        </div>
      </section>


      <section class="bg-dark homefeatured">
        <div class="container">
          <h5>FEATURED CONTENT</h5>
            <ul class="featured-list">
              <li><a href="#">H&amp;M X ALEXANDER WANG</a><img src="images/featured1.jpg"></li>
              <li><a href="#">H&amp;M X ALEXANDER WANG</a><img src="images/featured2.jpg"></li>
              <li><a href="#">H&amp;M X ALEXANDER WANG</a><img src="images/featured3.jpg"></li>
            </ul>
        </div>
      </section>


      <section class="instagramfeed">
        <div class="container">
          <div class="row">
            <div class="three columns">
                <h5><i class="fa fa-instagram"></i>Instagram Feed</h5>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Duis mollis, est non commodo luctus, nisi erat. Nullam quis risus eget urna mollis ornare vel eu leo. Duis mollis, est non commodo.</p>
            </div>
            <div class="nine columns">
                <ul class="instagram-list">
                  <li><a href="#"><img src="images/insta1.jpg"></a></li>
                  <li><a href="#"><img src="images/insta2.jpg"></a></li>
                  <li><a href="#"><img src="images/insta3.jpg"></a></li>
                  <li><a href="#"><img src="images/insta4.jpg"></a></li>
                  <li><a href="#"><img src="images/insta5.jpg"></a></li>
                  <li><a href="#"><img src="images/insta6.jpg"></a></li>
                  <li><a href="#"><img src="images/insta7.jpg"></a></li>
                  <li><a href="#"><img src="images/insta8.jpg"></a></li>
                  <li><a href="#"><img src="images/insta9.jpg"></a></li>
                  <li><a href="#"><img src="images/insta10.jpg"></a></li>
                </ul>
            </div>
          </div>
        </div>
      </section>


<?php include 'footer.php';?>