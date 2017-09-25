$(function(){
  pageInit();
});
function pageInit(){
  jQuery("#table").jqGrid(
      {
        url : '../view/json/user.json',
        datatype : "json",
        colModel : [ 
            { label: '用户ID', name: 'userId', index: "user_id", width: 45, key: true },
            { label: '用户名', name: 'username', width: 75 },
            { label: '所属部门', name: 'deptName', width: 75 },
            { label: '邮箱', name: 'email', width: 90 },
            { label: '手机号', name: 'mobile', width: 80 },
            { label: '状态', name: 'status', width: 80, formatter: function(value, options, row){
                return value === 0 ? 
                '<span class="label label-danger">禁用</span>' : 
                '<span class="label label-success">正常</span>';
            }},
            { label: '创建时间', name: 'createTime', index: "create_time", width: 90}
        ],
        viewrecords: true,
        height: 385,
        rowNum: 10,
        rowList : [10,30,50],
        rownumbers: true, 
        rownumWidth: 25, 
        autowidth:true,
        multiselect: true,
        pager: "#jqGridPager",
        jsonReader : {
            root: "page.list",
            page: "page.currPage",
            total: "page.totalPage",
            records: "page.totalCount"
        },
        prmNames : {
            page:"page", 
            rows:"limit", 
            order: "order"
        },
        gridComplete:function(){
            //隐藏grid底部滚动条
            $("#table").closest(".ui-jqgrid-bdiv").css({ "overflow-x" : "hidden" }); 
        }
      });
  jQuery("#table").jqGrid('navGrid', '#jqGridPager', {edit : false,add : false,del : false});
}