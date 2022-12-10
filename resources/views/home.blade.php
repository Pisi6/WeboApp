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
        <div class="carousel-item">
          <div class="d-block w-100" >
              <a href="/games/bfv"><img src="assets/products/bfv.png" alt="Fourth slide"></a>
          </div>
        </div>
      </div>
    </div>
</section>

<section style="background-color: #cccccc">
    <div class="container"style="text-align: center">
        <div class="row">
            <div class="col-12" style="margin-top: 2%">
                <h3>Our offers</h3>
            </div>
        </div>
        <div class="row" style="margin-top: 2%">
          <div class="col-3">
              <div class="card" data-aos="flip-left">
                  <div class="card-header">
                      <h5>Battlefield 1</h5>
                  </div>
                  <div class="card-body">
                      <p style="text-decoration-line: line-through;">39.99€</p>NOW<p><strong>4.79€</strong></p>
                  </div>
                  <div class="card-footer">
                      <p><a class="btn btn-success" href="https://store.steampowered.com/app/1238840/Battlefield_1/" target="_blank">BUY</a></p>
                  </div>
              </div>
          </div>
          <div class="col-3">
              <div class="card" data-aos="flip-left">
                  <div class="card-header">
                      <h5>Battlefield 4</h5>
                  </div>
                  <div class="card-body">
                      <p style="text-decoration-line: line-through;">39.99€</p>NOW<p><strong>4.79€</strong></p>
                  </div>
                  <div class="card-footer">
                      <p><a class="btn btn-success" href="https://store.steampowered.com/app/1238860/Battlefield_4/" target="_blank">BUY</a></p>
                  </div>
              </div>
          </div>
          <div class="col-3">
            <div class="card" data-aos="flip-left">
                <div class="card-header">
                    <h5>Battlefield V</h5>
                </div>
                <div class="card-body">
                    <p>49.99€</p>No offers found!<p><strong>49.99€</strong></p>
                </div>
                <div class="card-footer">
                    <p><a class="btn btn-success" href="https://store.steampowered.com/app/1238810/Battlefield_V/" target="_blank">BUY</a></p>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card" data-aos="flip-left">
                <div class="card-header">
                    <h5>Battlefield 4</h5>
                </div>
                <div class="card-body">
                    <p style="text-decoration-line: line-through;">39.99€</p>NOW<p><strong>4.79€</strong></p>
                </div>
                <div class="card-footer">
                    <p><a class="btn btn-success" href="https://store.steampowered.com/app/1238860/Battlefield_4/" target="_blank">BUY</a></p>
                </div>
            </div>
        </div>
        
        </div>
        {{-- LOL --}}
        <small style="color: white">All our offers are based on real-time trusted stores prices.</small>
    </div>
</section>

@endsection
