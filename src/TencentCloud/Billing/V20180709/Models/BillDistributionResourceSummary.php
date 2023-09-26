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
 * 经销账单资源汇总数据对象
 *
 * @method string getBusinessCodeName() 获取产品名称：用户所采购的各类云产品，例如：云服务器 CVM
 * @method void setBusinessCodeName(string $BusinessCodeName) 设置产品名称：用户所采购的各类云产品，例如：云服务器 CVM
 * @method string getProductCodeName() 获取子产品名称：用户采购的具体产品细分类型，例如：云服务器 CVM-标准型 S1
 * @method void setProductCodeName(string $ProductCodeName) 设置子产品名称：用户采购的具体产品细分类型，例如：云服务器 CVM-标准型 S1
 * @method string getPayModeName() 获取计费模式：资源的计费模式，区分为包年包月和按量计费
 * @method void setPayModeName(string $PayModeName) 设置计费模式：资源的计费模式，区分为包年包月和按量计费
 * @method string getProjectName() 获取项目名称：资源归属的项目，用户在控制台给资源自主分配项目，未分配则是默认项目
 * @method void setProjectName(string $ProjectName) 设置项目名称：资源归属的项目，用户在控制台给资源自主分配项目，未分配则是默认项目
 * @method string getRegionName() 获取地域：资源所属地域，如华南地区（广州）
 * @method void setRegionName(string $RegionName) 设置地域：资源所属地域，如华南地区（广州）
 * @method string getZoneName() 获取可用区：资源所属可用区，如广州三区
 * @method void setZoneName(string $ZoneName) 设置可用区：资源所属可用区，如广州三区
 * @method string getResourceId() 获取资源 ID：账单中出账对象 ID，不同产品因资源形态不同，资源内容不完全相同，如云服务器 CVM 为对应的实例 ID	
 * @method void setResourceId(string $ResourceId) 设置资源 ID：账单中出账对象 ID，不同产品因资源形态不同，资源内容不完全相同，如云服务器 CVM 为对应的实例 ID	
 * @method string getResourceName() 获取资源别名：用户在控制台为资源设置的名称，如果未设置，则默认为空
 * @method void setResourceName(string $ResourceName) 设置资源别名：用户在控制台为资源设置的名称，如果未设置，则默认为空
 * @method string getActionTypeName() 获取交易类型：如包年包月新购、包年包月续费、按量计费扣费等类型
 * @method void setActionTypeName(string $ActionTypeName) 设置交易类型：如包年包月新购、包年包月续费、按量计费扣费等类型
 * @method string getOrderId() 获取订单ID：包年包月计费模式下订购的订单号
 * @method void setOrderId(string $OrderId) 设置订单ID：包年包月计费模式下订购的订单号
 * @method string getPayTime() 获取扣费时间：结算扣费时间
 * @method void setPayTime(string $PayTime) 设置扣费时间：结算扣费时间
 * @method string getFeeBeginTime() 获取开始使用时间：产品服务开始使用时间
 * @method void setFeeBeginTime(string $FeeBeginTime) 设置开始使用时间：产品服务开始使用时间
 * @method string getFeeEndTime() 获取结束使用时间：产品服务结束使用时间
 * @method void setFeeEndTime(string $FeeEndTime) 设置结束使用时间：产品服务结束使用时间
 * @method string getConfigDesc() 获取配置描述：该资源下的计费项名称和用量合并展示，仅在资源账单体现
 * @method void setConfigDesc(string $ConfigDesc) 设置配置描述：该资源下的计费项名称和用量合并展示，仅在资源账单体现
 * @method string getExtendField1() 获取扩展字段1：产品对应的扩展属性信息，仅在资源账单体现
 * @method void setExtendField1(string $ExtendField1) 设置扩展字段1：产品对应的扩展属性信息，仅在资源账单体现
 * @method string getExtendField2() 获取扩展字段2：产品对应的扩展属性信息，仅在资源账单体现
 * @method void setExtendField2(string $ExtendField2) 设置扩展字段2：产品对应的扩展属性信息，仅在资源账单体现
 * @method string getTotalCost() 获取原价：原价 = 组件刊例价 * 组件用量 * 使用时长（如果客户享受一口价/合同价则默认不展示，退费类场景也默认不展示）
 * @method void setTotalCost(string $TotalCost) 设置原价：原价 = 组件刊例价 * 组件用量 * 使用时长（如果客户享受一口价/合同价则默认不展示，退费类场景也默认不展示）
 * @method string getDiscount() 获取折扣率：本资源享受的折扣率（如果客户享受一口价/合同价则默认不展示，退费场景也默认不展示）
 * @method void setDiscount(string $Discount) 设置折扣率：本资源享受的折扣率（如果客户享受一口价/合同价则默认不展示，退费场景也默认不展示）
 * @method string getReduceType() 获取优惠类型
 * @method void setReduceType(string $ReduceType) 设置优惠类型
 * @method string getRealTotalCost() 获取优惠后总价
 * @method void setRealTotalCost(string $RealTotalCost) 设置优惠后总价
 * @method string getVoucherPayAmount() 获取优惠券支出：使用各类优惠券（如代金券、现金券等）支付的金额
 * @method void setVoucherPayAmount(string $VoucherPayAmount) 设置优惠券支出：使用各类优惠券（如代金券、现金券等）支付的金额
 * @method string getCashPayAmount() 获取现金账户支出：通过现金账户支付的金额
 * @method void setCashPayAmount(string $CashPayAmount) 设置现金账户支出：通过现金账户支付的金额
 * @method string getIncentivePayAmount() 获取赠送账户支出：使用赠送金支付的金额
 * @method void setIncentivePayAmount(string $IncentivePayAmount) 设置赠送账户支出：使用赠送金支付的金额
 * @method string getTransferPayAmount() 获取分成金账户支出：通过分成金账户支付的金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransferPayAmount(string $TransferPayAmount) 设置分成金账户支出：通过分成金账户支付的金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExtendField3() 获取扩展字段3：产品对应的扩展属性信息，仅在资源账单体现
 * @method void setExtendField3(string $ExtendField3) 设置扩展字段3：产品对应的扩展属性信息，仅在资源账单体现
 * @method string getExtendField4() 获取扩展字段4：产品对应的扩展属性信息，仅在资源账单体现
 * @method void setExtendField4(string $ExtendField4) 设置扩展字段4：产品对应的扩展属性信息，仅在资源账单体现
 * @method string getExtendField5() 获取扩展字段5：产品对应的扩展属性信息，仅在资源账单体现
 * @method void setExtendField5(string $ExtendField5) 设置扩展字段5：产品对应的扩展属性信息，仅在资源账单体现
 * @method array getTags() 获取标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerUin() 获取使用者UIN：实际使用资源的账号 ID
 * @method void setOwnerUin(string $OwnerUin) 设置使用者UIN：实际使用资源的账号 ID
 * @method string getOperateUin() 获取操作者UIN：操作者账号 ID（预付费资源下单或后付费操作开通资源账号的 ID 或者角色 ID ）
 * @method void setOperateUin(string $OperateUin) 设置操作者UIN：操作者账号 ID（预付费资源下单或后付费操作开通资源账号的 ID 或者角色 ID ）
 * @method string getBusinessCode() 获取产品编码
 * @method void setBusinessCode(string $BusinessCode) 设置产品编码
 * @method string getProductCode() 获取子产品编码
 * @method void setProductCode(string $ProductCode) 设置子产品编码
 * @method integer getRegionId() 获取地域ID
 * @method void setRegionId(integer $RegionId) 设置地域ID
 * @method string getInstanceType() 获取实例类型：购买的产品服务对应的实例类型，包括资源包、RI、SP、竞价实例。正常的实例展示默认为不展示
 * @method void setInstanceType(string $InstanceType) 设置实例类型：购买的产品服务对应的实例类型，包括资源包、RI、SP、竞价实例。正常的实例展示默认为不展示
 * @method string getOriginalCostWithRI() 获取预留实例抵扣组件原价：本产品或服务使用预留实例抵扣的组件原价金额	
 * @method void setOriginalCostWithRI(string $OriginalCostWithRI) 设置预留实例抵扣组件原价：本产品或服务使用预留实例抵扣的组件原价金额	
 * @method string getSPDeduction() 获取节省计划抵扣金额（已废弃）
 * @method void setSPDeduction(string $SPDeduction) 设置节省计划抵扣金额（已废弃）
 * @method string getOriginalCostWithSP() 获取节省计划抵扣组件原价：节省计划抵扣原价=节省计划包抵扣金额/节省计划抵扣率	
 * @method void setOriginalCostWithSP(string $OriginalCostWithSP) 设置节省计划抵扣组件原价：节省计划抵扣原价=节省计划包抵扣金额/节省计划抵扣率	
 */
