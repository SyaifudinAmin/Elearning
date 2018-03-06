
<?php

session_start();
$user=$_POST["email"];
$password=$_POST["password"];
//===============
$dbuser="admin@gmail.com";
$dbpass="admin123";
//===============
if(($user==$dbuser)&&($password==$dbpass)){
}
else{
    if(isset($_SESSION["gagal"])){
        $_SESSION["gagal"]++;
    }
    else{
        $_SESSION["gagal"]=1;
    }
    header("location:index.php");
}

?>

 <!DOCTYPE html> <!--[if IE 7]> <html class="ie ie7" dir="ltr" lang="id-ID"> <![endif]--> <!--[if IE 8]> <html class="ie ie8" dir="ltr" lang="id-ID"> <![endif]--> <!--[if !(IE 7) | !(IE 8) ]><!--> <html dir="ltr" lang="id-ID"> <!--<![endif]--> <head> <meta name=viewport content="width=device-width"/> <title>Universitas Teknologi Yogyakarta</title> <link rel=profile href="http://gmpg.org/xfn/11"/> <link rel=pingback href="http://uty.ac.id/xmlrpc.php"/> <!--[if lt IE 9]> <script src=http://uty.ac.id/isi/themes/beritaku/includes/scripts/commons/html5.js></script> <![endif]--> <link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css"><script type="text/javascript">
var TICKER_DELAY = 7;
var SLIDER_DELAY = 3000;
var SLIDER_SPEED = 500;
</script><link rel="alternate" type="application/rss+xml" title="Universitas Teknologi Yogyakarta &raquo; Feed" href="http://uty.ac.id/feed/" />
<link rel="alternate" type="application/rss+xml" title="Universitas Teknologi Yogyakarta &raquo; Umpan Komentar" href="http://uty.ac.id/comments/feed/" />
<link rel='stylesheet' id='theme-style-css'  href='http://uty.ac.id/isi/themes/beritaku/style.css?ver=1.3.1' type='text/css' media='all' />
<style type='text/css'>
a,

.news-box.break li h3.title a:hover,#flexible-home-layout-section .news-box .meta a:hover,.post-wrapper .meta>div:hover,.related-post .meta a:hover,.related-news .meta a:hover,.post-header .meta a:hover,#copyright a:hover,#selectnav2{color:black}::-webkit-scrollbar-thumb{background-color:#FF4D00}#primary{background:#A3ABC2;padding:20px}#side{float:left;width:300px;margin-top:460px}.news-box.break h2 a{color:white;padding:0 40px 0 20px;display:block;background:url(images/break-separate.png) no-repeat right center;height:50px;line-height:50px}#drop-down-menu{background:#FF4D00;height:50px;font-size:16px;z-index:999;-webkit-box-shadow:0 10px 30px 0 rgba(0,0,0,0.9);-moz-box-shadow:0 10px 30px 0 rgba(0,0,0,0.9);box-shadow:0 10px 30px 0 rgba(0,0,0,0.9)}#drop-down-menu ul.sub-menu li a{display:block;background:#222;width:200px;padding:10px 20px;color:white;font-size:12px;-webkit-box-shadow:0 1px 5px 0 rgba(0,0,0,0.75);-moz-box-shadow:0 1px 5px 0 rgba(0,0,0,0.75);box-shadow:0 1px 5px 0 rgba(0,0,0,0.75);opacity:1}#flexible-home-layout-section .news-box.slider{margin-bottom:20px}#flexible-home-layout-section .news-box.slider .item-thumbnail{width:1040px;height:450px;z-index:0}#flexible-home-layout-section .news-box.three{width:100%}#flexible-home-layout-section .news-box h2.title{color:white;background:#FF4D00}#flexible-home-layout-section .news-box h2.title a{font-size:16px;font-weight:bold;padding:3px 10px;color:white}#side h2.widget-title,#side h2.widget-title span.active{color:white;font-size:16px;font-weight:bold;padding:3px 10px;font-family:;background:black}#flexible-home-layout-section .news-box.three h2.title a{color:white}.widget_feed_data_widget .item .title{color:black;font-size:14px}#flexible-home-layout-section .news-box.three h2.title{padding:2px 0 2px 0;margin-right:2px;margin-bottom:5px}#flexible-home-layout-section .news-box.three h3.title a{margin-top:5px;color:black;font-weight:bold;font-size:14px;line-height:16px}#flexible-home-layout-section .news-box.three h3.title{line-height:14px}#flexible-home-layout-section .news-box.slider .dots li.active{background-color:red}#flexible-home-layout-section .news-box.slider h3.title a{font-family:;font-size:24px;text-shadow:2px 2px 2px rgba(0,0,0,1);opacity:1}.blog-title{font-size:40px;font-weight:bold;color:#000;margin-left:20px}.blog-title a{font-size:40px;font-weight:bold;color:white;text-shadow:0 0 0 #797679,1px 1px 0 #646164,2px 2px 0 #4e4b4e,3px 3px 0 #383538,4px 4px 0 #221f22,5px 5px 4px rgba(0,0,0,0.6),5px 5px 1px rgba(0,0,0,0.5),0 0 4px rgba(0,0,0,.2)}.blog-title a:hover{color:#FF4D00}#flexible-home-layout-section .news-box.slider h3.title a:hover{color:#bbb}#flexible-home-layout-section .news-box.slider .meta a{font-size:20px;text-transform:uppercase;padding:10px 20px;font-weight:bold}.header-line-2,.header-line-1{background-color:#443e6f}#top-page-list ul li a{color:white;font-weight:bold}#flexible-home-layout-section .news-box.hot h2.title,#flexible-home-layout-section .news-box.hot h2.title a{font-size:0;padding:0;background:transparent}#flexible-home-layout-section .news-box.hot .item-first{background:#A3ABC2}#flexible-home-layout-section .news-box.slider h2.title,#flexible-home-layout-section .news-box.slider h2.title a{font-size:0;padding:0;background:transparent}#drop-down-menu>div>ul>li:hover>a{background:black;color:white}#drop-down-menu>div>ul>li>a{font-size:14px;color:white}#drop-down-menu ul.sub-menu li a:hover,.tagcloud a,#respond form #submit,#contact-form .show-all a{background-color:#555;color:white}.post-body blockquote{border-top-color:#FF4D00}body {
background-color: #000;
}
body,
#drop-down-menu ul.sub-menu li a{
	font-family: Arial;
}
#drop-down-menu,
.widget_feed_data_widget .item .title a,
#flexible-home-layout-section .news-box h2.title,
#flexible-home-layout-section .news-box h3.title,
h1.post-title,
.post-body blockquote,
.post-apps a,
.zoom-text span,
h2.archive-post-title,

