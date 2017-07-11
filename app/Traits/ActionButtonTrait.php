<?php
namespace App\Traits;
trait ActionButtonTrait{
  /**
   * 修改权限按钮
   * @author
   * @date   2016-11-24
   * @return [type]     [description]
   */
  public function getEditActionButton()
  {

      return '<a class="btn btn-warning btn-xs" href="'.url('admin/'.$this->action.'/'.$this->id.'/edit').'"><i class="fa fa-edit"></i> 修改</a> ';

  }
  /**
   * 查看按钮
   * @author
   * @date   2016-11-24
   * @return [type]     [description]
   */
  public function getShowActionButton()
  {
//    if (auth()->user()->can(config('admin.permissions.permission.show')) && config('admin.globals.'.$this->action.'.show')) {
//      return '<a class="btn btn-info btn-xs" href="'.url('admin/'.$this->action.'/'.$this->id).'"><i class="fa fa-edit"></i> 查看</a> ';
//    }

      return '<a class="btn btn-info btn-xs" href="'.url('admin/'.$this->action.'/'.$this->id).'"><i class="fa fa-edit"></i> 查看</a> ';
  }
  /**
   * 删除按钮
   * @author
   * @date   2016-11-24
   * @return [type]     [description]
   */
  public function getDestroyActionButton()
  {
      return '<a class="btn btn-danger btn-xs destroy_item" href="javascript:;"><i class="fa fa-edit"></i> 删除<form action="'.url('admin/'.$this->action.'/'.$this->id).'" method="POST" style="display:none"><input type="hidden" name="_method" value="delete"><input type="hidden" name="_token" value="'.csrf_token().'"></form></a> ';
  }

  /**
   * 获取按钮
   * @author
   * @date   2016-11-24
   * @return [type]     [description]
   */
  public function getActionButton()
  {
      return $this->getShowActionButton().
              $this->getEditActionButton().
              $this->getDestroyActionButton();
  }
}
