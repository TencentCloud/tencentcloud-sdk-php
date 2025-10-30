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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyReservedInstanceScope请求参数结构体
 *
 * @method array getReservedInstanceIds() 获取预留券实例ID。可通过 [DescribeReservedInstances](https://cloud.tencent.com/document/product/457/99162) 接口返回值中的ReservedInstanceId获取。
 * @method void setReservedInstanceIds(array $ReservedInstanceIds) 设置预留券实例ID。可通过 [DescribeReservedInstances](https://cloud.tencent.com/document/product/457/99162) 接口返回值中的ReservedInstanceId获取。
 * @method ReservedInstanceScope getReservedInstanceScope() 获取预留券抵扣范围信息
 * @method void setReservedInstanceScope(ReservedInstanceScope $ReservedInstanceScope) 设置预留券抵扣范围信息
 */
class ModifyReservedInstanceScopeRequest extends AbstractModel
{
    /**
     * @var array 预留券实例ID。可通过 [DescribeReservedInstances](https://cloud.tencent.com/document/product/457/99162) 接口返回值中的ReservedInstanceId获取。
     */
    public $ReservedInstanceIds;

    /**
     * @var ReservedInstanceScope 预留券抵扣范围信息
     */
    public $ReservedInstanceScope;

    /**
     * @param array $ReservedInstanceIds 预留券实例ID。可通过 [DescribeReservedInstances](https://cloud.tencent.com/document/product/457/99162) 接口返回值中的ReservedInstanceId获取。
     * @param ReservedInstanceScope $ReservedInstanceScope 预留券抵扣范围信息
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
        if (array_key_exists("ReservedInstanceIds",$param) and $param["ReservedInstanceIds"] !== null) {
            $this->ReservedInstanceIds = $param["ReservedInstanceIds"];
        }

        if (array_key_exists("ReservedInstanceScope",$param) and $param["ReservedInstanceScope"] !== null) {
            $this->ReservedInstanceScope = new ReservedInstanceScope();
            $this->ReservedInstanceScope->deserialize($param["ReservedInstanceScope"]);
        }
    }
}
