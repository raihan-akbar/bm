<?php foreach ($user_info as $put) {} ?>
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
                  <span class="hidden text-base-content"><?=date('d M Y') ?> </span>
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
                <!-- <iconify-icon inline icon="mdi:user" height="20"></iconify-icon> -->
                <span class="text-lg"><?=$put->name ?></span>
                <span class="md:inline"><iconify-icon inline icon="mdi:chevron-down" height="20"></iconify-icon></span>
              </div>
              <div tabindex="0" class="mt-3 card card-compact dropdown-content w-60 bg-base-300 shadow">
                <div class="card-body">
                  <ul class="text-lg font-bold">
                    <li class="mb-2 py-2"><a href="#about">Account</a></li>
                    <li class="mb-2 py-2"><a href="#portfolio">Settings</a></li>
                    <li class="mb-2 py-2"><a href="#contact">Password</a></li>
                    <li class="mb-2 py-2 text-red-600"><a href="#contact">Sign Out</a></li>
                    <!-- <li class="mb-2"><a href="#gallery">Gallery</a></li> -->
                  </ul>
                  <hr/>
              </div>
            </div>
          </div>
        </nav>
      </div>