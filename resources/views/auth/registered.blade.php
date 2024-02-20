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
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="container min-vh-100   d-flex justify-content-center  align-items-center   ">
        <div class="">
            <h2 class="p-3 m-3">Registration</h2>
            <div class="card p-3 m-3 col-12  ">
                <form action="/registeredstore" method="POST">
                    @csrf
                    <div class="form-group ">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter name"
                            name="name">
                        @error('name')
                            <span class="text-danger ">{{ $message }}</span>
                        @enderror

                    </div>
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
                    {{-- <div class="form-group">
                        <label for="cmp"> Confirmed Password:</label>
                        <input type="password" class="form-control" id="cmp" placeholder="Enter password"
                            name="cmp">
                        @error('cmp')
                            <span class="text-danger ">{{ $message }}</span>
                        @enderror
                    </div> --}}

                    <div class="text-center "> <button type="submit" class="btn btn-dark">Submit</button></div>
                </form>
            </div>

        </div>
    </div>
</body>

</html>
