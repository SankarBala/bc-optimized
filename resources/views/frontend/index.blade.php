@extends('frontend.layouts.app')


@section('content')
    <div class="container mt-5">
        <div class="row mt-5 pt-5">

            <div class="col-md-5">
                <div class="dreamit-slider-content text-dark">
                    <h4 class="text-info"> {{ __('home.welcome') }} </h4>
                    <h3 class="text-info mb-3" style="font-size:42px; width:100%; font-weight:bold;">
                        {{ __('home.visaexpert') }}</h3>
                    <p class="text-success" style="font-size:20px; width:100%; text-align:justify;"> {{ trans('home.agent') }}
                    </p>
                </div>
            </div>

            <div class="col-md-7 pt-4 text-center">
                <img src="{{ asset('frontend/assets/images/tour-canvas.png') }}" alt="" width="100%">
                {{-- <p class="mt-2">{{ trans('home.anInstitution') }}</p> --}}
            </div>

            <div class="col-12 mt-2">
                <div>
                    <p class="text-primary" style="font-size:22px; width:100%;">{{ trans('home.visaexpert3') }}</p>
                </div>
                <div class="about-buttons text-center">
                    <a class="btn appointment-button btn-lg py-3 px-5" style="font-size: 20px;"
                        href="{{ route('contactUs') }}">{{ trans('home.getAppointment') }} <i
                            class="fas fa-chevron-right"></i></a>
                </div>

            </div>

        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-5 p-3 text-center">
                <img src="{{ asset('frontend/assets/images/canvas2.jpg') }}" alt="" width="100%">
            </div>
            <div class="col-md-7">
                <div class="dreamit-slider-content text-dark">
                    <h4 class="text-info"> {{ __('home.welcome') }} </h4>
                    <h3 class="text-info mb-3" style="font-size:42px; width:100%; font-weight:bold;">
                        {{ __('home.visaexpert2') }}</h3>
                    <p class="text-success" style="font-size:20px; width:100%; text-align:justify;">
                        {{ trans('home.agent2') }}</p>
                </div>
            </div>

        </div>
    </div>

    <!--==================================================-->
    <div class="country-area pt-70 pb-75">
        <div class="container mb-4 pb-5">
            <div class="row">
                <div class="col-lg-12">

                    <h2 class="text-center w-100 mb-4">{{ trans('home.ourService') }}</h2>
                    <p class="text-justify text-white p-3" style="background-color: rgb(11, 147, 11); font-size: 20px;">
                        {{ trans('home.ourServiceText') }}
                    </p>
                </div>
            </div>
        </div>


        <div class="mt-5 pt-5">
            <div class="container">
                <div class="row margin-top">
                    <div class="col-lg-3 col-md-6">
                        <div class="dreamit-feature-box">
                            <div class="dreamit-feature-icon">
                                {{-- <i class="flaticon-content"></i> --}}
                                {{-- <i class="flaticon-time"></i> --}}
                                <i class="fa-solid fa-graduation-cap"></i>
                            </div>
                            <div class="feature-title">
                                <h2>{{ trans('home.onlineAppointment') }}</h2>
                            </div>
                            <div class="dreamit-feature-content">
                                {{ trans('home.onlineAppointment2') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="dreamit-feature-box">
                            <div class="dreamit-feature-icon">
                                {{-- <i class="flaticon-lifebuoy"></i> --}}
                                {{-- <i class="flaticon-global"></i> --}}
                                <i class="fa-brands fa-cc-visa"></i>

                            </div>
                            <div class="feature-title">
                                <h2>{{ trans('home.vexpert') }}</h2>
                            </div>
                            <div class="dreamit-feature-content">
                                {{ trans('home.vexpert2') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="dreamit-feature-box">
                            <div class="dreamit-feature-icon">
                                {{-- <i class="flaticon-content-writing"></i> --}}

                                <i class="fa-solid fa-passport"></i>
                            </div>
                            <div class="feature-title">
                                <h2>{{ trans('home.applyOnline') }}</h2>
                            </div>
                            <div class="dreamit-feature-content">
                                {{ trans('home.applyOnline2') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="dreamit-feature-box">
                            <div class="dreamit-feature-icon">
                                <i class="fa-solid fa-earth-americas"></i>
                            </div>
                            <div class="feature-title">
                                <h2>{{ trans('home.foreignOffice') }}</h2>
                            </div>
                            <div class="dreamit-feature-content">
                                {{ trans('home.foreignOffice2') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--==================================================-->

    <div class="about-area pt-70 pb-130">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6">
                    <div class="dreamit-thumb">
                        <img src="{{ asset('frontend/assets/images/about-pic.png') }}" alt="">
                    </div>
                    <div class="dreamit-single-counter">
                        <div class="counter-text">
                            <h1 class="counter">450</h1>
                            <h3>+</h3>
                        </div>
                        <div class="counter-title">
                            <h4>{{ trans('home.completedVisa') }}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pl-5 pt-50">
                    <div class="dreamit-section-title pb-30">

                        <div class="dreamit-section-main-title">
                            <h2>{{ trans('home.yourTrastedCenter') }} </h2>

                        </div>
                        <div class="dreamit-section-bold-text pt-30">
                            <p>
                                {{ trans('home.ourPromicess') }}
                            </p>
                        </div>
                        <div class="dreamit-section-text">
                            <p>
                                {{ trans('home.ourWorkers') }}
                            </p>
                        </div>
                    </div>
                    <div class="dreamit-about-content">
                        <div class="dreamit-about-content-inner pb-2 d-flex">
                            <div class="dreamit-about-icon pr-4">
                                <i class="far fa-check-circle"></i>
                            </div>
                            <div class="about-content-text">
                                <p>{{ trans('home.ourCommitment') }}</p>
                            </div>
                        </div>
                        <div class="dreamit-about-content-inner pb-2 d-flex">
                            <div class="dreamit-about-icon pr-4">
                                <i class="far fa-check-circle"></i>
                            </div>
                            <div class="about-content-text">
                                <p>{{ trans('home.ourSupport') }}</p>
                            </div>
                        </div>
                        <div class="dreamit-about-content-inner d-flex">
                            <div class="dreamit-about-icon pr-4">
                                <i class="far fa-check-circle"></i>
                            </div>
                            <div class="about-content-text">
                                <p>{{ trans('home.ourAdvice') }}</p>
                            </div>
                        </div>

                    </div>
                    <div class="about-button pt-4">
                        <a class="bg-success" href="{{ route('aboutUs') }}">{{ trans('home.moreAboutMe') }} <i
                                class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->


    <!--==================================================-->
    <div class="country-area pt-70 pb-75">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="dreamit-section-title pb-20 text-center">
                        <div class="dreamit-section-sub-title">
                        </div>
                        <div class="dreamit-section-main-title">
                            <h2 class="text-black">{{ trans('home.yourFavCountry') }}</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="country_list owl-carousel ">

                    @foreach ($countries as $country)
                        <div class="dreamit-single-box">
                            <div class="dreamit-country-box">
                                <div class="dreamit-country-thumb">

                                    <img src="{{ Storage::url('uploads/thumbnails/300x300/' . basename($country->national_flag)) }}" height="200px"/>
                                </div>
                                <div class="country-flag-img">
                                    <img
                                        src="{{ Storage::url('uploads/thumbnails/150x150/' . basename($country->banner)) }}" />
                                </div>
                                <div class="country-content">
                                    <div class="country-title pt-3">
                                        <h2>{{ $country->name }}</h2>
                                    </div>
                                    <div class="country-content-text">
                                    </div>
                                    <div class="country-button">
                                        <a class="text-danger"
                                            href="{{ route('showCountry', $country->name) }}">{{ trans('home.seeDetails') }}<i
                                                class="fas fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->

    <div class="counter-area pt-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="dreamit-section-title pb-30 text-center">
                        <div class="dreamit-section-sub-title">
                        </div>
                        <div class="dreamit-section-main-title">
                            <h2 class="black">{{ trans('home.whyLikeUS') }}</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-counter-text">
                        <div class="counter-icon">
                            <i class="flaticon-compass"></i>
                        </div>
                        <div class="counter-content">
                            <h1 class="counter">1000</h1>
                            <h3>+</h3>
                        </div>
                        <div class="counter-title-style-2">
                            <h4>{{ trans('home.client') }}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-counter-text">
                        <div class="counter-icon">
                            <i class="flaticon-time"></i>
                        </div>
                        <div class="counter-content">
                            <h1 class="counter">50</h1>
                            <h3>+</h3>
                        </div>
                        <div class="counter-title-style-2">
                            <h4>{{ trans('home.ambassy') }}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-counter-text">
                        <div class="counter-icon">
                            <i class="flaticon-ui"></i>
                        </div>
                        <div class="counter-content">
                            <h1 class="counter">10</h1>
                            <h3>+</h3>
                        </div>
                        <div class="counter-title-style-2">
                            <h4>{{ trans('home.country') }}</h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection


@push('style')
    <style>
        /*    .dreamit-service-box {*/
        /*        height: 700px;*/
        /*        font-size: 15px;*/
        /*    }*/

        .dreamit-feature-box {
            height: 500px;
        }


        .appointment-button {
            background-color: white;
            color: red;
            border: 1px solid red;
            padding: 12px 40px;
            font-size: 16px;
            font-weight: bold;
            background: linear-gradient(to right, white 50%, red 50%);
            background-size: 210% 100%;
            background-position: left;
            transition: background-position 0.3s ease-in-out;
        }

        .appointment-button:hover {
            color: white !important;
            background-position: right;
        }
    </style>
@endpush
