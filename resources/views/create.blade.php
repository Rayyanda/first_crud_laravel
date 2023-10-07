<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    @include('header')
    <div class="container-lg mt-5 pt-3">
        <a class="btn btn-primary" href="/mahasiswa" >Back</a>
        <form method="post" action="/tambah_data">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NIM</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nim">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nama</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="nama_mahasiswa">
            </div>
            <div class="mb-3 form-check">
                <label for="exampleInputPassword1" class="form-label">Prodi</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="prodi_mahasiswa">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>