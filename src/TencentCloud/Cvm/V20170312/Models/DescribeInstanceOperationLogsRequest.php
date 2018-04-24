<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getFilters() 获取每次请求的`Filters`的上限为1，`Filter.Values`的上限为1。
Filters.1.Name目前支持“instance-id”，即根据实例 ID 过滤。实例 ID 形如：ins-1w2x3y4z。
 * @method void setFilters(array $Filters) 设置每次请求的`Filters`的上限为1，`Filter.Values`的上限为1。
Filters.1.Name目前支持“instance-id”，即根据实例 ID 过滤。实例 ID 形如：ins-1w2x3y4z。
 */

/**
 *DescribeInstanceOperationLogs请求参数结构体
 */
class DescribeInstanceOperationLogsRequest extends AbstractModel
{
    /**
     * @var array 每次请求的`Filters`的上限为1，`Filter.Values`的上限为1。
Filters.1.Name目前支持“instance-id”，即根据实例 ID 过滤。实例 ID 形如：ins-1w2x3y4z。
     */
    public $Filters;
    /**
     * @param array $Filters 每次请求的`Filters`的上限为1，`Filter.Values`的上限为1。
Filters.1.Name目前支持“instance-id”，即根据实例 ID 过滤。实例 ID 形如：ins-1w2x3y4z。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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
    }
}
