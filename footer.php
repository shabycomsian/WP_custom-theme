<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <?php dynamic_sidebar( 'footer_widget_1' ); ?>
                </div>
                <div class="col-md-3">
                    <?php dynamic_sidebar( 'footer_widget_2' ); ?>
                </div>
                <div class="col-md-3">
                   <?php dynamic_sidebar( 'footer_widget_3' ); ?>
                </div>
                <div class="col-md-3">
                <?php dynamic_sidebar( 'footer_widget_4' ); ?>
                
                </div>
            </div>
        </div>
        <div class="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <?php dynamic_sidebar( 'footer_bottom_widget_1' ); ?>
                    </div>
                    <div class="col-md-5">
                        <?php dynamic_sidebar( 'footer_bottom_widget_2' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>-->
	<script
		src="https://code.jquery.com/jquery-3.4.1.min.js"
		integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
		crossorigin="anonymous">
	</script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
          <script>
            AOS.init();
          </script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            dots: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
        
        
function myFunction() {
  document.getElementById("panel12").style.display = "block";
}
function myFunction3() {
  document.getElementById("panel122").style.display = "block";
}
function myFunction4() {
  document.getElementById("panel123").style.display = "block";
}
function myFunction1() {
  document.getElementByClassName("bb").style.display = "block";
}
function myFunction2() {
  document.getElementByClassName("bbb").style.display = "block";
}
document.getElementByClassName("testimo").onclick = function() {
    this.style.height = 'auto';
}
function myFunction6() {
   

    $(".testimo").css("height", "auto");
    $(".testimo").css("overflow", "visible");
    $(".testimo").css("transition", "2s");
$(".lodemore").hide();
 

  
  
}

$(document).ready(function(){
  $("#hide123").click(function(){
    $(".bb").hide(100);
    $(".aa").show(100);
  });
  $("#show123").click(function(){
    $(".aa").hide(100);
    $(".bb").show(100);
  });
  
});

 </script>
    <script>
        $(document).ready(function () {
       //SLIDE UP
      jQuery("#arrowup").on("click", function () {
          var $ul = $('#v-pills-tab');
          var y = $ul.scrollTop();
          var $firstChild = $ul.children().first();
          var step = $firstChild.outerHeight() + parseInt($firstChild.css('marginBottom'));
          
          console.log('before up', y, step);
          if (y >= 0) {
              y -= step;
              console.log('after up', y);
              
              $ul.animate({
                  scrollTop: y
              }, 800);
          }
      });
  
      //SLIDE DOWN
      $("#arrowdown").on("click", function () {
          var $ul = $('#v-pills-tab');
          var y = $ul.scrollTop();
          var h = $ul.height();
          var $firstChild = $ul.children().first();
          var step = $firstChild.outerHeight() + parseInt($firstChild.css('marginBottom'));
          
          console.log('before down', y, step);
          if (h >= y) {
              y += step;
              console.log('after down', y);
              
              $ul.animate({
                  scrollTop: y
              }, 800);
          }
      });
  
  });
  /***********************************************/
    </script>
 <script>
   // init Isotope
var $grid = $('.grid').isotope({
  itemSelector: '.element-item',
  layoutMode: 'fitRows'
});
// filter functions
var filterFns = {
  // show if number is greater than 50
  numberGreaterThan50: function() {
    var number = $(this).find('.number').text();
    return parseInt( number, 10 ) > 50;
  },
  // show if name ends with -ium
  ium: function() {
    var name = $(this).find('.name').text();
    return name.match( /ium$/ );
  }
};
// bind filter button click
$('.filters-button-group').on( 'click', 'button', function() {
  var filterValue = $( this ).attr('data-filter');
  // use filterFn if matches value
  filterValue = filterFns[ filterValue ] || filterValue;
  $grid.isotope({ filter: filterValue });
});
// change is-checked class on buttons
$('.button-group').each( function( i, buttonGroup ) {
  var $buttonGroup = $( buttonGroup );
  $buttonGroup.on( 'click', 'button', function() {
    $buttonGroup.find('.is-checked').removeClass('is-checked');
    $( this ).addClass('is-checked');
  });
});

    </script>
     <script>
    $( document ).ready(function() {
    
  $(".owl-carousel").owlCarousel({
    items: 3,
    loop: false,
    mouseDrag: false,
    touchDrag: false,
    pullDrag: false,
    rewind: true,
    autoplay: true,
    margin: 0,
    nav: true
  });
});
    </script>
     <script>        
function myFunction() {
  document.getElementById("panel12").style.display = "block";
}
function myFunction1() {
  document.getElementByClassName("bb").style.display = "block";
}

$(document).ready(function(){
  $("#hide123").click(function(){
    $(".bb").hide(100);
    $(".aa").show(100);
  });
  $("#show123").click(function(){
    $(".aa").hide(100);
    $(".bb").show(100);
  });
  
});
$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
 </script>
    <style>.buttons {
  display: inline-block;
  padding: 10px 18px;
  margin-bottom: 10px;
  border: none;
  font-family: "CerebriSans Book";
color: #929191;
  font-size: 16px;
}

.buttons:hover {
  color: #ff1a4f;
}
.testimonials-list.mt-4.testimo {
    height: 747px;
    overflow: hidden;
}

.buttons.is-checked {
  color: #ff1a4f;
}


/* ---- button-group ---- */

.button-group:after {
  content: '';
  display: block;
  clear: both;
}

.button-group .buttons {
  float: left;
  border-radius: 0;
  margin-left: 0;
  margin-right: 1px;
 background-color: #ff000000;
 font-family: "CerebriSans Book";
 outline: none;
}
.loadmore {
    padding: 10px;
    margin: 25px;
    text-align: center;
}
botton.lodemore {
    background-color: #dc3545;
    padding: 5px 15px 9px 15px;
    color: #ffffff;
    border-radius: 5px;
}

</style>
    <?php wp_footer();?>
</body>

</html>