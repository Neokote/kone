<?php
 
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['phone'])) {$phone = $_POST['phone'];}


 if ($curl = curl_init()) {
        curl_setopt($curl, CURLOPT_URL, 'https://lucky.online/api-webmaster/lead.html?api_key=5defd384cf060918708709524015');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, "name=" . $_POST["name"] . "&phone=" . $_POST["phone"] . "&ip=" . $_SERVER['REMOTE_ADDR'] . "&userAgent=" .  $_SERVER ['HTTP_USER_AGENT'] . "&campaignHash=bddb9ed5-5fe6-4adc-abc7-3959fe5e07b9" . "&country_call=HU");
        $out = curl_exec($curl);
         
        curl_close($curl);
    }

 

header("Location: thanks.html ");


?>