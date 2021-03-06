<html lang="en" dir="ltr">
  <head><?php include 'head.php' ?>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script>function initialize() {
          var myLatlng = new google.maps.LatLng(42.972824, -81.238778);
          var mapOptions = {zoom : 17, center : myLatlng,
            mapTypeId : google.maps.MapTypeId.ROADMAP}
          var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
          var companyIcon = new google.maps.MarkerImage("https://www.google.com/url?sa=i&source=images&cd=&ved=2ahUKEwiB4LmKu6vhAhVCPK0KHQE3AmAQjRx6BAgBEAU&url=http%3A%2F%2Fwakefulnessmagicpill.com%2Fgoogle-maps-marker-2%2Fkisspng-google-map-maker-google-maps-marker-pen-clip-art-places-accefde-popular-google-maps-marker-2%2F&psig=AOvVaw1xbSO1vkUIMuXpO1qn0CjP&ust=1554090138678190",
          new google.maps.Size(128, 81));
          var marker = new google.maps.Marker({position : myLatlng,
            icon : companyIcon,	map : map,	title : "timecoms"});}
    </script> -->
  </head>
<body onload="initialize()">
  <header><?php include 'header.php' ?></header>
    <div class="container">
      <div class="content">
        <div class="content-left">
          <center>
          <p><b>Address: </b></p>
          <p>15 Wellington Road, <br/>London, ON N6C 4J6<br/><br/><br/></p>
          <p><b>Phone: </b></p><p>(519) 681-0666 <br/><br/><br/></p>
        </center>
          <!-- <p><b>Email: </b></p>
          <p><a href="mailto:bischo91@gmail.com">bischo91@gmail.com</a><br/><br/><br/></p> -->
        </div><!--class left-align content-left -->
        <div class="content-right" style="width: 55% padding: 50px">
          <!-- <div id="map_canvas" style="width: 700px; height: 500px;"></div> -->
          <a target="blank" href="https://www.google.com/maps/place/Lenny's+Pizza/@43.2041169,-81.411705,9z/data=!4m8!1m2!2m1!1slenny's+pizza!3m4!1s0x882ef23d00d53eb7:0x1054b5008d59fc70!8m2!3d42.9726591!4d-81.2387251">
            <img src="images\lennysmap_1.png" alt="map"class="map_img"></a>
        </div><!--class righ-align content-right -->
      </div><!--class content -->
    </div><!--class container -->
    <script src="apps.js"></script>
</body>
<footer><?php include 'footer.php'?></footer>
</html>
