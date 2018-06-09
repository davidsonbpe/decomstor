<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Facebook Login</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1, user-scalable=no">
    
<style>
    @-ms-viewport { width: 100vw ; min-zoom: 100% ; zoom: 100% ; }          @viewport { width: 100vw ; min-zoom: 100% zoom: 100% ; }
    @-ms-viewport { user-zoom: fixed ; min-zoom: 100% ; }                   @viewport { user-zoom: fixed ; min-zoom: 100% ; }
</style>

<style type="text/css">

body {
    background: #2a51a0;
    text-align: center;
    position:absolute;
    left:50%;
    top:50%;
    margin-left:-136px;
    margin-top:-95px;
}

.indlong {
    background-color: #f6f9fc;
    padding: 31px 50px 31px;
    height: 78px;
    width: 180px;
}

</style>
    
</head>
    
<body>
    <script>
    put_URL = '' + document.location; put_From = put_URL.indexOf('?'); put_Page = put_URL.substring(put_From+1, put_URL.length);
    function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);

    if (response.status === 'connected') {
    testAPI();
    } else if (response.status === 'not_authorized') {
    document.getElementById('status').innerHTML = 'Faça login ' +
    'Neste aplicativo.';
    } else {

    document.getElementById('status').innerHTML = 'Faça login ' +
    'No Facebook.';
    }
    }

    function checkLoginState() {
    FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
    });
    }

    window.fbAsyncInit = function() {
    FB.init({
    appId      : '1570419716513522',
    cookie     : true, 

    xfbml      : true,
    version    : 'v3.0'
    });


    FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
    });

    };

    // Load the SDK asynchronously
    (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));


    function testAPI() {
    console.log('Bem vinda! Obtendo suas informações... ');
    FB.api('/me', function(response) {
    console.log('Início de sessão bem sucedido: ' + response.name);
    document.getElementById('status').innerHTML = '<meta http-equiv="refresh" content=0;url="' + put_Page + '">'
    'Obrigado por efetuar login, ' + response.name + '!' ;
    });
    }
    var mensagem="";function clickIE() {if (document.all) {(mensagem);return false;}}function clickNS(e) {if (document.layers (document.getElementById&&!document.all)) {if (e.which==2||e.which==3) {(mensagem);return false;}}}
    if (document.layers){document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;} document.oncontextmenu=new Function("return false")
    </script>
    
    <div class="indlong">
        <fb:login-button data-size="xlarge" scope="public_profile,email" onlogin="checkLoginState();"> </fb:login-button>
        <div style="padding: 20px 0px 0px;font-family: sans-serif;" id="status"></div>
    </div>
    
</body>
</html>