$(function(){
	// 留言悬浮框
	var oMsg = $('.online-msg');
	var oBigMsg = $('.online-msg-big');
	var oSmallMsg = $('.online-msg-small');

	var iH = $(window).height();
	var iMsgH = oMsg.height();
	var iTop = parseInt((iH/2)-(iMsgH/2));
	
	oMsg.css("top", iTop);
	oSmallMsg.css("top", iMsgH/2-oSmallMsg.height()/2);

	oMsg.mouseover(function (){
		oMsg.stop().animate({right:"0"});
	});
	oMsg.mouseout(function (){
		oMsg.stop().animate({right:"-280px"});
	});
});

/*留言*/
function jqajax(){
	var data = { 
				name:$("#name").val(),
				sex:$('#wrap input[name="sex"]:checked ').val(),
				tel:$("#tel").val(), qq:$("#qq").val(),
				content:$("#content").val()
			};

	var r=confirm("确认添加留言？");				
	if(r==true)
	{	
		$.ajax({
			type: "POST",
			url: "xq_manger/message_insert.php",  
			data: data,  
			beforeSend:function(data){
				if ($("#name").val() == "")
				{
					alert("姓名不能为空！");
					return false;
				}
				if ($("#tel").val() == "")
				{
					alert("电话不能为空！");
					return false;
				}
				if ($("#content").val() == "")
				{
					alert("内容不能为空！");
					return false;
				}

				$("#name").val('');
				$("#tel").val(''); 
				$("#qq").val('');
				$("#content").val('');
			} ,
			success:function(){
				alert("留言成功!");
			}
		}); 
	}				
}
