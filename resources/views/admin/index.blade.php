<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="/assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

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
                    <h3 class="text-primary">DASHMIN</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="ms-3">
                        <span>Admin</span>
                    </div>
                    <div class="position-relative">   
                    <a href="{{route('index')}}" class="navbar-brand mx-4 mb-3">
                        <i class="bi bi-arrow-left-square"></i>
                    </a>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{route('admin.index')}}" class="nav-item nav-link active">Pemain</a>
                    <a href="{{route('admin.coach')}}" class="nav-item nav-link">Pelatih</a>
                    <a href="{{route('admin.payment')}}" class="nav-item nav-link">Pembayaran</a>
                    <a href="{{route('admin.news')}}" class="nav-item nav-link">Berita</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            

            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Pemain</h6>
                        <form class="d-none d-md-flex ms-4" method="GET" action="{{ route('admin.index') }}">
                            <input class="form-control border-0" type="search" placeholder="Search" name="search">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col">No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Nomor PSAD</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $player as $p)
                                <tr>
                                    <td>{{$loop->iteration }}</td>
                                    <td>{{$p->name}}</td>
                                    <td>{{$p->status}}</td>
                                    <td>{{$p->nomor_psad}}</td>
                                    <td>
                                        <a class="btn btn-sm btn-primary" href="{{route('admin.players.edit',[$p ->id])}}">Detail</a>
                                        
                                        <a class="btn btn-sm  btn-warning" href="{{route('players.print', $p->id)}}">Print PDF</a> 
                                        <form action="{{ route('admin.players.delete', $p->id) }}" method="POST" style="display:inline;" class="delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-sm btn-danger delete-button">Hapus</button>
                                    </form>
                                    </td>
                                </tr> 
                                @endforeach                           
                            </tbody>
                        </table>
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
        const deleteButtons = document.querySelectorAll('.delete-button');
        deleteButtons.forEach(button => {
            button.addEventListener('click', function (event) {
                event.preventDefault(); // Prevent the form from submitting immediately

                const form = button.closest('form');

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
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