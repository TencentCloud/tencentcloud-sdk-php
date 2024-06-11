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
 * DescribeAllocationSummaryByBusiness请求参数结构体
 *
 * @method integer getLimit() 获取数量，最大值为1000
 * @method void setLimit(integer $Limit) 设置数量，最大值为1000
 * @method integer getOffset() 获取分页偏移量，Offset=0表示第一页，如果Limit=100，则Offset=100表示第二页，Offset=200表示第三页，以此类推
 * @method void setOffset(integer $Offset) 设置分页偏移量，Offset=0表示第一页，如果Limit=100，则Offset=100表示第二页，Offset=200表示第三页，以此类推
 * @method string getMonth() 获取账单月份，格式为2024-02，不传默认当前月

 * @method void setMonth(string $Month) 设置账单月份，格式为2024-02，不传默认当前月

 * @method string getPeriodType() 获取统计周期，枚举值如下
month - 月
day - 日
 * @method void setPeriodType(string $PeriodType) 设置统计周期，枚举值如下
month - 月
day - 日
 * @method array getTreeNodeUniqKeys() 获取分账单元唯一标识，用作筛选

 * @method void setTreeNodeUniqKeys(array $TreeNodeUniqKeys) 设置分账单元唯一标识，用作筛选

 * @method string getSortType() 获取排序类型，枚举值如下：
asc - 升序
desc - 降序
 * @method void setSortType(string $SortType) 设置排序类型，枚举值如下：
asc - 升序
desc - 降序
 * @method string getSort() 获取排序字段，枚举值如下：
GatherCashPayAmount - 归集费用(现金)
GatherVoucherPayAmount- 归集费用(优惠券)
GatherIncentivePayAmount - 归集费用(赠送金)
GatherTransferPayAmount - 归集费用(分成金)
AllocateCashPayAmount - 分摊费用(现金)
AllocateVoucherPayAmount - 分摊费用(优惠券)
AllocateIncentivePayAmount - 分摊费用(赠送金)
AllocateTransferPayAmount - 分摊费用(分成金)
TotalCashPayAmount - 合计费用(现金)
TotalVoucherPayAmount - 合计费用(优惠券)
TotalIncentivePayAmount - 合计费用(赠送金)
TotalTransferPayAmount - 合计费用(分成金)
GatherRealCost - 归集费用(折后总额)
AllocateRealCost - 分摊费用(折后总额)
RealTotalCost - 合计费用(折后总额)
BusinessCode - 产品代码
Ratio - 占比(折后总额)
Trend - 环比(折后总额)
 * @method void setSort(string $Sort) 设置排序字段，枚举值如下：
GatherCashPayAmount - 归集费用(现金)
GatherVoucherPayAmount- 归集费用(优惠券)
GatherIncentivePayAmount - 归集费用(赠送金)
GatherTransferPayAmount - 归集费用(分成金)
AllocateCashPayAmount - 分摊费用(现金)
AllocateVoucherPayAmount - 分摊费用(优惠券)
AllocateIncentivePayAmount - 分摊费用(赠送金)
AllocateTransferPayAmount - 分摊费用(分成金)
TotalCashPayAmount - 合计费用(现金)
TotalVoucherPayAmount - 合计费用(优惠券)
TotalIncentivePayAmount - 合计费用(赠送金)
TotalTransferPayAmount - 合计费用(分成金)
GatherRealCost - 归集费用(折后总额)
AllocateRealCost - 分摊费用(折后总额)
RealTotalCost - 合计费用(折后总额)
BusinessCode - 产品代码
Ratio - 占比(折后总额)
Trend - 环比(折后总额)
 * @method array getBillDates() 获取日期，用作筛选，PeriodType=day时可传

 * @method void setBillDates(array $BillDates) 设置日期，用作筛选，PeriodType=day时可传

 * @method array getBusinessCodes() 获取产品编码，用作筛选
 * @method void setBusinessCodes(array $BusinessCodes) 设置产品编码，用作筛选
 * @method string getSearchKey() 获取模糊搜索条件
 * @method void setSearchKey(string $SearchKey) 设置模糊搜索条件
 */
class DescribeAllocationSummaryByBusinessRequest extends AbstractModel
{
    /**
     * @var integer 数量，最大值为1000
     */
    public $Limit;

