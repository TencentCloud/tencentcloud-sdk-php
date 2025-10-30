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
 * 分账账单按组件汇总明细
 *
 * @method string getTreeNodeUniqKey() 获取分账单元唯一标识
 * @method void setTreeNodeUniqKey(string $TreeNodeUniqKey) 设置分账单元唯一标识
 * @method string getTreeNodeUniqKeyName() 获取分账单元名称
 * @method void setTreeNodeUniqKeyName(string $TreeNodeUniqKeyName) 设置分账单元名称
 * @method string getBillDate() 获取日期：结算日期
 * @method void setBillDate(string $BillDate) 设置日期：结算日期
 * @method string getPayerUin() 获取支付者 UIN：支付者的账号 ID，账号 ID 是用户在腾讯云的唯一账号标识
 * @method void setPayerUin(string $PayerUin) 设置支付者 UIN：支付者的账号 ID，账号 ID 是用户在腾讯云的唯一账号标识
 * @method string getOwnerUin() 获取使用者 UIN：实际使用资源的账号 ID
 * @method void setOwnerUin(string $OwnerUin) 设置使用者 UIN：实际使用资源的账号 ID
 * @method string getOperateUin() 获取操作者 UIN：操作者账号 ID（预付费资源下单或后付费操作开通资源账号的ID或者角色 ID）
 * @method void setOperateUin(string $OperateUin) 设置操作者 UIN：操作者账号 ID（预付费资源下单或后付费操作开通资源账号的ID或者角色 ID）
 * @method string getPayMode() 获取计费模式编码
 * @method void setPayMode(string $PayMode) 设置计费模式编码
 * @method string getPayModeName() 获取计费模式：资源的计费模式，区分为包年包月和按量计费
 * @method void setPayModeName(string $PayModeName) 设置计费模式：资源的计费模式，区分为包年包月和按量计费
 * @method string getActionType() 获取交易类型编码
 * @method void setActionType(string $ActionType) 设置交易类型编码
 * @method string getActionTypeName() 获取交易类型：明细交易类型
 * @method void setActionTypeName(string $ActionTypeName) 设置交易类型：明细交易类型
 * @method string getBusinessCode() 获取产品编码
 * @method void setBusinessCode(string $BusinessCode) 设置产品编码
 * @method string getBusinessCodeName() 获取产品名称：用户所采购的各类云产品
 * @method void setBusinessCodeName(string $BusinessCodeName) 设置产品名称：用户所采购的各类云产品
 * @method string getProductCode() 获取子产品编码
 * @method void setProductCode(string $ProductCode) 设置子产品编码
 * @method string getProductCodeName() 获取子产品名称：用户采购的具体产品细分类型
 * @method void setProductCodeName(string $ProductCodeName) 设置子产品名称：用户采购的具体产品细分类型
 * @method integer getRegionId() 获取地域ID
 * @method void setRegionId(integer $RegionId) 设置地域ID
 * @method string getRegionName() 获取地域名称：资源所属地域
 * @method void setRegionName(string $RegionName) 设置地域名称：资源所属地域
 * @method integer getZoneId() 获取可用区ID
 * @method void setZoneId(integer $ZoneId) 设置可用区ID
 * @method string getZoneName() 获取可用区：资源所属可用区
 * @method void setZoneName(string $ZoneName) 设置可用区：资源所属可用区
 * @method string getInstanceType() 获取实例类型编码
 * @method void setInstanceType(string $InstanceType) 设置实例类型编码
 * @method string getInstanceTypeName() 获取实例类型：购买的产品服务对应的实例类型，包括资源包、RI、SP、竞价实例。常规实例默认展示“-”
 * @method void setInstanceTypeName(string $InstanceTypeName) 设置实例类型：购买的产品服务对应的实例类型，包括资源包、RI、SP、竞价实例。常规实例默认展示“-”
 * @method string getResourceId() 获取资源ID：不同产品因资源形态不同，资源内容不完全相同，如云服务器 CVM 为对应的实例 ID； 若该产品被分拆，则展示产品分拆后的分拆项 ID，如 COS 桶 ID，CDN 域名
 * @method void setResourceId(string $ResourceId) 设置资源ID：不同产品因资源形态不同，资源内容不完全相同，如云服务器 CVM 为对应的实例 ID； 若该产品被分拆，则展示产品分拆后的分拆项 ID，如 COS 桶 ID，CDN 域名
 * @method string getResourceName() 获取实例名称：用户在控制台为资源设置的名称，如未设置默认为空；若该产品被分拆，则展示分拆产品分拆后的分拆项资源别名
 * @method void setResourceName(string $ResourceName) 设置实例名称：用户在控制台为资源设置的名称，如未设置默认为空；若该产品被分拆，则展示分拆产品分拆后的分拆项资源别名
 * @method array getTag() 获取分账标签：资源绑定的标签
 * @method void setTag(array $Tag) 设置分账标签：资源绑定的标签
 * @method integer getProjectId() 获取项目ID
 * @method void setProjectId(integer $ProjectId) 设置项目ID
 * @method string getProjectName() 获取项目名称：资源归属的项目，用户在控制台给资源自主分配项目，未分配则是默认项目
 * @method void setProjectName(string $ProjectName) 设置项目名称：资源归属的项目，用户在控制台给资源自主分配项目，未分配则是默认项目
 * @method integer getAllocationType() 获取费用归集类型：费用来源类型，分摊、归集、未分配
