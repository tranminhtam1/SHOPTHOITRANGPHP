@extends('layout')
@section('content')


	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
			  <li><a href="{{URL::to('/')}}">Trang chủ</a></li>
				  <li class="active">Thanh toán giỏ hàng</li>
				</ol>
			</div><!--/breadcrums-->

			<div class="register-req">
				<p>Làm ơn đăng ký hoặc đăng nhập để thanh toán giỏ hàng và xem lại lịch sử mua hàng</p>
			</div><!--/register-req-->
			
			<div class="review-payment">
				<h2>Xem lại giỏ hàng </h2>
			</div>
			<div class="table-responsive cart_info">
				<?php
				$content = Cart ::content();

				?>
				
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Sản phẩm </td>
							<td class="description">Mô tả </td>
							<td class="price">Giá </td>
							<td class="quantity">Số lượng </td>
							<td class="total">Tổng tiền </td>
							<td></td>
						</tr>
					</thead>
					<tbody> 
						@foreach($content as $v_content)
						<tr>
							<td class="cart_product">
								<a href=""><img src="{{URL::to('public/upload/product/'.$v_content->options->image)}}" width="50" alt=""/></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{$v_content->name}}</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>{{number_format($v_content->price).' '.'vnd'}}</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<form action="{{URL::to('/update-cart-quantity')}}" method="POST">
										@csrf
										<input class="cart_quantity_input" type="text" name="cart_quantity" value="{{$v_content->qty}}"  >
									<input type="hidden" name="rowId_cart" value="{{$v_content->rowId}}" class="form-control">
									<input type="submit" name="updateqty" value="Cập nhật" class="btn btn-default btn-small">
									</form>
									
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">
									<?php
									  	$subtotal = $v_content->price *$v_content->qty;
									  	echo number_format($subtotal).' '.'vnd';

									?>
								</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						@endforeach
						
					</tbody>
				</table>

			</div>

			<h4 style="margin:40px 0; font-size: 20px;">Chọn hình thức thanh toán</h4>
        <form action="{{URL('/order-place')}}" method="post">
            {{csrf_field()}}
			<div class="payment-options">
					<span>
						<label><input name="payment_option" value="1" type="checkbox"> Thanh Toán Thẻ ATM</label>
					</span>
					<span>
						<label><input name="payment_option" value="2" type="checkbox"> Thanh Toán Khi Nhận Hàng</label>
					</span>
					<span>
						<label><input name="payment_option" value="3" type="checkbox"> Thanh Toán bằng thẻ visa</label>

					</span>
					<input type="submit" name="send_order_place" value="Đặt hàng" class="btn btn-primary btn-sm">
				</div>
                </form>
		</div>
	</section> <!--/#cart_items-->
		</div>
	</section> <!--/#cart_items-->

	
@endsection