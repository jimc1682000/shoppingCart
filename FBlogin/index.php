<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<div id="status">  
</div>  

<fb:login-button scope="public_profile,email,user_birthday" onlogin="checkLoginState();">  
</fb:login-button>

</body>

<script type="text/javascript">

      function statusChangeCallback(response) {

        if (response.status === 'connected') {
          toServer();
        } else if (response.status === 'not_authorized') {
			console.log( 'Please log into this app.');
        } else {
          console.log( 'Please log into Facebook.');
        }
      }
	  
      function checkLoginState() {
        FB.getLoginStatus(function(response) {
          statusChangeCallback(response);
        });
      }
	  

      function toServer() {
        FB.api('/me',{fields: 'email,name,birthday'}, function(response) {
		
		alert("id : " + response.id);
		alert("name : " + response.name);
		alert("birthday : " + response.birthday);
		alert("email : " + response.email);
		
        });

      }


</script>


<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1440158429636031',
      xfbml      : true,
      version    : 'v2.5'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

</html>