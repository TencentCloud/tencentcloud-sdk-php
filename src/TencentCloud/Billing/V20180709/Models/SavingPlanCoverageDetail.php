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
 * 节省计划覆盖率数据
 *
 * @method string getResourceId() 获取资源 ID：账单中出账对象 ID，不同产品因资源形态不同，资源内容不完全相同，如云服务器 CVM 为对应的实例 ID
 * @method void setResourceId(string $ResourceId) 设置资源 ID：账单中出账对象 ID，不同产品因资源形态不同，资源内容不完全相同，如云服务器 CVM 为对应的实例 ID
 * @method integer getRegionId() 获取地域ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionId(integer $RegionId) 设置地域ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductCode() 获取产品编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductCode(string $ProductCode) 设置产品编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubProductCode() 获取子产品编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubProductCode(string $SubProductCode) 设置子产品编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartDate() 获取费用起始日期，格式yyyy-MM-dd
 * @method void setStartDate(string $StartDate) 设置费用起始日期，格式yyyy-MM-dd
 * @method string getEndDate() 获取费用结束日期，格式yyyy-MM-dd，目前与StartDate相等
 * @method void setEndDate(string $EndDate) 设置费用结束日期，格式yyyy-MM-dd，目前与StartDate相等
 * @method float getSpCoveredAmount() 获取节省计划覆盖金额（即节省计划支付金额）
 * @method void setSpCoveredAmount(float $SpCoveredAmount) 设置节省计划覆盖金额（即节省计划支付金额）
 * @method float getSpUncoveredAmount() 获取节省计划未覆盖金额（即优惠后总价）
 * @method void setSpUncoveredAmount(float $SpUncoveredAmount) 设置节省计划未覆盖金额（即优惠后总价）
 * @method float getTotalRealAmount() 获取总支出（即节省计划未覆盖金额 + 节省计划覆盖金额）
 * @method void setTotalRealAmount(float $TotalRealAmount) 设置总支出（即节省计划未覆盖金额 + 节省计划覆盖金额）
 * @method float getExpectedAmount() 获取按量计费预期金额（即折前价 * 折扣）
 * @method void setExpectedAmount(float $ExpectedAmount) 设置按量计费预期金额（即折前价 * 折扣）
 * @method float getSpCoverage() 获取覆盖率结果，取值[0, 100]
 * @method void setSpCoverage(float $SpCoverage) 设置覆盖率结果，取值[0, 100]
 */
class SavingPlanCoverageDetail extends AbstractModel
{
    /**
     * @var string 资源 ID：账单中出账对象 ID，不同产品因资源形态不同，资源内容不完全相同，如云服务器 CVM 为对应的实例 ID
     */
    public $ResourceId;

    /**
     * @var integer 地域ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionId;

    /**
     * @var string 产品编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductCode;

    /**
     * @var string 子产品编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubProductCode;

    /**
     * @var string 费用起始日期，格式yyyy-MM-dd
     */
    public $StartDate;

    /**
     * @var string 费用结束日期，格式yyyy-MM-dd，目前与StartDate相等
     */
    public $EndDate;

    /**
     * @var float 节省计划覆盖金额（即节省计划支付金额）
     */
    public $SpCoveredAmount;

    /**
     * @var float 节省计划未覆盖金额（即优惠后总价）
     */
    public $SpUncoveredAmount;

    /**
     * @var float 总支出（即节省计划未覆盖金额 + 节省计划覆盖金额）
     */
    public $TotalRealAmount;

    /**
     * @var float 按量计费预期金额（即折前价 * 折扣）
     */
    public $ExpectedAmount;

    /**
     * @var float 覆盖率结果，取值[0, 100]
     */
    public $SpCoverage;

    /**
     * @param string $ResourceId 资源 ID：账单中出账对象 ID，不同产品因资源形态不同，资源内容不完全相同，如云服务器 CVM 为对应的实例 ID
     * @param integer $RegionId 地域ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductCode 产品编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubProductCode 子产品编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartDate 费用起始日期，格式yyyy-MM-dd
     * @param string $EndDate 费用结束日期，格式yyyy-MM-dd，目前与StartDate相等
     * @param float $SpCoveredAmount 节省计划覆盖金额（即节省计划支付金额）
     * @param float $SpUncoveredAmount 节省计划未覆盖金额（即优惠后总价）
     * @param float $TotalRealAmount 总支出（即节省计划未覆盖金额 + 节省计划覆盖金额）
     * @param float $ExpectedAmount 按量计费预期金额（即折前价 * 折扣）
     * @param float $SpCoverage 覆盖率结果，取值[0, 100]
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
    }
}
