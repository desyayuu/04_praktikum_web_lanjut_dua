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
            <li class="breadcrumb-item"><a href="{{Route('dash')}}">Home</a></li>
            <li class="breadcrumb-item active">03_PWL_dua</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>
@endsection