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
 * DescribeAllocationBillConditions请求参数结构体
 *
 * @method string getMonth() 获取账单月份，格式为2024-02，不传默认当前月
 * @method void setMonth(string $Month) 设置账单月份，格式为2024-02，不传默认当前月
 * @method array getTreeNodeUniqKeys() 获取分账单元唯一标识，用作筛选
 * @method void setTreeNodeUniqKeys(array $TreeNodeUniqKeys) 设置分账单元唯一标识，用作筛选
 * @method array getBillDates() 获取日期
 * @method void setBillDates(array $BillDates) 设置日期
 * @method array getBusinessCodes() 获取产品编码
 * @method void setBusinessCodes(array $BusinessCodes) 设置产品编码
 * @method array getOwnerUins() 获取使用者UIN
 * @method void setOwnerUins(array $OwnerUins) 设置使用者UIN
 * @method array getOperateUins() 获取操作者UIN
 * @method void setOperateUins(array $OperateUins) 设置操作者UIN
 * @method array getPayModes() 获取计费模式编码
 * @method void setPayModes(array $PayModes) 设置计费模式编码
 * @method array getActionTypes() 获取交易类型编码
 * @method void setActionTypes(array $ActionTypes) 设置交易类型编码
 * @method array getProductCodes() 获取子产品编码
 * @method void setProductCodes(array $ProductCodes) 设置子产品编码
 * @method array getRegionIds() 获取地域ID
 * @method void setRegionIds(array $RegionIds) 设置地域ID
 * @method array getZoneIds() 获取可用区ID
 * @method void setZoneIds(array $ZoneIds) 设置可用区ID
 * @method array getInstanceTypes() 获取实例类型编码
 * @method void setInstanceTypes(array $InstanceTypes) 设置实例类型编码
 * @method array getTag() 获取标签
 * @method void setTag(array $Tag) 设置标签
 * @method array getComponentCodes() 获取组件类型编码
 * @method void setComponentCodes(array $ComponentCodes) 设置组件类型编码
 * @method array getItemCodes() 获取组件名称编码
 * @method void setItemCodes(array $ItemCodes) 设置组件名称编码
 * @method string getSearchKey() 获取模糊搜索条件
 * @method void setSearchKey(string $SearchKey) 设置模糊搜索条件
 * @method array getProjectIds() 获取项目id
 * @method void setProjectIds(array $ProjectIds) 设置项目id
 * @method array getAllocationType() 获取费用归集类型
 * @method void setAllocationType(array $AllocationType) 设置费用归集类型
 */
class DescribeAllocationBillConditionsRequest extends AbstractModel
{
    /**
     * @var string 账单月份，格式为2024-02，不传默认当前月
     */
    public $Month;

    /**
     * @var array 分账单元唯一标识，用作筛选
     */
    public $TreeNodeUniqKeys;

    /**
     * @var array 日期
     */
    public $BillDates;

    /**
     * @var array 产品编码
     */
    public $BusinessCodes;

    /**
     * @var array 使用者UIN
     */
    public $OwnerUins;

    /**
     * @var array 操作者UIN
     */
    public $OperateUins;

    /**
     * @var array 计费模式编码
     */
    public $PayModes;

    /**
     * @var array 交易类型编码
     */
    public $ActionTypes;

    /**
     * @var array 子产品编码
     */
    public $ProductCodes;

    /**
     * @var array 地域ID
     */
    public $RegionIds;

    /**
     * @var array 可用区ID
     */
    public $ZoneIds;

    /**
     * @var array 实例类型编码
     */
    public $InstanceTypes;

    /**
     * @var array 标签
     */
    public $Tag;

    /**
     * @var array 组件类型编码
     */
    public $ComponentCodes;

    /**
     * @var array 组件名称编码
     */
    public $ItemCodes;

    /**
     * @var string 模糊搜索条件
     */
    public $SearchKey;

    /**
     * @var array 项目id
     */
    public $ProjectIds;

    /**
     * @var array 费用归集类型
     */
    public $AllocationType;

    /**
     * @param string $Month 账单月份，格式为2024-02，不传默认当前月
     * @param array $TreeNodeUniqKeys 分账单元唯一标识，用作筛选
     * @param array $BillDates 日期
     * @param array $BusinessCodes 产品编码
     * @param array $OwnerUins 使用者UIN
     * @param array $OperateUins 操作者UIN
     * @param array $PayModes 计费模式编码
     * @param array $ActionTypes 交易类型编码
     * @param array $ProductCodes 子产品编码
     * @param array $RegionIds 地域ID
     * @param array $ZoneIds 可用区ID
     * @param array $InstanceTypes 实例类型编码
     * @param array $Tag 标签
     * @param array $ComponentCodes 组件类型编码
     * @param array $ItemCodes 组件名称编码
     * @param string $SearchKey 模糊搜索条件
     * @param array $ProjectIds 项目id
     * @param array $AllocationType 费用归集类型
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
        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }

        if (array_key_exists("TreeNodeUniqKeys",$param) and $param["TreeNodeUniqKeys"] !== null) {
            $this->TreeNodeUniqKeys = $param["TreeNodeUniqKeys"];
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
