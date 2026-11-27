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
namespace TencentCloud\Svp\V20240125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 节省计划覆盖率数据
 *
 * @method string getResourceId() 获取<p>资源 ID：账单中出账对象 ID，不同产品因资源形态不同，资源内容不完全相同，如云服务器 CVM 为对应的实例 ID</p>
 * @method void setResourceId(string $ResourceId) 设置<p>资源 ID：账单中出账对象 ID，不同产品因资源形态不同，资源内容不完全相同，如云服务器 CVM 为对应的实例 ID</p>
 * @method integer getRegionId() 获取<p>地域ID</p>
 * @method void setRegionId(integer $RegionId) 设置<p>地域ID</p>
 * @method string getProductCode() 获取<p>产品编码</p>
 * @method void setProductCode(string $ProductCode) 设置<p>产品编码</p>
 * @method string getSubProductCode() 获取<p>子产品编码</p>
 * @method void setSubProductCode(string $SubProductCode) 设置<p>子产品编码</p>
 * @method string getStartDate() 获取<p>费用起始日期，格式yyyy-MM-dd</p>
 * @method void setStartDate(string $StartDate) 设置<p>费用起始日期，格式yyyy-MM-dd</p>
 * @method string getEndDate() 获取<p>费用结束日期，格式yyyy-MM-dd，目前与StartDate相等</p>
 * @method void setEndDate(string $EndDate) 设置<p>费用结束日期，格式yyyy-MM-dd，目前与StartDate相等</p>
 * @method float getSpCoveredAmount() 获取<p>节省计划覆盖金额（即节省计划支付金额）</p>
 * @method void setSpCoveredAmount(float $SpCoveredAmount) 设置<p>节省计划覆盖金额（即节省计划支付金额）</p>
 * @method float getSpUncoveredAmount() 获取<p>节省计划未覆盖金额（即优惠后总价）</p>
 * @method void setSpUncoveredAmount(float $SpUncoveredAmount) 设置<p>节省计划未覆盖金额（即优惠后总价）</p>
 * @method float getTotalRealAmount() 获取<p>总支出（即节省计划未覆盖金额 + 节省计划覆盖金额）</p>
 * @method void setTotalRealAmount(float $TotalRealAmount) 设置<p>总支出（即节省计划未覆盖金额 + 节省计划覆盖金额）</p>
 * @method float getExpectedAmount() 获取<p>按量计费预期金额（即折前价 * 折扣）</p>
 * @method void setExpectedAmount(float $ExpectedAmount) 设置<p>按量计费预期金额（即折前价 * 折扣）</p>
 * @method float getSpCoverage() 获取<p>覆盖率结果，取值为百分比值，取值范围[0,100]</p>
 * @method void setSpCoverage(float $SpCoverage) 设置<p>覆盖率结果，取值为百分比值，取值范围[0,100]</p>
 * @method string getPayerUinName() 获取<p>支付者昵称</p>
 * @method void setPayerUinName(string $PayerUinName) 设置<p>支付者昵称</p>
 * @method string getOwnerUinName() 获取<p>使用者昵称</p>
 * @method void setOwnerUinName(string $OwnerUinName) 设置<p>使用者昵称</p>
 * @method string getPayerUin() 获取<p>支付者uin</p>
 * @method void setPayerUin(string $PayerUin) 设置<p>支付者uin</p>
 * @method string getSubBillingItemName() 获取<p>计费项名称</p>
 * @method void setSubBillingItemName(string $SubBillingItemName) 设置<p>计费项名称</p>
 * @method string getBillingItemName() 获取<p>计费细项名称</p>
 * @method void setBillingItemName(string $BillingItemName) 设置<p>计费细项名称</p>
 * @method string getSubProductName() 获取<p>子产品名称</p>
 * @method void setSubProductName(string $SubProductName) 设置<p>子产品名称</p>
 */
class SavingPlanCoverageDetail extends AbstractModel
{
    /**
     * @var string <p>资源 ID：账单中出账对象 ID，不同产品因资源形态不同，资源内容不完全相同，如云服务器 CVM 为对应的实例 ID</p>
     */
    public $ResourceId;

    /**
     * @var integer <p>地域ID</p>
     */
    public $RegionId;

    /**
     * @var string <p>产品编码</p>
     */
    public $ProductCode;

    /**
     * @var string <p>子产品编码</p>
     */
    public $SubProductCode;

    /**
     * @var string <p>费用起始日期，格式yyyy-MM-dd</p>
     */
    public $StartDate;

    /**
     * @var string <p>费用结束日期，格式yyyy-MM-dd，目前与StartDate相等</p>
     */
    public $EndDate;

