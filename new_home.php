<!DOCTYPE html>
<html>
<head>
	
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  <script defer src="bootstrap.min.js"></script>
<script defer src="bootstrap.js"></script>
  <style>
   
    body{
      background:orange;
    }

 </style>
</head>
 <body>
 	<br><br>
   <h3 class="text-bg" align="center" >WELCOME TO GROCERY </h3>
  <center>
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
     ALREADY EXISTING USER LOGIN NOW
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <div class="mb-3">
        <form action="project.php" method="post">
         <label for="mailid1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="mailid" placeholder="name@example.com" name="mail">
          <span id="errormail"></span>  
        </div>
        <div>
       <label for="inputPassword5" class="form-label">Password</label>
        <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" name="password">
        <span id="errorpassword"></span>
        <br>
    </div>
        <button  type="submit">LOGIN NOW</button></form>
      </div>
    </div>
  </div>
</div> 
<div class="accordion" id="accordionExample1">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne">
     Are you new SIGN UP
      </button>
    </h2>
    <div id="collapseOne1" class="accordion-collapse collapse" data-bs-parent="#accordionExample1">
      <div class="accordion-body">
      
        <form method="post" action="signup12.php">
        <button  type="submit">SIGN UP</button></form>
      </div>
    </div>
  </div>
</div> 
	<script defer>
	 let useremail=document.getElementById("mailid");
	let userpassword=document.getElementById("inputPassword5");
	const form=document.querySelector("form");
	form.addEventListener("submit",event=>{
	event.preventDefault();
	validate();
	})
	function setError(input,msg){
		let parent=input.parentElement;
		console.log(parent);
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
	    let pattern4= /^[a-zA-Z0-9_\-\.]+[@][a-z]+[\.][a-z]{2,3}/;
	 	let valid_mail=true;
	 	if(!pattern4.test(useremail.value))
	 	{
	 		setError(useremail,"please enter valid email address");
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
		setError(userpassword,"please enter valid password");
		valid_password=false;
	}
	else
	{
		setSuccess(userpassword);
		valid_password=true;

		}

		if(valid_mail && valid_password){
		const s=Object.getPrototypeOf(form).submit;
		s.call(form);
		}
}
</script>
 </body>
</html>
