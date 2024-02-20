<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="container min-vh-100   d-flex justify-content-center  align-items-center   ">
        <div class="">
            <h2 class="p-3 m-3">Please Login Admin Pannel</h2>
            <div class="card p-3 m-3 col-12  ">
                <form action="/authentication" method="POST">
                    @csrf
                    <div class="form-group ">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email"
                            name="email">
                        @error('email')
                            <span class="text-danger ">{{ $message }}</span>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter password"
                            name="password">
                        @error('password')
                            <span class="text-danger ">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="text-center "> <button type="submit" class="btn btn-dark">Submit</button></div>
                </form>
            </div>
            <div class="container row justify-content-end ">

                <a href="/registered">
                    <p class="text-dark  text-end  ">Registered</p>
                </a>
            </div>
        </div>
    </div>
</body>

</html>
