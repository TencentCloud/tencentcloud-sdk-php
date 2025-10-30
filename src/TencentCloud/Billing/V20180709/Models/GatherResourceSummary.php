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
 * 资源归集汇总
 *
 * @method string getPayerUin() 获取支付者 UIN：支付者的账号 ID，账号 ID 是用户在腾讯云的唯一账号标识
 * @method void setPayerUin(string $PayerUin) 设置支付者 UIN：支付者的账号 ID，账号 ID 是用户在腾讯云的唯一账号标识
 * @method string getOwnerUin() 获取使用者 UIN：实际使用资源的账号 ID
 * @method void setOwnerUin(string $OwnerUin) 设置使用者 UIN：实际使用资源的账号 ID
 * @method string getOperateUin() 获取操作者 UIN：操作者账号 ID（预付费资源下单或后付费操作开通资源账号的ID或者角色 ID）
 * @method void setOperateUin(string $OperateUin) 设置操作者 UIN：操作者账号 ID（预付费资源下单或后付费操作开通资源账号的ID或者角色 ID）
 * @method string getInstanceType() 获取实例类型编码
 * @method void setInstanceType(string $InstanceType) 设置实例类型编码
 * @method string getInstanceTypeName() 获取实例类型：购买的产品服务对应的实例类型，包括资源包、RI、SP、竞价实例。常规实例默认展示“-”
 * @method void setInstanceTypeName(string $InstanceTypeName) 设置实例类型：购买的产品服务对应的实例类型，包括资源包、RI、SP、竞价实例。常规实例默认展示“-”
 * @method string getResourceId() 获取资源ID：不同产品因资源形态不同，资源内容不完全相同，如云服务器 CVM 为对应的实例 ID； 若该产品被分拆，则展示产品分拆后的分拆项 ID，如 COS 桶 ID，CDN 域名
 * @method void setResourceId(string $ResourceId) 设置资源ID：不同产品因资源形态不同，资源内容不完全相同，如云服务器 CVM 为对应的实例 ID； 若该产品被分拆，则展示产品分拆后的分拆项 ID，如 COS 桶 ID，CDN 域名
 * @method string getResourceName() 获取实例名称：用户在控制台为资源设置的名称，如未设置默认为空；若该产品被分拆，则展示分拆产品分拆后的分拆项资源别名
 * @method void setResourceName(string $ResourceName) 设置实例名称：用户在控制台为资源设置的名称，如未设置默认为空；若该产品被分拆，则展示分拆产品分拆后的分拆项资源别名
 * @method string getTreeNodeUniqKey() 获取分账单元唯一标识
 * @method void setTreeNodeUniqKey(string $TreeNodeUniqKey) 设置分账单元唯一标识
 * @method string getTreeNodeUniqKeyName() 获取分账单元名称
 * @method void setTreeNodeUniqKeyName(string $TreeNodeUniqKeyName) 设置分账单元名称
 * @method integer getRuleId() 获取资源命中公摊规则ID
 * @method void setRuleId(integer $RuleId) 设置资源命中公摊规则ID
 * @method string getRuleName() 获取资源命中公摊规则名称
 * @method void setRuleName(string $RuleName) 设置资源命中公摊规则名称
 * @method string getBusinessCode() 获取产品编码
 * @method void setBusinessCode(string $BusinessCode) 设置产品编码
 * @method string getBusinessCodeName() 获取产品名称：用户所采购的各类云产品
 * @method void setBusinessCodeName(string $BusinessCodeName) 设置产品名称：用户所采购的各类云产品
 * @method string getItemCode() 获取组件名称编码
 * @method void setItemCode(string $ItemCode) 设置组件名称编码
 * @method string getItemCodeName() 获取组件名称：用户购买的产品或服务，所包含的具体组件
 * @method void setItemCodeName(string $ItemCodeName) 设置组件名称：用户购买的产品或服务，所包含的具体组件
 * @method integer getRegionId() 获取地域ID
 * @method void setRegionId(integer $RegionId) 设置地域ID
 * @method string getRegionName() 获取地域名称：资源所属地域
 * @method void setRegionName(string $RegionName) 设置地域名称：资源所属地域
 * @method array getTag() 获取分账标签：资源绑定的标签
 * @method void setTag(array $Tag) 设置分账标签：资源绑定的标签
 * @method string getRealTotalCost() 获取优惠后总价：优惠后总价 =（原价 - 预留实例抵扣原价 - 节省计划抵扣原价）* 折扣率
 * @method void setRealTotalCost(string $RealTotalCost) 设置优惠后总价：优惠后总价 =（原价 - 预留实例抵扣原价 - 节省计划抵扣原价）* 折扣率
 * @method string getCashPayAmount() 获取现金账户支出(元)：通过现金账户支付的金额
 * @method void setCashPayAmount(string $CashPayAmount) 设置现金账户支出(元)：通过现金账户支付的金额
 * @method string getVoucherPayAmount() 获取代金券支出(元)：使用各类优惠券（如代金券、现金券等）支付的金额
 * @method void setVoucherPayAmount(string $VoucherPayAmount) 设置代金券支出(元)：使用各类优惠券（如代金券、现金券等）支付的金额
 * @method string getIncentivePayAmount() 获取赠送账户支出(元)：使用赠送金支付的金额
 * @method void setIncentivePayAmount(string $IncentivePayAmount) 设置赠送账户支出(元)：使用赠送金支付的金额
 * @method string getTransferPayAmount() 获取分成账户支出(元)：通过分成金账户支付的金额
 * @method void setTransferPayAmount(string $TransferPayAmount) 设置分成账户支出(元)：通过分成金账户支付的金额
 * @method integer getAllocationType() 获取费用归集类型：费用来源类型，分摊、归集、未分配
