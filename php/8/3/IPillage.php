<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/3
 * Time: 17:11
 */

interface IPillage
{
    function emptyBankAccount();
    function burnDocuments();
}

class Executive  implements IPillage{
    private $totalStockOptions;
    function emptyBankAccount()
    {
        // TODO: Implement emptyBankAccount() method.
        echo "Call CFO and ask to transfer funds to Swiss bank account.";
    }

    function burnDocuments()
    {
        // TODO: Implement burnDocuments() method.
        echo "Torch the office suite";
    }
}