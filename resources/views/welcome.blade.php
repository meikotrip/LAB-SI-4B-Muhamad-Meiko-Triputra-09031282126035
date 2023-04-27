<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Home - Meiko Site</title>

    </head>
    <body class="antialiased">
      <header>
        <div class="stripped bg-warning"> </div>
        <h4 class="my-2 text-center">MEIKO TRIPUTRA</h4>
        <div class="container">
              <div class="nav nav-pills nav-justified">
                  <a class="nav-link active bg-warning text-white" href="/"> Home</a>
                  <a class="nav-link text-dark" href="/profile"> Profile</a>
                  <a class="nav-link text-dark" href="/portofolio"> Portfolio</a>
                  <a class="nav-link text-dark" href="/contact"> Contact</a>
              </div>
        </div>
      </header>

    <section class="homepage" id="home">
        <div class="home-img">
            <svg class="home-blob" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <mask id="mask0" mask-type="alpha">
                    <path fill="#FF0066" d="M47.9,-61C58.4,-48.3,60.6,-29.7,64.8,-10.7C69.1,8.3,75.3,27.7,67.9,38C60.5,48.2,39.5,49.4,21.5,53.6C3.5,57.8,-11.4,65,-25.8,63.1C-40.1,61.2,-54,50.2,-63,35.8C-71.9,21.4,-76,3.7,-75.3,-15.5C-74.6,-34.7,-69.2,-55.4,-55.8,-67.6C-42.5,-79.7,-21.3,-83.5,-1.3,-82C18.7,-80.5,37.5,-73.7,47.9,-61Z" transform="translate(100 100)" />  
                </mask>
                <g mask="url(#mask0)">
                    <path fill="#ffc107" d="M47.9,-61C58.4,-48.3,60.6,-29.7,64.8,-10.7C69.1,8.3,75.3,27.7,67.9,38C60.5,48.2,39.5,49.4,21.5,53.6C3.5,57.8,-11.4,65,-25.8,63.1C-40.1,61.2,-54,50.2,-63,35.8C-71.9,21.4,-76,3.7,-75.3,-15.5C-74.6,-34.7,-69.2,-55.4,-55.8,-67.6C-42.5,-79.7,-21.3,-83.5,-1.3,-82C18.7,-80.5,37.5,-73.7,47.9,-61Z" transform="translate(100 100)" />
                    <image href="images/myFoto.png" width="130px" x="35" y="15"></image>
                </g>
            </svg>
        </div>
        <div class="home-desc">
            <div class="desc">
                <h3 class="subhead">Hello World, Welcome to my personal website. My name is</h3>
                <h1 class="head">Muhamad Meiko Triputra</h1>
                <h2 class="thin-head">Mahasiswa</h2>
                <p class="info-p">
                    Seorang Mahasiswa jurusan Sistem Informasi di Universitas Sriwijaya, dan 
                    Memiliki keinginan yang besar menjadi seorang yang ahli dalam bidang pengembangan Web.
                </p>
                <div class="hub">
                    <a target="_blank" href="https://wa.me/6289620156698" class="hub-btn bg-warning text-dark">Hubungi Saya  &ensp;<i class="fa-solid fa-paper-plane"></i></a>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <p class="light">Created by 
          <a href="https://instagram.com/meikotrip_" target="_blank">Muhamad Meiko Triputra</a> 😉
        </p>
    </footer>  
    <div class="stripped bg-warning"> </div>
    </body>
</html>
