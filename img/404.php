<!DOCTYPE html>
<html lang="zh_CN">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Page Not Found</title>
  <style>
    * {
      margin: 0;
      padding: 0;
    }
	
    body {
	  background-repeat:no-repeat;
      background-image: url(https://gitee.com/Runine/picBed/raw/master/img/Win/404.svg);
      background-size: cover;
	  font-family: Dosis,Open Sans,pingfang SC,-apple-system,Helvetica Neue,Helvetica,Arial,PingFang SC,PingFang TC,Hiragino Sans GB,Microsoft Yahei,Microsoft Jhenghei,sans-serif;
    }
	
	.inner-wrapper {
      position: absolute;
      width: 100%;
      text-align: center;
      padding: 50px 0;
      top: 50%;
      transform: translateY(-50%);
	}

	.inner-wrapper p {
      font-size: 35px;
      line-height: 42px;
      margin: -30px 0 50px;
	}

	.number {
      margin-bottom: 3rem!important;
	  font-size: 50px!important;
	        color: #3c4248;

	}

	.text {
      color: #757575;
      opacity: .7;
	}

    .btn-container {
      display: flex;
      justify-content: center;
    }
	
    .btn {
      padding: 10px 36px;
      display: inline-block;
      text-decoration: none;
      background: #fafcfe;
      border: 1px solid #3191ff;
      color: #555;
      margin: 25px;
      border-radius: 20px;
      cursor: pointer;
      display: flex;
      align-items: center;
    }

  </style>
</head>

<body>
<div class="inner-wrapper">
		<h3 class="number">Page Not Found</h1>
		<p class="text">未找到相关页面，请检查网址是否正确。</p> 
        <span id="totalSecond">5</span>秒后自动返回
	<div class="btn-container">
	<a class="btn" id="back" href="http://luckyofficial.ga/">回到首页</a>
	</div>
</div>
</body>
<script language="javascript" type="text/javascript">
    var second = document.getElementById('totalSecond').textContent;
    if (navigator.appName.indexOf("Explorer") > -1)  //判断是IE浏览器还是Firefox浏览器，采用相应措施取得秒数
    {
        second = document.getElementById('totalSecond').innerText;
    } else
    {
        second = document.getElementById('totalSecond').textContent;
    }
    setInterval("redirect()", 1000);  //每1秒钟调用redirect()方法一次
    function redirect()
    {
        if (second < 0)
        {
            location.href = 'http://luckyofficial.ga/';
        } else
        {
            if (navigator.appName.indexOf("Explorer") > -1)
            {
                document.getElementById('totalSecond').innerText = second--;
            } else
            {
                document.getElementById('totalSecond').textContent = second--;
            }
        }
    }
</script>

</html>
