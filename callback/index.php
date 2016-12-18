<?php
    session_start();
	//	Скрипт кнопки обратного звонка для WebAsyst Shop-Script
	//	Код кнопки:
	//	<a href="javascript:openFadeIFrame('/callback/index.php'); resizeFadeIFrame(270, 300);"><img style="margin-bottom: 10px;" height="30" border="0" width="200" title="Обратный звонок" alt="Обратный звонок" src="/callback/call.png"></a>
	//	Поместите в ваш шаблон, пользуйтесь!
	//	 http://web-developer.name/post/604
    //  UPD 18/01/2013
    
    if (isset($_GET['captcha'])) {
        $_SESSION['captcha'] = strtoupper(substr (md5(rand(100, 1000)+time()), 1, 5));
        header("Content-Type: image/png");
        $im = imagecreate(55, 25) or die("Невозможно создать поток изображения");
        $background_color = imagecolorallocate($im, 255, 255, 255);
        $text_color = imagecolorallocate($im, rand(100,255), rand(100,255), rand(100,255));        
        imagestring($im, 5, 5, 3, $_SESSION['captcha'], $text_color);        
        $im = imagerotate ($im, rand(-20,20),0);
        imagepng($im);
        imagedestroy($im);
        die;
    }            
    
    header("Content-Type:	text/html; charset=UTF-8");
	//Ф-ция отправки e-mail
	function send_mail ($to, $from, $subj, $msg)
	{
		$headers  = "Content-type: text/html; charset=utf-8 \r\n";
		$headers .= "From: $from\r\n";
		return mail($to, $subj, $msg, $headers);
	}
	
	if (isset($_REQUEST['send']))
	{	

		//Проверяем данные
		$errors = "";
		if (!preg_match ('/^[ієїa-zA-Zа-яА-Я\  ]{1,255}$/ui', $_REQUEST['name'])) $errors = 'Неверное имя\n';	
		if (!preg_match ('/^\+?[\-\)\(0-9]{1,100}$/', $_REQUEST['phone'])) $errors .= 'Неверный телефон\n';	
        //#### if (strtoupper($_REQUEST['captchaID']) != $_SESSION['captcha']) $errors .= 'Неверный код подтверждения\n';
					        
		if (empty($errors))
		{
			define('DIR_ROOT', $_SERVER['DOCUMENT_ROOT'].'/published/SC/html/scripts');
			include_once(DIR_ROOT.'/includes/init.php');
			include_once(DIR_ROOT.'/cfg/tables.inc.php');			
			
			//Подключение к бд
			$DB_tree = new DataBase();
			$DB_tree->connect(SystemSettings::get('DB_HOST'), SystemSettings::get('DB_USER'), SystemSettings::get('DB_PASS'));
			$DB_tree->selectDB(SystemSettings::get('DB_NAME'));
			
            //Берем мыло для заказов
            $DB_tree->query("SELECT settings_value FROM ".SETTINGS_TABLE." WHERE settings_constant_name='CONF_ORDERS_EMAIL'");
            $mail_arr = $DB_tree->fetch_assoc();
      
			//Сообщение
			$msg = '<h2>Заказ обратного звонка</h2>Имя: <b>'.$_REQUEST['name'].'</b><br />Номер телефона: <b>'.$_REQUEST['phone'].'</b>';
			$msg .= '<br />Текст: <b>'.$_REQUEST['text'].'</b>';

			if (send_mail ($mail_arr['settings_value'], 'robot@'.$_SERVER['HTTP_HOST'], 'Заказ звонка', $msg))
			{
				$ok = '<div class="msg_ok">Спасибо, мы вам перезвоним!</div>';
			}
			else 
				{
					$ok = '<div class="error">Ошибка отправки</div>';
				}
		}
		else {
					$ok = "<script>alert('".$errors."')</script>";
				}	
	}
	else {$ok ='';}

		//Отображаем форму
		echo '
		<html>
		<head>
		<title>Заказать звонок</title>
		<style>
        body{
            font-family:Verdana;
        }
		.auth_desc {
			margin: 10px 10px 10px 20px;
			color: #bc001d;
			font-size:18px;
			font-weight:bold;
			text-align:center;
		}
        .error{
        	color: red;
            font-weight: bold;
            text-align: center;
        }
		.msg_ok{
			color: #006600;
            font-weight: bold;
            text-align: center;
		}

		.elem input, .elem select, .help, .call, #show_info{
			font-family:Verdana;
		}

		.elem {
			margin: 10px 10px 10px 0px;
			width: 260px;

		}
		.elem input, .elem select, .elem textarea  {
			color:#666666;
			font-size:12px;
			width: 240px;
			padding: 3px 5px;
			border:1px solid #ccc;
		}

		.call {
			color: #333333;
			font-size:12px;
			font-weight:bold;
		}

		.call label { font-size:11px; font-weight:normal;}
		</style>
		
		<script type="text/javascript">
			function check()
			{
				var name = document.getElementById ("name").value;
				var phone = document.getElementById ("phone").value;
                var text = document.getElementById ("text").value;
                //var captchaID = document.getElementById ("captchaID").value;

				if (name == "" || phone == "")
				{
					alert ("Заполните обязательные поля");
				}
				else
				{										
					if ((name.match (/^[ІЄЇієїa-zA-Zа-яА-Я\  ]{1,255}$/)) && (phone.match (/^\+?[\-\)\(0-9]{1,100}$/)))
					{
						document.callback.submit();
					}
					else
					{
						alert ("Введены неверные данные!");
					}
				}

			}
		</script>

		</head>
		<body>
		<div class="auth_desc">Заказать звонок!</div>		
		'.$ok.'

		<form name="callback" onsubmit="return false;" method="get">		
		<input name="send" value="1" type="hidden" />

		<div class="elem"><div class="call">Имя</div>
			<div class="block overflow">
			<span class="field">
				<input required placeholder="Ваше имя" type="text" id="name" name="name" value="" />
			</span>
			</div>
		</div>

		<div class="elem"><div class="call">Телефон</div>
			<div class="block overflow">
				<span class="field">
					<input required placeholder="+00(000)000-00-00" type="text" id="phone" name="phone" value="" />
				</span>
			</div>
		</div>

        <div class="elem"><div class="call">Сообщение</div>
			<div class="block overflow">
				<span class="field">
                    <textarea name="text" id="text" rows="2"></textarea>
				</span>
			</div>
		</div>
        
		<!--<div class="elem"><div class="call">Код</div>
			<div class="block overflow">
				<span class="field">
                    <img src="/callback/?captcha=1" alt="code" title="Введите код с картинки" />
					<input id="captchaID" required type="text" name="captchaID" value="" placeholder="Введите код с картинки" />
				</span>
			</div>
		</div>-->

		<div class="elem"><div class="call"></div>
			<div class="block overflow">
				<span class="field">
					<input onclick="check()" type="submit" value="Заказать" />
				</span>
			</div>
		</div>        
		</form>
		</body>
		</html>';
	
?>
