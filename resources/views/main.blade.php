<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>employee-crud</title>
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <form class="form-inline">
                <input class="form-control " type="search" placeholder="Search" aria-label="Search">
                <button id="search-button" type="submit" class="btn btn-primary">
                    <i class="fas fa-search"></i>
                </button>
            </form>
            <div class="dropdown">
                <a data-mdb-dropdown-init class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#"
                    id="navbarDropdownMenuAvatar" role="button" aria-expanded="false">
                    <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" height="35"
                        alt="Black and White Portrait of a Man" loading="lazy" />
                </a>
            </div>
        </div>
    </nav>
    <div class="navman text-center bg-dark pb-2 text-light">
        <h3>Dashboard</h3>
        <p>pegawai / dashboard</p>
    </div>


    {{-- Table start --}}
    <div class="container mt-4">
        <div class="headertable bg-dark">
            <div class="row">
                <div class="col-sm-6">
                    <h5 class="mt-3 ml-4 text-light">Kelola Pegawai</h4>
                </div>
                <div class="col-sm-6">
                    <button type="button" class="mr-1 btn btn-success mt-2 mr-4 mb-2 float-right" data-toggle="modal"
                        data-target="#addemployee"><i class="fa fa-sm fa-plus-square" aria-hidden="true"></i> Tambah
                        Pegawai
                        Baru</button>
                </div>
            </div>
        </div>
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIP</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Aksi</th>
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
                        <td><a type="button" class="mr-1 btn btn-primary" href="{{ url('edit/' . $item->id) }}"><i
                                    class="fa fa-sm fa-pencil" aria-hidden="true"></i></a>
                            <a type="button" class="btn btn-danger" href="{{ url('delete/' . $item->id) }}"><i
                                    class="fa fa-sm fa-trash" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- Footer Start --}}
    <footer class="text-center text-sm-start bg-dark text-light">
        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            ©2024 Copyright:
            <a class="text-reset fw-bold" href="https://github.com/fahherd">Fajar Herdiansyah</a>
        </div>
    </footer>

    {{-- Modal Start --}}
    <div id="addemployee" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-light">Tambah Data Pegawais</h5>
                    <button type="button" class="close btn-danger" data-dismiss="modal" aria-label="Close">
                        <span class="text-light" aria-hidden="true">&times;</span>
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
                                        <input class="form-control border border-dark" type="text" id="fname"
                                            name="name" placeholder="Nama pegawai.." autocomplete="off"
                                            autofocus="on" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="lname">NIP</label>
                                        <input class="form-control border border-dark" type="number" id="lname"
                                            name="nip" placeholder="NIP pegawai.." autocomplete="off"
                                            minlength="8" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label class="mt-2 pt-1">Jenis kelamin</label>
                                        <select class="form-control border border-dark" name="gender" required>
                                            <option value="" selected disabled>Pilih kelamin</option>
                                            <option value="pria">Pria</option>
                                            <option value="wanita">Wanita</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12">
                                        <label class="mt-2 pt-1" for="lname">Foto</label>
                                        <input class="form-control border border-dark" type="file" id="lname"
                                            name="image" accept="image/*" required>
                                        <small id="emailHelp" class="form-text text-danger">Max 2MB.</small>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Submit</button>
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
