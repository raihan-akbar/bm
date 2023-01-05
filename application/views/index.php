<!DOCTYPE html>
<html data-theme="halloween" class="scroll-smooth">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/daisyui@2.46.0/dist/full.css" rel="stylesheet" type="text/css" />
	<script src="https://cdn.tailwindcss.com"></script>
	<script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
	<?php $this->load->view('include/head'); ?>
	<title>Yayasan Bumi Manira</title>
</head>
<body>
	<!-- Nav -->
	<nav class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
		<div class="navbar">
		  <div class="flex-1">
		  	<div class="w-10 rounded-full">
					<img src="<?=base_url('_assets/img/sys/main-logo.png')?>">
		  	</div>
		  </div>
		  <div class="flex-none">
		    <div class="dropdown dropdown-end">
		      <label tabindex="0" class="btn btn-ghost btn-circle">
		      	<iconify-icon icon="mdi:menu" height="30"></iconify-icon>
		      </label>
		      <div tabindex="0" class="mt-3 card card-compact dropdown-content w-60 bg-base-100 shadow">
		        <div class="card-body">
		          <ul class="text-lg">
		          	<li class="mb-2"><a href="#about">About Us</a></li>
		          	<li class="mb-2"><a href="#portfolio">Portfolio</a></li>
		          	<li class="mb-2"><a href="#contact">Contact</a></li>
		          	<!-- <li class="mb-2"><a href="#gallery">Gallery</a></li> -->
		          </ul>
		          <hr/>
		          <span class="text-default font-bold">More Pages</span>
		          <ul class="text-lg mb-2">
		          	<li class="text-default mb-2"><a href="<?=base_url('driyamedia/') ?>">Driya Media</a></li>
		          	<li class="text-default mb-2"><a href="">Pustaka</a></li>
		          	<li class="text-default mb-2"><a href="">Koperasi</a></li>
		          	<li class="text-default mb-2"><a href="">Kanal Fasilitator</a></li>
		          </ul>
		          <hr/>
		          <hr/>

		        </div>
		      </div>
		    </div>
		  </div>
		</div>
	</nav>
	<!-- Hero -->
	<div class="hero min-h-screen" style="background-image: url(<?=base_url('_assets/img/hero.jpg') ?>);">
	  <div class="hero-overlay bg-opacity-80"></div>
	  <div class="hero-content text-center text-neutral-content">
	    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
	      <h1 class="mb-8 text-5xl font-bold text-primary">Yayasan Bumi Manira</h1>
	      <p class="mb-12">Yayasan Bumi Manira (YBM) adalah Organisasi Non Profit yang berbasis di Bandung, Jawa Barat, Indonesia, didirikan pada tahun 1987. Pada masa lalu lebih dikenal dengan nama Studio Driya Media (SDM) yang merupakan unit operasional dari YBM.</p>
	      <a href="#about"><p class="font-bold ">Read More</p></a><span>
	      <a href="#about"><span class="mb-2"><iconify-icon inline icon="mdi:chevron-down" height="25"></iconify-icon></span></a></span>
	    </div>
	  </div>
	</div>

	<!-- About Section -->
	<section id="about" class="flex py-12 mb-12">
		<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 mb-6 py-12">
			<div class="flex-none">
		    <h1 class="text-3xl font-bold text-center mb-12 text-primary">About Us</h1>
		    <p class="text-justify mb-5">Yayasan Bumi Manira (YBM) adalah Organisasi Non Profit yang berbasis di Bandung, Jawa Barat, Indonesia, didirikan pada tahun 1987. Pada masa lalu lebih dikenal dengan nama Studio Driya Media (SDM) yang merupakan unit operasional dari YBM.</p>
		    <p class="text-justify mb-5">YBM bekerja dalam bidang Metodologi Komunikasi Pembangunan dengan melayani lembaga-lembaga pembangunan baik itu pemerintah, lembaga masyarakat, lembaga internasional maupun swasta agar lebih efektif di dalam mengembangkan komunikasi ,edukasi, dan informasi dengan masyarakat dalam berbagai isu pembangunan masyarakat. Harapan YBM dengan melalui komunikasi yang lebih efektif dan penggunaan media yang tepatguna, efektifitas layanan akan meningkat dan masyarakat akan lebih kritis untuk mendapatkan keuntungan lebih bagi tujuan kesejahteraan mereka.</p>
			</div>
			<div class="gap-4 columns-1 mb-2">
				<div class="mb-2 text-base-content">
					<p class="font-bold text-left mb-2">Visi <small>&</small> Misi</p>
					<p class="text-justify mb-2">Terpenuhinya hak masyarakat untuk mendapatkan pendidikan baik formal maupun informal dan akses informasi yang setara untuk memenuhi penghidupan mereka.</p>
					<p class="text-justify mb-5">Memberikan pelayanan, dukungan, dan masukan kebijakan kepada lembaga-lembaga pembangunan yang mempunyai komitmen pada masyarakat marjinal dan menjunjung nilai pembangunan  berkelanjutan melalui pengembangan metodologi dan media komunikasi yang tepatguna.</p>
				</div>
			</div>
			
		</div>
	</section>

	<!-- Portfolio -->
	<section id="portfolio" class="flex py-2">
		<div class="mx-auto max-w-7xl">
		  <h1 class="text-3xl font-bold text-center mb-12 text-primary">Portfolio</h1>
		  	<div class="md:columns-3 lg:columns-3 sm:columns-1 gap-8 mb-6">	
			  	<div class="card card-compact w-96 shadow-xl mb-4 ">
					  <figure><img src="https://placeimg.com/400/225/arch" alt="Shoes" /></figure>
					  <div class="card-body">
					    <h2 class="card-title">Shoes!</h2>
					    <p class="mb-5">If a dog chews shoes whose shoes does he choose?</p>
					    <div class="card-actions justify-end">
					      <button class="btn btn-active btn-ghost btn-block">Buy Now</button>
					    </div>
					  </div>
					</div>
					<div class="card card-compact w-96 shadow-xl mb-4 ">
					  <figure><img src="https://placeimg.com/400/225/arch" alt="Shoes" /></figure>
					  <div class="card-body">
					    <h2 class="card-title">Shoes!</h2>
					    <p class="mb-5">If a dog chews shoes whose shoes does he choose?</p>
					    <div class="card-actions justify-end">
					      <button class="btn btn-active btn-ghost btn-block">Buy Now</button>
					    </div>
					  </div>
					</div>
					<div class="card card-compact w-96 shadow-xl mb-4 ">
					  <figure><img src="https://placeimg.com/400/225/arch" alt="Shoes" /></figure>
					  <div class="card-body">
					    <h2 class="card-title">Shoes!</h2>
					    <p class="mb-5">If a dog chews shoes whose shoes does he choose?</p>
					    <div class="card-actions justify-end">
					      <button class="btn btn-active btn-ghost btn-block">Buy Now</button>
					    </div>
					  </div>
					</div>
				</div>
		</div>
	</section>

	<!-- Gallery -->
	<section id="gallery" class="overflow-hidden text-gray-700 mb-5">
	  <div class="container px-5 py-2 mx-auto lg:pt-24 lg:px-32 mb-12">
	    <div class="carousel carousel-center max-w-7xl p-4 space-x-4 shadow-xl bg-neutral rounded-box">
			  <div class="carousel-item">
			    <img src="https://placeimg.com/250/180/arch" class="rounded-box" />
			  </div> 
			  <div class="carousel-item">
			    <img src="https://placeimg.com/250/180/arch" class="rounded-box" />
			  </div> 
			  <div class="carousel-item">
			    <img src="https://placeimg.com/250/180/arch" class="rounded-box" />
			  </div> 
			  <div class="carousel-item">
			    <img src="https://placeimg.com/250/180/arch" class="rounded-box" />
			  </div> 
			  <div class="carousel-item">
			    <img src="https://placeimg.com/250/180/arch" class="rounded-box" />
			  </div> 
			  <div class="carousel-item">
			    <img src="https://placeimg.com/250/180/arch" class="rounded-box" />
			  </div> 
			  <div class="carousel-item">
			    <img src="https://placeimg.com/250/180/arch" class="rounded-box" />
			  </div>
			</div>
	  </div>
	</section>

	<div class="mx-auto max-w-7xl columns-1 mb-32">
		<a class="btn btn-block btn-ghost">Read More Article <iconify-icon inline icon="mdi:chevron-right" height="25"></iconify-icon></a>
	</div>

	<!-- Contact -->
	<section id="contact" class="flex py-8 mb-12">
		<div class="container mx-auto max-w-7xl">
		  <h1 class="text-3xl font-bold text-center text-primary mb-16">Let's get in Touch</h1>
		  <div class="md:columns-3 sm:columns-1 text-center">
		  	<div class="mb-12">
		  		<iconify-icon inline icon="mdi:phone" height="40"></iconify-icon>
		  		<h5 class="title">+62 811 122 1030</h5>
		  	</div>
		  	<div class="mb-12">
		  		<iconify-icon inline icon="mdi:envelope" height="40"></iconify-icon>
		  		<h5 class="title">punten@renan.fun</h5>
		  	</div>
		  	<div class="mb-12">
		  		<iconify-icon inline icon="mdi:map" height="40"></iconify-icon>
		  		<h5 class="title"><b>Bandung</b>, Indonesia</h5>
		  	</div>
		  </div>
		  <div class="form-group mb-12">
		  	<div class="md:columns-2 sm:columns-1 mb-6">
		  		<div class="form-control ">
		  			<input type="text" placeholder="Full Name" class="input input-bordered w-full max-w-7xl" />
		  		</div>
		  		<div class="form-control ">
		  			<input type="text" placeholder="Email Address" class="input input-bordered w-full max-w-7xl" />
		  		</div>
		  	</div>
		  	<div class="columns-1 mb-6">
		  		<div class="form-control">
		  			<input type="text" placeholder="Your Message..." class="textarea textarea-bordered w-full max-w-7xl h-24" />
		  		</div>
		  	</div>
		  	<div class="columns-1 mb-12">
		  		<div class="form-control">
					<button class="btn btn-ghost btn-active">Send Message</button>
		  		</div>
		  	</div>
		  </div>
		</div>
	</section>

