function orderAction(action,orderid,inputUrl){
	switch (action){
			case "Confirm":
				var go=action;
				var str="确认订单";
		
			break;	
			case "sent":
				var go=action;
				//还需拼接值进行传递
				var expressName=$("input[name='expressName']").val();
				var expressNum=$("input[name='expressNum']").val();
				var orderid=$("input[name='orderIdHidden']").val();
				var orderid=orderid+"&expressName="+expressName+"&expressNum="+expressNum;
				var str="发货";
			break;	
			case "Delete":
				var go=action;
				var str="删除";
				
			break;
		
		
	}

	
	
		 //确认
		$.ajax({
					url:""+inputUrl+"/"+go+"?orderid="+orderid,
					
					success:function(data){
				
							if(data!=0){
									alert(str+"成功！");
									if(str=="确认订单"){
										$("#"+data+"").html("");
									$("#"+data+"").html("<font color='blue'>已确认</font>");
										
										
										
									}
									 if(str=="发货"){
											closeBg();
											
									}
								
							
							}else{
								
									alert("error,"+str+"失败！");
								
							} 
								var orderid=$("input[name='orderIdHidden']").val("");
		$("#add").text("");
	window.location.reload(); 
							
					}
		
		});
		
	
	}
