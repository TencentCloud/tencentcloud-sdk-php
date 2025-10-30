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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDatabases请求参数结构体
 *
 * @method string getDBInstanceId() 获取实例ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/product/409/16773)接口获取
 * @method void setDBInstanceId(string $DBInstanceId) 设置实例ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/product/409/16773)接口获取
 * @method array getFilters() 获取按照一个或者多个过滤条件进行查询，目前支持的过滤条件有：database-name：按照数据库名称过滤，类型为string。此处使用模糊匹配搜索符合条件的数据库。
 * @method void setFilters(array $Filters) 设置按照一个或者多个过滤条件进行查询，目前支持的过滤条件有：database-name：按照数据库名称过滤，类型为string。此处使用模糊匹配搜索符合条件的数据库。
 * @method integer getOffset() 获取数据偏移量，从0开始。	
 * @method void setOffset(integer $Offset) 设置数据偏移量，从0开始。	
 * @method integer getLimit() 获取单次显示数量。建议最大取值100。
默认值：20
 * @method void setLimit(integer $Limit) 设置单次显示数量。建议最大取值100。
默认值：20
 */
class DescribeDatabasesRequest extends AbstractModel
{
    /**
     * @var string 实例ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/product/409/16773)接口获取
     */
    public $DBInstanceId;

    /**
     * @var array 按照一个或者多个过滤条件进行查询，目前支持的过滤条件有：database-name：按照数据库名称过滤，类型为string。此处使用模糊匹配搜索符合条件的数据库。
     */
    public $Filters;

    /**
     * @var integer 数据偏移量，从0开始。	
     */
    public $Offset;

    /**
     * @var integer 单次显示数量。建议最大取值100。
默认值：20
     */
    public $Limit;

    /**
     * @param string $DBInstanceId 实例ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/product/409/16773)接口获取
     * @param array $Filters 按照一个或者多个过滤条件进行查询，目前支持的过滤条件有：database-name：按照数据库名称过滤，类型为string。此处使用模糊匹配搜索符合条件的数据库。
     * @param integer $Offset 数据偏移量，从0开始。	
     * @param integer $Limit 单次显示数量。建议最大取值100。
默认值：20
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
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
    }
}
