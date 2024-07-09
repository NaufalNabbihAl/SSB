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
    <div class="container">
        <div class="news-article">
            <h2 class="news-title">{{$news->title}}</h2>
            <p class="news-date">{{$news->created_at}}</p>
            <div class="news-image">
            <img src="{{ asset('storage/' . $news->image) }}" alt="Bukti Pembayaran" style="width: 800px; height: auto;" class="img-thumbnail payment-proof" data-bs-toggle="modal" data-bs-target="#paymentProofModal" data-bs-src="{{ Storage::url('' . $news->bukti_pembayaran) }}">
            </div>
            <div class="news-content">
                <p>
                    {{$news->content}}
                </p>
            </div>
        </div>
    </div>
    <!-- End Content -->
    </main>
@endsection
    

    