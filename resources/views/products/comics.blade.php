@extends('layouts.app')

@section('content')    
<div class="background">
    <div class="container h100">
        <div class="row h100">
            <div class="col">
                <div class="contents">
                  <div class="comics">
                    @foreach ($comics as $key => $comic)
                      <a href="{{ route('comic', $key)}}">
                        <div class="comics-card">
                          <div class="img">
                              <img src="https://picsum.photos/200/300" alt="{{ $comic['title'] }}">
                          </div>
                          <div class="text">
                              {{$comic['title']}}
                          </div>
                        </div>
                      </a>
                    @endforeach
                  </div>
                  <button>
                    load more
                  </button>
                  <div class="badge">
                    current series
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="top-bar">
  <div class="container h100">
      <div class="row h100">
          <div class="col">
              <div class="list">
                  <ul>
                      <li>
                          <div class="icon">
                              <img src="{{Vite::asset('resources/images/buy-comics-digital-comics.png')}}" alt="digital comics">
                          </div>
                          <a href="#">
                              digital comics
                          </a>
                      </li>
                      <li>
                          <div class="icon">
                              <img src="{{Vite::asset('resources/images/buy-comics-merchandise.png')}}" alt="dc merchandise">
                          </div>
                          <a href="#">
                              dc merchandise
                          </a>
                      </li>
                      <li>
                          <div class="icon">
                              <img src="{{Vite::asset('resources/images/buy-comics-subscriptions.png')}}" alt="subscription">
                          </div>
                          <a href="#">
                              subscription
                          </a>
                      </li>
                      <li>
                          <div class="icon">
                              <img src="{{Vite::asset('resources/images/buy-comics-shop-locator.png')}}" alt="comic shop locator">
                          </div>
                          <a href="#">
                              comic shop locator
                          </a>
                      </li>
                      <li>
                          <div class="icon">
                              <img src="{{Vite::asset('resources/images/buy-dc-power-visa.svg')}}" alt="dc power visa">
                          </div>
                          <a href="#">
                              dc power visa
                          </a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection