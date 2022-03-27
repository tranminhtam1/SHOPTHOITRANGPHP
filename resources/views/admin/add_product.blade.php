@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Them  san pham
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
                                <form role="form" action="{{URL::to('/save-product')}}" enctype="multipart/form-data"  method="post">
                                    {{ csrf_field()}}
                              
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Ten san pham</label>
                                    <input type="text" name="product_name" class="form-control"  id="exampleInputPassword1" placeholder="Ten danh muc">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Gia</label>
                                    <input type="text" name="product_price" class="form-control"  id="exampleInputPassword1" placeholder="Gia san pham">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hinh anh san pham</label>
                                    <input type="file" name="product_image" class="form-control"  id="exampleInputPassword1" p>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mo ta san pham</label>
                                    <textarea class="form-control" style="resize: none" rows="5" name="product_desc" id="exampleInputPassword1" placeholder="Mo ta san pham"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Noi dung san pham</label>
                                    <textarea class="form-control" style="resize: none" rows="5" name="product_content" id="exampleInputPassword1" placeholder="Mo ta noi dung san pham"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Danh muc san pham  </label>
                                    <select name="product_cate" class="form-control input-sm m-bot15">
                                        @foreach($cate_product as $key => $cate)
                                        <option value="{{($cate->category_id)}}">{{($cate->category_name)}}</option>
                                         @endforeach                                       
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Thuong hieu san pham </label>
                                    <select name="product_brand" class="form-control input-sm m-bot15">
                                       @foreach($brand_product as $key => $brand)
                                        <option value="{{($brand->brand_id)}}">{{($brand->brand_name)}}</option>
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
                                    
                                <button type="submit" name="add_product" class="btn btn-info" >Them san pham</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection