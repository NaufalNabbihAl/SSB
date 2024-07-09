@extends('layout.common')
@section('content')
<main class="main">
      <!-- Page Title -->
      <div class="page-title" data-aos="fade">
        <div class="container">
          <nav class="breadcrumbs">
            <ol>
              <li><a href="index.html">Home</a></li>
              <li class="current">Informasi Pelatih</li>
            </ol>
          </nav>
          <h1>Informasi Pelatih</h1>
        </div>
      </div>
      <!-- End Page Title -->

      <!-- Informasi Section Start -->
      <section id="pelatih-section" class="pelatih-section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <span>Pelatih SSB PSAD Brawijaya<br /></span>
          <h2>Pelatih SSB PSAD Brawijaya</h2>
        </div>
        <!-- End Section Title -->
         @foreach ( $coach as $c)
         
         
        <div class="wrapper">
            <img src="{{ asset('storage/' . $c->photo) }}" alt="" class="photo">
            <table class="table">
              <tr>
                <td>Nomor PSAD: </td>
                <td>{{$c->nomor_psad}}</td>
              </tr>
              <tr>
                <td>Nama: </td>
                <td>{{$c->nama}}</td>
              </tr>
              <tr>
                <td>Kewarganegaraan: </td>
                <td>{{$c->kewarganegaraan}}</td>
              </tr>
              <tr>
                <td>Tempat Lahir</td>
                <td>{{$c->tempat_lahir}}</td>
              </tr>
              <tr>
                <td>Tanggal Lahir:</td>
                <td>{{$c->tanggal_lahir}}</td>
              </tr>
            </table>
            
        </div>
        @endforeach
      </section>
      <!-- /Informasi Section End-->
    </main>
@endsection
    

    