@extends('master.master')

@section('title', 'Home')

@section('content')
<section>
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="d-block w-100" >
              <a href="/games/bf1"><img src="assets/products/bf1.jpg" alt="First slide"></a>
          </div>
        </div>
        <div class="carousel-item">
          <div class="d-block w-100" >
              <a href="/games/bf3"><img src="assets/products/bf3.jpg" alt="Second slide"></a>
          </div>
        </div>
        <div class="carousel-item">
          <div class="d-block w-100" >
              <a href="/games/bf4"><img src="assets/products/bf4.jpg" alt="Third slide"></a>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection