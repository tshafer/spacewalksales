@extends('layout')

@section('title', $product->name)

@section('content')

    <div class="container main-container">
        <div class="row">

            <div class="col-md-12">
                <span class="title">{{$product->name}}</span>

                <div class="col-lg-12 col-sm-12 hero-feature">

                    <div class="row">
                        <div class="col-md-8">

                            <ul id="imageGallery">
                                @foreach ($product->getMedia('products') as $photo)
                                    <li data-thumb="{{$photo->getUrl('thumb') }}"
                                        data-src="{{$photo->getUrl('full') }}"><img
                                                src="{{$photo->getUrl('medium') }}"/></li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="visible-xs">
                            <div class="clearfix"></div>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="col-md-12"><br/>
                                <span class="title">{{$product->name}}</span>
                                    <p>{{$product->description}} </p>
                            </div>

                            <div class="well product-short-detail">
                                <div class="row">
                                    <div class="the-list">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>W x L x H</th>
                                                <th>UNIT LB</th>
                                                <th>PRICE</th>
                                                <th>BUY</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($product->units as $unit)
                                                <tr>
                                                    <td>{{$unit->width}} x {{$unit->length}}
                                                        x {{$unit->height}}</td>
                                                    <td>{{$unit->weight}}</td>
                                                    <td>${{$unit->price}}</td>
                                                    <td>
                                                        {{open(['route' => 'cart.store'])}}
                                                        {{ hidden('unit', $unit->id) }}
                                                        <button type="submit" class="btn btn-primary btn-xs pull-left">
                                                            <i class="fa fa-shopping-cart"></i> Add to Cart
                                                        </button>
                                                        {{close()}}
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>


                        @if($product->getMedia('accessories')->count() > 0)
                            <div class="col-md-12" style="margin-top:50px;">
                                <span class="title">Accessories</span>
                                <ul class="imageGallery">
                                    @foreach ($product->getMedia('accessories') as $photo)
                                        <li><img src="{{$photo->getUrl('thumb') }}"/></li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