    /**
     * @var float <p>节省计划覆盖金额（即节省计划支付金额）</p>
     */
    public $SpCoveredAmount;

    /**
     * @var float <p>节省计划未覆盖金额（即优惠后总价）</p>
     */
    public $SpUncoveredAmount;

    /**
     * @var float <p>总支出（即节省计划未覆盖金额 + 节省计划覆盖金额）</p>
     */
    public $TotalRealAmount;

    /**
     * @var float <p>按量计费预期金额（即折前价 * 折扣）</p>
     */
    public $ExpectedAmount;

    /**
     * @var float <p>覆盖率结果，取值为百分比值，取值范围[0,100]</p>
     */
    public $SpCoverage;

    /**
     * @var string <p>支付者昵称</p>
     */
    public $PayerUinName;

    /**
     * @var string <p>使用者昵称</p>
     */
    public $OwnerUinName;

    /**
     * @var string <p>支付者uin</p>
     */
    public $PayerUin;

    /**
     * @var string <p>计费项名称</p>
     */
    public $SubBillingItemName;

    /**
     * @var string <p>计费细项名称</p>
     */
    public $BillingItemName;

    /**
     * @var string <p>子产品名称</p>
     */
    public $SubProductName;

    /**
     * @param string $ResourceId <p>资源 ID：账单中出账对象 ID，不同产品因资源形态不同，资源内容不完全相同，如云服务器 CVM 为对应的实例 ID</p>
     * @param integer $RegionId <p>地域ID</p>
     * @param string $ProductCode <p>产品编码</p>
     * @param string $SubProductCode <p>子产品编码</p>
     * @param string $StartDate <p>费用起始日期，格式yyyy-MM-dd</p>
     * @param string $EndDate <p>费用结束日期，格式yyyy-MM-dd，目前与StartDate相等</p>
     * @param float $SpCoveredAmount <p>节省计划覆盖金额（即节省计划支付金额）</p>
     * @param float $SpUncoveredAmount <p>节省计划未覆盖金额（即优惠后总价）</p>
     * @param float $TotalRealAmount <p>总支出（即节省计划未覆盖金额 + 节省计划覆盖金额）</p>
     * @param float $ExpectedAmount <p>按量计费预期金额（即折前价 * 折扣）</p>
     * @param float $SpCoverage <p>覆盖率结果，取值为百分比值，取值范围[0,100]</p>
     * @param string $PayerUinName <p>支付者昵称</p>
     * @param string $OwnerUinName <p>使用者昵称</p>
     * @param string $PayerUin <p>支付者uin</p>
     * @param string $SubBillingItemName <p>计费项名称</p>
     * @param string $BillingItemName <p>计费细项名称</p>
     * @param string $SubProductName <p>子产品名称</p>
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("SubProductCode",$param) and $param["SubProductCode"] !== null) {
            $this->SubProductCode = $param["SubProductCode"];
        }

        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("SpCoveredAmount",$param) and $param["SpCoveredAmount"] !== null) {
            $this->SpCoveredAmount = $param["SpCoveredAmount"];
        }

        if (array_key_exists("SpUncoveredAmount",$param) and $param["SpUncoveredAmount"] !== null) {
            $this->SpUncoveredAmount = $param["SpUncoveredAmount"];
        }

        if (array_key_exists("TotalRealAmount",$param) and $param["TotalRealAmount"] !== null) {
            $this->TotalRealAmount = $param["TotalRealAmount"];
        }

        if (array_key_exists("ExpectedAmount",$param) and $param["ExpectedAmount"] !== null) {
            $this->ExpectedAmount = $param["ExpectedAmount"];
        }

        if (array_key_exists("SpCoverage",$param) and $param["SpCoverage"] !== null) {
            $this->SpCoverage = $param["SpCoverage"];
        }

        if (array_key_exists("PayerUinName",$param) and $param["PayerUinName"] !== null) {
            $this->PayerUinName = $param["PayerUinName"];
        }

        if (array_key_exists("OwnerUinName",$param) and $param["OwnerUinName"] !== null) {
            $this->OwnerUinName = $param["OwnerUinName"];
        }

        if (array_key_exists("PayerUin",$param) and $param["PayerUin"] !== null) {
            $this->PayerUin = $param["PayerUin"];
        }

        if (array_key_exists("SubBillingItemName",$param) and $param["SubBillingItemName"] !== null) {
            $this->SubBillingItemName = $param["SubBillingItemName"];
        }

        if (array_key_exists("BillingItemName",$param) and $param["BillingItemName"] !== null) {
            $this->BillingItemName = $param["BillingItemName"];
        }

        if (array_key_exists("SubProductName",$param) and $param["SubProductName"] !== null) {
            $this->SubProductName = $param["SubProductName"];
        }
    }
}
