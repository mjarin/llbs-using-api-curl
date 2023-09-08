@extends('master')
@section('title'){{$cate->category_name}}@endsection
@section('content')
<div class="product-section" style="margin-top:7%;">
    <div class="container-fluid">
        <div class="row grid-row p-2">
            <p style="margin-bottom:3%; font-size:12px;" class="mt-3">
                <a href="{{url('/')}}" >Home&nbsp;/&nbsp;</a>Category&nbsp;/&nbsp;<a href="{{url('view-cate-products/'.$cate->id)}}" style="color:#99244D;">"{{$cate->category_name}}"</a>
            </p>

            @foreach ($cateProducts as $cateProd)
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-2">
                <a href="{{url('view-single-product/'.$cateProd->slug)}}" class="">
                <div class="card h-100" style="min-height:250px; width:100%; position:relative!important;">
                    <div class="card-body text-center">
                    <img  class="card-img-top" alt="..."
                       loading="lazy" src="{{ url('https://d26ymvzd0yz7vf.cloudfront.net/'.$cateProd->image)}}">
                            <!--<p class="" style="font-weight:bold; font-size:20px; color:#DA83A5;">{{$cateProd->selling_price}}<b style="font-size:18px!important;">&nbsp;&#2547;&nbsp;</b></p>-->
                            <!--    <p class="card-title" style="min-height:55px; font-weight:bold; font-size:13px;">{{$cateProd->name}}</p>-->
                    </div>
                    <p class="text-center" style="font-weight:bold; font-size:20px; color:#99244D; position:absoute!important;buttom:6%!important;">{{$cateProd->selling_price}}<b style="font-size:18px!important;">&nbsp;&#2547;&nbsp;</b></p>
                    <p class="text-center" style="font-weight:bold; font-size:13px; position:absoute!important;buttom:5%!important;">{{$cateProd->name}}</p>                    
                 </div>
                </a>
            </div>
          @endforeach
        </div>

        <div class="row mt-5 pagination-row" >
            <div class="col-lg-5 col-md-4 col-sm-3"></div>
                <div class="col-lg-4 col-md-4 col-sm-9 col-12 pagination-col">
                    {{ $cateProducts->onEachSide(3)->links() }}
                </div>
            <div class="col-lg-3 col-md-4 col-sm-2 col-12"></div>
        </div>
    </div>
</div>
@endsection