.widget_feed_data_widget .item .title,
#footer-section .widget-title,
.tagcloud a,
#post-footer-section .widget .widget-title ,
.share-post .title,
.related-news h3.title,
.post-author .author-info h4,
.page-numbers,
.paginations .item a,
#reply-title,
.img-404,
a.home-from-none,
#contact-form .label,
#contact-form .show-all a,
#selectnav2 {
	font-family: 'Oswald', sans-serif;
}
</style>
<!--[if lt IE 9]>
<link rel='stylesheet' id='ie-style-css'  href='http://uty.ac.id/isi/themes/beritaku/includes/scripts/commons/ie.css?ver=1.3.1' type='text/css' media='all' />
<![endif]-->
<!--[if IE 8]>
<link rel='stylesheet' id='ie8-style-css'  href='http://uty.ac.id/isi/themes/beritaku/includes/scripts/commons/ie8.css?ver=1.3.1' type='text/css' media='all' />
<![endif]-->
<script type='text/javascript' src='http://uty.ac.id/ikutan/js/jquery/jquery.js?ver=1.7.1'></script>
<script type='text/javascript' src='http://uty.ac.id/isi/themes/beritaku/includes/scripts/ticker/ticker.js?ver=1.3.1'></script>
<script type='text/javascript' src='http://uty.ac.id/isi/themes/beritaku/includes/scripts/slider/slider.js?ver=1.3.1'></script>
<script type='text/javascript' src='http://uty.ac.id/isi/themes/beritaku/includes/scripts/commons/global.js?ver=1.3.1'></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://uty.ac.id/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://uty.ac.id/ikutan/wlwmanifest.xml" /> 
<meta name="generator" content="Mbahwo 3.3.2" />
<style type="text/css">#wpadminbar #adminbarsearch{display:none}</style>
<link rel="shortcut icon" type="image/png" href="http://uty.ac.id/isi/themes/beritaku/images/favicon.png"/><style type="text/css" media="screen"> 
  html { margin-top: 0px !important; } 
  * html body { margin-top: 0px !important; } 
  </style> <script>(function(d,e,j,h,f,c,b){d.GoogleAnalyticsObject=f;d[f]=d[f]||function(){(d[f].q=d[f].q||[]).push(arguments)},d[f].l=1*new Date();c=e.createElement(j),b=e.getElementsByTagName(j)[0];c.async=1;c.src=h;b.parentNode.insertBefore(c,b)})(window,document,"script","//www.google-analytics.com/analytics.js","ga");ga("create","UA-54984069-1","auto");ga("send","pageview");</script> </head> <body class="home blog"> <div class=wide id=wrapper> <header id=header> <div class=header-line-1> <nav id="top-page-list"><div class="menu-menu-atas-container"><ul id="menu-menu-atas" class="page-list"><li id="menu-item-285" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-285"><a href="http://uty.ac.id/rektorat-uty/">Tentang UTY</a></li>
<li id="menu-item-11122" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11122"><a href="http://uty.ac.id/pimpinan-dan-struktural/">Pimpinan dan Struktural</a></li>
</ul></div></nav> <form method="get" id="searchform" action="http://uty.ac.id">
	<input id="search-text" name="s" onblur="if (this.value == '') {this.value = 'Search...';}" onfocus="if (this.value == 'Search...') {this.value = '';}" type="text" value="Search...">
</form> <div style="padding:15px 10px;color:#fff;font-weight:bold;float:right;font:12px arial"> <b><a  style="color:#fff" href="http://uty.ac.id/masuk.php?action=register">Register</a> | 
<a  style="color:#fff" href="http://uty.ac.id/masuk.php?redirect_to=http%3A%2F%2Futy.ac.id%2Fkelola%2F&reauth=1">Login</a></b> </div> <div class=clear></div> </div> <div class=clear></div> <div class="header-line-2 table"> <div class=tr> <div class=td> <a href=http://uty.ac.id><img style="padding:20px 20px 20px 20px" src=http://uty.ac.id/isi/uploads//2014/01/logo-UTY-2013-WEB1.png width=300></a> </div> <div class=td>  </div> </div> <div class=clear></div> </div> <div class=clear></div> <div class=header-line-3> <nav id="drop-down-menu"><div class="menu-kiri-container"><ul id="menu-kiri" class="page-list"><li id="menu-item-7073" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7073"><a href="http://pmb.uty.ac.id">>> Informasi PMB UTY</a></li>
<li id="menu-item-10875" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10875"><a target="_blank" href="https://sinta.uty.ac.id">Aplikasi Orang Tua</a></li>
<li id="menu-item-6993" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6993"><a href="#">Fakultas</a>
<ul class="sub-menu">
	<li id="menu-item-155" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-155"><a href="http://uty.ac.id/category/fakultas-uty/feb-uty/">Fakultas Ekonomi dan Bisnis</a>
	<ul class="sub-menu">
		<li id="menu-item-270" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-270"><a href="http://uty.ac.id/fakultas-eknomoi-dan-bisnis/">Tentang FEB</a></li>
		<li id="menu-item-157" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-157"><a href="http://uty.ac.id/category/fakultas-uty/feb-uty/d3-akuntansi/">D3 Akuntansi</a></li>
		<li id="menu-item-156" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-156"><a href="http://uty.ac.id/category/fakultas-uty/feb-uty/akuntansi-fitb-uty/">Akuntansi</a></li>
		<li id="menu-item-159" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-159"><a href="http://uty.ac.id/category/fakultas-uty/feb-uty/manajemen/">Manajemen</a></li>
	</ul>
</li>
	<li id="menu-item-165" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-165"><a href="http://uty.ac.id/category/fakultas-uty/fhum-uty/">Fakultas Humaniora</a>
	<ul class="sub-menu">
		<li id="menu-item-272" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-272"><a href="http://uty.ac.id/fakultas-humaniora/">Tentang FHUM</a></li>
		<li id="menu-item-1396" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1396"><a href="http://uty.ac.id/category/fakultas-uty/fhum-uty/d3-jepang/">D3 Jepang</a>
		<ul class="sub-menu">
			<li id="menu-item-11278" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11278"><a href="http://uty.ac.id/visi-misi-program-studi-bahasa-jepang/">Visi &#038; Misi Program Studi Bahasa Jepang</a></li>
			<li id="menu-item-11279" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11279"><a href="http://uty.ac.id/category/fakultas-uty/fhum-uty/d3-jepang/">Berita</a></li>
		</ul>
</li>
		<li id="menu-item-168" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-168"><a href="http://uty.ac.id/category/fakultas-uty/fhum-uty/inggris/">Sastra Inggris</a>
		<ul class="sub-menu">
			<li id="menu-item-11263" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11263"><a href="http://uty.ac.id/visi-misi-program-studi-s1-sastra-inggris/">Visi &#038; Misi Program Studi Sastra Inggris</a></li>
			<li id="menu-item-11264" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11264"><a href="http://uty.ac.id/category/fakultas-uty/fhum-uty/inggris/">Berita</a></li>
		</ul>
</li>
		<li id="menu-item-11280" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11280"><a href="#">Bahasa Inggris</a>
		<ul class="sub-menu">
			<li id="menu-item-11281" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11281"><a href="http://uty.ac.id/visi-misi-program-studi-bahasa-inggris/">Visi &#038; Misi Program Studi Bahasa Inggris</a></li>
			<li id="menu-item-11282" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11282"><a href="http://uty.ac.id/category/fakultas-uty/fhum-uty/inggris/">Berita</a></li>
		</ul>
</li>
		<li id="menu-item-11289" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11289"><a href="#">Ilmu Komunikasi</a>
		<ul class="sub-menu">
			<li id="menu-item-11286" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11286"><a href="http://uty.ac.id/visi-misi-program-studi-ilmu-komunikasi/">Visi &#038; Misi Program Studi Ilmu Komunikasi</a></li>
			<li id="menu-item-10493" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10493"><a href="http://uty.ac.id/category/fakultas-uty/fhum-uty/ilmu-komunikasi/">Berita</a></li>
		</ul>
</li>
		<li id="menu-item-11290" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11290"><a href="#">Psikologi</a>
		<ul class="sub-menu">
			<li id="menu-item-11287" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11287"><a href="http://uty.ac.id/visi-misi-program-studi-psikologi/">Visi &#038; Misi Program Studi Psikologi</a></li>
			<li id="menu-item-3338" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3338"><a href="http://uty.ac.id/category/fakultas-uty/fhum-uty/fapsi-uty/">Berita</a></li>
		</ul>
</li>
		<li id="menu-item-11291" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11291"><a href="#">Hubungan Internasional</a>
		<ul class="sub-menu">
			<li id="menu-item-11288" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11288"><a href="http://uty.ac.id/visi-misi-program-studi-hubungan-internasional/">Visi &#038; Misi Program Studi Hubungan Internasional</a></li>
			<li id="menu-item-10492" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10492"><a href="http://uty.ac.id/category/fakultas-uty/fhum-uty/hubungan-internasional/">Berita</a></li>
		</ul>
