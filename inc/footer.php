<footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
					<br>	
			<a class="w3-btn w3-hover-text-indigo" href="https://www.facebook.com/Prada/" title="Facebook"><i class="fa fa-facebook"></i></a>
			  <a class="w3-btn w3-hover-text-purple" href="https://twitter.com/prada" title="Twitter"><i class="fa fa-twitter"></i></a>
			  <a class="w3-btn w3-hover-text-yellow" href="https://plus.google.com/+Prada" title="Google +"><i class="fa fa-google-plus"></i></a>
			  <a class="w3-btn w3-hover-text-red" href="https://www.instagram.com/prada/" title="Instagram"><i class="fa fa-instagram"></i></a>
			  <a class="w3-btn w3-hover-text-light-blue" href="https://www.youtube.com/user/PRADA" title="Youtube"><i class="fa fa-youtube"></i></a>
			   <a class="w3-btn w3-hover-text-indigo" href="https://www.tumblr.com/tagged/prada" title="Tumblr"><i class="fa fa-tumblr"></i></a>
			   <hr class="cata">
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 ">
				<div class="footer-column">
					<div class="footer-link" style="margin-top:5px;"><a href="http://fondazioneprada.org/" target="_blank">Fondazione Prada</a></div>				
					<div class="footer-link"><a href="http://www.pradagroup.com/" target="_blank">Prada Group</a></div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 ">
				<div class="footer-column">
					<div class="footer-link" style="margin-top:5px;"><a href="http://csr.pradagroup.com/" target="_blank">Corporate Social Responsibility</a></div>
					<div class="footer-link"><a href="http://www.lunarossachallenge.com/" target="_blank">LunaRossa</a></div>
				</div>
			 </div>
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 ">
				<div class="footer-column">
					<div class="footer-link style="style="margin-top:5px;">
						<a href="/en/info.html">Legal Notice</a> 
						- 
						<a href="/en/info.html#contentblock_1">Privacy</a> 
						<span id="footer_terms_and_condition">
						- <a href="/en/info.html#contentblock_0">Terms and Conditions of Sale</a>
						</span> 
						<span id="customer_care_link">
						- <a href="#">Contact</a>
						</span>
					</div>
					<div style="color:#828282">&copy; Prada 2007-2016 | P.IVA 10115350158</div>
				</div>
			</div>
        </div>
		</div>
		
        <a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i>VOLTAR AO TOPO</a>
    </footer>
	

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
	<script src="js/carousel.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/creative.min.js"></script>
    <script>
	
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    //#to-top button appears after scrolling
    var fixed = false;
    $(document).scroll(function() {
        if ($(this).scrollTop() > 250) {
            if (!fixed) {
                fixed = true;
                // $('#to-top').css({position:'fixed', display:'block'});
                $('#to-top').show("slow", function() {
                    $('#to-top').css({
                        position: 'fixed',
                        display: 'block'
                    });
                });
            }
        } else {
            if (fixed) {
                fixed = false;
                $('#to-top').hide("slow", function() {
                    $('#to-top').css({
                        display: 'none'
                    });
                });
            }
        }
    });
    // Disable Google Maps scrolling
    // See http://stackoverflow.com/a/25904582/1607849
    // Disable scroll zooming and bind back the click event
    var onMapMouseleaveHandler = function(event) {
        var that = $(this);
        that.on('click', onMapClickHandler);
        that.off('mouseleave', onMapMouseleaveHandler);
        that.find('iframe').css("pointer-events", "none");
    }
    var onMapClickHandler = function(event) {
            var that = $(this);
            // Disable the click handler until the user leaves the map area
            that.off('click', onMapClickHandler);
            // Enable scrolling zoom
            that.find('iframe').css("pointer-events", "auto");
            // Handle the mouse leave event
            that.on('mouseleave', onMapMouseleaveHandler);
        }
        // Enable map zooming with mouse scroll when the user clicks the map
    $('.map').on('click', onMapClickHandler);
    </script>

<!-- End page content -->
</div>

<script>
// Script to open and close sidenav
function w3_open() {
    document.getElementById("mySidenav").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

</script>
<script>
<!-- Google Map Location -->
var myCenter = new google.maps.LatLng(41.878114, -87.629798);

function initialize() {
var mapProp = {
  center: myCenter,
  zoom: 12,
  scrollwheel: false,
  draggable: false,
  mapTypeId: google.maps.MapTypeId.ROADMAP
  };

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
  position: myCenter,
});

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);

// Open and close sidenav
function openNav() {
    document.getElementById("mySidenav").style.width = "60%";
    document.getElementById("mySidenav").style.display = "block";
}

function closeNav() {
    document.getElementById("mySidenav").style.display = "none";
}
</script>


</body>
</html>

