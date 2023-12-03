<!DOCTYPE html>	
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<style type="text/css" media="screen">
			p{
               margin: 4px;
			}
			#customers {
			  font-family: Arial, Helvetica, sans-serif;
			  border-collapse: collapse;
			  width: 100%;
			}

			#customers td, #customers th {
			  border: 1px 0 0 0 solid #ddd;
			  padding: 8px;
			}

			#customers tr:nth-child(even){background-color: #f2f2f2;}

			#customers tr:hover {background-color: #ddd;}

			#customers th {
			  padding-top: 12px;
			  padding-bottom: 12px;
			  text-align: left;
			  background-color: #04AA6D;
			  color: white;
			}
		</style>
</head>
<body>
	<!-- Section data company how is creeate Invoice -->
	<div class="row">
		<div class="column" style="display: inline-block; padding: 2rem;">
			<h1>{{ invoice_name }} {{ number_invoice }}</h1> 
		</div>
		<div class="column" style="float: right;">
			<p>{{ your_name }}</p>
			<p>{{ your_email }}</p>
			<p>{{ your_phone }}</p>
			<p>{{ your_address }}</p>
			<p>Your City, State</p>
		</div>
	</div><hr>
	<!-- Section data company how is Bill -->
	<div class="bill-to">
		<div class="col-6" style="display: inline-block;">
			<h4>Billed To</h4>
			<p>{{ client_name }}</p>
			<p>{{ client_email }}</p>
			<p>{{ client_phone }}</p>
			<p>{{ client_address }}</p>
			<p>Your City, State</p>
		</div>
		<!-- Day send Invoice -->
		<div class="col-3" style="display: inline-block; float: right; margin: 1rem 1rem 0 0 ;">
				<b>Date send: {{ date_invoice }}</b>
		</div>
	</div>

	<div class="table_contents">
			<table id="customers" style="width: 100%;">
				<thead style="border-top: black 2px solid;border-bottom: black 2px solid;">
					<tr>
						<th>ID</th>
						<th>Description</th>
						<th>Rate</th>
						<th>QTY</th>
						<th>Amount</th>
					</tr>
				</thead>
				<tbody style="border-bottom: #333 1px soli; padding: 2px;">
					<tr>
						<td>1</td>
						<td>{{ name_product_1 }}</td>
						<td>{{ rate_1 }}</td>
						<td>{{ qty_1 }}</td>
						<td>{{ amount_1 }}</td>
					</tr>
					<tr>
						<td>2</td>
						<td>{{ name_product_2 }}</td>
						<td>{{ rate_2 }}</td>
						<td>{{ qty_2 }}</td>
						<td>{{ amount_2 }}</td>
					</tr>
					<tr>
						<td>3</td>
						<td>{{ name_product_3 }}</td>
						<td>{{ rate_3 }}</td>
						<td>{{ qty_3 }}</td>
						<td>{{ amount_3 }}</td>
					</tr>	
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>Subtotal</td>
						<td>{{ subtotal }}</td>
					</tr>
				</tbody>
			</table>
			
	</div>	




	
</body>
</html>