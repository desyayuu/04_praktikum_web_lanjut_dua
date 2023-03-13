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
                <li class="breadcrumb-item"><a href="{{Route('mariapengalaman')}}">Experience</a></li>
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
                Selama berkuliah di Politeknik Negeri Malang, selain mengikuti pembelajaran di kelas
                saya juga aktif dalam beberapa organisasi. Dari sana selain berlatih kepemimpinan dan kekeluargaan,
                saya juga banyak belajar dalam mnegembangkan bakat dan minat saya serta banyak belajar tentang 
                hal baru yang sebelumnya belum pernah saya lakukan. Sejauh ini meskipun dalam perkuliahan
                sedikit senang banyak susahnya, namun karena susah dalam belajar jadi tak mengapa. Sebab, dengan
                belajar dapat membuat kita menjadi orang yang lebih baik lagi. Harapannya, semoga lancar hingga lulus,
                dan bukan hanya lulus dengan nilai yang memuaskan, namun juga dengan skill yang mumpuni.
            </div>
        </div>
    </div>
</section>
@endsection