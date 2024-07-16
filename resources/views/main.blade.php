<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>employee-crud</title>
</head>

<body>

    <div class="container mt-1">
        <h1 class="text-center">DATA PEGAWAI</h1>
        <hr>
        <button type="button" class="mr-1 btn btn-success mb-1" data-toggle="modal"
            data-target="#addemployee">Tambah</button>
        <table class="table text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIP</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Alat</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr class="mb-5">
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <img src="{{ asset('images/' . $item->image) }}" alt="images" width="70"
                                height="80">
                        </td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->nip }}</td>
                        <td>{{ $item->gender }}</td>
                        <td><a type="button" class="mr-1 btn btn-primary"
                                href="{{ url('edit/' . $item->id) }}">Edit</a>
                            <a type="button" class="btn btn-danger" href="{{ url('delete/' . $item->id) }}">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div id="addemployee" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data Pegawais</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <form action="{{ url('/submit') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="fname">Nama</label>
                                        <input class="form-control" type="text" id="fname" name="name"
                                            placeholder="Nama pegawai.." autocomplete="off" autofocus="on" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="lname">NIP</label>
                                        <input class="form-control" type="number" id="lname" name="nip"
                                            placeholder="NIP pegawai.." autocomplete="off" minlength="8" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="">Jenis kelamin</label>
                                        <select class="form-control" name="gender" required>
                                            <option value="" selected disabled>Pilih kelamin</option>
                                            <option value="pria">Pria</option>
                                            <option value="wanita">Wanita</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="lname">Foto</label>
                                        <input class="form-control" type="file" id="lname" name="image"
                                            accept="image/*" required>
                                        <small id="emailHelp" class="form-text text-danger">Max 2MB.</small>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Kirim</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
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