0 - 分摊
1 - 归集
-1 - 未分配
 * @method void setAllocationType(integer $AllocationType) 设置费用归集类型：费用来源类型，分摊、归集、未分配
0 - 分摊
1 - 归集
-1 - 未分配
 * @method AllocationTreeNode getBelongTreeNodeUniqKey() 获取当前归属单元信息
 * @method void setBelongTreeNodeUniqKey(AllocationTreeNode $BelongTreeNodeUniqKey) 设置当前归属单元信息
 * @method AllocationRule getBelongRule() 获取当前资源命中公摊规则信息
 * @method void setBelongRule(AllocationRule $BelongRule) 设置当前资源命中公摊规则信息
 * @method array getOtherTreeNodeUniqKeys() 获取其它归属单元信息
 * @method void setOtherTreeNodeUniqKeys(array $OtherTreeNodeUniqKeys) 设置其它归属单元信息
 * @method array getOtherRules() 获取其他命中规则信息
 * @method void setOtherRules(array $OtherRules) 设置其他命中规则信息
 * @method integer getProjectId() 获取项目ID
 * @method void setProjectId(integer $ProjectId) 设置项目ID
 * @method string getProjectName() 获取项目名称：资源归属的项目，用户在控制台给资源自主分配项目，未分配则是默认项目
 * @method void setProjectName(string $ProjectName) 设置项目名称：资源归属的项目，用户在控制台给资源自主分配项目，未分配则是默认项目
 * @method string getProductCode() 获取子产品编码
 * @method void setProductCode(string $ProductCode) 设置子产品编码
 * @method string getProductCodeName() 获取子产品名称：用户采购的具体产品细分类型
 * @method void setProductCodeName(string $ProductCodeName) 设置子产品名称：用户采购的具体产品细分类型
 * @method string getPayMode() 获取计费模式编码
 * @method void setPayMode(string $PayMode) 设置计费模式编码
 * @method string getPayModeName() 获取计费模式：资源的计费模式，区分为包年包月和按量计费
 * @method void setPayModeName(string $PayModeName) 设置计费模式：资源的计费模式，区分为包年包月和按量计费
 * @method string getActionType() 获取交易类型编码
 * @method void setActionType(string $ActionType) 设置交易类型编码
 * @method string getActionTypeName() 获取交易类型：明细交易类型
 * @method void setActionTypeName(string $ActionTypeName) 设置交易类型：明细交易类型
 * @method string getSplitItemId() 获取分拆项 ID：涉及分拆产品的分拆后的分拆项 ID，如 COS 桶 ID，CDN 域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSplitItemId(string $SplitItemId) 设置分拆项 ID：涉及分拆产品的分拆后的分拆项 ID，如 COS 桶 ID，CDN 域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSplitItemName() 获取分拆项名称：涉及分拆产品的分拆后的分拆项
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSplitItemName(string $SplitItemName) 设置分拆项名称：涉及分拆产品的分拆后的分拆项
注意：此字段可能返回 null，表示取不到有效值。
 */