</li>
	</ul>
</li>
	<li id="menu-item-1682" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1682"><a href="http://uty.ac.id/category/fakultas-uty/ftie/">Fakultas Teknologi Informasi dan Elektro</a>
	<ul class="sub-menu">
		<li id="menu-item-11179" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11179"><a href="http://uty.ac.id/fakultas-teknologi-informasi-dan-elektro/">Tentang FTIE</a></li>
		<li id="menu-item-2204" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2204"><a href="http://uty.ac.id/category/fakultas-uty/ftie/d3-manajemen-informatika/">D3 Sistem Informasi</a></li>
		<li id="menu-item-2289" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2289"><a href="http://uty.ac.id/category/fakultas-uty/ftie/sistem-informasi/">S1 Sistem Informasi</a></li>
		<li id="menu-item-11373" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11373"><a href="#">Informatika</a>
		<ul class="sub-menu">
			<li id="menu-item-11372" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11372"><a href="http://uty.ac.id/visi-misi-program-studi-informatika/">Visi &#038; Misi Program Studi Informatika</a></li>
			<li id="menu-item-180" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-180"><a href="http://uty.ac.id/category/fakultas-uty/ftie/teknik-informatika/">Berita</a></li>
		</ul>
</li>
		<li id="menu-item-178" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-178"><a href="http://uty.ac.id/category/fakultas-uty/ftie/teknik-elektro/">Teknik Elektro</a></li>
		<li id="menu-item-177" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-177"><a href="http://uty.ac.id/category/fakultas-uty/ftie/sistem-komputer/">Teknik Komputer</a></li>
	</ul>
</li>
	<li id="menu-item-6994" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6994"><a href="#">Fakultas Sain &#038; Teknologi</a>
	<ul class="sub-menu">
		<li id="menu-item-269" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-269"><a href="http://uty.ac.id/fakultas-sains-dan-teknologi/">Tentang FST</a></li>
		<li id="menu-item-11304" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11304"><a href="#">Teknik Sipil</a>
		<ul class="sub-menu">
			<li id="menu-item-11303" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11303"><a href="http://uty.ac.id/visi-misi-program-studi-teknik-sipil/">Visi &#038; Misi Program Studi Teknik Sipil</a></li>
			<li id="menu-item-176" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-176"><a href="http://uty.ac.id/category/fakultas-uty/fakultas-sains-teknologi/sipil/">Berita</a></li>
		</ul>
</li>
		<li id="menu-item-179" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-179"><a href="http://uty.ac.id/category/fakultas-uty/fakultas-sains-teknologi/teknik-industri/">Teknik Industri</a>
		<ul class="sub-menu">
			<li id="menu-item-11148" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11148"><a href="http://uty.ac.id/visi-misi-program-studi-teknik-industri-uty/">Visi &#038; Misi Program Studi Teknik Industri UTY</a></li>
			<li id="menu-item-11149" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11149"><a href="http://uty.ac.id/category/fakultas-uty/fakultas-sains-teknologi/teknik-industri/">Berita</a></li>
			<li id="menu-item-11167" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11167"><a href="https://docs.google.com/forms/d/1xpp1sRuJxuaS_EV3Y6bS2XvJ2nU3uikyi95JJUEiY1c/edit?usp=sharing">Tracert Study Lulusan Industri</a></li>
			<li id="menu-item-11168" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11168"><a href="https://docs.google.com/forms/d/10tx05kff4z4oGU0Ndvwihwm4fwB6-lyBA0gqf4k1SG0/edit">Penilaian User</a></li>
		</ul>
</li>
		<li id="menu-item-174" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-174"><a href="http://uty.ac.id/category/fakultas-uty/fakultas-sains-teknologi/arsitektur/">Arsitektur</a>
		<ul class="sub-menu">
			<li id="menu-item-10303" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10303"><a href="http://uty.ac.id/visi-misi-program-studi-arsitektur-uty/">Visi &#038; Misi Program Studi Arsitektur UTY</a></li>
			<li id="menu-item-10298" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10298"><a href="http://uty.ac.id/category/fakultas-uty/fakultas-sains-teknologi/arsitektur/">Berita</a></li>
		</ul>
</li>
		<li id="menu-item-11310" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11310"><a href="#">Perencanaan Wilayah Kota</a>
		<ul class="sub-menu">
			<li id="menu-item-11309" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11309"><a href="http://uty.ac.id/visi-misi-program-studi-perencanaan-wilayah-kota/">Visi &#038; Misi Program Studi Perencanaan Wilayah Kota</a></li>
			<li id="menu-item-10494" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10494"><a href="http://uty.ac.id/category/fakultas-uty/fakultas-sains-teknologi/perencanaan-wilayah-kota/">Berita</a></li>
		</ul>
</li>
	</ul>
</li>
	<li id="menu-item-3115" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3115"><a href="http://uty.ac.id/category/fakultas-uty/fakultas-pendidikan/">Fakultas Pendidikan</a>
	<ul class="sub-menu">
		<li id="menu-item-9931" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9931"><a href="http://uty.ac.id/fakultas-pendidikan/">Tentang FPd</a></li>
		<li id="menu-item-11318" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11318"><a href="#">Bimbingan dan Konseling</a>
		<ul class="sub-menu">
			<li id="menu-item-11317" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11317"><a href="http://uty.ac.id/visi-misi-program-studi-bimbingan-dan-konseling/">Visi &#038; Misi Program Studi Bimbingan dan Konseling</a></li>
			<li id="menu-item-3116" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3116"><a href="http://uty.ac.id/category/fakultas-uty/fakultas-pendidikan/bimbingan-dan-konseling/">Berita</a></li>
		</ul>
</li>
		<li id="menu-item-7070" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-7070"><a href="http://uty.ac.id/category/fakultas-uty/fakultas-pendidikan/pend-bahasa-inggris/">Pendidikan Bahasa Inggris</a>
		<ul class="sub-menu">
			<li id="menu-item-11095" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11095"><a href="http://uty.ac.id/visi-misi-program-studi-pendidikan-bahasa-inggris-uty/">Visi &#038; Misi Program Studi Pendidikan Bahasa Inggris UTY</a></li>
			<li id="menu-item-11096" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11096"><a href="http://uty.ac.id/category/fakultas-uty/fakultas-pendidikan/pend-bahasa-inggris/">Berita</a></li>
		</ul>
</li>
		<li id="menu-item-7071" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-7071"><a href="http://uty.ac.id/category/fakultas-uty/fakultas-pendidikan/pend-teknologi-informasi/">Pendidikan Teknologi Informasi</a>
		<ul class="sub-menu">
			<li id="menu-item-11101" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11101"><a href="http://uty.ac.id/visi-misi-program-studi-pendidikan-teknologi-informasi-uty/">Visi &#038; Misi Program Studi Pendidikan Teknologi Informasi UTY</a></li>
			<li id="menu-item-11102" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11102"><a href="http://uty.ac.id/category/fakultas-uty/fakultas-pendidikan/pend-teknologi-informasi/">Berita</a></li>
		</ul>
</li>
	</ul>
</li>
</ul>
</li>
<li id="menu-item-7022" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7022"><a href="#">Magister Manajemen</a>
<ul class="sub-menu">
	<li id="menu-item-7024" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7024"><a href="http://uty.ac.id/sekilas-magister-manajemen-universitas-teknologi-yogyakarta/">Tentang MM UTY</a></li>
	<li id="menu-item-7025" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-7025"><a href="http://uty.ac.id/category/fakultas-uty/feb-uty/magister-manajemen/">Info Terkini MM UTY</a></li>
	<li id="menu-item-10227" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10227"><a href="http://uty.ac.id/penerimaan-mahasiswa-baru-magister-manajemen-uty/">PMB Magister Manajemen UTY</a></li>
