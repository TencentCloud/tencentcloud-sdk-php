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
 * DescribeAllocationSummaryByItem请求参数结构体
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

 * @method string getSort() 获取排序字段，枚举值如下：
RiTimeSpan - 预留实例抵扣时长
ExtendPayAmount1 - 预留实例抵扣组件原价
RealCost - 折后总价
CashPayAmount - 现金金额
VoucherPayAmount - 代金券金额
IncentivePayAmount - 赠送金金额
TransferPayAmount -分成金金额
Cost - 组件原价
 * @method void setSort(string $Sort) 设置排序字段，枚举值如下：
RiTimeSpan - 预留实例抵扣时长
ExtendPayAmount1 - 预留实例抵扣组件原价
RealCost - 折后总价
CashPayAmount - 现金金额
VoucherPayAmount - 代金券金额
IncentivePayAmount - 赠送金金额
TransferPayAmount -分成金金额
Cost - 组件原价
 * @method string getSortType() 获取排序类型，枚举值如下：
asc - 升序
desc - 降序
 * @method void setSortType(string $SortType) 设置排序类型，枚举值如下：
asc - 升序
desc - 降序
 * @method array getBillDates() 获取日期，用作筛选

 * @method void setBillDates(array $BillDates) 设置日期，用作筛选

 * @method array getBusinessCodes() 获取产品编码，用作筛选

 * @method void setBusinessCodes(array $BusinessCodes) 设置产品编码，用作筛选

 * @method array getOwnerUins() 获取使用者UIN，用作筛选

 * @method void setOwnerUins(array $OwnerUins) 设置使用者UIN，用作筛选

 * @method array getOperateUins() 获取操作者UIN，用作筛选

 * @method void setOperateUins(array $OperateUins) 设置操作者UIN，用作筛选

 * @method array getPayModes() 获取计费模式编码，用作筛选

 * @method void setPayModes(array $PayModes) 设置计费模式编码，用作筛选

 * @method array getActionTypes() 获取交易类型编码，用作筛选

 * @method void setActionTypes(array $ActionTypes) 设置交易类型编码，用作筛选

 * @method array getProductCodes() 获取子产品编码，用作筛选

 * @method void setProductCodes(array $ProductCodes) 设置子产品编码，用作筛选

 * @method array getRegionIds() 获取地域ID，用作筛选

 * @method void setRegionIds(array $RegionIds) 设置地域ID，用作筛选

 * @method array getZoneIds() 获取可用区ID，用作筛选

 * @method void setZoneIds(array $ZoneIds) 设置可用区ID，用作筛选

 * @method array getInstanceTypes() 获取实例类型编码，用作筛选

 * @method void setInstanceTypes(array $InstanceTypes) 设置实例类型编码，用作筛选

 * @method array getTag() 获取标签，用作筛选

 * @method void setTag(array $Tag) 设置标签，用作筛选

 * @method array getComponentCodes() 获取组件类型编码，用作筛选
 * @method void setComponentCodes(array $ComponentCodes) 设置组件类型编码，用作筛选
 * @method array getItemCodes() 获取组件名称编码，用作筛选
 * @method void setItemCodes(array $ItemCodes) 设置组件名称编码，用作筛选
 * @method string getSearchKey() 获取模糊搜索：支持标签、资源id、资源别名
 * @method void setSearchKey(string $SearchKey) 设置模糊搜索：支持标签、资源id、资源别名
 * @method array getProjectIds() 获取项目ID，用作筛选

 * @method void setProjectIds(array $ProjectIds) 设置项目ID，用作筛选

 * @method array getAllocationType() 获取费用归集类型，枚举值如下：
0 - 分摊
1 - 归集
-1 - 未分配
 * @method void setAllocationType(array $AllocationType) 设置费用归集类型，枚举值如下：
0 - 分摊
1 - 归集
-1 - 未分配
 */
class DescribeAllocationSummaryByItemRequest extends AbstractModel
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
     * @var string 排序字段，枚举值如下：
