<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>edit-data</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-12">
            </div>
            <div class="card mx-auto">
                <div class="card-head bg-dark pt-3 pb-2">
                    <h5 class="card-title text-center text-light">Edit Data Pegawai</h5>
                </div>
                <div class="card-body">
                    <form action="{{ url('/updatedata') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $data->id }}">
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="fname">Nama</label>
                                <input class="form-control" type="text" id="fname" name="name"
                                    value="{{ $data->name }}" placeholder="Nama pegawai.." autocomplete="off"
                                    autofocus="on" required>
                            </div>
                            <div class="col-sm-12">
                                <label class="pt-1" for="lname">NIP</label>
                                <input class="form-control" type="number" id="lname" name="nip"
                                    value="{{ $data->nip }}" placeholder="NIP pegawai.." autocomplete="off" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <label class="pt-1">Jenis kelamin</label>
                                <select class="form-control" name="gender" required>
                                    <option value="{{ $data->gender }}" selected>{{ $data->gender }}</option>
                                    <option value="" disabled>Pilih kelamin</option>
                                    <option value="pria">Pria</option>
                                    <option value="wanita">Wanita</option>
                                </select>
                            </div>
                            <div class="col-sm-12">
                                <label class="pt-1" for="lname">Foto</label>
                                <input class="form-control" type="file" id="lname" name="image"
                                    accept="image/*">
                                <small id="emailHelp" class="form-text text-danger">Max 2MB.</small>
                                <input type="submit" class="btn btn-success mt-1" value="Submit">
                                <a href="{{ '/' }}" type="button"
                                    class="btn btn-secondary mt-1 ml-1">Batal</a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
