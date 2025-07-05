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
 * 消耗按资源汇总详情
 *
 * @method string getResourceId() 获取资源ID
 * @method void setResourceId(string $ResourceId) 设置资源ID
 * @method string getResourceName() 获取资源名称
 * @method void setResourceName(string $ResourceName) 设置资源名称
 * @method string getRealTotalCost() 获取折后总价
 * @method void setRealTotalCost(string $RealTotalCost) 设置折后总价
 * @method string getCashPayAmount() 获取现金花费
 * @method void setCashPayAmount(string $CashPayAmount) 设置现金花费
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getProjectName() 获取项目名称
 * @method void setProjectName(string $ProjectName) 设置项目名称
 * @method string getRegionId() 获取地域ID
 * @method void setRegionId(string $RegionId) 设置地域ID
 * @method string getRegionName() 获取地域名称
 * @method void setRegionName(string $RegionName) 设置地域名称
 * @method string getPayMode() 获取付费模式
 * @method void setPayMode(string $PayMode) 设置付费模式
 * @method string getPayModeName() 获取付费模式名称
 * @method void setPayModeName(string $PayModeName) 设置付费模式名称
 * @method string getBusinessCode() 获取产品名称代码
 * @method void setBusinessCode(string $BusinessCode) 设置产品名称代码
 * @method string getBusinessCodeName() 获取产品名称
 * @method void setBusinessCodeName(string $BusinessCodeName) 设置产品名称
 * @method string getConsumptionTypeName() 获取消耗类型
 * @method void setConsumptionTypeName(string $ConsumptionTypeName) 设置消耗类型
 * @method string getRealCost() 获取折前价
 * @method void setRealCost(string $RealCost) 设置折前价
 * @method string getFeeBeginTime() 获取费用起始时间
 * @method void setFeeBeginTime(string $FeeBeginTime) 设置费用起始时间
 * @method string getFeeEndTime() 获取费用结束时间
 * @method void setFeeEndTime(string $FeeEndTime) 设置费用结束时间
 * @method string getDayDiff() 获取天数
 * @method void setDayDiff(string $DayDiff) 设置天数
 * @method string getDailyTotalCost() 获取每日消耗
 * @method void setDailyTotalCost(string $DailyTotalCost) 设置每日消耗
 * @method string getOrderId() 获取订单号
 * @method void setOrderId(string $OrderId) 设置订单号
 * @method string getVoucherPayAmount() 获取代金券
 * @method void setVoucherPayAmount(string $VoucherPayAmount) 设置代金券
 * @method string getIncentivePayAmount() 获取赠送金
 * @method void setIncentivePayAmount(string $IncentivePayAmount) 设置赠送金
 * @method string getTransferPayAmount() 获取分成金
 * @method void setTransferPayAmount(string $TransferPayAmount) 设置分成金
 * @method string getPayerUin() 获取支付者UIN：支付者的账号 ID，账号 ID 是用户在腾讯云的唯一账号标识
 * @method void setPayerUin(string $PayerUin) 设置支付者UIN：支付者的账号 ID，账号 ID 是用户在腾讯云的唯一账号标识
 * @method string getOwnerUin() 获取使用者UIN：实际使用资源的账号 ID
 * @method void setOwnerUin(string $OwnerUin) 设置使用者UIN：实际使用资源的账号 ID
 * @method string getOperateUin() 获取操作者UIN：操作者账号 ID（预付费资源下单或后付费操作开通资源账号的 ID 或者角色 ID ）
 * @method void setOperateUin(string $OperateUin) 设置操作者UIN：操作者账号 ID（预付费资源下单或后付费操作开通资源账号的 ID 或者角色 ID ）
 * @method string getProductCode() 获取子产品编码
 * @method void setProductCode(string $ProductCode) 设置子产品编码
 * @method string getProductCodeName() 获取子产品名称：用户采购的具体产品细分类型，例如：云服务器 CVM-标准型 S1
 * @method void setProductCodeName(string $ProductCodeName) 设置子产品名称：用户采购的具体产品细分类型，例如：云服务器 CVM-标准型 S1
 * @method string getRegionType() 获取地域类型
 * @method void setRegionType(string $RegionType) 设置地域类型
 * @method string getRegionTypeName() 获取地域类型名称
 * @method void setRegionTypeName(string $RegionTypeName) 设置地域类型名称
 * @method string getExtend1() 获取扩展字段1
 * @method void setExtend1(string $Extend1) 设置扩展字段1
 * @method string getExtend2() 获取扩展字段2
 * @method void setExtend2(string $Extend2) 设置扩展字段2
 * @method string getExtend3() 获取扩展字段3
 * @method void setExtend3(string $Extend3) 设置扩展字段3
 * @method string getExtend4() 获取扩展字段4
 * @method void setExtend4(string $Extend4) 设置扩展字段4
 * @method string getExtend5() 获取扩展字段5
 * @method void setExtend5(string $Extend5) 设置扩展字段5
 * @method string getInstanceType() 获取实例类型
 * @method void setInstanceType(string $InstanceType) 设置实例类型
 * @method string getInstanceTypeName() 获取实例类型名称
 * @method void setInstanceTypeName(string $InstanceTypeName) 设置实例类型名称
 * @method string getPayTime() 获取扣费时间：结算扣费时间
 * @method void setPayTime(string $PayTime) 设置扣费时间：结算扣费时间
 * @method string getZoneName() 获取可用区：资源所属可用区，如广州三区
 * @method void setZoneName(string $ZoneName) 设置可用区：资源所属可用区，如广州三区
 * @method string getComponentConfig() 获取配置描述
 * @method void setComponentConfig(string $ComponentConfig) 设置配置描述
 * @method string getTags() 获取标签信息
 * @method void setTags(string $Tags) 设置标签信息
 */
