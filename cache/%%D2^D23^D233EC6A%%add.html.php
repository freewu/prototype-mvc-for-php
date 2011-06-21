<?php /* Smarty version 2.6.24, created on 2010-11-19 17:12:03
         compiled from add.html */ ?>
<form name="message" method="POST" action="?ctl=message&act=toAdd">
<input name="id" value="<?php echo $this->_tpl_vars['data']['message_id']; ?>
" type="hidden"/><br/>
<input name="data[title]" value="<?php echo $this->_tpl_vars['data']['title']; ?>
" size="100"/><br/>
<textarea name="data[content]" rows="4" cols="80"><?php echo $this->_tpl_vars['data']['content']; ?>
</textarea><br/>
<input type="submit" value="提交" />
</form>
<a href="?ctl=message&act=index">返回列表</a>