<!DOCTYPE html>
<html data-theme="halloween" class="scroll-smooth">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/daisyui@2.46.0/dist/full.css" rel="stylesheet" type="text/css" />
	<script src="https://cdn.tailwindcss.com"></script>
	<script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
	<?php $this->load->view('include/head'); ?>
	<title>Studio Driya Media</title>
</head>
<body>
	<!-- Hero -->
<form action="<?=base_url('signin') ?>" method="post" class="mx-auto w-half">
	<div class="hero min-h-screen" style="background-color: ;">
	  <div class="hero-overlay bg-opacity-80"></div>
		<div class="container mx-auto max-w-2xl">
			<div class="flex flex-col justify-center items-center py-2">
				<a class="mb-3">
				<img width="100%" src="<?=base_url('_assets/img/sys/favicon-96x96.png') ?>">
				</a>
			</div>
		  <h1 class="text-4xl font-bold text-center text-primary mb-8">Yayasan Bumi Manira</h1>
		  <p class="text-center text-red-600 mb-2 py-2"><span style="color: transparent;">'</span><?=$this->session->flashdata('flash'); ?></p>
		  <div class="form-group mb-12">
		  	<div class="columns">
		  		<div class="form-control ">
		  			<input type="text" placeholder="Email Address" name="email" class="input input-bordered w-full max-w-7xl mb-3 gap-4" />
		  		</div>
		  		<div class="form-control ">
		  			<input type="password" placeholder="Password" name="password" class="input input-bordered w-full max-w-7xl mb-3 gap-4" />
		  		</div>
		  	</div>
		  	<div class="columns-1 mb-12">
		  		<div class="form-control">
					<button class="btn btn-info btn-active">Sign in</button>
		  		</div>
		  	</div>
		  	<div class="text-center">
		  		<p class="py-6"><a href="<?=base_url('/') ?>">Back to Home</a> <code class="text-sm"><small>|</small></code> <a href="">Forgot Password</a></p>
		  	</div>
		  </div>
		</div>
	</div>
</form>

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
	    <span class="footer-title">Find Us on</span> 
	    <div class="grid grid-flow-col gap-4">
	      <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg></a>
	      <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path></svg></a>
	      <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path></svg></a>
	    </div>
	  </div>
	</footer>
</div>
	<div class="columns-1 py-12 bg-base-300">
  	<div><p class="text-center">Felkies &copy; <?=date('Y') ?></p></div>
  </div>
</body>
</html>