<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 消耗组件明细
 *
 * @method string getComponentCodeName() 获取<p>组件类型名称</p>
 * @method void setComponentCodeName(string $ComponentCodeName) 设置<p>组件类型名称</p>
 * @method string getItemCodeName() 获取<p>组件名称</p>
 * @method void setItemCodeName(string $ItemCodeName) 设置<p>组件名称</p>
 * @method string getSinglePrice() 获取<p>刊例价</p>
 * @method void setSinglePrice(string $SinglePrice) 设置<p>刊例价</p>
 * @method string getPriceUnit() 获取<p>刊例价单位</p>
 * @method void setPriceUnit(string $PriceUnit) 设置<p>刊例价单位</p>
 * @method string getUsedAmount() 获取<p>用量</p>
 * @method void setUsedAmount(string $UsedAmount) 设置<p>用量</p>
 * @method string getUsedAmountUnit() 获取<p>用量单位</p>
 * @method void setUsedAmountUnit(string $UsedAmountUnit) 设置<p>用量单位</p>
 * @method string getCost() 获取<p>原价</p>
 * @method void setCost(string $Cost) 设置<p>原价</p>
 * @method string getDiscount() 获取<p>折扣</p>
 * @method void setDiscount(string $Discount) 设置<p>折扣</p>
 * @method string getRealCost() 获取<p>折后价</p>
 * @method void setRealCost(string $RealCost) 设置<p>折后价</p>
 * @method string getVoucherPayAmount() 获取<p>代金券支付金额</p>
 * @method void setVoucherPayAmount(string $VoucherPayAmount) 设置<p>代金券支付金额</p>
 * @method string getCashPayAmount() 获取<p>现金支付金额</p>
 * @method void setCashPayAmount(string $CashPayAmount) 设置<p>现金支付金额</p>
 * @method string getIncentivePayAmount() 获取<p>赠送金支付金额</p>
 * @method void setIncentivePayAmount(string $IncentivePayAmount) 设置<p>赠送金支付金额</p>
 * @method string getComponentCode() 获取<p>组件类型code</p>
 * @method void setComponentCode(string $ComponentCode) 设置<p>组件类型code</p>
 * @method string getItemCode() 获取<p>组件名称code</p>
 * @method void setItemCode(string $ItemCode) 设置<p>组件名称code</p>
 */
class CostComponentSet extends AbstractModel
{
    /**
     * @var string <p>组件类型名称</p>
     */
    public $ComponentCodeName;

    /**
     * @var string <p>组件名称</p>
     */
    public $ItemCodeName;

    /**
     * @var string <p>刊例价</p>
     */
    public $SinglePrice;

    /**
     * @var string <p>刊例价单位</p>
     */
    public $PriceUnit;

    /**
     * @var string <p>用量</p>
     */
    public $UsedAmount;

    /**
     * @var string <p>用量单位</p>
     */
    public $UsedAmountUnit;

    /**
     * @var string <p>原价</p>
     */
    public $Cost;

    /**
     * @var string <p>折扣</p>
     */
    public $Discount;

    /**
     * @var string <p>折后价</p>
     */
    public $RealCost;

    /**
     * @var string <p>代金券支付金额</p>
     */
    public $VoucherPayAmount;

    /**
     * @var string <p>现金支付金额</p>
     */
    public $CashPayAmount;

    /**
     * @var string <p>赠送金支付金额</p>
     */
    public $IncentivePayAmount;

    /**
     * @var string <p>组件类型code</p>
     */
    public $ComponentCode;

    /**
     * @var string <p>组件名称code</p>
     */
    public $ItemCode;

    /**
     * @param string $ComponentCodeName <p>组件类型名称</p>
     * @param string $ItemCodeName <p>组件名称</p>
     * @param string $SinglePrice <p>刊例价</p>
     * @param string $PriceUnit <p>刊例价单位</p>
     * @param string $UsedAmount <p>用量</p>
     * @param string $UsedAmountUnit <p>用量单位</p>
     * @param string $Cost <p>原价</p>
     * @param string $Discount <p>折扣</p>
     * @param string $RealCost <p>折后价</p>
     * @param string $VoucherPayAmount <p>代金券支付金额</p>
     * @param string $CashPayAmount <p>现金支付金额</p>
     * @param string $IncentivePayAmount <p>赠送金支付金额</p>
     * @param string $ComponentCode <p>组件类型code</p>
     * @param string $ItemCode <p>组件名称code</p>
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
        if (array_key_exists("ComponentCodeName",$param) and $param["ComponentCodeName"] !== null) {
            $this->ComponentCodeName = $param["ComponentCodeName"];
        }

        if (array_key_exists("ItemCodeName",$param) and $param["ItemCodeName"] !== null) {
            $this->ItemCodeName = $param["ItemCodeName"];
        }

        if (array_key_exists("SinglePrice",$param) and $param["SinglePrice"] !== null) {
            $this->SinglePrice = $param["SinglePrice"];
        }

        if (array_key_exists("PriceUnit",$param) and $param["PriceUnit"] !== null) {
            $this->PriceUnit = $param["PriceUnit"];
        }

        if (array_key_exists("UsedAmount",$param) and $param["UsedAmount"] !== null) {
            $this->UsedAmount = $param["UsedAmount"];
        }

        if (array_key_exists("UsedAmountUnit",$param) and $param["UsedAmountUnit"] !== null) {
            $this->UsedAmountUnit = $param["UsedAmountUnit"];
        }

        if (array_key_exists("Cost",$param) and $param["Cost"] !== null) {
            $this->Cost = $param["Cost"];
        }

        if (array_key_exists("Discount",$param) and $param["Discount"] !== null) {
            $this->Discount = $param["Discount"];
        }

        if (array_key_exists("RealCost",$param) and $param["RealCost"] !== null) {
            $this->RealCost = $param["RealCost"];
        }

        if (array_key_exists("VoucherPayAmount",$param) and $param["VoucherPayAmount"] !== null) {
            $this->VoucherPayAmount = $param["VoucherPayAmount"];
        }

        if (array_key_exists("CashPayAmount",$param) and $param["CashPayAmount"] !== null) {
            $this->CashPayAmount = $param["CashPayAmount"];
        }

        if (array_key_exists("IncentivePayAmount",$param) and $param["IncentivePayAmount"] !== null) {
            $this->IncentivePayAmount = $param["IncentivePayAmount"];
        }

        if (array_key_exists("ComponentCode",$param) and $param["ComponentCode"] !== null) {
            $this->ComponentCode = $param["ComponentCode"];
        }

        if (array_key_exists("ItemCode",$param) and $param["ItemCode"] !== null) {
            $this->ItemCode = $param["ItemCode"];
        }
    }
}
