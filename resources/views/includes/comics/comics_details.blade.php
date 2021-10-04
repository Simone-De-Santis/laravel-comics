<section class=" comics_details">
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
</section>
