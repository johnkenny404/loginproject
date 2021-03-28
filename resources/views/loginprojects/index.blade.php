
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/app.css">
    <script src="https://kit.fontawesome.com/8e7fb5ae95.js" crossorigin="anonymous"></script>
    <title>Profile form</title>
</head>
<body>
     <!--=============navbar=======-->
    <div id="Nav">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light light pt-3">
            <div class="container-fluid">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();" class="fw-bold">
                      {{  __( 'Back Home Page') }}
                    </x-dropdown-link>
                </form>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                </form>
              </div>
            </div>
          </nav>
        </div>
    </div>
      <!--===================navbarend=========-->
      <!--==========Message_showing_profile_created============-->
    <div class="container mt-5">
        @if (Auth::user())
            <div class="text-center">
                <a href="loginprojects/create" class="btn btn-success mb-2">Create profile</a>
            </div>
        @else
            <p>Please login to create a profile</p>
        @endif
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
@foreach($loginprojects as $loginproject)
    <div id="profile">
        <div class="container">
            @if (isset(Auth::user()->id) && Auth::user()->id == $loginproject->user_id)
                <div class="d-flex flex-column py-4 ">
                    <h1>Profile created successfully</h1>
                    @if (session('message'))
                        <div class="alert alert-success mt-3">
                            {{ session('message') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-5">
                            <a href="/loginprojects/{{$loginproject->id}}" class="mt-5">Click here to View your Profile</a>
                        </div>
                    </div>
                </div>
                <div>
                    <a href="/loginprojects/{{$loginproject->id}}/edit" class="btn btn-secondary my-5">Edit Your Profile</a>
                </div>
                <form action="/loginprojects/{{$loginproject->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Delete The profile</button>
                </form>
            @endif
        </div>
    </div>

@endforeach

</body>
</html>

