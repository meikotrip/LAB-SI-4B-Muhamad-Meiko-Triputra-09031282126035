<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Contact - Meiko Site</title>
    </head>
  
    <body class="antialiased">
    <header>
        <div class="stripped bg-warning"> </div>
        <h4 class="my-2 text-center title">MEIKO TRIPUTRA</h4>
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
    <form id="form" data-sb-form-api-token="bf7f1a64-7f1e-4031-8c22-82c26a5bb064">
        <div class="ibox">
            <label class="form-label" for="nama">Nama</label>
            <input class="form-control" id="nama" type="text" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="nama:required">Nama is required.</div>
        </div>
        <div class="ibox">
            <label class="form-label" for="email">Email</label>
            <input class="form-control" id="email" type="email" data-sb-validations="required,email" />
            <div class="invalid-feedback" data-sb-feedback="email:required">Email is required.</div>
            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
        </div>
        <div class="ibox">
            <label class="form-label" for="message">Message</label>
            <textarea class="form-control" id="message" type="text" style="height: 10rem;" data-sb-validations="required"></textarea>
            <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
        </div>
        <div class="d-none" id="submitSuccessMessage">
            <div class="text-center text-success font-weight-bold mb-3">Success Sending message!</div>
        </div>
        <div class="d-none" id="submitErrorMessage">
            <div class="text-center text-danger font-weight-bold mb-3">Error sending message!</div>
        </div>
        <div class="d-grid">
            <button class="hub-btn bg-warning text-dark space disabled" id="submitButton" type="submit">Kirim Pesan &ensp;<i class="fa-solid fa-paper-plane"></i></button>
        </div>
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
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
