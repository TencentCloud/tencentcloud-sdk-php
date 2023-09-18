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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDatasourceConnection请求参数结构体
 *
 * @method array getDatasourceConnectionIds() 获取连接ID列表，指定要查询的连接ID
 * @method void setDatasourceConnectionIds(array $DatasourceConnectionIds) 设置连接ID列表，指定要查询的连接ID
 * @method array getFilters() 获取过滤条件，当前支持的过滤键为：DatasourceConnectionName（数据源连接名）。
DatasourceConnectionType   （数据源连接连接类型）
 * @method void setFilters(array $Filters) 设置过滤条件，当前支持的过滤键为：DatasourceConnectionName（数据源连接名）。
DatasourceConnectionType   （数据源连接连接类型）
 * @method integer getOffset() 获取偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0
 * @method integer getLimit() 获取返回数量，默认20，最大值100
 * @method void setLimit(integer $Limit) 设置返回数量，默认20，最大值100
 * @method string getSortBy() 获取排序字段，支持如下字段类型，create-time（默认，创建时间）、update-time（更新时间）
 * @method void setSortBy(string $SortBy) 设置排序字段，支持如下字段类型，create-time（默认，创建时间）、update-time（更新时间）
 * @method string getSorting() 获取排序方式，desc表示正序，asc表示反序， 默认为desc
 * @method void setSorting(string $Sorting) 设置排序方式，desc表示正序，asc表示反序， 默认为desc
 * @method string getStartTime() 获取筛选字段：起始时间
 * @method void setStartTime(string $StartTime) 设置筛选字段：起始时间
 * @method string getEndTime() 获取筛选字段：截止时间
 * @method void setEndTime(string $EndTime) 设置筛选字段：截止时间
 * @method array getDatasourceConnectionNames() 获取连接名称列表，指定要查询的连接名称
 * @method void setDatasourceConnectionNames(array $DatasourceConnectionNames) 设置连接名称列表，指定要查询的连接名称
 * @method array getDatasourceConnectionTypes() 获取连接类型，支持Mysql/HiveCos/Kafka/DataLakeCatalog
 * @method void setDatasourceConnectionTypes(array $DatasourceConnectionTypes) 设置连接类型，支持Mysql/HiveCos/Kafka/DataLakeCatalog
 */
class DescribeDatasourceConnectionRequest extends AbstractModel
{
    /**
     * @var array 连接ID列表，指定要查询的连接ID
     */
    public $DatasourceConnectionIds;

    /**
     * @var array 过滤条件，当前支持的过滤键为：DatasourceConnectionName（数据源连接名）。
DatasourceConnectionType   （数据源连接连接类型）
     */
    public $Filters;

    /**
     * @var integer 偏移量，默认为0
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认20，最大值100
     */
    public $Limit;

    /**
     * @var string 排序字段，支持如下字段类型，create-time（默认，创建时间）、update-time（更新时间）
     */
    public $SortBy;

    /**
     * @var string 排序方式，desc表示正序，asc表示反序， 默认为desc
     */
    public $Sorting;

    /**
     * @var string 筛选字段：起始时间
     */
    public $StartTime;

    /**
     * @var string 筛选字段：截止时间
     */
    public $EndTime;

    /**
     * @var array 连接名称列表，指定要查询的连接名称
     */
    public $DatasourceConnectionNames;

    /**
     * @var array 连接类型，支持Mysql/HiveCos/Kafka/DataLakeCatalog
     */
    public $DatasourceConnectionTypes;

    /**
     * @param array $DatasourceConnectionIds 连接ID列表，指定要查询的连接ID
     * @param array $Filters 过滤条件，当前支持的过滤键为：DatasourceConnectionName（数据源连接名）。
DatasourceConnectionType   （数据源连接连接类型）
     * @param integer $Offset 偏移量，默认为0
     * @param integer $Limit 返回数量，默认20，最大值100
     * @param string $SortBy 排序字段，支持如下字段类型，create-time（默认，创建时间）、update-time（更新时间）
     * @param string $Sorting 排序方式，desc表示正序，asc表示反序， 默认为desc
     * @param string $StartTime 筛选字段：起始时间
     * @param string $EndTime 筛选字段：截止时间
     * @param array $DatasourceConnectionNames 连接名称列表，指定要查询的连接名称
     * @param array $DatasourceConnectionTypes 连接类型，支持Mysql/HiveCos/Kafka/DataLakeCatalog
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
        if (array_key_exists("DatasourceConnectionIds",$param) and $param["DatasourceConnectionIds"] !== null) {
            $this->DatasourceConnectionIds = $param["DatasourceConnectionIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("Sorting",$param) and $param["Sorting"] !== null) {
            $this->Sorting = $param["Sorting"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("DatasourceConnectionNames",$param) and $param["DatasourceConnectionNames"] !== null) {
            $this->DatasourceConnectionNames = $param["DatasourceConnectionNames"];
        }

        if (array_key_exists("DatasourceConnectionTypes",$param) and $param["DatasourceConnectionTypes"] !== null) {
            $this->DatasourceConnectionTypes = $param["DatasourceConnectionTypes"];
        }
    }
}