class BillDistributionResourceSummary extends AbstractModel
{
    /**
     * @var string 产品名称：用户所采购的各类云产品，例如：云服务器 CVM
     */
    public $BusinessCodeName;

    /**
     * @var string 子产品名称：用户采购的具体产品细分类型，例如：云服务器 CVM-标准型 S1
     */
    public $ProductCodeName;

    /**
     * @var string 计费模式：资源的计费模式，区分为包年包月和按量计费
     */
    public $PayModeName;

    /**
     * @var string 项目名称：资源归属的项目，用户在控制台给资源自主分配项目，未分配则是默认项目
     */
    public $ProjectName;

    /**
     * @var string 地域：资源所属地域，如华南地区（广州）
     */
    public $RegionName;

    /**
     * @var string 可用区：资源所属可用区，如广州三区
     */
    public $ZoneName;

    /**
     * @var string 资源 ID：账单中出账对象 ID，不同产品因资源形态不同，资源内容不完全相同，如云服务器 CVM 为对应的实例 ID	
     */
    public $ResourceId;

    /**
     * @var string 资源别名：用户在控制台为资源设置的名称，如果未设置，则默认为空
     */
    public $ResourceName;

    /**
     * @var string 交易类型：如包年包月新购、包年包月续费、按量计费扣费等类型
     */
    public $ActionTypeName;

