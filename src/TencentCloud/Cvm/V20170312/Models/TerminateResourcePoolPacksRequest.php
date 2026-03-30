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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TerminateResourcePoolPacks请求参数结构体
 *
 * @method array getDedicatedResourcePackIds() 获取实例资源池ID列表，支持批量销毁。形如：rpp-6rk3550n。每次请求的实例的上限为100。
 * @method void setDedicatedResourcePackIds(array $DedicatedResourcePackIds) 设置实例资源池ID列表，支持批量销毁。形如：rpp-6rk3550n。每次请求的实例的上限为100。
 */
class TerminateResourcePoolPacksRequest extends AbstractModel
{
    /**
     * @var array 实例资源池ID列表，支持批量销毁。形如：rpp-6rk3550n。每次请求的实例的上限为100。
     */
    public $DedicatedResourcePackIds;

    /**
     * @param array $DedicatedResourcePackIds 实例资源池ID列表，支持批量销毁。形如：rpp-6rk3550n。每次请求的实例的上限为100。
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
        if (array_key_exists("DedicatedResourcePackIds",$param) and $param["DedicatedResourcePackIds"] !== null) {
            $this->DedicatedResourcePackIds = $param["DedicatedResourcePackIds"];
        }
    }
}
