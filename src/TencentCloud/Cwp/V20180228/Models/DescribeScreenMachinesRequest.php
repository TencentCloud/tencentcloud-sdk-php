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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeScreenMachines请求参数结构体
 *
 * @method string getMachineRegion() 获取主机区域
 * @method void setMachineRegion(string $MachineRegion) 设置主机区域
 * @method string getMachineIpOrAlias() 获取IP 支持内网IP,主机别名
 * @method void setMachineIpOrAlias(string $MachineIpOrAlias) 设置IP 支持内网IP,主机别名
 * @method integer getSecurityStatus() 获取风险状态类型：0：全部类型，1：风险主机，2：潜在风险主机 ， 3：已关机/离线主机，4：无风险主机
 * @method void setSecurityStatus(integer $SecurityStatus) 设置风险状态类型：0：全部类型，1：风险主机，2：潜在风险主机 ， 3：已关机/离线主机，4：无风险主机
 */
class DescribeScreenMachinesRequest extends AbstractModel
{
    /**
     * @var string 主机区域
     */
    public $MachineRegion;

    /**
     * @var string IP 支持内网IP,主机别名
     */
    public $MachineIpOrAlias;

    /**
     * @var integer 风险状态类型：0：全部类型，1：风险主机，2：潜在风险主机 ， 3：已关机/离线主机，4：无风险主机
     */
    public $SecurityStatus;

    /**
     * @param string $MachineRegion 主机区域
     * @param string $MachineIpOrAlias IP 支持内网IP,主机别名
     * @param integer $SecurityStatus 风险状态类型：0：全部类型，1：风险主机，2：潜在风险主机 ， 3：已关机/离线主机，4：无风险主机
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
        if (array_key_exists("MachineRegion",$param) and $param["MachineRegion"] !== null) {
            $this->MachineRegion = $param["MachineRegion"];
        }

        if (array_key_exists("MachineIpOrAlias",$param) and $param["MachineIpOrAlias"] !== null) {
            $this->MachineIpOrAlias = $param["MachineIpOrAlias"];
        }

        if (array_key_exists("SecurityStatus",$param) and $param["SecurityStatus"] !== null) {
            $this->SecurityStatus = $param["SecurityStatus"];
        }
    }
}