</ul>
</li>
<li id="menu-item-10159" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10159"><a href="http://uty.ac.id/program-studi-doktor-manajemenbisnis-universitas-teknologi-yogyakarta-different-unique-challengging/">Doktor Manajemen Bisnis</a></li>
<li id="menu-item-7015" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7015"><a href="#">Admisi &#038; Layanan</a>
<ul class="sub-menu">
	<li id="menu-item-11109" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11109"><a target="_blank" href="http://sia.uty.ac.id">Sikadu UTY</a></li>
	<li id="menu-item-7098" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7098"><a target="_blank" href="http://elearning.uty.ac.id/">E-Learning UTY</a></li>
	<li id="menu-item-7099" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7099"><a target="_blank" href="http://lib.uty.ac.id">E-Library UTY</a></li>
	<li id="menu-item-7019" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7019"><a target="_blank" href="http://eprints.uty.ac.id">E-Prints UTY</a></li>
	<li id="menu-item-11327" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11327"><a target="_blank" href="https://forms.office.com/Pages/ResponsePage.aspx?id=W895ydbva0-tTQ94RZ6OFvHcLUrMV_tNoch6P7Pl7N1UOFpORVMzSFdEUklWNlRLNldESU42UTUxUC4u">Kuesioner Mitra UTY</a></li>
</ul>
</li>
<li id="menu-item-11244" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11244"><a href="#">UPT</a>
<ul class="sub-menu">
	<li id="menu-item-11245" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11245"><a href="http://lib.uty.ac.id/">Perpustakaan UTY</a></li>
	<li id="menu-item-11235" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11235"><a href="http://puskom.uty.ac.id/">UPT Komputer UTY</a></li>
	<li id="menu-item-11246" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11246"><a href="http://uty.ac.id/laboratorium-uty/">Laboratorium UTY</a></li>
</ul>
</li>
<li id="menu-item-11247" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11247"><a href="#">Lembaga</a>
<ul class="sub-menu">
	<li id="menu-item-11248" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11248"><a href="#">LPPM</a></li>
	<li id="menu-item-11249" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11249"><a target="_blank" href="http://research-uty.org">Jurnal &#038; Publikasi</a></li>
	<li id="menu-item-11252" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11252"><a href="#">Penjaminan Mutu &#038; Akreditasi</a></li>
	<li id="menu-item-11251" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11251"><a href="#">Pusat Pelatihan Bahasa</a></li>
	<li id="menu-item-11250" class="menu-item menu-item-type- menu-item-object-custom menu-item-11250"><a>Student Service</a></li>
</ul>
</li>
</ul></div></nav> <div class=clear></div> </div> </header> <div class=clear></div>
 
