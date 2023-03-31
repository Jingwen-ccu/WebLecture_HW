


<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $_SERVER['REQUEST_METHOD'] = 'POST';
  }
  
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // 檢查提交的密碼是否正確
  if ($_POST['password'] === 'mypassword') {
    // 如果密碼正確，返回保護資訊的頁面
    header('Location: protected_page.html');
    exit;
  } else {
    // 如果密碼不正確，返回輸入密碼的頁面
    header('Location: password_form.html');
    exit;
  }
} else {
  // 如果使用了不允許的 HTTP 方法，返回錯誤訊息
  http_response_code(405);
  header('Allow: POST');
  echo 'HTTP Method Not Allowed';
  exit;
}
?>