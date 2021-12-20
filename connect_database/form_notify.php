<?php
 
    $header = "ที่อยู่จัดส่งสินค้า";
    //ร้บค่าข้อมูลที่กรอกบนฟอร์ม
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $order = $_POST['order'];

    //ส่วนแสดงข้อมูลบน Line-Notify
             $message = $header.
            "\n". "หมายเลขสินค้า : " . $order .
            "\n". "ชื่อจริง : " . $fname .
            "\n". "นามสกุล : " . $lname .
            "\n". "เบอร์โทรศัพท์ : " . $phone .
            "\n". "ที่อยู่ : " . $address;

    if (isset($_POST["submit"])) {
        if ( $fname <> "" ||  $lname <> "" ||  $phone <> "" ||  $address <> "" ) {  //ถ้าข้อมูลไม่เป็นค่าว่าง 
            sendlinemessage();                                  //เรียกใช้ฟังก์ชัน sendlinemessage()
            header('Content-Type: text/html; charset=utf8');      
            $res = notify_message($message);
            header("location: ../page/shop.php");
        } else {
            header("location: ../page/shop.php");
        }
    }

    function sendlinemessage() {
		
        define('LINE_API',"https://notify-api.line.me/api/notify"); 
        define('LINE_TOKEN',"0Ge9D2xe257NYuFrcpJ8QoUsbvbfJ5S5PU6n9d2iOdU");

        function notify_message($message) {
            $queryData = array('message' => $message);
            $queryData = http_build_query($queryData,'','&');
            $headerOptions = array(
                'http' => array(
                    'method' => 'POST',
                    'header' => "Content-Type: application/x-www-form-urlencoded\r\n"
                                ."Authorization: Bearer ".LINE_TOKEN."\r\n"
                                ."Content-Length: ".strlen($queryData)."\r\n",
                    'content' => $queryData
                )
            );
            $context = stream_context_create($headerOptions);
            $result = file_get_contents(LINE_API, FALSE, $context);
            $res = json_decode($result);
            return $res;
        }
    }
