@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cap nhat  san pham
                        </header>
                        <div class="panel-body">
                            <?php
    $message = Session :: get ('message');
    if($message)
    {
        echo '<span class="text-alert">',$message,'</span>';
        Session ::put('message',null); 
    }
    ?>
                            <div class="position-center">
                                @foreach($edit_product as $key =>$pro)
                                <form role="form" action="{{URL::to('/update-product/'.$pro -> product_id)}}" enctype="multipart/form-data"  method="post">
                                    {{ csrf_field()}}
                              
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Ten san pham</label>
                                    <input type="text" name="product_name" class="form-control"  id="exampleInputPassword1" value="{{$pro->product_name}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Gia</label>
                                    <input type="text" name="product_price" class="form-control"  id="exampleInputPassword1" value="{{$pro ->product_price}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hinh anh san pham</label>
                                    <input type="file" name="product_image" class="form-control"  id="exampleInputPassword1" p>
                                    <img src="{{URL::to('/public/upload/product/',$pro->product_image)}}" height="100" width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mo ta san pham</label>
                                    <textarea class="form-control" style="resize: none" rows="5" name="product_desc" id="exampleInputPassword1"  >{{$pro ->product_desc}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Noi dung san pham</label>
                                    <textarea class="form-control" style="resize: none" rows="5" name="product_content" id="exampleInputPassword1" >{{$pro ->product_content}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Danh muc san pham  </label>
                                    <select name="product_cate" class="form-control input-sm m-bot15">
                                        @foreach($cate_product as $key => $cate)
                                        @if($cate->category_id == $pro ->category_id)
                                        <option selected value="{{($cate->category_id)}}">{{($cate->category_name)}}</option>
                                        @else
                                        <option value="{{($cate->category_id)}}">{{($cate->category_name)}}</option>
                                        @endif
                                         @endforeach                                       
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Thuong hieu san pham </label>
                                    <select name="product_brand" class="form-control input-sm m-bot15">
                                       @foreach($brand_product as $key => $brand)
                                        
                                        @if($brand->brand_id == $pro ->brand_id)
                                        <option selected value="{{($brand->brand_id)}}">{{($brand->brand_name)}}</option>
                                        @else
                                        <option value="{{($brand->brand_id)}}">{{($brand->brand_name)}}</option>
                                        @endif
                                         @endforeach                                        
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Hien thi </label>
                                    <select name="product_status" class="form-control input-sm m-bot15">
                                        <option value="0">An</option>
                                         <option value="1">Hien</option>                                       
                                    </select>
                                </div>
                                    
                                <button type="submit" name="add_product" class="btn btn-info" >Cap nhat san pham</button>
                            </form>
                            @endforeach
                            </div>

                        </div>
                    </section>

            </div>
@endsection