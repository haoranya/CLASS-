<?php 

	//增加命名空间
	namespace Home\Controller;
	//引入其他空间的类
	use \Core\HomeController;
	//新建类                        
	class PunchcardController extends HomeController{

		function main_page(){

			$this->display('test.htm');

		}

	}
 ?>