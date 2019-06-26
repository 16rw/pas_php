<?php
namespace Admin\Controller;
use Think\Controller;


use Admin\Common\CommonController;
class IndexController extends CommonController{
//class IndexController extends Controller {

    /**
     * 判断登录状态
     */
    public function _initialize()
    {
        $sid = session('admin_name');//检测session是否存在，不存在就跳登录页面
        if (! isset($sid)) {
            $this->redirect('Manager/login');
        }
    }


    public function main(){
        $this->display();
    }
    public function index(){
        $this->_initialize();
        $this->display();
    }


    public function left(){
        $admin_id = session('admin_id');
        $admin_name = session('admin_name');
        
        if($admin_name=='admin'){
            $authinfoA = D('Auth')->where(array('auth_pid'=>0))->select();
            $authinfoB = D('Auth')->where(array('auth_pid'=>array('neq',0),'auth_id'=>array('neq',204)))->select();
        }else{
            $info = D('People')->where(array('id'=>$admin_id))->field('auth_id')->find();
            $authids = $info['auth_id'];
          
            $authinfoA = D('Auth')->where(array('auth_id'=>array('in',$authids),'auth_pid'=>0))->select();
            $authinfoB = D('Auth')->where(array('auth_id'=>array('in',$authids),'auth_pid'=>array('neq',0)))->select();
        }
//        dump($authinfoA);
//        dump($authinfoB);
        $this->assign('authinfoA',$authinfoA);
        $this->assign('authinfoB',$authinfoB);
        $this->display();
    }

    public function top(){
        $admin_id = session('id');
        $admin_name = session('name');
        $num = M('project')->where(array('status'=>'未审核'))->count();
        $this->assign('num',$num);
        $this->display();
    }


    // public function admin_list(){
       
    //     $adminUser = D('Manager');
        


    //     $info = $adminUser->select();
    //     //dump($info);
    //     $this->assign('info',$info);
        

    //      //dump($_POST['admin_name']);
    //     $this->display('/Manager/admin_list');

    // }

    // public function admin_permission(){
    //     // dump($_POST['admin_name']);
    //     $this->display('/Manager/admin_permission');
    // }

    // public function admin_role(){
    //     // dump($_POST['admin_name']);
    //     $this->display('/Manager/admin_role');
    // }


    // public function admin_add(){
    //     $this->display('/Manager/admin_add');
    //     if(IS_POST){
    //          $addUser = D('Manager');
    //          $data = array(
    //             'adminname' => I('adminname'),
    //             'password' => I('password'),
    //             'sex' => I('sex'),
    //             'adminrole' => I('adminrole'),
    //             'admintime' => time()
    //             );
    //          //$data['admintime'] = time(); 
    //          dump($data);  
    //          $newId = $addUser->add($data);
    //          if($newId){
    //                 echo json_encode($newId);
    //                 return $newId;}
    //     }
       

    // }
    // public function admin_del(){
    //    if(IS_AJAX){

    //    }
    //    $this->display();

    //    //$username = $_POST['username'];

    // }

    // public function left(){
    //    $this->display();
    // }
    // public function right(){
    //    $this->display();
    // }
   
}