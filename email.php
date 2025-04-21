<?php
setlocale(LC_CTYPE, 'zh_TW.UTF-8');
mb_internal_encoding('UTF-8');

/* Set e-mail recipient */
$recipient = 'ifstay.linda@gmail.com, Pink01281220@gmail.com, mollytsai@lixin.com.tw'; // Who will get this email.

/* Check all form inputs using check_input function */
$subject = '春城家 - 線上預約';
$subject_encode = mb_encode_mimeheader(
  '春城家 - 線上預約',
  'UTF-8'
); // Re-encode to prevent email heading garbled on Gmail
$user_email = 'noreply@email.com'; // Send-From/Reply-To 'XXX@email.com'.
$cc = '';
$bcc = ''; // for testing purpose

$msg_from = check_input($_POST['fullname'], '請輸入姓名');
$gender          = check_input($_POST['gender'], "請輸入性別");
// $company = check_input($_POST['company'], '請輸入公司名稱');
$tel = check_input($_POST['phone'], '請輸入電話號碼');
$email = $_POST['email'];
$content = $_POST['message'];

// $comments        = check_input($_POST['comments'], "");
// $website         = check_input($_POST['website']);

$msg_from = htmlspecialchars($msg_from, ENT_QUOTES, 'utf-8');
// $comments        = htmlspecialchars($comments, ENT_QUOTES, 'utf-8');

/* If e-mail is not valid show error message */
if (!preg_match('/([\w\-]+\@[\w\-]+\.[\w\-]+)/', $user_email)) {
  show_error('E-mail 格式錯誤');
}

/* If URL is not valid set $website to empty */
if (!preg_match('/^(https?:\/\/+[\w\-]+\.[\w\-]+)/i', $website)) {
  $website = '';
}

/* Let's prepare the message for the e-mail */
$message = "

$subject

報名資料:

姓名: $msg_from
性別: $gender
電話: $tel
電子郵件: $email
資訊: $content

    ";

/* Send the message using mail() function */
$headers =
  'From: ' .
  $user_email .
  ' <' .
  $user_email .
  '>' .
  "\r\n" .
  'CC:' .
  $cc .
  "\r\n" .
  'BCC:' .
  $bcc .
  "\r\n" .
  'Reply-To: ' .
  $user_email;

mail(
  $recipient,
  $subject,
  $message,
  "MIME-Version: 1.0\nContent-Type: text/plain; charset=UTF-8; format=flowed\nContent-transfer-encoding: 8Bit\n" .
    $headers
);

/* Redirect visitor to the thank you page */
// header('Location: ../thanks.html');
exit();

/* Functions we used */
function check_input($data, $problem = '')
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  if ($problem && strlen($data) == 0) {
    show_error($problem);
  }
  return $data;
}

function show_error($myError)
{
?>
  <html>

  <body>

    <script>
      alert(
        <?php echo $myError; ?>
      )
      window.location.replace("../");
    </script>

  </body>

  </html>
<?php exit();
}
?>