class GatherResourceSummary extends AbstractModel
{
    /**
     * @var string 支付者 UIN：支付者的账号 ID，账号 ID 是用户在腾讯云的唯一账号标识
     */
    public $PayerUin;

    /**
     * @var string 使用者 UIN：实际使用资源的账号 ID
     */
    public $OwnerUin;

    /**
     * @var string 操作者 UIN：操作者账号 ID（预付费资源下单或后付费操作开通资源账号的ID或者角色 ID）
     */
    public $OperateUin;

    /**
     * @var string 实例类型编码
     */
    public $InstanceType;

    /**
     * @var string 实例类型：购买的产品服务对应的实例类型，包括资源包、RI、SP、竞价实例。常规实例默认展示“-”
     */
    public $InstanceTypeName;

    /**
     * @var string 资源ID：不同产品因资源形态不同，资源内容不完全相同，如云服务器 CVM 为对应的实例 ID； 若该产品被分拆，则展示产品分拆后的分拆项 ID，如 COS 桶 ID，CDN 域名
     */
    public $ResourceId;

    /**
     * @var string 实例名称：用户在控制台为资源设置的名称，如未设置默认为空；若该产品被分拆，则展示分拆产品分拆后的分拆项资源别名
     */
    public $ResourceName;

    /**
     * @var string 分账单元唯一标识
     */
    public $TreeNodeUniqKey;

    /**
     * @var string 分账单元名称
     */
    public $TreeNodeUniqKeyName;

    /**
     * @var integer 资源命中公摊规则ID
     */
    public $RuleId;

    /**
     * @var string 资源命中公摊规则名称
     */
    public $RuleName;

    /**
     * @var string 产品编码
     */
    public $BusinessCode;

    /**
     * @var string 产品名称：用户所采购的各类云产品
     */
    public $BusinessCodeName;

    /**
     * @var string 组件名称编码
     */
    public $ItemCode;

    /**
     * @var string 组件名称：用户购买的产品或服务，所包含的具体组件
     */
    public $ItemCodeName;

    /**
     * @var integer 地域ID
     */
    public $RegionId;

    /**
     * @var string 地域名称：资源所属地域
     */
    public $RegionName;

    /**
     * @var array 分账标签：资源绑定的标签
     */
    public $Tag;

    /**
     * @var string 优惠后总价：优惠后总价 =（原价 - 预留实例抵扣原价 - 节省计划抵扣原价）* 折扣率
     */
    public $RealTotalCost;

    /**
     * @var string 现金账户支出(元)：通过现金账户支付的金额
     */
    public $CashPayAmount;

    /**
     * @var string 代金券支出(元)：使用各类优惠券（如代金券、现金券等）支付的金额
     */
    public $VoucherPayAmount;

    /**
     * @var string 赠送账户支出(元)：使用赠送金支付的金额
     */
    public $IncentivePayAmount;

    /**
     * @var string 分成账户支出(元)：通过分成金账户支付的金额
     */
    public $TransferPayAmount;

    /**
     * @var integer 费用归集类型：费用来源类型，分摊、归集、未分配
0 - 分摊
1 - 归集
-1 - 未分配
     */
    public $AllocationType;

    /**
     * @var AllocationTreeNode 当前归属单元信息
     */
    public $BelongTreeNodeUniqKey;

    /**
     * @var AllocationRule 当前资源命中公摊规则信息
     */
    public $BelongRule;

    /**
     * @var array 其它归属单元信息
     */
    public $OtherTreeNodeUniqKeys;

    /**
     * @var array 其他命中规则信息
     */
    public $OtherRules;

    /**
     * @var integer 项目ID
     */
    public $ProjectId;

    /**
     * @var string 项目名称：资源归属的项目，用户在控制台给资源自主分配项目，未分配则是默认项目
     */
    public $ProjectName;

    /**
     * @var string 子产品编码
     */
    public $ProductCode;

