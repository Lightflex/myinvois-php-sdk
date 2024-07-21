<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Ubl;

use Klsheng\Myinvois\Ubl\Constant\InvoiceTypeCodes;

/**
 * Debit note
 * 
 * @author Sean Kau (kliensheng2020@gmail.com)
 * @since 1.0.0
 */
class DebitNote extends Invoice
{
    public $xmlTagName = 'Invoice'; //'DebitNote'; // MyInvois System re-use back same tag name
    protected $invoiceTypeCode = InvoiceTypeCodes::DEBIT_NOTE;

    /**
     * @return DebitNoteLine[]
     */
    public function getDebitNoteLines()
    {
        return $this->invoiceLines;
    }

    /**
     * @param DebitNoteLine[] $debitNoteLines
     * @return DebitNote
     */
    public function setDebitNoteLines($debitNoteLines)
    {
        $this->invoiceLines = $debitNoteLines;
        return $this;
    }
}
