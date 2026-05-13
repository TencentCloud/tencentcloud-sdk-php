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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AllocateEnv请求参数结构体
 *
 * @method string getAllocateId() 获取<p>分配请求ID，会按这个值做幂等</p><p>入参限制：长度不超过64</p>
 * @method void setAllocateId(string $AllocateId) 设置<p>分配请求ID，会按这个值做幂等</p><p>入参限制：长度不超过64</p>
 * @method string getExternalAppId() 获取<p>客户平台的应用标识，如果没有则不传</p>
 * @method void setExternalAppId(string $ExternalAppId) 设置<p>客户平台的应用标识，如果没有则不传</p>
 */
class AllocateEnvRequest extends AbstractModel
{
    /**
     * @var string <p>分配请求ID，会按这个值做幂等</p><p>入参限制：长度不超过64</p>
     */
    public $AllocateId;

    /**
     * @var string <p>客户平台的应用标识，如果没有则不传</p>
     */
    public $ExternalAppId;

    /**
     * @param string $AllocateId <p>分配请求ID，会按这个值做幂等</p><p>入参限制：长度不超过64</p>
     * @param string $ExternalAppId <p>客户平台的应用标识，如果没有则不传</p>
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
        if (array_key_exists("AllocateId",$param) and $param["AllocateId"] !== null) {
            $this->AllocateId = $param["AllocateId"];
        }

        if (array_key_exists("ExternalAppId",$param) and $param["ExternalAppId"] !== null) {
            $this->ExternalAppId = $param["ExternalAppId"];
        }
    }
}
