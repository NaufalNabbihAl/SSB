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

    <!-- Content -->
    <section id="pelatih-section" class="pelatih-section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span>Pemain SSB PSAD Brawijaya<br /></span>
            <h2>Pemain SSB PSAD Brawijaya</h2>
        </div>
        <!-- End Section Title -->

        <!-- Loop through players -->
        @foreach($players as $player)
        <div class="wrapper">
            <img src="{{ asset('storage/' . $player->photo) }}" alt="" class="photo">
            <table class="table">
                <tr>
                    <td>Nomor PSAD</td>
                    <td>{{ $player->nomor_psad }}</td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>{{ $player->name }}</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>{{ $player->gender }}</td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>{{ $player->place_birth }}</td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>{{ $player->date_birth }}</td>
                </tr>
                <tr>
                    <td>
                        <a href="{{ route('players.print', $player->id) }}" class="btn btn-primary">Print PDF</a>
                    </td>
                </tr>
            </table>
        </div>
        @endforeach
        <!-- End loop through players -->
    </section>
</main>
@endsection
