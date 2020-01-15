<?php


$to = 'kurovskoe_evamed@mail.ru';
$subject = 'Заявка с сайта клиники';
$name=''; $phone=''; $email=''; $service=''; $date='';
if (!empty($_POST["name"])) {
    $name = '<p style = "font-size: 1.2em; color: #333" ><span style = "font-weight: 600" > ФИО:</span > '.$_POST['name'].' </p>';
};
if(!empty($_POST["phone"])) {
    $phone = '<p style="font-size: 1.2em; color: #333"><span style="font-weight: 600">Телефон:</span> ' . $_POST['phone'] . '</p>';
};
if(!empty($_POST["email"])) {
    $email = '<p style="font-size: 1.2em; color: #333"><span style="font-weight: 600">email:</span> ' . $_POST['email'] . '</p>';
}
if(!empty($_POST["service"])) {
    $service = '<p style="font-size: 1.2em; color: #333"><span style="font-weight: 600">email:</span> ' . $_POST['service'] . '</p>';
}
if(!empty($_POST["date"])) {
    $date = '<p style="font-size: 1.2em; color: #333"><span style="font-weight: 600">email:</span> ' . $_POST['date'] . '</p>';
}
$message = '
                <html>
                    <head>
                        <title>' . $subject . '</title>
                    </head>
                    <body style="padding: 20px; border: 1px solid #000">'
                        . $name . $phone . $email . $service . $date .
                    '</body>
                </html>';
$headers = "Content-type: text/html; charset=utf-8 \r\n";
mail($to, $subject, $message, $headers);
?>