0 - 分摊
1 - 归集
-1 - 未分配
 * @method void setAllocationType(integer $AllocationType) 设置费用归集类型：费用来源类型，分摊、归集、未分配
0 - 分摊
1 - 归集
-1 - 未分配
 * @method string getTotalCost() 获取组件原价：原价 = 组件刊例价 * 组件用量 * 使用时长（如客户享受一口价/合同价则默认不展示，退费类场景也默认不展示），指定价模式
 * @method void setTotalCost(string $TotalCost) 设置组件原价：原价 = 组件刊例价 * 组件用量 * 使用时长（如客户享受一口价/合同价则默认不展示，退费类场景也默认不展示），指定价模式
 * @method string getRiTimeSpan() 获取预留实例抵扣时长：本产品或服务使用预留实例抵扣的使用时长
 * @method void setRiTimeSpan(string $RiTimeSpan) 设置预留实例抵扣时长：本产品或服务使用预留实例抵扣的使用时长
 * @method string getRiCost() 获取预留实例抵扣原价：本产品或服务使用预留实例抵扣的组件原价金额
 * @method void setRiCost(string $RiCost) 设置预留实例抵扣原价：本产品或服务使用预留实例抵扣的组件原价金额
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
 * @method string getItemCode() 获取组件名称编码
 * @method void setItemCode(string $ItemCode) 设置组件名称编码
 * @method string getItemCodeName() 获取组件名称：用户购买的产品或服务，所包含的具体组件
 * @method void setItemCodeName(string $ItemCodeName) 设置组件名称：用户购买的产品或服务，所包含的具体组件
 * @method string getComponentCode() 获取组件类型编码
 * @method void setComponentCode(string $ComponentCode) 设置组件类型编码
 * @method string getComponentCodeName() 获取组件类型：用户购买的产品或服务对应的组件大类
 * @method void setComponentCodeName(string $ComponentCodeName) 设置组件类型：用户购买的产品或服务对应的组件大类
 * @method string getSplitItemId() 获取分拆项 ID：涉及分拆产品的分拆后的分拆项 ID，如 COS 桶 ID，CDN 域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSplitItemId(string $SplitItemId) 设置分拆项 ID：涉及分拆产品的分拆后的分拆项 ID，如 COS 桶 ID，CDN 域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSplitItemName() 获取分拆项名称：涉及分拆产品的分拆后的分拆项
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSplitItemName(string $SplitItemName) 设置分拆项名称：涉及分拆产品的分拆后的分拆项
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFeeBeginTime() 获取开始使用时间：产品服务开始使用时间
 * @method void setFeeBeginTime(string $FeeBeginTime) 设置开始使用时间：产品服务开始使用时间
 * @method string getFeeEndTime() 获取结束使用时间：产品服务结束使用时间
 * @method void setFeeEndTime(string $FeeEndTime) 设置结束使用时间：产品服务结束使用时间
 * @method string getSPCost() 获取节省计划抵扣原价：节省计划抵扣原价 = 节省计划包抵扣面值 / 节省计划抵扣率
 * @method void setSPCost(string $SPCost) 设置节省计划抵扣原价：节省计划抵扣原价 = 节省计划包抵扣面值 / 节省计划抵扣率
 * @method string getRegionType() 获取国内国际编码
 * @method void setRegionType(string $RegionType) 设置国内国际编码
 * @method string getRegionTypeName() 获取国内国际：资源所属区域类型（国内、国际）
 * @method void setRegionTypeName(string $RegionTypeName) 设置国内国际：资源所属区域类型（国内、国际）
 * @method string getSinglePrice() 获取组件刊例价：组件的官网原始单价（如客户享受一口价/合同价则默认不展示）
 * @method void setSinglePrice(string $SinglePrice) 设置组件刊例价：组件的官网原始单价（如客户享受一口价/合同价则默认不展示）
 * @method string getContractPrice() 获取组件单价：组件的折后单价，组件单价 = 刊例价 * 折扣
 * @method void setContractPrice(string $ContractPrice) 设置组件单价：组件的折后单价，组件单价 = 刊例价 * 折扣
 * @method string getSinglePriceUnit() 获取组件价格单位：组件价格的单位，单位构成：元/用量单位/时长单位
 * @method void setSinglePriceUnit(string $SinglePriceUnit) 设置组件价格单位：组件价格的单位，单位构成：元/用量单位/时长单位
 * @method string getUsedAmount() 获取组件用量：该组件实际结算用量，组件用量=组件原始用量-抵扣用量（含资源包）
 * @method void setUsedAmount(string $UsedAmount) 设置组件用量：该组件实际结算用量，组件用量=组件原始用量-抵扣用量（含资源包）
 * @method string getUsedAmountUnit() 获取组件用量单位：组件用量对应的单位
 * @method void setUsedAmountUnit(string $UsedAmountUnit) 设置组件用量单位：组件用量对应的单位
 * @method string getTimeSpan() 获取使用时长：资源使用的时长，组件用量=组件原始使用时长-抵扣时长（含资源包）
 * @method void setTimeSpan(string $TimeSpan) 设置使用时长：资源使用的时长，组件用量=组件原始使用时长-抵扣时长（含资源包）
 * @method string getTimeUnit() 获取时长单位：资源使用时长的单位
 * @method void setTimeUnit(string $TimeUnit) 设置时长单位：资源使用时长的单位
 * @method string getReserveDetail() 获取备注属性（实例配置）：其他备注信息，如预留实例的预留实例类型和交易类型、CCN 产品的两端地域信息
 * @method void setReserveDetail(string $ReserveDetail) 设置备注属性（实例配置）：其他备注信息，如预留实例的预留实例类型和交易类型、CCN 产品的两端地域信息
 * @method string getRealTotalMeasure() 获取原始用量/时长：组件被资源包抵扣前的原始用量
