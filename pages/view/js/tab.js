new Vue({
	el:"#panel_body",
	data:{
		tabList:[],
		index: 1
	},
	filtres:{

	},
	mounted:function() {
		// this.changeTab();
	},
	methods:{
		changeTab:function(tabName,type){
			if(type>0){
				if ($.inArray(tabName,this.tabList)<0) {
					this.tabList.push(tabName)
					this.addTab(type)
				}
			}else if (type<0) {
				this.tabList.splice($.inArray(tabName,this.tabList),1)
				this.delTab(type)
			}
      console.log(this.tabList);
		},
		addTab:function(tabName){
			console.log(tabName);
		},
		delTab:function(tabName){
			console.log(tabName);
		}
	}
})