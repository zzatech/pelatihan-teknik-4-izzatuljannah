<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portofolio Saya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body style="background-color: rgb(105, 122, 207)";>
    <nav class="navbar navbar-expand-lg" style="background-color: grey;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Izzatul Jannah</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto" >
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="latihan1.html">Latihan 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="latihan2.html">Latihan 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="latihan3.html">Latihan 3</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="latihan4.html">Latihan4</a>
        </li>
       </ul>
     </div>
 </div>
    </nav>


<div class="container">
    @yield('konten_utama')
</div>

<footer class="text-center">
    <p>@My portofolio</p>
</footer>
  </body>
</html>