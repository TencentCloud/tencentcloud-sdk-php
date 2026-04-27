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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckAddressByPrometheus请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例id</p>
 * @method string getTarget() 获取<p>探测地址</p>
 * @method void setTarget(string $Target) 设置<p>探测地址</p>
 * @method string getProbeProtocol() 获取<p>探测方式。tcp或http，默认是tcp</p>
 * @method void setProbeProtocol(string $ProbeProtocol) 设置<p>探测方式。tcp或http，默认是tcp</p>
 */
class CheckAddressByPrometheusRequest extends AbstractModel
{
    /**
     * @var string <p>实例id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>探测地址</p>
     */
    public $Target;

    /**
     * @var string <p>探测方式。tcp或http，默认是tcp</p>
     */
    public $ProbeProtocol;

    /**
     * @param string $InstanceId <p>实例id</p>
     * @param string $Target <p>探测地址</p>
     * @param string $ProbeProtocol <p>探测方式。tcp或http，默认是tcp</p>
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

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("ProbeProtocol",$param) and $param["ProbeProtocol"] !== null) {
            $this->ProbeProtocol = $param["ProbeProtocol"];
        }
    }
}
