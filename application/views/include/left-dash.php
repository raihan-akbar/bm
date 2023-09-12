<?php foreach ($user_info as $put) {} ?>
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
          <span class="flex-1 font-bold">Navigation Menu</span>
        </p>
      </li>
    </ul>
    <ul class="menu menu-compact flex flex-col p-0 px-4">
      <li></li>
      <!-- <li class="menu-title"><span>Actions</span></li> -->
      <li>
        <a sveltekit:prefetch href="/components/button" id="" class="flex gap-12 ">
          <span class="flex-1 text-md font-bold">Dashboard</span>
        </a>
      </li>
    </ul>