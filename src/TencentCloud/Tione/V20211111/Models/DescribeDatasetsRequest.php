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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDatasets请求参数结构体
 *
 * @method array getDatasetIds() 获取数据集id列表
 * @method void setDatasetIds(array $DatasetIds) 设置数据集id列表
 * @method array getFilters() 获取数据集查询过滤条件，多个Filter之间的关系为逻辑与（AND）关系，过滤字段Filter.Name，类型为String
DatasetName，数据集名称
DatasetScope，数据集范围，SCOPE_DATASET_PRIVATE或SCOPE_DATASET_PUBLIC
 * @method void setFilters(array $Filters) 设置数据集查询过滤条件，多个Filter之间的关系为逻辑与（AND）关系，过滤字段Filter.Name，类型为String
DatasetName，数据集名称
DatasetScope，数据集范围，SCOPE_DATASET_PRIVATE或SCOPE_DATASET_PUBLIC
 * @method array getTagFilters() 获取标签过滤条件
 * @method void setTagFilters(array $TagFilters) 设置标签过滤条件
 * @method string getOrder() 获取排序值，支持Asc或Desc，默认Desc
 * @method void setOrder(string $Order) 设置排序值，支持Asc或Desc，默认Desc
 * @method string getOrderField() 获取排序字段，支持CreateTime或UpdateTime，默认CreateTime
 * @method void setOrderField(string $OrderField) 设置排序字段，支持CreateTime或UpdateTime，默认CreateTime
 * @method integer getOffset() 获取偏移值
 * @method void setOffset(integer $Offset) 设置偏移值
 * @method integer getLimit() 获取返回数据个数，默认20，最大支持200
 * @method void setLimit(integer $Limit) 设置返回数据个数，默认20，最大支持200
 */
class DescribeDatasetsRequest extends AbstractModel
{
    /**
     * @var array 数据集id列表
     */
    public $DatasetIds;

    /**
     * @var array 数据集查询过滤条件，多个Filter之间的关系为逻辑与（AND）关系，过滤字段Filter.Name，类型为String
DatasetName，数据集名称
DatasetScope，数据集范围，SCOPE_DATASET_PRIVATE或SCOPE_DATASET_PUBLIC
     */
    public $Filters;

    /**
     * @var array 标签过滤条件
     */
    public $TagFilters;

    /**
     * @var string 排序值，支持Asc或Desc，默认Desc
     */
    public $Order;

    /**
     * @var string 排序字段，支持CreateTime或UpdateTime，默认CreateTime
     */
    public $OrderField;

    /**
     * @var integer 偏移值
     */
    public $Offset;

    /**
     * @var integer 返回数据个数，默认20，最大支持200
     */
    public $Limit;

    /**
     * @param array $DatasetIds 数据集id列表
     * @param array $Filters 数据集查询过滤条件，多个Filter之间的关系为逻辑与（AND）关系，过滤字段Filter.Name，类型为String
DatasetName，数据集名称
DatasetScope，数据集范围，SCOPE_DATASET_PRIVATE或SCOPE_DATASET_PUBLIC
     * @param array $TagFilters 标签过滤条件
     * @param string $Order 排序值，支持Asc或Desc，默认Desc
     * @param string $OrderField 排序字段，支持CreateTime或UpdateTime，默认CreateTime
     * @param integer $Offset 偏移值
     * @param integer $Limit 返回数据个数，默认20，最大支持200
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
        if (array_key_exists("DatasetIds",$param) and $param["DatasetIds"] !== null) {
            $this->DatasetIds = $param["DatasetIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("TagFilters",$param) and $param["TagFilters"] !== null) {
            $this->TagFilters = [];
            foreach ($param["TagFilters"] as $key => $value){
                $obj = new TagFilter();
                $obj->deserialize($value);
                array_push($this->TagFilters, $obj);
            }
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
