<section class=" comics_details">
  <div class="special">
    <div class="container">
      <img src="{{ $data['thumb'] }}" alt="">
    </div>

  </div>
  <div class="container">



    <div class="col-9">
      <h1>{{ $data['title'] }}</h1>




      {{-- !!!!!!!!!!!!!!!! da modificare lo style !!!!!!!!!!!!!!!!!! --}}
      <section class="available">
        <div class="price">
          <div>
            <p>U.S.Price:{{ $data['price'] }}</p>
          </div>
        </div>
        <div class="btn-available">
          <p>AVASILABLE</p>

          <a href="#">Check Availability</a>
        </div>

      </section>






      <section class="description">
        <p>{{ $data['description'] }}</p>
      </section>
    </div>
    <div class="col">
      <img src="{{ asset('images/adv.jpg') }}" alt="">
    </div>

  </div>
  <div class="specifics">
    <div class="container">
      <div class="col-6 talent">
        <h3>Talent</h3>
        <hr>
        <div>
          <div class="row">
            <div class="col-4">
              <p>Art by:</p>
            </div>
            <div class="col-7">
              @foreach ($data['artists'] as $artist)
                <a href="#">{{ $artist }}</a>
              @endforeach
            </div>
          </div>
          <hr>
        </div>
        <div>
          <div class="row">
            <div class="col-4">
              <p>Written by:</p>
            </div>
            <div class="col-7">
              @foreach ($data['writers'] as $writer)
                <a href="#">{{ $writer }}</a>
              @endforeach
            </div>
          </div>
          <hr>
        </div>
      </div>
      <div class="col-6 specs">
        <h3>Specs</h3>
        <hr>
        <div>
          <div class="row">
            <div class="col-4">
              <p>Series</p>
            </div>
            <div class="col-7">
              <p><a href="#">{{ $data['series'] }}</a></p>
            </div>
          </div>
          <hr>
          <div>
          </div>
          <div class="row">
            <div class="col-4">
              <p>U.S. Price</p>
            </div>
            <div class="col-7">
              <p>{{ $data['price'] }} </p>
            </div>
          </div>
          <hr>
        </div>
        <div>

          <div class="row">
            <div class="col-4">
              <p>on sale date</p>
            </div>
            <div class="col-7">
              <p>{{ $data['sale_date'] }} </p>
            </div>
          </div>
          <hr>
        </div>
      </div>
    </div>
</section>
