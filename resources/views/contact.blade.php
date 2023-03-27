@extends('layout.template')

@section('content')
<section class="content">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 style="font-family: fantasy">Contact Page</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{Route('contact')}}">Contact</a></li>
                <li class="breadcrumb-item active">04_PWL_dua</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
            <div class="card">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between">
                        <h3 class="card-title">Hubungi Kami Melalui :</h3>
                    </div>
                </div>
            </div>
    </section>
    <div class="card">
        <div class="card-header border-0">
            <div class="d-flex justify-content-between">
                <h3 class="card-title"><b>Contact - Desy Ayurianti</b></h3>
            </div>
            <div class="card-body">
                <b><i>Email</b></i><br>
                desii.ayurianti@gmail.com<br>
                <b><i>Instagram</b></i><br>
                @_desyayuu
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header border-0">
            <div class="d-flex justify-content-between">
                <h3 class="card-title"><b>Contact - Maria Fadilla</b></h3>
            </div>
            <div class="card-body">
                <b><i>Email</b></i><br>
                mariafadilla15@gmail@gmail.com<br>
                <b><i>Instagram</b></i><br>
                @dillawakhid_
            </div>
        </div>
    </div>
</section>
@endsection