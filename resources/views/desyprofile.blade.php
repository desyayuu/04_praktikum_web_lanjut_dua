@extends('layout.template')
@section('content')
<section class="content">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 style="font-family: fantasy" style="font-family: fantasy">Profile Page</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ Route('profileDesy') }}">Profile</a></li>
                <li class="breadcrumb-item active">03_PWL_dua</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
    </section>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">NIM</th>
          <th scope="col">Kelas</th>
          <th scope="col">Jurusan</th>
          <th scope="col">Asal Daerah</th>
        </tr>
      </thead>
      <tbody>
          <tr>
            <th>1</th>
            <td>{{$desy[0]->nama}}</td>
            <td>{{$desy[0]->nim}}</td>
            <td>{{$desy[0]->kelas}}</td>
            <td>{{$desy[0]->jurusan}}</td>
            <td>{{$desy[0]->asaldaerah}}</td>
          </tr>
      </tbody>
    </table>
</section>
@endsection