    /**
     * @var string 子产品名称：用户采购的具体产品细分类型
     */
    public $ProductCodeName;

    /**
     * @var string 计费模式编码
     */
    public $PayMode;

    /**
     * @var string 计费模式：资源的计费模式，区分为包年包月和按量计费
     */
    public $PayModeName;

    /**
     * @var string 交易类型编码
     */
    public $ActionType;

    /**
     * @var string 交易类型：明细交易类型
     */
    public $ActionTypeName;

    /**
     * @var string 分拆项 ID：涉及分拆产品的分拆后的分拆项 ID，如 COS 桶 ID，CDN 域名
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $SplitItemId;

    /**
     * @var string 分拆项名称：涉及分拆产品的分拆后的分拆项
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $SplitItemName;

    /**
     * @param string $PayerUin 支付者 UIN：支付者的账号 ID，账号 ID 是用户在腾讯云的唯一账号标识
     * @param string $OwnerUin 使用者 UIN：实际使用资源的账号 ID
     * @param string $OperateUin 操作者 UIN：操作者账号 ID（预付费资源下单或后付费操作开通资源账号的ID或者角色 ID）
     * @param string $InstanceType 实例类型编码
     * @param string $InstanceTypeName 实例类型：购买的产品服务对应的实例类型，包括资源包、RI、SP、竞价实例。常规实例默认展示“-”
     * @param string $ResourceId 资源ID：不同产品因资源形态不同，资源内容不完全相同，如云服务器 CVM 为对应的实例 ID； 若该产品被分拆，则展示产品分拆后的分拆项 ID，如 COS 桶 ID，CDN 域名
     * @param string $ResourceName 实例名称：用户在控制台为资源设置的名称，如未设置默认为空；若该产品被分拆，则展示分拆产品分拆后的分拆项资源别名
     * @param string $TreeNodeUniqKey 分账单元唯一标识
     * @param string $TreeNodeUniqKeyName 分账单元名称
     * @param integer $RuleId 资源命中公摊规则ID
     * @param string $RuleName 资源命中公摊规则名称
     * @param string $BusinessCode 产品编码
     * @param string $BusinessCodeName 产品名称：用户所采购的各类云产品
     * @param string $ItemCode 组件名称编码
     * @param string $ItemCodeName 组件名称：用户购买的产品或服务，所包含的具体组件
     * @param integer $RegionId 地域ID
     * @param string $RegionName 地域名称：资源所属地域
     * @param array $Tag 分账标签：资源绑定的标签
     * @param string $RealTotalCost 优惠后总价：优惠后总价 =（原价 - 预留实例抵扣原价 - 节省计划抵扣原价）* 折扣率
     * @param string $CashPayAmount 现金账户支出(元)：通过现金账户支付的金额
     * @param string $VoucherPayAmount 代金券支出(元)：使用各类优惠券（如代金券、现金券等）支付的金额
     * @param string $IncentivePayAmount 赠送账户支出(元)：使用赠送金支付的金额
     * @param string $TransferPayAmount 分成账户支出(元)：通过分成金账户支付的金额
     * @param integer $AllocationType 费用归集类型：费用来源类型，分摊、归集、未分配
0 - 分摊
1 - 归集
-1 - 未分配
     * @param AllocationTreeNode $BelongTreeNodeUniqKey 当前归属单元信息
     * @param AllocationRule $BelongRule 当前资源命中公摊规则信息
     * @param array $OtherTreeNodeUniqKeys 其它归属单元信息
     * @param array $OtherRules 其他命中规则信息
     * @param integer $ProjectId 项目ID
     * @param string $ProjectName 项目名称：资源归属的项目，用户在控制台给资源自主分配项目，未分配则是默认项目
     * @param string $ProductCode 子产品编码
     * @param string $ProductCodeName 子产品名称：用户采购的具体产品细分类型
     * @param string $PayMode 计费模式编码
     * @param string $PayModeName 计费模式：资源的计费模式，区分为包年包月和按量计费
     * @param string $ActionType 交易类型编码
     * @param string $ActionTypeName 交易类型：明细交易类型
     * @param string $SplitItemId 分拆项 ID：涉及分拆产品的分拆后的分拆项 ID，如 COS 桶 ID，CDN 域名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SplitItemName 分拆项名称：涉及分拆产品的分拆后的分拆项
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
        if (array_key_exists("PayerUin",$param) and $param["PayerUin"] !== null) {
            $this->PayerUin = $param["PayerUin"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("OperateUin",$param) and $param["OperateUin"] !== null) {
            $this->OperateUin = $param["OperateUin"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceTypeName",$param) and $param["InstanceTypeName"] !== null) {
            $this->InstanceTypeName = $param["InstanceTypeName"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("TreeNodeUniqKey",$param) and $param["TreeNodeUniqKey"] !== null) {
            $this->TreeNodeUniqKey = $param["TreeNodeUniqKey"];
        }

        if (array_key_exists("TreeNodeUniqKeyName",$param) and $param["TreeNodeUniqKeyName"] !== null) {
            $this->TreeNodeUniqKeyName = $param["TreeNodeUniqKeyName"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("BusinessCode",$param) and $param["BusinessCode"] !== null) {
            $this->BusinessCode = $param["BusinessCode"];
        }

        if (array_key_exists("BusinessCodeName",$param) and $param["BusinessCodeName"] !== null) {
            $this->BusinessCodeName = $param["BusinessCodeName"];
        }

        if (array_key_exists("ItemCode",$param) and $param["ItemCode"] !== null) {
            $this->ItemCode = $param["ItemCode"];
        }

        if (array_key_exists("ItemCodeName",$param) and $param["ItemCodeName"] !== null) {
            $this->ItemCodeName = $param["ItemCodeName"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = [];
            foreach ($param["Tag"] as $key => $value){
                $obj = new BillTag();
                $obj->deserialize($value);
                array_push($this->Tag, $obj);
            }
        }

        if (array_key_exists("RealTotalCost",$param) and $param["RealTotalCost"] !== null) {
            $this->RealTotalCost = $param["RealTotalCost"];
        }

        if (array_key_exists("CashPayAmount",$param) and $param["CashPayAmount"] !== null) {
            $this->CashPayAmount = $param["CashPayAmount"];
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

        if (array_key_exists("AllocationType",$param) and $param["AllocationType"] !== null) {
            $this->AllocationType = $param["AllocationType"];
        }

        if (array_key_exists("BelongTreeNodeUniqKey",$param) and $param["BelongTreeNodeUniqKey"] !== null) {
            $this->BelongTreeNodeUniqKey = new AllocationTreeNode();
            $this->BelongTreeNodeUniqKey->deserialize($param["BelongTreeNodeUniqKey"]);
        }

        if (array_key_exists("BelongRule",$param) and $param["BelongRule"] !== null) {
            $this->BelongRule = new AllocationRule();
            $this->BelongRule->deserialize($param["BelongRule"]);
        }

        if (array_key_exists("OtherTreeNodeUniqKeys",$param) and $param["OtherTreeNodeUniqKeys"] !== null) {
            $this->OtherTreeNodeUniqKeys = [];
            foreach ($param["OtherTreeNodeUniqKeys"] as $key => $value){
                $obj = new AllocationTreeNode();
                $obj->deserialize($value);
                array_push($this->OtherTreeNodeUniqKeys, $obj);
            }
        }

        if (array_key_exists("OtherRules",$param) and $param["OtherRules"] !== null) {
            $this->OtherRules = [];
            foreach ($param["OtherRules"] as $key => $value){
                $obj = new AllocationRule();
                $obj->deserialize($value);
                array_push($this->OtherRules, $obj);
            }
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("ProductCodeName",$param) and $param["ProductCodeName"] !== null) {
            $this->ProductCodeName = $param["ProductCodeName"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("PayModeName",$param) and $param["PayModeName"] !== null) {
            $this->PayModeName = $param["PayModeName"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("ActionTypeName",$param) and $param["ActionTypeName"] !== null) {
            $this->ActionTypeName = $param["ActionTypeName"];
        }

        if (array_key_exists("SplitItemId",$param) and $param["SplitItemId"] !== null) {
            $this->SplitItemId = $param["SplitItemId"];
        }

        if (array_key_exists("SplitItemName",$param) and $param["SplitItemName"] !== null) {
            $this->SplitItemName = $param["SplitItemName"];
        }
    }
}
