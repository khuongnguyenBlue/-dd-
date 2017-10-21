@extends('master')
@section('content')

    <div class="container"style="border: whitesmoke solid 2px;width: 90%">
        <div id="content" class="space-top-none">
            <div class="main-content">
                <div class="space60">&nbsp;</div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="beta-products-list">
                            <h4>Sản phẩm tìm kiếm</h4>
                            <div class="beta-products-details">
                                <p class="pull-left">Tìm thấy {{count($product)}} kết quả</p>
                                <div class="clearfix"></div>
                            </div>

                            <div class="row">
                                @foreach($product as $new)
                                    <div class="col-sm-3" style="padding-left: 50px;">
                                        <div class="single-item" style="margin-bottom: 40px;">
                                            <div class="single-item-header" style="height: 230px;">
                                                <a href="{{route('chitietsanpham',$new->id)}}"><img src="source/frontend/image/product/{{$new->anh_sp}}" style="text-align:center;height:230px;width: 210px;" alt=""></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">{{$new->ten_sp}}</p>
                                                <a class="single-item-price">
                                                    <?php $price_new = $new->gia_sp - $new->khuyen_mai ?>
                                                    <?php if ($new->khuyen_mai > 0): ?>
                                                    <a style="text-decoration:line-through;padding-top: 5px;font-size:15px;">
                                                        <?php echo number_format($new->gia_sp); ?>Đ
                                                    </a>
                                                    <a class="ga" style="color:red;padding-top: 10px;font-size: 20px;">
                                                        <b><?php echo number_format($price_new) ?>Đ</b>
                                                    </a>
                                                    <?php else: ?>
                                                    <a style="color:red;font-size: 20px;"><b><?php echo number_format($new->gia_sp); ?>
                                                            Đ</b></a>
                                                    <?php endif; ?>
                                                </a>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="{{route('addcart',$new->id)}}"><i
                                                            class="fa fa-shopping-cart"></i></a>
                                                <div class="choose">
                                                    <ul class="nav nav-pills nav-justified">
                                                        <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                                        <li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        <!-- .beta-products-list -->
                        </div> <!-- .beta-products-list -->
                        <hr>

                    </div> <!-- .beta-products-list -->

                </div>
            </div> <!-- end section with sidebar and main content -->

        </div> <!-- .main-content -->
    </div> <!-- #content -->
    </div> <!-- .container -->
@endsection