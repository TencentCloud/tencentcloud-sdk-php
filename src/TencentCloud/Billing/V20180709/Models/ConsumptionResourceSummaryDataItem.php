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
 * @method string getResourceId() 获取<p>资源ID</p>
 * @method void setResourceId(string $ResourceId) 设置<p>资源ID</p>
 * @method string getResourceName() 获取<p>资源名称</p>
 * @method void setResourceName(string $ResourceName) 设置<p>资源名称</p>
 * @method string getRealTotalCost() 获取<p>折后总价</p>
 * @method void setRealTotalCost(string $RealTotalCost) 设置<p>折后总价</p>
 * @method string getCashPayAmount() 获取<p>现金花费</p>
 * @method void setCashPayAmount(string $CashPayAmount) 设置<p>现金花费</p>
 * @method string getProjectId() 获取<p>项目ID</p>
 * @method void setProjectId(string $ProjectId) 设置<p>项目ID</p>
 * @method string getProjectName() 获取<p>项目名称</p>
 * @method void setProjectName(string $ProjectName) 设置<p>项目名称</p>
 * @method string getRegionId() 获取<p>地域ID</p>
 * @method void setRegionId(string $RegionId) 设置<p>地域ID</p>
 * @method string getRegionName() 获取<p>地域名称</p>
 * @method void setRegionName(string $RegionName) 设置<p>地域名称</p>
 * @method string getPayMode() 获取<p>付费模式</p>
 * @method void setPayMode(string $PayMode) 设置<p>付费模式</p>
 * @method string getPayModeName() 获取<p>付费模式名称</p>
 * @method void setPayModeName(string $PayModeName) 设置<p>付费模式名称</p>
 * @method string getBusinessCode() 获取<p>产品名称代码</p>
 * @method void setBusinessCode(string $BusinessCode) 设置<p>产品名称代码</p>
 * @method string getBusinessCodeName() 获取<p>产品名称</p>
 * @method void setBusinessCodeName(string $BusinessCodeName) 设置<p>产品名称</p>
 * @method string getConsumptionTypeName() 获取<p>消耗类型</p>
 * @method void setConsumptionTypeName(string $ConsumptionTypeName) 设置<p>消耗类型</p>
 * @method string getRealCost() 获取<p>折前价</p>
 * @method void setRealCost(string $RealCost) 设置<p>折前价</p>
 * @method string getFeeBeginTime() 获取<p>费用起始时间</p>
 * @method void setFeeBeginTime(string $FeeBeginTime) 设置<p>费用起始时间</p>
 * @method string getFeeEndTime() 获取<p>费用结束时间</p>
 * @method void setFeeEndTime(string $FeeEndTime) 设置<p>费用结束时间</p>
 * @method string getDayDiff() 获取<p>天数</p>
 * @method void setDayDiff(string $DayDiff) 设置<p>天数</p>
 * @method string getDailyTotalCost() 获取<p>每日消耗</p>
 * @method void setDailyTotalCost(string $DailyTotalCost) 设置<p>每日消耗</p>
 * @method string getOrderId() 获取<p>订单号</p>
 * @method void setOrderId(string $OrderId) 设置<p>订单号</p>
 * @method string getVoucherPayAmount() 获取<p>代金券</p>
 * @method void setVoucherPayAmount(string $VoucherPayAmount) 设置<p>代金券</p>
 * @method string getIncentivePayAmount() 获取<p>赠送金</p>
 * @method void setIncentivePayAmount(string $IncentivePayAmount) 设置<p>赠送金</p>
 * @method string getTransferPayAmount() 获取<p>分成金</p>
 * @method void setTransferPayAmount(string $TransferPayAmount) 设置<p>分成金</p>
 * @method string getPayerUin() 获取<p>支付者UIN：支付者的账号 ID，账号 ID 是用户在腾讯云的唯一账号标识</p>
 * @method void setPayerUin(string $PayerUin) 设置<p>支付者UIN：支付者的账号 ID，账号 ID 是用户在腾讯云的唯一账号标识</p>
 * @method string getOwnerUin() 获取<p>使用者UIN：实际使用资源的账号 ID</p>
 * @method void setOwnerUin(string $OwnerUin) 设置<p>使用者UIN：实际使用资源的账号 ID</p>
 * @method string getOperateUin() 获取<p>操作者UIN：操作者账号 ID（预付费资源下单或后付费操作开通资源账号的 ID 或者角色 ID ）</p>
 * @method void setOperateUin(string $OperateUin) 设置<p>操作者UIN：操作者账号 ID（预付费资源下单或后付费操作开通资源账号的 ID 或者角色 ID ）</p>
 * @method string getProductCode() 获取<p>子产品编码</p>
 * @method void setProductCode(string $ProductCode) 设置<p>子产品编码</p>
 * @method string getProductCodeName() 获取<p>子产品名称：用户采购的具体产品细分类型，例如：云服务器 CVM-标准型 S1</p>
 * @method void setProductCodeName(string $ProductCodeName) 设置<p>子产品名称：用户采购的具体产品细分类型，例如：云服务器 CVM-标准型 S1</p>
 * @method string getRegionType() 获取<p>地域类型</p>
 * @method void setRegionType(string $RegionType) 设置<p>地域类型</p>
 * @method string getRegionTypeName() 获取<p>地域类型名称</p>
 * @method void setRegionTypeName(string $RegionTypeName) 设置<p>地域类型名称</p>
 * @method string getExtend1() 获取<p>扩展字段1</p>
 * @method void setExtend1(string $Extend1) 设置<p>扩展字段1</p>
 * @method string getExtend2() 获取<p>扩展字段2</p>
 * @method void setExtend2(string $Extend2) 设置<p>扩展字段2</p>
 * @method string getExtend3() 获取<p>扩展字段3</p>
 * @method void setExtend3(string $Extend3) 设置<p>扩展字段3</p>
 * @method string getExtend4() 获取<p>扩展字段4</p>
 * @method void setExtend4(string $Extend4) 设置<p>扩展字段4</p>
 * @method string getExtend5() 获取<p>扩展字段5</p>
 * @method void setExtend5(string $Extend5) 设置<p>扩展字段5</p>
 * @method string getInstanceType() 获取<p>实例类型</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>实例类型</p>
 * @method string getInstanceTypeName() 获取<p>实例类型名称</p>
 * @method void setInstanceTypeName(string $InstanceTypeName) 设置<p>实例类型名称</p>
 * @method string getPayTime() 获取<p>扣费时间：结算扣费时间</p>
 * @method void setPayTime(string $PayTime) 设置<p>扣费时间：结算扣费时间</p>
 * @method string getZoneName() 获取<p>可用区：资源所属可用区，如广州三区</p>
 * @method void setZoneName(string $ZoneName) 设置<p>可用区：资源所属可用区，如广州三区</p>
 * @method string getComponentConfig() 获取<p>配置描述</p>
 * @method void setComponentConfig(string $ComponentConfig) 设置<p>配置描述</p>
 * @method string getTags() 获取<p>标签信息</p>
 * @method void setTags(string $Tags) 设置<p>标签信息</p>
 * @method string getLeftRealTotalCost() 获取<p>待分摊金额</p><p>剩余待分摊的折后总金额</p>
 * @method void setLeftRealTotalCost(string $LeftRealTotalCost) 设置<p>待分摊金额</p><p>剩余待分摊的折后总金额</p>
 */
