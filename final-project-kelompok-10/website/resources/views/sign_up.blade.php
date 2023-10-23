<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- link css -->
    <link rel="stylesheet" href="{{ asset('CSS/style.css') }}" />
    <!-- link fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&family=Manrope:wght@200;300;400;500;600;700;800&family=MuseoModerno:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,400;0,700;1,400;1,700&family=Roboto:wght@500&display=swap"
      rel="stylesheet"
    />
    <!-- link icon -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0-beta2/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />

    <!-- title web -->
    <title>WEBANKMIN</title>
  </head>
  <body>
    <div class="form-login">
      <div class="login-card">
        <form action="{{route('submit_sign_up')}}" method="post">
            @csrf
            <!-- konten 1 -->
            <div class="content-1">
                <h1>10<span>Exchange</span></h1>
                <h1>Sign Up</h1>
            </div>

            @include('includes/flash_messages')
            <!-- konten 2 -->
            <div class="content-2">
                <!-- input password -->
                <div>
                <h2>Full Name</h2>
                <input name="fullname" type="text" placeholder="RakaminAcademy" />
                </div>
                <!-- input password -->
                <div>
                <h2>Username</h2>
                <input name="username" type="text" placeholder="Rakamin" />
                </div>
                <!-- input email -->
                <div>
                <h2>Email Address</h2>
                <input name="email" type="email" placeholder="rakamin@gmail.com" />
                </div>
                <!-- input password -->
                <div>
                <h2>Password</h2>
                <input name="password" type="password" />
                </div>
            </div>

            <!-- konten 4 -->
            <div class="content-4">
                <button type="submit">Create</button>
            </div>
        </form>


        <!-- konten 5 -->
        <div class="content-5">
          <h3>Already Have an Account?</h3>
          <a href="{{ route('login') }}">Sign In</a>
        </div>
      </div>
    </div>
  </body>
</html>
