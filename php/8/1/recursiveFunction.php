<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/1
 * Time: 12:59
 */
function amortizationTable( $pNum, $peridicPayment, $balance, $monthlyInterest){
    global $qian;
    //计算支付利息
    $paymentInterest = round($balance*$monthlyInterest,2);
    //计算还款额
    $paymentPrincipal = round($peridicPayment - $paymentInterest, 2);
    //用余额减去还款额
    $newBalance = round($balance - $paymentPrincipal, 2);
    //如果余额<每月还款。设置为 0
    if($newBalance < $paymentPrincipal){
        $newBalance =0;
    }
    printf ("<tr><td>%d</td>",$pNum);
    printf ("<td>$%s</td>",number_format($newBalance,2));
    printf ("<td>$%s</td>",number_format($peridicPayment,2));
    printf ("<td>$%s</td>",number_format($paymentPrincipal,2));
    printf ("<td>$%s</td></tr>",number_format($paymentInterest,2));
    $qian = $qian+$paymentInterest;
    if ($newBalance > 0) {
        $pNum++;

        amortizationTable($pNum,$peridicPayment,$newBalance,$monthlyInterest);
    }else{
//        echo $qian;
        printf ("<tr><td>%d</td>",$pNum);
        printf ("<td>$%s</td>",number_format($newBalance,2));
        printf ("<td>$%s</td>",number_format($peridicPayment,2));
        printf ("<td>$%s</td>",number_format($paymentPrincipal,2));
        printf ("<td>$%s</td></tr>",number_format($qian,2));
        return 0;
    }
}
$qian=0;
//贷款余额
$balance = 24000.00;
//贷款利率
$interestRate = .0655;
//每月利率
$monthlyInterest = $interestRate/12;
//贷款期限，单位为年
$termLength = 5;
//每年支付次数
$paymentsPerYear = 12;
//贷款迭代
$paymentNumber = 1;
//确定支付总次数
$totalPayments = $termLength*$paymentsPerYear;
//确定分期付款的利息部分
$intCalc = 1 +$interestRate/$paymentsPerYear;
//确定定期支付
$peridicPayment =$balance*pow($intCalc,$totalPayments)*($intCalc - 1)/(pow($intCalc,$totalPayments)-1);
//每月还款额限制到小数点后两位
$peridicPayment = round($peridicPayment,2);

//创建表
echo "<table width='50%' align='center' border='1'>";
echo "<tr>
       <th>Payment Number</th>    <th>Balance</th>
       <th>Payment</th>  <th>Principal</th>  <th>Interest</th>
       </tr>";

//创建递归函数
amortizationTable($paymentNumber, $peridicPayment, $balance, $monthlyInterest);
//关闭表
echo "</table>";

?>