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
 * 账单明细数据对象
 *
 * @method string getBusinessCodeName() 获取<p>产品名称：用户所采购的各类云产品，例如：云服务器 CVM</p>
 * @method void setBusinessCodeName(string $BusinessCodeName) 设置<p>产品名称：用户所采购的各类云产品，例如：云服务器 CVM</p>
 * @method string getProductCodeName() 获取<p>子产品名称：用户采购的具体产品细分类型，例如：云服务器 CVM-标准型 S1</p>
 * @method void setProductCodeName(string $ProductCodeName) 设置<p>子产品名称：用户采购的具体产品细分类型，例如：云服务器 CVM-标准型 S1</p>
 * @method string getPayModeName() 获取<p>计费模式：资源的计费模式，区分为包年包月和按量计费</p>
 * @method void setPayModeName(string $PayModeName) 设置<p>计费模式：资源的计费模式，区分为包年包月和按量计费</p>
 * @method string getProjectName() 获取<p>项目名称：资源归属的项目，用户在控制台给资源自主分配项目，未分配则是默认项目</p>
 * @method void setProjectName(string $ProjectName) 设置<p>项目名称：资源归属的项目，用户在控制台给资源自主分配项目，未分配则是默认项目</p>
 * @method string getRegionName() 获取<p>地域：资源所属地域，如华南地区（广州）</p>
 * @method void setRegionName(string $RegionName) 设置<p>地域：资源所属地域，如华南地区（广州）</p>
 * @method string getZoneName() 获取<p>可用区：资源所属可用区，如广州三区</p>
 * @method void setZoneName(string $ZoneName) 设置<p>可用区：资源所属可用区，如广州三区</p>
 * @method string getResourceId() 获取<p>资源 ID：账单中出账对象 ID，不同产品因资源形态不同，资源内容不完全相同，如云服务器 CVM 为对应的实例 ID</p>
 * @method void setResourceId(string $ResourceId) 设置<p>资源 ID：账单中出账对象 ID，不同产品因资源形态不同，资源内容不完全相同，如云服务器 CVM 为对应的实例 ID</p>
 * @method string getResourceName() 获取<p>资源别名：用户在控制台为资源设置的名称，如果未设置，则默认为空</p>
 * @method void setResourceName(string $ResourceName) 设置<p>资源别名：用户在控制台为资源设置的名称，如果未设置，则默认为空</p>
 * @method string getActionTypeName() 获取<p>交易类型，如包年包月新购、包年包月续费、按量计费扣费等类型</p>
 * @method void setActionTypeName(string $ActionTypeName) 设置<p>交易类型，如包年包月新购、包年包月续费、按量计费扣费等类型</p>
 * @method string getOrderId() 获取<p>订单ID：包年包月计费模式下对应子订单号。后付费计费模式下账单费用不存在订单概念，可忽略此参数。</p>
 * @method void setOrderId(string $OrderId) 设置<p>订单ID：包年包月计费模式下对应子订单号。后付费计费模式下账单费用不存在订单概念，可忽略此参数。</p>
 * @method string getBillId() 获取<p>交易ID：结算扣费单号</p>
 * @method void setBillId(string $BillId) 设置<p>交易ID：结算扣费单号</p>
 * @method string getPayTime() 获取<p>扣费时间：结算扣费时间</p>
 * @method void setPayTime(string $PayTime) 设置<p>扣费时间：结算扣费时间</p>
 * @method string getFeeBeginTime() 获取<p>开始使用时间：产品服务开始使用时间</p>
 * @method void setFeeBeginTime(string $FeeBeginTime) 设置<p>开始使用时间：产品服务开始使用时间</p>
 * @method string getFeeEndTime() 获取<p>结束使用时间：产品服务结束使用时间</p>
 * @method void setFeeEndTime(string $FeeEndTime) 设置<p>结束使用时间：产品服务结束使用时间</p>
 * @method array getComponentSet() 获取<p>组件列表</p>
 * @method void setComponentSet(array $ComponentSet) 设置<p>组件列表</p>
 * @method string getPayerUin() 获取<p>支付者UIN：支付者的账号 ID，账号 ID 是用户在腾讯云的唯一账号标识</p>
 * @method void setPayerUin(string $PayerUin) 设置<p>支付者UIN：支付者的账号 ID，账号 ID 是用户在腾讯云的唯一账号标识</p>
 * @method string getOwnerUin() 获取<p>使用者UIN：实际使用资源的账号 ID</p>
 * @method void setOwnerUin(string $OwnerUin) 设置<p>使用者UIN：实际使用资源的账号 ID</p>
 * @method string getOperateUin() 获取<p>操作者UIN：操作者账号 ID（预付费资源下单或后付费操作开通资源账号的 ID 或者角色 ID ）</p>
 * @method void setOperateUin(string $OperateUin) 设置<p>操作者UIN：操作者账号 ID（预付费资源下单或后付费操作开通资源账号的 ID 或者角色 ID ）</p>
 * @method array getTags() 获取<p>标签信息</p>
 * @method void setTags(array $Tags) 设置<p>标签信息</p>
 * @method string getBusinessCode() 获取<p>产品编码</p>
 * @method void setBusinessCode(string $BusinessCode) 设置<p>产品编码</p>
 * @method string getProductCode() 获取<p>子产品编码</p>
 * @method void setProductCode(string $ProductCode) 设置<p>子产品编码</p>
 * @method string getActionType() 获取<p>交易类型编码</p>
 * @method void setActionType(string $ActionType) 设置<p>交易类型编码</p>
 * @method string getRegionId() 获取<p>地域ID</p>
 * @method void setRegionId(string $RegionId) 设置<p>地域ID</p>
 * @method integer getProjectId() 获取<p>项目ID</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>项目ID</p>
 * @method array getPriceInfo() 获取<p>价格属性：该组件除单价、时长外的其他影响折扣定价的属性信息</p>
 * @method void setPriceInfo(array $PriceInfo) 设置<p>价格属性：该组件除单价、时长外的其他影响折扣定价的属性信息</p>
 * @method BillDetailAssociatedOrder getAssociatedOrder() 获取<p>关联交易单据ID：和本笔交易关联单据 ID，如，冲销订单，记录原订单、重结订单，退费单记录对应的原购买订单号</p>
 * @method void setAssociatedOrder(BillDetailAssociatedOrder $AssociatedOrder) 设置<p>关联交易单据ID：和本笔交易关联单据 ID，如，冲销订单，记录原订单、重结订单，退费单记录对应的原购买订单号</p>
 * @method string getFormula() 获取<p>计算说明：特殊交易类型计费结算的详细计算说明，如退费及变配</p>
 * @method void setFormula(string $Formula) 设置<p>计算说明：特殊交易类型计费结算的详细计算说明，如退费及变配</p>
 * @method string getFormulaUrl() 获取<p>计费规则：各产品详细的计费规则官网说明链接</p>
 * @method void setFormulaUrl(string $FormulaUrl) 设置<p>计费规则：各产品详细的计费规则官网说明链接</p>
 * @method string getBillDay() 获取<p>账单归属日</p>
 * @method void setBillDay(string $BillDay) 设置<p>账单归属日</p>
 * @method string getBillMonth() 获取<p>账单归属月</p>
 * @method void setBillMonth(string $BillMonth) 设置<p>账单归属月</p>
 * @method string getId() 获取<p>账单记录ID</p>
 * @method void setId(string $Id) 设置<p>账单记录ID</p>
 * @method string getRegionType() 获取<p>国内国际编码</p>
 * @method void setRegionType(string $RegionType) 设置<p>国内国际编码</p>
 * @method string getRegionTypeName() 获取<p>国内国际：资源所属区域类型（国内、国际）</p>
 * @method void setRegionTypeName(string $RegionTypeName) 设置<p>国内国际：资源所属区域类型（国内、国际）</p>
 * @method string getReserveDetail() 获取<p>备注属性（实例配置）：其他备注信息，如预留实例的预留实例类型和交易类型、CCN 产品的两端地域信息</p>
 * @method void setReserveDetail(string $ReserveDetail) 设置<p>备注属性（实例配置）：其他备注信息，如预留实例的预留实例类型和交易类型、CCN 产品的两端地域信息</p>
 * @method string getDiscountObject() 获取<p>优惠对象</p>
 * @method void setDiscountObject(string $DiscountObject) 设置<p>优惠对象</p>
 * @method string getDiscountType() 获取<p>优惠类型</p>
 * @method void setDiscountType(string $DiscountType) 设置<p>优惠类型</p>
 * @method string getDiscountContent() 获取<p>优惠内容</p>
 * @method void setDiscountContent(string $DiscountContent) 设置<p>优惠内容</p>
 * @method string getExtendField() 获取<p>资源扩展信息：体现资源维度的扩展信息，与L2账单的扩展字段信息保持一致。</p>
 * @method void setExtendField(string $ExtendField) 设置<p>资源扩展信息：体现资源维度的扩展信息，与L2账单的扩展字段信息保持一致。</p>
 */
