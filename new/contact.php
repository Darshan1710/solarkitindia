

<?php include("../connect.php"); 



 $vysledek = mysqli_query($db,"select * from page1 where url='contact' and zakazat='0'");

    $row = mysqli_fetch_assoc($vysledek);

  

 $title=$row["title"];

 $desc=$row["description"];

 $keyw=$row["keywords"];

 $nazev=$row["nazev"];

 $baner=$row["baner"];

 $text=$row["text"];



include("header.php");

 

 echo $baner;

 

 echo $text;

/* ?>



<div class="section">

 <div class="container">

  <div class="line2">CONTACT<span></span></div>

  <h1 class="shape">sales@solar-kit.in<br>+91-86-5757-1188</h1>

  <h2 class="shape">Office</h2>

  

<p class="shape large">Mounting Solar-Lit Private limited the affaires<br>

Sector-17<br>

Plot-9 Sanpada<br>

Navi Mumbai-400705<br>

</p>

 </div>

</div>

*/?>

<style>

#map .map-content {

	min-width:300px;

max-width:300px;

	margin: 0px;

    background: #fff;

    padding: 20px;

}

#map .map-siteNotice{

	

}

#map .map-content h1{

	color: #111111;

  font-family: Silka;

  font-size: 16px;

  letter-spacing: -0.36px;

  line-height: 26px;

}#map .map-content h1 span{

	color: #47505E;

	display:block;

}

#map .map-content img{

box-sizing: border-box;

  height: 173px;

  width: 145px;

  display:block;

  }

#map .map-content .name{

color: #111111;

  font-family: Adieu;

  font-size: 24px;

  letter-spacing: -0.8px;

  line-height: 30px;

  display:block;

  }

#map .map-content .name span{

  	font-family: Silka;

  font-size: 16px;

  letter-spacing: -0.36px;

  line-height: 26px;

	display:block;

}

#map .map-bodyContent p{

	color: #FF5345;

  font-family: Silka;

  font-size: 16px;

  letter-spacing: -0.36px;

  line-height: 26px;

}  

#map .si-close-button {

    position: relative;

    top: 0;

    right: 0;

    border: 0;

    outline: none;

    font-family: Arial, Baskerville, monospace;

    font-size: 32px;

    cursor: pointer;

    -webkit-appearance: none;

    -moz-appearance: none;

    appearance: none;

    background: #fff;

}

.moje {

    position: fixed;

    left: -153px;

    z-index: 2;

    top: -258px;

}

</style>





         

