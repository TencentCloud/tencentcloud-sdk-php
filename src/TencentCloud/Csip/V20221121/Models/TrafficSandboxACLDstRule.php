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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ACL 目标（IP/端口）匹配规则
 *
 * @method array getDstIP() 获取目标 IP 列表
入参限制：每项支持三种格式：单个 IP（如 10.0.0.1）、网段（如 10.0.0.1/24）、IP 范围（如 10.0.0.1-10.0.2.0）
 * @method void setDstIP(array $DstIP) 设置目标 IP 列表
入参限制：每项支持三种格式：单个 IP（如 10.0.0.1）、网段（如 10.0.0.1/24）、IP 范围（如 10.0.0.1-10.0.2.0）
 * @method array getDstIPExcept() 获取排除的目标 IP 列表
入参限制：格式同 DstIP
 * @method void setDstIPExcept(array $DstIPExcept) 设置排除的目标 IP 列表
入参限制：格式同 DstIP
 * @method array getDstPort() 获取目标端口或端口范围
入参限制：单端口如 80，端口范围如 8000-9000
 * @method void setDstPort(array $DstPort) 设置目标端口或端口范围
入参限制：单端口如 80，端口范围如 8000-9000
 * @method array getDstPortExcept() 获取排除的目标端口列表
入参限制：格式同 DstPort
 * @method void setDstPortExcept(array $DstPortExcept) 设置排除的目标端口列表
入参限制：格式同 DstPort
 */
class TrafficSandboxACLDstRule extends AbstractModel
{
    /**
     * @var array 目标 IP 列表
入参限制：每项支持三种格式：单个 IP（如 10.0.0.1）、网段（如 10.0.0.1/24）、IP 范围（如 10.0.0.1-10.0.2.0）
     */
    public $DstIP;

    /**
     * @var array 排除的目标 IP 列表
入参限制：格式同 DstIP
     */
    public $DstIPExcept;

    /**
     * @var array 目标端口或端口范围
入参限制：单端口如 80，端口范围如 8000-9000
     */
    public $DstPort;

    /**
     * @var array 排除的目标端口列表
入参限制：格式同 DstPort
     */
    public $DstPortExcept;

    /**
     * @param array $DstIP 目标 IP 列表
入参限制：每项支持三种格式：单个 IP（如 10.0.0.1）、网段（如 10.0.0.1/24）、IP 范围（如 10.0.0.1-10.0.2.0）
     * @param array $DstIPExcept 排除的目标 IP 列表
入参限制：格式同 DstIP
     * @param array $DstPort 目标端口或端口范围
入参限制：单端口如 80，端口范围如 8000-9000
     * @param array $DstPortExcept 排除的目标端口列表
入参限制：格式同 DstPort
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
        if (array_key_exists("DstIP",$param) and $param["DstIP"] !== null) {
            $this->DstIP = $param["DstIP"];
        }

        if (array_key_exists("DstIPExcept",$param) and $param["DstIPExcept"] !== null) {
            $this->DstIPExcept = $param["DstIPExcept"];
        }

        if (array_key_exists("DstPort",$param) and $param["DstPort"] !== null) {
            $this->DstPort = $param["DstPort"];
        }

        if (array_key_exists("DstPortExcept",$param) and $param["DstPortExcept"] !== null) {
            $this->DstPortExcept = $param["DstPortExcept"];
        }
    }
}