    /**
     * @var string 订单ID：包年包月计费模式下订购的订单号
     */
    public $OrderId;

    /**
     * @var string 扣费时间：结算扣费时间
     */
    public $PayTime;

    /**
     * @var string 开始使用时间：产品服务开始使用时间
     */
    public $FeeBeginTime;

    /**
     * @var string 结束使用时间：产品服务结束使用时间
     */
    public $FeeEndTime;

    /**
     * @var string 配置描述：该资源下的计费项名称和用量合并展示，仅在资源账单体现
     */
    public $ConfigDesc;

    /**
     * @var string 扩展字段1：产品对应的扩展属性信息，仅在资源账单体现
     */
    public $ExtendField1;

    /**
     * @var string 扩展字段2：产品对应的扩展属性信息，仅在资源账单体现
     */
    public $ExtendField2;

    /**
     * @var string 原价：原价 = 组件刊例价 * 组件用量 * 使用时长（如果客户享受一口价/合同价则默认不展示，退费类场景也默认不展示）
     */
    public $TotalCost;

    /**
     * @var string 折扣率：本资源享受的折扣率（如果客户享受一口价/合同价则默认不展示，退费场景也默认不展示）
     */
    public $Discount;

    /**
     * @var string 优惠类型
     */
    public $ReduceType;

    /**
     * @var string 优惠后总价
     */
    public $RealTotalCost;

    /**
     * @var string 优惠券支出：使用各类优惠券（如代金券、现金券等）支付的金额
     */
    public $VoucherPayAmount;

    /**
     * @var string 现金账户支出：通过现金账户支付的金额
     */
    public $CashPayAmount;

    /**
     * @var string 赠送账户支出：使用赠送金支付的金额
     */
    public $IncentivePayAmount;

    /**
     * @var string 分成金账户支出：通过分成金账户支付的金额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TransferPayAmount;

    /**
     * @var string 扩展字段3：产品对应的扩展属性信息，仅在资源账单体现
     */
    public $ExtendField3;

    /**
     * @var string 扩展字段4：产品对应的扩展属性信息，仅在资源账单体现
     */
    public $ExtendField4;

    /**
     * @var string 扩展字段5：产品对应的扩展属性信息，仅在资源账单体现
     */
    public $ExtendField5;

    /**
     * @var array 标签信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 使用者UIN：实际使用资源的账号 ID
     */
    public $OwnerUin;

