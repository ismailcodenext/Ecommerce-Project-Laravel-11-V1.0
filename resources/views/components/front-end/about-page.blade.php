@extends('layout.master')
@section('title','About Page')
@section('content')
@include('components.front-end.components.navbar')

<!-- Hero Start -->
<section id="about-hero">
    <div class="container">
      <div class="hero_content">
        <h1>About Us</h1>

        <div class="hero_left_shape">
          <img src="./front-end/assets/img/about-page/hero_left_shape.svg" alt="">
        </div>
        <div class="hero_right_shape">
          <img src="./front-end/assets/img/about-page/hero_right_shape.svg" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-- Hero End -->

  <!-- About Start -->
  <section id="about">
    <div class="container">
      <div class="row d-flex align-items-center justify-content-between">
        <div class="col-lg-6">
          <div class="about_content">
            <h1>About Us</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit corporis veritatis sapiente
              itaque eaque amet eum recusandae delectus nesciunt dolorum aliquid inventore, officia reiciendis
              laboriosam quia veniam esse voluptas saepe consequuntur dicta quaerat vel! Aliquam qui accusamus nam
              cupiditate laboriosam.</p>
          </div>
        </div>

        <div class="col-lg-5">
          <div class="about_content">
            <img src="./front-end/assets/img/about-page/about_img.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About End -->

  <!-- Our Journey Start -->
  <section id="journey">
    <div class="container">
      <div class="journey_content">
        <h1>Our Journey</h1>

        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem repellat praesentium sunt iusto maxime dolore
          commodi, alias rerum inventore, sit odit dolores explicabo? Facilis vitae consectetur labore magnam, sit
          incidunt esse sint ratione, eos iure non enim culpa dolorem sapiente numquam laudantium consequatur quaerat
          explicabo! Ipsam impedit dolor quo ea?</p>

        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem repellat praesentium sunt iusto maxime dolore
          commodi, alias rerum inventore, sit odit dolores explicabo? Facilis vitae consectetur labore magnam, sit
          incidunt esse sint ratione, eos iure non enim culpa dolorem sapiente numquam laudantium consequatur quaerat
          explicabo! Ipsam impedit dolor quo ea?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem repellat
          praesentium sunt iusto maxime dolore commodi, alias rerum inventore, sit odit dolores explicabo? Facilis vitae
          consectetur labore magnam, sit incidunt esse sint ratione, eos iure non enim culpa dolorem sapiente numquam
          laudantium consequatur quaerat explicabo! Ipsam impedit dolor quo ea?</p>

        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem repellat praesentium sunt iusto maxime dolore
          commodi, alias rerum inventore, sit odit dolores explicabo? Facilis vitae consectetur labore magnam, sit
          incidunt esse sint ratione, eos iure non enim culpa dolorem sapiente numquam laudantium consequatur quaerat
          explicabo! Ipsam impedit dolor quo ea?</p>

        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem repellat praesentium sunt iusto maxime dolore
          commodi, alias rerum inventore, sit odit dolores explicabo? Facilis vitae consectetur labore magnam, sit
          incidunt esse sint ratione, eos iure non enim culpa dolorem sapiente numquam laudantium consequatur quaerat
          explicabo! Ipsam impedit dolor quo ea?</p>
      </div>
    </div>
  </section>
  <!-- Our Journey End -->


@include('components.front-end.components.footer')
@endsection
