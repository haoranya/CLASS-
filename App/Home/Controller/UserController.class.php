<?php 

    //想把user表中数据读取出来，并且显示
    //1）建立一个UserController,专门处理User表相关的业务逻辑
    //2）建立一个UserModel 类，专门用来连接数据库，并且获取数据
    //3）建立User控制器对应的视图文件

	// index.php?p=home&c=user&a=getAllUser

	//定义命名空间  Home\Controller空间
	namespace Home\Controller;
	use \Core\HomeController;
	//创建类
	class UserController extends HomeController{
		/*
		 * 定义一个方法，获取所有的User数据，并且显示出来
		 */

		function getAllUser(){
			//  UserController    getAllUser
			//echo __CLASS__."--->".__METHOD__;

			//调用模型类，获取数据
			//1)引入模型类文件
			// require_once APP."Model/UserModel.class.php";
			//2)实例化 UserModel类的对象
			$userModel = new \Model\UserModel;
			
			//此处要调用模型类的方法，获取所有的用户信息
			$dataArr = $userModel->findAll();
			
			//加载视图文件，显示数据
			// App/Home/View/User/user_list.html
			// include_once APP.PLAT."/View/".CONTROLLER."/user_list.html";
			// 

			$this->assign("dataArr",$dataArr);
			$this->display("user_list.html");


		}

		function doLogin(){

			// if(!isset($_POST['username'])) $this->error("home","index","index","无权限直接访问！",2);
			//获取参数
			$uname = $_POST['username'];
			$upass = $_POST['password'];		
			$remember = $_POST['remember'];
			$code = $_POST['validateCode'];	
			//判断
			if(strtolower($code)!=strtolower($_SESSION['validateCode'])){
				$this->error("Home","index","index","验证码错误！",2);
				exit;
			}
			setcookie("username",$uname,time()+$remember);
			setcookie("password",$upass,time()+$remember);

			//调用模型获取数据
			$userModel = new \Model\UserModel;
			$user = $userModel->getUserInfoByName($uname);
		
			//判断是否查询到信息
			if(!$user){
				$this->error("Home","index","index","用户名不存在!",5);
			}
			//判断密码输入是否正确
			if($user['pwd']!=md5($upass)){
				$this->error("home","index","index","密码输入不正确!",3);
			}

			//设置登录常量
			define("LOGINACCESS", true);
			
			//保存用户名到session
			$_SESSION['username'] = $uname;
			//当前登录的用户id
			$_SESSION['userid'] = $user['id'];
			$studentModel = new \Model\StudentModel;
			$information = $studentModel->findRowById($_SESSION['userid']);
			$_SESSION['name']=$information['name'];
			
			$this->assign("user",$information);
			
			//显示main模板页
			$this->display(APP.PLAT."/View/Index/index.html");

		}

		function reg(){

			$classtypeModel = new \Model\ClasstypeModel;
			$typeArr = $classtypeModel->findAll();
			// var_dump(count($typeArr));
			$arr = array();
			for($i=0;$i<count($typeArr);$i++){
				if(substr_count(($typeArr[$i]['path']), '-')>=2){
					$arr[] = $typeArr[$i]['path'];
				}
				continue;
				
			}
			// var_dump($arr);

			for($j=0;$j<count($arr);$j++){
				$classType[] = $classtypeModel->getType($arr[$j]);
			}

			$this->assign("className",$classType);
			$this->display("register.html");

		}


		function register(){


			// $this->display(APP.PLAT."/View/User/register.html");
			// if(isset($_POST['username'])) $this->error("用户名已经存在，换一个试试");

			$data[':username'] = $_POST['username'];
			$data[':password'] = md5($_POST['password']);
			$data[':rename'] = $_POST['re_name'];
			$data[':class_type'] = $_POST['class_type'];



			$code = $_POST['validateCode'];	
			//判断
			if(strtolower($code)!=strtolower($_SESSION['validateCode'])){
				$this->error("Home","index","index","验证码错误！",2);
				exit;
			}



			if($data[':class_type']=="所在班级"){
				echo "<script>alert('请选择自己所在的班级！');location='index.php?p=home&c=User&a=reg'</script>";
				exit;
			}
			

			

			// var_dump($data);
			// alert('注册成功！');
			// exit;
				
			$userModel = new \Model\UserModel;
			$stmt = $userModel->findName($data);

			// exit;
			if($stmt){
				echo "<script>alert('用户名已存在');location='index.php?p=home&c=User&a=reg'</script>";
				exit;
			}
		
			if($userModel->addInfo($data)){
				echo "<script>alert('注册成功！');location='index.php'</script>";
			
			}else{
				echo "<script>alert('注册失败！');location='index.php?p=home&c=user&a=reg'</script>";
			}


			
			
		}

	}

 ?>