<div class="clear"></div>
<div id="primary">
	
					<section id="flexible-home-layout-section">
				<div class="news-box slider"><h2 class="title"><a href="http://uty.ac.id/category/slideshow-rektorat/" title="View all posts"></a></h2><div class="outer"><ul class="content"><li class="item item-0 item-first"><div class="inner"><a href="http://uty.ac.id/2018/02/jumlah-publikasi-ilmiah-dan-jurnal-internasional-indonesia-masih-rendah/" title="Click to read" class="item-thumbnail"><img width="1024" height="682" src="http://uty.ac.id/isi/uploads//2018/02/web-ali-ghuron-cover-1024x682.jpg" class="attachment-large" alt="item-thumbnail" title="Jumlah Publikasi Ilmiah dan Jurnal Internasional Indonesia Masih Rendah" /></a><h3 class="title"><a href="http://uty.ac.id/2018/02/jumlah-publikasi-ilmiah-dan-jurnal-internasional-indonesia-masih-rendah/" title="Click to read">Jumlah Publikasi Ilmiah dan Jurnal Internasional Indonesia Masih Rendah</a></h3><div class="clear"></div></div></li><li class="item item-1 item-other"><div class="inner"><a href="http://uty.ac.id/2017/12/serangan-cyber-timbulkan-kerugian-besar-dan-kacaukan-layanan/" title="Click to read" class="item-thumbnail"><img width="1024" height="597" src="http://uty.ac.id/isi/uploads//2017/12/web-Ainun-Naim-Crop-1024x597.jpg" class="attachment-large" alt="item-thumbnail" title="Serangan Cyber, Timbulkan Kerugian Besar dan Kacaukan Layanan" /></a><h3 class="title"><a href="http://uty.ac.id/2017/12/serangan-cyber-timbulkan-kerugian-besar-dan-kacaukan-layanan/" title="Click to read">Serangan Cyber, Timbulkan Kerugian Besar dan Kacaukan Layanan</a></h3><div class="clear"></div></div></li><li class="item item-2 item-other"><div class="inner"><a href="http://uty.ac.id/2017/12/uty-wisuda-906-lulusan/" title="Click to read" class="item-thumbnail"><img width="1024" height="669" src="http://uty.ac.id/isi/uploads//2017/12/web-rektor-mewisuda-1024x669.jpg" class="attachment-large" alt="item-thumbnail" title="UTY Wisuda 906 Lulusan" /></a><h3 class="title"><a href="http://uty.ac.id/2017/12/uty-wisuda-906-lulusan/" title="Click to read">UTY Wisuda 906 Lulusan</a></h3><div class="clear"></div></div></li><li class="item item-3 item-other"><div class="inner"><a href="http://uty.ac.id/2017/10/sarasehan-dies-natalis-ke-15-uty-2/" title="Click to read" class="item-thumbnail"><img width="1024" height="661" src="http://uty.ac.id/isi/uploads//2017/10/web-Rektor-nyambut1-1024x661.jpg" class="attachment-large" alt="item-thumbnail" title="Sarasehan Dies Natalis Ke 15 UTY" /></a><h3 class="title"><a href="http://uty.ac.id/2017/10/sarasehan-dies-natalis-ke-15-uty-2/" title="Click to read">Sarasehan Dies Natalis Ke 15 UTY</a></h3><div class="clear"></div></div></li><li class="item item-4 item-other"><div class="inner"><a href="http://uty.ac.id/2017/10/tung-desem-waringin-di-uty-menjadi-sukses-genius-dan-terbaik/" title="Click to read" class="item-thumbnail"><img width="1024" height="538" src="http://uty.ac.id/isi/uploads//2017/10/web-maba-17-1024x538.jpg" class="attachment-large" alt="item-thumbnail" title="Tung Desem Waringin di UTY : Menjadi Sukses, Genius dan Terbaik" /></a><h3 class="title"><a href="http://uty.ac.id/2017/10/tung-desem-waringin-di-uty-menjadi-sukses-genius-dan-terbaik/" title="Click to read">Tung Desem Waringin di UTY : Menjadi Sukses, Genius dan Terbaik</a></h3><div class="clear"></div></div></li></ul></div><div class="clear"></div></div><div class="news-box three"><h2 class="title"><a href="http://uty.ac.id/category/biro/humas-marketing/" title="View all posts">Info Rektorat</a></h2><div class="outer"><ul class="content"><li class="item item-0 item-first"><div class="inner"><a href="http://uty.ac.id/2018/03/indonesia-masih-kekurangan-sdm-cyber-security/" title="Click to read" class="item-thumbnail"><img width="300" height="202" src="http://uty.ac.id/isi/uploads//2018/03/web-penandatangan-UTY-xynexis-cyber-security1-300x202.jpg" class="attachment-medium" alt="item-thumbnail" title="Indonesia Masih Kekurangan SDM Cyber Security" /></a><div class="meta"><a href="http://uty.ac.id/2018/03/indonesia-masih-kekurangan-sdm-cyber-security/#comments" class="comment"><i class="icon"></i><span>0</span></a><a href="http://uty.ac.id/2018/03/indonesia-masih-kekurangan-sdm-cyber-security/" class="date"><i class="icon"></i><span>Maret 3, 2018</span></a></div><h3 class="title"><a href="http://uty.ac.id/2018/03/indonesia-masih-kekurangan-sdm-cyber-security/" title="Click to read">Indonesia Masih Kekurangan SDM Cyber Security</a></h3><p class="snippet">Bertempat di Kampus 1 Universitas Teknologi Yogyakarta (UTY) Kamis 1 Maret 2018, telah diselenggarakan Audisi pemilihan 100 mahasiswa calon SDM Cyber ...</p><div class="clear"></div></div></li><li class="item item-1 item-other"><div class="inner"><a href="http://uty.ac.id/2018/02/uty-baron-techno-park-sepakati-kerjasama-teknologi-dan-technopreneurship/" title="Click to read" class="item-thumbnail"><img width="300" height="176" src="http://uty.ac.id/isi/uploads//2018/02/web-Foto-Bersama-300x176.jpg" class="attachment-medium" alt="item-thumbnail" title="UTY– Baron Techno Park Sepakati Kerjasama Teknologi dan Technopreneurship" /></a><div class="meta"><a href="http://uty.ac.id/2018/02/uty-baron-techno-park-sepakati-kerjasama-teknologi-dan-technopreneurship/#comments" class="comment"><i class="icon"></i><span>0</span></a><a href="http://uty.ac.id/2018/02/uty-baron-techno-park-sepakati-kerjasama-teknologi-dan-technopreneurship/" class="date"><i class="icon"></i><span>Februari 9, 2018</span></a></div><h3 class="title"><a href="http://uty.ac.id/2018/02/uty-baron-techno-park-sepakati-kerjasama-teknologi-dan-technopreneurship/" title="Click to read">UTY– Baron Techno Park Sepakati Kerjasama Teknologi dan Technopreneurship</a></h3><p class="snippet">Universitas Teknologi Yogyakarta (UTY)  dan Baron Techno Park (BTP) menyepakati untuk mengadakan kejasama dalam bidang pengembangan teknologi. Kerjasa...</p><div class="clear"></div></div></li><li class="item item-2 item-other"><div class="inner"><a href="http://uty.ac.id/2018/02/jangan-sampai-penelitian-s3-serasa-penelitian-s2-atau-s1/" title="Click to read" class="item-thumbnail"><img width="300" height="200" src="http://uty.ac.id/isi/uploads//2018/02/Pa-arief-Nyambut-300x200.jpg" class="attachment-medium" alt="item-thumbnail" title="Jangan Sampai Penelitian S3 Serasa Penelitian S2 atau S1" /></a><div class="meta"><a href="http://uty.ac.id/2018/02/jangan-sampai-penelitian-s3-serasa-penelitian-s2-atau-s1/#comments" class="comment"><i class="icon"></i><span>0</span></a><a href="http://uty.ac.id/2018/02/jangan-sampai-penelitian-s3-serasa-penelitian-s2-atau-s1/" class="date"><i class="icon"></i><span>Februari 6, 2018</span></a></div><h3 class="title"><a href="http://uty.ac.id/2018/02/jangan-sampai-penelitian-s3-serasa-penelitian-s2-atau-s1/" title="Click to read">Jangan Sampai Penelitian S3 Serasa Penelitian S2 atau S1</a></h3><p class="snippet">Dalam rangka meningkatkan kuantitas dan kualitas penelitian Dosen, Universitas Teknologi Yogyakarta (UTY) menggelar Workshop Metodologi Penelitian. Wo...</p><div class="clear"></div></div></li><li class="item item-3 item-other"><div class="inner"><a href="http://uty.ac.id/2017/12/era-ekonomi-baru-merevolusi-metode-kerja-akuntan/" title="Click to read" class="item-thumbnail"><img width="300" height="293" src="http://uty.ac.id/isi/uploads//2017/12/Rektor-dan-Prof-mardiasmo-300x293.jpg" class="attachment-medium" alt="item-thumbnail" title="Era Ekonomi Baru, Merevolusi Metode Kerja Akuntan" /></a><div class="meta"><a href="http://uty.ac.id/2017/12/era-ekonomi-baru-merevolusi-metode-kerja-akuntan/#comments" class="comment"><i class="icon"></i><span>0</span></a><a href="http://uty.ac.id/2017/12/era-ekonomi-baru-merevolusi-metode-kerja-akuntan/" class="date"><i class="icon"></i><span>Desember 23, 2017</span></a></div><h3 class="title"><a href="http://uty.ac.id/2017/12/era-ekonomi-baru-merevolusi-metode-kerja-akuntan/" title="Click to read">Era Ekonomi Baru, Merevolusi Metode Kerja Akuntan</a></h3><p class="snippet">Rektor Universitas Teknologi Yogyakarta (UTY) Dr. Bambang Moertono Setiawan, MM., Akt., CA , Wakil Rektor Bidang  Keuangan dan SDM, Bahagia Tarigan SE...</p><div class="clear"></div></div></li><li class="item item-4 item-other"><div class="inner"><a href="http://uty.ac.id/2017/11/banyak-lulusan-uty-kerja-sebelum-wisuda/" title="Click to read" class="item-thumbnail"><img width="300" height="168" src="http://uty.ac.id/isi/uploads//2017/11/web-Ega-harnanta1-300x168.jpg" class="attachment-medium" alt="item-thumbnail" title="Banyak Lulusan UTY, Kerja Sebelum Wisuda" /></a><div class="meta"><a href="http://uty.ac.id/2017/11/banyak-lulusan-uty-kerja-sebelum-wisuda/#comments" class="comment"><i class="icon"></i><span>0</span></a><a href="http://uty.ac.id/2017/11/banyak-lulusan-uty-kerja-sebelum-wisuda/" class="date"><i class="icon"></i><span>November 29, 2017</span></a></div><h3 class="title"><a href="http://uty.ac.id/2017/11/banyak-lulusan-uty-kerja-sebelum-wisuda/" title="Click to read">Banyak Lulusan UTY, Kerja Sebelum Wisuda</a></h3><p class="snippet">Lulus kuliah langsung  diterima kerja di tempat yang bonafid, merupakan dambaan hampir semua lulusan perguruan tinggi. Pada acara wisuda Universitas T...</p><div class="clear"></div></div></li></ul></div><div class="clear"></div></div><div class="news-box three"><h2 class="title"><a href="http://uty.ac.id/category/kerjasama-2/" title="View all posts">Kerjasama</a></h2><div class="outer"><ul class="content"><li class="item item-0 item-first"><div class="inner"><a href="http://uty.ac.id/2017/12/tingkatkan-kerjasama-uty-ump-dengan-kolaborasi-riset/" title="Click to read" class="item-thumbnail"><img width="300" height="181" src="http://uty.ac.id/isi/uploads//2017/12/web-presentasi-UMP-crop-300x181.jpg" class="attachment-medium" alt="item-thumbnail" title="Tingkatkan Kerjasama UTY-UMP, dengan Kolaborasi Riset" /></a><div class="meta"><a href="http://uty.ac.id/2017/12/tingkatkan-kerjasama-uty-ump-dengan-kolaborasi-riset/#comments" class="comment"><i class="icon"></i><span>0</span></a><a href="http://uty.ac.id/2017/12/tingkatkan-kerjasama-uty-ump-dengan-kolaborasi-riset/" class="date"><i class="icon"></i><span>Desember 23, 2017</span></a></div><h3 class="title"><a href="http://uty.ac.id/2017/12/tingkatkan-kerjasama-uty-ump-dengan-kolaborasi-riset/" title="Click to read">Tingkatkan Kerjasama UTY-UMP, dengan Kolaborasi Riset</a></h3><p class="snippet">Komitmen yang kuat dan semangat yang tinggi terus dibangun Universitas Teknologi Yogyakarta (UTY) dalam melakukan kerjasama dengan berbagai perguruan ...</p><div class="clear"></div></div></li><li class="item item-1 item-other"><div class="inner"><a href="http://uty.ac.id/2017/12/open-recruitmet-bagi-wisudawan-nopember-2017/" title="Click to read" class="item-thumbnail"><img width="300" height="179" src="http://uty.ac.id/isi/uploads//2017/12/web-open-rekruitment-foto-300x179.jpg" class="attachment-medium" alt="item-thumbnail" title="Open Recruitmet Bagi Wisudawan Nopember 2017" /></a><div class="meta"><a href="http://uty.ac.id/2017/12/open-recruitmet-bagi-wisudawan-nopember-2017/#comments" class="comment"><i class="icon"></i><span>0</span></a><a href="http://uty.ac.id/2017/12/open-recruitmet-bagi-wisudawan-nopember-2017/" class="date"><i class="icon"></i><span>Desember 14, 2017</span></a></div><h3 class="title"><a href="http://uty.ac.id/2017/12/open-recruitmet-bagi-wisudawan-nopember-2017/" title="Click to read">Open Recruitmet Bagi Wisudawan Nopember 2017</a></h3><p class="snippet">Bertempat di Kampus 1 Universitas Teknologi Yogyakarta (UTY), Sabtu 2 Desember 2017, PT Buana Karya Bhakti sebuah perusahaan kelapa sawit dan pengolah...</p><div class="clear"></div></div></li><li class="item item-2 item-other"><div class="inner"><a href="http://uty.ac.id/2017/10/bekerjasama-dengan-pt-karunia-multifinance-dan-ilc-learning-consulting-center-uty-tumbuhkan-startup-fintech/" title="Click to read" class="item-thumbnail"><img width="300" height="182" src="http://uty.ac.id/isi/uploads//2017/10/web-budi-wasito-and-audience-300x182.jpg" class="attachment-medium" alt="item-thumbnail" title="Bekerjasama dengan  PT Karunia Multifinance dan ILC Learning &amp; Consulting Center : UTY Tumbuhkan Startup Fintech" /></a><div class="meta"><a href="http://uty.ac.id/2017/10/bekerjasama-dengan-pt-karunia-multifinance-dan-ilc-learning-consulting-center-uty-tumbuhkan-startup-fintech/#comments" class="comment"><i class="icon"></i><span>0</span></a><a href="http://uty.ac.id/2017/10/bekerjasama-dengan-pt-karunia-multifinance-dan-ilc-learning-consulting-center-uty-tumbuhkan-startup-fintech/" class="date"><i class="icon"></i><span>Oktober 5, 2017</span></a></div><h3 class="title"><a href="http://uty.ac.id/2017/10/bekerjasama-dengan-pt-karunia-multifinance-dan-ilc-learning-consulting-center-uty-tumbuhkan-startup-fintech/" title="Click to read">Bekerjasama dengan  PT Karunia Multifinance dan ILC Learning &amp; Consulting Center : UTY Tumbuhkan Startup Fintech</a></h3><p class="snippet">Bekerjasama dengan PT Karunia Multifinance dan ILC Learning &amp; Consulting Center Jakarta, Universitas Teknologi Yogyakarta menyelenggarakan acara w...</p><div class="clear"></div></div></li><li class="item item-3 item-other"><div class="inner"><a href="http://uty.ac.id/2017/09/memahami-behavioral-accounting-dengan-pendekatan-sistem-dinamik/" title="Click to read" class="item-thumbnail"><img width="300" height="199" src="http://uty.ac.id/isi/uploads//2017/09/web-pembicara-IAI-300x199.jpg" class="attachment-medium" alt="item-thumbnail" title="Memahami Behavioral Accounting, dengan Pendekatan Sistem Dinamik" /></a><div class="meta"><a href="http://uty.ac.id/2017/09/memahami-behavioral-accounting-dengan-pendekatan-sistem-dinamik/#comments" class="comment"><i class="icon"></i><span>0</span></a><a href="http://uty.ac.id/2017/09/memahami-behavioral-accounting-dengan-pendekatan-sistem-dinamik/" class="date"><i class="icon"></i><span>September 3, 2017</span></a></div><h3 class="title"><a href="http://uty.ac.id/2017/09/memahami-behavioral-accounting-dengan-pendekatan-sistem-dinamik/" title="Click to read">Memahami Behavioral Accounting, dengan Pendekatan Sistem Dinamik</a></h3><p class="snippet">Universitas Teknologi Yogyakarta (UTY) telah lama menjalin kerjasama yang baik dengan Ikatan Akuntan Indonesia (IAI) Wilayah Yogyakarta. Berbagai kegi...</p><div class="clear"></div></div></li><li class="item item-4 item-other"><div class="inner"><a href="http://uty.ac.id/2017/05/media-interaktif-lebih-efektif-dari-one-way-traffic-digital-marketing/" title="Click to read" class="item-thumbnail"><img width="300" height="174" src="http://uty.ac.id/isi/uploads//2017/05/web-Dario-300x174.jpg" class="attachment-medium" alt="item-thumbnail" title="Media Interaktif Lebih Efektif Dari One Way Traffic Digital Marketing" /></a><div class="meta"><a href="http://uty.ac.id/2017/05/media-interaktif-lebih-efektif-dari-one-way-traffic-digital-marketing/#comments" class="comment"><i class="icon"></i><span>0</span></a><a href="http://uty.ac.id/2017/05/media-interaktif-lebih-efektif-dari-one-way-traffic-digital-marketing/" class="date"><i class="icon"></i><span>Mei 31, 2017</span></a></div><h3 class="title"><a href="http://uty.ac.id/2017/05/media-interaktif-lebih-efektif-dari-one-way-traffic-digital-marketing/" title="Click to read">Media Interaktif Lebih Efektif Dari One Way Traffic Digital Marketing</a></h3><p class="snippet">Selama seminggu di awal Mei 2017 ini, Prof. Dario Miosevic dari Split University Croatia, melakukan kunjungan ke Universitas Teknologi Yogyakarta (UTY...</p><div class="clear"></div></div></li></ul></div><div class="clear"></div></div><div class="news-box three"><h2 class="title"><a href="http://uty.ac.id/category/fakultas-uty/" title="View all posts">Kabar Fakultas</a></h2><div class="outer"><ul class="content"><li class="item item-0 item-first"><div class="inner"><a href="http://uty.ac.id/2018/03/indonesia-masih-kekurangan-sdm-cyber-security/" title="Click to read" class="item-thumbnail"><img width="300" height="202" src="http://uty.ac.id/isi/uploads//2018/03/web-penandatangan-UTY-xynexis-cyber-security1-300x202.jpg" class="attachment-medium" alt="item-thumbnail" title="Indonesia Masih Kekurangan SDM Cyber Security" /></a><div class="meta"><a href="http://uty.ac.id/2018/03/indonesia-masih-kekurangan-sdm-cyber-security/#comments" class="comment"><i class="icon"></i><span>0</span></a><a href="http://uty.ac.id/2018/03/indonesia-masih-kekurangan-sdm-cyber-security/" class="date"><i class="icon"></i><span>Maret 3, 2018</span></a></div><h3 class="title"><a href="http://uty.ac.id/2018/03/indonesia-masih-kekurangan-sdm-cyber-security/" title="Click to read">Indonesia Masih Kekurangan SDM Cyber Security</a></h3><p class="snippet">Bertempat di Kampus 1 Universitas Teknologi Yogyakarta (UTY) Kamis 1 Maret 2018, telah diselenggarakan Audisi pemilihan 100 mahasiswa calon SDM Cyber ...</p><div class="clear"></div></div></li><li class="item item-1 item-other"><div class="inner"><a href="http://uty.ac.id/2018/03/tim-uty-juara-1-national-start-up-competition-2018/" title="Click to read" class="item-thumbnail"><img width="300" height="225" src="http://uty.ac.id/isi/uploads//2018/03/juara-1-300x225.jpg" class="attachment-medium" alt="item-thumbnail" title="Tim UTY Juara 1 National Start-Up Competition 2018" /></a><div class="meta"><a href="http://uty.ac.id/2018/03/tim-uty-juara-1-national-start-up-competition-2018/#comments" class="comment"><i class="icon"></i><span>0</span></a><a href="http://uty.ac.id/2018/03/tim-uty-juara-1-national-start-up-competition-2018/" class="date"><i class="icon"></i><span>Maret 1, 2018</span></a></div><h3 class="title"><a href="http://uty.ac.id/2018/03/tim-uty-juara-1-national-start-up-competition-2018/" title="Click to read">Tim UTY Juara 1 National Start-Up Competition 2018</a></h3><p class="snippet">Tim mahasiswa Universitas Teknologi Yogyakarta (UTY) yang terdiri Saifudin  dari Prodi Manajemen angkatan 2015, Akbar Permana Putra dari Prodi Pendidi...</p><div class="clear"></div></div></li><li class="item item-2 item-other"><div class="inner"><a href="http://uty.ac.id/2018/02/workshop-video-dan-sinematografi-tingkatkan-variasi-media-layanan-bk/" title="Click to read" class="item-thumbnail"><img src="http://uty.ac.id/isi/uploads//2018/02/workshop-BK-final-1024x682.jpg" alt="item-thumbnail" title="Workshop Video dan Sinematografi, Tingkatkan Variasi Media Layanan BK"/></a><div class="meta"><a href="http://uty.ac.id/2018/02/workshop-video-dan-sinematografi-tingkatkan-variasi-media-layanan-bk/#comments" class="comment"><i class="icon"></i><span>0</span></a><a href="http://uty.ac.id/2018/02/workshop-video-dan-sinematografi-tingkatkan-variasi-media-layanan-bk/" class="date"><i class="icon"></i><span>Februari 13, 2018</span></a></div><h3 class="title"><a href="http://uty.ac.id/2018/02/workshop-video-dan-sinematografi-tingkatkan-variasi-media-layanan-bk/" title="Click to read">Workshop Video dan Sinematografi, Tingkatkan Variasi Media Layanan BK</a></h3><p class="snippet">Pesatnya perkembangan ilmu pengetahuan, teknologi dan informasi menjadikan tantangan pada era dan generasi masa depan semakin nyata. Tantangan untuk m...</p><div class="clear"></div></div></li><li class="item item-3 item-other"><div class="inner"><a href="http://uty.ac.id/2018/01/public-speaking-perlu-persiapan-mental-dan-materi/" title="Click to read" class="item-thumbnail"><img width="300" height="183" src="http://uty.ac.id/isi/uploads//2018/01/web-Bu-Respati-300x183.jpg" class="attachment-medium" alt="item-thumbnail" title="Public Speaking, Perlu Persiapan Mental dan Materi" /></a><div class="meta"><a href="http://uty.ac.id/2018/01/public-speaking-perlu-persiapan-mental-dan-materi/#comments" class="comment"><i class="icon"></i><span>0</span></a><a href="http://uty.ac.id/2018/01/public-speaking-perlu-persiapan-mental-dan-materi/" class="date"><i class="icon"></i><span>Januari 29, 2018</span></a></div><h3 class="title"><a href="http://uty.ac.id/2018/01/public-speaking-perlu-persiapan-mental-dan-materi/" title="Click to read">Public Speaking, Perlu Persiapan Mental dan Materi</a></h3><p class="snippet">Memiliki kemampuan berbicara dengan baik dan benar, dalam menyampaikan gagasan atau ide di depan publik, sangat dibutuhkan dalam dunia profesional.  K...</p><div class="clear"></div></div></li><li class="item item-4 item-other"><div class="inner"><a href="http://uty.ac.id/2018/01/11224/" title="Click to read" class="item-thumbnail"><img width="198" height="300" src="http://uty.ac.id/isi/uploads//2018/01/pbi-1-198x300.jpg" class="attachment-medium" alt="item-thumbnail" title="Workshop &#8220;English Textbook Designing&#8221;" /></a><div class="meta"><a href="http://uty.ac.id/2018/01/11224/#comments" class="comment"><i class="icon"></i><span>0</span></a><a href="http://uty.ac.id/2018/01/11224/" class="date"><i class="icon"></i><span>Januari 19, 2018</span></a></div><h3 class="title"><a href="http://uty.ac.id/2018/01/11224/" title="Click to read">Workshop &#8220;English Textbook Designing&#8221;</a></h3><p class="snippet">Dalam rangka mengasah kemampuan menulis mahasiswa, Program Studi S1 Pendidikan Bahasa Inggris (PBI) Fakultas Pendidikan Universitas Teknologi Yogyakar...</p><div class="clear"></div></div></li></ul></div><div class="clear"></div></div><div class="news-box three"><h2 class="title"><a href="http://uty.ac.id/category/biro/kemahasiswaan/" title="View all posts">Kegiatan Mahasiswa</a></h2><div class="outer"><ul class="content"><li class="item item-0 item-first"><div class="inner"><a href="http://uty.ac.id/2017/12/tim-kopma-uty-juara-1-national-cooperative-competition-2017/" title="Click to read" class="item-thumbnail"><img width="237" height="300" src="http://uty.ac.id/isi/uploads//2017/12/IMG-20171209-WA0000-237x300.jpg" class="attachment-medium" alt="item-thumbnail" title="Tim KOPMA UTY Juara 1 National Cooperative Competition 2017" /></a><div class="meta"><a href="http://uty.ac.id/2017/12/tim-kopma-uty-juara-1-national-cooperative-competition-2017/#comments" class="comment"><i class="icon"></i><span>0</span></a><a href="http://uty.ac.id/2017/12/tim-kopma-uty-juara-1-national-cooperative-competition-2017/" class="date"><i class="icon"></i><span>Desember 9, 2017</span></a></div><h3 class="title"><a href="http://uty.ac.id/2017/12/tim-kopma-uty-juara-1-national-cooperative-competition-2017/" title="Click to read">Tim KOPMA UTY Juara 1 National Cooperative Competition 2017</a></h3><p class="snippet">Tim Mahasiswa yang tergabung dalam Koperasi Mahasiswa (KOPMA) Universitas Teknologi Yogyakarta (UTY) kembali berprestasi dalam ajang kompetisi bidang ...</p><div class="clear"></div></div></li><li class="item item-1 item-other"><div class="inner"><a href="http://uty.ac.id/2017/10/uty-lantik-pengurus-ukm-dan-hmj/" title="Click to read" class="item-thumbnail"><img src="http://uty.ac.id/isi/uploads//2017/10/web-bambang-Moertono-nglantik-1024x663.jpg" alt="item-thumbnail" title="UTY Lantik Pengurus UKM dan HMJ"/></a><div class="meta"><a href="http://uty.ac.id/2017/10/uty-lantik-pengurus-ukm-dan-hmj/#comments" class="comment"><i class="icon"></i><span>0</span></a><a href="http://uty.ac.id/2017/10/uty-lantik-pengurus-ukm-dan-hmj/" class="date"><i class="icon"></i><span>Oktober 6, 2017</span></a></div><h3 class="title"><a href="http://uty.ac.id/2017/10/uty-lantik-pengurus-ukm-dan-hmj/" title="Click to read">UTY Lantik Pengurus UKM dan HMJ</a></h3><p class="snippet">Rektor Universitas Teknologi Yogyakarta (UTY) Dr. Bambang Moertono Setiawan, MM, Akt., CA melantik pengurus dari sebelas Unit Kegiatan Mahasiswa (UKM)...</p><div class="clear"></div></div></li><li class="item item-2 item-other"><div class="inner"><a href="http://uty.ac.id/2017/08/mahasiswa-arsitektur-uty-borong-juara-lomba-maket-bangunan-cagar-budaya/" title="Click to read" class="item-thumbnail"><img width="300" height="224" src="http://uty.ac.id/isi/uploads//2017/08/masjid-mataram-kotagede-300x224.jpg" class="attachment-medium" alt="item-thumbnail" title="Mahasiswa Arsitektur UTY Borong Juara Lomba Maket Bangunan Cagar Budaya" /></a><div class="meta"><a href="http://uty.ac.id/2017/08/mahasiswa-arsitektur-uty-borong-juara-lomba-maket-bangunan-cagar-budaya/#comments" class="comment"><i class="icon"></i><span>0</span></a><a href="http://uty.ac.id/2017/08/mahasiswa-arsitektur-uty-borong-juara-lomba-maket-bangunan-cagar-budaya/" class="date"><i class="icon"></i><span>Agustus 26, 2017</span></a></div><h3 class="title"><a href="http://uty.ac.id/2017/08/mahasiswa-arsitektur-uty-borong-juara-lomba-maket-bangunan-cagar-budaya/" title="Click to read">Mahasiswa Arsitektur UTY Borong Juara Lomba Maket Bangunan Cagar Budaya</a></h3><p class="snippet">Indonesia memiliki beragam bangunan dan kawasan cagar budaya, mulai dari zaman pra sejarah hingga masa kolonial. Di Yogyakarta yang dikenal sebagai ko...</p><div class="clear"></div></div></li><li class="item item-3 item-other"><div class="inner"><a href="http://uty.ac.id/2017/08/mahasiswa-ilmu-komunikasi-produksi-film-fiksi-pendek/" title="Click to read" class="item-thumbnail"><img width="300" height="168" src="http://uty.ac.id/isi/uploads//2017/08/Il-Kom-film-300x168.jpg" class="attachment-medium" alt="item-thumbnail" title="Mahasiswa Prodi Ilmu Komunikasi UTY Produksi Film Fiksi Pendek" /></a><div class="meta"><a href="http://uty.ac.id/2017/08/mahasiswa-ilmu-komunikasi-produksi-film-fiksi-pendek/#comments" class="comment"><i class="icon"></i><span>0</span></a><a href="http://uty.ac.id/2017/08/mahasiswa-ilmu-komunikasi-produksi-film-fiksi-pendek/" class="date"><i class="icon"></i><span>Agustus 23, 2017</span></a></div><h3 class="title"><a href="http://uty.ac.id/2017/08/mahasiswa-ilmu-komunikasi-produksi-film-fiksi-pendek/" title="Click to read">Mahasiswa Prodi Ilmu Komunikasi UTY Produksi Film Fiksi Pendek</a></h3><p class="snippet">Dalam rangka menyalurkan semangat berkarya, mahasiswa Program Studi Ilmu Komunikasi Universitas Teknologi Yogyakarta (UTY) memproduksi film fiksi pend...</p><div class="clear"></div></div></li><li class="item item-4 item-other"><div class="inner"><a href="http://uty.ac.id/2017/06/menwa-uty-berbagi-kebaikan-di-bulan-suci/" title="Click to read" class="item-thumbnail"><img width="300" height="199" src="http://uty.ac.id/isi/uploads//2017/06/menwa-1-300x199.jpg" class="attachment-medium" alt="item-thumbnail" title="MENWA UTY Berbagi Kebaikan di Bulan Suci" /></a><div class="meta"><a href="http://uty.ac.id/2017/06/menwa-uty-berbagi-kebaikan-di-bulan-suci/#comments" class="comment"><i class="icon"></i><span>0</span></a><a href="http://uty.ac.id/2017/06/menwa-uty-berbagi-kebaikan-di-bulan-suci/" class="date"><i class="icon"></i><span>Juni 22, 2017</span></a></div><h3 class="title"><a href="http://uty.ac.id/2017/06/menwa-uty-berbagi-kebaikan-di-bulan-suci/" title="Click to read">MENWA UTY Berbagi Kebaikan di Bulan Suci</a></h3><p class="snippet">Di bulan Ramadhan yang penuh berkah ini, Satuan Resimen Mahasiswa Universitas Teknologi Yogyakarta (UTY) kembali mengadakan kegiatan bakti sosial. Bak...</p><div class="clear"></div></div></li></ul></div><div class="clear"></div></div><aside id="text-17" class="widget widget_text news-box"><h2 class="widget-title title">Reuni Akbar Universitas Teknologi Yogyakarta (Klik disini)</h2>			<div class="textwidget"><a href="http://bit.ly/2rDl9VL" target="_blank">
<img src="http://uty.ac.id/isi/uploads//2017/07/Banner-Info-Reuni-Tracer.jpg" width="1071px" height="auto" />
</a>
</div>
		<div class="clear"></div></aside>			</section>
				
	
		
	
		
	<div class="clear"></div>
</div>

<div class="clear"></div>

	<footer id="footer">
		
					<section id="footer-section">
				<aside id="rss-2" class="widget widget_rss"><h3 class="widget-title"><a class='rsswidget' href='http://feeds.feedburner.com/go/dikti' title='Sindikasikan konten ini'><img style='border:0' width='14' height='14' src='http://uty.ac.id/ikutan/images/rss.png' alt='RSS' /></a> <a class='rsswidget' href='http://www.dikti.go.id' title='Kementerian Riset, Teknologi, dan Pendidikan Tinggi Official Site'>Kabar DIKTI</a></h3><ul><li><a class='rsswidget' href='http://feedproxy.google.com/~r/go/dikti/~3/5cvDSoeJFYE/' title='Hutan merupakan paru-paru dunia karena hutan sangat berperan penting dalam kehidupan manusia baik sebagai sumber utama penghasil oksigen, pengatur keseimbangan ekosistem maupun habitat bagi banyak makhluk hidup. Apabila terjadi  kebakaran hutan tentu saja membawa dampak buruk bagi manusia, ekosistem maupun bagi lingkungan. Dampak kebakaran hutan antara lain  [&hellip;]'>IPB Bisa Prediksi Kapan Terjadi Kebakaran Hutan Gambut</a> <span class="rss-date">September 13, 2017</span></li><li><a class='rsswidget' href='http://feedproxy.google.com/~r/go/dikti/~3/GBZqGqZKF1g/' title='Hai calon entrepreneur muda Indonesia. Kabar gembira bagi adik-adik mahasiswa se-Indonesia bahwa UTU Awards untuk tahun 2017 kembali digelar. Total hadiah 3rd UTU Awards adalah 229,5 Juta rupiah. Universitas Teuku Umar Awards (UTU Awards) adalah rangkaian kegiatan tahunan yang diselenggarakan oleh Universitas Teuku Umar sebagai salah satu wujud rasa tanggung [&hellip;]'>Pendaftaran Pembukaan 3rd UTU Awards Berhadiah 229,5 Juta</a> <span class="rss-date">September 13, 2017</span></li></ul><div class="clear"></div></aside><aside id="text-21" class="widget widget_text">			<div class="textwidget"></div>
		<div class="clear"></div></aside>				<div class="clear"></div>
			</section>
		        </footer>
			

<div class="clear"></div>

	<footer id="footer">
		
		

		<div id="copyright">
			Copyright 2016 <a href="http://uty.ac.id">Universitas Teknologi Yogyakarta </a>
		</div>
	</footer>

</div>
<a class='scrollup' href='#'>Scroll</a>


</body>
</html> 
