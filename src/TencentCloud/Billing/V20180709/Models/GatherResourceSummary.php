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
 * @method string getPayerUin() 获取<p>支付者 UIN：支付者的账号 ID，账号 ID 是用户在腾讯云的唯一账号标识</p>
 * @method void setPayerUin(string $PayerUin) 设置<p>支付者 UIN：支付者的账号 ID，账号 ID 是用户在腾讯云的唯一账号标识</p>
 * @method string getOwnerUin() 获取<p>使用者 UIN：实际使用资源的账号 ID</p>
 * @method void setOwnerUin(string $OwnerUin) 设置<p>使用者 UIN：实际使用资源的账号 ID</p>
 * @method string getOperateUin() 获取<p>操作者 UIN：操作者账号 ID（预付费资源下单或后付费操作开通资源账号的ID或者角色 ID）</p>
 * @method void setOperateUin(string $OperateUin) 设置<p>操作者 UIN：操作者账号 ID（预付费资源下单或后付费操作开通资源账号的ID或者角色 ID）</p>
 * @method string getInstanceType() 获取<p>实例类型编码</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>实例类型编码</p>
 * @method string getInstanceTypeName() 获取<p>实例类型：购买的产品服务对应的实例类型，包括资源包、RI、SP、竞价实例。常规实例默认展示“-”</p>
 * @method void setInstanceTypeName(string $InstanceTypeName) 设置<p>实例类型：购买的产品服务对应的实例类型，包括资源包、RI、SP、竞价实例。常规实例默认展示“-”</p>
 * @method string getResourceId() 获取<p>资源ID：不同产品因资源形态不同，资源内容不完全相同，如云服务器 CVM 为对应的实例 ID； 若该产品被分拆，则展示产品分拆后的分拆项 ID，如 COS 桶 ID，CDN 域名</p>
 * @method void setResourceId(string $ResourceId) 设置<p>资源ID：不同产品因资源形态不同，资源内容不完全相同，如云服务器 CVM 为对应的实例 ID； 若该产品被分拆，则展示产品分拆后的分拆项 ID，如 COS 桶 ID，CDN 域名</p>
 * @method string getResourceName() 获取<p>实例名称：用户在控制台为资源设置的名称，如未设置默认为空；若该产品被分拆，则展示分拆产品分拆后的分拆项资源别名</p>
 * @method void setResourceName(string $ResourceName) 设置<p>实例名称：用户在控制台为资源设置的名称，如未设置默认为空；若该产品被分拆，则展示分拆产品分拆后的分拆项资源别名</p>
 * @method string getTreeNodeUniqKey() 获取<p>分账单元唯一标识</p>
 * @method void setTreeNodeUniqKey(string $TreeNodeUniqKey) 设置<p>分账单元唯一标识</p>
 * @method string getTreeNodeUniqKeyName() 获取<p>分账单元名称</p>
 * @method void setTreeNodeUniqKeyName(string $TreeNodeUniqKeyName) 设置<p>分账单元名称</p>
 * @method integer getRuleId() 获取<p>资源命中公摊规则ID</p>
 * @method void setRuleId(integer $RuleId) 设置<p>资源命中公摊规则ID</p>
 * @method string getRuleName() 获取<p>资源命中公摊规则名称</p>
 * @method void setRuleName(string $RuleName) 设置<p>资源命中公摊规则名称</p>
 * @method string getBusinessCode() 获取<p>产品编码</p>
 * @method void setBusinessCode(string $BusinessCode) 设置<p>产品编码</p>
 * @method string getBusinessCodeName() 获取<p>产品名称：用户所采购的各类云产品</p>
 * @method void setBusinessCodeName(string $BusinessCodeName) 设置<p>产品名称：用户所采购的各类云产品</p>
 * @method string getItemCode() 获取<p>组件名称编码</p>
 * @method void setItemCode(string $ItemCode) 设置<p>组件名称编码</p>
 * @method string getItemCodeName() 获取<p>组件名称：用户购买的产品或服务，所包含的具体组件</p>
 * @method void setItemCodeName(string $ItemCodeName) 设置<p>组件名称：用户购买的产品或服务，所包含的具体组件</p>
 * @method integer getRegionId() 获取<p>地域ID</p>
 * @method void setRegionId(integer $RegionId) 设置<p>地域ID</p>
 * @method string getRegionName() 获取<p>地域名称：资源所属地域</p>
 * @method void setRegionName(string $RegionName) 设置<p>地域名称：资源所属地域</p>
 * @method array getTag() 获取<p>分账标签：资源绑定的标签</p>
 * @method void setTag(array $Tag) 设置<p>分账标签：资源绑定的标签</p>
 * @method string getRealTotalCost() 获取<p>优惠后总价：优惠后总价 =（原价 - 预留实例抵扣原价 - 节省计划抵扣原价）* 折扣率</p>
 * @method void setRealTotalCost(string $RealTotalCost) 设置<p>优惠后总价：优惠后总价 =（原价 - 预留实例抵扣原价 - 节省计划抵扣原价）* 折扣率</p>
 * @method string getCashPayAmount() 获取<p>现金账户支出(元)：通过现金账户支付的金额</p>
 * @method void setCashPayAmount(string $CashPayAmount) 设置<p>现金账户支出(元)：通过现金账户支付的金额</p>
 * @method string getVoucherPayAmount() 获取<p>代金券支出(元)：使用各类优惠券（如代金券、现金券等）支付的金额</p>
 * @method void setVoucherPayAmount(string $VoucherPayAmount) 设置<p>代金券支出(元)：使用各类优惠券（如代金券、现金券等）支付的金额</p>
 * @method string getIncentivePayAmount() 获取<p>赠送账户支出(元)：使用赠送金支付的金额</p>
 * @method void setIncentivePayAmount(string $IncentivePayAmount) 设置<p>赠送账户支出(元)：使用赠送金支付的金额</p>
 * @method string getTransferPayAmount() 获取<p>分成账户支出(元)：通过分成金账户支付的金额</p>
 * @method void setTransferPayAmount(string $TransferPayAmount) 设置<p>分成账户支出(元)：通过分成金账户支付的金额</p>
 * @method integer getAllocationType() 获取<p>费用归集类型：费用来源类型，分摊、归集、未分配<br>0 - 分摊<br>1 - 归集<br>-1 - 未分配</p>
 * @method void setAllocationType(integer $AllocationType) 设置<p>费用归集类型：费用来源类型，分摊、归集、未分配<br>0 - 分摊<br>1 - 归集<br>-1 - 未分配</p>
 * @method AllocationTreeNode getBelongTreeNodeUniqKey() 获取<p>当前归属单元信息</p>
 * @method void setBelongTreeNodeUniqKey(AllocationTreeNode $BelongTreeNodeUniqKey) 设置<p>当前归属单元信息</p>
 * @method AllocationRule getBelongRule() 获取<p>当前资源命中公摊规则信息</p>
 * @method void setBelongRule(AllocationRule $BelongRule) 设置<p>当前资源命中公摊规则信息</p>
 * @method array getOtherTreeNodeUniqKeys() 获取<p>其它归属单元信息</p>
 * @method void setOtherTreeNodeUniqKeys(array $OtherTreeNodeUniqKeys) 设置<p>其它归属单元信息</p>
 * @method array getOtherRules() 获取<p>其他命中规则信息</p>
 * @method void setOtherRules(array $OtherRules) 设置<p>其他命中规则信息</p>
 * @method integer getProjectId() 获取<p>项目ID</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>项目ID</p>
 * @method string getProjectName() 获取<p>项目名称：资源归属的项目，用户在控制台给资源自主分配项目，未分配则是默认项目</p>
 * @method void setProjectName(string $ProjectName) 设置<p>项目名称：资源归属的项目，用户在控制台给资源自主分配项目，未分配则是默认项目</p>
 * @method string getProductCode() 获取<p>子产品编码</p>
 * @method void setProductCode(string $ProductCode) 设置<p>子产品编码</p>
 * @method string getProductCodeName() 获取<p>子产品名称：用户采购的具体产品细分类型</p>
 * @method void setProductCodeName(string $ProductCodeName) 设置<p>子产品名称：用户采购的具体产品细分类型</p>
 * @method string getPayMode() 获取<p>计费模式编码</p>
 * @method void setPayMode(string $PayMode) 设置<p>计费模式编码</p>
 * @method string getPayModeName() 获取<p>计费模式：资源的计费模式，区分为包年包月和按量计费</p>
 * @method void setPayModeName(string $PayModeName) 设置<p>计费模式：资源的计费模式，区分为包年包月和按量计费</p>
 * @method string getActionType() 获取<p>交易类型编码</p>
 * @method void setActionType(string $ActionType) 设置<p>交易类型编码</p>
 * @method string getActionTypeName() 获取<p>交易类型：明细交易类型</p>
 * @method void setActionTypeName(string $ActionTypeName) 设置<p>交易类型：明细交易类型</p>
 * @method string getSplitItemId() 获取<p>分拆项 ID：涉及分拆产品的分拆后的分拆项 ID，如 COS 桶 ID，CDN 域名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSplitItemId(string $SplitItemId) 设置<p>分拆项 ID：涉及分拆产品的分拆后的分拆项 ID，如 COS 桶 ID，CDN 域名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSplitItemName() 获取<p>分拆项名称：涉及分拆产品的分拆后的分拆项</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSplitItemName(string $SplitItemName) 设置<p>分拆项名称：涉及分拆产品的分拆后的分拆项</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEffectiveMode() 获取<p>归集方式</p><p>枚举值：</p><ul><li>0： 未归集</li><li>1： 自动命中</li><li>2： 手动分配待生效</li><li>3： 手动分配已生效</li></ul>
 * @method void setEffectiveMode(string $EffectiveMode) 设置<p>归集方式</p><p>枚举值：</p><ul><li>0： 未归集</li><li>1： 自动命中</li><li>2： 手动分配待生效</li><li>3： 手动分配已生效</li></ul>
 */
class GatherResourceSummary extends AbstractModel
{
    /**
     * @var string <p>支付者 UIN：支付者的账号 ID，账号 ID 是用户在腾讯云的唯一账号标识</p>
     */
    public $PayerUin;

    /**
     * @var string <p>使用者 UIN：实际使用资源的账号 ID</p>
     */
    public $OwnerUin;

    /**
     * @var string <p>操作者 UIN：操作者账号 ID（预付费资源下单或后付费操作开通资源账号的ID或者角色 ID）</p>
     */
    public $OperateUin;

    /**
     * @var string <p>实例类型编码</p>
     */
    public $InstanceType;

    /**
     * @var string <p>实例类型：购买的产品服务对应的实例类型，包括资源包、RI、SP、竞价实例。常规实例默认展示“-”</p>
     */
    public $InstanceTypeName;

    /**
     * @var string <p>资源ID：不同产品因资源形态不同，资源内容不完全相同，如云服务器 CVM 为对应的实例 ID； 若该产品被分拆，则展示产品分拆后的分拆项 ID，如 COS 桶 ID，CDN 域名</p>
     */
    public $ResourceId;

    /**
     * @var string <p>实例名称：用户在控制台为资源设置的名称，如未设置默认为空；若该产品被分拆，则展示分拆产品分拆后的分拆项资源别名</p>
     */
    public $ResourceName;

