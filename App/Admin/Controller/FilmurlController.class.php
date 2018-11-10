<?php 

	namespace Admin\Controller;
	//AdminController  在Core文件夹下，并且命名空间 Core
	use \Core\AdminController;

	class FilmurlController extends AdminController{
		/*
		 *  getAllTypes() 方法
		 *  主要的作用查询所有的分类
		 */
		function doList(){

			//接收要搜索的关键字
			$k = isset($_GET['k']) ? $_GET['k'] : "" ;

			//1）调用模型查询数据
			$filmModel = new \Model\FilmModel;
			//2）把查询的数据分配到模板中
			$arr = $filmModel->pageList($k);

			//$arr 包含两部分信息
			//1，页码的 html代码
			//2, 查询的数据（二维数组）
			
			//3）display 显示指定的模板
			$this->assign("dataArr",$arr);
			$this->display("list.html");   
		}


		/*
		 * 添加一个新的类别
		 */
		function doAddBefore() {

			//1）查询出所有已经存在的类别
						//1）调用模型查询数据
			$rulesModel = new \Model\RulesModel;
			//2）把查询的数据分配到模板中
			$arr = $rulesModel->findAll();


			// var_dump($arr);
			for($i=0;$i<count($arr);$i++){

				//取出path 然后使用explode('-',path)
				$a1 = explode("-",$arr[$i]['path']);  // 0-14  --> array(0,14)             0-14-15-18
				$len = count($a1);                   //计算数组长度
				//定义一个字符串保存缩进字符
				//新闻 
				//--|国内新闻(name)
				//----|时事焦点
				$str = "";
				for($j=1;$j<$len;$j++){
					$str .="--";
				}

				//取出name，并且连上缩进，再重新保存到name中
				$arr[$i]['rules_name'] = $str."|".$arr[$i]['rules_name'];
			}
			//2) 跳转，显示视图
			$this->assign("dataArr",$arr);
			//   add.html
			$this->display("add.html");   //add.html 放到 
		}

		/*
		 *  add方法用户把用户输入的内容，保存到数据库中
		 */
		function doAdd(){


			//接收参数                                   pid # path
			$type = $_POST['type'];             //type = 14#0
			//判断是否是根级分类
			//把参数放到 data数组中
			if($type=='0'){

				$data[':pid'] = 0;
				$data[':path'] = 0;
			}else {
				//如果不是根级分类，把 14 # 0 拆分成两个元素
				$arr = explode("#",$type);
				$data[':pid'] = $arr[0];
				$data[':path'] = $arr[1]."-".$arr[0];   //用父级的 path-pid
			}

			//保存类别的名称
			$data[':rname'] = $_POST['rulesname'];
			$data[':desc'] = $_POST['rulesdesc'];
			$data[':url'] = $_POST['url'];
			$data[':start'] = $_POST['start'];
			$data[':end'] = $_POST['end'];
			$data[':type'] = $_POST['rulestype'];
			$data[':content'] = $_POST['content'];

			//调用模型的方法，把数据保存到数据库中
			$rulesModel = new \Model\RulesModel;
			//调用方法，并且传递数据
			if($rulesModel->addInfo($data)){
				//如果成功，给出跳转提示
				$this->success("Admin","rules","doList","类别{$data[':rname']}添加成功！",1);

			}else{

				$this->error("Admin","rules","doAddBefore","类别{$data[':rname']}添加失败！",3);
			}
			
		}


		/*
		 * 在修改之前查询数据
		 */
		function doUpdateBefore() {

			//接收id的值
			if(!isset($_GET['id'])) exit;
			$id = $_GET['id'];

			//1）查询出所有已经存在的类别
						//1）调用模型查询数据
			$rulesModel = new \Model\RulesModel;
			//2）把查询的数据分配到模板中
			$arr = $rulesModel->findAll();

			// var_dump($arr);
			for($i=0;$i<count($arr);$i++){

				//取出path 然后使用explode('-',path)
				$a1 = explode("-",$arr[$i]['path']);  // 0-14  --> array(0,14)             0-14-15-18
				$len = count($a1);                   //计算数组长度
				//定义一个字符串保存缩进字符
				//新闻 
				//--|国内新闻(name)
				//----|时事焦点
				$str = "";
				for($j=1;$j<$len;$j++){
					$str .="--";
				}

				//取出name，并且连上缩进，再重新保存到name中
				$arr[$i]['rules_name'] = $str."|".$arr[$i]['rules_name'];
			}
			


			//根据id查询一条记录
			$rules = $rulesModel->findRowById($id);
			

			//把数组分配到模板中
			$this->assign("rules",$rules);
			//2) 跳转，显示视图
			$this->assign("dataArr",$arr);
			//   add.html
			$this->display("edit.html");   //add.html 放到 
		}

		/*
		 *  add方法用户把用户输入的内容，保存到数据库中
		 */
		function doUpdate(){
			if(!isset($_POST['id'])) exit;
			$data[':id'] = $_POST['id'];

			//接收参数                                   pid # path
			$type = $_POST['type'];             //type = 14#0
			//判断是否是根级分类
			//把参数放到 data数组中
			if($type=='0'){

				$data[':pid'] = 0;
				$data[':path'] = 0;
			}else {
				//如果不是根级分类，把 14 # 0 拆分成两个元素
				$arr = explode("#",$type);
				$data[':pid'] = $arr[0];
				$data[':path'] = $arr[1]."-".$arr[0];   //用父级的 path-pid
			}

			//保存类别的名称
			$data[':rname'] = $_POST['rulesname'];
			$data[':desc'] = $_POST['rulesdesc'];
			$data[':url'] = $_POST['url'];
			$data[':start'] = $_POST['start'];
			$data[':end'] = $_POST['end'];
			$data[':type'] = $_POST['rulestype'];
			$data[':content'] = $_POST['content'];

			//调用模型的方法，把数据保存到数据库中
			$rulesModel = new \Model\RulesModel;
			//调用方法，并且传递数据
			if($rulesModel->updateInfo($data)){
				//如果成功，给出跳转提示
				$this->success("Admin","rules","doList","规则{$data[':rname']}保存成功！",1);

			}else{
				//取出错误信息
				$error = \Core\Dao::$error;
				$this->error("Admin","rules","doUpdateBefore","规则{$data[':rname']}保存失败！<br>{$error}",300);
			}
			
		}



		/*
		 * 删除类别
		 */
		function deleteType(){

			if(!isset($_GET['id'])) exit;
			//接收参数 id
			$id = $_GET['id'];
			//调用模型删除
			$filmtypeModel = new \Model\FilmtypeModel;
			
			//判断是否删除成功
			if($filmtypeModel->delete($id)){
				//如果成功，给出跳转提示
				$this->success("Admin","Filmtype","getAllTypes","删除成功！",1);

			}else{

				$this->error("Admin","Filmtype","getAllTypes","删除失败！",3);
			}
			


		}



		/**
		 *   使用CRUL工具模拟get请求
		 *   
		 */


		function testCurlGet(){

			//目标：请求 www.a.com/phpday23/content.php
			//cURL 使用分成四步
			//1、初始化curl,返回时资源
			$curl = curl_init();
			$url = "http://www.a.com/phpday23/content.php?name=zhangsan";
			// var_dump($curl);
			//2、设置参数（请求的头信息）
			// curl_setopt(curl资源,"名",值);
			// 1) 设置要请求的URL地址
			curl_setopt($curl,CURLOPT_URL,$url);
			// 2) CURLOPT_HEADER 表示请求的头信息，是否要显示出来
			//    CURLOPT_HEADER 设置为非0  会显示响应头信息
			curl_setopt($curl,CURLOPT_HEADER,0);  
			// 3) 服务器以文件流的方式返回，而不是直接输出
			curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);  

			//3、发送并且执行  $data 返回的就是 请求的url相应的内容
			$data = curl_exec($curl);
			//4、关闭curl资源
			curl_close($curl);

			var_dump($data);

		}

		/**
		 *
		 * 使用CURL工具模拟POST请求
		 * 37cs_pidx=2; 37cs_user=37cs07760131869; 37cs_show=253%2C75; cscpvrich5041_fidx=2; UM_distinctid=162bcd11b103eb-09e8606cef738f8-4c322073-fa000-162bcd11b1213b; CNZZDATA1260535040=733465086-1523583127-http%253A%252F%252Fwww.dytt8.net%252F%7C1523583127
		 *
		 * $str = file_get_contents($url);
		 * 
		 */
		function testCurlPost(){

			//目标：请求 www.a.com/phpday23/content.php
			//cURL 使用分成四步
			//1、初始化curl,返回时资源
			$curl = curl_init();
			$url = "http://www.a.com/phpday23/content-post.php";
			$referer = "http://www.dytt8.net/index.htm";
			$cookiestr = "37cs_pidx=1; 37cs_user=37cs17170730299; 37cs_show=253; cscpvrich5041_fidx=1; UM_distinctid=162bd27669ab32-0c47c5897c92b08-4c322073-fa000-162bd27669c44b; CNZZDATA1260535040=1450626112-1523588526-http%253A%252F%252Fwww.dytt8.net%252F%7C1523588526";
			// var_dump($curl);
			//2、设置参数（请求的头信息）
			// curl_setopt(curl资源,"名",值);
			// 1) 设置要请求的URL地址
			curl_setopt($curl,CURLOPT_URL,$url);
			// 2) CURLOPT_HEADER 表示请求的头信息，是否要显示出来
			//    CURLOPT_HEADER 设置为非0  会显示响应头信息
			curl_setopt($curl,CURLOPT_HEADER,0);  
			// 3) 服务器以文件流的方式返回，而不是直接输出
			curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);  
			// 4) 设置提交方式为post请求
			curl_setopt($curl,CURLOPT_POST, 1);
			// 5) 模拟请求来路 referer --- 请求的来路
			// 设置 referer 为 http://www.dytt8.net
			// 当浏览器重新定位的时候，自动设置 referer字符串
			curl_setopt($curl,CURLOPT_AUTOREFERER, 1);
			// CURLOPT_REFERER 设置请求的 referer
			curl_setopt($curl,CURLOPT_REFERER, $referer);

			//模拟请求的浏览器的 User-Agent 头信息
			curl_setopt($curl,CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:59.0) Gecko/20100101 Firefox/59.0");
			//模拟请求，并且带Cookie
			// CURLOPT_COOKIE
			curl_setopt($curl,CURLOPT_COOKIE, $cookiestr);

			// 定义要传递的参数的数组
			$post_data = array(
				"name"=>"zhangsan",
				"pass"=>"123456"
			);
			curl_setopt($curl,CURLOPT_POSTFIELDS, $post_data);


			//3、发送并且执行  $data 返回的就是 请求的url相应的内容
			$data = curl_exec($curl);
			//4、关闭curl资源
			curl_close($curl);

			var_dump($data);

		}




		/**
		 * 根据URL，请求url对应的内容
		 * 返回值 网页html代码串
		 *
		 * 使用curl请求服务器，如果获取的数据不正确，此时需要等待1~5秒，再试一次，还不行，再试  最多重试3次
		 * 
		 * @return [type] [description]
		 */
		function getDataByURL($url,$target='keywords',$retry=3){
			
			//目标：请求 www.a.com/phpday23/content.php
			//cURL 使用分成四步
			//1、初始化curl,返回时资源
			$curl = curl_init();
			$referer = "http://www.dytt8.net/index.htm";
			$cookiestr = "37cs_pidx=1; 37cs_user=37cs17170730299; 37cs_show=253; cscpvrich5041_fidx=1; UM_distinctid=162bd27669ab32-0c47c5897c92b08-4c322073-fa000-162bd27669c44b; CNZZDATA1260535040=1450626112-1523588526-http%253A%252F%252Fwww.dytt8.net%252F%7C1523588526";
			// var_dump($curl);
			//2、设置参数（请求的头信息）
			// curl_setopt(curl资源,"名",值);
			// 1) 设置要请求的URL地址
			curl_setopt($curl,CURLOPT_URL,$url);
			// 2) CURLOPT_HEADER 表示请求的头信息，是否要显示出来
			//    CURLOPT_HEADER 设置为非0  会显示响应头信息
			curl_setopt($curl,CURLOPT_HEADER,0);  
			// 3) 服务器以文件流的方式返回，而不是直接输出
			curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);  

			// 5) 模拟请求来路 referer --- 请求的来路
			// 设置 referer 为 http://www.dytt8.net
			// 当浏览器重新定位的时候，自动设置 referer字符串
			curl_setopt($curl,CURLOPT_AUTOREFERER, 1);
			// CURLOPT_REFERER 设置请求的 referer
			curl_setopt($curl,CURLOPT_REFERER, $referer);

			//模拟请求的浏览器的 User-Agent 头信息
			curl_setopt($curl,CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:59.0) Gecko/20100101 Firefox/59.0");
			//模拟请求，并且带Cookie
			// CURLOPT_COOKIE
			curl_setopt($curl,CURLOPT_COOKIE, $cookiestr);

			//3、发送并且执行  $data 返回的就是 请求的url相应的内容
			$data = curl_exec($curl);
			
			//如何判断字符串中含有某个字符串？
			// 01234
			// aaabbccddeeff(源字符串)
			// aaa
			// 
			// === 表示全等（类型和值都得等）
			// strpos（a,b） 在a找查找b首次出现的位置3
			while(strpos($data,$target)===false&&$retry--){
				//产生随机的描述
				$t = mt_rand(1,5);
				$this->output("请求【{$url}】失败，{$t}秒后重试,正在继续...");
				//睡眠
				sleep($t);
				//重新发起请求
				$data = curl_exec($curl);
				
			}

			//4、关闭curl资源
			curl_close($curl);

			$data = iconv("gb2312","utf-8//IGNORE",$data);
			return $data;
		}

		/**
		 * 输出的显示方法
		 * @param  [type] $str [description]
		 * @return [type]      [description]
		 */
		function output($str){

			//通过dom操作 innerHTML把信息放到指定的div中
			echo "<script>var txt=document.getElementById('txt');txt.innerHTML= txt.innerHTML+'<br>".$str."';</script>";

			//输出缓冲区的内容
			ob_flush();
			flush();
		}

		/**
		 *
		 *  start 
		 *  开始采集
		 * 
		 */
		function start(){

			echo "<div id='txt' style='border:1px solid red;overflow:auto;'></div>";
			//判断id是否存在
			if(!isset($_GET['id'])){

				$this->error("Admin","rules","doList","参数错误，无法继续采集...",3);
			}
			//接收id
			$id = $_GET['id'];

			//根据id，查询采集的规则
			$rulesModel = new \Model\RulesModel;
			//$rules 数组，保存采集的规则
			$rules = $rulesModel->findRowById($id);

			//得到采集规则
			// 根据采集规则的类型，做不同的处理
			if($rules['type']==1){

				//采集列表
				$this->getFilmURL($rules);
				
			}


		}


		/**
		 * 采集电影的列表数据
		 */
		
		function getFilmURL($rules){

			//定义地址                                                             /{.*}/Us
			$url = $rules['url'];    //http://www.dytt8.net/html/gndy/dyzz/list_23_{1}.html
			// $url = "http://www.a.com/phpday23/list.html";
			$start = $rules['start_page'];
			$end = $rules['end_page'];
			$result = array();
			$result2 = array();
			$count = 0;
			$totalCount = $end*25;

			//遍历所有页码开始采集数据
			for($j=$start;$j<=$end;$j++){

				$result = null;
				$result2 = null;

				//使用正则进行替换
				$url2 = preg_replace("/{.*}/Us", $j, $url);
				$patt = $rules['content'];
				
				//实例化 FilmurlModel
				$FilmurlModel = new \Model\FilmurlModel;

				//根据url返回列表页的html内容
				$str = $this->getDataByURL($url2);
				if($str!=""){
					// var_dump($str);
					//开始采集
					//使用正则匹配,
					//$num 返回的匹配次数
					//$str 要匹配的源字符串
					//$result 匹配的结果
					//[0] = 匹配的结果
					//[1] = ()中的内容，就是我们需要的地址
					$num = preg_match_all($patt, $str,$result);

					$patt2 = "/日期：(.*)点/Us";
					//匹配日期
					$num2 = preg_match_all($patt2, $str, $result2);

					if($num&&$num2){
						
						//保存数据到数据库中
						for($i=0;$i<count($result[1]);$i++){

							//拼数据
							$data[':url'] = $result[1][$i];
							$data[':hashurl'] = md5($result[1][$i]);
							//所属电影类型
							$data[':filmtypeid'] = $rules['filmtypeid'];
							$data[':page'] = $j;
							$data[':addTime'] = trim($result2[1][$i]);
							//is_down = 0 表示该链接的内容（对应的影片）还没有被下载
							$data[':is_down'] = 0;

							//添加之前做判断，判断是否已经存url
							if($FilmurlModel->url_exists($data[':hashurl'])) {
								$this->output("url已经存在...跳过...");
								continue;
							}

							//把url保存到数据库中
							if($FilmurlModel->addInfo($data)){
								$count++;
								$this->output("成功采集{$count}/{$totalCount}条,当前第{$j}页,采集正在继续...");
							}else {
								$error = \Core\Dao::$error;
								$this->output("添加失败!{$error}");
							}

						}


					}

					$this->output("<hr>当前完成第{$j}页【{$url2}】，程序休息3秒，程序正在继续<hr>");
					sleep(3);
				}else{
					$this->output("<hr>第{$j}页内容获取失败,程序继续...</hr>");
				}
			}

		}


		/**
		 * 采集电影的列表数据
		 */
		
		function updateFilmUrl(){

			echo "<div id='txt' style='border:1px solid red;overflow:auto;'></div>";
			//根据规则id查询该规则对应的内容是否有更新
			//判断id是否存在
			if(!isset($_GET['id'])){

				$this->error("Admin","rules","doList","参数错误，无法继续采集...",3);
			}
			//接收id
			$id = $_GET['id'];

			//根据id，查询采集的规则
			$rulesModel = new \Model\RulesModel;
			//$rules 数组，保存采集的规则
			$rules = $rulesModel->findRowById($id);

			//定义地址                                                             /{.*}/Us
			$url = $rules['url'];    //http://www.dytt8.net/html/gndy/dyzz/list_23_{1}.html
			// $url = "http://www.a.com/phpday23/list.html";
			$start = $rules['start_page'];
			$end = $rules['end_page'];
			$result = array();
			$result2 = array();
			$count = 0;
			$totalCount = $end*25;

			//获取已经采集的url中最新的时间
			//调用模型方法，返回指定类别最大的时间的 时间戳
			$filmurlModel = new \Model\FilmurlModel;
			//$max 保存的是最大的时间的unix时间戳
			//2018-04-11 09:25:30 ---> select unix_timestamp(2018-04-11 09:25:30) 
			$max = $filmurlModel -> getMaxTimeByType($rules['filmtypeid']);

			//遍历所有页码开始采集数据
			for($j=$start;$j<=$end;$j++){

				$result = null;
				$result2 = null;

				//使用正则进行替换
				$url2 = preg_replace("/{.*}/Us", $j, $url);
				$patt = $rules['content'];
				
				//实例化 FilmurlModel
				$FilmurlModel = new \Model\FilmurlModel;

				//根据url返回列表页的html内容
				$str = $this->getDataByURL($url2);
				if($str!=""){
					// var_dump($str);
					//开始采集
					//使用正则匹配,
					//$num 返回的匹配次数
					//$str 要匹配的源字符串
					//$result 匹配的结果
					//[0] = 匹配的结果
					//[1] = ()中的内容，就是我们需要的地址
					$num = preg_match_all($patt, $str,$result);

					$patt2 = "/日期：(.*)点/Us";
					//匹配日期
					$num2 = preg_match_all($patt2, $str, $result2);

					if($num&&$num2){
						
						//保存数据到数据库中
						for($i=0;$i<count($result[1]);$i++){

							//判断要采集的数据的时间是否>数据库中存在的最大的时间
							//trim($result2[1][$i]) 采集的时间的字符串 2018-04-12 19:52:08
							//strtotime('2018-04-12 19:52:08') 可以帮我们把字符串转为 unix时间戳
							$serTime = strtotime(trim($result2[1][$i]));
							if($max<$serTime){
								//拼数据
								$data[':url'] = $result[1][$i];
								$data[':hashurl'] = md5($result[1][$i]);
								//所属电影类型
								$data[':filmtypeid'] = $rules['filmtypeid'];
								$data[':page'] = $j;
								$data[':addTime'] = trim($result2[1][$i]);
								//is_down = 0 表示该链接的内容（对应的影片）还没有被下载
								$data[':is_down'] = 0;

								//添加之前做判断，判断是否已经存url
								if($FilmurlModel->url_exists($data[':hashurl'])) {
									$this->output("url已经存在...跳过...");
									continue;
								}

								//把url保存到数据库中
								if($FilmurlModel->addInfo($data)){
									$count++;
									$this->output("成功采集{$count}/{$totalCount}条,当前第{$j}页,采集正在继续...");
								}else {
									$error = \Core\Dao::$error;
									$this->output("添加失败!{$error}");
								}

							}else{
								//如果数据没有更新，则直接退出
								$this->output("本地数据已经是最新的了！");
								break 2;
							}

						}


					}

					$this->output("<hr>当前完成第{$j}页【{$url2}】，程序休息3秒，程序正在继续<hr>");
					sleep(3);

				}else{
					$this->output("<hr>第{$j}页内容获取失败,程序继续...</hr>");
				}

			}

		}


		/**
		 * 采集电影的内容
		 */

		function getFilmContent(){

			echo "<div id='txt' style='border:1px solid red;overflow:auto;'></div>";
			//根据传递过来的id来获取当前id对应的采集规则
			//判断id是否存在
			if(!isset($_GET['id'])){

				$this->error("Admin","rules","doList","参数错误，无法继续采集...",3);
			}
			//接收id
			$id = $_GET['id'];
			$count = 0;

			//根据id，查询采集的规则
			$rulesModel = new \Model\RulesModel;
			//$rules 数组，保存采集的规则
			$rules = $rulesModel->findRowById($id);
			/*
			/<h1><font color=#07519a>(.*)<\/font>/Us||/<img border=\"0\" src=\"(.*)\" alt=\"\" \/> <br \/><br \/>◎译/Us||/◎译　　名　(.*) <br/Us||/◎片　　名　(.*) <br/Us||/◎年　　代　(.*) <br/Us||/◎产　　地　(.*) <br/Us||/◎类　　别　(.*) <br/Us||/◎语　　言　(.*) <br/Us||/◎字　　幕　(.*) <br/Us||/◎上映日期　(.*) <br/Us||/◎IMDb评分 (.*)\//Us||/◎豆瓣评分　(.*)\//Us||/◎文件格式　(.*) <br/Us||/◎视频尺寸　(.*) <br/Us||/◎文件大小　(.*) <br/Us||/◎片　　长　(.*) <br/Us||/◎导　　演　(.*) <br/Us||/◎主　　演　(.*) <br \/><br \/>/Us||/◎简　　介 <br \/><br \/>　　(.*)<br \/><br \/>/Us||/◎获奖情况 <br \/><br \/>　　(.*) <br/Us||/◎主　　演.*<img border=\"0\" src=\"(.*)\" alt=\"\" \/>.*<strong>/Us

			*/
		
			//取出正则内容，并且拆分为数组
			//implode('-',$arr)  把数组转化为字符串
			//explode('-',$str) 把字符串转化为数组
			$pattArr = explode("||",$rules['content']);
			
			
			//取出所有的正则所属影片类型查询该类型对应的所有的URL地址
			$filmurlModel = new \Model\FilmurlModel;
			//当前采集规则对应的所有的URL地址
			$urlArr = $filmurlModel -> findUrlByFilmtypeid($rules['filmtypeid']);
			// var_dump($urlArr);
			//定义数组并且初始化
			$result = array();
			$data = array();

			//根据URL循环取出每一条URL对应的电影的详细信息
			for($i=0;$i<count($urlArr);$i++){

				//清空数组
				$result = null;
				//$contentUrl 就是我们的每个电影的对应的网址
				$contentUrl = $rules['url'].$urlArr[$i]['url'];
				// echo $contentUrl."<br>";
				// 根据url获取内容
				$str = $this->getDataByURL($contentUrl);
				
				//判断取出的内容是否为空
				if($str!=""){

					//用正则的数组，依次取出影片的各个属性信息
						for($j=0;$j<count($pattArr);$j++){
							//循环取出正则，去依次匹配内容，把匹配到的内容保存到数组中
							//如果没有匹配到内容，则设置为空
							$num = preg_match($pattArr[$j],$str,$result);
							if($num){
								$data[$j] = $result[1];
							}else {
								$data[$j] = "";
							}
						}
					//保存影片所属的类型id
					$data[] = $rules['filmtypeid'];
					$data[] = $_SESSION['username'];

					//
					//拼成数组，保存到数据库
					$filmModel = new \Model\FilmModel;

					if($filmModel->addInfo($data)){


						$count++;
						$this->output("当前【{$contentUrl}】已经下载，累计下载{$count}条");
						
						//1）获取url对应的id
						$id = $urlArr[$i]['id'];
						//2) 更新url对应的下载的状态为 1
						if($filmurlModel->updateDownState($id)){
							$this->output("下载状态已经更新~");
						}

						$this->output("<hr>休息3秒钟，程序正在运行中...<hr>");
						sleep(3);

					}else{

						$err = \Core\Dao::$error;
						var_dump($err);
						$this->output("添加失败:{$err}");
					}

					//数组使用完毕，清空数组
					unset($data);
				//
				//如果保存成功，更新当前URL对应的下载状态为 1
				}else{
					
					$this->output("【{contentUrl}】内容获取失败...");
				}

			}

			















		}







		function test(){


			$str='
<div class="title_all"><h1><font color=#07519a>2018年奇幻喜剧《捉妖记2》HD国语中字</font></h1></div>
<tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr> 
      <td colspan="2" align="center" valign="top"><div id="Zoom">
<!--Content Start--><span style="FONT-SIZE: 12px"><td>
捉妖记2][HD-mkv.720p.国语中字][2018年奇幻喜剧] <br /><br /><img border="0" src="http://www.imageto.org/images/l59B.jpg" alt="" /> <br /><br />◎译　　名　Monster Hunt 2 <br />◎片　　名　捉妖记2 <br />◎年　　代　2018 <br />◎产　　地　中国/中国香港 <br />◎类　　别　喜剧/奇幻 <br />◎语　　言　普通话 <br />◎字　　幕　中文 <br />◎上映日期　2018-02-16(中国) <br />◎IMDb评分 5.4/10 from 259 users <br />◎豆瓣评分　5.2/10 from 105,215 users <br />◎文件格式　RMVB + aac <br />◎视频尺寸　1280 x 720 <br />◎文件大小　1CD <br />◎片　　长　110分钟 <br />◎导　　演　许诚毅 Raman Hui <br />◎主　　演　梁朝伟 Tony Leung Chiu Wai <br />　　　　　　白百何 Baihe Bai <br />　　　　　　井柏然 Boran Jing <br />　　　　　　李宇春 Yuchun Li <br />　　　　　　杨祐宁 Tony Yang <br />　　　　　　大鹏 Da Peng <br />　　　　　　吴君如 Sandra Ng <br />　　　　　　曾志伟 Eric Tsang <br />　　　　　　黄磊 Lei Huang <br />　　　　　　柳岩 Yan Liu <br />　　　　　　吴莫愁 Mouchou Wu <br />　　　　　　伍嘉成 Humphrey Wu <br />　　　　　　赵磊 Lay Zhao <br />　　　　　　谷嘉诚 Jason <br />　　　　　　彭楚粤 Chuyue Peng <br />　　　　　　陈泽希 Emn Chen <br />　　　　　　郭子凡 G-Ziven <br />　　　　　　肖战 Sean Xiao <br />　　　　　　焉栩嘉 Xujia Yan <br />　　　　　　夏之光 Zhiguang Xia <br />　　　　　　姜超 Chao Jiang <br />　　　　　　娄艺潇 Yixiao Lou <br />　　　　　　张俪 Li Zhang <br /><br />◎简　　介 <br /><br />　　上一集与胡巴分别后，天荫（井柏然 饰）带着小岚（白百何 饰）踏上寻父之路，在义薄云天的天师堂堂主云大哥（杨祐宁 饰）的帮助下，二人得知天荫父亲宋戴天的护妖轨迹；而重回永宁村的胡巴再度被妖王追杀，颠沛流离逃亡时结识大赌徒屠四谷（梁朝伟 饰）和一只妖怪，三人一起过着相依为命的生活，但又因屠四谷欠下的巨额赌债横生诸多波折。与此同时 ，江湖盛传小妖王胡巴的重金悬赏令，妖界大军、天师精英、绿林草莽闻风而动，多方势力为抢夺胡巴在清水镇掀起腥风血雨。千钧一发之际，念子心切的天荫和小岚通过天师堂找到胡巴并一起逃离险境。岂料，一场更大的惊天阴谋尾随而至，伺机而动&hellip;&hellip; <br /><br />◎获奖情况 <br /><br />　　第4届豆瓣电影年度榜单 (2017) <br />　　最值得期待的华语电影 <br /><br /><img border="0" src="http://www.imageto.org/images/rPEqC.jpg" alt="" /> <br /><br /><br /><strong><font color="#ff0000"><font size="4">【下载地址】</font></font></strong> <br /><br /><br />
<table style="BORDER-BOTTOM: #cccccc 1px dotted; BORDER-LEFT: #cccccc 1px dotted; TABLE-LAYOUT: fixed; BORDER-TOP: #cccccc 1px dotted; BORDER-RIGHT: #cccccc 1px dotted" border="0" cellspacing="0" cellpadding="6" width="95%" align="center">
    <tbody>
        <tr>
            <td style="WORD-WRAP: break-word" bgcolor="#fdfddf"><a href="ftp://ygdy8:ygdy8@yg45.dydytt.net:7172/阳光电影www.ygdy8.com.捉妖记2.HD.720p.国语中字.mkv">ftp://ygdy8:ygdy8@yg45.dydytt.net:7172/阳光电影www.ygdy8.com.捉妖记2.HD.720p.国语中字.mkv</a></td>
        </tr>
    </tbody>';

    	//采集标题
		$patt = "/<h1><font color=#07519a>(.*)<\/font>/Us";
		$patt = "/<img border=\"0\" src=\"(.*)\" alt=\"\" \/> <br \/><br \/>◎译/Us";
		$patt = "/◎译　　名　(.*) <br/Us";
		$patt = "/◎片　　名　(.*) <br/Us";
		$patt = "/◎年　　代　(.*) <br/Us";
		$patt = "/◎产　　地　(.*) <br/Us";
		$patt = "/◎类　　别　(.*) <br/Us";
		$patt = "/◎语　　言　(.*) <br/Us";
		$patt = "/◎字　　幕　(.*) <br/Us";
		$patt = "/◎上映日期　(.*) <br/Us";
		$patt = "/◎IMDb评分 (.*)\//Us";
		$patt = "/◎豆瓣评分　(.*)\//Us";
		$patt = "/◎文件格式　(.*) <br/Us";
		$patt = "/◎视频尺寸　(.*) <br/Us";
		$patt = "/◎文件大小　(.*) <br/Us";
		$patt = "/◎片　　长　(.*) <br/Us";
		$patt = "/◎导　　演　(.*) <br/Us";
		$patt = "/◎主　　演　(.*) <br \/><br \/>/Us";
		$patt = "/◎简　　介 <br \/><br \/>　　(.*)<br \/><br \/>/Us";
		$patt = "/◎获奖情况 <br \/><br \/>　　(.*) <br/Us";
		$patt = "/◎主　　演.*<img border=\"0\" src=\"(.*)\" alt=\"\" \/>.*<strong>/Us";
		$patt = "/bgcolor=\"#fdfddf\"><a href=\"(.*)\">/Us";


		$num = preg_match($patt,$str,$result);
		// var_dump($num,$result);
		print_r($result);


		}



	}





 ?>