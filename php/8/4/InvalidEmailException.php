<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/5
 * Time: 22:40
 */

class InvalidEmailException extends Exception
{
    function __construct($message, $email)
    {
        $this->message = $message;
        $this->notifyAdmin($email);
    }
    private function notifyAdmin($email){
        mail("admin@example.org","INVALID EMAIL",$email,"From:web@example.com");
    }
}

/* Subscribe 类验证电子邮件地址并将其加入数据库*/
class Subscribe{
    function validateEmail($email){

        try{
            if($email ==""){
                throw new Exception("You must enter an e-mail address!");
            }else{
                list($user,$domain) = explode("@",$email);
                if (! checkdnsrr($domain,"MX"))
                    throw new InvalidArgumentException(
                        "Invalid e-mail address!",$email);
                else
                    return 1;
            }
        }
        catch (Exception $e){
            echo $e->getMessage();
        }catch (InvalidArgumentException $e){
            echo $e->getMessage();
            $e->notifyAdmin($email);
        }
    }
    /*将电子邮件地址加入数据库*/
    function subscribeUser(){
        echo $this->email."added to the database!";
    }
}
//假设电子邮件来自订阅表格
$_POST['email'] = "someuser@example.com";
/*尝试验证并添加地址到数据库*/
if(isset($_POST['email'])){
    $subscribe = new Subscribe();
    if ($subscribe->validateEmail($_POST['email']))
        $subscribe->subscribeUser($_POST['email']);
}