    /**
     * @var integer 分页偏移量，Offset=0表示第一页，如果Limit=100，则Offset=100表示第二页，Offset=200表示第三页，以此类推
     */
    public $Offset;

    /**
     * @var string 账单月份，格式为2024-02，不传默认当前月

     */
    public $Month;

    /**
     * @var string 统计周期，枚举值如下
month - 月
day - 日
     */
    public $PeriodType;

    /**
     * @var array 分账单元唯一标识，用作筛选

     */
    public $TreeNodeUniqKeys;

    /**
     * @var string 排序类型，枚举值如下：
asc - 升序
desc - 降序
     */
    public $SortType;

    /**
     * @var string 排序字段，枚举值如下：
GatherCashPayAmount - 归集费用(现金)
GatherVoucherPayAmount- 归集费用(优惠券)
GatherIncentivePayAmount - 归集费用(赠送金)
GatherTransferPayAmount - 归集费用(分成金)
AllocateCashPayAmount - 分摊费用(现金)
AllocateVoucherPayAmount - 分摊费用(优惠券)
AllocateIncentivePayAmount - 分摊费用(赠送金)
AllocateTransferPayAmount - 分摊费用(分成金)
TotalCashPayAmount - 合计费用(现金)
TotalVoucherPayAmount - 合计费用(优惠券)
TotalIncentivePayAmount - 合计费用(赠送金)
TotalTransferPayAmount - 合计费用(分成金)
GatherRealCost - 归集费用(折后总额)
AllocateRealCost - 分摊费用(折后总额)
RealTotalCost - 合计费用(折后总额)
BusinessCode - 产品代码
Ratio - 占比(折后总额)
Trend - 环比(折后总额)
     */
    public $Sort;

    /**
     * @var array 日期，用作筛选，PeriodType=day时可传

     */
    public $BillDates;

    /**
     * @var array 产品编码，用作筛选
     */
    public $BusinessCodes;

    /**
     * @var string 模糊搜索条件
     * @deprecated
     */
    public $SearchKey;

    /**
     * @param integer $Limit 数量，最大值为1000
     * @param integer $Offset 分页偏移量，Offset=0表示第一页，如果Limit=100，则Offset=100表示第二页，Offset=200表示第三页，以此类推
     * @param string $Month 账单月份，格式为2024-02，不传默认当前月

     * @param string $PeriodType 统计周期，枚举值如下
month - 月
day - 日
     * @param array $TreeNodeUniqKeys 分账单元唯一标识，用作筛选

     * @param string $SortType 排序类型，枚举值如下：
asc - 升序
desc - 降序
     * @param string $Sort 排序字段，枚举值如下：
GatherCashPayAmount - 归集费用(现金)
GatherVoucherPayAmount- 归集费用(优惠券)
GatherIncentivePayAmount - 归集费用(赠送金)
GatherTransferPayAmount - 归集费用(分成金)
AllocateCashPayAmount - 分摊费用(现金)
AllocateVoucherPayAmount - 分摊费用(优惠券)
AllocateIncentivePayAmount - 分摊费用(赠送金)
AllocateTransferPayAmount - 分摊费用(分成金)
TotalCashPayAmount - 合计费用(现金)
TotalVoucherPayAmount - 合计费用(优惠券)
TotalIncentivePayAmount - 合计费用(赠送金)
TotalTransferPayAmount - 合计费用(分成金)
GatherRealCost - 归集费用(折后总额)
AllocateRealCost - 分摊费用(折后总额)
RealTotalCost - 合计费用(折后总额)
BusinessCode - 产品代码
Ratio - 占比(折后总额)
Trend - 环比(折后总额)
     * @param array $BillDates 日期，用作筛选，PeriodType=day时可传

     * @param array $BusinessCodes 产品编码，用作筛选
     * @param string $SearchKey 模糊搜索条件
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

        if (array_key_exists("SortType",$param) and $param["SortType"] !== null) {
            $this->SortType = $param["SortType"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("BillDates",$param) and $param["BillDates"] !== null) {
            $this->BillDates = $param["BillDates"];
        }

        if (array_key_exists("BusinessCodes",$param) and $param["BusinessCodes"] !== null) {
            $this->BusinessCodes = $param["BusinessCodes"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }
    }
}
