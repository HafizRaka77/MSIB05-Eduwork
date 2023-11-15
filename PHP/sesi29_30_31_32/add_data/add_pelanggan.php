<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Pelanggan</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body{
            font-family: Arial;
        }
    </style>    
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <p class ="fw-semibold" style="font-size:18px;">Add Pelanggan
                            <a href="../index.php" class="btn btn-danger float-end">Back</a>
                        </p>
                    </div>
                    <div class="card-body">
                        <form id="form_add" action="../backend/proses_add_pelanggan.php" method="POST">
                            <div class="mb-3">
                                <label>Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control" required="">
                            </div>
                            <div class="mb-3">
                                <label>Jenis Kelamin</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="pria" checked="">
                                    <label class="form-check-label">
                                    pria
                                    </label>  
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="wanita">
                                    <label class="form-check-label">
                                    wanita
                                    </label>  
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>Telpon</label>
                                <input type="number" name="telpon" id="telp" class="form-control" required="">
                            </div>
                            <div class="mb-3">
                                <label>Alamat</label>
                                <textarea class="form-control "name="alamat" id="alamat" rows="3" required=""></textarea>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="submit" id="submit" class="btn btn-primary" disabled="" onclick="return confirm('Are you sure want to save your changes?');">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
    $('#form_add input').on('input', function() {
        var formFilled = true;
            $('#form_add input').each(function() {
                if ($(this).val() === '') {
                formFilled = false;
            }
        });
        if (formFilled) {
          $('#submit').prop('disabled', false);
        } else {
          $('#submit').prop('disabled', true);
        }
    });
});
</script>