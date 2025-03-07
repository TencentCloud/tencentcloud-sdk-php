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
 * 分账账单按产品汇总明细
 *
 * @method string getTreeNodeUniqKey() 获取分账单元唯一标识
 * @method void setTreeNodeUniqKey(string $TreeNodeUniqKey) 设置分账单元唯一标识
 * @method string getTreeNodeUniqKeyName() 获取分账单元名称
 * @method void setTreeNodeUniqKeyName(string $TreeNodeUniqKeyName) 设置分账单元名称
 * @method string getBillDate() 获取日期：结算日期
 * @method void setBillDate(string $BillDate) 设置日期：结算日期
 * @method string getGatherCashPayAmount() 获取归集费用(现金)：基于归集规则直接归集到分账单元的现金
 * @method void setGatherCashPayAmount(string $GatherCashPayAmount) 设置归集费用(现金)：基于归集规则直接归集到分账单元的现金
 * @method string getGatherVoucherPayAmount() 获取归集费用(优惠券)：基于归集规则直接归集到分账单元的资源优惠券
 * @method void setGatherVoucherPayAmount(string $GatherVoucherPayAmount) 设置归集费用(优惠券)：基于归集规则直接归集到分账单元的资源优惠券
 * @method string getGatherIncentivePayAmount() 获取归集费用(赠送金)：基于归集规则直接归集到分账单元的资源赠送金
 * @method void setGatherIncentivePayAmount(string $GatherIncentivePayAmount) 设置归集费用(赠送金)：基于归集规则直接归集到分账单元的资源赠送金
 * @method string getGatherTransferPayAmount() 获取归集费用(分成金)：基于归集规则直接归集到分账单元的资源分成金
 * @method void setGatherTransferPayAmount(string $GatherTransferPayAmount) 设置归集费用(分成金)：基于归集规则直接归集到分账单元的资源分成金
 * @method string getAllocateCashPayAmount() 获取分摊费用(现金)：基于分摊规则分摊到分账单元的资源现金
 * @method void setAllocateCashPayAmount(string $AllocateCashPayAmount) 设置分摊费用(现金)：基于分摊规则分摊到分账单元的资源现金
 * @method string getAllocateVoucherPayAmount() 获取分摊费用(优惠券)：基于分摊规则分摊到分账单元的资源优惠券
 * @method void setAllocateVoucherPayAmount(string $AllocateVoucherPayAmount) 设置分摊费用(优惠券)：基于分摊规则分摊到分账单元的资源优惠券
 * @method string getAllocateIncentivePayAmount() 获取分摊费用(赠送金)：基于分摊规则分摊到分账单元的资源赠送金
 * @method void setAllocateIncentivePayAmount(string $AllocateIncentivePayAmount) 设置分摊费用(赠送金)：基于分摊规则分摊到分账单元的资源赠送金
 * @method string getAllocateTransferPayAmount() 获取分摊费用(分成金)：基于分摊规则分摊到分账单元的资源分成金
 * @method void setAllocateTransferPayAmount(string $AllocateTransferPayAmount) 设置分摊费用(分成金)：基于分摊规则分摊到分账单元的资源分成金
 * @method string getTotalCashPayAmount() 获取合计费用(现金)：分账单元总费用，归集费用(现金) + 分摊费用(现金)
 * @method void setTotalCashPayAmount(string $TotalCashPayAmount) 设置合计费用(现金)：分账单元总费用，归集费用(现金) + 分摊费用(现金)
 * @method string getTotalVoucherPayAmount() 获取合计费用(优惠券)：分账单元总费用，归集费用(优惠券) + 分摊费用(优惠券)
 * @method void setTotalVoucherPayAmount(string $TotalVoucherPayAmount) 设置合计费用(优惠券)：分账单元总费用，归集费用(优惠券) + 分摊费用(优惠券)
 * @method string getTotalIncentivePayAmount() 获取合计费用(赠送金)：分账单元总费用，归集费用(赠送金) + 分摊费用(赠送金)
 * @method void setTotalIncentivePayAmount(string $TotalIncentivePayAmount) 设置合计费用(赠送金)：分账单元总费用，归集费用(赠送金) + 分摊费用(赠送金)
 * @method string getTotalTransferPayAmount() 获取合计费用(分成金)：分账单元总费用，归集费用(分成金)+分摊费用(分成金)
 * @method void setTotalTransferPayAmount(string $TotalTransferPayAmount) 设置合计费用(分成金)：分账单元总费用，归集费用(分成金)+分摊费用(分成金)
 * @method string getGatherRealCost() 获取归集费用(折后总额)：基于归集规则直接归集到分账单元的资源优惠后总价
 * @method void setGatherRealCost(string $GatherRealCost) 设置归集费用(折后总额)：基于归集规则直接归集到分账单元的资源优惠后总价
 * @method string getAllocateRealCost() 获取分摊费用(折后总额)：基于分摊规则分摊到分账单元的资源优惠后总价
 * @method void setAllocateRealCost(string $AllocateRealCost) 设置分摊费用(折后总额)：基于分摊规则分摊到分账单元的资源优惠后总价
 * @method string getRealTotalCost() 获取合计费用(折后总额)：分账单元总费用，归集费用(折后总额) + 分摊费用(折后总额)
 * @method void setRealTotalCost(string $RealTotalCost) 设置合计费用(折后总额)：分账单元总费用，归集费用(折后总额) + 分摊费用(折后总额)
 * @method string getRatio() 获取占比(折后总额)：本分账单元合计费用(折后总额)/合计费用(折后总额)*100%
 * @method void setRatio(string $Ratio) 设置占比(折后总额)：本分账单元合计费用(折后总额)/合计费用(折后总额)*100%
 * @method string getTrend() 获取环比(折后总额)：[本月分账单元合计费用(折后总额) - 上月分账单元合计费用(折后总额)] / 上月分账单元合计费用(折后总额) * 100%
 * @method void setTrend(string $Trend) 设置环比(折后总额)：[本月分账单元合计费用(折后总额) - 上月分账单元合计费用(折后总额)] / 上月分账单元合计费用(折后总额) * 100%
 * @method string getTrendType() 获取环比箭头
upward -上升
downward - 下降
none - 平稳
 * @method void setTrendType(string $TrendType) 设置环比箭头
upward -上升
downward - 下降
none - 平稳
 * @method string getBusinessCode() 获取产品编码
 * @method void setBusinessCode(string $BusinessCode) 设置产品编码
 * @method string getBusinessCodeName() 获取产品名称：用户所采购的各类云产品
 * @method void setBusinessCodeName(string $BusinessCodeName) 设置产品名称：用户所采购的各类云产品
 * @method string getTotalCost() 获取组件原价：原价 = 组件刊例价 * 组件用量 * 使用时长（如客户享受一口价/合同价则默认不展示，退费类场景也默认不展示），指定价模式
 * @method void setTotalCost(string $TotalCost) 设置组件原价：原价 = 组件刊例价 * 组件用量 * 使用时长（如客户享受一口价/合同价则默认不展示，退费类场景也默认不展示），指定价模式
 * @method string getRICost() 获取预留实例抵扣原价：本产品或服务使用预留实例抵扣的组件原价金额
 * @method void setRICost(string $RICost) 设置预留实例抵扣原价：本产品或服务使用预留实例抵扣的组件原价金额
 * @method string getSPCost() 获取节省计划抵扣原价：节省计划抵扣原价 = 节省计划包抵扣面值 / 节省计划抵扣率
 * @method void setSPCost(string $SPCost) 设置节省计划抵扣原价：节省计划抵扣原价 = 节省计划包抵扣面值 / 节省计划抵扣率
 * @method string getCashPayAmount() 获取现金账户支出(元)：通过现金账户支付的金额
 * @method void setCashPayAmount(string $CashPayAmount) 设置现金账户支出(元)：通过现金账户支付的金额
 * @method string getVoucherPayAmount() 获取代金券支出(元)：使用各类优惠券（如代金券、现金券等）支付的金额

 * @method void setVoucherPayAmount(string $VoucherPayAmount) 设置代金券支出(元)：使用各类优惠券（如代金券、现金券等）支付的金额

 * @method string getIncentivePayAmount() 获取赠送账户支出(元)：使用赠送金支付的金额
 * @method void setIncentivePayAmount(string $IncentivePayAmount) 设置赠送账户支出(元)：使用赠送金支付的金额
 * @method string getTransferPayAmount() 获取分成账户支出(元)：通过分成金账户支付的金额
 * @method void setTransferPayAmount(string $TransferPayAmount) 设置分成账户支出(元)：通过分成金账户支付的金额
 * @method string getAllocationRealTotalCost() 获取优惠后总价：优惠后总价 =（原价 - 预留实例抵扣原价 - 节省计划抵扣原价）* 折扣率
 * @method void setAllocationRealTotalCost(string $AllocationRealTotalCost) 设置优惠后总价：优惠后总价 =（原价 - 预留实例抵扣原价 - 节省计划抵扣原价）* 折扣率
 */
