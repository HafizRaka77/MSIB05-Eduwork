<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body{
            font-family: Arial;
            margin: 0px;
        }
        nav{
            margin-bottom: 30px;
        }
    </style>    
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-warning p-1 px-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/book.png" alt="book" width="35" height="35">
            </a>
            <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                    aria-controls="navbarSupportedContent" aria-expanded="false" 
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item me-4">
                    <a class="nav-link fw-semibold active"aria-current="page"href="index.php">Home</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link fw-semibold active"aria-current="page"href="pengarang.php">Pengarang</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link fw-semibold active"aria-current="page"href="penerbit.php">Penerbit</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link fw-semibold active"aria-current="page"href="buku.php">Buku</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <div class="row align-items-center mb-5 mx-4 px-4">
        <div class="col-6" style=" text-align: justify;">
            <h2><b>My Library</b></h2>
            <p> A library is a collection of books, and possibly other materials and media, that is accessible 
                for use by its members and members of allied institutions. Libraries provide physical (hard copies) 
                or digital (soft copies) materials, and may be a physical location, a virtual space, or both. A library's 
                collection normally includes printed materials which may be borrowed, and usually also includes a reference 
                section of publications which may only be utilized inside the premises. </p>
            <a class="btn btn-warning" href="https://en.wikipedia.org/wiki/Library" role="button">More...</a>
        </div>
        <div class="col-6 text-end">
            <img src="img/perpus.png" width="400" alt>
        </div>
    </div>
    <footer>
        <div class="text-center text-dark p-2" style="background-color: orange;"><b>
            Copyright © 2023 Hafiz Raka Pradana<b>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>