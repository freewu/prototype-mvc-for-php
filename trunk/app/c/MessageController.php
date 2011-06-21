<?php
class MessageController extends Controller
{
    var $_oMessage;
    
    function MessageController(){
        parent::Controller();
        $this->_oMessage = $this->getModel("message");
    }
    function index() {
        $page = intval($_GET['page'])? intval($_GET['page']) : 1;
        $pagesize = 5;
        
        $aData = $this->_oMessage->getAll($page,$pagesize);
        
        $this->view->assign('pager',$this->page->show($page,$aData['count'],$pagesize));
        $this->view->assign('data',$aData['data']);
        $this->view->display("message/index.html");
    }
    
    function add() {
        $this->view->display("message/add.html");
    }
    
    function toAdd() {
        if(empty($_POST)) $this->message("非法访问");
        
        if(empty($_POST['id'])) {// 添加操作
            $_POST['data']['add_time'] = time();
            $bFlag = $this->_oMessage->insert($_POST['data']);
        } else {// 修改操作
            $bFlag =  $this->_oMessage->update($_POST['data'],$_POST['id']);
        }
        
        if($bFlag) $this->message("操作成功");
        $this->message("操作失败");
    }
    
    function edit() {
        $id = intval($_GET['id']);
        if(!$id) $this->message("ID为空");
        
        $aData = $this->_oMessage->getOne($id);
        if(empty($aData)) $this->message("非法的ID");
        
        $this->view->assign("data",$aData);
        
        $this->add();
    }
    
    function delete() {
        $id = intval($_GET['id']);
        if(!$id) $this->message("ID为空");
        
        $bFlag = $this->_oMessage->delete($id);
        if($bFlag) $this->message("删除成功");
        $this->message("删除失败");
    }
}
?>