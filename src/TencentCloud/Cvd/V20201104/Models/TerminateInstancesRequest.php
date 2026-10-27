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
namespace TencentCloud\Cvd\V20201104\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TerminateInstances请求参数结构体
 *
 * @method array getInstanceIds() 获取<p>一个或多个待操作的实例ID。每次请求批量实例的上限为10。</p>
 * @method void setInstanceIds(array $InstanceIds) 设置<p>一个或多个待操作的实例ID。每次请求批量实例的上限为10。</p>
 * @method boolean getDestroyImmediately() 获取<p>是否立即销毁实例。默认false。 立即销毁的实例不会进入隔离期。</p>
 * @method void setDestroyImmediately(boolean $DestroyImmediately) 设置<p>是否立即销毁实例。默认false。 立即销毁的实例不会进入隔离期。</p>
 */
class TerminateInstancesRequest extends AbstractModel
{
    /**
     * @var array <p>一个或多个待操作的实例ID。每次请求批量实例的上限为10。</p>
     */
    public $InstanceIds;

    /**
     * @var boolean <p>是否立即销毁实例。默认false。 立即销毁的实例不会进入隔离期。</p>
     */
    public $DestroyImmediately;

    /**
     * @param array $InstanceIds <p>一个或多个待操作的实例ID。每次请求批量实例的上限为10。</p>
     * @param boolean $DestroyImmediately <p>是否立即销毁实例。默认false。 立即销毁的实例不会进入隔离期。</p>
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("DestroyImmediately",$param) and $param["DestroyImmediately"] !== null) {
            $this->DestroyImmediately = $param["DestroyImmediately"];
        }
    }
}
