<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{asset('admin-panel/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href=>

    <!-- Font Awesome -->
    <link href="{{asset('admin-panel/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('admin-panel/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('admin-panel/vendors/animate.css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('admin-panel/build/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="login">
    <div>


      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST" action="{{ route('admin.register.store') }}">
                @csrf
              <h1>Create Account</h1>
              <div>
                <input type="text" value="{{ old('name') }}" name="name" class="form-control" placeholder="Name" required="" />
                @error('name')
            <span style="color: red;">{{ $message }}</span>
        @enderror
              </div>
              <div>
                {{-- <input type="email" name="email" class="form-control" placeholder="Email" required="" /> --}}
                <input type="email" value="{{ old('email') }}" name="email" class="form-control" placeholder="Email" required="" />
                @error('email')
            <span style="color: red;">{{ $message }}</span>
        @enderror
              </div>

              <div>
                <input type="password" value="{{ old('password') }}" name="password" class="form-control" placeholder="Password" required="" />
                @error('password')
            <span style="color: red;">{{ $message }}</span>
        @enderror
              </div>
              <div>

                <button type="submit" class="btn btn-default submit">Create Account</button>
              </div>

              <div class="clearfix"></div>

              {{-- <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br /> --}}

                {{-- <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div> --}}
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