class ConsumptionResourceSummaryDataItem extends AbstractModel
{
    /**
     * @var string 资源ID
     */
    public $ResourceId;

    /**
     * @var string 资源名称
     */
    public $ResourceName;

    /**
     * @var string 折后总价
     */
    public $RealTotalCost;

    /**
     * @var string 现金花费
     */
    public $CashPayAmount;

    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 项目名称
     */
    public $ProjectName;

    /**
     * @var string 地域ID
     */
    public $RegionId;

    /**
     * @var string 地域名称
     */
    public $RegionName;

    /**
     * @var string 付费模式
     */
    public $PayMode;

    /**
     * @var string 付费模式名称
     */
    public $PayModeName;

    /**
     * @var string 产品名称代码
     */
    public $BusinessCode;

    /**
     * @var string 产品名称
     */
    public $BusinessCodeName;

    /**
     * @var string 消耗类型
     */
    public $ConsumptionTypeName;

    /**
     * @var string 折前价
     */
    public $RealCost;

    /**
     * @var string 费用起始时间
     */
    public $FeeBeginTime;

    /**
     * @var string 费用结束时间
     */
    public $FeeEndTime;

    /**
     * @var string 天数
     */
    public $DayDiff;

    /**
     * @var string 每日消耗
     */
    public $DailyTotalCost;

    /**
     * @var string 订单号
     */
    public $OrderId;

    /**
     * @var string 代金券
     */
    public $VoucherPayAmount;

    /**
     * @var string 赠送金
     */
    public $IncentivePayAmount;

    /**
     * @var string 分成金
     */
    public $TransferPayAmount;

    /**
     * @var string 支付者UIN：支付者的账号 ID，账号 ID 是用户在腾讯云的唯一账号标识
     */
    public $PayerUin;

    /**
     * @var string 使用者UIN：实际使用资源的账号 ID
     */
    public $OwnerUin;

