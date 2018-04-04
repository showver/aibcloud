<?php
    //加载类（require_once里面的内容自己判断）
    require_once('extra/PHPMailer-master/src/Exception.php');
    require_once('extra/PHPMailer-master/src/PHPMailer.php');
    require_once('extra/PHPMailer-master/src/SMTP.php');
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;
    //传入接收方,主题，内容三个参数
    function myemail($to,$subject,$body){
        $mail = new PHPMailer(true);
        //Server settings
        $mail->SMTPDebug = 0;                                 //是否开启调试模式
        $mail->isSMTP();                                      
        $mail->Host = 'smtp.qq.com';  // 主机类型，qq的话默认是这个
        $mail->SMTPAuth = true;                               //是否开启SMTP authentication
        $mail->Username = '843790329@qq.com';                 //用户名
        $mail->Password = 'qnrcijoqwbgkbcgb';                 //邮箱授权码
        $mail->SMTPSecure = 'ssl';                            //是否开启传输加密
        $mail->Port = 465;                                    //TCP端口，默认465
        //Recipients
        $mail->setFrom('843790329@qq.com', 'AIBCloud');		  //发送源及发送者姓名
        $mail->addAddress($to);     //发送地址
        //Content
        $mail->isHTML(true);                                  //是否支持html格式
        $mail->Subject = $subject;							  //标题
        $mail->Body    = $body;								  //主体信息
        $status = $mail->send();

             if($status) {
                return true;
            }else{
                return false;
            }
    }