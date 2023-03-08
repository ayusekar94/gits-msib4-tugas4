@extends('layout.create')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-4">
                <h2>TEKNOLOGI INFORMASI POLITEKNIK NEGERI MALANG</h2>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href=""> Input Mahasiswa</a>
            </div>
        </div>
    </div>

    <!-- Search form -->
    <form class="form" method="get" action="">
        <div class="form-group w-100 mb-3">
            <label for="search" class="d-block mr-2">Pencarian</label>
            <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Masukkan Nim / Nama Mahasiswa">
            <button class="btn btn-outline-success" type="submit" id="button-addon2"><img
                                src="{{ asset('img/cari.jpg') }}" alt="" height="25px"></button>
        </div>
    </form>

    <table class="table table-bordered">
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
        </tr>
        @foreach ($item as $mhs)
        <tr>
            <td>{{ $mhs->nim }}</td>
            <td>{{ $mhs->nama }}</td>
            <td>{{ $mhs->kelas }}</td>
            <td>{{ $mhs->jurusan }}</td>
        </tr> 
        @endforeach
    </table>
    
@endsection