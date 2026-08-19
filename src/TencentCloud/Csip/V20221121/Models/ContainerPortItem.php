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
 * 容器端口信息
 *
 * @method string getProcessName() 获取监听进程名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessName(string $ProcessName) 设置监听进程名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getContainerPort() 获取容器内监听端口
 * @method void setContainerPort(integer $ContainerPort) 设置容器内监听端口
 * @method string getRunAs() 获取进程运行用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunAs(string $RunAs) 设置进程运行用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getContainerPID() 获取容器内进程ID
 * @method void setContainerPID(integer $ContainerPID) 设置容器内进程ID
 * @method string getHostInnerIP() 获取宿主机内网IP地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostInnerIP(string $HostInnerIP) 设置宿主机内网IP地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHostPublicIP() 获取宿主机外网IP地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostPublicIP(string $HostPublicIP) 设置宿主机外网IP地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPublicPort() 获取宿主机映射端口
 * @method void setPublicPort(integer $PublicPort) 设置宿主机映射端口
 * @method string getProtocolType() 获取网络协议类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtocolType(string $ProtocolType) 设置网络协议类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class ContainerPortItem extends AbstractModel
{
    /**
     * @var string 监听进程名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessName;

    /**
     * @var integer 容器内监听端口
     */
    public $ContainerPort;

    /**
     * @var string 进程运行用户
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunAs;

    /**
     * @var integer 容器内进程ID
     */
    public $ContainerPID;

    /**
     * @var string 宿主机内网IP地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostInnerIP;

    /**
     * @var string 宿主机外网IP地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostPublicIP;

    /**
     * @var integer 宿主机映射端口
     */
    public $PublicPort;

    /**
     * @var string 网络协议类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProtocolType;

    /**
     * @param string $ProcessName 监听进程名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ContainerPort 容器内监听端口
     * @param string $RunAs 进程运行用户
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ContainerPID 容器内进程ID
     * @param string $HostInnerIP 宿主机内网IP地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HostPublicIP 宿主机外网IP地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PublicPort 宿主机映射端口
     * @param string $ProtocolType 网络协议类型
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
        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("ContainerPort",$param) and $param["ContainerPort"] !== null) {
            $this->ContainerPort = $param["ContainerPort"];
        }

        if (array_key_exists("RunAs",$param) and $param["RunAs"] !== null) {
            $this->RunAs = $param["RunAs"];
        }

        if (array_key_exists("ContainerPID",$param) and $param["ContainerPID"] !== null) {
            $this->ContainerPID = $param["ContainerPID"];
        }

        if (array_key_exists("HostInnerIP",$param) and $param["HostInnerIP"] !== null) {
            $this->HostInnerIP = $param["HostInnerIP"];
        }

        if (array_key_exists("HostPublicIP",$param) and $param["HostPublicIP"] !== null) {
            $this->HostPublicIP = $param["HostPublicIP"];
        }

        if (array_key_exists("PublicPort",$param) and $param["PublicPort"] !== null) {
            $this->PublicPort = $param["PublicPort"];
        }

        if (array_key_exists("ProtocolType",$param) and $param["ProtocolType"] !== null) {
            $this->ProtocolType = $param["ProtocolType"];
        }
    }
}
