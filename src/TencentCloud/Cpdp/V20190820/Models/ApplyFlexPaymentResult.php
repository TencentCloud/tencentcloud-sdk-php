<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 付款结果
 *
 * @method string getOrderId() 获取订单ID
 * @method void setOrderId(string $OrderId) 设置订单ID
 * @method string getAmountBeforeTax() 获取税前金额
 * @method void setAmountBeforeTax(string $AmountBeforeTax) 设置税前金额
 * @method string getAmountAfterTax() 获取税后金额
 * @method void setAmountAfterTax(string $AmountAfterTax) 设置税后金额
 * @method string getTax() 获取税金
 * @method void setTax(string $Tax) 设置税金
 * @method string getVat() 获取增值税
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVat(string $Vat) 设置增值税
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndividualIncomeTax() 获取个人所得税
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndividualIncomeTax(string $IndividualIncomeTax) 设置个人所得税
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAdditionalTaxSum() 获取附加税总税额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdditionalTaxSum(string $AdditionalTaxSum) 设置附加税总税额
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAdditionalTaxItem() 获取附加税税项。格式为JSON格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdditionalTaxItem(string $AdditionalTaxItem) 设置附加税税项。格式为JSON格式
注意：此字段可能返回 null，表示取不到有效值。
 */
class ApplyFlexPaymentResult extends AbstractModel
{
    /**
     * @var string 订单ID
     */
    public $OrderId;

    /**
     * @var string 税前金额
     */
    public $AmountBeforeTax;

    /**
     * @var string 税后金额
     */
    public $AmountAfterTax;

    /**
     * @var string 税金
     */
    public $Tax;

    /**
     * @var string 增值税
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vat;

    /**
     * @var string 个人所得税
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndividualIncomeTax;

    /**
     * @var string 附加税总税额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdditionalTaxSum;

    /**
     * @var string 附加税税项。格式为JSON格式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdditionalTaxItem;

    /**
     * @param string $OrderId 订单ID
     * @param string $AmountBeforeTax 税前金额
     * @param string $AmountAfterTax 税后金额
     * @param string $Tax 税金
     * @param string $Vat 增值税
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndividualIncomeTax 个人所得税
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AdditionalTaxSum 附加税总税额
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AdditionalTaxItem 附加税税项。格式为JSON格式
注意：此字段可能返回 null，表示取不到有效值。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("AmountBeforeTax",$param) and $param["AmountBeforeTax"] !== null) {
            $this->AmountBeforeTax = $param["AmountBeforeTax"];
        }

        if (array_key_exists("AmountAfterTax",$param) and $param["AmountAfterTax"] !== null) {
            $this->AmountAfterTax = $param["AmountAfterTax"];
        }

        if (array_key_exists("Tax",$param) and $param["Tax"] !== null) {
            $this->Tax = $param["Tax"];
        }

        if (array_key_exists("Vat",$param) and $param["Vat"] !== null) {
            $this->Vat = $param["Vat"];
        }

        if (array_key_exists("IndividualIncomeTax",$param) and $param["IndividualIncomeTax"] !== null) {
            $this->IndividualIncomeTax = $param["IndividualIncomeTax"];
        }

        if (array_key_exists("AdditionalTaxSum",$param) and $param["AdditionalTaxSum"] !== null) {
            $this->AdditionalTaxSum = $param["AdditionalTaxSum"];
        }

        if (array_key_exists("AdditionalTaxItem",$param) and $param["AdditionalTaxItem"] !== null) {
            $this->AdditionalTaxItem = $param["AdditionalTaxItem"];
        }
    }
}