（目前仅实时音视频、弹性微服务、云呼叫中心及专属可用区产品支持该信息外显，其他产品尚在接入中）
 * @method void setRealTotalMeasure(string $RealTotalMeasure) 设置原始用量/时长：组件被资源包抵扣前的原始用量
（目前仅实时音视频、弹性微服务、云呼叫中心及专属可用区产品支持该信息外显，其他产品尚在接入中）
 * @method string getDeductedMeasure() 获取抵扣用量/时长（含资源包）：组件被资源包抵扣的用量
（目前仅实时音视频、弹性微服务、云呼叫中心及专属可用区产品支持该信息外显，其他产品尚在接入中）
 * @method void setDeductedMeasure(string $DeductedMeasure) 设置抵扣用量/时长（含资源包）：组件被资源包抵扣的用量
（目前仅实时音视频、弹性微服务、云呼叫中心及专属可用区产品支持该信息外显，其他产品尚在接入中）
 * @method string getDiscount() 获取折扣率：本资源享受的折扣率（如客户享受一口价/合同价则默认不展示，退费场景也默认不展示）
 * @method void setDiscount(string $Discount) 设置折扣率：本资源享受的折扣率（如客户享受一口价/合同价则默认不展示，退费场景也默认不展示）
 * @method string getBlendedDiscount() 获取混合折扣率：综合各类折扣抵扣信息后的最终折扣率，混合折扣率=优惠后总价/原价
 * @method void setBlendedDiscount(string $BlendedDiscount) 设置混合折扣率：综合各类折扣抵扣信息后的最终折扣率，混合折扣率=优惠后总价/原价
 * @method array getPriceInfo() 获取价格属性：该组件除单价、时长外的其他影响折扣定价的属性信息
 * @method void setPriceInfo(array $PriceInfo) 设置价格属性：该组件除单价、时长外的其他影响折扣定价的属性信息
 * @method string getFormula() 获取计算规则说明：特殊交易类型计费结算的详细计算说明，如退费及变配
 * @method void setFormula(string $Formula) 设置计算规则说明：特殊交易类型计费结算的详细计算说明，如退费及变配
 * @method string getFormulaUrl() 获取计费规则：各产品详细的计费规则官网说明链接
 * @method void setFormulaUrl(string $FormulaUrl) 设置计费规则：各产品详细的计费规则官网说明链接
 * @method string getComponentConfig() 获取配置描述：资源配置规格信息
 * @method void setComponentConfig(string $ComponentConfig) 设置配置描述：资源配置规格信息
 * @method string getSPDeduction() 获取SPDeduction
 * @method void setSPDeduction(string $SPDeduction) 设置SPDeduction
 * @method string getSPDeductionRate() 获取节省计划抵扣率：节省计划可用余额额度范围内，节省计划对于此组件打的折扣率
 * @method void setSPDeductionRate(string $SPDeductionRate) 设置节省计划抵扣率：节省计划可用余额额度范围内，节省计划对于此组件打的折扣率
 * @method string getAssociatedOrder() 获取AssociatedOrder
 * @method void setAssociatedOrder(string $AssociatedOrder) 设置AssociatedOrder
 * @method string getDiscountObject() 获取当前消费项的优惠对象，例如：官网折扣、用户折扣、活动折扣。
 * @method void setDiscountObject(string $DiscountObject) 设置当前消费项的优惠对象，例如：官网折扣、用户折扣、活动折扣。
 * @method string getDiscountType() 获取当前消费项的优惠类型，例如：折扣、合同价。
 * @method void setDiscountType(string $DiscountType) 设置当前消费项的优惠类型，例如：折扣、合同价。
 * @method string getDiscountContent() 获取对优惠类型的补充描述，例如：商务折扣8折，则优惠类型为“折扣”，优惠内容为“0.8”。
 * @method void setDiscountContent(string $DiscountContent) 设置对优惠类型的补充描述，例如：商务折扣8折，则优惠类型为“折扣”，优惠内容为“0.8”。
 * @method string getBillMonth() 获取账单月
 * @method void setBillMonth(string $BillMonth) 设置账单月
 */
