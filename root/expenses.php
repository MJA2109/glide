<?php 
	session_start();
	if(!isset($_SESSION["authorized"])){
		header("location:index.php");
	}else{
		require("../templates/head.php");
		require("../templates/navigation.php");
?>

		<div id = "subHeader">
			<div id = "subHeaderSec1">
				<p>Search:</p>
			</div>
			<div id = "subHeaderSec2">
				<div>
					<div>
						<button class = "btn btn-default">New Expense</button>
					</div>
					<div>
						<button class = "btn btn-default">Delete Expense</button>
					</div>
				</div>
			</div>
		</div>

		<div id = "search">
			<form action = "POST" id = "searchExpensesForm">
				<div class = "searchInput">
					<label for = "userRadio">User</label>
					<input type = "radio" name = "searchFor" value = "user" id = "userRadio" checked="checked">
					<label for = "merchantRadio">Merchant</label>
					<input type = "radio" name = "searchFor" value = "merchant" id = "merchantRadio">
				</div>
				<div class = "searchInput">
					<input type = "text" name = "searchDate" placeholder = "Date" class = "form-control"/>
				</div>
				<div class = "searchInput">
					<select class = "form-control">
						<option value = "All Expenses">All Expenses</option>
						<option value = "Processed">Processed</option>
						<option value = "Unprocessed">Unprocessed</option>
					</select>
				</div>
				<div class = "searchInput">
					<select class = "form-control">
						<option value = "allCategories">All Categories</option>
						<option value = "accommodation">Accommodation</option>
						<option value = "Food">Food</option>
						<option value = "Entertainment">Entertainment</option>
						<option value = "Phone">Phone</option>
						<option value = "Travel">Travel</option>
					</select>
				</div>
				<div class = "searchInput">
					<button class = "btn btn-default">Search</button>
				</div>
			</form>
			<div id = "views">
			</div>
		</div>

		<div id = "mainView">
			<table id = "expensesTable">
				<thead>
					<tr>
						<th>User Name</th>
						<th>Category</th>
						<th>Merchant</th>
						<th>Cost</th>
						<th>Receipt</th>
						<th>Date</th>
						<th>Status</th>
						<th>Comment</th>
					</tr>
				</thead>
				<tbody id = "expensesData">
					<!-- call data here -->
				</tbody>
			</table>
		</div>


<?php
		require("../templates/footer.php");
	}
?>