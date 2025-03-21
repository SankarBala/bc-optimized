@extends('frontend.layouts.app')


@section('content')
    <!--==================================================-->

    <div class="about-area pt-70">
        <div class="container">
            <div class="row pt-5">
                <div class="col-lg-7">
                    <h3>Leading Visa & Immigration Consultant</h3>
                    <hr class="p-0 my-2" />
                    <p class="text-justify">
                        Visa processing from Bangladesh is a complex procedure. You would need a trustworthy, knowledgeable
                        and simplified agent
                        to get your desired visa. Each country have its own visa processing system, requirements. Bengal
                        Consultancy match your
                        qualification as per required visa scheme. We are representing world leading universities and
                        Institution.
                    </p>
                </div>
                <div class="col-lg-5">
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/tour-canvas.jpg') }}" alt="" />
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->

    <div class="about-area my-5 text-justify">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 position-relative">
                    <div class="contact-form-fixed" id="fixed-contact-form">

                        <div class="sideber-visa-content country-sliders" style="background-color:#1f8353;">
                            <div class="thumb-title">
                                <h3 class="text-center">Ask your question</h3>
                            </div>
                            <p class="text-light">
                                Free assessment, profiling and for expert visa advice please ask your question and start
                                your visa journey
                            </p>
                        </div>


                        <form action="{{ route('postQuery') }}" method="POST" enctype="multipart/form-data"
                            class="text-left">
                            @csrf
                            <div class="row mt-20">
                                <div class="col-lg-12">
                                    <div class="form-box">
                                        <input type="text" name="name" placeholder="{{ trans('contact.name') }}"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-box">
                                        <input type="text" name="email" placeholder="{{ trans('contact.email') }}">
                                    </div>
                                </div>
                                <div class="col-7 pr-2">
                                    <div class="form-box">
                                        <input class="" maxlength="14" type="text" name="phone"
                                            placeholder="{{ trans('contact.phone') }}" required>
                                    </div>
                                </div>
                                <div class="col-5 pl-0">
                                    <div class="form-box">
                                        <input class="px-1" maxlength="10" type="text" name="date"
                                            placeholder="{{ trans('contact.date') }}">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-box">
                                        <textarea name="message" id="" cols="30" rows="3" name="message"
                                            placeholder="{{ trans('contact.message') }}"></textarea>
                                    </div>
                                    <p class="text-success">{{ session('message') }}</p>
                                </div>
                                <div class="col-lg-12">
                                    <input class="btn btn-danger w-100 country-sliders py-2 mt-1"
                                        style="background-color:#f47b20;" type="submit"
                                        value="{{ trans('contact.send') }}">

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-7">
                    <h3 class="text-center w-100">Are you looking for Visa Solutions&nbsp;?</h3>
                    <br />
                    <p class="text-justify mb-4">
                        "We Provide Solutions” is the motto of Bengal Consultancy.
                        We suggest you the best possible way to get your desired visa.
                        Currently many Visa processing consultancy organization operating in Bangladesh, but only few of
                        them are transparent and reliable as Bengal Consultancy.
                    </p>
                    <h4 class="my-3 text-center">For more information click here
                        <div class="about-button ml-2 d-inline">
                            <a class="bg-success" href="{{ route('popular', $popular) }}">{{ $popular->name }} <i
                                    class="fas fa-chevron-right"></i></a>
                        </div>
                    </h4>
                    <img class="img-thumbnail w-100" src="{{ Storage::url($popular->banner_2) }}" alt="" />
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

                    <h2 class="text-center w-100 mb-4"> Our Services</h2>
                    <p class="text-justify">
                        Bengal Consultancy’s visa counsellors are effective and well experienced to guide your desired visa
                        easily. Our staffs listen your purpose, assess your visa related documents to solve your visa
                        related mistakes. We understand your unique situation needs tender care to build a perfect visa
                        application. Often, we offer tailor made services for unique situation
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
@endsection


@push('style')
    <style>
        .dreamit-feature-box {
            height: 300px;
        }

        .fixed-contact-form {
            position: fixed;
            top: 110px;
            max-width: 400px;
            z-index: 9999;
            background-color: white
        }

        .contact-form-fixed {
            padding: 5px;
            border: 2px solid #dddddd;
            border-radius: 8px;
        }
    </style>
@endpush


@push('scripts')
    <script type="text/javascript">
        function bodyScrolled(pointer) {
            var offsetY = window.scrollY
            var fixedContactForm = document.getElementById('fixed-contact-form')
            if (offsetY > 300 && window.innerWidth > 990) {
                document.getElementById('fixed-contact-form').classList.add('fixed-contact-form')
            } else {
                document.getElementById('fixed-contact-form').classList.remove('fixed-contact-form')
            }
        }
    </script>

    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const offset = -120; // Adjust this value as needed

                const target = document.querySelector(this.getAttribute('href'));
                const targetPosition = target.getBoundingClientRect().top + window.pageYOffset;
                const offsetPosition = targetPosition + offset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            });
        });
    </script>
@endpush
