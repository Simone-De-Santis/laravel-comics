<section class="main-content">
  <main>
    <div class="container">
      {{-- btn current series --}}
      <div class="section-btn-current">
        <a class="btn" href="#">current series</a>
      </div>
      <section class=" container-cards">
        {{-- section container card --}}
        @foreach ($data as $card)
          <div class="card">
            <a href="{{ url("/comics/$loop->index") }}">
              <div class="img-card">

                <img src="{{ $card['thumb'] }}" alt="">
              </div>
            </a>
            <h3 class='text-img'>{{ $card['series'] }}</h3>
          </div>
        @endforeach
      </section>
      <div class="section-btn-load">
        {{-- btn load more --}}
        <a class="btn" href="#">load more</a>
      </div>
    </div>
  </main>
  <section class="icon-bar">
    <div class="container ">
      <ul>
        <li>
          <a class="" href=" #">
            <img src="{{ asset('images/buy-comics-digital-comics.png') }}"
              alt="buy-comics-digital-comics.png" />
            <p>digital comics</p>
          </a>
        </li>
        <li>
          <a class="" href=" #">
            <img src="{{ asset('images/buy-comics-merchandise.png') }}"
              alt="buy-comics-merchandise.png" />
            <p>merchandise</p>
          </a>
        </li>
        <li>
          <a class="" href=" #">
            <img src="{{ asset('images/buy-comics-subscriptions.png') }}"
              alt="buy-comics-subscriptions.png" />
            <p>subscriptions</p>
          </a>
        </li>
        <li>
          <a class="" href=" #">
            <img src="{{ asset('images/buy-comics-shop-locator.png') }}"
              alt="buy-comics-shop-locator.png" />
            <p>comic shop locator</p>
          </a>
        </li>
        <li>
          <a class="" href=" #">
            <img src="{{ asset('images/buy-dc-power-visa.svg') }}"
              alt="buy-dc-power-visa.svg" />
            <p>dc power visa</p>
          </a>
        </li>
      </ul>
    </div>
  </section>

</section>
