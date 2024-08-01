@extends('layout.master')
@section('title','About Page')
@section('content')
    @include('components.front-end.components.navbar')




    <!-- Hero Start -->
    <section id="contact-hero">
        <div class="container">
            <div class="hero_content">
                <h1>Contact Us</h1>

                <div class="hero_left_shape">
                    <img src="./front-end/assets/img/hero_left_shape.svg" alt="" />
                </div>
                <div class="hero_right_shape">
                    <img src="./front-end/assets/img/hero_right_shape.svg" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- Hero End -->

    <!-- Contact Start -->
    <section id="contact">
        <div class="container">
            <div class="row d-flex justify-content-around align-items-center">
                <div class="col-lg-5">
                    <div class="contact_map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1961525.4119118967!2d-120.19306517739395!3d36.525124895889356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia%2C%20USA!5e0!3m2!1sen!2sbd!4v1722311236111!5m2!1sen!2sbd"
                            style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact_content">
                        <h1>Contact Us</h1>

                        <div class="contact_items">
                            <div class="contact_item">
                                <i class="fa-solid fa-location-dot"></i>
                                <span>Akshya Nagar 1st Block 1st Cross, Rammurthy nagar,
                  Bangalore-560016</span>
                            </div>

                            <div class="contact_item">
                                <i class="fa-solid fa-phone"></i>
                                <a href="tel: (415) 555‑0132">(415) 555‑0132</a>
                            </div>

                            <div class="contact_item">
                                <i class="fa-solid fa-phone"></i>
                                <a href="tel: (415) 555‑0132">(415) 555‑0132</a>
                            </div>

                            <div class="contact_item">
                                <i class="fa-solid fa-envelope"></i>
                                <a href="mailto: example@gmail.com"> example@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact End -->




    @include('components.front-end.components.footer')
@endsection
