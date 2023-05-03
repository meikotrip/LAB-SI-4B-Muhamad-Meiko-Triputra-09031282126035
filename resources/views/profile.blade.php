<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Profile - Meiko Site</title>
    </head>
  
    <body class="antialiased">
    <header class= "fixed-nav">
        <div class="stripped bg-warning"> </div>
        <h4 class="my-2 text-center title">MEIKO TRIPUTRA</h4>
        <div class="container">
              <div class="nav nav-pills nav-justified">
                  <a class="nav-link text-dark" href="/"> Home</a>
                  <a class="nav-link text-white active bg-warning" href="/profile"> Profile</a>
                  <a class="nav-link text-dark" href="/portofolio"> Portfolio</a>
                  <a class="nav-link text-dark" href="/contact"> Contact</a>
              </div>
            </div>
        </div>
      </header>

      <a id="backtop"></a>

      <section class="aboutme" id="about">
        <h1 class="header text-dark">About Me</h1>
        <p class="cap-header">Agar lebih mengenal Saya lebih dalam, berikut adalah pengenalan diri, keterampilan dan sosial media Saya yang dilampirkan dibawah. Harapannya dengan ini dapat membuat kalian lebih tahu tentang saya.</p>
        <div class="container-about">
            <div class="experience">
                <div class="content">
                    <h3 class="sub-header">Pengenalan Diri</h3>
                    <p class="text-dark">
                        Saya merupakan Mahasiswa Sistem Informasi di Universitas Sriwijaya. Memiliki kesukaan di bidang pengembangan web membuat Saya selalu ingin mencari tahu dan mencoba hal baru yang belum Saya ketahui. 
                        Saya telah mengikuti berbagai course baik itu dalam perkuliahan maupun online dengan beban project yang dapat saya kembangkan menjadi sebuah portfolio yang menarik. Selain itu Saya juga memiliki berbagai project mandiri 
                        yang bertujuan untuk mengeksplorasi lebih luas akan ilmu yang akan Saya dapatkan. Hal ini saya lakukan agar dapat beradaptasi apabila mendapatkan sebuah project sesungguhnya.
                    </p>
                </div>
            </div>
            <div class="skills">
                <div class="content">
                    <h3 class="sub-header">Keterampilan</h3>
                    <div class="accordion">
                        <div class="skill" id="html" onclick="flip('html')">
                            <span class="hide-skill">85%</span>
                            <span class="show-skill">HTML</span>
                        </div>
                        <div class="skill" id="css" onclick="flip('css')">
                            <span class="hide-skill">80%</span>
                            <span class="show-skill">CSS</span>
                        </div>
                        <div class="skill" id="js" onclick="flip('js')">
                            <span class="hide-skill">50%</span>
                            <span class="show-skill">JavaScript</span>
                        </div>
                        <div class="skill" id="php" onclick="flip('php')">
                            <span class="hide-skill">50%</span>
                            <span class="show-skill">PHP</span>
                        </div>
                        <div class="skill" id="cpp" onclick="flip('cpp')">
                            <span class="hide-skill">50%</span>
                            <span class="show-skill">C++</span>
                        </div>
                        <div class="skill" id="python" onclick="flip('python')">
                            <span class="hide-skill">50%</span>
                            <span class="show-skill">Python</span>
                        </div>
                        <div class="skill" id="java" onclick="flip('java')">
                            <span class="hide-skill">50%</span>
                            <span class="show-skill">Java</span>
                        </div>
                        <div class="skill" id="node" onclick="flip('node')">
                            <span class="hide-skill">40%</span>
                            <span class="show-skill">Node.js</span>
                        </div>
                        <div class="skill" id="figma" onclick="flip('figma')">
                            <span class="hide-skill">65%</span>
                            <span class="show-skill">Figma</span>
                        </div>
                        <div class="skill" id="canva" onclick="flip('canva')">
                            <span class="hide-skill">85%</span>
                            <span class="show-skill">Canva</span>
                        </div>
                    </div>
                </div>
            </div>
                      <div class="interaction">
                <div class="content-3">
                    <h3 class="sub-header light">Ayo Berelasi</h3>
                    <div class="sosmed">
                        <a href="https://www.instagram.com/meikotrip_" target="_blank" class="border-sosmed">
                            <svg class="fill-and-size" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
                            </svg>
                        </a>
                        <a href="https://www.linkedin.com/in/muhamad-meiko-triputra-23823821a" target="_blank" class="border-sosmed">
                            <svg class="fill-and-size" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/>
                            </svg>
                        </a>
                        <a href="https://www.github.com/meikotrip" target="_blank" class="border-sosmed">
                            <svg class="fill-and-size" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/>
                            </svg>
                        </a>
                        <a href="https://www.facebook.com/meiko.triputra" target="_blank" class="border-sosmed">
                            <svg class="fill-and-size" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"/>
                            </svg>
                        </a>
                    </div>
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
    <script src="js/script.js"></script>
    <script src="js/jquery-3.6.0.js"></script>
    <script>
    $(document).ready(function() {
        var btn = $('#backtop');

        $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
        });

        btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop:0}, '1000');
        });
    });
    </script>
</html>
