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
 * StopInvocation请求参数结构体
 *
 * @method string getInstanceId() 获取<p>云桌面实例ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>云桌面实例ID。</p>
 * @method string getInvokeId() 获取<p>任务ID。</p>
 * @method void setInvokeId(string $InvokeId) 设置<p>任务ID。</p>
 */
class StopInvocationRequest extends AbstractModel
{
    /**
     * @var string <p>云桌面实例ID。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>任务ID。</p>
     */
    public $InvokeId;

    /**
     * @param string $InstanceId <p>云桌面实例ID。</p>
     * @param string $InvokeId <p>任务ID。</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InvokeId",$param) and $param["InvokeId"] !== null) {
            $this->InvokeId = $param["InvokeId"];
        }
    }
}
