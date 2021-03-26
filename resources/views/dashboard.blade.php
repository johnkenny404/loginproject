<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <x-app-layout>
            <x-slot name="header">

        </x-slot>

            <div class="">
                <div class="">
                    <div class="">
                        <div class="">
                            You're logged in!
                        </div>
                        <div class="text-center mt-5 text-uppercase fs-1">
                            <a href="{{ route('loginprojects.index')}}" class="btn btn-success">Click Here To Create Your Profile</a>
                        </div>
                    </div>

                </div>
            </div>
        </x-app-layout>
    </div>


</body>
</html>