    /**
     * @var string 操作者UIN：操作者账号 ID（预付费资源下单或后付费操作开通资源账号的 ID 或者角色 ID ）
     */
    public $OperateUin;

    /**
     * @var string 子产品编码
     */
    public $ProductCode;

    /**
     * @var string 子产品名称：用户采购的具体产品细分类型，例如：云服务器 CVM-标准型 S1
     */
    public $ProductCodeName;

    /**
     * @var string 地域类型
     */
    public $RegionType;

    /**
     * @var string 地域类型名称
     */
    public $RegionTypeName;

    /**
     * @var string 扩展字段1
     */
    public $Extend1;

    /**
     * @var string 扩展字段2
     */
    public $Extend2;

    /**
     * @var string 扩展字段3
     */
    public $Extend3;

    /**
     * @var string 扩展字段4
     */
    public $Extend4;

    /**
     * @var string 扩展字段5
     */
    public $Extend5;

    /**
     * @var string 实例类型
     */
    public $InstanceType;

    /**
     * @var string 实例类型名称
     */
    public $InstanceTypeName;

    /**
     * @var string 扣费时间：结算扣费时间
     */
    public $PayTime;

    /**
     * @var string 可用区：资源所属可用区，如广州三区
     */
    public $ZoneName;

    /**
     * @var string 配置描述
     */
    public $ComponentConfig;

    /**
     * @var string 标签信息
     */
    public $Tags;

