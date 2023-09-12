<!DOCTYPE html>
<style>
/*	@import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');body{font-family: 'Inter', sans-serif;}*/
@import url('https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap');body{font-family: 'DM Sans', sans-serif;}
</style>
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
	<?php $this->load->view('include/nav'); ?>
	<!-- Hero -->
	
	<!-- About Section -->
	<section id="header" class="flex py-8">
		<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 py-8">
			<div class="flex-none">
		    <h1 class="text-3xl font-bold text-center mb-12 text-primary">Daftar Artikel</h1>
			</div>
		</div>
	</section>

	<!-- Lists Section -->
	<section id="lists" class="flex mx-auto w-full mb-8 gap-8 px-12 columns-3">
		<div class="md:columns-4 lg:columns-4 sm:columns-1 gap-8">
			<?php foreach ($article_lists as $put) {?>
			<div class="card card-compact w-full shadow-xl mb-4 gap-4">
			  <figure><img src="<?=base_url('_assets/img/hero.jpg') ?>" alt="Shoes" /></figure>
			  <div class="card-body">
			    <h2 class="card-title"><?=$put->title_article ?></h2>
			    <p class="mb-5"><?=$put->overview_article ?></p>
			    <div class="card-actions justify-end">
			      <button class="btn btn-active btn-ghost btn-block">Read More</button>
			    </div>
			  </div>
			</div>
			<?php } ?>
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
	    <span class="footer-title"><a href="#home">Back to Top</a></span> 
	    <div class="grid grid-flow-col gap-4 text-center">
	      <a href="#home" class="block"><iconify-icon inline icon="mdi:arrow-up" height="25"></iconify-icon></a>
	    </div>
	  </div>
	</footer>
</div>
<div class="flex flex-col justify-center items-center bg-base-300 py-8">
   	<a class="mb-3"><svg width="25" height="25" viewBox="0 0 263 263" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M131.053 188.156L205.614 262.717H262.716V205.881L188.022 131.186L262.717 56.4908V0H40.3773L0 40.3773L40.1886 80.5664L124.703 80.5669L0.000947916 205.27V262.717H56.4918L131.053 188.156Z" fill="white"/>
	</svg></a>
	<p class="text-center">Raihan Akbar &copy; <?=date('Y') ?></p>
</div>

</body>
</html>