<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Contact - Meiko Site</title>

    </head>
    <body class="antialiased">
<header>
        <div class="stripped bg-warning"> </div>
        <h4 class="my-2 text-center">MEIKO TRIPUTRA</h4>
        <div class="container">
              <div class="nav nav-pills nav-justified">
                  <a class="nav-link text-dark" href="/"> Home</a>
                  <a class="nav-link text-dark" href="/profile"> Profile</a>
                  <a class="nav-link text-dark" href="/portofolio">Portfolio</a>
                  <a class="nav-link text-white active bg-warning" href="/contact"> Contact</a>
              </div>
            </div>
        </div>
    </header>

        <section class="myContact" id="contact">
        <h1 class="header light">Contact</h1>
        <p class="cap-header light">Untuk mengetahui dan mencari informasi lebih lanjut tentang Saya. <br> Anda dapat mengisi form yang telah tersedia di bawah!</p>
        <div class="container-contact">
            <form id="form">
                <div class="ibox">
                    <label for="name">Name</label>
                    <input type="text" id="name" required>
                </div>
                <div class="ibox">
                    <label for="email">E-Mail</label>
                    <input type="email" id="email" required>
                </div>
                <div class="ibox">
                    <label for="noHp">No. Handphone</label>
                    <input type="tel" id="noHp" pattern="[0-9]{10,14}" required oninvalid="this.setCustomValidity('No telpon harus berupa angka dan memiliki panjang 10 sampai 14 angka')" oninput="setCustomValidity('')">
                </div>
                <div class="ibox">
                    <label for="message">Message</label>
                    <textarea name="Pesan" id="" cols="30" rows="10" required></textarea>
                </div>
                 <button type="submit" class="hub-btn
                   bg-warning text-dark space"> Kirim Pesan  &ensp;<i class="fa-solid fa-paper-plane"></i></button>
            </form>
        </div>
    </section>

    <footer>
        <p class="light">Created by 
          <a href="https://instagram.com/meikotrip_" target="_blank">Muhamad Meiko Triputra</a> 😉
        </p>
    </footer>
    <div class="stripped bg-warning"> </div>

    <script src="js/script.js"></script>
    </body>
</html>
