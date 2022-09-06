<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <div class="">
        <h1 class="text-center p-4">
            Inicio de Sección
        </h1>

        <div class="row w-75 m-auto">

            <div class="col">


                {{-- <form action="{{ route('Login') }}" method="POST" class="row">
                    @csrf
                    <div class="mb-3 col-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="correo_electronico" placeholder="name@example.com">
                    </div>

                    <div class="mb-3 col-12">
                        <label for="contrasena" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="contrasena" name="password" placeholder="password">
                    </div>

                    <button class="btn btn-primary col-12" type="submit">Ingresar</button>
                </form> --}}

                <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">

                    <div class="w-full max-w-md space-y-8">
                      <div>
                        <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
                        <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Sign in to your account</h2>
                        <p class="mt-2 text-center text-sm text-gray-600">
                          Or
                          <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">start your 14-day free trial</a>
                        </p>
                      </div>
                      <form class="mt-8 space-y-6" action="#" method="POST">
                        @csrf

                        @if (session('mensaje'))
                            <p class="text-black bg-red-600 p-2 text-sm rounded-xl my-5"> Error credenciales </p>
                        @endif

                        <input type="hidden" name="remember" value="true">
                        <div class="-space-y-px rounded-md shadow-sm">
                          <div>
                            <label for="email" class="sr-only">Email address</label>
                            <input
                                id="email"
                                name="correo_electronico"
                                type="email" autocomplete="email"
                                required class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                                placeholder="Email address"
                            >
                          </div>

                          @error('correo_electronico')
                             <p class="text-white bg-red-600 p-2 text-sm rounded-xl my-5"> {{ $message }} </p>
                          @enderror
                          <div>
                            <label for="password" class="sr-only">Password</label>
                            <input
                                id="password"
                                name="password"
                                type="password"
                                autocomplete="current-password"
                                required class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                                placeholder="Password"
                            >
                          </div>

                            @error('password')
                                <p class="text-white bg-red-600 p-2 text-sm rounded-xl my-5"> {{ $message }} </p>
                            @enderror
                        </div>



                        <div class="flex items-center justify-between">
                          <div class="flex items-center">
                            <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                            <label for="remember-me" class="ml-2 block text-sm text-gray-900">Remember me</label>
                          </div>

                          <div class="text-sm">
                            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Forgot your password?</a>
                          </div>
                        </div>

                        <div>
                          <button type="submit" class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                              <!-- Heroicon name: mini/lock-closed -->
                              <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
                              </svg>
                            </span>
                            Sign in
                          </button>
                        </div>
                      </form>
                    </div>
                </div>


            </div>

            @if (session('statusLogout'))
                <div class="bg-lime-500 rounded-300 font-bold text-center" role="alert">
                    Seccion Cerrada Exitosamente
                </div>
             @endif

        </div>
    </div>

</body>
</html>
