<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>


    <div class="container my-5">
        <h2 class="my-4">Registration</h2>
        <span>

        </span>
        <form action="{{url("/")}}/register" method="post">
            @csrf
            <x-input type="text" label="Name" name="name" placeholder="Enter your name" for="name" id="name" value="name"  />

            <x-input type="email" label="Email" name="email" placeholder="Enter your email" for="email" id="email" value="email" />

            <x-input type="password" label="Password" name="password" placeholder="Enter your password" for="password" id="password" value="" />

            <x-input type="password" label="Confirm Password" name="password_confirmation" placeholder="Enter your confirmed password" for="password_confirmation" id="password_confirmation" value="" />

            <button type="submit" class="btn btn-primary btn-lg mt-2">Submit</button>
        </form>
    </div>





</body>
</html>
