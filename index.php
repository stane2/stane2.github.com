<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8"> 
   <title>在线尝试 Bootstrap 实例</title>
   <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
   <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
   <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="row clearfix"  style="margin-bottom: 70px;">
		<div class="col-md-12 column">
			
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="#">博客</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							 <a href="#">首页</a>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">菜单<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									 <a href="#">Action</a>
								</li>
								<li>
									 <a href="#">Another action</a>
								</li>
								<li>
									 <a href="#">Something else here</a>
								</li>
								<li class="divider">
								</li>
								<li>
									 <a href="#">Separated link</a>
								</li>
								<li class="divider">
								</li>
								<li>
									 <a href="#">One more separated link</a>
								</li>
							</ul>
						</li>
					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control" />
						</div> <button type="submit" class="btn btn-default">搜索</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li>
							 <a href="login.php">登录</a>
						</li>
						<li>
							 <a href="#">注册</a>
						</li>
                        <li>
							 <a href="#"></a>
						</li>
					</ul>
				</div>
				
			</nav>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-8 column">
			<div class="jumbotron">
				<h2>
				《长津湖》
				</h2>
				<p>
				《长津湖》在预售期间就已经成为了观众期待不已的潜力爆款，这部电影上线之后也确实拿出了令大部分影迷满意的水平，不仅票房井喷，口碑成绩更是国庆档中表现最出色的一部。
				</p>
				<p>
					 <a class="btn btn-primary btn-large" href="#">Learn more</a>
				</p>
			</div>
			<h3>
			纪念辛亥革命110周年大会9日上午在京举行 习近平将出席大会并发表讲话
			</h3>
			<p>
			新华社北京10月7日电 纪念辛亥革命110周年大会将于10月9日上午10时在北京人民大会堂隆重举行。中共中央总书记、国家主席、中央军委主席习近平将出席大会并发表重要讲话。
			届时，中央广播电视总台、新华网将对大会进行现场直播，人民网、央视网、中国网等中央重点新闻网站和人民日报客户端、新华社客户端、央视新闻客户端等新媒体平台同步转播。
			</p>
			<p>
				 <a class="btn" href="#">View details »</a>
			</p>
			<h3>
			美国向韩国企业索要半导体信息？韩外交部：已向美方表示担忧
			</h3>
			<p>
				<?php echo mb_substr('韩联社10月7日消息，韩国外交部发言人崔泳杉7日在例行记者会上表示，已从政府层面向美方就其要求韩企提供半导体相关信息一事表示担忧。

			被问及韩政府是否向美方就相关事件表示担忧时，崔泳杉表示，韩外交部在与有关政府部门和企业进行协调沟通后采取上述措施，今后将对相关问题持续做出应对。

			据外媒报道，美国白宫当地时间9月24日与三星电子等全球半导体企业举行视频会议，要求与会企业在45天之内向美方提交包括库存、订单等半导体供应链相关信息的问卷。韩国半导体企业向政府表示美方此举有侵犯企业商业机密之虞，由此韩政府召开有关部门长官会议，讨论应对方案。韩政府还将在定于本月中旬举行的第一届对外经济安保战略会议上讨论该问题。',0,50,'utf8')."..." ?>
			</p>
			<p>
				 <a class="btn" href="#">View details »</a>
			</p>
			<ul class="pagination">
				<li>
					 <a href="#">Prev</a>
				</li>
				<li>
					 <a href="#">1</a>
				</li>
				<li>
					 <a href="#">2</a>
				</li>
				<li>
					 <a href="#">3</a>
				</li>
				<li>
					 <a href="#">4</a>
				</li>
				<li>
					 <a href="#">5</a>
				</li>
				<li>
					 <a href="#">Next</a>
				</li>
			</ul>
		</div>
		<div class="col-md-4 column">
			<?php
				include "calendar/calendar.php";	

				include "vote/vote.php";	

				// include "file/scanList.php";	
			?>
		</div>
	</div>



</div>
</body>
</html>