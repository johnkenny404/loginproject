
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <title>Profile form</title>
</head>
<style>
    ul{
    list-style: none;
}
img{
    width: 300px;
}
#navbar{
    background:#eeeeee;
}
.formlogin{
    width: 300px;
}
.profiling{
    -webkit-column-count: 0; /* Chrome, Safari, Opera */
    -moz-column-count: 0; /* Firefox */
    column-count: 2;
    gap: 3rem;
}
</style>
<body>
     <!--=============navbar=======-->
     <div id="navbar">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light light pt-3">
            <div class="container-fluid">
              <a class="navbar-brand" href="{{ url('./loginprojects') }}">loginproject</a>
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
      @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
      </div>
<div id="profile">
    <div class="container">
        <div class="d-flex flex-column py-4 ">
            <h1>{{$loginproject->fullname}}</h1>
            <div class="">
                <img  src="{{asset('images/'. $loginproject->image_path)}}" alt="image">
            </div>
            <div class="row">
                <div class="col-md-5">
                    <ul class="mt-5 profiling">
                        <li>NAME</li>
                        <li>AGE</li>
                        <li>LOCATION</li>
                        <li>EXPERIENCE</li>
                        <li>DEGREE</li>
                        <li>{{$loginproject->fullname}}</li>
                        <li>{{$loginproject->age}}</li>
                        <li>{{$loginproject->location}}</li>
                        <li>{{$loginproject->experience}}</li>
                        <li>{{$loginproject->degree}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>

