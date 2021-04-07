<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
	background-color:#333;
	font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
	color:#333;
	text-align:left;
	font-size:18px;
	margin:0;
}
.container{
	margin:0 auto;
	margin-top:35px;
	padding:40px;
	width:750px;
	height:auto;
	background-color:#fff;
}
caption{
	font-size:28px;
	margin-bottom:15px;
}
table{
	border:1px solid #333;
	border-collapse:collapse;
	margin:0 auto;
	width:740px;
}
td, tr, th{
	padding:12px;
	border:1px solid #333;
	width:185px;
}
th{
	background-color: #f0f0f0;
}
h4, p{
	margin:0px;
}
	</style>
</head>																																																					
<body>
    <div class="container">
	<table>
		<caption>
		<img src="https://makeandwear.in/wp-content/uploads/2019/02/MAKE-WEAR-logo-website-e1549713713364.png" height="80px">	<br/>Order Invoice
		</caption>
		<thead>
			<tr>										
				<th colspan="3" align="left">Invoice : #{{$order['bill_no']}}</th>
				<th>{{$order['created_at']}}</th>
			</tr>
			<tr>
				<td colspan="2">
					<h4>Pay to:</h4>
					<p>Make And Wear<br>
					   1st floor,Global pzaza,Avenue F-3 Global city,<br/>Virar West, palghar <br/>Mumbai-401303
					</p>
				</td>
				<td colspan="2">
					<h4>Customer:</h4>
					<p>{{$order->customer->customer_name }}<br>
					    Mob:- {{$order->customer->customer_phone}}<br>
					   {{$order->customer->customer_address}}<br/>
                        Delivery Date:-  {{$order->customer->delivery_date}}
						
					 </p>
				</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th colspan="2">Product</th>			
				<th>@</th>
				<th>Cost</th>
			</tr>
			
			<tr>
				<td colspan="2" align="center">{{ $order->order_details}}</td>
				<td align="center">1</td>
				<td align="center">Rs. {{ $order->order_amount }}</td>
			</tr>
			<tr>
				<th colspan="2" align="left">Tax</th>
				<td align="center">0%</td>
				<td align="center">0.00</td>
			</tr>
			<tr>
				<th colspan="3" align="left">Subtotal</th>
				<td align="center">Rs. {{ $order->order_amount }}</td>
			</tr>
			
			<tr>
				<th colspan="3" align="left">Total Paid</th>
				
				<td align="center">Rs. {{ $order->order_paid }}</td>
			</tr>

		</tbody>
		<tfoot>
			<tr>
				<th colspan="3" align="left">Total Due</th>
				<td align="center">Rs. {{ $order->order_amount - $order->order_paid }}</td>
			</tr>
		</tfoot>
	</table>
	<p><center>Thank you very much for doing business with us. We look forward to working with you again!</center></p>
</div>
</body>
</html>