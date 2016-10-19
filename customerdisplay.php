<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Customer Invoice</title>
	
	<link rel='stylesheet' type='text/css' href='css/style.css' />
	<link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example.js'></script>

</head>

<body>

	<div id="page-wrap">

		<p id="header">INVOICE</p>
		
		<div id="identity">
		
            <p id="address">Chris Coyier<br>
			123 Appleseed Street<br>
			Appleville, WI 53719<br>
			Phone: (555) 555-5555<br>
			</p>

            
		
		
		
		<div id="customer">


            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td>000123</td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><textarea id="date">December 15, 2009</textarea></td>
                </tr>
                <tr>
                    <td class="meta-head">Amount Due</td>
                    <td><div class="due">$875.00</div></td>
                </tr>

            </table>
		
		</div>
		
		<table id="items">
		
		  <tr>
		      <th>Bill Number</th>
		      <th>Month</th>

		      <th>Number of units</th>
		      <th>Units cost</th>
		      <th>amount</th>
		      <th>status</th>
		  </tr>
		  
		  <tr class="item-row">
		      <td class="item-name">001</td>
		      <td class="description">October</td>
		      <td>650</td>
		      <td>7.67</td>
		      <td><span class="price">1,560.00</span></td>
		      <td><span class="price">Not_Paid</span></td>
		  </tr>
		  
		  <tr class="item-row" >
		      <td class="item-name">002</div></td>

		      <td class="description">September</td>
		      <td>545</td>
		      <td>7.89</td>
		      <td><span class="price">1,560.00</span></td>
		      <td><span class="price">Paid</span></td>
		  </tr>
		  
		 
		  
		  <tr>
		      <td colspan="3" class="blank"> </td>
		      <td colspan="2" class="total-line">Subtotal</td>
		      <td class="total-value"><div id="subtotal">$875.00</div></td>
		  </tr>
		  <tr>

		      <td colspan="3" class="blank"> </td>
		      <td colspan="2" class="total-line">Total</td>
		      <td class="total-value"><div id="total">$875.00</div></td>
		  </tr>
		  <tr>
		      <td colspan="3" class="blank"> </td>
		      <td colspan="2" class="total-line">Amount Paid</td>

		      <td class="total-value">$0.00</td>
		  </tr>
		  <tr>
		      <td colspan="3" class="blank"> </td>
		      <td colspan="2" class="total-line balance">Balance Due</td>
		      <td class="total-value balance"><div class="due">$875.00</div></td>
		  </tr>
		
		</table>
		
		<div id="terms">
		  <h5>Terms</h5>
		  <textarea>NET 30 Days. Finance Charge of 1.5% will be made on unpaid balances after 30 days.</textarea>
		</div>
	
	</div>
	
</body>

</html>