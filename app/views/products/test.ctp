<h1>SetExpressCheckout</h1>
<form method="post" action="https://api-3t.sandbox.paypal.com/nvp"> 
	<input type=hidden name=USER value=API_username> 
	<input type=hidden name=PWD value=API_password> 
	<input type=hidden name=SIGNATURE value=API_signature> 
	<input type=hidden name=VERSION value=XX.0> 
	<input type=hidden name=PAYMENTREQUEST_0_PAYMENTACTION 
		value=Sale> 
	<input name=PAYMENTREQUEST_0_AMT value=19.95> 
	<input type=hidden name=RETURNURL 
		value=https://www.YourReturnURL.com> 
	<input type=hidden name=CANCELURL 
		value=https://www.YourCancelURL.com> 
	<input type=submit name=METHOD value=SetExpressCheckout> 
</form>
<h1>GetExpressCheckout</h1>
<form method="post" action="https://api-3t.sandbox.paypal.com/nvp" 
	<input type=hidden name=USER value=API_username> 
	<input type=hidden name=PWD value=API_password> 
	<input type=hidden name=SIGNATURE value=API_signature> 
	<input type=hidden name=VERSION value=XX.0> 
	<input name=TOKEN value=EC-1NK66318YB717835M> 
	<input type=submit name=METHOD value=GetExpressCheckoutDetails> 
</form>
<h1>DoExpressCheckout</h1>
<form method="post" action="https://api-3t.sandbox.paypal.com/nvp"> 
	<input type=hidden name=USER value=API_username> 
	<input type=hidden name=PWD value=API_password> 
	<input type=hidden name=SIGNATURE value=API_signature> 
	<input type=hidden name=VERSION value=XX.0> 
	<input type=hidden name=PAYMENTREQUEST_0_PAYMENTACTION 
		value=Authorization> 
	<input type=hidden name=PAYERID value=7AKUSARZ7SAT8> 
	<input type=hidden name=TOKEN value= EC%2d1NK66318YB717835M> 
	<input type=hidden name=PAYMENTREQUEST_0_AMT value= 19.95> 
	<input type=submit name=METHOD value=DoExpressCheckoutPayment> 
</form>