<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CSS3动态背景登录框代码</title>

<link rel="stylesheet" type="text/css" href="/engine/Public/css/login/styles.css">
<style type="text/css">
body,td,th { font-family: "Source Sans Pro", sans-serif; }
body { background-color: #2B2B2B; }
</style>
</head>
<body>


<div class="wrapper">

	<div class="container">
		<h1>Welcome</h1>
		<form class="form">
			<input type="text" id='name' name='name' placeholder="Username">
			<input type="password" id='pw' name='pw' placeholder="Password">
			<button type="submit" id="login-button">Login</button>
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
	
</div>

<script type="text/javascript" src="/engine/Public/js/jq/jquery.min.js"></script>
<script type="text/javascript">
$('#login-button').click(function(event){
	event.preventDefault();
	$.ajax({
        type: "POST",
        url: "<?php echo U('Home/users/checkUser');?>",
        data: {
        	name:$('#name').val(),
            pw: $('#pw').val(),
        },
        dataType: "json",
        success: function (res) {
        	if(res.Status==200){
        	$('form').fadeOut(500);
			$('.wrapper').addClass('form-success');
			if(res.power==0){
				    setTimeout(window.location.href='<?php echo U("Index/index");?>',4000);
			}else if(res.power==1){
				    setTimeout(window.location.href='<?php echo U("Index/index");?>',4000);
			}
        	}else{
        		alert(res.Mes);
        	}
        }
    });
});
</script>

</body>
</html>