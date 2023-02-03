<!DOCTYPE html>
<style>
  /*  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');body{font-family: 'Inter', sans-serif;}*/
  @import url('https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap');body{font-family: 'DM Sans', sans-serif;}
</style>
<html data-theme="halloween" class="scroll-smooth">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->load->view('include/head'); ?>
    <title>Yayasan Bumi Manira</title>
  </head>
  <body>
    <?php foreach($user_info as $put) {} ?>
    <div class="bg-base-100 drawer drawer-mobile">
    <input id="drawer" type="checkbox" class="drawer-toggle">
    <div class="drawer-content" style="scroll-behavior: smooth; scroll-padding-top: 5rem;">
      <?php $this->load->view('include/top-dash'); ?>
      <div class="px-6 xl:pr-2 pb-16">
        <div class="flex flex-col-reverse justify-between gap-6 xl:flex-row">
          <div class="prose w-full max-w-4xl flex-grow">
            <!-- Start Content Here -->
            <div class="py-5">
              <div class="container-2xl mx-auto">
                <div class="card shadow-xl container-2xl">
                  <div class="card-body">
                    <p>aaa</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Content Here -->
          </div>
        </div>
      </div>
    </div>
    <?php $this->load->view('include/left-dash'); ?>
  </body>
</html>