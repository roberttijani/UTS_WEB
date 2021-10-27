<!DOCTYPE html>
<html lang="en">
<head>
<!--
Metro City Template
http://www.templatemo.com/tm-470-metro-city
-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Batu City - Maps</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/templatemo-style.css" rel="stylesheet">

	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />

    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>

	<style>
        #mapid {
            height: 500px;
        }

    </style>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="about">
	<div class="container">
		<div class="row">
			<div class="tm-header">
				<a href="index.html" class="tm-site-name">Batu City</a>
				<div class="mobile-menu-icon">
	              <i class="fa fa-bars"></i>
	            </div>
				<nav class="tm-nav">
					<ul>
						<li><a href="/home">Home</a></li>
						<li><a href="/maps" class="active">Maps</a></li>
					</ul>
				</nav>
			</div>			
		</div>		
	</div>
	<div id="mapid"></div>

	<div class="">
	</div>	
	<div class="container">
		<div class="row">
			<div class="tm-about-left tm-about-lr tm-white-box">
				<article class="tm-about-text">
					<header class="text-uppercase">
						<h2 class="tm-h2">Objek Wisata Keluarga Populer </h2>
						<h3 class="tm-red-text">di Kota Batu, Jawa Timur</h3>	
					</header>
					<div class="tm-intro-description tm-gray-text">
						<p class="tm-about-text-block"><span class="tm-blue-text">Batu</span>, kota berhawa sejuk yang bertetangga dengan <span class="tm-blue-text"> Malang </span>dan Kediri dikenal sebagai gudangnya objek wisata. Kota yang dulunya merupakan bagian dari Kabupaten Malang dan lalu berstatus kota administratif itu kini sudah menjadi kota otonom. Sejak berdiri sendiri, Batu telah berbenah mengembangkan potensi wisatanya. Hasilnya, sebagian besar wisata populer dan kekinian yang ada di Malang Raya saat ini merupakan 'produk' kota Batu.</p>
						<p class="tm-about-text-block">Apa saja objek wisata keren yang dimiliki Batu? Berikut ini beberapa wisata Batu yang bisa dipertimbangkan. Cek status operasionalnya dulu, ya. Pasalnya, banyak tempat wisata yang ditutup sementara untuk mendukung anjuran social distancing dari pemerintah.</p>
						<ul class="tm-red-circle-check tm-about-text-block">
							<li><i class="fa fa-check-circle tm-check"></i> Alun-Alun Kota Wisata Batu</li>
							<li><i class="fa fa-check-circle tm-check"></i> Jawa Timur Park 1</li>
					        <li><i class="fa fa-check-circle tm-check"></i> Jawa Timur Park 2</li>
					        <li><i class="fa fa-check-circle tm-check"></i> Jawa Timur Park 3</li>
					    </ul>
					    <a href="#" class="tm-button tm-red-button tm-about-text-block">Lihat Map</a>
					</div>
				</article>				
			</div>
			<div class="tm-about-right tm-about-lr">
				<!-- <img src="img/about-1.jpg" alt="Image" class="tm-about-img"> -->
				<div class="tm-2-columns">
					<div>
						<img src="img/1.jpg" alt="image" class="tm-about-img-4">
					</div>
					<div class="tm-about-container tm-position-relative tm-light-gray-box">
						<h2 class="tm-h2 tm-intro-title">Jatim Park <span class="tm-blue-text">1</span></h2>
						<p class="tm-gray-text">Jika memasuki Batu dari Malang, Anda akan menemui Jatim Park 1...</p>
						<a href="#"><i class="fa fa-3x fa-angle-down tm-blue-text"></i></a>
					</div>					
				</div>
				<div class="tm-2-columns">
					<div class="tm-about-container tm-position-relative tm-light-gray-box">
						<h2 class="tm-h2 tm-about-title">Jatim Park <span class="tm-blue-text">2</span></h2>
						<p class="tm-gray-text">Sudah bosan dengan Jatim Park 1, main ke Jatim Park 2 yang berlokasi di Jalan Oro-Oro Ombo nomor 9...</p>
						<a href="var m1"><i class="fa fa-3x fa-angle-down tm-blue-text"></i></a>
					</div>
					<div>
						<img src="img/2.jpg" alt="image" class="tm-about-img-2">						
					</div>					
				</div>
			</div>
		</div>
		<div class="row">
			<div class="tm-about-left">
				<div class="tm-video-box">
					<div class="tm-video-box-overlay">
						<p class="tm-video-description"><span class="tm-red-text">Tempat Wisata</span><br>Rekomendasi</p>
						<a href="/home" class="tm-play absolute-center tm-flex-center">
							<i class="fa fa-4x fa-play-circle tm-red-button-alpha"></i>
						</a>						
					</div>
					<img src="img/about-3.jpg" alt="Image" class="tm-video-img">
				</div>
			</div>
			<div class="tm-about-right">
				<div class="tm-2-columns">
					<div>
						<img src="img/3.jpg" alt="image" class="tm-about-img-4">
					</div>
					<div class="tm-about-container tm-position-relative tm-light-gray-box">
						<h2 class="tm-h2 tm-intro-title">Jatim Park <span class="tm-blue-text">3</span></h2>
						<p class="tm-gray-text">Terbaru dari Jatim Park Group adalah Jatim Park 3 yang beralamat di Jalan Raya Ir. Soekarno nomor 144...</p>
						<a href=""><i class="fa fa-3x fa-angle-down tm-blue-text"></i></a>
					</div>					
				</div>
			</div>
		</div>	
		<div class="row">
			<div class="tm-block-2-container">
				<div class="tm-block-2 tm-block-order-2">
					<div class="tm-footer-block tm-blue-box tm-footer-text-container">
						<h3 class="tm-footer-text-title">Batu City</h3>
						<p class="tm-footer-text-description">Hakaryo Guno Mamayu Bawono</p>
					</div>
				</div>				
				<div class="tm-block-2 tm-block-order-1">
					<p class="tm-footer-block tm-copyright-text">
                    	Copyright &copy; 2021 Malang 
                    	| Design: <a rel="nofollow" href="http://www.templatemo.com/tm-470-metro-city" target="_parent">Rober Tijani</a>
                    </p>
				</div>
			</div>				
		</div>			  			  	
	</div>
	
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
	<script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->

</body>

<script>
    var mymap = L.map('mapid').setView([-7.8806559,112.5047944], 19);
    L.tileLayer(
        'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 18,
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1
        }).addTo(mymap);

    // ------------------ destination 1 ---------------------------
    var m1 = L.marker([-7.8841636,112.5238234]).addTo(mymap);
    m1.bindPopup("<h1>Jatim Park 1</h1> <img src = '/img/maps/1.jpg' />")

	// ------------------ destination 2 ---------------------------
    var m2 = L.marker([-7.8696531,112.5243162]).addTo(mymap);
    m2.bindPopup("<h1>Alun-alun Batu</h1> <img src = '/img/maps/2.jpg' />")

	// ------------------ destination 3 ---------------------------
    var m3 = L.marker([-7.8889522,112.5274289]).addTo(mymap);
    m3.bindPopup("<h1>Jatim Park 2</h1> <img src = '/img/maps/3.jpg' />")

	// ------------------ destination 4 ---------------------------
    var m4 = L.marker([-7.8971285,112.550914]).addTo(mymap);
    m4.bindPopup("<h1>Jatim Park 3</h1> <img src = '/img/maps/4.jpg' />")

</script>

</html>