class AllocationSummaryByItem extends AbstractModel
{
    /**
     * @var string 分账单元唯一标识
     */
    public $TreeNodeUniqKey;

    /**
     * @var string 分账单元名称
     */
    public $TreeNodeUniqKeyName;

    /**
     * @var string 日期：结算日期
     */
    public $BillDate;

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
     * @var string 产品编码
     */
    public $BusinessCode;

    /**
     * @var string 产品名称：用户所采购的各类云产品
     */
    public $BusinessCodeName;

    /**
     * @var string 子产品编码
     */
    public $ProductCode;

    /**
     * @var string 子产品名称：用户采购的具体产品细分类型
     */
    public $ProductCodeName;

    /**
     * @var integer 地域ID
     */
    public $RegionId;

    /**
     * @var string 地域名称：资源所属地域
     */
    public $RegionName;

    /**
     * @var integer 可用区ID
     */
    public $ZoneId;

    /**
     * @var string 可用区：资源所属可用区
     */
    public $ZoneName;

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
     * @var array 分账标签：资源绑定的标签
     */
    public $Tag;

    /**
     * @var integer 项目ID
     */
    public $ProjectId;

    /**
     * @var string 项目名称：资源归属的项目，用户在控制台给资源自主分配项目，未分配则是默认项目
     */
    public $ProjectName;

    /**
     * @var integer 费用归集类型：费用来源类型，分摊、归集、未分配
0 - 分摊
1 - 归集
-1 - 未分配
     */
    public $AllocationType;

    /**
     * @var string 组件原价：原价 = 组件刊例价 * 组件用量 * 使用时长（如客户享受一口价/合同价则默认不展示，退费类场景也默认不展示），指定价模式
     */
    public $TotalCost;

    /**
     * @var string 预留实例抵扣时长：本产品或服务使用预留实例抵扣的使用时长
     */
    public $RiTimeSpan;

    /**
     * @var string 预留实例抵扣原价：本产品或服务使用预留实例抵扣的组件原价金额
     */
    public $RiCost;

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
     * @var string 组件名称编码
     */
    public $ItemCode;

    /**
     * @var string 组件名称：用户购买的产品或服务，所包含的具体组件
     */
    public $ItemCodeName;

    /**
     * @var string 组件类型编码
     */
    public $ComponentCode;