class ConsumptionResourceSummaryDataItem extends AbstractModel
{
    /**
     * @var string <p>资源ID</p>
     */
    public $ResourceId;

    /**
     * @var string <p>资源名称</p>
     */
    public $ResourceName;

    /**
     * @var string <p>折后总价</p>
     */
    public $RealTotalCost;

    /**
     * @var string <p>现金花费</p>
     */
    public $CashPayAmount;

    /**
     * @var string <p>项目ID</p>
     */
    public $ProjectId;

    /**
     * @var string <p>项目名称</p>
     */
    public $ProjectName;

    /**
     * @var string <p>地域ID</p>
     */
    public $RegionId;

    /**
     * @var string <p>地域名称</p>
     */
    public $RegionName;

    /**
     * @var string <p>付费模式</p>
     */
    public $PayMode;

    /**
     * @var string <p>付费模式名称</p>
     */
    public $PayModeName;

    /**
     * @var string <p>产品名称代码</p>
     */
    public $BusinessCode;

    /**
     * @var string <p>产品名称</p>
     */
    public $BusinessCodeName;

    /**
     * @var string <p>消耗类型</p>
     */
    public $ConsumptionTypeName;

    /**
     * @var string <p>折前价</p>
     */
    public $RealCost;

    /**
     * @var string <p>费用起始时间</p>
     */
    public $FeeBeginTime;

    /**
     * @var string <p>费用结束时间</p>
     */
    public $FeeEndTime;

    /**
     * @var string <p>天数</p>
     */
    public $DayDiff;

    /**
     * @var string <p>每日消耗</p>
     */
    public $DailyTotalCost;

    /**
     * @var string <p>订单号</p>
     */
    public $OrderId;

    /**
     * @var string <p>代金券</p>
     */
    public $VoucherPayAmount;

    /**
     * @var string <p>赠送金</p>
     */
    public $IncentivePayAmount;

    /**
     * @var string <p>分成金</p>
     */
    public $TransferPayAmount;

    /**
     * @var string <p>支付者UIN：支付者的账号 ID，账号 ID 是用户在腾讯云的唯一账号标识</p>
     */
    public $PayerUin;

    /**
     * @var string <p>使用者UIN：实际使用资源的账号 ID</p>
     */
    public $OwnerUin;

