<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/7/30
 * Time: 15:49
 */
//如果已经填写名字字段
if(isset($_POST['name'])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    printf("Hi %s!<br/>",$email);
}
?>
<form action="subscribe.php" method="post">
    <p>
        Name:<br/>
        <input type="text" id="name" name="name" size="20" maxlength="40"/>
    </p>
    <p>
        Email Address:<br/>
        <input type="text" id="email" name="email" size="20" maxlength="40"/>
    </p>
    <input type="submit" id="submit" name="submit" value="Go!"/>
</form>
