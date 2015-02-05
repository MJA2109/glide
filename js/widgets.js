function updateOnlineUsers(onlineUsers){	
	$(".onlineUsers ul").empty();	
	if(onlineUsers != ""){
		for(var i = 0; i < onlineUsers.length; i++){
			$(".onlineUsers ul").append("<li class = 'list-group-item'><span class ='fa fa-circle'></span>" + onlineUsers[i] +"</li>");
		}
		$(".userVal").text(onlineUsers.length);
	}
}


function updateExpenseWidget(expensesData){
	$(".recentExpenses ul").empty();
	if(expensesData != ""){
		for(var i = 0; i < expensesData.length; i++){
			$(".recentExpenses ul").append("<li class = 'list-group-item'><span class ='fa fa-upload'></span>" + expensesData[i]["user_name"] + " <span class = 'textTime'> " + moment(expensesData[i]["expense_date"]).fromNow() + " </span>  </li>");
		}
		$(".expVal").text(expensesData.length);
	}			
}


function updateJourneyWidget(journeysData){
	$(".recentJourneys ul").empty();
	if(journeysData != ""){
		for(var i = 0; i < journeysData.length; i++){
			$(".recentJourneys ul").append("<li class = 'list-group-item'><span class ='fa fa-upload'></span>" + journeysData[i]["user_name"] + " <span class = 'textTime'> " + moment(journeysData[i]["date"]).fromNow() + " </span>  </li>");
		}
		$(".jourVal").text(journeysData.length);
	}

}