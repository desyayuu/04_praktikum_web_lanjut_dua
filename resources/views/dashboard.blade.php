@extends('layout.template')

@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0" style="font-family: cursive;"><b>Website Curcol</b></h1>
            <h6 class="m-0"><i>Curhat Colongan Seputar Perkuliahan</i></h6>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{Route('dash')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">03_PWL_dua</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>
    <section class="content">
            <div class="card">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between">
                        <h3 class="card-title">Welcome to this Website</h3>
                    </div>
                </div>
            </div>
    </section>

    <section class="content">
    <div class="card">
        <div class="card-header border-0">
            <div class="d-flex justify-content-between">
                <h1 class="card-title"><b>HI GENKS!</b></h1>
            </div>
            <div class="card-body">
                Ceritakan kelu kesahmu selama masa kuliah, GRATIS!<br>
                <i>~ Website ini dibuat untuk memenuhi tugas praktikum 02 Pertemuan 3 pada mata kuliah Praktikum web Lanjut ~</i>
            </div>
        </div>
    </div>
    </section>
    
@endsection

<script>
    alert('Selamat Datang di Website Curcol, Enjoy!');
</script>