    /**
     * @var string <p>操作者UIN：操作者账号 ID（预付费资源下单或后付费操作开通资源账号的 ID 或者角色 ID ）</p>
     */
    public $OperateUin;

    /**
     * @var string <p>子产品编码</p>
     */
    public $ProductCode;

    /**
     * @var string <p>子产品名称：用户采购的具体产品细分类型，例如：云服务器 CVM-标准型 S1</p>
     */
    public $ProductCodeName;

    /**
     * @var string <p>地域类型</p>
     */
    public $RegionType;

    /**
     * @var string <p>地域类型名称</p>
     */
    public $RegionTypeName;

    /**
     * @var string <p>扩展字段1</p>
     */
    public $Extend1;

    /**
     * @var string <p>扩展字段2</p>
     */
    public $Extend2;

    /**
     * @var string <p>扩展字段3</p>
     */
    public $Extend3;

    /**
     * @var string <p>扩展字段4</p>
     */
    public $Extend4;

    /**
     * @var string <p>扩展字段5</p>
     */
    public $Extend5;

    /**
     * @var string <p>实例类型</p>
     */
    public $InstanceType;

    /**
     * @var string <p>实例类型名称</p>
     */
    public $InstanceTypeName;

    /**
     * @var string <p>扣费时间：结算扣费时间</p>
     */
    public $PayTime;

    /**
     * @var string <p>可用区：资源所属可用区，如广州三区</p>
     */
    public $ZoneName;

    /**
     * @var string <p>配置描述</p>
     */
    public $ComponentConfig;

    /**
     * @var string <p>标签信息</p>
     */
    public $Tags;

    /**
     * @var string <p>待分摊金额</p><p>剩余待分摊的折后总金额</p>
     */
    public $LeftRealTotalCost;

    /**
     * @param string $ResourceId <p>资源ID</p>
     * @param string $ResourceName <p>资源名称</p>
     * @param string $RealTotalCost <p>折后总价</p>
     * @param string $CashPayAmount <p>现金花费</p>
     * @param string $ProjectId <p>项目ID</p>
     * @param string $ProjectName <p>项目名称</p>
     * @param string $RegionId <p>地域ID</p>
     * @param string $RegionName <p>地域名称</p>
     * @param string $PayMode <p>付费模式</p>
     * @param string $PayModeName <p>付费模式名称</p>
     * @param string $BusinessCode <p>产品名称代码</p>
     * @param string $BusinessCodeName <p>产品名称</p>
     * @param string $ConsumptionTypeName <p>消耗类型</p>
     * @param string $RealCost <p>折前价</p>
     * @param string $FeeBeginTime <p>费用起始时间</p>
     * @param string $FeeEndTime <p>费用结束时间</p>
     * @param string $DayDiff <p>天数</p>
     * @param string $DailyTotalCost <p>每日消耗</p>
     * @param string $OrderId <p>订单号</p>
     * @param string $VoucherPayAmount <p>代金券</p>
     * @param string $IncentivePayAmount <p>赠送金</p>
     * @param string $TransferPayAmount <p>分成金</p>
     * @param string $PayerUin <p>支付者UIN：支付者的账号 ID，账号 ID 是用户在腾讯云的唯一账号标识</p>
     * @param string $OwnerUin <p>使用者UIN：实际使用资源的账号 ID</p>
     * @param string $OperateUin <p>操作者UIN：操作者账号 ID（预付费资源下单或后付费操作开通资源账号的 ID 或者角色 ID ）</p>
     * @param string $ProductCode <p>子产品编码</p>
     * @param string $ProductCodeName <p>子产品名称：用户采购的具体产品细分类型，例如：云服务器 CVM-标准型 S1</p>
     * @param string $RegionType <p>地域类型</p>
     * @param string $RegionTypeName <p>地域类型名称</p>
     * @param string $Extend1 <p>扩展字段1</p>
     * @param string $Extend2 <p>扩展字段2</p>
     * @param string $Extend3 <p>扩展字段3</p>
     * @param string $Extend4 <p>扩展字段4</p>
     * @param string $Extend5 <p>扩展字段5</p>
     * @param string $InstanceType <p>实例类型</p>
     * @param string $InstanceTypeName <p>实例类型名称</p>
     * @param string $PayTime <p>扣费时间：结算扣费时间</p>
     * @param string $ZoneName <p>可用区：资源所属可用区，如广州三区</p>
     * @param string $ComponentConfig <p>配置描述</p>
     * @param string $Tags <p>标签信息</p>
     * @param string $LeftRealTotalCost <p>待分摊金额</p><p>剩余待分摊的折后总金额</p>
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

        if (array_key_exists("LeftRealTotalCost",$param) and $param["LeftRealTotalCost"] !== null) {
            $this->LeftRealTotalCost = $param["LeftRealTotalCost"];
        }
    }
}
