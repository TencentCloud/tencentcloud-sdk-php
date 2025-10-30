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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstances请求参数结构体
 *
 * @method array getFilters() 获取过滤条件。多个 filter 之间是与关系，单个 filter 多个 value 之间是或关系。
参考：[{"Name":"ip","Values":["172.16.16.139"]}]
filter name 取值范围：
- `id`：实例ID
- ` name `：实例名
- ` ip `：内网IP（可填wan_ip或lan_ip）
 * @method void setFilters(array $Filters) 设置过滤条件。多个 filter 之间是与关系，单个 filter 多个 value 之间是或关系。
参考：[{"Name":"ip","Values":["172.16.16.139"]}]
filter name 取值范围：
- `id`：实例ID
- ` name `：实例名
- ` ip `：内网IP（可填wan_ip或lan_ip）
 * @method integer getOffset() 获取偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0
 * @method integer getLimit() 获取分页个数，默认为20，最大100
 * @method void setLimit(integer $Limit) 设置分页个数，默认为20，最大100
 */
class DescribeInstancesRequest extends AbstractModel
{
    /**
     * @var array 过滤条件。多个 filter 之间是与关系，单个 filter 多个 value 之间是或关系。
参考：[{"Name":"ip","Values":["172.16.16.139"]}]
filter name 取值范围：
- `id`：实例ID
- ` name `：实例名
- ` ip `：内网IP（可填wan_ip或lan_ip）
     */
    public $Filters;

    /**
     * @var integer 偏移量，默认为0
     */
    public $Offset;

    /**
     * @var integer 分页个数，默认为20，最大100
     */
    public $Limit;

    /**
     * @param array $Filters 过滤条件。多个 filter 之间是与关系，单个 filter 多个 value 之间是或关系。
参考：[{"Name":"ip","Values":["172.16.16.139"]}]
filter name 取值范围：
- `id`：实例ID
- ` name `：实例名
- ` ip `：内网IP（可填wan_ip或lan_ip）
     * @param integer $Offset 偏移量，默认为0
     * @param integer $Limit 分页个数，默认为20，最大100
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
