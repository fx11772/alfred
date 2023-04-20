<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Budget App Dashboard</title>
	<link rel="stylesheet" href="../../../css/budgetApp/dashboard.css">
</head>
<body>
	<header class="header">
		<div class="container">
			<div class="header__logo">
				<h1>Jarvis Financial LLC.</h1>
			</div>
			<nav class="header__nav">
				<ul>
					<li><a href="#">Dashboard</a></li>
					<li><a href="#">Transactions</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Profile</a></li>
					<li><a href="#">Logout</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<main class="main">
		<div class="gridLayout">
			<h2>Welcome back, User!</h2>

			<div class="mainCard">
				<div class="card">
                    <div class="cardContainer">
					    <h3 class="cardHeader">Total Expenses</h3>
					    <p class="card__value">$1500</p>
                    </div>
				</div>
				<div class="card">
                    <div class="cardContainer">
					    <h3 class="cardHeader">Total Income</h3>
					    <p class="card__value">$3000</p>
                    </div>
				</div>
				<div class="card">
                    <div class="cardContainer">
					    <h3 class="cardHeader">Balance</h3>
					    <p class="card__value">$1500</p>
                    </div>
				</div>
			</div>

			<div class="main__transactions">
				<h2>Recent Transactions</h2>
				<table>
					<thead>
						<tr>
							<th>Date</th>
							<th>Description</th>
							<th>Category</th>
							<th>Amount</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>2023-03-30</td>
							<td>Amazon Purchase</td>
							<td>Shopping</td>
							<td class="negative">-$50.00</td>
						</tr>
						<tr>
							<td>2023-03-29</td>
							<td>Paycheck</td>
							<td>Salary</td>
							<td class="positive">$3000.00</td>
						</tr>
						<tr>
							<td>2023-03-28</td>
							<td>Gas Bill</td>
							<td>Utilities</td>
							<td class="negative">-$30.00</td>
						</tr>
						<tr>
							<td>2023-03-27</td>
							<td>Grocery Shopping</td>
							<td>Groceries</td>
							<td class="negative">-$80.00</td>
						</tr>
						<tr>
							<td>2023-03-26</td>
							<td>Car Payment</td>
							<td>Transportation</td>
							<td class="negative">-$500.00</td>
						</tr>
					</tbody>
				</table>
				<a href="#" class="button">View All Transactions</a>
			</div>
		</div>
	</main>
	
	<footer class="footer">
		<div class="container">