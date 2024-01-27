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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css">
    <!-- custom style -->
    <link rel="stylesheet" href="{{ asset('/asset/style/style.css') }}">
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
                    <a href="{{ url('/login') }}" class="btn btn-primary">Login</a>
                    <a href="{{ url('/register') }}" class="btn btn-primary">Register</a>
                </div>
                <div class="bg-card p-3 mt-4">
                    <h5 class="text-primary">Tags</h5>
                    <span class="btn btn-sm btn-dark mt-1">နည်းလမ်းများ </span>
                    <span class="btn btn-sm btn-dark mt-1">Tutorial </span>
                    <span class="btn btn-sm btn-dark mt-1">Tips </span>
                    <span class="btn btn-sm btn-dark mt-1">Summernote </span>
                    <span class="btn btn-sm btn-dark mt-1">Tricks </span>
                    <span class="btn btn-sm btn-dark mt-1">web dev </span>
                    <span class="btn btn-sm btn-dark mt-1">web design </span>
                    <span class="btn btn-sm btn-dark mt-1">blogs </span>
                    <span class="btn btn-sm btn-dark mt-1">articles </span>
                </div>
                <div class="bg-card p-3 mt-4">
                    <h5 class="text-primary">Programming</h5>
                    <span class="btn btn-sm btn-dark mt-1">PHP </span>
                    <span class="btn btn-sm btn-dark mt-1">Laravel </span>
                    <span class="btn btn-sm btn-dark mt-1">React JS </span>
                    <span class="btn btn-sm btn-dark mt-1">VueJS </span>
                    <span class="btn btn-sm btn-dark mt-1">Jquery </span>
                    <span class="btn btn-sm btn-dark mt-1">Bootstrap </span>
                    <span class="btn btn-sm btn-dark mt-1">web design </span>
                    <span class="btn btn-sm btn-dark mt-1">blogs </span>
                    <span class="btn btn-sm btn-dark mt-1">articles </span>
                </div>

                <div class="bg-card p-3 mt-4">
                    <h5 class="text-primary"> Top Trending Articles</h5>
                    <div class="row">
                        <div class="col-6">
                            <div class="bg-dark rounded">
                                <img src="https://toka.b-cdn.net/wp-content/uploads/2021/11/3d-aesthetics.png"
                                    class="w-100 rounded">
                                <p class="text-white text-center p-2">What is PHP</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bg-dark rounded">
                                <img src="https://toka.b-cdn.net/wp-content/uploads/2022/01/black-man-looking-stock-market-exchange-information-computer-crypto-currency.png"
                                    class="w-100 rounded">
                                <p class="text-white text-center p-2">What is PHP</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bg-dark rounded">
                                <img src="https://toka.b-cdn.net/wp-content/uploads/2022/01/black-man-looking-stock-market-exchange-information-computer-crypto-currency.png"
                                    class="w-100 rounded">
                                <p class="text-white text-center p-2">What is PHP</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bg-dark rounded">
                                <img src="https://toka.b-cdn.net/wp-content/uploads/2021/11/3d-aesthetics.png"
                                    class="w-100 rounded">
                                <p class="text-white text-center p-2">What is PHP</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-card p-3 mt-4">
                    <h5 class="text-primary"> Most Love Articles</h5>
                    <div class="row">
                        <div class="col-6">
                            <div class="bg-dark rounded">
                                <img src="https://toka.b-cdn.net/wp-content/uploads/2021/11/3d-aesthetics.png"
                                    class="w-100 rounded">
                                <p class="text-white text-center p-2">What is PHP</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bg-dark rounded">
                                <img src="https://toka.b-cdn.net/wp-content/uploads/2022/01/black-man-looking-stock-market-exchange-information-computer-crypto-currency.png"
                                    class="w-100 rounded">
                                <p class="text-white text-center p-2">What is PHP</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bg-dark rounded">
                                <img src="https://toka.b-cdn.net/wp-content/uploads/2022/01/black-man-looking-stock-market-exchange-information-computer-crypto-currency.png"
                                    class="w-100 rounded">
                                <p class="text-white text-center p-2">What is PHP</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bg-dark rounded">
                                <img src="https://toka.b-cdn.net/wp-content/uploads/2021/11/3d-aesthetics.png"
                                    class="w-100 rounded">
                                <p class="text-white text-center p-2">What is PHP</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>
