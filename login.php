<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>Bootstrap 实例 - 水平表单</title>
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div>
<div class="panel panel-default" style="width:500px;margin:20px auto;">
  <div class="panel-heading"><center>登录</center></div>
  <div class="panel-body ">
  <form class="form-horizontal ">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">邮箱</label>
    <div class="col-sm-8">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 col-xs-12 control-label">验证码</label>
    <div class="col-sm-4  col-xs-4 " >
      <input type="text" name="captcha" id="captcha" class=" form-control"/>
    </div>
        <img class="img-rounded" src="captcha.php"  alt=""/>   
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>
  </div>
</div>




</div>



</body>
</html>
