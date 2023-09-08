<header class="p-2 text-dark fixed-top mb-5"  style="background:#fff; border-bottom:#DA83A5 2px solid;">
    <div class="container-fluid" style="">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="{{url('/')}}" class="nav-logo" style="margin-left:0%!important; margin-top:-2%!important;">
          <img class="logo nav-logo-img" height="100" width="100" style="" src="{{ asset('assets/img/logo-lb-f.jpg')}}">
        </a>

        <form action="{{url('submit-search')}}" method="POST" class="header-search-form" style="">
            @csrf
                <div class="input-group">
                    <input type="search" name="product_name" id="search-bar-id" class="form-control" style="width:55%" class="form-control" placeholder="Search product" required aria-describedby="basic-addon1">

                    <button type="submit" class="btn" style="background:#DA83A5!important; border-radius:0;">
                            <i class="fa fa-search text-white"></i>
                    </button>
                </div> <!-- input-group end.// -->
        </form>
<hr>
        <ul class="nav col-12 col-lg-6 mr-4  mb-md-0" style="margin-top:-1%!important; mb-3" >
            <li class="nav-li-1st" style="margin-right:1px; margin-bottom:1px; margin-top:1px; font-weight:bold; padding:1px; line-hight:1px;"><a href="{{url('/')}}" class="" style="font-size:12px; color:#99244D;">Home</a></li>
            <li style="margin-left:2%!important; font-weight:bold; padding:1px; line-hight:1px;"><a href="https://lolonarboson.bdclearance.com/#events" class="" class="" style="font-size:12px; color:#99244D;">Our Products</a></li>
            <li style="margin-left:3%!important; font-weight:bold; padding:1px; line-hight:1px;">
                <div class="dropdown">
                    <button style="border-radius:0!important; font-size:12px; font-weight:bold; color:#99244D; border:0!important;" class="btn btn-small dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                     Categories
                    </button>
                    <ul style="border-radius:0;  border:0; margin-top:5px!important;" class="dropdown-menu dropdown-menu-white" aria-labelledby="dropdownMenuButton2">

                       <li style="border-buttom:1px solid #99244D!important;"><a class="dropdown-item" href="{{url('cate-products/669')}}" style="border-radius:0!important; font-size:12px; font-weight:bold; color:#99244D;">Linen Mexi</a></li> 
                        <li style="border-buttom:1px solid #99244D!important;"><a class="dropdown-item" href="{{url('cate-products/718')}}" style="border-radius:0!important; font-size:12px; font-weight:bold; color:#99244D;">Batik Mexi</a></li>
                                                <li style="border-buttom:1px solid #99244D!important;"><a class="dropdown-item" href="{{url('cate-products/666')}}" style="border-radius:0!important; font-size:12px; font-weight:bold; color:#99244D;">Nursing Mexi</a></li>
                         <li style="border-buttom:1px solid #99244D!important;"><a class="dropdown-item" href="{{url('cate-products/667')}}" style="border-radius:0!important; font-size:12px; font-weight:bold; color:#99244D;">Half Sleeve Cotton Mexi</a></li>
                       <li style="border-buttom:1px solid #99244D!important;"><a class="dropdown-item" href="{{url('cate-products/719')}}" style="border-radius:0!important; font-size:12px; font-weight:bold; color:#99244D;">Full Sleeve Cotton Mexi</a></li>


                    </ul>
                  </div>
            </li>
            <li style="margin-left:2%!important; font-weight:bold; padding:1px; line-hight:1px;"><a href="https://lolonarboson.bdclearance.com/#about" class="" style="font-size:12px; color:#99244D;">About Us</a></li><br>

        </ul>

        <div class="mb-1 mt-1 nav-last-div text-left" style="margin-top:-1%!important;">
          <span class="" style="">
            <a href="{{ url('/view-cart') }}" class="">
            <i class="fa fa-cart-plus fa-2x PositionCartCount mt-2" aria-hidden="true" style="color:#DA83A5;">&nbsp;&nbsp;&nbsp;&nbsp;</i>
            <!--
            <span class="PositionCartText" style="color:#DA83A5!important; font-weight:bold; margin-left=-5px!important;">Cart</span> -->

            <span class="cart-count badge rounded-pill PositionCartSpan"
            style="background:#DA83A5;">0</span>
        </a>
        </span>
            <span class="product-button" style="margin-top:-2%!important; margin-left:10%!important;">
                <a class="btn-book-a-table text-white" href="{{url('/view-products')}}">
                    <button type="button" class="btn btn-warning mt-1 text-white ml-2"
                        style="background-color:#DA83A5; font-weight:bold; border:none;">
                                All Mexies
                    </button>

                </a>
            </span>
          </div>

      </div>
    </div>
  </header>