    /**
     * @var string 组件类型：用户购买的产品或服务对应的组件大类
     */
    public $ComponentCodeName;

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
     * @var string 开始使用时间：产品服务开始使用时间
     */
    public $FeeBeginTime;

    /**
     * @var string 结束使用时间：产品服务结束使用时间
     */
    public $FeeEndTime;

    /**
     * @var string 节省计划抵扣原价：节省计划抵扣原价 = 节省计划包抵扣面值 / 节省计划抵扣率
     */
    public $SPCost;

    /**
     * @var string 国内国际编码
     */
    public $RegionType;

    /**
     * @var string 国内国际：资源所属区域类型（国内、国际）
     */
    public $RegionTypeName;

    /**
     * @var string 组件刊例价：组件的官网原始单价（如客户享受一口价/合同价则默认不展示）
     */
    public $SinglePrice;

    /**
     * @var string 组件单价：组件的折后单价，组件单价 = 刊例价 * 折扣
     */
    public $ContractPrice;

    /**
     * @var string 组件价格单位：组件价格的单位，单位构成：元/用量单位/时长单位
     */
    public $SinglePriceUnit;

    /**
     * @var string 组件用量：该组件实际结算用量，组件用量=组件原始用量-抵扣用量（含资源包）
     */
    public $UsedAmount;

    /**
     * @var string 组件用量单位：组件用量对应的单位
     */
    public $UsedAmountUnit;

    /**
     * @var string 使用时长：资源使用的时长，组件用量=组件原始使用时长-抵扣时长（含资源包）
     */
    public $TimeSpan;

    /**
     * @var string 时长单位：资源使用时长的单位
     */
    public $TimeUnit;

    /**
     * @var string 备注属性（实例配置）：其他备注信息，如预留实例的预留实例类型和交易类型、CCN 产品的两端地域信息
     */
    public $ReserveDetail;

    /**
     * @var string 原始用量/时长：组件被资源包抵扣前的原始用量
（目前仅实时音视频、弹性微服务、云呼叫中心及专属可用区产品支持该信息外显，其他产品尚在接入中）
     */
    public $RealTotalMeasure;

    /**
     * @var string 抵扣用量/时长（含资源包）：组件被资源包抵扣的用量
（目前仅实时音视频、弹性微服务、云呼叫中心及专属可用区产品支持该信息外显，其他产品尚在接入中）
     */
    public $DeductedMeasure;

    /**
     * @var string 折扣率：本资源享受的折扣率（如客户享受一口价/合同价则默认不展示，退费场景也默认不展示）
     */
    public $Discount;

    /**
     * @var string 混合折扣率：综合各类折扣抵扣信息后的最终折扣率，混合折扣率=优惠后总价/原价
     */
    public $BlendedDiscount;

    /**
     * @var array 价格属性：该组件除单价、时长外的其他影响折扣定价的属性信息
     */
    public $PriceInfo;

    /**
     * @var string 计算规则说明：特殊交易类型计费结算的详细计算说明，如退费及变配
     */
    public $Formula;

    /**
     * @var string 计费规则：各产品详细的计费规则官网说明链接
     */
    public $FormulaUrl;

    /**
     * @var string 配置描述：资源配置规格信息
     */
    public $ComponentConfig;

    /**
     * @var string SPDeduction
     */
    public $SPDeduction;

    /**
     * @var string 节省计划抵扣率：节省计划可用余额额度范围内，节省计划对于此组件打的折扣率
     */
    public $SPDeductionRate;

    /**
     * @var string AssociatedOrder
     */
    public $AssociatedOrder;

    /**
     * @var string 当前消费项的优惠对象，例如：官网折扣、用户折扣、活动折扣。
     */
    public $DiscountObject;

    /**
     * @var string 当前消费项的优惠类型，例如：折扣、合同价。
     */
    public $DiscountType;

    /**
     * @var string 对优惠类型的补充描述，例如：商务折扣8折，则优惠类型为“折扣”，优惠内容为“0.8”。
     */
    public $DiscountContent;

    /**
     * @var string 账单月
     */
    public $BillMonth;

