<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit</title>
</head>
<body>
    @include('header')
    <div class="container-lg mt-5 pt-3">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <th scope="col" >NIM</th>
                            <th scope="col" >Nama</th>
                            <th scope="col" >Prodi</th>
                            <th scope="col" >Action</th>
                        </thead>
                        <tbody>
                            <form action="{{ route('mhs.update',$mahasiswa['id']) }}" class="form" method="post">
                                @csrf
                                @method('PUT')
                                <tr>
                                    <td><input type="text" class="form-control" name="nim" value="{{ $mahasiswa['NIM'] }}" id=""></td>
                                    <td><input type="text" class="form-control" name="nama_mahasiswa" value="{{ $mahasiswa['Nama'] }}" id=""></td>
                                    <td><input type="text" class="form-control" name="prodi_mahasiswa" value="{{ $mahasiswa['Prodi'] }}" id=""></td> 
                                    <td>
                                        <a href="/mahasiswa" class="btn btn-outline-danger">Cancel</a>
                                        <button class="btn btn-success" >Save</button>
                                    </td>

                                </tr>
                            </form>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @section('footer')
            <p>© 2023 My Website. All rights reserved.</p>
        @endsection
    </div>
</body>
</html>