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
 * 账单明细数据对象
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
 * @method string getActionTypeName() 获取交易类型，如包年包月新购、包年包月续费、按量计费扣费等类型
 * @method void setActionTypeName(string $ActionTypeName) 设置交易类型，如包年包月新购、包年包月续费、按量计费扣费等类型
 * @method string getOrderId() 获取订单ID：包年包月计费模式下订购的订单号
 * @method void setOrderId(string $OrderId) 设置订单ID：包年包月计费模式下订购的订单号
 * @method string getBillId() 获取交易ID：结算扣费单号
 * @method void setBillId(string $BillId) 设置交易ID：结算扣费单号
 * @method string getPayTime() 获取扣费时间：结算扣费时间
 * @method void setPayTime(string $PayTime) 设置扣费时间：结算扣费时间
 * @method string getFeeBeginTime() 获取开始使用时间：产品服务开始使用时间
 * @method void setFeeBeginTime(string $FeeBeginTime) 设置开始使用时间：产品服务开始使用时间
 * @method string getFeeEndTime() 获取结束使用时间：产品服务结束使用时间
 * @method void setFeeEndTime(string $FeeEndTime) 设置结束使用时间：产品服务结束使用时间
 * @method array getComponentSet() 获取组件列表
 * @method void setComponentSet(array $ComponentSet) 设置组件列表
 * @method string getPayerUin() 获取支付者UIN：支付者的账号 ID，账号 ID 是用户在腾讯云的唯一账号标识
 * @method void setPayerUin(string $PayerUin) 设置支付者UIN：支付者的账号 ID，账号 ID 是用户在腾讯云的唯一账号标识
 * @method string getOwnerUin() 获取使用者UIN：实际使用资源的账号 ID
 * @method void setOwnerUin(string $OwnerUin) 设置使用者UIN：实际使用资源的账号 ID
 * @method string getOperateUin() 获取操作者UIN：操作者账号 ID（预付费资源下单或后付费操作开通资源账号的 ID 或者角色 ID ）
 * @method void setOperateUin(string $OperateUin) 设置操作者UIN：操作者账号 ID（预付费资源下单或后付费操作开通资源账号的 ID 或者角色 ID ）
 * @method array getTags() 获取标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBusinessCode() 获取产品编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBusinessCode(string $BusinessCode) 设置产品编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductCode() 获取子产品编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductCode(string $ProductCode) 设置子产品编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getActionType() 获取交易类型编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActionType(string $ActionType) 设置交易类型编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegionId() 获取地域ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionId(string $RegionId) 设置地域ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProjectId() 获取项目ID
 * @method void setProjectId(integer $ProjectId) 设置项目ID
 * @method array getPriceInfo() 获取价格属性：该组件除单价、时长外的其他影响折扣定价的属性信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPriceInfo(array $PriceInfo) 设置价格属性：该组件除单价、时长外的其他影响折扣定价的属性信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method BillDetailAssociatedOrder getAssociatedOrder() 获取关联交易单据ID：和本笔交易关联单据 ID，如，冲销订单，记录原订单、重结订单，退费单记录对应的原购买订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssociatedOrder(BillDetailAssociatedOrder $AssociatedOrder) 设置关联交易单据ID：和本笔交易关联单据 ID，如，冲销订单，记录原订单、重结订单，退费单记录对应的原购买订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFormula() 获取计算说明：特殊交易类型计费结算的详细计算说明，如退费及变配
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFormula(string $Formula) 设置计算说明：特殊交易类型计费结算的详细计算说明，如退费及变配
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFormulaUrl() 获取计费规则：各产品详细的计费规则官网说明链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFormulaUrl(string $FormulaUrl) 设置计费规则：各产品详细的计费规则官网说明链接
注意：此字段可能返回 null，表示取不到有效值。
 */
