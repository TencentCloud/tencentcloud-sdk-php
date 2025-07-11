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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNodePools请求参数结构体
 *
 * @method string getClusterId() 获取集群 ID
 * @method void setClusterId(string $ClusterId) 设置集群 ID
 * @method array getFilters() 获取查询过滤条件：
·  NodePoolsName
    按照【节点池名】进行过滤。
    类型：String
    必选：否

·  NodePoolsId
    按照【节点池id】进行过滤。
    类型：String
    必选：否

·  tags
    按照【标签键值对】进行过滤。
    类型：String
    必选：否

·  tag:tag-key
    按照【标签键值对】进行过滤。
    类型：String
    必选：否
 * @method void setFilters(array $Filters) 设置查询过滤条件：
·  NodePoolsName
    按照【节点池名】进行过滤。
    类型：String
    必选：否

·  NodePoolsId
    按照【节点池id】进行过滤。
    类型：String
    必选：否

·  tags
    按照【标签键值对】进行过滤。
    类型：String
    必选：否

·  tag:tag-key
    按照【标签键值对】进行过滤。
    类型：String
    必选：否
 * @method integer getOffset() 获取偏移量，默认0
 * @method void setOffset(integer $Offset) 设置偏移量，默认0
 * @method integer getLimit() 获取最大输出条数，默认20，最大为100
 * @method void setLimit(integer $Limit) 设置最大输出条数，默认20，最大为100
 */
class DescribeNodePoolsRequest extends AbstractModel
{
    /**
     * @var string 集群 ID
     */
    public $ClusterId;

    /**
     * @var array 查询过滤条件：
·  NodePoolsName
    按照【节点池名】进行过滤。
    类型：String
    必选：否

·  NodePoolsId
    按照【节点池id】进行过滤。
    类型：String
    必选：否

·  tags
    按照【标签键值对】进行过滤。
    类型：String
    必选：否

·  tag:tag-key
    按照【标签键值对】进行过滤。
    类型：String
    必选：否
     */
    public $Filters;

    /**
     * @var integer 偏移量，默认0
     */
    public $Offset;

    /**
     * @var integer 最大输出条数，默认20，最大为100
     */
    public $Limit;

    /**
     * @param string $ClusterId 集群 ID
     * @param array $Filters 查询过滤条件：
·  NodePoolsName
    按照【节点池名】进行过滤。
    类型：String
    必选：否

·  NodePoolsId
    按照【节点池id】进行过滤。
    类型：String
    必选：否

·  tags
    按照【标签键值对】进行过滤。
    类型：String
    必选：否

·  tag:tag-key
    按照【标签键值对】进行过滤。
    类型：String
    必选：否
     * @param integer $Offset 偏移量，默认0
     * @param integer $Limit 最大输出条数，默认20，最大为100
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
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
