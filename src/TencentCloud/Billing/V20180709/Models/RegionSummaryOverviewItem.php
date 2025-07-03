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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 按地域汇总消费详情
 *
 * @method string getRegionId() 获取地域ID
 * @method void setRegionId(string $RegionId) 设置地域ID
 * @method string getRegionName() 获取地域名称：资源所属地域，例如华南地区（广州）
 * @method void setRegionName(string $RegionName) 设置地域名称：资源所属地域，例如华南地区（广州）
 * @method string getRealTotalCostRatio() 获取费用所占百分比，两位小数
 * @method void setRealTotalCostRatio(string $RealTotalCostRatio) 设置费用所占百分比，两位小数
 * @method string getRealTotalCost() 获取优惠后总价
 * @method void setRealTotalCost(string $RealTotalCost) 设置优惠后总价
 * @method string getCashPayAmount() 获取现金账户支出：通过现金账户支付的金额
 * @method void setCashPayAmount(string $CashPayAmount) 设置现金账户支出：通过现金账户支付的金额
 * @method string getIncentivePayAmount() 获取赠送账户支出：使用赠送金支付的金额
 * @method void setIncentivePayAmount(string $IncentivePayAmount) 设置赠送账户支出：使用赠送金支付的金额
 * @method string getVoucherPayAmount() 获取优惠券支出：使用各类优惠券（如代金券、现金券等）支付的金额
 * @method void setVoucherPayAmount(string $VoucherPayAmount) 设置优惠券支出：使用各类优惠券（如代金券、现金券等）支付的金额
 * @method string getTransferPayAmount() 获取分成金账户支出：通过分成金账户支付的金额
 * @method void setTransferPayAmount(string $TransferPayAmount) 设置分成金账户支出：通过分成金账户支付的金额
 * @method string getBillMonth() 获取账单月份，格式2019-08
 * @method void setBillMonth(string $BillMonth) 设置账单月份，格式2019-08
 * @method string getTotalCost() 获取原价，单位为元。TotalCost字段自账单3.0（即2021-05）之后开始生效，账单3.0之前返回"-"。合同价的情况下，TotalCost字段与官网价格存在差异，也返回“-”。
 * @method void setTotalCost(string $TotalCost) 设置原价，单位为元。TotalCost字段自账单3.0（即2021-05）之后开始生效，账单3.0之前返回"-"。合同价的情况下，TotalCost字段与官网价格存在差异，也返回“-”。
 */
class RegionSummaryOverviewItem extends AbstractModel
{
    /**
     * @var string 地域ID
     */
    public $RegionId;

    /**
     * @var string 地域名称：资源所属地域，例如华南地区（广州）
     */
    public $RegionName;

    /**
     * @var string 费用所占百分比，两位小数
     */
    public $RealTotalCostRatio;

    /**
     * @var string 优惠后总价
     */
    public $RealTotalCost;

    /**
     * @var string 现金账户支出：通过现金账户支付的金额
     */
    public $CashPayAmount;

    /**
     * @var string 赠送账户支出：使用赠送金支付的金额
     */
    public $IncentivePayAmount;

    /**
     * @var string 优惠券支出：使用各类优惠券（如代金券、现金券等）支付的金额
     */
    public $VoucherPayAmount;

    /**
     * @var string 分成金账户支出：通过分成金账户支付的金额
     */
    public $TransferPayAmount;

    /**
     * @var string 账单月份，格式2019-08
     */
    public $BillMonth;

    /**
     * @var string 原价，单位为元。TotalCost字段自账单3.0（即2021-05）之后开始生效，账单3.0之前返回"-"。合同价的情况下，TotalCost字段与官网价格存在差异，也返回“-”。
     */
    public $TotalCost;

    /**
     * @param string $RegionId 地域ID
     * @param string $RegionName 地域名称：资源所属地域，例如华南地区（广州）
     * @param string $RealTotalCostRatio 费用所占百分比，两位小数
     * @param string $RealTotalCost 优惠后总价
     * @param string $CashPayAmount 现金账户支出：通过现金账户支付的金额
     * @param string $IncentivePayAmount 赠送账户支出：使用赠送金支付的金额
     * @param string $VoucherPayAmount 优惠券支出：使用各类优惠券（如代金券、现金券等）支付的金额
     * @param string $TransferPayAmount 分成金账户支出：通过分成金账户支付的金额
     * @param string $BillMonth 账单月份，格式2019-08
     * @param string $TotalCost 原价，单位为元。TotalCost字段自账单3.0（即2021-05）之后开始生效，账单3.0之前返回"-"。合同价的情况下，TotalCost字段与官网价格存在差异，也返回“-”。
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
        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("RealTotalCostRatio",$param) and $param["RealTotalCostRatio"] !== null) {
            $this->RealTotalCostRatio = $param["RealTotalCostRatio"];
        }

        if (array_key_exists("RealTotalCost",$param) and $param["RealTotalCost"] !== null) {
            $this->RealTotalCost = $param["RealTotalCost"];
        }

        if (array_key_exists("CashPayAmount",$param) and $param["CashPayAmount"] !== null) {
            $this->CashPayAmount = $param["CashPayAmount"];
        }

        if (array_key_exists("IncentivePayAmount",$param) and $param["IncentivePayAmount"] !== null) {
            $this->IncentivePayAmount = $param["IncentivePayAmount"];
        }

        if (array_key_exists("VoucherPayAmount",$param) and $param["VoucherPayAmount"] !== null) {
            $this->VoucherPayAmount = $param["VoucherPayAmount"];
        }

        if (array_key_exists("TransferPayAmount",$param) and $param["TransferPayAmount"] !== null) {
            $this->TransferPayAmount = $param["TransferPayAmount"];
        }

        if (array_key_exists("BillMonth",$param) and $param["BillMonth"] !== null) {
            $this->BillMonth = $param["BillMonth"];
        }

        if (array_key_exists("TotalCost",$param) and $param["TotalCost"] !== null) {
            $this->TotalCost = $param["TotalCost"];
        }
    }
}