    /**
     * @param string $TreeNodeUniqKey 分账单元唯一标识
     * @param string $TreeNodeUniqKeyName 分账单元名称
     * @param string $BillDate 日期：结算日期
     * @param string $PayerUin 支付者 UIN：支付者的账号 ID，账号 ID 是用户在腾讯云的唯一账号标识
     * @param string $OwnerUin 使用者 UIN：实际使用资源的账号 ID
     * @param string $OperateUin 操作者 UIN：操作者账号 ID（预付费资源下单或后付费操作开通资源账号的ID或者角色 ID）
     * @param string $PayMode 计费模式编码
     * @param string $PayModeName 计费模式：资源的计费模式，区分为包年包月和按量计费
     * @param string $ActionType 交易类型编码
     * @param string $ActionTypeName 交易类型：明细交易类型
     * @param string $BusinessCode 产品编码
     * @param string $BusinessCodeName 产品名称：用户所采购的各类云产品
     * @param string $ProductCode 子产品编码
     * @param string $ProductCodeName 子产品名称：用户采购的具体产品细分类型
     * @param integer $RegionId 地域ID
     * @param string $RegionName 地域名称：资源所属地域
     * @param integer $ZoneId 可用区ID
     * @param string $ZoneName 可用区：资源所属可用区
     * @param string $InstanceType 实例类型编码
     * @param string $InstanceTypeName 实例类型：购买的产品服务对应的实例类型，包括资源包、RI、SP、竞价实例。常规实例默认展示“-”
     * @param string $ResourceId 资源ID：不同产品因资源形态不同，资源内容不完全相同，如云服务器 CVM 为对应的实例 ID； 若该产品被分拆，则展示产品分拆后的分拆项 ID，如 COS 桶 ID，CDN 域名
     * @param string $ResourceName 实例名称：用户在控制台为资源设置的名称，如未设置默认为空；若该产品被分拆，则展示分拆产品分拆后的分拆项资源别名
     * @param array $Tag 分账标签：资源绑定的标签
     * @param integer $ProjectId 项目ID
     * @param string $ProjectName 项目名称：资源归属的项目，用户在控制台给资源自主分配项目，未分配则是默认项目
     * @param integer $AllocationType 费用归集类型：费用来源类型，分摊、归集、未分配
0 - 分摊
1 - 归集
-1 - 未分配
     * @param string $TotalCost 组件原价：原价 = 组件刊例价 * 组件用量 * 使用时长（如客户享受一口价/合同价则默认不展示，退费类场景也默认不展示），指定价模式
     * @param string $RiTimeSpan 预留实例抵扣时长：本产品或服务使用预留实例抵扣的使用时长
     * @param string $RiCost 预留实例抵扣原价：本产品或服务使用预留实例抵扣的组件原价金额
     * @param string $RealTotalCost 优惠后总价：优惠后总价 =（原价 - 预留实例抵扣原价 - 节省计划抵扣原价）* 折扣率
     * @param string $CashPayAmount 现金账户支出(元)：通过现金账户支付的金额
     * @param string $VoucherPayAmount 代金券支出(元)：使用各类优惠券（如代金券、现金券等）支付的金额
     * @param string $IncentivePayAmount 赠送账户支出(元)：使用赠送金支付的金额
     * @param string $TransferPayAmount 分成账户支出(元)：通过分成金账户支付的金额
     * @param string $ItemCode 组件名称编码
     * @param string $ItemCodeName 组件名称：用户购买的产品或服务，所包含的具体组件
     * @param string $ComponentCode 组件类型编码
     * @param string $ComponentCodeName 组件类型：用户购买的产品或服务对应的组件大类
     * @param string $SplitItemId 分拆项 ID：涉及分拆产品的分拆后的分拆项 ID，如 COS 桶 ID，CDN 域名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SplitItemName 分拆项名称：涉及分拆产品的分拆后的分拆项
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FeeBeginTime 开始使用时间：产品服务开始使用时间
     * @param string $FeeEndTime 结束使用时间：产品服务结束使用时间
     * @param string $SPCost 节省计划抵扣原价：节省计划抵扣原价 = 节省计划包抵扣面值 / 节省计划抵扣率
     * @param string $RegionType 国内国际编码
     * @param string $RegionTypeName 国内国际：资源所属区域类型（国内、国际）
     * @param string $SinglePrice 组件刊例价：组件的官网原始单价（如客户享受一口价/合同价则默认不展示）
     * @param string $ContractPrice 组件单价：组件的折后单价，组件单价 = 刊例价 * 折扣
     * @param string $SinglePriceUnit 组件价格单位：组件价格的单位，单位构成：元/用量单位/时长单位
     * @param string $UsedAmount 组件用量：该组件实际结算用量，组件用量=组件原始用量-抵扣用量（含资源包）
     * @param string $UsedAmountUnit 组件用量单位：组件用量对应的单位
     * @param string $TimeSpan 使用时长：资源使用的时长，组件用量=组件原始使用时长-抵扣时长（含资源包）
     * @param string $TimeUnit 时长单位：资源使用时长的单位
     * @param string $ReserveDetail 备注属性（实例配置）：其他备注信息，如预留实例的预留实例类型和交易类型、CCN 产品的两端地域信息
     * @param string $RealTotalMeasure 原始用量/时长：组件被资源包抵扣前的原始用量
（目前仅实时音视频、弹性微服务、云呼叫中心及专属可用区产品支持该信息外显，其他产品尚在接入中）
     * @param string $DeductedMeasure 抵扣用量/时长（含资源包）：组件被资源包抵扣的用量
（目前仅实时音视频、弹性微服务、云呼叫中心及专属可用区产品支持该信息外显，其他产品尚在接入中）
     * @param string $Discount 折扣率：本资源享受的折扣率（如客户享受一口价/合同价则默认不展示，退费场景也默认不展示）
     * @param string $BlendedDiscount 混合折扣率：综合各类折扣抵扣信息后的最终折扣率，混合折扣率=优惠后总价/原价
     * @param array $PriceInfo 价格属性：该组件除单价、时长外的其他影响折扣定价的属性信息
     * @param string $Formula 计算规则说明：特殊交易类型计费结算的详细计算说明，如退费及变配
     * @param string $FormulaUrl 计费规则：各产品详细的计费规则官网说明链接
     * @param string $ComponentConfig 配置描述：资源配置规格信息
     * @param string $SPDeduction SPDeduction
     * @param string $SPDeductionRate 节省计划抵扣率：节省计划可用余额额度范围内，节省计划对于此组件打的折扣率
     * @param string $AssociatedOrder AssociatedOrder
     * @param string $DiscountObject 当前消费项的优惠对象，例如：官网折扣、用户折扣、活动折扣。
     * @param string $DiscountType 当前消费项的优惠类型，例如：折扣、合同价。
     * @param string $DiscountContent 对优惠类型的补充描述，例如：商务折扣8折，则优惠类型为“折扣”，优惠内容为“0.8”。
     * @param string $BillMonth 账单月
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
        if (array_key_exists("TreeNodeUniqKey",$param) and $param["TreeNodeUniqKey"] !== null) {
            $this->TreeNodeUniqKey = $param["TreeNodeUniqKey"];
        }

        if (array_key_exists("TreeNodeUniqKeyName",$param) and $param["TreeNodeUniqKeyName"] !== null) {
            $this->TreeNodeUniqKeyName = $param["TreeNodeUniqKeyName"];
        }

        if (array_key_exists("BillDate",$param) and $param["BillDate"] !== null) {
            $this->BillDate = $param["BillDate"];
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

        if (array_key_exists("BusinessCode",$param) and $param["BusinessCode"] !== null) {
            $this->BusinessCode = $param["BusinessCode"];
        }

        if (array_key_exists("BusinessCodeName",$param) and $param["BusinessCodeName"] !== null) {
            $this->BusinessCodeName = $param["BusinessCodeName"];
        }

        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("ProductCodeName",$param) and $param["ProductCodeName"] !== null) {
            $this->ProductCodeName = $param["ProductCodeName"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
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

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = [];
            foreach ($param["Tag"] as $key => $value){
                $obj = new BillTag();
                $obj->deserialize($value);
                array_push($this->Tag, $obj);
            }
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("AllocationType",$param) and $param["AllocationType"] !== null) {
            $this->AllocationType = $param["AllocationType"];
        }

        if (array_key_exists("TotalCost",$param) and $param["TotalCost"] !== null) {
            $this->TotalCost = $param["TotalCost"];
        }

        if (array_key_exists("RiTimeSpan",$param) and $param["RiTimeSpan"] !== null) {
            $this->RiTimeSpan = $param["RiTimeSpan"];
        }

        if (array_key_exists("RiCost",$param) and $param["RiCost"] !== null) {
            $this->RiCost = $param["RiCost"];
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

        if (array_key_exists("ItemCode",$param) and $param["ItemCode"] !== null) {
            $this->ItemCode = $param["ItemCode"];
        }

        if (array_key_exists("ItemCodeName",$param) and $param["ItemCodeName"] !== null) {
            $this->ItemCodeName = $param["ItemCodeName"];
        }

        if (array_key_exists("ComponentCode",$param) and $param["ComponentCode"] !== null) {
            $this->ComponentCode = $param["ComponentCode"];
        }

        if (array_key_exists("ComponentCodeName",$param) and $param["ComponentCodeName"] !== null) {
            $this->ComponentCodeName = $param["ComponentCodeName"];
        }

        if (array_key_exists("SplitItemId",$param) and $param["SplitItemId"] !== null) {
            $this->SplitItemId = $param["SplitItemId"];
        }

        if (array_key_exists("SplitItemName",$param) and $param["SplitItemName"] !== null) {
            $this->SplitItemName = $param["SplitItemName"];
        }

        if (array_key_exists("FeeBeginTime",$param) and $param["FeeBeginTime"] !== null) {
            $this->FeeBeginTime = $param["FeeBeginTime"];
        }

        if (array_key_exists("FeeEndTime",$param) and $param["FeeEndTime"] !== null) {
            $this->FeeEndTime = $param["FeeEndTime"];
        }

        if (array_key_exists("SPCost",$param) and $param["SPCost"] !== null) {
            $this->SPCost = $param["SPCost"];
        }

        if (array_key_exists("RegionType",$param) and $param["RegionType"] !== null) {
            $this->RegionType = $param["RegionType"];
        }

        if (array_key_exists("RegionTypeName",$param) and $param["RegionTypeName"] !== null) {
            $this->RegionTypeName = $param["RegionTypeName"];
        }

        if (array_key_exists("SinglePrice",$param) and $param["SinglePrice"] !== null) {
            $this->SinglePrice = $param["SinglePrice"];
        }

        if (array_key_exists("ContractPrice",$param) and $param["ContractPrice"] !== null) {
            $this->ContractPrice = $param["ContractPrice"];
        }

        if (array_key_exists("SinglePriceUnit",$param) and $param["SinglePriceUnit"] !== null) {
            $this->SinglePriceUnit = $param["SinglePriceUnit"];
        }

        if (array_key_exists("UsedAmount",$param) and $param["UsedAmount"] !== null) {
            $this->UsedAmount = $param["UsedAmount"];
        }

        if (array_key_exists("UsedAmountUnit",$param) and $param["UsedAmountUnit"] !== null) {
            $this->UsedAmountUnit = $param["UsedAmountUnit"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("ReserveDetail",$param) and $param["ReserveDetail"] !== null) {
            $this->ReserveDetail = $param["ReserveDetail"];
        }

        if (array_key_exists("RealTotalMeasure",$param) and $param["RealTotalMeasure"] !== null) {
            $this->RealTotalMeasure = $param["RealTotalMeasure"];
        }

        if (array_key_exists("DeductedMeasure",$param) and $param["DeductedMeasure"] !== null) {
            $this->DeductedMeasure = $param["DeductedMeasure"];
        }

        if (array_key_exists("Discount",$param) and $param["Discount"] !== null) {
            $this->Discount = $param["Discount"];
        }

        if (array_key_exists("BlendedDiscount",$param) and $param["BlendedDiscount"] !== null) {
            $this->BlendedDiscount = $param["BlendedDiscount"];
        }

        if (array_key_exists("PriceInfo",$param) and $param["PriceInfo"] !== null) {
            $this->PriceInfo = $param["PriceInfo"];
        }

        if (array_key_exists("Formula",$param) and $param["Formula"] !== null) {
            $this->Formula = $param["Formula"];
        }

        if (array_key_exists("FormulaUrl",$param) and $param["FormulaUrl"] !== null) {
            $this->FormulaUrl = $param["FormulaUrl"];
        }

        if (array_key_exists("ComponentConfig",$param) and $param["ComponentConfig"] !== null) {
            $this->ComponentConfig = $param["ComponentConfig"];
        }

        if (array_key_exists("SPDeduction",$param) and $param["SPDeduction"] !== null) {
            $this->SPDeduction = $param["SPDeduction"];
        }

        if (array_key_exists("SPDeductionRate",$param) and $param["SPDeductionRate"] !== null) {
            $this->SPDeductionRate = $param["SPDeductionRate"];
        }

        if (array_key_exists("AssociatedOrder",$param) and $param["AssociatedOrder"] !== null) {
            $this->AssociatedOrder = $param["AssociatedOrder"];
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

        if (array_key_exists("BillMonth",$param) and $param["BillMonth"] !== null) {
            $this->BillMonth = $param["BillMonth"];
        }
    }
}
