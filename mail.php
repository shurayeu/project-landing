<?php
if ($_SERVER['REQUEST_METHOD'] !='POST') { 
 die();
}
$to      = 'ip.holod@mail.ru';
$subject = 'Заявка с сайта';
$message = '';
$fields = [];


$fields['Имя'] = $_POST['user_name'];
$fields['Телефон'] = $_POST['user_phone'];



foreach($fields as $key => $value){
    if(!$value) {
        continue;
    }
 $message .= $key.': '.$value."\n";
}

mail($to, $subject, $message);

header('location: index.html');
?>