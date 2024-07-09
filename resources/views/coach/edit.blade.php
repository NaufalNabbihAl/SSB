<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

   

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
 <!-- Icon Font Stylesheet -->
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- FontAwesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/assets/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="{{route('admin.index')}}" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary">DASHBOARD</h3>

                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    
                    <div class="ms-3">
                        <span>Admin</span>
                    </div>
                    
                </div>
                
                <div class="navbar-nav w-100">
                <a href="{{route('admin.index')}}" class="nav-item nav-link ">Pemain</a>
                    <a href="{{route('admin.coach')}}" class="nav-item nav-link  active">Pelatih</a>
                    <a href="{{route('admin.payment')}}" class="nav-item nav-link ">Pembayaran</a>
                    <a href="{{route('admin.news')}}" class="nav-item nav-link">Berita</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">

            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-start  rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Edit Pemain</h6>
                    </div>
                    <div class="">
                    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
                        <form action="{{route('admin.coach.update',[$coach->id])}}" method="POST" enctype="multipart/form-data">

                            @csrf
                            @method('PUT')

                            <div class="row justify-content-center">
                            <div class="mb-3 col-6">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="{{$coach->nama}}">
                            </div>
                            <div class="mb-3 col-6 position-relative">
                            <label for="kewarganegaraan" class="form-label">Kewarganegaraan</label>
                                <input type="text" class="form-control" id="kewarganegaraan" name="kewarganegaraan" value="{{$coach->kewarganegaraan}}">
                            </div>
                            <div class="mb-3 col-6">                            
                            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{$coach->tempat_lahir}}">
                            </div>
                            <div class="mb-3 col-6">                            
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{$coach->tanggal_lahir}}">
                            </div>
                            <div class="mb-3 col-6">
                            <label for="photo" class="form-label">Photo</label>
                            <input type="file" class="form-control" id="photo" name="photo" value="photo" >
                            </div>
                            </div>
                            <button type="submit" class="btn btn-primary submit-button">Submit</button>
                        </form>
                        </div>
                    </div>
                </div>
            
            <!-- Recent Sales End -->
        </div>
        <!-- Content End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/lib/chart/chart.min.js"></script>
    <script src="/assets/lib/easing/easing.min.js"></script>
    <script src="/assets/lib/waypoints/waypoints.min.js"></script>
    <script src="/assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/assets/lib/tempusdominus/js/moment.min.js"></script>
    <script src="/assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="/assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="/assets/js/1main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        // Attach the event listener to all delete buttons
        const submitButtons = document.querySelectorAll('.submit-button');
        submitButtons.forEach(button => {
            button.addEventListener('click', function (event) {
                event.preventDefault(); // Prevent the form from submitting immediately

                const form = button.closest('form');

                Swal.fire({
                    title: 'Apakah Kamu Yakin?',
                    text: "Data yang sudah diubah tidak bisa dikembalikan!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'Batal',
                    confirmButtonText: 'Ya, Ubah'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit(); // Submit the form if the user confirms
                    }
                });
            });
        });
    });
    </script>
</body>

</html>