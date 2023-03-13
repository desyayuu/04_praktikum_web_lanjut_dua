@extends('layout.template')
@section('content')
<section class="content">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 style="font-family: fantasy">Profile Page</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ Route('profile', ['profile' => 'desy']) }}">Profile</a></li>
                <li class="breadcrumb-item active">03_PWL_dua</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="card">
        <div class="card-header border-0">
            <div class="d-flex justify-content-between">
                <h3 class="card-title">Profil</h3>
            </div>
            <div class="image">
                <img src="{{ asset('/') }}dist/img/dilla2.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="card-body">
                Nama: Maria Fadilla<br>
                NIM: 2141720063 <br>
                Kelas: TI 2G <br>
                Jurusan: Teknologi Informasi <br>
                Asal Daerah: Kediri <br>
            </div>
        </div>
    </div>
</section>
@endsection