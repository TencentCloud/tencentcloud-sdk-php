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
 * DescribeAllocationBillDetail请求参数结构体
 *
 * @method integer getLimit() 获取<p>数量，最大值为1000</p>
 * @method void setLimit(integer $Limit) 设置<p>数量，最大值为1000</p>
 * @method integer getOffset() 获取<p>分页偏移量，Offset=0表示第一页，如果Limit=100，则Offset=100表示第二页，Offset=200表示第三页，以此类推</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量，Offset=0表示第一页，如果Limit=100，则Offset=100表示第二页，Offset=200表示第三页，以此类推</p>
 * @method string getMonth() 获取<p>账单月份，格式为2024-02，不传默认当前月</p>
 * @method void setMonth(string $Month) 设置<p>账单月份，格式为2024-02，不传默认当前月</p>
 * @method array getTreeNodeUniqKeys() 获取<p>分账单元唯一标识，用作筛选</p>
 * @method void setTreeNodeUniqKeys(array $TreeNodeUniqKeys) 设置<p>分账单元唯一标识，用作筛选</p>
 * @method string getSort() 获取<p>排序字段，枚举值如下：<br>RiTimeSpan - 预留实例抵扣时长<br>ExtendPayAmount1 - 预留实例抵扣组件原价<br>RealCost - 折后总价<br>CashPayAmount - 现金金额<br>VoucherPayAmount - 代金券金额<br>IncentivePayAmount - 赠送金金额<br>TransferPayAmount -分成金金额<br>Cost - 组件原价</p>
 * @method void setSort(string $Sort) 设置<p>排序字段，枚举值如下：<br>RiTimeSpan - 预留实例抵扣时长<br>ExtendPayAmount1 - 预留实例抵扣组件原价<br>RealCost - 折后总价<br>CashPayAmount - 现金金额<br>VoucherPayAmount - 代金券金额<br>IncentivePayAmount - 赠送金金额<br>TransferPayAmount -分成金金额<br>Cost - 组件原价</p>
 * @method string getSortType() 获取<p>排序类型，枚举值如下：<br>asc - 升序<br>desc - 降序</p>
 * @method void setSortType(string $SortType) 设置<p>排序类型，枚举值如下：<br>asc - 升序<br>desc - 降序</p>
 * @method array getBusinessCodes() 获取<p>产品编码，用作筛选</p>
 * @method void setBusinessCodes(array $BusinessCodes) 设置<p>产品编码，用作筛选</p>
 * @method array getOwnerUins() 获取<p>使用者UIN，用作筛选</p>
 * @method void setOwnerUins(array $OwnerUins) 设置<p>使用者UIN，用作筛选</p>
 * @method array getOperateUins() 获取<p>操作者UIN，用作筛选</p>
 * @method void setOperateUins(array $OperateUins) 设置<p>操作者UIN，用作筛选</p>
 * @method array getPayModes() 获取<p>计费模式编码，用作筛选</p>
 * @method void setPayModes(array $PayModes) 设置<p>计费模式编码，用作筛选</p>
 * @method array getActionTypes() 获取<p>交易类型编码，用作筛选</p>
 * @method void setActionTypes(array $ActionTypes) 设置<p>交易类型编码，用作筛选</p>
 * @method array getProductCodes() 获取<p>子产品编码，用作筛选</p>
 * @method void setProductCodes(array $ProductCodes) 设置<p>子产品编码，用作筛选</p>
 * @method array getRegionIds() 获取<p>地域ID，用作筛选</p>
 * @method void setRegionIds(array $RegionIds) 设置<p>地域ID，用作筛选</p>
 * @method array getZoneIds() 获取<p>可用区ID，用作筛选</p>
 * @method void setZoneIds(array $ZoneIds) 设置<p>可用区ID，用作筛选</p>
 * @method array getInstanceTypes() 获取<p>实例类型编码，用作筛选</p>
 * @method void setInstanceTypes(array $InstanceTypes) 设置<p>实例类型编码，用作筛选</p>
 * @method array getTag() 获取<p>标签，用作筛选</p>
 * @method void setTag(array $Tag) 设置<p>标签，用作筛选</p>
 * @method array getComponentCodes() 获取<p>组件类型编码，用作筛选</p>
 * @method void setComponentCodes(array $ComponentCodes) 设置<p>组件类型编码，用作筛选</p>
 * @method array getItemCodes() 获取<p>组件名称编码，用作筛选</p>
 * @method void setItemCodes(array $ItemCodes) 设置<p>组件名称编码，用作筛选</p>
 * @method string getSearchKey() 获取<p>模糊搜索：支持标签、资源id、资源别名</p>
 * @method void setSearchKey(string $SearchKey) 设置<p>模糊搜索：支持标签、资源id、资源别名</p>
 * @method array getProjectIds() 获取<p>项目ID，用作筛选</p>
 * @method void setProjectIds(array $ProjectIds) 设置<p>项目ID，用作筛选</p>
 */