class BillDetail extends AbstractModel
{
    /**
     * @var string <p>产品名称：用户所采购的各类云产品，例如：云服务器 CVM</p>
     */
    public $BusinessCodeName;

    /**
     * @var string <p>子产品名称：用户采购的具体产品细分类型，例如：云服务器 CVM-标准型 S1</p>
     */
    public $ProductCodeName;

    /**
     * @var string <p>计费模式：资源的计费模式，区分为包年包月和按量计费</p>
     */
    public $PayModeName;

    /**
     * @var string <p>项目名称：资源归属的项目，用户在控制台给资源自主分配项目，未分配则是默认项目</p>
     */
    public $ProjectName;

    /**
     * @var string <p>地域：资源所属地域，如华南地区（广州）</p>
     */
    public $RegionName;

    /**
     * @var string <p>可用区：资源所属可用区，如广州三区</p>
     */
    public $ZoneName;

    /**
     * @var string <p>资源 ID：账单中出账对象 ID，不同产品因资源形态不同，资源内容不完全相同，如云服务器 CVM 为对应的实例 ID</p>
     */
    public $ResourceId;

    /**
     * @var string <p>资源别名：用户在控制台为资源设置的名称，如果未设置，则默认为空</p>
     */
    public $ResourceName;

    /**
     * @var string <p>交易类型，如包年包月新购、包年包月续费、按量计费扣费等类型</p>
     */
    public $ActionTypeName;

