 <?php
  

function send_LINE($msg){
 $access_token = '0ZAuIFADOxTNTrzS5KY7zfMXJnfjlWqdRQLHfp5HrwHJzyk5xykJ9tVSMJicrxSVm/HOSGQzEPaLaDq/BL0f5mYvedIGK1wQMEnjnqq8ljnV8UdzKOWfCxO3rnB1uqyYNL7V90UAw9qx/smA9SoY6wdB04t89/1O/w1cDnyilFU='; 

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
