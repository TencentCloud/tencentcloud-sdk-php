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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务健康状态信息
 *
 * @method string getStatus() 获取后端服务健康状态。DescribeListenerHealthStatus 仅返回非健康后端时，该值为 UnHealthy。
 * @method void setStatus(string $Status) 设置后端服务健康状态。DescribeListenerHealthStatus 仅返回非健康后端时，该值为 UnHealthy。
 * @method string getTargetId() 获取后端服务实例 ID，CVM 实例格式为 ins- 后接 8 位字母数字。
 * @method void setTargetId(string $TargetId) 设置后端服务实例 ID，CVM 实例格式为 ins- 后接 8 位字母数字。
 * @method string getTargetIp() 获取后端目标服务IP。
 * @method void setTargetIp(string $TargetIp) 设置后端目标服务IP。
 * @method integer getTargetPort() 获取后端服务器端口。
 * @method void setTargetPort(integer $TargetPort) 设置后端服务器端口。
 */
class TargetHealthStatusInfo extends AbstractModel
{
    /**
     * @var string 后端服务健康状态。DescribeListenerHealthStatus 仅返回非健康后端时，该值为 UnHealthy。
     */
    public $Status;

    /**
     * @var string 后端服务实例 ID，CVM 实例格式为 ins- 后接 8 位字母数字。
     */
    public $TargetId;

    /**
     * @var string 后端目标服务IP。
     */
    public $TargetIp;

    /**
     * @var integer 后端服务器端口。
     */
    public $TargetPort;

    /**
     * @param string $Status 后端服务健康状态。DescribeListenerHealthStatus 仅返回非健康后端时，该值为 UnHealthy。
     * @param string $TargetId 后端服务实例 ID，CVM 实例格式为 ins- 后接 8 位字母数字。
     * @param string $TargetIp 后端目标服务IP。
     * @param integer $TargetPort 后端服务器端口。
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TargetId",$param) and $param["TargetId"] !== null) {
            $this->TargetId = $param["TargetId"];
        }

        if (array_key_exists("TargetIp",$param) and $param["TargetIp"] !== null) {
            $this->TargetIp = $param["TargetIp"];
        }

        if (array_key_exists("TargetPort",$param) and $param["TargetPort"] !== null) {
            $this->TargetPort = $param["TargetPort"];
        }
    }
}