RiTimeSpan - 预留实例抵扣时长
ExtendPayAmount1 - 预留实例抵扣组件原价
RealCost - 折后总价
CashPayAmount - 现金金额
VoucherPayAmount - 代金券金额
IncentivePayAmount - 赠送金金额
TransferPayAmount -分成金金额
Cost - 组件原价
     */
    public $Sort;

    /**
     * @var string 排序类型，枚举值如下：
asc - 升序
desc - 降序
     */
    public $SortType;

    /**
     * @var array 日期，用作筛选

     */
    public $BillDates;

    /**
     * @var array 产品编码，用作筛选

     */
    public $BusinessCodes;

    /**
     * @var array 使用者UIN，用作筛选

     */
    public $OwnerUins;

    /**
     * @var array 操作者UIN，用作筛选

     */
    public $OperateUins;

    /**
     * @var array 计费模式编码，用作筛选

     */
    public $PayModes;

    /**
     * @var array 交易类型编码，用作筛选

     */
    public $ActionTypes;

    /**
     * @var array 子产品编码，用作筛选

     */
    public $ProductCodes;

    /**
     * @var array 地域ID，用作筛选

     */
    public $RegionIds;

    /**
     * @var array 可用区ID，用作筛选

     */
    public $ZoneIds;

    /**
     * @var array 实例类型编码，用作筛选

     */
    public $InstanceTypes;

    /**
     * @var array 标签，用作筛选

     */
    public $Tag;

    /**
     * @var array 组件类型编码，用作筛选
     */
    public $ComponentCodes;

    /**
     * @var array 组件名称编码，用作筛选
     */
    public $ItemCodes;

    /**
     * @var string 模糊搜索：支持标签、资源id、资源别名
     */
    public $SearchKey;

    /**
     * @var array 项目ID，用作筛选

     */
    public $ProjectIds;

    /**
     * @var array 费用归集类型，枚举值如下：
0 - 分摊
1 - 归集
-1 - 未分配
     */
    public $AllocationType;

    /**
     * @param integer $Limit 数量，最大值为1000

     * @param integer $Offset 分页偏移量，Offset=0表示第一页，如果Limit=100，则Offset=100表示第二页，Offset=200表示第三页，以此类推
     * @param string $Month 账单月份，格式为2024-02，不传默认当前月

     * @param string $PeriodType 统计周期，枚举值如下
month - 月
day - 日
     * @param array $TreeNodeUniqKeys 分账单元唯一标识，用作筛选

     * @param string $Sort 排序字段，枚举值如下：
RiTimeSpan - 预留实例抵扣时长
ExtendPayAmount1 - 预留实例抵扣组件原价
RealCost - 折后总价
CashPayAmount - 现金金额
VoucherPayAmount - 代金券金额
IncentivePayAmount - 赠送金金额
TransferPayAmount -分成金金额
Cost - 组件原价
     * @param string $SortType 排序类型，枚举值如下：
asc - 升序
desc - 降序
     * @param array $BillDates 日期，用作筛选

     * @param array $BusinessCodes 产品编码，用作筛选

     * @param array $OwnerUins 使用者UIN，用作筛选

     * @param array $OperateUins 操作者UIN，用作筛选

     * @param array $PayModes 计费模式编码，用作筛选

     * @param array $ActionTypes 交易类型编码，用作筛选

     * @param array $ProductCodes 子产品编码，用作筛选

     * @param array $RegionIds 地域ID，用作筛选

     * @param array $ZoneIds 可用区ID，用作筛选

     * @param array $InstanceTypes 实例类型编码，用作筛选

     * @param array $Tag 标签，用作筛选

     * @param array $ComponentCodes 组件类型编码，用作筛选
     * @param array $ItemCodes 组件名称编码，用作筛选
     * @param string $SearchKey 模糊搜索：支持标签、资源id、资源别名
     * @param array $ProjectIds 项目ID，用作筛选

     * @param array $AllocationType 费用归集类型，枚举值如下：
0 - 分摊
1 - 归集
-1 - 未分配
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

        if (array_key_exists("BusinessCodes",$param) and $param["BusinessCodes"] !== null) {
            $this->BusinessCodes = $param["BusinessCodes"];
        }

        if (array_key_exists("OwnerUins",$param) and $param["OwnerUins"] !== null) {
            $this->OwnerUins = $param["OwnerUins"];
        }

        if (array_key_exists("OperateUins",$param) and $param["OperateUins"] !== null) {
            $this->OperateUins = $param["OperateUins"];
        }

        if (array_key_exists("PayModes",$param) and $param["PayModes"] !== null) {
            $this->PayModes = $param["PayModes"];
        }

        if (array_key_exists("ActionTypes",$param) and $param["ActionTypes"] !== null) {
            $this->ActionTypes = $param["ActionTypes"];
        }

        if (array_key_exists("ProductCodes",$param) and $param["ProductCodes"] !== null) {
            $this->ProductCodes = $param["ProductCodes"];
        }

        if (array_key_exists("RegionIds",$param) and $param["RegionIds"] !== null) {
            $this->RegionIds = $param["RegionIds"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("InstanceTypes",$param) and $param["InstanceTypes"] !== null) {
            $this->InstanceTypes = $param["InstanceTypes"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("ComponentCodes",$param) and $param["ComponentCodes"] !== null) {
            $this->ComponentCodes = $param["ComponentCodes"];
        }

        if (array_key_exists("ItemCodes",$param) and $param["ItemCodes"] !== null) {
            $this->ItemCodes = $param["ItemCodes"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("AllocationType",$param) and $param["AllocationType"] !== null) {
            $this->AllocationType = $param["AllocationType"];
        }
    }
}