    /**
     * @var string 操作者UIN：操作者账号 ID（预付费资源下单或后付费操作开通资源账号的 ID 或者角色 ID ）
     */
    public $OperateUin;

    /**
     * @var string 产品编码
     */
    public $BusinessCode;

    /**
     * @var string 子产品编码
     */
    public $ProductCode;

    /**
     * @var integer 地域ID
     */
    public $RegionId;

    /**
     * @var string 实例类型：购买的产品服务对应的实例类型，包括资源包、RI、SP、竞价实例。正常的实例展示默认为不展示
     */
    public $InstanceType;

    /**
     * @var string 预留实例抵扣组件原价：本产品或服务使用预留实例抵扣的组件原价金额	
     */
    public $OriginalCostWithRI;

    /**
     * @var string 节省计划抵扣金额（已废弃）
     * @deprecated
     */
    public $SPDeduction;

    /**
     * @var string 节省计划抵扣组件原价：节省计划抵扣原价=节省计划包抵扣金额/节省计划抵扣率	
     */
    public $OriginalCostWithSP;

    /**
     * @param string $BusinessCodeName 产品名称：用户所采购的各类云产品，例如：云服务器 CVM
     * @param string $ProductCodeName 子产品名称：用户采购的具体产品细分类型，例如：云服务器 CVM-标准型 S1
     * @param string $PayModeName 计费模式：资源的计费模式，区分为包年包月和按量计费
     * @param string $ProjectName 项目名称：资源归属的项目，用户在控制台给资源自主分配项目，未分配则是默认项目
     * @param string $RegionName 地域：资源所属地域，如华南地区（广州）
     * @param string $ZoneName 可用区：资源所属可用区，如广州三区
     * @param string $ResourceId 资源 ID：账单中出账对象 ID，不同产品因资源形态不同，资源内容不完全相同，如云服务器 CVM 为对应的实例 ID	
     * @param string $ResourceName 资源别名：用户在控制台为资源设置的名称，如果未设置，则默认为空
     * @param string $ActionTypeName 交易类型：如包年包月新购、包年包月续费、按量计费扣费等类型
     * @param string $OrderId 订单ID：包年包月计费模式下订购的订单号
     * @param string $PayTime 扣费时间：结算扣费时间
     * @param string $FeeBeginTime 开始使用时间：产品服务开始使用时间
     * @param string $FeeEndTime 结束使用时间：产品服务结束使用时间
     * @param string $ConfigDesc 配置描述：该资源下的计费项名称和用量合并展示，仅在资源账单体现
     * @param string $ExtendField1 扩展字段1：产品对应的扩展属性信息，仅在资源账单体现
     * @param string $ExtendField2 扩展字段2：产品对应的扩展属性信息，仅在资源账单体现
     * @param string $TotalCost 原价：原价 = 组件刊例价 * 组件用量 * 使用时长（如果客户享受一口价/合同价则默认不展示，退费类场景也默认不展示）
     * @param string $Discount 折扣率：本资源享受的折扣率（如果客户享受一口价/合同价则默认不展示，退费场景也默认不展示）
     * @param string $ReduceType 优惠类型
     * @param string $RealTotalCost 优惠后总价
     * @param string $VoucherPayAmount 优惠券支出：使用各类优惠券（如代金券、现金券等）支付的金额
     * @param string $CashPayAmount 现金账户支出：通过现金账户支付的金额
     * @param string $IncentivePayAmount 赠送账户支出：使用赠送金支付的金额
     * @param string $TransferPayAmount 分成金账户支出：通过分成金账户支付的金额
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExtendField3 扩展字段3：产品对应的扩展属性信息，仅在资源账单体现
     * @param string $ExtendField4 扩展字段4：产品对应的扩展属性信息，仅在资源账单体现
     * @param string $ExtendField5 扩展字段5：产品对应的扩展属性信息，仅在资源账单体现
     * @param array $Tags 标签信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerUin 使用者UIN：实际使用资源的账号 ID
     * @param string $OperateUin 操作者UIN：操作者账号 ID（预付费资源下单或后付费操作开通资源账号的 ID 或者角色 ID ）
     * @param string $BusinessCode 产品编码
     * @param string $ProductCode 子产品编码
     * @param integer $RegionId 地域ID
     * @param string $InstanceType 实例类型：购买的产品服务对应的实例类型，包括资源包、RI、SP、竞价实例。正常的实例展示默认为不展示
     * @param string $OriginalCostWithRI 预留实例抵扣组件原价：本产品或服务使用预留实例抵扣的组件原价金额	
     * @param string $SPDeduction 节省计划抵扣金额（已废弃）
     * @param string $OriginalCostWithSP 节省计划抵扣组件原价：节省计划抵扣原价=节省计划包抵扣金额/节省计划抵扣率	
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
        if (array_key_exists("BusinessCodeName",$param) and $param["BusinessCodeName"] !== null) {
            $this->BusinessCodeName = $param["BusinessCodeName"];
        }

        if (array_key_exists("ProductCodeName",$param) and $param["ProductCodeName"] !== null) {
            $this->ProductCodeName = $param["ProductCodeName"];
        }

        if (array_key_exists("PayModeName",$param) and $param["PayModeName"] !== null) {
            $this->PayModeName = $param["PayModeName"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("ActionTypeName",$param) and $param["ActionTypeName"] !== null) {
            $this->ActionTypeName = $param["ActionTypeName"];
        }

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("PayTime",$param) and $param["PayTime"] !== null) {
            $this->PayTime = $param["PayTime"];
        }

        if (array_key_exists("FeeBeginTime",$param) and $param["FeeBeginTime"] !== null) {
            $this->FeeBeginTime = $param["FeeBeginTime"];
        }

        if (array_key_exists("FeeEndTime",$param) and $param["FeeEndTime"] !== null) {
            $this->FeeEndTime = $param["FeeEndTime"];
        }

        if (array_key_exists("ConfigDesc",$param) and $param["ConfigDesc"] !== null) {
            $this->ConfigDesc = $param["ConfigDesc"];
        }

        if (array_key_exists("ExtendField1",$param) and $param["ExtendField1"] !== null) {
            $this->ExtendField1 = $param["ExtendField1"];
        }

        if (array_key_exists("ExtendField2",$param) and $param["ExtendField2"] !== null) {
            $this->ExtendField2 = $param["ExtendField2"];
        }

        if (array_key_exists("TotalCost",$param) and $param["TotalCost"] !== null) {
            $this->TotalCost = $param["TotalCost"];
        }

        if (array_key_exists("Discount",$param) and $param["Discount"] !== null) {
            $this->Discount = $param["Discount"];
        }

        if (array_key_exists("ReduceType",$param) and $param["ReduceType"] !== null) {
            $this->ReduceType = $param["ReduceType"];
        }

        if (array_key_exists("RealTotalCost",$param) and $param["RealTotalCost"] !== null) {
            $this->RealTotalCost = $param["RealTotalCost"];
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

        if (array_key_exists("TransferPayAmount",$param) and $param["TransferPayAmount"] !== null) {
            $this->TransferPayAmount = $param["TransferPayAmount"];
        }

        if (array_key_exists("ExtendField3",$param) and $param["ExtendField3"] !== null) {
            $this->ExtendField3 = $param["ExtendField3"];
        }

        if (array_key_exists("ExtendField4",$param) and $param["ExtendField4"] !== null) {
            $this->ExtendField4 = $param["ExtendField4"];
        }

        if (array_key_exists("ExtendField5",$param) and $param["ExtendField5"] !== null) {
            $this->ExtendField5 = $param["ExtendField5"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new BillTagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("OperateUin",$param) and $param["OperateUin"] !== null) {
            $this->OperateUin = $param["OperateUin"];
        }

        if (array_key_exists("BusinessCode",$param) and $param["BusinessCode"] !== null) {
            $this->BusinessCode = $param["BusinessCode"];
        }

        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("OriginalCostWithRI",$param) and $param["OriginalCostWithRI"] !== null) {
            $this->OriginalCostWithRI = $param["OriginalCostWithRI"];
        }

        if (array_key_exists("SPDeduction",$param) and $param["SPDeduction"] !== null) {
            $this->SPDeduction = $param["SPDeduction"];
        }

        if (array_key_exists("OriginalCostWithSP",$param) and $param["OriginalCostWithSP"] !== null) {
            $this->OriginalCostWithSP = $param["OriginalCostWithSP"];
        }
    }
}
