<?php
$message = 'zdaroy';
$to = 'imithos321@gmail.com';
$from = 'imithos321@gmail.com';
$subj = 'topic';

$subj = '=?utf-8?B?' . base64_encode($subj) . '?=';
$headers = "From $from\r\nReply-to: $from\r\n
Content-type: text/plain; charset=utf-8\r\n";

mail($to, $subj, $message, $headers);