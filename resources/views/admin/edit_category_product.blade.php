@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cap nhat danh muc san pham
                        </header>
                        

                            <?php
    $message = Session :: get ('message');
    if($message)
    {
        echo '<span class="text-alert">',$message,'</span>';
        Session ::put('message',null); 
    }
    ?>
                                <div class="panel-body">

                                    @foreach($edit_category_product as $key => $edit_value)
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/update-category-product/'.$edit_value->category_id)}}" method="post">
                                    {{ csrf_field()}}
                              
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Ten danh muc</label>
                                    <input type="text" value="{{$edit_value->category_name}}" name="category_product_name" class="form-control"  id="exampleInputPassword1" placeholder="Ten danh muc">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mo ta danh muc</label>
                                    <textarea class="form-control" style="resize: none" rows="5" name="category_product_desc" id="exampleInputPassword1" >{{$edit_value->category_desc}}
                                    </textarea>
                                </div>
                         
                                <button type="submit" name="update_category_product" class="btn btn-info" >Cap nhat danh muc</button>
                            </form>
                            </div>
                            @endforeach
                        </div>
                    </section>

            </div>
@endsection



