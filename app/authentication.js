var authHelpers=(function(){
     return{
     		localVars:{
	     	 	username:"",
	     	 	password:"",
     		},         
		   
			login:function(loginData){
                
                var apiData=JSON.stringify(loginData);
                Helpers.callBrrAPI(Helpers.config().loginURL,"POST",apiData,function(respType,response){

                switch(respType){
						case "progress":
						break;
						case "complete":
							// ViewHelpers.hideAppLoader();		
						break;
						case "fail":
							// ViewHelpers.hideAppLoader();
							// ViewHelpers.notify("Login failed","error");
							// ViewHelpers.notify(response,"error");
						break;
						case "success":
							//alert(JSON.stringify(response));
							//ViewHelpers.hideAppLoader();
							if(response.success == true){
								
								//alert('token'+response.access_token);
								if(response.id !='undefined' && response.id !='' && response.access_token !='undefined' && response.access_token !=""){
								  authHelpers.getAuthUserInfo(response.id,response.access_token);
								}else{

									// window.location  ="/auth"
								}	
								/*alert(JSON.stringify(userInfo));
								if(userInfo !='undefined' && userInfo !=''){
									AuthHelpers.setAuthInfo(userInfo);
								}
								
								
								
								window.location  ="/";*/
							}
							else{
								//ViewHelpers.notify(response.message,"error");
							}							
						break;
					}
                })
	
			},
			setAuthInfo : function(authInfo){
				console.log(authInfo);
			    localStorage.setItem("authInfo", JSON.stringify([{'user':authInfo.token.user}]));
			},
			getAuthUserInfo : function(pUserId, pUserAccessToken){
					//var retVal = "";
					if(pUserId !='undefined' && pUserId !='' && pUserAccessToken !='undefined' && pUserAccessToken !=""){
						var apiParams = [{'name': 'access_token' , 'value' : pUserAccessToken}];
						var apiQueryString = Helpers.convertArrayToQueryString(apiParams);
						var apiData ={};
						var apiUrlNew = 'http://api-staging3.brrmedia.co.uk/account/'+pUserId+'/?'+apiQueryString;
						Helpers.callBrrAPI(apiUrlNew,'GET',apiData,function(respType,response){
							
							switch(respType){
								case "progress":
								break;
								case "complete":
									// ViewHelpers.hideAppLoader();		
								break;
								case "fail":
									// ViewHelpers.hideAppLoader();
									// ViewHelpers.notify("User Info failed","error");
									// ViewHelpers.notify(response,"error");
								break;
								case "success":
									
									// ViewHelpers.hideAppLoader(); 							
									if(response.success == true ){
										if(response.token.user.active){ //NMF-99
											console.log(response);
											//authHelpers.setAuthInfo(response);
											 $.ajax({
											 	 type:"POST",
											 	 url:"./session.php",
											 	 data:response,
											 	 success:function(data){
											 	 	console.log(data);
											 	 	Helpers.notify("Login successfully","success");
											 	 	setTimeout(function(){
											 	 		window.location.href="file-upload-dashboard.php";
											 	 	},1000)
											 	 	
											 	 }
											 })
											//ViewHelpers.notify("Login successfully","success");
											
								      }else{
										 
										 // ViewHelpers.notify("Sorry! Currently, this User is not active","error");
								      }		
									}
									else{
										// ViewHelpers.notify(response.message,"error");
									}							
								break;
							}
							
						});
					}
					//return retVal;
				}
 	  } 
}())


$(document).ready(function(){
           
	 $("#authenticate").on("click",function(e){
       e.preventDefault();
   	   var username=$("#username").val();
   	   var password=$("#password").val();
       var loginData={token:Helpers.config().token};
       loginData.email=username;
       loginData.password=password;
       if(username!="" && password!=""){
       	authHelpers.login(loginData);
       }
       

      })

     $("#logout").click(function(){

     	    $.ajax({
     	    	type:"POST",
     	    	url:"./ajax.php",
     	    	data:{type:"logout"},
     	    	success:function(data){
     	    		var response=JSON.parse(data);
     	    		if(response.status){
     	    			Helpers.notify("Logout successfully","success");
     	    			setTimeout(function(){
     	    				window.location.href="index.php";
     	    			},1000)
     	    			
     	    		}
     	    	
     	    	} 
     	    })
     })

})

