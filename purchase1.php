<!DOCTYPE html>
<html>
<head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="bootstrap.min.css">
<style>
	.input-group
	{
		border:2px solid red;
		width:35rem;
		text-align: center;
	}
	button
	{
		border:2px solid red;	
	}
	body
	{
		background: lightgreen;
	}
</style>
</head>
<body>
<center>
<h3 align="center">You can place your order</h3>
<form method="post" action="test.php">
<br><br>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">USERNAME</span>
  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="name" id="username"><small></small>
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon3">Enter your MailID</span>
  <input type="text" class="form-control" id="basic" aria-describedby="basic-addon3" name="mail" placeholder="useremail"><small></small>
</div>
<br>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon3">PINCODE</span>
  <input type="text" class="form-control" id="userpincode" aria-describedby="basic-addon3" name="pincode" placeholder="userpincode">
  <small></small>
</div>
<div class="input-group">
  <span class="input-group-text">Enter your Address</span>
  <textarea class="form-control" aria-label="With textarea" name="address" placeholder="user address" id="address"></textarea>
  <small></small>
</div>
<br>
<button class="btn btn-outline-secondary" type="submit">submit</button>
</form>
</center>





<script type="text/javascript" defer>
	let username=document.getElementById("username");
	let useremail=document.getElementById("basic");
	let address=document.getElementById("address");
	let pincode=document.getElementById("userpincode");
	const form=document.querySelector("form");
	form.addEventListener("submit",event=>{
	event.preventDefault();
	validate();
})
	function setError(input,msg){
		let parent=input.parentElement;
		let span=parent.querySelector('small');
		span.innerText=msg;
		span.style.color="red";

	}
	function setSuccess(input){
		let parent=input.parentElement;
		let span=parent.querySelector('small');
		span.style.visibility="hidden";
	}
	function validate(){
		const pattern=/^[a-zA-Z\s]+$/;
		const value=username.value.trim();
		let valid_name=true;
		
		if(!pattern.test(value)){
			setError(username,"name cannot be empty");
			valid_name=false;
		}
		else{
			setSuccess(username);
			valid_name=true;
			}
	let pattern4=/^[a-zA-Z0-9_\-\.]+[@][a-z]+[\.][a-z]{2,3}/;
		let valid_mail=true;
		if(!pattern4.test(useremail.value)){
			setError(useremail,"enter valid email address");
			valid_mail=false;
		}
		else{
				setSuccess(useremail);
				valid_mail=true;
			}
			pattern8=/[a-zA-Z]/;
		let q=true;
		if(!pattern8.test(address.value))
		{
			setError(address,"enter your address only alphabets text");
			q=false;
		}
		else{
			setSuccess(address);
			q=true;
			}

		pattern9=/[0-9]{5}/;
		let p=true;
		if(!pattern9.test(pincode.value)){
			setError(pincode,"enter valid pincode number");
			p=false;
		}
		else{
			setSuccess(pincode);
			p=true;
			}

		if(valid_name && valid_mail&& q && p){
		const s=Object.getPrototypeOf(form).submit;
		s.call(form);
		}
}
</script>
</body>
</html>
