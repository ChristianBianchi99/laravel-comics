@extends('layouts.app')

@section('content')
    <div class="blue-string">
        <div class="container-comic">
            <div class="poster">
                <img src="https://picsum.photos/200/300" alt="{{$comic['title']}}">
            </div>
        </div>
    </div>
    <div class="container-comic">
        <div class="row">
            <div class="col-8">
                <div class="details">
                    <h3>
                        {{$comic['title']}}
                    </h3>
                    <table>
                        <tr>
                            <td>
                                <span>
                                    U.S. Price: 
                                </span>
                                {{$comic['price']}}
                                <span>
                                    AVAILABLE
                                </span>
                            </td>
                            <td>
                                Check Availability
                            </td>
                        </tr>
                    </table>
                    <p>
                        {{$comic['description']}}
                    </p>
                </div>
            </div>
            <div class="col">
                <div class="advertising">
                    <div class="adv">
                        <img src="https://picsum.photos/400/350" alt="">
                        <div class="sentence">
                            ADVERTISEMENT
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="background-comic">
        <div class="container-comic">
            <div class="row">
                <div class="col">
                    <div class="talent">
                        <h5>
                            Talent
                        </h5>
                        <table>
                            <tr>
                                <td>
                                    Art by:
                                </td>
                                <td>
                                    @foreach ($comic['artists'] as $artist)
                                        <span>
                                            {{$artist}},
                                        </span>
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Written by:
                                </td>
                                <td>
                                    @foreach ($comic['writers'] as $writer)
                                        <span>
                                            {{$writer}},
                                        </span>
                                    @endforeach
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col">
                    <div class="specs">
                        <h5>
                            Specs
                        </h5>
                        <table>
                            <tr>
                                <td>
                                    Series:
                                </td>
                                <td>
                                    {{$comic['series']}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    U.S. Price:
                                </td>
                                <td>
                                    {{$comic['price']}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    On Sale Date:
                                </td>
                                <td>
                                    {{$comic['sale_date']}}
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="background-comic">
        <div class="container-comic">
            <div class="row bottom-row">
                <div class="col">
                    <div class="content">
                        <div>
                            DIGITAL COMICS
                        </div>
                        <div class="icon">

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="content">
                        <div>
                            SHOP DC
                        </div>
                        <div class="icon">
                            
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="content">
                        <div>
                            COMIC SHOP LOCATOR
                        </div>
                        <div class="icon">
                            
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="content">
                        <div>
                            SUBSCRIPTIONS
                        </div>
                        <div class="icon">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection