<!doctype html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keyword" content="">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Simple PHP form submission script with frontend validation</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/css/selectize.bootstrap4.min.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.css" type="text/css" />
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center mt-5 mb-5">
				<h2 class="text-danger">Simple PHP form submission script with frontend validation</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<h2 class="text-success">Show All Information</h2>
			</div>
			<div class="col-lg-6">
				<button class="btn btn-success float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Report</button>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-lg-12">
				<div class="table-responsive">
					<table id="example" class="table dt-responsive nowrap table-hover" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
						<thead>
							<tr>
								<th>Id</th>
								<th>Amount</th>
								<th>Buyer</th>
								<!-- <th>Receipt_id</th> -->
								<th>Items</th>
								<th>Buyer_email</th>
								<th>Buyer_ip</th>
								<th>Note</th>
								<th>City</th>
								<th>Phone</th>
								<th>Entry_at</th>
								<th>Entry_by</th>
							</tr>
						</thead>
						<tbody id="allReports">
							<!-- render all data content -->
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<div class="modal" tabindex="-1" id="exampleModal">
		<div class="modal-dialog modal-dialog-scrollable modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="btn-block">Registration Form</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form action="" method="POST" id="formData">
						<div class="mb-3 row">
							<label for="amount" class="form-label col-lg-4">Amount:</label>
							<div class="col-lg-8">
								<input type="number" class="form-control" name="amount" />
								<div id="amountRequired" class=""></div>
							</div>
						</div>
						<div class="mb-3 row">
							<label for="buyer" class="form-label col-lg-4">Buyer:</label>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="buyer" pattern="[A-Za-z]{1,5}" />
								<div id="buyerRequired" class=""></div>
							</div>
						</div>
						<div class="mb-3 row">
							<label for="receipt_id" class="form-label col-lg-4">Receipt_id:</label>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="receipt_id" />
								<div id="receiptRequired" class=""></div>
							</div>
						</div>
						<div class="mb-3 row">
							<label for="items" class="form-label col-lg-4">Items:</label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="input-tags" name="items" />
								<div id="itemsRequired" class=""></div>
							</div>
						</div>
						<div class="mb-3 row">
							<label for="buyer_email" class="form-label col-lg-4">Buyer_email:</label>
							<div class="col-lg-8">
								<input type="email" class="form-control" name="buyer_email"/>
								<div id="emailRequired" class=""></div>
							</div>
						</div>
						<div class="mb-3 row">
							<label for="note" class="form-label col-lg-4">Note:</label>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="note" />
								<div id="noteRequired" class=""></div>
							</div>
						</div>
						<div class="mb-3 row">
							<label for="city" class="form-label col-lg-4">City:</label>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="city" />
								<div id="cityRequired" class=""></div>
							</div>
						</div>
						<div class="mb-3 row">
							<label for="phone" class="form-label col-lg-4">Phone:</label>
							<div class="col-lg-8">
								<div class="input-group mb-3">
									<span class="input-group-text" id="countryCode">@</span>
									<input type="text" class="form-control" name="phone" />
									<div id="phoneRequired" class=""></div>
								</div>
							</div>
						</div>
						<div class="mb-3 row">
							<label for="entry_by" class="form-label col-lg-4">Entry_by:</label>
							<div class="col-lg-8">
								<input type="number" class="form-control" name="entry_by" />
								<div id="entryRequired" class=""></div>
							</div>
						</div>
						<div class="mb-3">
							<input type="submit" class="btn btn-success col-12" id="insert" name="insert" value="Add Report">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/js/standalone/selectize.min.js" integrity="sha512-pF+DNRwavWMukUv/LyzDyDMn8U2uvqYQdJN0Zvilr6DDo/56xPDZdDoyPDYZRSL4aOKO/FGKXTpzDyQJ8je8Qw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="./js/app.js"></script>
</body>

</html>