    /**
     * @var string <p>订单ID：包年包月计费模式下对应子订单号。后付费计费模式下账单费用不存在订单概念，可忽略此参数。</p>
     */
    public $OrderId;

    /**
     * @var string <p>交易ID：结算扣费单号</p>
     */
    public $BillId;

    /**
     * @var string <p>扣费时间：结算扣费时间</p>
     */
    public $PayTime;

    /**
     * @var string <p>开始使用时间：产品服务开始使用时间</p>
     */
    public $FeeBeginTime;

    /**
     * @var string <p>结束使用时间：产品服务结束使用时间</p>
     */
    public $FeeEndTime;

    /**
     * @var array <p>组件列表</p>
     */
    public $ComponentSet;

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
     * @var array <p>标签信息</p>
     */
    public $Tags;

    /**
     * @var string <p>产品编码</p>
     */
    public $BusinessCode;

    /**
     * @var string <p>子产品编码</p>
     */
    public $ProductCode;

    /**
     * @var string <p>交易类型编码</p>
     */
    public $ActionType;

    /**
     * @var string <p>地域ID</p>
     */
    public $RegionId;

    /**
     * @var integer <p>项目ID</p>
     */
    public $ProjectId;

    /**
     * @var array <p>价格属性：该组件除单价、时长外的其他影响折扣定价的属性信息</p>
     */
    public $PriceInfo;

    /**
     * @var BillDetailAssociatedOrder <p>关联交易单据ID：和本笔交易关联单据 ID，如，冲销订单，记录原订单、重结订单，退费单记录对应的原购买订单号</p>
     */
    public $AssociatedOrder;

    /**
     * @var string <p>计算说明：特殊交易类型计费结算的详细计算说明，如退费及变配</p>
     */
    public $Formula;

    /**
     * @var string <p>计费规则：各产品详细的计费规则官网说明链接</p>
     */
    public $FormulaUrl;

    /**
     * @var string <p>账单归属日</p>
     */
    public $BillDay;

    /**
     * @var string <p>账单归属月</p>
     */
    public $BillMonth;

    /**
     * @var string <p>账单记录ID</p>
     */
    public $Id;

    /**
     * @var string <p>国内国际编码</p>
     */
    public $RegionType;

    /**
     * @var string <p>国内国际：资源所属区域类型（国内、国际）</p>
     */
    public $RegionTypeName;

    /**
     * @var string <p>备注属性（实例配置）：其他备注信息，如预留实例的预留实例类型和交易类型、CCN 产品的两端地域信息</p>
     */
    public $ReserveDetail;

    /**
     * @var string <p>优惠对象</p>
     */
    public $DiscountObject;

    /**
     * @var string <p>优惠类型</p>
     */
    public $DiscountType;

    /**
     * @var string <p>优惠内容</p>
     */
    public $DiscountContent;

    /**
     * @var string <p>资源扩展信息：体现资源维度的扩展信息，与L2账单的扩展字段信息保持一致。</p>
     */
    public $ExtendField;

