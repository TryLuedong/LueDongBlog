var UserList = function() {
    var userInit = function(){
        $('#datatable-responsive').DataTable({
            "processing": true,
            "serverSide": true,
            "searchDelay": 800,

            "search":{
                regex:true,
            },
            "ajax": {
                // ajax请求地址
                'url' : '/admin/user/ajaxIndex',

            },

            "columns": [
                {
                    "data": "id",
                    "name" : "id"
                },

                {
                    // http://blog.me/uploads/avatar/

                    "data": "user_pic",

                    "name": "user_pic",
                    "orderable" : false,
                     "render": function (data, type,full, meta) {
                        return "<img src='" +"http://blog.me/uploads/avatar/"+ data + "' />";

                         // alert('eeeee');
                        return "<a href='" + data + "'>" + data + "</a>";
                        //  return 'eeee';

                    }

                },
                {
                    "data": "name",
                    "name": "name",
                    "orderable" : false,

                },
                {
                    "data": "email",
                    "name": "email",
                    "orderable" : false,

                },{
                    "data": "created_at",
                    "name": "created_at",
                    "orderable" : true,

                },{
                    "data": "updated_at",
                    "name": "updated_at",
                    "orderable" : true,

                }
                ,{
                    "data": "actionButton",
                    "name": "actionButton",
                    "type": "html",
                    "orderable" : false,
                }],



        });

        $(document).on('click','.destroy_item',function() {
            var _item = $(this);
            layer.confirm('确定删除此数据？', {
                btn: ['确定', '取消'],
                icon: 5,
            },function(index){
                _item.children('form').submit();
                layer.close(index);
            });
        });
    }
    return {
        init : userInit
    }
}();
