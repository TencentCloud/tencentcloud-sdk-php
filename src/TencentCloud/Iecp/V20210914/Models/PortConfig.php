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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 端口配置
 *
 * @method string getProtocol() 获取协议类型(tcp|udp)
 * @method void setProtocol(string $Protocol) 设置协议类型(tcp|udp)
 * @method integer getPort() 获取源端口
 * @method void setPort(integer $Port) 设置源端口
 * @method integer getTargetPort() 获取目标端口
 * @method void setTargetPort(integer $TargetPort) 设置目标端口
 * @method integer getNodePort() 获取节点端口
 * @method void setNodePort(integer $NodePort) 设置节点端口
 */
class PortConfig extends AbstractModel
{
    /**
     * @var string 协议类型(tcp|udp)
     */
    public $Protocol;

    /**
     * @var integer 源端口
     */
    public $Port;

    /**
     * @var integer 目标端口
     */
    public $TargetPort;

    /**
     * @var integer 节点端口
     */
    public $NodePort;

    /**
     * @param string $Protocol 协议类型(tcp|udp)
     * @param integer $Port 源端口
     * @param integer $TargetPort 目标端口
     * @param integer $NodePort 节点端口
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
        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("TargetPort",$param) and $param["TargetPort"] !== null) {
            $this->TargetPort = $param["TargetPort"];
        }

        if (array_key_exists("NodePort",$param) and $param["NodePort"] !== null) {
            $this->NodePort = $param["NodePort"];
        }
    }
}