    /**
     * @var string <p>分账单元唯一标识</p>
     */
    public $TreeNodeUniqKey;

    /**
     * @var string <p>分账单元名称</p>
     */
    public $TreeNodeUniqKeyName;

    /**
     * @var integer <p>资源命中公摊规则ID</p>
     */
    public $RuleId;

    /**
     * @var string <p>资源命中公摊规则名称</p>
     */
    public $RuleName;

    /**
     * @var string <p>产品编码</p>
     */
    public $BusinessCode;

    /**
     * @var string <p>产品名称：用户所采购的各类云产品</p>
     */
    public $BusinessCodeName;

    /**
     * @var string <p>组件名称编码</p>
     */
    public $ItemCode;

    /**
     * @var string <p>组件名称：用户购买的产品或服务，所包含的具体组件</p>
     */
    public $ItemCodeName;

    /**
     * @var integer <p>地域ID</p>
     */
    public $RegionId;

    /**
     * @var string <p>地域名称：资源所属地域</p>
     */
    public $RegionName;

    /**
     * @var array <p>分账标签：资源绑定的标签</p>
     */
    public $Tag;

    /**
     * @var string <p>优惠后总价：优惠后总价 =（原价 - 预留实例抵扣原价 - 节省计划抵扣原价）* 折扣率</p>
     */
    public $RealTotalCost;

