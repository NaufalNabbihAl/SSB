@extends('layout.common')
@section('content')
<main class="main">
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="container">
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li class="current">Pendaftaran</li>
                </ol>
            </nav>
            <h1>Informasi Pendaftaran</h1>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Informasi Section Start -->
    <section id="pembayaran-section" class="pembayaran-section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span>Formulir Pendaftaran<br /></span>
            <h2>Formulir Pendaftaran</h2>
        </div>
        <!-- End Section Title -->   
        <form action="{{ route('players.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="laki-laki" checked>
                        <label class="form-check-label" for="gridRadios1">
                            Laki-Laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="perempuan">
                        <label class="form-check-label" for="gridRadios2">
                            Perempuan
                        </label>
                    </div>
                    @error('gender')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </fieldset>
            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Tempat Lahir</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="place_birth">
                    @error('place_birth')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputDate" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="date_birth">
                    @error('date_birth')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">NIK</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nik">
                    @error('nik')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">NIS</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nis">
                    @error('nis')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputNumber" class="col-sm-2 col-form-label">Upload Photo</label>
                <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile" name="photo">
                    @error('photo')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit Form</button>
                </div>
            </div>
        </form>
    </section>
</main>

@if(session('success') && session('nomor_psad'))
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
                <h5 class="modal-title" id="successModalLabel">Pendaftaran Berhasil</h5>
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
              Pendaftaran berhasil.<br>
              Nomor PSAD Anda adalah: <strong>{{ session('nomor_psad') }}</strong>
              </div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Baik</button>
            </div>
        </div>
    </div>
</div>
@endsection
