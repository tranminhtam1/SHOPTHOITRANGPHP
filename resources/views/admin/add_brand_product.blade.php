@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Them thuong hieu san pham
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
                                <form role="form" action="{{URL::to('/save-brand-product')}}" method="post">
                                    {{ csrf_field()}}
                              
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Ten thuong hieu</label>
                                    <input type="text" name="brand_product_name" class="form-control"  id="exampleInputPassword1" placeholder="Ten danh muc">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mo ta thuong hieu</label>
                                    <textarea class="form-control" style="resize: none" rows="5" name="brand_product_desc" id="exampleInputPassword1" placeholder="Mo ta danh muc"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Hien thi thuong hieu </label>
                                    <select name="brand_product_status" class="form-control input-sm m-bot15">
                                        <option value="0">An</option>
                                         <option value="1">Hien</option>                                       
                                    </select>
                                </div>
                                    
                                <button type="submit" name="add_brand_product" class="btn btn-info" >Them thuong hieu</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection