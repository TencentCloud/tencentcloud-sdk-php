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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Docker容器映射的端口
 *
 * @method integer getHostPort() 获取主机端口
 * @method void setHostPort(integer $HostPort) 设置主机端口
 * @method integer getContainerPort() 获取容器端口
 * @method void setContainerPort(integer $ContainerPort) 设置容器端口
 * @method string getIp() 获取对外绑定IP，默认0.0.0.0
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIp(string $Ip) 设置对外绑定IP，默认0.0.0.0
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtocol() 获取协议，默认tcp，支持tcp/udp/sctp
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtocol(string $Protocol) 设置协议，默认tcp，支持tcp/udp/sctp
注意：此字段可能返回 null，表示取不到有效值。
 */
class DockerContainerPublishPort extends AbstractModel
{
    /**
     * @var integer 主机端口
     */
    public $HostPort;

    /**
     * @var integer 容器端口
     */
    public $ContainerPort;

    /**
     * @var string 对外绑定IP，默认0.0.0.0
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ip;

    /**
     * @var string 协议，默认tcp，支持tcp/udp/sctp
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Protocol;

    /**
     * @param integer $HostPort 主机端口
     * @param integer $ContainerPort 容器端口
     * @param string $Ip 对外绑定IP，默认0.0.0.0
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Protocol 协议，默认tcp，支持tcp/udp/sctp
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("HostPort",$param) and $param["HostPort"] !== null) {
            $this->HostPort = $param["HostPort"];
        }

        if (array_key_exists("ContainerPort",$param) and $param["ContainerPort"] !== null) {
            $this->ContainerPort = $param["ContainerPort"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }
    }
}
