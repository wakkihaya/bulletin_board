<?php
require "twitteroauth/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

$consumer_key  = 'auBwqDSRyDRNw0sIjuIfNmzr9';
$consumer_secret = 'OJnMLrx5MjmefZ0bh8zA5PeR2E2EITZFKVU10kpRfAl3Uz34BK';
$access_key = '2215689648-XuGu6HEMQvpGbzz70qxDxhh2CHR5A6qhuma2LvH';
$access_secret = 'DkSwH8nJudBf7Akc0X6U91Rtw057XRhS03dqjCTtBnfrh';

$twitter =new TwitterOAuth($consumer_key,$consumer_secret,$access_key,$access_secret);
?>