<!-- Footer -->
<div class="bg-base-300">
	<footer class="footer p-10 text-base-content mx-auto max-w-7xl">
	  <div>
	    <span class="footer-title">Navigation</span> 
	    <a href="#about" class="link link-hover">About Us</a> 
	    <a href="#portfolio" class="link link-hover">Portfolio</a> 
	    <a href="#galley" class="link link-hover">Gallery</a> 
	    <a href="#contact" class="link link-hover">Contact</a>
	  </div> 
	  <div>
	    <span class="footer-title">More From Us</span>
	    <a class="link link-hover">Driya Media</a>
			<a class="link link-hover">Pustaka</a>
			<a class="link link-hover">Koperasi</a>
			<a class="link link-hover">Kanal Fasilitator</a>
	  </div> 
	  <div>
	    <span class="footer-title">Developer</span> 
	    <div class="grid grid-flow-col gap-4">
	      <a><svg width="24" viewBox="0 0 263 263" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M131.053 188.156L205.614 262.717H262.716V205.881L188.022 131.186L262.717 56.4908V0H40.3773L0 40.3773L40.1886 80.5664L124.703 80.5669L0.000947916 205.27V262.717H56.4918L131.053 188.156Z" fill="white"/></svg></a>
	    </div>
	  </div>
	</footer>
</div>
<div class="columns-1 py-8 bg-base-300">
	<div><p class="text-center">Felkies &copy; <?=date('Y') ?></p></div>
</div>
</body>
</html>