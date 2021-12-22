<x-header />

<section class="vh-100 gradient-custom bg-dark">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">فرم ثبت نام </h3>
            <form action="{{route('register')}}" method="POST">
              @csrf
              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="نام "
                      class="form-control form-control-lg" />
                    @error('name')
                    <div class="alert alert-danger  ">{{ $message }}</div>
                    @enderror
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="family" name="family" value="{{ old('family') }}" placeholder="نام خانوادگی"
                      class="form-control form-control-lg" />
                    @error('family')
                    <div class="alert alert-danger  ">{{ $message }}</div>
                    @enderror
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div>
                    <input type="text" id="nationalcode" name="nationalcode" value="{{ old('nationalcode') }}"
                      placeholder="کد ملی" class="form-control form-control-lg" />
                    @error('nationalcode')
                    <div class="alert alert-danger  ">{{ $message }}</div>
                    @enderror

                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" id="phone" name="phone" value="{{ old('phone') }}"
                      class="form-control form-control-lg" placeholder="شماره تماس" />
                    @error('phone')
                    <div class="alert alert-danger  ">{{ $message }}</div>
                    @enderror
                  </div>

                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="password" id="password" name="password" value="{{ old('email') }}"
                      class="form-control form-control-lg" placeholder="رمز عبور" />
                    @error('password')
                    <div class="alert alert-danger  ">{{ $message }}</div>
                    @enderror
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="password" id="password_confirmation" name="password_confirmation" value="{{ old('email') }}"
                      class="form-control form-control-lg" placeholder="تکرار رمز عبور" />
                    @error('password_confirmation')
                    <div class="alert alert-danger  ">{{ $message }}</div>
                    @enderror
                  </div>

                </div>


              </div>
              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" id="email" name="email" value="{{ old('email') }}"
                      class="form-control form-control-lg" placeholder="پست الکترونی" />
                    @error('email')
                    <div class="alert alert-danger  ">{{ $message }}</div>
                    @enderror
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <h6 class="mb-2 pb-1">جنسیت : </h6>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="femaleGender" value="woman" {{
                      old('gender')=="woman" ? 'checked=' .'"'.'checked'.'"' : '' }} />
                    <label class="form-check-label" for="femaleGender">خانم</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="maleGender" value="man" {{
                      old('gender')=="man" ? 'checked=' .'"'.'checked'.'"' : '' }} />
                    <label class="form-check-label" for="maleGender">آقا</label>
                  </div>
                  @error('gender')
                  <div class="alert alert-danger  ">{{ $message }}</div>
                  @enderror
                </div>

              </div>


              <div class="row">
                <div class="col-12">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="type" id="femaleGender" value="student" {{
                      old('type')=="student" ? 'checked=' .'"'.'checked'.'"' : '' }} />
                    <label class="form-check-label" for="femaleGender">من دانشجو هستم</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="type" id="maleGender" value="teacher" {{
                      old('type')=="teacher" ? 'checked=' .'"'.'checked'.'"' : '' }} />
                    <label class="form-check-label" for="maleGender">من استاد هستم </label>
                  </div>

                </div>


              </div>
              <div class="row">
                <div class="col-7">
                  @error('type')
                  <div class="alert alert-danger  ">{{ $message }}</div>
                  @enderror
                </div>
              </div>
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
<!-- <h1>Create Post</h1>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius ipsa fugiat, saepe quo vero libero sit possimus ad omnis in voluptas dolore expedita rem similique suscipit quod? Dolorum, aliquam iste?</p>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->