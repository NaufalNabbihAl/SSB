@extends('layout.common')
@section('content')
    <main class="main">
      <!-- Page Title -->
      <div class="page-title" data-aos="fade">
        <div class="container">
          <nav class="breadcrumbs">
            <ol>
              <li><a href="index.html">Home</a></li>
              <li class="current">Akun</li>
            </ol>
          </nav>
          <h1>Akun</h1>
        </div>
      </div>
      <!-- End Page Title -->

  <!-- Informasi Section Start -->
  <section id="profile" class="profile">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <span>Informasi Akun<br /></span>
      <h2>Informasi Akun</h2>
    </div>
    <!-- End Section Title -->
                
                    <section class="section profile">
                      <div class="row">
                        <div class="col-xl-4">
                
                          <div class="card">
                            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                
                              <h2>{{$user-> name}}</h2>
                              
                            </div>
                          </div>
                
                        </div>
                
                        <div class="col-xl-8">
                
                          <div class="card">
                            <div class="card-body pt-3">
                              <!-- Bordered Tabs -->
                              <ul class="nav nav-tabs nav-tabs-bordered">
                
                                <li class="nav-item">
                                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                                </li>
                
                                <li class="nav-item">
                                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                                </li>
                
                            
                                <li class="nav-item">
                                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                                </li>
                
                              </ul>
                              <div class="tab-content pt-2">
                
                                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                  
                                <br>
                                  <h5 class="card-title">Profile Details</h5>
                
                                  <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                    <div class="col-lg-9 col-md-8">{{$user->name}}</div>
                                  </div>
                
                                  <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Email</div>
                                    <div class="col-lg-9 col-md-8">{{$user->email}}</div>
                                  </div>
                
                                  <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Username</div>
                                    <div class="col-lg-9 col-md-8">{{$user->username}}</div>
                                  </div>
                
                                </div>
                
                                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                
                                  <!-- Profile Edit Form -->
                                  <form method="POST" action="{{ route('profile.update') }}">   
    @csrf
    @method('PUT')           
    <div class="row mb-3">
        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
        <div class="col-md-8 col-lg-9">
            <input name="name" type="text" class="form-control" id="fullName" value="{{ $user->name }}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="Job" class="col-md-4 col-lg-3 col-form-label">Email</label>
        <div class="col-md-8 col-lg-9">
            <input name="email" type="text" class="form-control" id="Job" value="{{ $user->email }}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="Country" class="col-md-4 col-lg-3 col-form-label">Username</label>
        <div class="col-md-8 col-lg-9">
            <input name="username" type="text" class="form-control" id="Country" value="{{ $user->username }}">
        </div>
    </div>
      
    <div class="text-center">
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </div>
</form>
<!-- End Profile Edit Form -->
                
                                </div>
                
                                <div class="tab-pane fade pt-3" id="profile-settings">
                
                                  <!-- Settings Form -->
                                  <form>
                                   
                
                                    <div class="row mb-3">
                                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                                      <div class="col-md-8 col-lg-9">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" id="changesMade" checked>
                                          <label class="form-check-label" for="changesMade">
                                            Changes made to your account
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" id="newProducts" checked>
                                          <label class="form-check-label" for="newProducts">
                                            Information on new products and services
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" id="proOffers">
                                          <label class="form-check-label" for="proOffers">
                                            Marketing and promo offers
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                                          <label class="form-check-label" for="securityNotify">
                                            Security alerts
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                
                                    <div class="text-center">
                                      <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                  </form><!-- End settings Form -->
                
                                </div>
                
                                <div class="tab-pane fade pt-3" id="profile-change-password">
                                  <!-- Change Password Form -->
                                  <form method="POST" action="{{ route('profile.update-password') }}">
    @csrf
    @method('PUT')

    <div class="row mb-3">
        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
        <div class="col-md-8 col-lg-9">
            <input name="currentPassword" type="password" class="form-control" id="currentPassword">
            @error('currentPassword')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
        <div class="col-md-8 col-lg-9">
            <input name="newPassword" type="password" class="form-control" id="newPassword">
            @error('newPassword')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="newPassword_confirmation" class="col-md-4 col-lg-3 col-form-label">Confirm New Password</label>
        <div class="col-md-8 col-lg-9">
            <input name="newPassword_confirmation" type="password" class="form-control" id="newPassword_confirmation">
        </div>
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-primary">Change Password</button>
    </div>
</form>

                                 <!-- End Change Password Form -->
                
                                </div>
                
                              </div><!-- End Bordered Tabs -->
                              
            </div>
        </div>

      </div>
    </div>
  </section>
      <!-- Informasi Section End-->
    </main>
@endsection