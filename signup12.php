<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP TO THE GROCERY</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  	<script defer src="bootstrap.min.js"></script>
  	<style>
    accordion{
      width:32rem;
      align:center;
    }
    body{
      background:orange;
    }
 </style>
</head>
<body>
	<br>
	<br>
	<br><center>
	<h5>We welcome you to grocery</h5>
	<h6>SIGN UP HERE</h6></center>
	<div class="accordion" id="accordionExample1">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne">
     LETS START SIGNING UP HERE
      </button>
    </h2>
    <div id="collapseOne1" class="accordion-collapse collapse " data-bs-parent="#accordionExample1">
      <div class="accordion-body"><form action="signup11.php" method="post" id="form">
        <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username1" name="username">
                    <span  id="usernameer" style="color:red"></span>
</div>
        <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email1" name="email">
                    <span id="emailer" style="color:red"></span>
</div>
<div class="mb-3">
                    <label for="password" class="form-label" >Password</label>
                    <input type="password" class="form-control" id="password1" name="pass">
                    <span  id="passworder" style="color:red"></span>
</div>

         <center><button  type="submit" class="btn btn-info">SIGN UP</button> </form></center>
      </div>
    </div>
  </div>
</div>  
<script defer>
	let username=document.getElementById("username1");
	let useremail=document.getElementById("email1");
	let userpassword=document.getElementById("password1");
	const form=document.querySelector("form");
	form.addEventListener("submit",event=>{
	event.preventDefault();
	validate();
})
	function setError(input,msg){
		let parent=input.parentElement;
		let span=parent.querySelector('span');
		span.innerText=msg;
		span.style.color="red";

	}
	function setSuccess(input){
		let parent=input.parentElement;
		let span=parent.querySelector('span');
		span.style.visibility="hidden";
	}
	function validate(){
		const pattern=/^[a-zA-Z\s]+$/;
		const value=username.value.trim();
		let valid_name=true;
		
		if(!pattern.test(value)){
			setError(username,"name is incorrect,enter only alphabets");
			valid_name=false;
		}
		else{
			setSuccess(username);
			valid_name=true;
			}
		let pattern4=/^\w+@([a-zA-Z_]+).([a-z]{2,8})(.[a-z]{2,8})?$/;
		let valid_mail=true;
		
		if(!pattern4.test(useremail.value)){
			setError(useremail,"enter valid email address");
		valid_mail=false;
		}
		else{
			setSuccess(useremail);
			valid_mail=true;
			}
		const pattern5=/[0-9]{9}$/;
		let valid_password=true;
	
	if(!pattern5.test(userpassword.value))
	{
		setError(userpassword,"enter valid passcode 9 digits should be there");
		valid_password=false;
	}
	else
	{
		setSuccess(userpassword);
		valid_password=true;

		}
		if(valid_name && valid_mail &&valid_password){
		const s=Object.getPrototypeOf(form).submit;
		s.call(form);
		}
}
</script>
</body>
</html>