    /**
     * @param string $BusinessCodeName <p>产品名称：用户所采购的各类云产品，例如：云服务器 CVM</p>
     * @param string $ProductCodeName <p>子产品名称：用户采购的具体产品细分类型，例如：云服务器 CVM-标准型 S1</p>
     * @param string $PayModeName <p>计费模式：资源的计费模式，区分为包年包月和按量计费</p>
     * @param string $ProjectName <p>项目名称：资源归属的项目，用户在控制台给资源自主分配项目，未分配则是默认项目</p>
     * @param string $RegionName <p>地域：资源所属地域，如华南地区（广州）</p>
     * @param string $ZoneName <p>可用区：资源所属可用区，如广州三区</p>
     * @param string $ResourceId <p>资源 ID：账单中出账对象 ID，不同产品因资源形态不同，资源内容不完全相同，如云服务器 CVM 为对应的实例 ID</p>
     * @param string $ResourceName <p>资源别名：用户在控制台为资源设置的名称，如果未设置，则默认为空</p>
     * @param string $ActionTypeName <p>交易类型，如包年包月新购、包年包月续费、按量计费扣费等类型</p>
     * @param string $OrderId <p>订单ID：包年包月计费模式下对应子订单号。后付费计费模式下账单费用不存在订单概念，可忽略此参数。</p>
     * @param string $BillId <p>交易ID：结算扣费单号</p>
     * @param string $PayTime <p>扣费时间：结算扣费时间</p>
     * @param string $FeeBeginTime <p>开始使用时间：产品服务开始使用时间</p>
     * @param string $FeeEndTime <p>结束使用时间：产品服务结束使用时间</p>
     * @param array $ComponentSet <p>组件列表</p>
     * @param string $PayerUin <p>支付者UIN：支付者的账号 ID，账号 ID 是用户在腾讯云的唯一账号标识</p>
     * @param string $OwnerUin <p>使用者UIN：实际使用资源的账号 ID</p>
     * @param string $OperateUin <p>操作者UIN：操作者账号 ID（预付费资源下单或后付费操作开通资源账号的 ID 或者角色 ID ）</p>
     * @param array $Tags <p>标签信息</p>
     * @param string $BusinessCode <p>产品编码</p>
     * @param string $ProductCode <p>子产品编码</p>
     * @param string $ActionType <p>交易类型编码</p>
     * @param string $RegionId <p>地域ID</p>
     * @param integer $ProjectId <p>项目ID</p>
     * @param array $PriceInfo <p>价格属性：该组件除单价、时长外的其他影响折扣定价的属性信息</p>
     * @param BillDetailAssociatedOrder $AssociatedOrder <p>关联交易单据ID：和本笔交易关联单据 ID，如，冲销订单，记录原订单、重结订单，退费单记录对应的原购买订单号</p>
     * @param string $Formula <p>计算说明：特殊交易类型计费结算的详细计算说明，如退费及变配</p>
     * @param string $FormulaUrl <p>计费规则：各产品详细的计费规则官网说明链接</p>
     * @param string $BillDay <p>账单归属日</p>
     * @param string $BillMonth <p>账单归属月</p>
     * @param string $Id <p>账单记录ID</p>
     * @param string $RegionType <p>国内国际编码</p>
     * @param string $RegionTypeName <p>国内国际：资源所属区域类型（国内、国际）</p>
     * @param string $ReserveDetail <p>备注属性（实例配置）：其他备注信息，如预留实例的预留实例类型和交易类型、CCN 产品的两端地域信息</p>
     * @param string $DiscountObject <p>优惠对象</p>
     * @param string $DiscountType <p>优惠类型</p>
     * @param string $DiscountContent <p>优惠内容</p>
     * @param string $ExtendField <p>资源扩展信息：体现资源维度的扩展信息，与L2账单的扩展字段信息保持一致。</p>
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

        if (array_key_exists("BillDay",$param) and $param["BillDay"] !== null) {
            $this->BillDay = $param["BillDay"];
        }

        if (array_key_exists("BillMonth",$param) and $param["BillMonth"] !== null) {
            $this->BillMonth = $param["BillMonth"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("RegionType",$param) and $param["RegionType"] !== null) {
            $this->RegionType = $param["RegionType"];
        }

        if (array_key_exists("RegionTypeName",$param) and $param["RegionTypeName"] !== null) {
            $this->RegionTypeName = $param["RegionTypeName"];
        }

        if (array_key_exists("ReserveDetail",$param) and $param["ReserveDetail"] !== null) {
            $this->ReserveDetail = $param["ReserveDetail"];
        }

        if (array_key_exists("DiscountObject",$param) and $param["DiscountObject"] !== null) {
            $this->DiscountObject = $param["DiscountObject"];
        }

        if (array_key_exists("DiscountType",$param) and $param["DiscountType"] !== null) {
            $this->DiscountType = $param["DiscountType"];
        }

        if (array_key_exists("DiscountContent",$param) and $param["DiscountContent"] !== null) {
            $this->DiscountContent = $param["DiscountContent"];
        }

        if (array_key_exists("ExtendField",$param) and $param["ExtendField"] !== null) {
            $this->ExtendField = $param["ExtendField"];
        }
    }
}
