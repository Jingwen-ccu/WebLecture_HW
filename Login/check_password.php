<?php
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
?>