<div id="map" class="map-canvas section">    </div>  

       

 <?php include("footer.php");?>





 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBktvVlK45M8tpeQwzz8Mc_DtHTXGGMfs8"

  type="text/javascript"></script>

  <script src="http://localhost/solarkitindia.com/dist/snazzy-info-window.min.js"></script>

          

            

          <script>

          	$(function() {

    // Snazzy Map Style - https://snazzymaps.com/style/8097/wy

    var mapStyle = [{"featureType": "all","elementType": "geometry.fill","stylers": [{"visibility": "on"},{"saturation": "-36"}]},{"featureType": "administrative","elementType": "labels.text.fill","stylers": [{"color": "#6195a0"}]},{"featureType": "administrative.country","elementType": "geometry.fill","stylers": [{"saturation": "-7"},{"hue": "#00ffdc"}]},{"featureType": "administrative.country","elementType": "geometry.stroke","stylers": [{"hue": "#00eaff"}]},{"featureType": "administrative.province","elementType": "geometry.fill","stylers": [{"visibility": "on"},{"hue": "#00e3ff"}]},{"featureType": "administrative.locality","elementType": "geometry.fill","stylers": [{"visibility": "on"}]},{"featureType": "administrative.neighborhood","elementType": "geometry.fill","stylers": [{"visibility": "on"},{"hue": "#00ff07"},{"saturation": "33"}]},{"featureType": "administrative.land_parcel","elementType": "geometry.fill","stylers": [{"visibility": "on"},{"saturation": "-25"},{"weight": "0"},{"hue": "#ff0000"}]},{"featureType": "administrative.land_parcel","elementType": "geometry.stroke","stylers": [{"saturation": "4"}]},{"featureType": "landscape","elementType": "geometry.fill","stylers": [{"lightness": "90"},{"gamma": "1"},{"saturation": "-100"},{"weight": "1"}]},{"featureType": "landscape","elementType": "labels.text.fill","stylers": [{"color": "#6195a0"}]},{"featureType": "landscape.man_made","elementType": "geometry.fill","stylers": [{"visibility": "on"},{"saturation": "0"}]},{"featureType": "poi","elementType": "all","stylers": [{"visibility": "off"}]},{"featureType": "poi.medical","elementType": "geometry.fill","stylers": [{"visibility": "on"}]},{"featureType": "poi.medical","elementType": "labels.text.stroke","stylers": [{"saturation": "22"},{"hue": "#00e3ff"}]},{"featureType": "poi.park","elementType": "geometry.fill","stylers": [{"color": "#e6f3d6"},{"visibility": "on"}]},{"featureType": "poi.place_of_worship","elementType": "geometry.fill","stylers": [{"visibility": "on"}]},{"featureType": "poi.school","elementType": "geometry.fill","stylers": [{"visibility": "on"}]},{"featureType": "poi.sports_complex","elementType": "geometry.fill","stylers": [{"visibility": "on"}]},{"featureType": "road","elementType": "all","stylers": [{"visibility": "simplified"},{"saturation": "0"},{"lightness": "65"},{"gamma": "1"}]},{"featureType": "road","elementType": "geometry.fill","stylers": [{"visibility": "on"}]},{"featureType": "road.highway","elementType": "all","stylers": [{"visibility": "simplified"}]},{"featureType": "road.highway","elementType": "geometry.fill","stylers": [{"visibility": "simplified"},{"color": "#f4d2c5"}]},{"featureType": "road.highway","elementType": "labels.text","stylers": [{"color": "#7c7c7c"}]},{"featureType": "road.arterial","elementType": "geometry.fill","stylers": [{"color": "#f4f4f4"}]},{"featureType": "road.arterial","elementType": "labels.text.fill","stylers": [{"color": "#7a7a7a"}]},{"featureType": "road.arterial","elementType": "labels.icon","stylers": [{"visibility": "off"}]},{"featureType": "road.local","elementType": "geometry.fill","stylers": [{"color": "#f7f7f7"}]},{"featureType": "road.local","elementType": "labels.text.fill","stylers": [{"color": "#a5a5a5"}]},{"featureType": "transit","elementType": "all","stylers": [{"visibility": "off"}]},{"featureType": "water","elementType": "all","stylers": [{"visibility": "on"},{"color": "#6c949e"}]},{"featureType": "water","elementType": "geometry.fill","stylers": [{"color": "#ecf6f8"}]}];

       

    

var locations = [<?php

$vysledek = mysqli_query($db,"select * from contact where zakazat='0' order by city asc");

    while ($row = mysqli_fetch_assoc($vysledek)) {

    	echo "["

    	.'"'.$row["lat"].'",'

    	.'"'.$row["lng"].'",'

    	.'"'.$row["company"].'<span>'.$row["city"].'</span>",'

    	.'"'.$row["name"].'<span>'.$row["office"].'</span>",'

    	.'"'.$row["email"].'<br />'.$row["phone"].'<br />'.$row["text"].'",';

		

    	if($row["img"]) echo '"'."<img src='{$row["img"]}'>".'"'; else echo '""';    	

    	echo "],";

	}/*

?>



["19.05711","73.00343",

"Mounting Solar-Kit Private Limited Corporate<span>Office</span>",

"www.solar-kit.in",

"Contact Number: 8657571188<br>Email: sales@solar-kit.in<br>Address: 1002, 10th Floor, The Affairs, Palm Beach, Sanpada, Navi Mumbai, Maharashtra 400705",

"http://localhost/solarkitindia.com/images/portrait/portrait2.png"],



["18.52043","73.85674",

"Mounting Solar-kit Private Limited<span>Pune</span>",

"Mr. Sachin Yeskar<span>Manager</span>",

"sachin.yeskar@solar-kit.in<br> 9321939172",

"http://localhost/solarkitindia.com/images/portrait/portrait2.png"],



["17.38504","78.48667",

"Mounting Solar-kit Private Limited<span>Hyderabad</span>",

"Mr. Prudhvi Raju Pedapalli<span>Senior Manager</span>",

"prudhvi@solar-kit.in<br> 9321939174",

"http://localhost/solarkitindia.com/images/portrait/portrait2.png"],



["22.25865","71.19238",

"Mounting Solar-kit Private Limited<span>Gujarat</span>",

"Mr. Aditya Singh<span>Manager</span>",

"aditya.singh@solar-kit.in<br> 8657571196",

"http://localhost/solarkitindia.com/images/portrait/portrait2.png"],



["28.53021","77.41454",

"Mounting Solar-kit Private Limited<span>Noida</span>",

"Mr. Ujjawal Kishore<span>Manager</span>",

"ujjawal.kishore@solar-kit.in <br> 9321342272"],

"http://localhost/solarkitindia.com/images/portrait/portrait2.png",



["13.08268","80.27071",

"Mounting Solar-kit Private Limited<span>Chennai</span>",

"www.solar-kit.in",

"Email: sales@solar-kit.in<br>Contact No: 8657571194",

"http://localhost/solarkitindia.com/images/portrait/portrait2.png"],



["27.0238","74.21793",

"Mounting Solar-kit Private Limited<span>Rajasthan</span>",

"Mr. Sumit Kumar<span>Manager</span>",

"sumit.kumar@solar-kit.in, +91 8657571190",

"http://localhost/solarkitindia.com/images/portrait/portrait2.png"],



["26.84669","80.94616",

"Mounting Solar-kit Private Limited<span>Lucknow</span>",

"Mr. Ujjawal Kishore<span>Manager</span>",

"ujjawal.kishore@solar-kit.in <br> 9321342272",

"http://localhost/solarkitindia.com/images/portrait/portrait2.png"],



["25.59409","85.13756",

"Mounting Solar-kit Private Limited<span>Bihar</span>",

"Mr. Ujjawal Kishore<span>Manager",

"ujjawal.kishore@solar-kit.in <br> 9321342272",

"http://localhost/solarkitindia.com/images/portrait/portrait2.png"],



["20.29605","85.82453",

"Mounting Solar-kit Private Limited<span>Bhubaneswar</span>",

"Mr. Prudhvi Raju Pedapalli<span>Senior Manager</span>",

"prudhvi@solar-kit.in, Mobile: 9321939174",

"http://localhost/solarkitindia.com/images/portrait/portrait2.png"],



["21.1458","79.08815",

"Mounting Solar-kit Private Limited<span>Nagpur</span>",

"Mr. Sachin Yeskar<span>Manager</span>",

"sachin.yeskar@solar-kit.in<br> 9321939172",

"http://localhost/solarkitindia.com/images/portrait/portrait2.png"],



["19.07598","72.87765",

"Mounting Solar-kit Private Limited<span>Mumbai</span>",

"Mr. Aditya Singh<span>Manager</span>",

"aditya.singh@solar-kit.in<br> 8657571196",

"http://localhost/solarkitindia.com/images/portrait/portrait2.png"],



["16.50617","80.64801",

"Mounting Solar-kit Private Limited<span>Vijayawada</span>",

"Mr. Prudhvi Raju Pedapalli<span>Senior Manager</span>",

"prudhvi@solar-kit.in<br> 9321939174",

"http://localhost/solarkitindia.com/images/portrait/portrait2.png"],



["30.90096","75.85727",

"Mounting Solar-kit Private Limited<span>Ludhiana</span>",

"Mr. Sumit Kumar<span>Manager</span>",

"sumit.kumar@solar-kit.in, +91 8657571190",

"http://localhost/solarkitindia.com/images/portrait/portrait2.png"],



["12.97159","77.59456",

"Mounting Solar-Kit Private Limited<span>Bengaluru</span>",

"Mr: Darshan Mamledesai<span>Vice President</span>",

"darshan@solar-kit.in, Phone: +91 8657571194",

"http://localhost/solarkitindia.com/images/portrait/portrait2.png"],



["11.01684","76.95583",

"Mounting Solar-kit Private Limited<span>Coimbatore</span>",

"www.solar-kit.in",

"Email: sales@solar-kit.in<br>Contact No: 8657571194",

"http://localhost/solarkitindia.com/images/portrait/portrait2.png"],



["28.46674","77.04311",

"Mounting Solar-kit Private Limited, Gurugram</span>",

"Mr. Sumit Kumar<span>Manager</span>",

"sumit.kumar@solar-kit.in, +91 8657571190",

"http://localhost/solarkitindia.com/images/portrait/portrait2.png"],



["17.68681, 83.21848",

"mounting Solar-kit Private Limited<span>Visakhapatnam</span>",

"Mr. Prudhvi Raju Pedapalli<span>Senior Manager</span>",

"prudhvi@solar-kit.in<br> 9321939174",

"http://localhost/solarkitindia.com/images/portrait/portrait2.png"]*/?>

];



 

  var homeIcons = {

    url: 'http://localhost/solarkitindia.com/images/icons/Pin-home-default@2x'

  };

  var activeIcon = {

    url: 'http://localhost/solarkitindia.com/images/icons/Pin-office-active@2x.png'

  };

  var normalIcon = {

    url: "http://localhost/solarkitindia.com/images/icons/Pin-office-default@2x.png"

  };

     

    // Create the map

    var map = new google.maps.Map($('.map-canvas')[0], {

        zoom: 5,

        styles: mapStyle,

        center: new google.maps.LatLng(19.05711,73.00343)

    });



    // Add a custom marker

    var markerIcon = {

        path: 'M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z',

        fillColor: '#e25a00',

        fillOpacity: 0.95,

        scale: 3,

        strokeColor: '#fff',

        strokeWeight: 3,

        anchor: new google.maps.Point(12, 24)

    };

    

       

    $.each(locations, function(i, e) {

        var marker = new google.maps.Marker({

            map: map,

            icon: normalIcon,

            position: new google.maps.LatLng(locations[i][0], locations[i][1])

        });

       

       

        var info = new SnazzyInfoWindow($.extend({}, {

            marker: marker,

             panOnOpen: false,

             wrapperClass:"moje",

             content: '<div class="map-content">' +

    '<h1>' + locations[i][2] +'</h1>' +

    '<div class="map-bodyContent"><div>'+locations[i][5]+'<span class="name">' + locations[i][3] + '</span><p>' + locations[i][4] + '</p></div></div></div>',

          callbacks: {

            beforeOpen: function() {

                var wrapper = $(this.getWrapper());

                wrapper.find('  si-float-wrapper').hide();

            },

            afterClose: function() {

                var wrapper = $(this.getWrapper());

                wrapper.find('  si-float-wrapper').hide();

            }

        }

         

           

        }));

       

        

    

    

     });

     

    

});



          </script>

          

          

      

        

       

    

 <?php /*         

          

    <script type="text/javascript">

function initMap() {	

var mapOptions = {

                    zoom: 5,

                    center: new google.maps.LatLng(19.05711,73.00343),

                    styles: [{

        "featureType": "all",

        "elementType": "geometry.fill",

        "stylers": [..........]};









    

var mapElement = document.getElementById('map');

var map = new google.maps.Map(mapElement, mapOptions);

var infowindow = new google.maps.InfoWindow();

     

const image = "http://localhost/solarkitindia.com/images/icons/Pin-office-default@2x.png";

     

   for (i = 0; i < locations.length; i++) {

   	if (i=0){image='http://localhost/solarkitindia.com/images/icons/Pin-home-default@2x';}

        marker = new google.maps.Marker({

            position: new google.maps.LatLng(locations[i][0], locations[i][1]),

            map: map,

            icon: image            

        });

    



 google.maps.event.addListener(marker, 'click', (function(marker, i) {

            return function() {            	

              infowindow.setContent('<div class="map-content">' +

    '<div class="map-siteNotice">' +

    "</div>" +

    '<h1>' + locations[i][2] +'</h1>' +

    '<div class="map-bodyContent"><div><img src="'+locations[i][5]+'"><span class="name">' + locations[i][3] + '</span><p>' + locations[i][4] + '</p></div></div></div>');

               infowindow.open(map, marker);

            }

          })(marker, i));

    }            

            }

</script>





<div id="map" class="section"></div>  

            

 <?php include("footer.php");?>





*/?>



 





 

  

<?php /* https://developers.google.com/maps/documentation/javascript/examples/icon-simple 

 *   var homeIcons = {

    url: 'http://localhost/solarkitindia.com/images/icons/Pin-home-default@2x'

  };

  var activeIcon = {

    url: 'http://localhost/solarkitindia.com/images/icons/Pin-office-active@2x.png'

  };

  var normalIcon = {

    url: "http://localhost/solarkitindia.com/images/icons/Pin-office-default@2x.png"

  };

 * */

?>

