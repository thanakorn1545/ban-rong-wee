<?php 
  $access_token = 'bD1buYHvPZZ1RkFAPO8iggutYfg6UdqkZby1O0dZDQmfbnj6MvxTBOXyXsWvekmuDksiFfPbFao/6yjJJ71Jsq//jIuVBymk66FAkY1Vvpu2ENjyHaxz1OsgrATyyqGTxTOT/aEBeYaKomVwiYXTNgdB04t89/1O/w1cDnyilFU=';
  $url = 'https://api.line.me/v1/oauth/verify';
  $headers = array('Authorization: Bearer ' . bD1buYHvPZZ1RkFAPO8iggutYfg6UdqkZby1O0dZDQmfbnj6MvxTBOXyXsWvekmuDksiFfPbFao/6yjJJ71Jsq//jIuVBymk66FAkY1Vvpu2ENjyHaxz1OsgrATyyqGTxTOT/aEBeYaKomVwiYXTNgdB04t89/1O/w1cDnyilFU=);
  $ch = curl_init($url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  $result = curl_exec($ch);curl_close($ch);
  echo $result;
