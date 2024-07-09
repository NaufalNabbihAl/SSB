@extends('layout.common')
@section('content')

<main class="main">
  <!-- Page Title -->
  <div class="page-title" data-aos="fade">
    <div class="container">
      <nav class="breadcrumbs">
        <ol>
          <li><a href="{{route('index')}}">Home</a></li>
          <li class="current">Pembayaran</li>
        </ol>
      </nav>
      <h1>Informasi Pembayaran</h1>
    </div>
  </div>
  <!-- End Page Title -->

  <!-- Informasi Section Start -->
  <section id="pembayaran-section" class="pembayaran-section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <span>Pembayaran<br /></span>
      <h2>Formulir Pembayaran Latihan</h2>
    </div>
    <!-- End Section Title -->
    <form action="{{ route('payment.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row mb-3">
        <label for="inputText" class="col-sm-2 col-form-label">Nama Siswa</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="nama_siswa" >
          @error('nama_siswa')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputText" class="col-sm-2 col-form-label">Nomor PSAD</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="nomor_psad">
          @error('nomor_psad')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>

      <div class="row mb-3">
        <label for="inputText" class="col-sm-2 col-form-label">Bukti Pembayaran</label>
        <div class="col-sm-10">
          <input type="file" class="form-control" name="bukti_pembayaran">
          @error('bukti_pembayaran')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>

      <div class="row mb-3">
        <label for="inputPassword" class="col-sm-2 col-form-label">Deskripsi</label>
        <div class="col-sm-10">
          <textarea class="form-control" style="height: 100px" name="deskripsi"></textarea>
          @error('deskripsi')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>

      <div class="input-group"></div>
        <div class="input-box">
          <button type="submit" class="btn-form-pay">Bayar</button>
          <button type="button" class="btn-form-change" id="myBtn">Batal</button>
        </div>
      </div>
    </form>
  </section>
  <!-- /Informasi Section End-->
</main>

@if(session('success'))
<script>
  document.addEventListener('DOMContentLoaded', function () {
      var successModal = new bootstrap.Modal(document.getElementById('successModal'));
      successModal.show();
  });
</script>
@endif

<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="successModalLabel">Pembayaran Berhasil</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="#ADD8E6" class="bi bi-check-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
            <path d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05"/>
          </svg>
        </div>
        <div>
          Pembayaran berhasil.
        </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Baik</button>
      </div>
    </div>
  </div>
</div>

@endsection
