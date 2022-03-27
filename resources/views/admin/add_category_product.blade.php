@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Them danh muc san pham
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
                                <form role="form" action="{{URL::to('/save-category-product')}}" method="post">
                                    {{ csrf_field()}}
                              
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Ten danh muc</label>
                                    <input type="text" name="category_product_name" class="form-control"  id="exampleInputPassword1" placeholder="Ten danh muc">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mo ta danh muc</label>
                                    <textarea class="form-control" style="resize: none" rows="5" name="category_product_desc" id="exampleInputPassword1" placeholder="Mo ta danh muc"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Hien thi </label>
                                    <select name="category_product_status" class="form-control input-sm m-bot15">
                                        <option value="0">An</option>
                                         <option value="1">Hien</option>                                       
                                    </select>
                                </div>
                                    
                                <button type="submit" name="add_category_product" class="btn btn-info" >Them danh muc</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection