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
 * DescribeAllocationOverview请求参数结构体
 *
 * @method integer getLimit() 获取<p>数量，最大值为1000</p>
 * @method void setLimit(integer $Limit) 设置<p>数量，最大值为1000</p>
 * @method integer getOffset() 获取<p>分页偏移量，Offset=0表示第一页，如果Limit=100，则Offset=100表示第二页，Offset=200表示第三页，以此类推</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量，Offset=0表示第一页，如果Limit=100，则Offset=100表示第二页，Offset=200表示第三页，以此类推</p>
 * @method string getMonth() 获取<p>账单月份，格式为2024-02，不传默认当前月</p>
 * @method void setMonth(string $Month) 设置<p>账单月份，格式为2024-02，不传默认当前月</p>
 * @method string getPeriodType() 获取<p>统计周期，枚举值如下<br>month - 月<br>day - 日</p>
 * @method void setPeriodType(string $PeriodType) 设置<p>统计周期，枚举值如下<br>month - 月<br>day - 日</p>
 * @method array getTreeNodeUniqKeys() 获取<p>分账单元唯一标识，用作筛选</p>
 * @method void setTreeNodeUniqKeys(array $TreeNodeUniqKeys) 设置<p>分账单元唯一标识，用作筛选</p>
 * @method string getSort() 获取<p>排序字段，枚举值如下：<br>GatherCashPayAmount - 归集费用(现金)<br>GatherVoucherPayAmount- 归集费用(优惠券)<br>GatherIncentivePayAmount -  归集费用(赠送金)<br>GatherTransferPayAmount - 归集费用(分成金)<br>AllocateCashPayAmount - 分摊费用(现金)<br>AllocateVoucherPayAmount - 分摊费用(优惠券)<br>AllocateIncentivePayAmount - 分摊费用(赠送金)<br>AllocateTransferPayAmount - 分摊费用(分成金)<br>TotalCashPayAmount - 合计费用(现金)<br>TotalVoucherPayAmount - 合计费用(优惠券)<br>TotalIncentivePayAmount - 合计费用(赠送金)<br>TotalTransferPayAmount - 合计费用(分成金)<br>GatherRealCost - 归集费用(折后总额)<br>AllocateRealCost - 分摊费用(折后总额)<br>RealTotalCost - 合计费用(折后总额)<br>Ratio  - 占比(折后总额)</p>
 * @method void setSort(string $Sort) 设置<p>排序字段，枚举值如下：<br>GatherCashPayAmount - 归集费用(现金)<br>GatherVoucherPayAmount- 归集费用(优惠券)<br>GatherIncentivePayAmount -  归集费用(赠送金)<br>GatherTransferPayAmount - 归集费用(分成金)<br>AllocateCashPayAmount - 分摊费用(现金)<br>AllocateVoucherPayAmount - 分摊费用(优惠券)<br>AllocateIncentivePayAmount - 分摊费用(赠送金)<br>AllocateTransferPayAmount - 分摊费用(分成金)<br>TotalCashPayAmount - 合计费用(现金)<br>TotalVoucherPayAmount - 合计费用(优惠券)<br>TotalIncentivePayAmount - 合计费用(赠送金)<br>TotalTransferPayAmount - 合计费用(分成金)<br>GatherRealCost - 归集费用(折后总额)<br>AllocateRealCost - 分摊费用(折后总额)<br>RealTotalCost - 合计费用(折后总额)<br>Ratio  - 占比(折后总额)</p>
 * @method string getSortType() 获取<p>排序类型，枚举值如下：<br>asc - 升序<br>desc - 降序</p>
 * @method void setSortType(string $SortType) 设置<p>排序类型，枚举值如下：<br>asc - 升序<br>desc - 降序</p>
 * @method array getBillDates() 获取<p>日期，用作筛选</p>
 * @method void setBillDates(array $BillDates) 设置<p>日期，用作筛选</p>
 */
class DescribeAllocationOverviewRequest extends AbstractModel
{
    /**
     * @var integer <p>数量，最大值为1000</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页偏移量，Offset=0表示第一页，如果Limit=100，则Offset=100表示第二页，Offset=200表示第三页，以此类推</p>
     */
    public $Offset;

    /**
     * @var string <p>账单月份，格式为2024-02，不传默认当前月</p>
     */
    public $Month;

    /**
     * @var string <p>统计周期，枚举值如下<br>month - 月<br>day - 日</p>
     */
    public $PeriodType;

    /**
     * @var array <p>分账单元唯一标识，用作筛选</p>
     */
    public $TreeNodeUniqKeys;

    /**
     * @var string <p>排序字段，枚举值如下：<br>GatherCashPayAmount - 归集费用(现金)<br>GatherVoucherPayAmount- 归集费用(优惠券)<br>GatherIncentivePayAmount -  归集费用(赠送金)<br>GatherTransferPayAmount - 归集费用(分成金)<br>AllocateCashPayAmount - 分摊费用(现金)<br>AllocateVoucherPayAmount - 分摊费用(优惠券)<br>AllocateIncentivePayAmount - 分摊费用(赠送金)<br>AllocateTransferPayAmount - 分摊费用(分成金)<br>TotalCashPayAmount - 合计费用(现金)<br>TotalVoucherPayAmount - 合计费用(优惠券)<br>TotalIncentivePayAmount - 合计费用(赠送金)<br>TotalTransferPayAmount - 合计费用(分成金)<br>GatherRealCost - 归集费用(折后总额)<br>AllocateRealCost - 分摊费用(折后总额)<br>RealTotalCost - 合计费用(折后总额)<br>Ratio  - 占比(折后总额)</p>
     */
    public $Sort;

    /**
     * @var string <p>排序类型，枚举值如下：<br>asc - 升序<br>desc - 降序</p>
     */
    public $SortType;

    /**
     * @var array <p>日期，用作筛选</p>
     */
    public $BillDates;

    /**
     * @param integer $Limit <p>数量，最大值为1000</p>
     * @param integer $Offset <p>分页偏移量，Offset=0表示第一页，如果Limit=100，则Offset=100表示第二页，Offset=200表示第三页，以此类推</p>
     * @param string $Month <p>账单月份，格式为2024-02，不传默认当前月</p>
     * @param string $PeriodType <p>统计周期，枚举值如下<br>month - 月<br>day - 日</p>
     * @param array $TreeNodeUniqKeys <p>分账单元唯一标识，用作筛选</p>
     * @param string $Sort <p>排序字段，枚举值如下：<br>GatherCashPayAmount - 归集费用(现金)<br>GatherVoucherPayAmount- 归集费用(优惠券)<br>GatherIncentivePayAmount -  归集费用(赠送金)<br>GatherTransferPayAmount - 归集费用(分成金)<br>AllocateCashPayAmount - 分摊费用(现金)<br>AllocateVoucherPayAmount - 分摊费用(优惠券)<br>AllocateIncentivePayAmount - 分摊费用(赠送金)<br>AllocateTransferPayAmount - 分摊费用(分成金)<br>TotalCashPayAmount - 合计费用(现金)<br>TotalVoucherPayAmount - 合计费用(优惠券)<br>TotalIncentivePayAmount - 合计费用(赠送金)<br>TotalTransferPayAmount - 合计费用(分成金)<br>GatherRealCost - 归集费用(折后总额)<br>AllocateRealCost - 分摊费用(折后总额)<br>RealTotalCost - 合计费用(折后总额)<br>Ratio  - 占比(折后总额)</p>
     * @param string $SortType <p>排序类型，枚举值如下：<br>asc - 升序<br>desc - 降序</p>
     * @param array $BillDates <p>日期，用作筛选</p>
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }

        if (array_key_exists("PeriodType",$param) and $param["PeriodType"] !== null) {
            $this->PeriodType = $param["PeriodType"];
        }

        if (array_key_exists("TreeNodeUniqKeys",$param) and $param["TreeNodeUniqKeys"] !== null) {
            $this->TreeNodeUniqKeys = $param["TreeNodeUniqKeys"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("SortType",$param) and $param["SortType"] !== null) {
            $this->SortType = $param["SortType"];
        }

        if (array_key_exists("BillDates",$param) and $param["BillDates"] !== null) {
            $this->BillDates = $param["BillDates"];
        }
    }
}