class BillDetail extends AbstractModel
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
     * @var string 交易类型，如包年包月新购、包年包月续费、按量计费扣费等类型
     */
    public $ActionTypeName;

    /**
     * @var string 订单ID：包年包月计费模式下订购的订单号
     */
    public $OrderId;

    /**
     * @var string 交易ID：结算扣费单号
     */
    public $BillId;

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
     * @var array 组件列表
     */
    public $ComponentSet;

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
     * @var array 标签信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 产品编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BusinessCode;

    /**
     * @var string 子产品编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductCode;

    /**
     * @var string 交易类型编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActionType;

    /**
     * @var string 地域ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionId;

    /**
     * @var integer 项目ID
     */
    public $ProjectId;

    /**
     * @var array 价格属性：该组件除单价、时长外的其他影响折扣定价的属性信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PriceInfo;

    /**
     * @var BillDetailAssociatedOrder 关联交易单据ID：和本笔交易关联单据 ID，如，冲销订单，记录原订单、重结订单，退费单记录对应的原购买订单号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssociatedOrder;

    /**
     * @var string 计算说明：特殊交易类型计费结算的详细计算说明，如退费及变配
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Formula;

    /**
     * @var string 计费规则：各产品详细的计费规则官网说明链接
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FormulaUrl;

    /**
     * @param string $BusinessCodeName 产品名称：用户所采购的各类云产品，例如：云服务器 CVM
     * @param string $ProductCodeName 子产品名称：用户采购的具体产品细分类型，例如：云服务器 CVM-标准型 S1
     * @param string $PayModeName 计费模式：资源的计费模式，区分为包年包月和按量计费
     * @param string $ProjectName 项目名称：资源归属的项目，用户在控制台给资源自主分配项目，未分配则是默认项目
     * @param string $RegionName 地域：资源所属地域，如华南地区（广州）
     * @param string $ZoneName 可用区：资源所属可用区，如广州三区
     * @param string $ResourceId 资源 ID：账单中出账对象 ID，不同产品因资源形态不同，资源内容不完全相同，如云服务器 CVM 为对应的实例 ID
     * @param string $ResourceName 资源别名：用户在控制台为资源设置的名称，如果未设置，则默认为空
     * @param string $ActionTypeName 交易类型，如包年包月新购、包年包月续费、按量计费扣费等类型
     * @param string $OrderId 订单ID：包年包月计费模式下订购的订单号
     * @param string $BillId 交易ID：结算扣费单号
     * @param string $PayTime 扣费时间：结算扣费时间
     * @param string $FeeBeginTime 开始使用时间：产品服务开始使用时间
     * @param string $FeeEndTime 结束使用时间：产品服务结束使用时间
     * @param array $ComponentSet 组件列表
     * @param string $PayerUin 支付者UIN：支付者的账号 ID，账号 ID 是用户在腾讯云的唯一账号标识
     * @param string $OwnerUin 使用者UIN：实际使用资源的账号 ID
     * @param string $OperateUin 操作者UIN：操作者账号 ID（预付费资源下单或后付费操作开通资源账号的 ID 或者角色 ID ）
     * @param array $Tags 标签信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BusinessCode 产品编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductCode 子产品编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ActionType 交易类型编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RegionId 地域ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProjectId 项目ID
     * @param array $PriceInfo 价格属性：该组件除单价、时长外的其他影响折扣定价的属性信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param BillDetailAssociatedOrder $AssociatedOrder 关联交易单据ID：和本笔交易关联单据 ID，如，冲销订单，记录原订单、重结订单，退费单记录对应的原购买订单号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Formula 计算说明：特殊交易类型计费结算的详细计算说明，如退费及变配
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FormulaUrl 计费规则：各产品详细的计费规则官网说明链接
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

        if (array_key_exists("BillId",$param) and $param["BillId"] !== null) {
            $this->BillId = $param["BillId"];
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

        if (array_key_exists("ComponentSet",$param) and $param["ComponentSet"] !== null) {
            $this->ComponentSet = [];
            foreach ($param["ComponentSet"] as $key => $value){
                $obj = new BillDetailComponent();
                $obj->deserialize($value);
                array_push($this->ComponentSet, $obj);
            }
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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new BillTagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("BusinessCode",$param) and $param["BusinessCode"] !== null) {
            $this->BusinessCode = $param["BusinessCode"];
        }

        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("PriceInfo",$param) and $param["PriceInfo"] !== null) {
            $this->PriceInfo = $param["PriceInfo"];
        }

        if (array_key_exists("AssociatedOrder",$param) and $param["AssociatedOrder"] !== null) {
            $this->AssociatedOrder = new BillDetailAssociatedOrder();
            $this->AssociatedOrder->deserialize($param["AssociatedOrder"]);
        }

        if (array_key_exists("Formula",$param) and $param["Formula"] !== null) {
            $this->Formula = $param["Formula"];
        }

        if (array_key_exists("FormulaUrl",$param) and $param["FormulaUrl"] !== null) {
            $this->FormulaUrl = $param["FormulaUrl"];
        }
    }
}
