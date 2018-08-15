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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getFilters() 获取过滤条件。
<li> zone - String - 是否必填：否 -（过滤条件）按照[可用区](https://cloud.tencent.com/document/api/213/9452#zone)过滤。</li>
<li> instance-family - String - 是否必填：否 -（过滤条件）按照实例机型系列过滤。实例机型系列形如：S1、I1、M1等。</li>
每次请求的`Filters`的上限为10，`Filter.Values`的上限为1。
 * @method void setFilters(array $Filters) 设置过滤条件。
<li> zone - String - 是否必填：否 -（过滤条件）按照[可用区](https://cloud.tencent.com/document/api/213/9452#zone)过滤。</li>
<li> instance-family - String - 是否必填：否 -（过滤条件）按照实例机型系列过滤。实例机型系列形如：S1、I1、M1等。</li>
每次请求的`Filters`的上限为10，`Filter.Values`的上限为1。
 */

/**
 *DescribeInstanceTypeConfigs请求参数结构体
 */
class DescribeInstanceTypeConfigsRequest extends AbstractModel
{
    /**
     * @var array 过滤条件。
<li> zone - String - 是否必填：否 -（过滤条件）按照[可用区](https://cloud.tencent.com/document/api/213/9452#zone)过滤。</li>
<li> instance-family - String - 是否必填：否 -（过滤条件）按照实例机型系列过滤。实例机型系列形如：S1、I1、M1等。</li>
每次请求的`Filters`的上限为10，`Filter.Values`的上限为1。
     */
    public $Filters;
    /**
     * @param array $Filters 过滤条件。
<li> zone - String - 是否必填：否 -（过滤条件）按照[可用区](https://cloud.tencent.com/document/api/213/9452#zone)过滤。</li>
<li> instance-family - String - 是否必填：否 -（过滤条件）按照实例机型系列过滤。实例机型系列形如：S1、I1、M1等。</li>
每次请求的`Filters`的上限为10，`Filter.Values`的上限为1。
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
