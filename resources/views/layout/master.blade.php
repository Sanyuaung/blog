<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MERN Blog</title>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/argon-design-system-free@1.2.0/assets/css/argon-design-system.min.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Padauk:wght@400;700&family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;1,100;1,200;1,400&display=swap"
        rel="stylesheet">
    <!-- boxicon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css">
    <!-- custom style -->
    <link rel="stylesheet" href="{{ asset('/asset/style/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    @yield('css')
</head>

<body>
    <div class="m-5">
        <div class="row">
            <div class="col-8">
                <h2 class="text-primary bg-card p-2 pl-5 rounded">MERN Fullstack Community Blogging - <span
                        class="text-success">MMCoder</span></h2>
                @yield('content')
            </div>

            <div class="col-4">
                <div class="bg-card p-3">
                    <a href="{{ url('/') }}" class="btn btn-primary">Home</a>
                    @guest
                        <a href="{{ url('/login') }}" class="btn btn-primary">Login</a>
                        <a href="{{ url('/register') }}" class="btn btn-primary">Register</a>
                    @endguest
                    @auth
                        <a href="{{ url('/profile') }}" class="btn btn-primary">Profile</a>
                        <a href="{{ url('/article') }}" class="btn btn-primary">All</a>
                        <a href="{{ url('/logout') }}" class="btn btn-primary">Logout</a>
                    @endauth

                </div>
                <div class="bg-card p-3 mt-4">
                    <h5 class="text-primary">Tags</h5>
                    @foreach ($tag as $t)
                        <a href="{{ url('/article?tag=' . $t->slug) }}"
                            class="btn btn-sm btn-dark mt-1 text-white">{{ $t->name }} </a>
                    @endforeach
                </div>
                <div class="bg-card p-3 mt-4">
                    <h5 class="text-primary">Programming</h5>
                    @foreach ($programming as $p)
                        <a href="{{ url('/article?programming=' . $p->slug) }}"
                            class="btn btn-sm btn-dark mt-1 text-white">{{ $p->name }} </a>
                    @endforeach
                </div>

                <div class="bg-card p-3 mt-4">
                    <h5 class="text-primary"> Top Trending Articles</h5>
                    <div class="row">
                        @foreach ($trending_article as $ta)
                            <div class="col-6">
                                <div class="bg-dark rounded">
                                    <a href="{{ route('article.detail', ['slug' => $ta->slug]) }}" class="text-white">
                                        <img src="{{ $ta->image_url }}" class="w-100 rounded">
                                    </a>
                                    <p class="text-white text-center p-2">{{ $ta->name }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="bg-card p-3 mt-4">
                    <h5 class="text-primary"> Most Love Articles</h5>
                    <div class="row">
                        @foreach ($love_article as $la)
                            <div class="col-6">
                                <div class="bg-dark rounded">
                                    <a href="{{ route('article.detail', ['slug' => $la->slug]) }}" class="text-white">
                                        <img src="{{ $la->image_url }}" class="w-100 rounded">
                                    </a>
                                    <p class="text-white text-center p-2">{{ $la->name }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if (session()->has('error'))
            toastr.error('{{ session('error') }}')
        @endif

        @if (session()->has('success'))
            toastr.success('{{ session('success') }}')
        @endif

        const showSuccess = (message) => {
            toastr.success(message);
        }
        const showError = (message) => {
            toastr.error(message);
        }
    </script>
    @yield('js')
</body>

</html>
