@extends('layout.master')

@section('content')
    <div class="mt-4">
        <input placeholder="Search Blog..." type="text" class="form-control rounded bg-card">
    </div>

    <!-- first blog -->
    <div class="mt-4">
        <div class="d-flex rounded bg-card">
            <img style="width: 400px;"
                src="https://toka.b-cdn.net/wp-content/uploads/2022/01/black-man-looking-stock-market-exchange-information-computer-crypto-currency.png"
                class="rounded">
            <div class="p-3">
                <b class="text-warning">Fullstack</b>
                <h3 class="text-white">What is MERN Fullstack App?</h3>
                <p>
                    MERN Stackဆိုတာဘာလည်း ဘယ်လိုအလုပ်လုပ်တာလည်းအပြင်
                    သူ့ကိုလေ့လာဖို့ road map ပါ တစ်ခါတည်းရှင်းပြပေးသွားမှာဖြစ်ပါတယ်။
                    MERN Stackဆိုတာဘာလည်း ဘယ်လိုအလုပ်လုပ်တာလည်းအပြင်
                    သူ့ကိုလေ့လာဖို့ road map ပါ တစ်ခါတည်းရှင်းပြပေးသွားမှာဖြစ်ပါတယ်။
                    MERN Stackဆိုတာဘာလည်း ဘယ်လိုအလုပ်လုပ်တာလည်းအပြင်
                    သူ့ကိုလေ့လာဖို့ road map ပါ တစ်ခါတည်းရှင်းပြပေးသွားမှာဖြစ်ပါတယ်။
                </p>
                <div class="d-flex justify-content-between">
                    <div>
                        <a href="" class="text-muted">
                            <i class='bx bx-user'></i>
                            <small>Aung Aung</small>
                        </a>
                    </div>
                    <div>
                        <a href="" class="text-muted">
                            <i class='bx bx-happy-heart-eyes'></i>
                            <small>6785</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4 blog-list">
        <div class="row p-0 m-0">
            <div class="col-6  pl-0 mt-4">
                <div class="rounded bg-card">
                    <img class="rounded" src="{{ asset('/asset/images/1.webp') }}" style="width:100%" alt="">
                    <div class="p-4 text-white">
                        <h4 class="text-white">MERN Stack တစ်ယောက်ဖြစ်ဖို့ </h4>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-dark"><span class="text-success"><i
                                        class='bx bx-happy-heart-eyes'></i></span> :
                                100</button>
                            <button class="btn btn-dark"><span class="text-success"><i class='bx bx-heart'></i></span> :
                                100</button>
                            <button class="btn btn-dark"><span class="text-success"><i
                                        class='bx bx-message-square-dots'></i></span> :
                                100</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6  pl-0 mt-4">
                <div class="rounded bg-card">
                    <img class="rounded" src="{{ asset('/asset/images/2.webp') }}" style="width:100%" alt="">
                    <div class="p-4 text-white">
                        <h4 class="text-white">Laravel Developer တစ်ယောက်ဖြစ်ဖို့ </h4>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-dark"><span class="text-success"><i
                                        class='bx bx-happy-heart-eyes'></i></span> :
                                100</button>
                            <button class="btn btn-dark"><span class="text-success"><i class='bx bx-heart'></i></span> :
                                100</button>
                            <button class="btn btn-dark"><span class="text-success"><i
                                        class='bx bx-message-square-dots'></i></span> :
                                100</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6  pl-0 mt-4">
                <div class="rounded bg-card">
                    <img class="rounded" src="{{ asset('/asset/images/3.webp') }}" style="width:100%" alt="">
                    <div class="p-4 text-white">
                        <h4 class="text-white">Laravel Developer တစ်ယောက်ဖြစ်ဖို့ </h4>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-dark"><span class="text-success"><i
                                        class='bx bx-happy-heart-eyes'></i></span> :
                                100</button>
                            <button class="btn btn-dark"><span class="text-success"><i class='bx bx-heart'></i></span> :
                                100</button>
                            <button class="btn btn-dark"><span class="text-success"><i
                                        class='bx bx-message-square-dots'></i></span> :
                                100</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6  pl-0 mt-4">
                <div class="rounded bg-card">
                    <img class="rounded" src="{{ asset('/asset/images/5.webp') }}" style="width:100%" alt="">
                    <div class="p-4 text-white">
                        <h4 class="text-white">Laravel Developer တစ်ယောက်ဖြစ်ဖို့ </h4>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-dark"><span class="text-success"><i
                                        class='bx bx-happy-heart-eyes'></i></span> :
                                100</button>
                            <button class="btn btn-dark"><span class="text-success"><i class='bx bx-heart'></i></span> :
                                100</button>
                            <button class="btn btn-dark"><span class="text-success"><i
                                        class='bx bx-message-square-dots'></i></span> :
                                100</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
