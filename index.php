<html>
<head>
<title>ShortSms</title>
</head>
<body>

<style>
.title{
	text-align:center;
	margin-top:80px;
	margin-bottom:40px;
}
.title span{

		font-size:14px;
}
form{

	display:flex;
	align-items:center;
	justify-content:center;
	margin-top:40px;
}

.container{

		display:flex;
		flex-direction:column;
		padding:20px;
		
}
label{
		margin-bottom:10px;
		margin-top:10px;
		font-size:15px;

}
input{

		height:39px;
		width:350px;
		margin-bottom:10px;
		border:2px solid #ced9f2;
		padding:4px;
		color:black;
		outline:none;
		

}
input:focus{
			color:unset;

}

button{

		background-color:#3361cc;
		color:white;
		font-size:16px;
		font-weight:bolder;
		padding:12px;
		border-radius:10px;
		cursor:pointer;

}
textarea{
outline:none;
border:2px solid #ced9f2;
margin-bottom:20px;

}
</style>
<div class="title">
<h4>Welcome To Shortsms, Simple end to end encrypted messages.</h4>
<span>Developed by MuradCade</span>
</div>
<form action="api.php" method="post">
<div class="container">
<label>Phone</label>
<input type="text" name='number' placeholder="start with +252 "/>

<label>Message</label>
<textarea  name='msg' rows="4" cols="50"></textarea>

<button  name="submit">Submit</button>
</div>


</form>




</body>
</html>
