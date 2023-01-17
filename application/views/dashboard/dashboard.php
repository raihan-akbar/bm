<!DOCTYPE html>
<style>
  /*  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');body{font-family: 'Inter', sans-serif;}*/
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
    <div class="bg-base-100 drawer drawer-mobile">
    <input id="drawer" type="checkbox" class="drawer-toggle">
    <div class="drawer-content" style="scroll-behavior: smooth; scroll-padding-top: 5rem;">
      <div class="\n sticky top-0 z-30 flex h-16 w-full justify-center bg-opacity-90 backdrop-blur transition-all duration-100 \n  bg-base-100 text-base-content\n  ">
        <nav class="navbar w-full">
          <div class="flex flex-1 md:gap-1 lg:gap-2">
            <span class="text-primary tooltip tooltip-bottom before:text-xs before:content-[attr(data-tip)]" data-tip="Menu">
              <label for="drawer" class="btn btn-square btn-ghost drawer-button lg:hidden">
                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block h-5 w-5 stroke-current md:h-6 md:w-6">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
              </label>
            </span>
            <div class="flex items-center gap-2 lg:hidden">
              <a href="/" aria-current="page" aria-label="Homepage" class="flex-0 btn btn-ghost px-2 ">
                <div class="font-title text-primary inline-flex text-lg transition-all duration-200 md:text-3xl">
                  <span class="text-base-content"><?=date('d M Y') ?> </span>
                  <!-- <span class="text-primary"> Page</span> -->
                  <!-- <img class="w-8" src="<?=base_url('_assets/img/sys/main-logo.png') ?>"> -->
                </div>
              </a>
            </div>
            <div class="hidden w-full max-w-sm lg:flex">
            </div>
          </div>
          <div class="flex-0">
            <div title="Change Theme" class="dropdown dropdown-end ">
              <div tabindex="0" class="btn gap-1 normal-case btn-ghost">
                <iconify-icon inline icon="mdi:user" height="20"></iconify-icon>
                <span class="hidden md:inline"> <small> - </small> Admin</span>
              </div>
              <div tabindex="0" class="mt-3 card card-compact dropdown-content w-60 bg-base-300 shadow">
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
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
      <div class="px-6 xl:pr-2 pb-16">
        <div class="flex flex-col-reverse justify-between gap-6 xl:flex-row">
          <div class="prose w-full max-w-4xl flex-grow">
            <!-- Your Content Here -->
            
          </div>
        </div>
      </div>
    </div>
    <div class="drawer-side" style="scroll-behavior: smooth; scroll-padding-top: 5rem;">
    <label for="drawer" class="drawer-overlay"></label>
    <aside class="bg-base-200 w-80">
    <div class="flex flex-col justify-center items-center z-20 bg-base-200 bg-opacity-90 backdrop-blur sticky top-0 items-center gap-2 px-4 py-2 hidden lg:flex">
      <a aria-current="page" aria-label="Homepage" class="flex-0 btn btn-ghost btn-circle px-2">
        <div class="font-title text-primary inline-flex text-lg transition-all duration-200 md:text-3xl">
          <!-- <span class="lowercase">daisy</span> -->
          <!-- <span class="text-base-content uppercase">UI</span> -->
          <img class="w-10" src="<?=base_url('_assets/img/sys/main-logo.png') ?>">

        </div>
      </a>
    </div>
    <div class="h-4 lg:h-none"></div>
    <ul class="menu menu-compact flex flex-col p-0 px-4">
      <li class="disabled">
        <p class="flex gap-4">
          <span class="flex-none">
            <iconify-icon inline icon="fa:code-fork" height="20"></iconify-icon>
          </span>
          <span class="flex-1 font-bold">Navigation</span>
        </p>
      </li>
    </ul>
    <ul class="menu menu-compact flex flex-col p-0 px-4">
      <li></li>
      <!-- <li class="menu-title"><span>Actions</span></li> -->
      <li><a sveltekit:prefetch href="/components/button" id="" class="flex gap-4   ">
        <span class="flex-1">Dashboard</span>
        </a>
      </li>
    </ul>
  </body>
</html>