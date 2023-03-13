@extends('layout.template')
@section('content')
<section class="content">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 style="font-family: fantasy">Experience Page</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{Route('desypengalaman')}}">Experience</a></li>
                <li class="breadcrumb-item active">03_PWL_dua</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="card">
        <div class="card-header border-0">
            <div class="d-flex justify-content-between">
                <h3 class="card-title"><b>Pengalaman Kuliah</b></h3>
            </div>
            <div class="card-body">
                Sangat senang kuliah di JTI Polinema <br>
                Semester 1 sampai dengan 3, masih merasa aman <br>
                Tetapi semester ini, mulai mempertanyakan apakah saya bisa tetap survive ? 
            </div>
        </div>
    </div>
</section>
@endsection