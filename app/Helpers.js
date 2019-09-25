var Helpers=(function(){

       return {
       			config:function(){
			         return {
			         	 loginURL:"http://api-staging3.brrmedia.co.uk/account/login",
			         	 token:"5726ffec6071cb6ec47ac8f9"
			         }  
			   },
	           callBrrAPI : function(pUrl,pType,pData,callback){
					var apiURL = pUrl;
					jQuery.ajax({
						xhr: function() {
							var xhr = jQuery.ajaxSettings.xhr();
							xhr.upload.onprogress = function(e) {
								if (typeof callback == "function"){
									var percentComplete = parseInt((e.loaded / e.total)*100);
									callback('progress',percentComplete);
								}	
							};
							xhr.addEventListener("progress", function(e){
								if (typeof callback == "function"){
									if (e.lengthComputable) {
										var percentComplete = parseInt((e.loaded / e.total)*100);
										callback('progress',percentComplete);
									}
								}	
							}, false);
							return xhr;
						},
						url: apiURL,
						data: pData,
						type: pType,
						beforeSend: function(xhr){
						   xhr.withCredentials = true;
						},
						crossDomain: true,
						contentType: 'application/json',
						dataType: 'json',
						success: function(data) {
							if (typeof callback == "function"){
								callback('success',data);
							}	
						},
						complete: function(){
							if (typeof callback == "function"){
								callback('complete');
							}
						}
					}).fail(function(xhr, status, error) {
						if (typeof callback == "function"){
							callback('fail',error);
						}	
					});
				},
				convertArrayToQueryString : function (pVars){
					var strArray = [];
					for(i=0;i< pVars.length;i++) { 
						if(typeof pVars[i].name !== 'undefined' && pVars[i].name !== '' && typeof pVars[i].value !== 'undefined' && pVars[i].value !== ''){
							strArray.push(pVars[i].name + "=" + pVars[i].value); 
						}
					}
					return strArray.join("&");
				},
				notify : function(pMessage,pType){
					//pType = warn / success / info / error
					//$.notify(pMessage,pType);
					$.notify(pMessage,pType,{autoHide:true, clickToHide: false, hideDuration:4000});
				}

       }



}())