    /**
     * @var string <p>现金账户支出(元)：通过现金账户支付的金额</p>
     */
    public $CashPayAmount;

    /**
     * @var string <p>代金券支出(元)：使用各类优惠券（如代金券、现金券等）支付的金额</p>
     */
    public $VoucherPayAmount;

    /**
     * @var string <p>赠送账户支出(元)：使用赠送金支付的金额</p>
     */
    public $IncentivePayAmount;

    /**
     * @var string <p>分成账户支出(元)：通过分成金账户支付的金额</p>
     */
    public $TransferPayAmount;

    /**
     * @var integer <p>费用归集类型：费用来源类型，分摊、归集、未分配<br>0 - 分摊<br>1 - 归集<br>-1 - 未分配</p>
     */
    public $AllocationType;

    /**
     * @var AllocationTreeNode <p>当前归属单元信息</p>
     */
    public $BelongTreeNodeUniqKey;

    /**
     * @var AllocationRule <p>当前资源命中公摊规则信息</p>
     */
    public $BelongRule;

    /**
     * @var array <p>其它归属单元信息</p>
     */
    public $OtherTreeNodeUniqKeys;

    /**
     * @var array <p>其他命中规则信息</p>
     */
    public $OtherRules;

    /**
     * @var integer <p>项目ID</p>
     */
    public $ProjectId;

    /**
     * @var string <p>项目名称：资源归属的项目，用户在控制台给资源自主分配项目，未分配则是默认项目</p>
     */
    public $ProjectName;

    /**
     * @var string <p>子产品编码</p>
     */
    public $ProductCode;

    /**
     * @var string <p>子产品名称：用户采购的具体产品细分类型</p>
     */
    public $ProductCodeName;

    /**
     * @var string <p>计费模式编码</p>
     */
    public $PayMode;

    /**
     * @var string <p>计费模式：资源的计费模式，区分为包年包月和按量计费</p>
     */
    public $PayModeName;

    /**
     * @var string <p>交易类型编码</p>
     */
    public $ActionType;

    /**
     * @var string <p>交易类型：明细交易类型</p>
     */
    public $ActionTypeName;

    /**
     * @var string <p>分拆项 ID：涉及分拆产品的分拆后的分拆项 ID，如 COS 桶 ID，CDN 域名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $SplitItemId;

    /**
     * @var string <p>分拆项名称：涉及分拆产品的分拆后的分拆项</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $SplitItemName;

    /**
     * @var string <p>归集方式</p><p>枚举值：</p><ul><li>0： 未归集</li><li>1： 自动命中</li><li>2： 手动分配待生效</li><li>3： 手动分配已生效</li></ul>
     */
    public $EffectiveMode;

