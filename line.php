 <?php
  

function send_LINE($msg){
 $access_token = 'y06Xn8jUWBr7xV1d1CiH/gXQ/L2T6L3BI3I6r6S6DDVpCUWJVr5sJ6sxO/q1q+gGnm9vkgmFfjhpL0SPyPk1KDYaMV12OTr21ms/BoBiL2Qonu/vJwweuwuHp9AyPSR6PEz9A/QA1heT4FQD62t45gdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U77428784a990a4d68382bb2820e34669',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
