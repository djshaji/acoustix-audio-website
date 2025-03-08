<?php 
include_once "header.php";
?>

<main>
  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary">
    <div class="col-md-6 p-lg-5 mx-auto my-5">
      <h1 class="display-3 fw-bold logo m-4">Acoustix Audio</h1>
      <h3 class="fw-normal text-muted mb-3">Open Source Engineering</h3>
      <div class="d-flex gap-3 justify-content-center lead fw-normal">
        <a class="d-none icon-link" href="#">
          Learn more
          <svg class="bi"><use xlink:href="#chevron-right"/></svg>
        </a>
        <a class="d-none icon-link" href="#">
          Buy
          <svg class="bi"><use xlink:href="#chevron-right"/></svg>
        </a>
      </div>
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device-3 product-device-2 shadow-sm d-none d-md-block"></div>
  </div>

  <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    <div class="text-bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 py-3">
        <btn onclick="location.href='https://amprack.in'"  class="display-5">
          <img width=100 src="screens/amp.webp">
          Amp Rack
        </btn>
        <br>
        <btn onclick="location.href='https://amprack.in'" class="lead">Guitar Effects Processor</btn>
      </div>
      <div class="bg-body-tertiary shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
        <img style="object-fill: cover; object-position: -30% 0" width="100%" src="screens/amp2.webp">
      </div>
    </div>
    <div class="bg-body-tertiary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 p-3">
      <btn onclick="location.href='tone.php'" >
        <h2 class="display-5">
          <img width=100 src="screens/tone.webp">
          Tone Smith
        </h2>
        <p class="lead">Guitar Effect Pedal</p>
      </btn>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
        <img style="object-fill: cover; object-position: -30% 0" width="100%" src="screens/tone2.webp">
      </div>
    </div>
  </div>

  <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    <div class="bg-body-tertiary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 p-3">
        <btn onclick="location.href='nam.php'" >
          <h2 class="display-5">
            <img width=100 src="screens/nam.webp">
            Neural Amp
          </h2>
          <p class="lead"> (NAM+AIDA-X) Loader</p>
        </btn>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
        <img style="object-fill: cover; object-position: -30% 0" width="100%" src="screens/nam1.webp">
      </div>
    </div>
    <div class="text-bg-primary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 py-3">
      <btn onclick="location.href='ir.php'" >
        <h2 class="display-5">
          <img width=100 src="screens/ir.webp">
          Impulse Loader
        </h2>
        <p class="lead">Dual IR Loader with Resampler</p>
      </btn>
      </div>
      <div class="bg-body-tertiary shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
        <img style="object-fill: cover; object-position: -30% 0" width="100%" src="screens/ir1.webp">

      </div>
    </div>
  </div>

  <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    <div class="bg-body-tertiary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 p-3">
      <btn onclick="location.href='rec.php'" >
        <h2 class="display-5">
          <img width=100 src="screens/rec.webp">
          Voice Recorder
        </h2>
        <p class="lead">With Realtime Audio Effects</p>
        </btn>
      </div>
      <div class="bg-body shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
        <img style="object-fill: cover; object-position: -30% 0" width="100%" src="screens/rec1.webp">

      </div>
    </div>
    <div class="bg-body-tertiary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 py-3">
      <btn onclick="location.href='cam.php'" >
        <h2 class="display-5">
          <img width=100 src="screens/cam.webp">

          ASMR Camera</h2>
        <p class="lead">With Realtime Audio Effects</p>
        </btn>
      </div>
      <div class="bg-body shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
        <img style="object-fill: cover; object-position: -30% 0" width="100%" src="screens/cam1.webp">

      </div>
    </div>
  </div>

</main>

<?php
include "footer.php"
?>