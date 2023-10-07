<!DOCTYPE html>
<html lang="en">
<head>   
    
    <script>
        function modal_edit_mahasiswa(nim,nama,prodi){
    $('#modalHeader').html('<h1 class="modal-title fs-5" id="exampleModalLabel"><i class="fa fa-info-circle" aria-hidden="true"></i> Informasi</h1><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>');
    $('#modalBody').html(`<form id="addParticipants" action="/edit/mhs/${nim}" method="post"><div class="mb-3"><h4>Edit Data Mahasiswa</h4><label for="nimMahasiswa" class="col-form-label">NIM:</label><input type="text" class="form-control" id="nimMahasiswa" name="nimMahasiswa" value="${nim}"></div><div class="mb-3"><label for="namaMahasiswa" class="col-form-label">Nama Mahasiswa :</label><input class="form-control" type="text" id="nama_peserta" name="namaMahasiswa" value="${nama}"></div><div class="mb-3"><label for="AlamatMahasiswa" class="col-form-label">Alamat Mahasiswa :</label><input class="form-control" type="text" id="alamatMahasiswa" name="alamatMahasiswa" value="${alamat}"></div><div class="mb-3"><label for="prodiMahasiswa" class="col-form-label">Program Studi :</label><input class="form-control" type="text" id="prodiMahasiswa" name="prodiMahasiswa" value="${prodi}"></div><div class="mb-3"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-reply" aria-hidden="true"></i> Batal</button> <button type="submit" id="btnSubmitAdd" name="editMahasiswa" value="edit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> Simpan Perubahan</button></div></form>`);
    }
    </script>
    <title>Data Mahasiswa</title>
</head>
<body>
    @include('header')
    <div class="container-lg mt-5 pt-3">
        <a class="btn btn-success" href="/add_mahasiswa">Add Data</a>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" id="modalHeader"></div>
                    <div class="modal-body" id="modalBody"></div>
                    <div class="modal-footer" id="modalFooter"></div>
                </div>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" >#</th>
                    <th scope="col" >NIM</th>
                    <th scope="col" >Nama</th>
                    <th scope="col" >Prodi</th>
                    <th scope="col" >Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $count = 0;    
                @endphp
                @foreach($data  as $personal)
                <tr>
                    <td>{{ $count+=1 }}</td>
                    <td>{{ $personal['NIM'] }}</td>
                    <td>{{ $personal['Nama'] }}</td>
                    <td>{{ $personal['Prodi'] }}</td>
                    <td>
                        <a class="btn btn-secondary" href="/edit/{{$personal['id']}}" >Edit</a>
                        <a class="btn btn-danger" href="/del/mhs/{{$personal['id']}}"><i class="bi bi-trash-fill"></i> Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>