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
 * DescribeServerlessDBInstances请求参数结构体
 *
 * @method array getFilter() 获取查询条件。按照一个或者多个过滤条件进行查询，目前支持的过滤条件类型（name字段指定）有： 

- db-instance-id：按照实例ID过滤，类型为string
- db-instance-name：按照实例名过滤，类型为string
- db-tag-key：按照实例的tag过滤，类型为string

value字段指定该类型过滤条件下具体要过滤的实例ID/实例名/实例tag-key。
 * @method void setFilter(array $Filter) 设置查询条件。按照一个或者多个过滤条件进行查询，目前支持的过滤条件类型（name字段指定）有： 

- db-instance-id：按照实例ID过滤，类型为string
- db-instance-name：按照实例名过滤，类型为string
- db-tag-key：按照实例的tag过滤，类型为string

value字段指定该类型过滤条件下具体要过滤的实例ID/实例名/实例tag-key。
 * @method integer getLimit() 获取查询个数
 * @method void setLimit(integer $Limit) 设置查询个数
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method string getOrderBy() 获取排序指标，目前支持实例创建时间CreateTime
 * @method void setOrderBy(string $OrderBy) 设置排序指标，目前支持实例创建时间CreateTime
 * @method string getOrderByType() 获取排序方式，包括升序、降序
 * @method void setOrderByType(string $OrderByType) 设置排序方式，包括升序、降序
 */
class DescribeServerlessDBInstancesRequest extends AbstractModel
{
    /**
     * @var array 查询条件。按照一个或者多个过滤条件进行查询，目前支持的过滤条件类型（name字段指定）有： 

- db-instance-id：按照实例ID过滤，类型为string
- db-instance-name：按照实例名过滤，类型为string
- db-tag-key：按照实例的tag过滤，类型为string

value字段指定该类型过滤条件下具体要过滤的实例ID/实例名/实例tag-key。
     */
    public $Filter;

    /**
     * @var integer 查询个数
     */
    public $Limit;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var string 排序指标，目前支持实例创建时间CreateTime
     */
    public $OrderBy;

    /**
     * @var string 排序方式，包括升序、降序
     */
    public $OrderByType;

    /**
     * @param array $Filter 查询条件。按照一个或者多个过滤条件进行查询，目前支持的过滤条件类型（name字段指定）有： 

- db-instance-id：按照实例ID过滤，类型为string
- db-instance-name：按照实例名过滤，类型为string
- db-tag-key：按照实例的tag过滤，类型为string

value字段指定该类型过滤条件下具体要过滤的实例ID/实例名/实例tag-key。
     * @param integer $Limit 查询个数
     * @param integer $Offset 偏移量
     * @param string $OrderBy 排序指标，目前支持实例创建时间CreateTime
     * @param string $OrderByType 排序方式，包括升序、降序
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
        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = [];
            foreach ($param["Filter"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filter, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }
    }
}