    /**
     * @param string $PayerUin <p>支付者 UIN：支付者的账号 ID，账号 ID 是用户在腾讯云的唯一账号标识</p>
     * @param string $OwnerUin <p>使用者 UIN：实际使用资源的账号 ID</p>
     * @param string $OperateUin <p>操作者 UIN：操作者账号 ID（预付费资源下单或后付费操作开通资源账号的ID或者角色 ID）</p>
     * @param string $InstanceType <p>实例类型编码</p>
     * @param string $InstanceTypeName <p>实例类型：购买的产品服务对应的实例类型，包括资源包、RI、SP、竞价实例。常规实例默认展示“-”</p>
     * @param string $ResourceId <p>资源ID：不同产品因资源形态不同，资源内容不完全相同，如云服务器 CVM 为对应的实例 ID； 若该产品被分拆，则展示产品分拆后的分拆项 ID，如 COS 桶 ID，CDN 域名</p>
     * @param string $ResourceName <p>实例名称：用户在控制台为资源设置的名称，如未设置默认为空；若该产品被分拆，则展示分拆产品分拆后的分拆项资源别名</p>
     * @param string $TreeNodeUniqKey <p>分账单元唯一标识</p>
     * @param string $TreeNodeUniqKeyName <p>分账单元名称</p>
     * @param integer $RuleId <p>资源命中公摊规则ID</p>
     * @param string $RuleName <p>资源命中公摊规则名称</p>
     * @param string $BusinessCode <p>产品编码</p>
     * @param string $BusinessCodeName <p>产品名称：用户所采购的各类云产品</p>
     * @param string $ItemCode <p>组件名称编码</p>
     * @param string $ItemCodeName <p>组件名称：用户购买的产品或服务，所包含的具体组件</p>
     * @param integer $RegionId <p>地域ID</p>
     * @param string $RegionName <p>地域名称：资源所属地域</p>
     * @param array $Tag <p>分账标签：资源绑定的标签</p>
     * @param string $RealTotalCost <p>优惠后总价：优惠后总价 =（原价 - 预留实例抵扣原价 - 节省计划抵扣原价）* 折扣率</p>
     * @param string $CashPayAmount <p>现金账户支出(元)：通过现金账户支付的金额</p>
     * @param string $VoucherPayAmount <p>代金券支出(元)：使用各类优惠券（如代金券、现金券等）支付的金额</p>
     * @param string $IncentivePayAmount <p>赠送账户支出(元)：使用赠送金支付的金额</p>
     * @param string $TransferPayAmount <p>分成账户支出(元)：通过分成金账户支付的金额</p>
     * @param integer $AllocationType <p>费用归集类型：费用来源类型，分摊、归集、未分配<br>0 - 分摊<br>1 - 归集<br>-1 - 未分配</p>
     * @param AllocationTreeNode $BelongTreeNodeUniqKey <p>当前归属单元信息</p>
     * @param AllocationRule $BelongRule <p>当前资源命中公摊规则信息</p>
     * @param array $OtherTreeNodeUniqKeys <p>其它归属单元信息</p>
     * @param array $OtherRules <p>其他命中规则信息</p>
     * @param integer $ProjectId <p>项目ID</p>
     * @param string $ProjectName <p>项目名称：资源归属的项目，用户在控制台给资源自主分配项目，未分配则是默认项目</p>
     * @param string $ProductCode <p>子产品编码</p>
     * @param string $ProductCodeName <p>子产品名称：用户采购的具体产品细分类型</p>
     * @param string $PayMode <p>计费模式编码</p>
     * @param string $PayModeName <p>计费模式：资源的计费模式，区分为包年包月和按量计费</p>
     * @param string $ActionType <p>交易类型编码</p>
     * @param string $ActionTypeName <p>交易类型：明细交易类型</p>
     * @param string $SplitItemId <p>分拆项 ID：涉及分拆产品的分拆后的分拆项 ID，如 COS 桶 ID，CDN 域名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SplitItemName <p>分拆项名称：涉及分拆产品的分拆后的分拆项</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EffectiveMode <p>归集方式</p><p>枚举值：</p><ul><li>0： 未归集</li><li>1： 自动命中</li><li>2： 手动分配待生效</li><li>3： 手动分配已生效</li></ul>
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

        if (array_key_exists("EffectiveMode",$param) and $param["EffectiveMode"] !== null) {
            $this->EffectiveMode = $param["EffectiveMode"];
        }
    }
}
