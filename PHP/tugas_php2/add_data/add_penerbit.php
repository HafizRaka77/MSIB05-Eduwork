<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Penerbit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body{
            font-family: Arial;
        }
    </style>    
</head>
<body>
    <div class="container mb-3 mt-3">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <p class ="fw-semibold" style="font-size:18px;">Add Penerbit
                            <a href="../penerbit.php" class="btn btn-danger float-end">Back</a>
                        </p>
                    </div>
                    <div class="card-body">
                        <form action="../backend/proses_add_penerbit.php" method="POST">
                            <div class="mb-3">
                                <label>Id Penerbit</label>
                                <input type="text" name="id" class="form-control" required="">
                            </div>
                            <div class="mb-3">
                                <label>Nama Penerbit</label>
                                <input type="text" name="nama" class="form-control" required="">
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" required="">
                            </div>
                            <div class="mb-3">
                                <label>Telp</label>
                                <input type="number" name="telp" class="form-control" required="">
                            </div>
                            <div class="mb-3">
                                <label>Alamat</label>
                                <textarea class="form-control "name="alamat" rows="3" required=""></textarea>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="submit" class="btn btn-primary" onclick="return confirm('Are you sure want to save your changes?');">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>