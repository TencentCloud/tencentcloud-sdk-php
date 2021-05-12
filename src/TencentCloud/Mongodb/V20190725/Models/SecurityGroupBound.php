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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全组规则
 *
 * @method string getAction() 获取执行规则。ACCEPT或DROP
 * @method void setAction(string $Action) 设置执行规则。ACCEPT或DROP
 * @method string getCidrIp() 获取ip段。
 * @method void setCidrIp(string $CidrIp) 设置ip段。
 * @method string getPortRange() 获取端口范围
 * @method void setPortRange(string $PortRange) 设置端口范围
 * @method string getIpProtocol() 获取传输层协议。tcp，udp或ALL
 * @method void setIpProtocol(string $IpProtocol) 设置传输层协议。tcp，udp或ALL
 */
class SecurityGroupBound extends AbstractModel
{
    /**
     * @var string 执行规则。ACCEPT或DROP
     */
    public $Action;

    /**
     * @var string ip段。
     */
    public $CidrIp;

    /**
     * @var string 端口范围
     */
    public $PortRange;

    /**
     * @var string 传输层协议。tcp，udp或ALL
     */
    public $IpProtocol;

    /**
     * @param string $Action 执行规则。ACCEPT或DROP
     * @param string $CidrIp ip段。
     * @param string $PortRange 端口范围
     * @param string $IpProtocol 传输层协议。tcp，udp或ALL
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("CidrIp",$param) and $param["CidrIp"] !== null) {
            $this->CidrIp = $param["CidrIp"];
        }

        if (array_key_exists("PortRange",$param) and $param["PortRange"] !== null) {
            $this->PortRange = $param["PortRange"];
        }

        if (array_key_exists("IpProtocol",$param) and $param["IpProtocol"] !== null) {
            $this->IpProtocol = $param["IpProtocol"];
        }
    }
}
