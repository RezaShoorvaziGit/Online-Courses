<x-header />

<section class="vh-100 bg-dark" style="background-color: #508bfc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">ورود</h3>

            <form method="POST" action="{{ route('login') }}">

              @csrf
              <div>
                <div class="form-outline mb-4">
                  <input type="text" name="emile" id="typeEmailX-2" class="form-control form-control-lg"
                    placeholder="پست الکترونیکی" />
                </div>
                <div>
                  @error('emile')
                  <div class="alert alert-danger  ">{{ $message }}</div>
                  @enderror
                </div>
              </div>


              <div>
                <div class="form-outline mb-4">
                  <input type="password" name="password" id="typePasswordX-2" class="form-control form-control-lg"
                    placeholder="رمز عبور" />
                </div>
                <div>
                  @error('password')
                  <div class="alert alert-danger  ">{{ $message }}</div>
                  @enderror
                </div>
              </div>

              <hr class="my-4">

              <div class="mt-4 pt-2">
                <input class="btn btn-primary " type="submit" value="ارسال" />
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<x-footer />