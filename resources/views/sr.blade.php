@extends('layouts.app')

@section('content')

<div class="full-width">
      <!-- Women's Clothings -->
      <div class="container other-side women">
        <div class="menu-area"> Search Results
        </div>
        <div class="col-md-2">
          <div class="left-sidebar">
            <div class="left-sidebar-tit">
              <span class="menu-name">All Categories</span>
            </div>
            <div class="left-sidebar-body">
              <ul>
                @foreach($cats as $cat)
                <li><a href="{{ url('product/category/'.$cat->id) }}"> {{ $cat->name }}</a></li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-10 product-list">
          <div id="carouseli">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <?php 
                if(count($items) > 0){
                    foreach ($items as $key => $k) { 
                      $g = App\Items::find($k);
                    ?>
                      
                      <div class="col-sm-3">
                        <div class="product">
                          <img src="{{ url('images/products/'.$g->photo) }}" alt="boomstore">
                          <div class="item-sub">
                            <h3><a href="{{ url('product-detail/'.$g->id) }}">{{ $g->product_name }}</a></h3>
                            <p>{!! str_limit($g->description, $limit = 30, $end = '....... ') !!}</p>
                            <p><a href="">{{ $cats->where('id',$id)->first()->name }} </a><span class="pull-right">₦{{ $g->price }} </span></p>
                            <div>
                              <a href="{{ url('add_cart/'.$g->id) }}"><button class="addtocart">ADD TO CART</button></a>
                            </div> 
                          </div>
                        </div>
                      </div>
                    <?php }
                  }else
                  { ?>
                    <div class="alert alert-warning" style="margin-top:15px"> Sorry, no match found!!!</div>
                 <?php  }
                ?>
              </div>
          </div>
        </div>
        </div>
    </div>





</div>
@endsection