class AllocationSummaryByBusiness extends AbstractModel
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
     * @var string 归集费用(现金)：基于归集规则直接归集到分账单元的现金
     */
    public $GatherCashPayAmount;

    /**
     * @var string 归集费用(优惠券)：基于归集规则直接归集到分账单元的资源优惠券
     */
    public $GatherVoucherPayAmount;

    /**
     * @var string 归集费用(赠送金)：基于归集规则直接归集到分账单元的资源赠送金
     */
    public $GatherIncentivePayAmount;

    /**
     * @var string 归集费用(分成金)：基于归集规则直接归集到分账单元的资源分成金
     */
    public $GatherTransferPayAmount;

    /**
     * @var string 分摊费用(现金)：基于分摊规则分摊到分账单元的资源现金
     */
    public $AllocateCashPayAmount;

    /**
     * @var string 分摊费用(优惠券)：基于分摊规则分摊到分账单元的资源优惠券
     */
    public $AllocateVoucherPayAmount;

    /**
     * @var string 分摊费用(赠送金)：基于分摊规则分摊到分账单元的资源赠送金
     */
    public $AllocateIncentivePayAmount;

    /**
     * @var string 分摊费用(分成金)：基于分摊规则分摊到分账单元的资源分成金
     */
    public $AllocateTransferPayAmount;

    /**
     * @var string 合计费用(现金)：分账单元总费用，归集费用(现金) + 分摊费用(现金)
     */
    public $TotalCashPayAmount;

    /**
     * @var string 合计费用(优惠券)：分账单元总费用，归集费用(优惠券) + 分摊费用(优惠券)
     */
    public $TotalVoucherPayAmount;

    /**
     * @var string 合计费用(赠送金)：分账单元总费用，归集费用(赠送金) + 分摊费用(赠送金)
     */
    public $TotalIncentivePayAmount;

    /**
     * @var string 合计费用(分成金)：分账单元总费用，归集费用(分成金)+分摊费用(分成金)
     */
    public $TotalTransferPayAmount;

    /**
     * @var string 归集费用(折后总额)：基于归集规则直接归集到分账单元的资源优惠后总价
     */
    public $GatherRealCost;

    /**
     * @var string 分摊费用(折后总额)：基于分摊规则分摊到分账单元的资源优惠后总价
     */
    public $AllocateRealCost;

    /**
     * @var string 合计费用(折后总额)：分账单元总费用，归集费用(折后总额) + 分摊费用(折后总额)
     */
    public $RealTotalCost;

    /**
     * @var string 占比(折后总额)：本分账单元合计费用(折后总额)/合计费用(折后总额)*100%
     */
    public $Ratio;

    /**
     * @var string 环比(折后总额)：[本月分账单元合计费用(折后总额) - 上月分账单元合计费用(折后总额)] / 上月分账单元合计费用(折后总额) * 100%
     */
    public $Trend;

    /**
     * @var string 环比箭头
upward -上升
downward - 下降
none - 平稳
     */
    public $TrendType;

    /**
     * @var string 产品编码
     */
    public $BusinessCode;

    /**
     * @var string 产品名称：用户所采购的各类云产品
     */
    public $BusinessCodeName;

    /**
     * @var string 组件原价：原价 = 组件刊例价 * 组件用量 * 使用时长（如客户享受一口价/合同价则默认不展示，退费类场景也默认不展示），指定价模式
     */
    public $TotalCost;

    /**
     * @var string 预留实例抵扣原价：本产品或服务使用预留实例抵扣的组件原价金额
     */
    public $RICost;

    /**
     * @var string 节省计划抵扣原价：节省计划抵扣原价 = 节省计划包抵扣面值 / 节省计划抵扣率
     */
    public $SPCost;

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
     * @var string 优惠后总价：优惠后总价 =（原价 - 预留实例抵扣原价 - 节省计划抵扣原价）* 折扣率
     */
    public $AllocationRealTotalCost;

    /**
     * @param string $TreeNodeUniqKey 分账单元唯一标识
     * @param string $TreeNodeUniqKeyName 分账单元名称
     * @param string $BillDate 日期：结算日期
     * @param string $GatherCashPayAmount 归集费用(现金)：基于归集规则直接归集到分账单元的现金
     * @param string $GatherVoucherPayAmount 归集费用(优惠券)：基于归集规则直接归集到分账单元的资源优惠券
     * @param string $GatherIncentivePayAmount 归集费用(赠送金)：基于归集规则直接归集到分账单元的资源赠送金
     * @param string $GatherTransferPayAmount 归集费用(分成金)：基于归集规则直接归集到分账单元的资源分成金
     * @param string $AllocateCashPayAmount 分摊费用(现金)：基于分摊规则分摊到分账单元的资源现金
     * @param string $AllocateVoucherPayAmount 分摊费用(优惠券)：基于分摊规则分摊到分账单元的资源优惠券
     * @param string $AllocateIncentivePayAmount 分摊费用(赠送金)：基于分摊规则分摊到分账单元的资源赠送金
     * @param string $AllocateTransferPayAmount 分摊费用(分成金)：基于分摊规则分摊到分账单元的资源分成金
     * @param string $TotalCashPayAmount 合计费用(现金)：分账单元总费用，归集费用(现金) + 分摊费用(现金)
     * @param string $TotalVoucherPayAmount 合计费用(优惠券)：分账单元总费用，归集费用(优惠券) + 分摊费用(优惠券)
     * @param string $TotalIncentivePayAmount 合计费用(赠送金)：分账单元总费用，归集费用(赠送金) + 分摊费用(赠送金)
     * @param string $TotalTransferPayAmount 合计费用(分成金)：分账单元总费用，归集费用(分成金)+分摊费用(分成金)
     * @param string $GatherRealCost 归集费用(折后总额)：基于归集规则直接归集到分账单元的资源优惠后总价
     * @param string $AllocateRealCost 分摊费用(折后总额)：基于分摊规则分摊到分账单元的资源优惠后总价
     * @param string $RealTotalCost 合计费用(折后总额)：分账单元总费用，归集费用(折后总额) + 分摊费用(折后总额)
     * @param string $Ratio 占比(折后总额)：本分账单元合计费用(折后总额)/合计费用(折后总额)*100%
     * @param string $Trend 环比(折后总额)：[本月分账单元合计费用(折后总额) - 上月分账单元合计费用(折后总额)] / 上月分账单元合计费用(折后总额) * 100%
     * @param string $TrendType 环比箭头
upward -上升
downward - 下降
none - 平稳
     * @param string $BusinessCode 产品编码
     * @param string $BusinessCodeName 产品名称：用户所采购的各类云产品
     * @param string $TotalCost 组件原价：原价 = 组件刊例价 * 组件用量 * 使用时长（如客户享受一口价/合同价则默认不展示，退费类场景也默认不展示），指定价模式
     * @param string $RICost 预留实例抵扣原价：本产品或服务使用预留实例抵扣的组件原价金额
     * @param string $SPCost 节省计划抵扣原价：节省计划抵扣原价 = 节省计划包抵扣面值 / 节省计划抵扣率
     * @param string $CashPayAmount 现金账户支出(元)：通过现金账户支付的金额
     * @param string $VoucherPayAmount 代金券支出(元)：使用各类优惠券（如代金券、现金券等）支付的金额

     * @param string $IncentivePayAmount 赠送账户支出(元)：使用赠送金支付的金额
     * @param string $TransferPayAmount 分成账户支出(元)：通过分成金账户支付的金额
     * @param string $AllocationRealTotalCost 优惠后总价：优惠后总价 =（原价 - 预留实例抵扣原价 - 节省计划抵扣原价）* 折扣率
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

        if (array_key_exists("GatherCashPayAmount",$param) and $param["GatherCashPayAmount"] !== null) {
            $this->GatherCashPayAmount = $param["GatherCashPayAmount"];
        }

        if (array_key_exists("GatherVoucherPayAmount",$param) and $param["GatherVoucherPayAmount"] !== null) {
            $this->GatherVoucherPayAmount = $param["GatherVoucherPayAmount"];
        }

        if (array_key_exists("GatherIncentivePayAmount",$param) and $param["GatherIncentivePayAmount"] !== null) {
            $this->GatherIncentivePayAmount = $param["GatherIncentivePayAmount"];
        }

        if (array_key_exists("GatherTransferPayAmount",$param) and $param["GatherTransferPayAmount"] !== null) {
            $this->GatherTransferPayAmount = $param["GatherTransferPayAmount"];
        }

        if (array_key_exists("AllocateCashPayAmount",$param) and $param["AllocateCashPayAmount"] !== null) {
            $this->AllocateCashPayAmount = $param["AllocateCashPayAmount"];
        }

        if (array_key_exists("AllocateVoucherPayAmount",$param) and $param["AllocateVoucherPayAmount"] !== null) {
            $this->AllocateVoucherPayAmount = $param["AllocateVoucherPayAmount"];
        }

        if (array_key_exists("AllocateIncentivePayAmount",$param) and $param["AllocateIncentivePayAmount"] !== null) {
            $this->AllocateIncentivePayAmount = $param["AllocateIncentivePayAmount"];
        }

        if (array_key_exists("AllocateTransferPayAmount",$param) and $param["AllocateTransferPayAmount"] !== null) {
            $this->AllocateTransferPayAmount = $param["AllocateTransferPayAmount"];
        }

        if (array_key_exists("TotalCashPayAmount",$param) and $param["TotalCashPayAmount"] !== null) {
            $this->TotalCashPayAmount = $param["TotalCashPayAmount"];
        }

        if (array_key_exists("TotalVoucherPayAmount",$param) and $param["TotalVoucherPayAmount"] !== null) {
            $this->TotalVoucherPayAmount = $param["TotalVoucherPayAmount"];
        }

        if (array_key_exists("TotalIncentivePayAmount",$param) and $param["TotalIncentivePayAmount"] !== null) {
            $this->TotalIncentivePayAmount = $param["TotalIncentivePayAmount"];
        }

        if (array_key_exists("TotalTransferPayAmount",$param) and $param["TotalTransferPayAmount"] !== null) {
            $this->TotalTransferPayAmount = $param["TotalTransferPayAmount"];
        }

        if (array_key_exists("GatherRealCost",$param) and $param["GatherRealCost"] !== null) {
            $this->GatherRealCost = $param["GatherRealCost"];
        }

        if (array_key_exists("AllocateRealCost",$param) and $param["AllocateRealCost"] !== null) {
            $this->AllocateRealCost = $param["AllocateRealCost"];
        }

        if (array_key_exists("RealTotalCost",$param) and $param["RealTotalCost"] !== null) {
            $this->RealTotalCost = $param["RealTotalCost"];
        }

        if (array_key_exists("Ratio",$param) and $param["Ratio"] !== null) {
            $this->Ratio = $param["Ratio"];
        }

        if (array_key_exists("Trend",$param) and $param["Trend"] !== null) {
            $this->Trend = $param["Trend"];
        }

        if (array_key_exists("TrendType",$param) and $param["TrendType"] !== null) {
            $this->TrendType = $param["TrendType"];
        }

        if (array_key_exists("BusinessCode",$param) and $param["BusinessCode"] !== null) {
            $this->BusinessCode = $param["BusinessCode"];
        }

        if (array_key_exists("BusinessCodeName",$param) and $param["BusinessCodeName"] !== null) {
            $this->BusinessCodeName = $param["BusinessCodeName"];
        }

        if (array_key_exists("TotalCost",$param) and $param["TotalCost"] !== null) {
            $this->TotalCost = $param["TotalCost"];
        }

        if (array_key_exists("RICost",$param) and $param["RICost"] !== null) {
            $this->RICost = $param["RICost"];
        }

        if (array_key_exists("SPCost",$param) and $param["SPCost"] !== null) {
            $this->SPCost = $param["SPCost"];
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

        if (array_key_exists("AllocationRealTotalCost",$param) and $param["AllocationRealTotalCost"] !== null) {
            $this->AllocationRealTotalCost = $param["AllocationRealTotalCost"];
        }
    }
}
