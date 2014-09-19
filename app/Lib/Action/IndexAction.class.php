<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action { 
   //http://localhost/app/Index/
   //http://localhost/app/

    public function index(){ 
	 Load('extend');
        $Data = M('art'); // 实例化Data数据模型
		$this->data = $Data->where('stat !=100 and fzclass=1')->order('id')->limit(4)->select();     
        
		
		$menu=M('class');
		$this->list=$menu->select();
		
		 $Data = M('art'); // 实例化Data数据模型
		 $this->data2 = $Data->where('stat !=100 and fzclass=2')->order('id')->limit(12)->select(); 
		
		$this->display();
		
		
		
    }
	
	
	//http://localhost/app/Index/home
	 public function home(){ 
	    $Data = M('User'); // 实例化Data数据模型
        $this->data = $Data->select();
        $this->display();
    }
	//http://localhost/app/Index/bbs
	 public function bbs(){ 
	     $Data = M('User'); // 实例化Data数据模型
      
		 $arr=$Data->select();
        echo "<div>hello bbs</div>";
		echo $arr["user_name"];
		var_dump($arr);
    }
	
	public function insert(){    
	header("Content-Type:text/html; charset=utf-8");    
	$Dao = M("User"); // 实例化模型类     
	 $Dao->user_name=$_POST['title'];
	 $Dao->user_mail=$_POST['content'];  

	 if ($this->isPost()){
	if($lastInsId = $Dao->add()){       
	echo "插入数据 id 为：$lastInsId";
     redirect('/app/Index/', 0, '页面跳转中...');   
	} else {      
	$this->error('数据写入错误！');   
	} 
	} 
	}
	public function del(){    
	header("Content-Type:text/html; charset=utf-8");    
	$Dao = M("User"); // 实例化模型类     
	$Dao->find($_GET["_URL_"][3]);
	$Dao->delete();
	
	} 
	
	
	public function up(){    
	header("Content-Type:text/html; charset=utf-8");    
	$Dao = M("User"); // 实例化模型类     
	$Dao->find($this->_param(2));

	$Dao->user_name="fengsuleif";
	$Dao->save();
	echo $this->_param(2);
	
	} 
	
	public function add1(){    
	 if ($this->isPost()){
	 $Dao= M( "User" );
    //$result = $model ->query( 'update fk_user set user_name="aaa" where id=3'); //将返数据集
     // $result = $model ->execute( 'update fk_user set user_name="aaa" where id=3'); //将返回总行数
	 $Dao->user_name=$_GET['name'];
	 $Dao->user_mail=$_GET['content'];
	 $Dao->add();
	 
	 }
	
	} 
	
	public function sub(){
	
	
	
	}
	 Public function archive(){
	 $w1    = $_GET["_URL_"][0]; 
	 $w2    = $_GET["_URL_"][1]; 
    $year    = $_GET["_URL_"][2]; 
    $month  = $_GET["_URL_"][3];
    $day    = $_GET["_URL_"][4];
	echo $year.$month.$day."<br>";
	echo $w1.$w2;
    }
	
	Public function pages(){
	$Data = M('User'); // 实例化Data数据对象
    import('ORG.Util.Page');// 导入分页类
    $count      = $Data->where($map)->count();// 查询满足要求的总记录数 $map表示查询条件
    $Page       = new Page($count,2);// 实例化分页类 传入总记录数
    $show       = $Page->show();// 分页显示输出
    // 进行分页数据查询
    $list = $Data->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
    $this->assign('list',$list);// 赋值数据集
    $this->assign('page',$show);// 赋值分页输出
    $this->display(); // 输出模板
	}
	
	Public function checkcode(){
	if(session('verify') != md5($_POST['verify'])) {
   $this->error('验证码错误！');
 }else{echo "is ok";}
	}
 }
 
 
 

 ?>