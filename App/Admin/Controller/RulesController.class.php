<?php 

	namespace Admin\Controller;
	//AdminController  在Core文件夹下，并且命名空间 Core
	use \Core\AdminController;

	class RulesController extends AdminController{
		/*
		 *  getAllTypes() 方法
		 *  主要的作用查询所有的分类
		 */
		function doList(){

			// echo __CLASS__."--".__METHOD__;

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

			//3）display 显示指定的模板
			$this->assign("dataArr",$arr);
			$this->display("list.html");    //App/Admin/View/Filmtype/list.html
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


			//查询所有电影类别
			//1）查询出所有已经存在的类别
			//1）调用模型查询数据
			$filmtypeModel = new \Model\FilmtypeModel;
			//2）把查询的数据分配到模板中
			$arr = $filmtypeModel->findAll();


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
				$arr[$i]['name'] = $str."|".$arr[$i]['name'];
			}
			//2) 跳转，显示视图
			$this->assign("filmtypes",$arr);


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
			$data[':filmtypeid'] = $_POST['filmtypeid'];

			//调用模型的方法，把数据保存到数据库中
			$rulesModel = new \Model\RulesModel;
			//调用方法，并且传递数据
			if($rulesModel->addInfo($data)){
				//如果成功，给出跳转提示
				$this->success("Admin","rules","doList","类别{$data[':rname']}添加成功！",1);

			}else{
				$err = \Core\Dao::$error;
				$this->error("Admin","rules","doAddBefore","类别{$data[':rname']}添加失败！<br>{$err}",3);
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

			//查询所有电影类别
			//1）查询出所有已经存在的类别
			//1）调用模型查询数据
			$filmtypeModel = new \Model\FilmtypeModel;
			//2）把查询的数据分配到模板中
			$arr = $filmtypeModel->findAll();


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
				$arr[$i]['name'] = $str."|".$arr[$i]['name'];
			}
			//2) 跳转，显示视图
			$this->assign("filmtypes",$arr);






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
			$data[':filmtypeid'] = $_POST['filmtypeid'];

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
		function doDelete(){

			if(!isset($_GET['id'])) exit;
			//接收参数 id
			$id = $_GET['id'];
			//调用模型删除
			$rulesModel = new \Model\RulesModel;
			
			//判断是否删除成功
			if($rulesModel->delete($id)){
				//如果成功，给出跳转提示
				$this->success("Admin","Rules","doList","删除成功！",1);

			}else{

				$this->error("Admin","Rules","doList","删除失败！",3);
			}
			


		}






	}





 ?>