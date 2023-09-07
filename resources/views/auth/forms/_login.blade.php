<!-- container -->
<div class="container d-flex flex-column">
  <div class="row align-items-center justify-content-center g-0
        min-vh-100">
    <div class="col-12 col-md-8 col-lg-6 col-xxl-4 py-8 py-xl-0">
      <!-- Card -->
      <div class="card smooth-shadow-md">
        <!-- Card body -->
        <div class="card-body p-6">
          <div class="mb-4">
            <a href="#">
              <h2 class="text-primary font-weight-bold">SIPEMBAR</h2>
            </a>
          </div>
          @include('dashui.commons.alert')
          <!-- Form -->
          <form action="{{ route('login.submit') }}" method="post">
            @csrf
            <!-- Username -->
            <div class="mb-3">
              <label for="email" class="form-label">Email atau Username</label>
              <input type="text" id="email" class="form-control" name="email" placeholder="Masukkan Email atau Username"
                required="">
            </div>
            <!-- Password -->
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" id="password" class="form-control" name="password" placeholder="**************"
                required="">
            </div>
            <!-- Checkbox -->
            <!-- <div class="d-lg-flex justify-content-between align-items-center
                  mb-4">
                <div class="form-check custom-checkbox">
                  <input type="checkbox" class="form-check-input" id="rememberme">
                  <label class="form-check-label" for="rememberme">Ingat</label>
                </div>

              </div> -->
            <div>
              <!-- Button -->
              <div class="d-grid">
                <button type="submit" class="btn btn-primary">Log In</button>
              </div>

              <div class="d-md-flex justify-content-between mt-4">
                <div class="mb-2 mb-md-0"></div>
                <div>
                  <a href="{{ route('forgot_passwd') }}" class="text-inherit fs-5">Lupa password?</a>
                </div>

              </div>
            </div>


          </form>
        </div>
      </div>
    </div>
  </div>
</div>