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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 容器安全端口信息列表
 *
 * @method string getType() 获取类型
 * @method void setType(string $Type) 设置类型
 * @method string getPublicIP() 获取对外ip
 * @method void setPublicIP(string $PublicIP) 设置对外ip
 * @method integer getPublicPort() 获取主机端口
 * @method void setPublicPort(integer $PublicPort) 设置主机端口
 * @method integer getContainerPort() 获取容器端口
 * @method void setContainerPort(integer $ContainerPort) 设置容器端口
 * @method integer getContainerPID() 获取容器Pid
 * @method void setContainerPID(integer $ContainerPID) 设置容器Pid
 * @method string getContainerName() 获取容器名
 * @method void setContainerName(string $ContainerName) 设置容器名
 * @method string getHostID() 获取主机id
 * @method void setHostID(string $HostID) 设置主机id
 * @method string getHostIP() 获取主机ip
 * @method void setHostIP(string $HostIP) 设置主机ip
 * @method string getProcessName() 获取进程名称
 * @method void setProcessName(string $ProcessName) 设置进程名称
 * @method string getListenContainer() 获取容器内监听地址
 * @method void setListenContainer(string $ListenContainer) 设置容器内监听地址
 * @method string getListenHost() 获取容器外监听地址
 * @method void setListenHost(string $ListenHost) 设置容器外监听地址
 * @method string getRunAs() 获取运行账号
 * @method void setRunAs(string $RunAs) 设置运行账号
 * @method string getHostName() 获取主机名称
 * @method void setHostName(string $HostName) 设置主机名称
 * @method string getPublicIp() 获取外网ip
 * @method void setPublicIp(string $PublicIp) 设置外网ip
 */
class PortInfo extends AbstractModel
{
    /**
     * @var string 类型
     */
    public $Type;

    /**
     * @var string 对外ip
     */
    public $PublicIP;

    /**
     * @var integer 主机端口
     */
    public $PublicPort;

    /**
     * @var integer 容器端口
     */
    public $ContainerPort;

    /**
     * @var integer 容器Pid
     */
    public $ContainerPID;

    /**
     * @var string 容器名
     */
    public $ContainerName;

    /**
     * @var string 主机id
     */
    public $HostID;

    /**
     * @var string 主机ip
     */
    public $HostIP;

    /**
     * @var string 进程名称
     */
    public $ProcessName;

    /**
     * @var string 容器内监听地址
     */
    public $ListenContainer;

    /**
     * @var string 容器外监听地址
     */
    public $ListenHost;

    /**
     * @var string 运行账号
     */
    public $RunAs;

    /**
     * @var string 主机名称
     */
    public $HostName;

    /**
     * @var string 外网ip
     */
    public $PublicIp;

    /**
     * @param string $Type 类型
     * @param string $PublicIP 对外ip
     * @param integer $PublicPort 主机端口
     * @param integer $ContainerPort 容器端口
     * @param integer $ContainerPID 容器Pid
     * @param string $ContainerName 容器名
     * @param string $HostID 主机id
     * @param string $HostIP 主机ip
     * @param string $ProcessName 进程名称
     * @param string $ListenContainer 容器内监听地址
     * @param string $ListenHost 容器外监听地址
     * @param string $RunAs 运行账号
     * @param string $HostName 主机名称
     * @param string $PublicIp 外网ip
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("PublicIP",$param) and $param["PublicIP"] !== null) {
            $this->PublicIP = $param["PublicIP"];
        }

        if (array_key_exists("PublicPort",$param) and $param["PublicPort"] !== null) {
            $this->PublicPort = $param["PublicPort"];
        }

        if (array_key_exists("ContainerPort",$param) and $param["ContainerPort"] !== null) {
            $this->ContainerPort = $param["ContainerPort"];
        }

        if (array_key_exists("ContainerPID",$param) and $param["ContainerPID"] !== null) {
            $this->ContainerPID = $param["ContainerPID"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("HostID",$param) and $param["HostID"] !== null) {
            $this->HostID = $param["HostID"];
        }

        if (array_key_exists("HostIP",$param) and $param["HostIP"] !== null) {
            $this->HostIP = $param["HostIP"];
        }

        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("ListenContainer",$param) and $param["ListenContainer"] !== null) {
            $this->ListenContainer = $param["ListenContainer"];
        }

        if (array_key_exists("ListenHost",$param) and $param["ListenHost"] !== null) {
            $this->ListenHost = $param["ListenHost"];
        }

        if (array_key_exists("RunAs",$param) and $param["RunAs"] !== null) {
            $this->RunAs = $param["RunAs"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }
    }
}