    /**
     * @param string $ResourceId 资源ID
     * @param string $ResourceName 资源名称
     * @param string $RealTotalCost 折后总价
     * @param string $CashPayAmount 现金花费
     * @param string $ProjectId 项目ID
     * @param string $ProjectName 项目名称
     * @param string $RegionId 地域ID
     * @param string $RegionName 地域名称
     * @param string $PayMode 付费模式
     * @param string $PayModeName 付费模式名称
     * @param string $BusinessCode 产品名称代码
     * @param string $BusinessCodeName 产品名称
     * @param string $ConsumptionTypeName 消耗类型
     * @param string $RealCost 折前价
     * @param string $FeeBeginTime 费用起始时间
     * @param string $FeeEndTime 费用结束时间
     * @param string $DayDiff 天数
     * @param string $DailyTotalCost 每日消耗
     * @param string $OrderId 订单号
     * @param string $VoucherPayAmount 代金券
     * @param string $IncentivePayAmount 赠送金
     * @param string $TransferPayAmount 分成金
     * @param string $PayerUin 支付者UIN：支付者的账号 ID，账号 ID 是用户在腾讯云的唯一账号标识
     * @param string $OwnerUin 使用者UIN：实际使用资源的账号 ID
     * @param string $OperateUin 操作者UIN：操作者账号 ID（预付费资源下单或后付费操作开通资源账号的 ID 或者角色 ID ）
     * @param string $ProductCode 子产品编码
     * @param string $ProductCodeName 子产品名称：用户采购的具体产品细分类型，例如：云服务器 CVM-标准型 S1
     * @param string $RegionType 地域类型
     * @param string $RegionTypeName 地域类型名称
     * @param string $Extend1 扩展字段1
     * @param string $Extend2 扩展字段2
     * @param string $Extend3 扩展字段3
     * @param string $Extend4 扩展字段4
     * @param string $Extend5 扩展字段5
     * @param string $InstanceType 实例类型
     * @param string $InstanceTypeName 实例类型名称
     * @param string $PayTime 扣费时间：结算扣费时间
     * @param string $ZoneName 可用区：资源所属可用区，如广州三区
     * @param string $ComponentConfig 配置描述
     * @param string $Tags 标签信息
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

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("RealTotalCost",$param) and $param["RealTotalCost"] !== null) {
            $this->RealTotalCost = $param["RealTotalCost"];
        }

        if (array_key_exists("CashPayAmount",$param) and $param["CashPayAmount"] !== null) {
            $this->CashPayAmount = $param["CashPayAmount"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("PayModeName",$param) and $param["PayModeName"] !== null) {
            $this->PayModeName = $param["PayModeName"];
        }

        if (array_key_exists("BusinessCode",$param) and $param["BusinessCode"] !== null) {
            $this->BusinessCode = $param["BusinessCode"];
        }

        if (array_key_exists("BusinessCodeName",$param) and $param["BusinessCodeName"] !== null) {
            $this->BusinessCodeName = $param["BusinessCodeName"];
        }

        if (array_key_exists("ConsumptionTypeName",$param) and $param["ConsumptionTypeName"] !== null) {
            $this->ConsumptionTypeName = $param["ConsumptionTypeName"];
        }

        if (array_key_exists("RealCost",$param) and $param["RealCost"] !== null) {
            $this->RealCost = $param["RealCost"];
        }

        if (array_key_exists("FeeBeginTime",$param) and $param["FeeBeginTime"] !== null) {
            $this->FeeBeginTime = $param["FeeBeginTime"];
        }

        if (array_key_exists("FeeEndTime",$param) and $param["FeeEndTime"] !== null) {
            $this->FeeEndTime = $param["FeeEndTime"];
        }

        if (array_key_exists("DayDiff",$param) and $param["DayDiff"] !== null) {
            $this->DayDiff = $param["DayDiff"];
        }

        if (array_key_exists("DailyTotalCost",$param) and $param["DailyTotalCost"] !== null) {
            $this->DailyTotalCost = $param["DailyTotalCost"];
        }

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("VoucherPayAmount",$param) and $param["VoucherPayAmount"] !== null) {
            $this->VoucherPayAmount = $param["VoucherPayAmount"];
        }

        if (array_key_exists("IncentivePayAmount",$param) and $param["IncentivePayAmount"] !== null) {
            $this->IncentivePayAmount = $param["IncentivePayAmount"];
        }

        if (array_key_exists("TransferPayAmount",$param) and $param["TransferPayAmount"] !== null) {
            $this->TransferPayAmount = $param["TransferPayAmount"];
        }

        if (array_key_exists("PayerUin",$param) and $param["PayerUin"] !== null) {
            $this->PayerUin = $param["PayerUin"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("OperateUin",$param) and $param["OperateUin"] !== null) {
            $this->OperateUin = $param["OperateUin"];
        }

        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("ProductCodeName",$param) and $param["ProductCodeName"] !== null) {
            $this->ProductCodeName = $param["ProductCodeName"];
        }

        if (array_key_exists("RegionType",$param) and $param["RegionType"] !== null) {
            $this->RegionType = $param["RegionType"];
        }

        if (array_key_exists("RegionTypeName",$param) and $param["RegionTypeName"] !== null) {
            $this->RegionTypeName = $param["RegionTypeName"];
        }

        if (array_key_exists("Extend1",$param) and $param["Extend1"] !== null) {
            $this->Extend1 = $param["Extend1"];
        }

        if (array_key_exists("Extend2",$param) and $param["Extend2"] !== null) {
            $this->Extend2 = $param["Extend2"];
        }

        if (array_key_exists("Extend3",$param) and $param["Extend3"] !== null) {
            $this->Extend3 = $param["Extend3"];
        }

        if (array_key_exists("Extend4",$param) and $param["Extend4"] !== null) {
            $this->Extend4 = $param["Extend4"];
        }

        if (array_key_exists("Extend5",$param) and $param["Extend5"] !== null) {
            $this->Extend5 = $param["Extend5"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceTypeName",$param) and $param["InstanceTypeName"] !== null) {
            $this->InstanceTypeName = $param["InstanceTypeName"];
        }

        if (array_key_exists("PayTime",$param) and $param["PayTime"] !== null) {
            $this->PayTime = $param["PayTime"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("ComponentConfig",$param) and $param["ComponentConfig"] !== null) {
            $this->ComponentConfig = $param["ComponentConfig"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }
    }
}
