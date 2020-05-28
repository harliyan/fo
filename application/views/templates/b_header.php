<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta itemprop="image" content="<?= base_url('') ?>favicon.ico" />
  <title><?= $title; ?></title>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- icon -->
  <link rel="shortcut icon" href="<?php print base_url(''); ?>/favicon.ico" type="image/x-icon">
  <link rel="icon" href="<?php print base_url(''); ?>/favicon.ico" type="image/x-icon">

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Data table -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" />

  <style type="text/css">
    #map-canvas {
      height: 100%;
    }
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }
    
    .my-custom-scrollbar {
      position: relative;
      /*height: 350px;*/
      overflow: auto;
    }
    .table-wrapper-scroll-y {
      display: inline-flex;
    }
  </style>

</head>
<body id="page-top">
  <div id="wrapper">

   <!-- api maps -->
   <!--    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWcWBbOq-dZBEGsVT4HT9bOGwSFtpS5_c&token=79499"></script> -->

   <!-- API DEV -->
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnoX8LSgSg5-pRiF5_IzZ313VsNZzuo-4"
   async defer></script>

   <script>
    var map;
    var markersArray = [];
    var infoWindow;
    getLocation();

    function initialize(position) {
    /*
    if(position){
      var lat = -6.139898771218396;
      var lng = 106.80546484536126;
    }
    else{
      */
      var lat = position.coords.latitude;
      var lng = position.coords.longitude;
      
    //}

    var haightAshbury = new google.maps.LatLng(lat,lng);
    var mapOptions = {
      zoom: 12,
      center: haightAshbury,
      mapTypeId:google.maps.MapTypeId.ROADMAP
    };
    map =  new google.maps.Map(document.getElementById("googleMap"), mapOptions);
    
    addMarker(haightAshbury);
  } 
  //google.maps.event.addDomListener(window, 'load', initialize);

  var x = document.getElementById("demo");
  getLocation();
  showOverlays();
  function getLocation() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(initialize);
    } else { 
      x.innerHTML = "Geolocation is not supported by this browser.";
    }
  }

  function showPosition(position) {
    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;
  }

  function addMarker(location) {
    marker = new google.maps.Marker({
      position: location,
      map: map
    });
    markersArray.push(marker);
    
    $('#latitude').val(location.lat());
    $('#longitude').val(location.lng());

  }

  function clearOverlays() {
    if (markersArray) {
      for (i in markersArray) {
        markersArray[i].setMap(null);
      }
    }
  }


  function showOverlays() {
    if (markersArray) {
      for (i in markersArray) {
        markersArray[i].setMap(map);
      }
    }
  }


  function deleteOverlays() {
    if (markersArray) {
      for (i in markersArray) {
        markersArray[i].setMap(null);
      }
      markersArray.length = 0;
    }
  }
</script>



<!-- INSERT API MAP -->
<script>
// variabel global marker
var marker;
function taruhMarker(peta, posisiTitik){
    
    if( marker ){
      // pindahkan marker
      marker.setPosition(posisiTitik);
    } else {
      // buat marker baru
      marker = new google.maps.Marker({
        position: posisiTitik,
        map: peta
      });
    }
  
     // isi nilai koordinat ke form
    document.getElementById("lat").value = posisiTitik.lat();
    document.getElementById("lng").value = posisiTitik.lng();
    
}
  
function initialize() {
  var propertiPeta = {
    center:new google.maps.LatLng(-6.895863, 109.662573),
    zoom:12,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  
  var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
  
  // even listner ketika peta diklik
  google.maps.event.addListener(peta, 'click', function(event) {
    taruhMarker(this, event.latLng);
  });

}


// event jendela di-load  
google.maps.event.addDomListener(window, 'load', initialize);
  

</script>