class DescribeAllocationBillDetailRequest extends AbstractModel
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
     * @var array <p>分账单元唯一标识，用作筛选</p>
     */
    public $TreeNodeUniqKeys;

    /**
     * @var string <p>排序字段，枚举值如下：<br>RiTimeSpan - 预留实例抵扣时长<br>ExtendPayAmount1 - 预留实例抵扣组件原价<br>RealCost - 折后总价<br>CashPayAmount - 现金金额<br>VoucherPayAmount - 代金券金额<br>IncentivePayAmount - 赠送金金额<br>TransferPayAmount -分成金金额<br>Cost - 组件原价</p>
     */
    public $Sort;

    /**
     * @var string <p>排序类型，枚举值如下：<br>asc - 升序<br>desc - 降序</p>
     */
    public $SortType;

    /**
     * @var array <p>产品编码，用作筛选</p>
     */
    public $BusinessCodes;

    /**
     * @var array <p>使用者UIN，用作筛选</p>
     */
    public $OwnerUins;

    /**
     * @var array <p>操作者UIN，用作筛选</p>
     */
    public $OperateUins;

    /**
     * @var array <p>计费模式编码，用作筛选</p>
     */
    public $PayModes;

    /**
     * @var array <p>交易类型编码，用作筛选</p>
     */
    public $ActionTypes;

    /**
     * @var array <p>子产品编码，用作筛选</p>
     */
    public $ProductCodes;

    /**
     * @var array <p>地域ID，用作筛选</p>
     */
    public $RegionIds;

    /**
     * @var array <p>可用区ID，用作筛选</p>
     */
    public $ZoneIds;

    /**
     * @var array <p>实例类型编码，用作筛选</p>
     */
    public $InstanceTypes;

    /**
     * @var array <p>标签，用作筛选</p>
     */
    public $Tag;

    /**
     * @var array <p>组件类型编码，用作筛选</p>
     */
    public $ComponentCodes;

    /**
     * @var array <p>组件名称编码，用作筛选</p>
     */
    public $ItemCodes;

    /**
     * @var string <p>模糊搜索：支持标签、资源id、资源别名</p>
     */
    public $SearchKey;

    /**
     * @var array <p>项目ID，用作筛选</p>
     */
    public $ProjectIds;

    /**
     * @param integer $Limit <p>数量，最大值为1000</p>
     * @param integer $Offset <p>分页偏移量，Offset=0表示第一页，如果Limit=100，则Offset=100表示第二页，Offset=200表示第三页，以此类推</p>
     * @param string $Month <p>账单月份，格式为2024-02，不传默认当前月</p>
     * @param array $TreeNodeUniqKeys <p>分账单元唯一标识，用作筛选</p>
     * @param string $Sort <p>排序字段，枚举值如下：<br>RiTimeSpan - 预留实例抵扣时长<br>ExtendPayAmount1 - 预留实例抵扣组件原价<br>RealCost - 折后总价<br>CashPayAmount - 现金金额<br>VoucherPayAmount - 代金券金额<br>IncentivePayAmount - 赠送金金额<br>TransferPayAmount -分成金金额<br>Cost - 组件原价</p>
     * @param string $SortType <p>排序类型，枚举值如下：<br>asc - 升序<br>desc - 降序</p>
     * @param array $BusinessCodes <p>产品编码，用作筛选</p>
     * @param array $OwnerUins <p>使用者UIN，用作筛选</p>
     * @param array $OperateUins <p>操作者UIN，用作筛选</p>
     * @param array $PayModes <p>计费模式编码，用作筛选</p>
     * @param array $ActionTypes <p>交易类型编码，用作筛选</p>
     * @param array $ProductCodes <p>子产品编码，用作筛选</p>
     * @param array $RegionIds <p>地域ID，用作筛选</p>
     * @param array $ZoneIds <p>可用区ID，用作筛选</p>
     * @param array $InstanceTypes <p>实例类型编码，用作筛选</p>
     * @param array $Tag <p>标签，用作筛选</p>
     * @param array $ComponentCodes <p>组件类型编码，用作筛选</p>
     * @param array $ItemCodes <p>组件名称编码，用作筛选</p>
     * @param string $SearchKey <p>模糊搜索：支持标签、资源id、资源别名</p>
     * @param array $ProjectIds <p>项目ID，用作筛选</p>
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

        if (array_key_exists("TreeNodeUniqKeys",$param) and $param["TreeNodeUniqKeys"] !== null) {
            $this->TreeNodeUniqKeys = $param["TreeNodeUniqKeys"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("SortType",$param) and $param["SortType"] !== null) {
            $this->SortType = $param["SortType"];
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
    }
}
