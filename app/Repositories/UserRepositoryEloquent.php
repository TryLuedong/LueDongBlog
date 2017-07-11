<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\UserRepository;
use App\Models\User;

/**
 * Class UserRepositoryEloquent
 * @package namespace App\Repositories;
 */
class UserRepositoryEloquent extends BaseRepository implements UserRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return User::class;
    }

    public function ajaxIndex()
    {
        // datatables请求次数
        $draw = request('draw', 1);
        // 开始条数
        $start = request('start',config('admin.globals.list.start'));
        // 每页显示数目
        $length = request('length',config('admin.globals.list.length'));

        // 排序
        $order['name'] = request('columns.' .request('order.0.column',0) . '.name');
        $order['dir'] = request('order.0.dir','asc');

        $search['value'] = request('search.value','');

        $search['regex'] = request('search.regex',false);

        $user = $this->model;



        // 搜索框中的值
        if ($search['value']) {
            if($search['regex'] == 'true'){
                $user = $user->where('name', 'like', "%{$search['value']}%")->orWhere('name','like', "%{$search['value']}%");
            }else{
                $user = $user->where('name', $search['value'])->orWhere('name', $search['value']);
            }
        }

        // 搜索框中的值
        if ($search['value']) {
            if($search['regex'] == 'true'){
                $user = $user->where('email', 'like', "%{$search['value']}%")->orWhere('email','like', "%{$search['value']}%");
            }else{
                $user = $user->where('email', $search['value'])->orWhere('email', $search['value']);
            }
        }


        $count = $user->count();

        //$user = $user->orderBy($order['name'], $order['dir']);
        $users = $user->offset($start)->limit($length)->get();

        if ($users) {
            foreach ($users as &$v) {
                $v->actionButton = $v->getActionButton();
            }
        }

        //datatables固定返回格式
        return [
            'draw' => $draw,
            'recordsTotal' => $count,
            'recordsFiltered' => $count,
            'data' => $users,
        ];

    }



    public function store(array $input, $avatar){

        $attr['email'] = $input['email'];
        $attr['password'] = bcrypt($input['password']);
        $attr['name'] = $input['name'];

        if ($avatar != "") {
            $attr['user_pic'] = $avatar;
        }
        if (parent::create($attr)) {
            return true;
        }
        return false;
    }

    public function updateUser(array $input, $id, $avatar = '')
    {
        $attr['email'] = $input['email'];
        $attr['name'] = $input['name'];
        if ($input['password'] != "")  {
            $attr['password'] = bcrypt($input['password']);
        }
        if ($avatar != "") {
            $attr['user_pic'] = $avatar;
        }

        if (parent::update($attr, $id)) {
            return true;
        }
        return false;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
