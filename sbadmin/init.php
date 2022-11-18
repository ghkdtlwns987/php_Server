<?php
    $headerCSP = "Content-Security-Policy:".
             "report-uri ./csp_log/log.php;"; // 보안 정책 오류 레포트 URL 지정(meta 태그에선 사용불가)

    header($headerCSP);

    ini_set("display_errors", true);

    session_start();

    $db = mysqli_connect("localhost", "webadmin", "webadmin2022!");
    mysqli_select_db($db, "webadmin");

    function isLogin(){
        if (isset($_SESSION['uIdx'])) return true;
        return false;
    }
