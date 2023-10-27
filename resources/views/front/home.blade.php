@extends('layouts.header')
@section('title', 'Home')
@section('content')

    <body>
        @include('layouts.start_header')
        @include('layouts.nav')
        @include('layouts.nav_side')
        @include('layouts.cart')
        <!-- News Content Start -->
        <section class="sales text-center p-2 d-block d-lg-none">
            شحن مجاني للطلبات 💥 عند الشراء ب 699ج او اكثر
        </section>
        <!-- News Content End -->
        </div>
        <!-- Header Content End -->

        <!-- Page Content Start -->
        <main class="pt-4">
            <!-- Hero Section Start -->
            <section class="section-container hero">
                <div class="owl-carousel hero__carousel owl-theme">
                    @forelse ($sliders as $slider)
                        <div class="hero__item">
                            <img class="hero__img" src="{{ asset('assets') }}/images/{{ $slider->image }}" alt="">
                        </div>
                    @empty
                    @endforelse
                </div>
            </section>
            <!-- Hero Section End -->
            <!-- Offer Section Start -->
            <section class="section-container mb-5 mt-3">
                <div class="offer d-flex align-items-center justify-content-between rounded-3 p-3 text-white">
                    <div class="offer__title fw-bolder">
                        عروض اليوم
                    </div>
                    <div class="offer__time d-flex gap-2 fs-6">
                        <div class="d-flex flex-column align-items-center">
                            <span class="fw-bolder">06</span>
                            <div>ساعات</div>
                        </div>:
                        <div class="d-flex flex-column align-items-center">
                            <span class="fw-bolder">10</span>
                            <div>دقائق</div>
                        </div>:
                        <div class="d-flex flex-column align-items-center">
                            <span class="fw-bolder">13</span>
                            <div>ثواني</div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Offer Section End -->
            <!-- Products Section Start -->
            <section class="section-container mb-4">
                <div class="owl-carousel products__slider owl-theme">
                    @forelse ($products as $product)
                        <div class="products__item">
                            <div class="product__header mb-3">
                                <a href="{{ route('specific-book', ['id' => $product->id]) }}">
                                    <div class="product__img-cont">
                                        <img class="product__img w-100 h-100 object-fit-cover"
                                            src="{{ asset('assets') }}/images/{{ $product->image }}" data-id="white">
                                    </div>
                                </a>
                                <div
                                    class="product__sale position-absolute top-0 start-0 m-1 px-2 py-1 rounded-1 text-white">
                                    وفر {{ $product->discount }}
                                </div>
                                <div
                                    class="product__favourite position-absolute top-0 end-0 m-1 rounded-circle d-flex justify-content-center align-items-center bg-white">
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                            </div>
                            <div class="product__title text-center">
                                <a class="text-black text-decoration-none"
                                    href="{{ route('specific-book', ['id' => $product->id]) }}">
                                    {{ $product->name }}
                                </a>
                            </div>
                            <div class="product__author text-center">
                                {{ $product->author }}
                            </div>
                            <div class="product__price text-center d-flex gap-2 justify-content-center flex-wrap">
                                <span class="product__price product__price--old">
                                    {{ $product->price }} جنيه
                                </span>
                                <span class="product__price">
                                    {{ $product->price_after_discount }} جنيه
                                </span>
                            </div>
                        </div>
                    @empty
                    @endforelse
            </section>
            <!-- Products Section End -->
            <!-- Categories Section Start -->
            <section class="section-container mb-5">
                <div class="categories row gx-4">
                    @forelse ($categories as $category)
                        <div class="col-md-6 p-2">
                            <div class="p-4 border rounded-3">
                                <img class="w-100" src="{{ asset('assets') }}/images/{{ $category->image }}"
                                    alt="">
                            </div>
                        </div>

                    @empty
                    @endforelse

                </div>
            </section>
            <!-- Categories Section End -->

            <!-- Best Sales Section Start -->
            <section class="section-container mb-5">
                <div class="products__header mb-4 d-flex align-items-center justify-content-between">
                    <h4 class="m-0">الاكثر مبيعا</h4>
                    <button class="products__btn py-2 px-3 rounded-1">تسوق الأن</button>
                </div>
                <div class="owl-carousel products__slider owl-theme">
                    <div class="products__item">
                        <div class="product__header mb-3">
                            <a href="{{ route('specific-book', ['id' => $product->id]) }}">
                                <div class="product__img-cont">
                                    <img class="product__img w-100 h-100 object-fit-cover"
                                        src="{{ asset('assets') }}/images/product-1.webp" data-id="white">
                                </div>
                            </a>
                            <div class="product__sale position-absolute top-0 start-0 m-1 px-2 py-1 rounded-1 text-white">
                                وفر 10%
                            </div>
                            <div
                                class="product__favourite position-absolute top-0 end-0 m-1 rounded-circle d-flex justify-content-center align-items-center bg-white">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </div>
                        <div class="product__title text-center">
                            <a class="text-black text-decoration-none"
                                href="{{ route('specific-book', ['id' => $product->id]) }}">
                                Flutter Apprentice
                            </a>
                        </div>
                        <div class="product__author text-center">
                            Mike Katz
                        </div>
                        <div class="product__price text-center d-flex gap-2 justify-content-center flex-wrap">
                            <span class="product__price product__price--old">
                                550.00 جنيه
                            </span>
                            <span class="product__price">
                                350.00 جنيه
                            </span>
                        </div>
                    </div>
                    <div class="products__item">
                        <div class="product__header mb-3">
                            <a href="{{ route('specific-book', ['id' => $product->id]) }}">
                                <div class="product__img-cont">
                                    <img class="product__img w-100 h-100 object-fit-cover"
                                        src="{{ asset('assets') }}/images/product-2.webp" data-id="white">
                                </div>
                            </a>
                            <div class="product__sale position-absolute top-0 start-0 m-1 px-2 py-1 rounded-1 text-white">
                                وفر 10%
                            </div>
                            <div
                                class="product__favourite position-absolute top-0 end-0 m-1 rounded-circle d-flex justify-content-center align-items-center bg-white">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </div>
                        <div class="product__title text-center">
                            <a class="text-black text-decoration-none"
                                href="{{ route('specific-book', ['id' => $product->id]) }}">
                                Modern Full-Stack Development
                            </a>
                        </div>
                        <div class="product__author text-center">
                            Frank Zammetti
                        </div>
                        <div class="product__price text-center d-flex gap-2 justify-content-center flex-wrap">
                            <span class="product__price product__price--old">
                                450.00 جنيه
                            </span>
                            <span class="product__price">
                                250.00 جنيه
                            </span>
                        </div>
                    </div>
                    <div class="products__item">
                        <div class="product__header mb-3">
                            <a href="{{ route('specific-book', ['id' => $product->id]) }}">
                                <div class="product__img-cont">
                                    <img class="product__img w-100 h-100 object-fit-cover"
                                        src="{{ asset('assets') }}/images/product-3.webp" data-id="white">
                                </div>
                            </a>
                            <div class="product__sale position-absolute top-0 start-0 m-1 px-2 py-1 rounded-1 text-white">
                                وفر 10%
                            </div>
                            <div
                                class="product__favourite position-absolute top-0 end-0 m-1 rounded-circle d-flex justify-content-center align-items-center bg-white">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </div>
                        <div class="product__title text-center">
                            <a class="text-black text-decoration-none"
                                href="{{ route('specific-book', ['id' => $product->id]) }}">
                                C# 10 in a Nutshell
                            </a>
                        </div>
                        <div class="product__author text-center">
                            Joseph Albahari
                        </div>
                        <div class="product__price text-center d-flex gap-2 justify-content-center flex-wrap">
                            <span class="product__price product__price--old">
                                650.00 جنيه
                            </span>
                            <span class="product__price">
                                450.00 جنيه
                            </span>
                        </div>
                    </div>
                    <div class="products__item">
                        <div class="product__header mb-3">
                            <a href="{{ route('specific-book', ['id' => $product->id]) }}">
                                <div class="product__img-cont">
                                    <img class="product__img w-100 h-100 object-fit-cover"
                                        src="{{ asset('assets') }}/images/product-4.webp" data-id="white">
                                </div>
                            </a>
                            <div class="product__sale position-absolute top-0 start-0 m-1 px-2 py-1 rounded-1 text-white">
                                وفر 10%
                            </div>
                            <div
                                class="product__favourite position-absolute top-0 end-0 m-1 rounded-circle d-flex justify-content-center align-items-center bg-white">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </div>
                        <div class="product__title text-center">
                            <a class="text-black text-decoration-none"
                                href="{{ route('specific-book', ['id' => $product->id]) }}">
                                Algorithms عربي
                            </a>
                        </div>
                        <div class="product__author text-center">
                            Aditya Y. Bhargava
                        </div>
                        <div class="product__price text-center d-flex gap-2 justify-content-center flex-wrap">
                            <span class="product__price product__price--old">
                                359.00 جنيه
                            </span>
                            <span class="product__price">
                                249.00 جنيه
                            </span>
                        </div>
                    </div>
                    <div class="products__item">
                        <div class="product__header mb-3">
                            <a href="{{ route('specific-book', ['id' => $product->id]) }}">
                                <div class="product__img-cont">
                                    <img class="product__img w-100 h-100 object-fit-cover"
                                        src="{{ asset('assets') }}/images/product-5.webp" data-id="white">
                                </div>
                            </a>
                            <div class="product__sale position-absolute top-0 start-0 m-1 px-2 py-1 rounded-1 text-white">
                                وفر 10%
                            </div>
                            <div
                                class="product__favourite position-absolute top-0 end-0 m-1 rounded-circle d-flex justify-content-center align-items-center bg-white">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </div>
                        <div class="product__title text-center">
                            <a class="text-black text-decoration-none"
                                href="{{ route('specific-book', ['id' => $product->id]) }}">
                                Head-First Design Patterns
                            </a>
                        </div>
                        <div class="product__author text-center">
                            Eric Freeman & Elisabeth Robson
                        </div>
                        <div class="product__price text-center d-flex gap-2 justify-content-center flex-wrap">
                            <span class="product__price product__price--old">
                                550.00 جنيه
                            </span>
                            <span class="product__price">
                                350.00 جنيه
                            </span>
                        </div>
                    </div>
                    <div class="products__item">
                        <div class="product__header mb-3">
                            <a href="{{ route('specific-book', ['id' => $product->id]) }}">
                                <div class="product__img-cont">
                                    <img class="product__img w-100 h-100 object-fit-cover"
                                        src="{{ asset('assets') }}/images/product-1.webp" data-id="white">
                                </div>
                            </a>
                            <div class="product__sale position-absolute top-0 start-0 m-1 px-2 py-1 rounded-1 text-white">
                                وفر 10%
                            </div>
                            <div
                                class="product__favourite position-absolute top-0 end-0 m-1 rounded-circle d-flex justify-content-center align-items-center bg-white">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </div>
                        <div class="product__title text-center">
                            <a class="text-black text-decoration-none"
                                href="{{ route('specific-book', ['id' => $product->id]) }}">
                                Flutter Apprentice
                            </a>
                        </div>
                        <div class="product__author text-center">
                            Mike Katz
                        </div>
                        <div class="product__price text-center d-flex gap-2 justify-content-center flex-wrap">
                            <span class="product__price product__price--old">
                                550.00 جنيه
                            </span>
                            <span class="product__price">
                                350.00 جنيه
                            </span>
                        </div>
                    </div>
                    <div class="products__item">
                        <div class="product__header mb-3">
                            <a href="{{ route('specific-book', ['id' => $product->id]) }}">
                                <div class="product__img-cont">
                                    <img class="product__img w-100 h-100 object-fit-cover"
                                        src="{{ asset('assets') }}/images/product-2.webp" data-id="white">
                                </div>
                            </a>
                            <div class="product__sale position-absolute top-0 start-0 m-1 px-2 py-1 rounded-1 text-white">
                                وفر 10%
                            </div>
                            <div
                                class="product__favourite position-absolute top-0 end-0 m-1 rounded-circle d-flex justify-content-center align-items-center bg-white">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </div>
                        <div class="product__title text-center">
                            <a class="text-black text-decoration-none"
                                href="{{ route('specific-book', ['id' => $product->id]) }}">
                                Modern Full-Stack Development
                            </a>
                        </div>
                        <div class="product__author text-center">
                            Frank Zammetti
                        </div>
                        <div class="product__price text-center d-flex gap-2 justify-content-center flex-wrap">
                            <span class="product__price product__price--old">
                                450.00 جنيه
                            </span>
                            <span class="product__price">
                                250.00 جنيه
                            </span>
                        </div>
                    </div>
                    <div class="products__item">
                        <div class="product__header mb-3">
                            <a href="{{ route('specific-book', ['id' => $product->id]) }}">
                                <div class="product__img-cont">
                                    <img class="product__img w-100 h-100 object-fit-cover"
                                        src="{{ asset('assets') }}/images/product-3.webp" data-id="white">
                                </div>
                            </a>
                            <div class="product__sale position-absolute top-0 start-0 m-1 px-2 py-1 rounded-1 text-white">
                                وفر 10%
                            </div>
                            <div
                                class="product__favourite position-absolute top-0 end-0 m-1 rounded-circle d-flex justify-content-center align-items-center bg-white">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </div>
                        <div class="product__title text-center">
                            <a class="text-black text-decoration-none"
                                href="{{ route('specific-book', ['id' => $product->id]) }}">
                                C# 10 in a Nutshell
                            </a>
                        </div>
                        <div class="product__author text-center">
                            Joseph Albahari
                        </div>
                        <div class="product__price text-center d-flex gap-2 justify-content-center flex-wrap">
                            <span class="product__price product__price--old">
                                650.00 جنيه
                            </span>
                            <span class="product__price">
                                450.00 جنيه
                            </span>
                        </div>
                    </div>
                    <div class="products__item">
                        <div class="product__header mb-3">
                            <a href="{{ route('specific-book', ['id' => $product->id]) }}">
                                <div class="product__img-cont">
                                    <img class="product__img w-100 h-100 object-fit-cover"
                                        src="{{ asset('assets') }}/images/product-4.webp" data-id="white">
                                </div>
                            </a>
                            <div class="product__sale position-absolute top-0 start-0 m-1 px-2 py-1 rounded-1 text-white">
                                وفر 10%
                            </div>
                            <div
                                class="product__favourite position-absolute top-0 end-0 m-1 rounded-circle d-flex justify-content-center align-items-center bg-white">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </div>
                        <div class="product__title text-center">
                            <a class="text-black text-decoration-none"
                                href="{{ route('specific-book', ['id' => $product->id]) }}">
                                Algorithms عربي
                            </a>
                        </div>
                        <div class="product__author text-center">
                            Aditya Y. Bhargava
                        </div>
                        <div class="product__price text-center d-flex gap-2 justify-content-center flex-wrap">
                            <span class="product__price product__price--old">
                                359.00 جنيه
                            </span>
                            <span class="product__price">
                                249.00 جنيه
                            </span>
                        </div>
                    </div>
                    <div class="products__item">
                        <div class="product__header mb-3">
                            <a href="{{ route('specific-book', ['id' => $product->id]) }}">
                                <div class="product__img-cont">
                                    <img class="product__img w-100 h-100 object-fit-cover"
                                        src="{{ asset('assets') }}/images/product-5.webp" data-id="white">
                                </div>
                            </a>
                            <div class="product__sale position-absolute top-0 start-0 m-1 px-2 py-1 rounded-1 text-white">
                                وفر 10%
                            </div>
                            <div
                                class="product__favourite position-absolute top-0 end-0 m-1 rounded-circle d-flex justify-content-center align-items-center bg-white">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </div>
                        <div class="product__title text-center">
                            <a class="text-black text-decoration-none"
                                href="{{ route('specific-book', ['id' => $product->id]) }}">
                                Head-First Design Patterns
                            </a>
                        </div>
                        <div class="product__author text-center">
                            Eric Freeman & Elisabeth Robson
                        </div>
                        <div class="product__price text-center d-flex gap-2 justify-content-center flex-wrap">
                            <span class="product__price product__price--old">
                                550.00 جنيه
                            </span>
                            <span class="product__price">
                                350.00 جنيه
                            </span>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Best Sales Section End -->

            <!-- Newest Section Start -->
            <section class="section-container mb-5">
                <div class="products__header mb-4 d-flex align-items-center justify-content-between">
                    <h4 class="m-0">وصل حديثا</h4>
                    <button class="products__btn py-2 px-3 rounded-1">تسوق الأن</button>
                </div>

                <div class="owl-carousel products__slider owl-theme">
                    @forelse ($new_products as $new_product)
                        <div class="products__item">
                            <div class="product__header mb-3">
                                <a href="{{ route('specific-book', ['id' => $product->id]) }}">
                                    <div class="product__img-cont">
                                        <img class="product__img w-100 h-100 object-fit-cover"
                                            src="{{ asset('assets') }}/images/{{ $new_product->image }}"
                                            data-id="white">
                                    </div>
                                </a>
                                <div
                                    class="product__sale position-absolute top-0 start-0 m-1 px-2 py-1 rounded-1 text-white">
                                    وفر {{ $new_product->discount }}
                                </div>
                                <div
                                    class="product__favourite position-absolute top-0 end-0 m-1 rounded-circle d-flex justify-content-center align-items-center bg-white">
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                            </div>
                            <div class="product__title text-center">
                                <a class="text-black text-decoration-none"
                                    href="{{ route('specific-book', ['id' => $product->id]) }}">
                                    {{ $new_product->name }}
                                </a>
                            </div>
                            <div class="product__author text-center">
                                {{ $new_product->author }}
                            </div>
                            <div class="product__price text-center d-flex gap-2 justify-content-center flex-wrap">
                                <span class="product__price product__price--old">
                                    {{ $new_product->price }} جنيه
                                </span>
                                <span class="product__price">
                                    {{ $new_product->price_after_discount }} جنيه
                                </span>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </section>
            <!-- Newest Section End -->
        </main>
    </body>
    @include('layouts.footer')
@endsection
