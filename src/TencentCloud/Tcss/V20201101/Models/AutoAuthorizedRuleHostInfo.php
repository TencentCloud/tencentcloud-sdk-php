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
 * 自动授权镜像规则授权范围主机列表
 *
 * @method string getHostID() 获取主机id
 * @method void setHostID(string $HostID) 设置主机id
 * @method string getHostIP() 获取主机ip即内网ip
 * @method void setHostIP(string $HostIP) 设置主机ip即内网ip
 * @method string getHostName() 获取主机名称
 * @method void setHostName(string $HostName) 设置主机名称
 * @method integer getImageCnt() 获取镜像个数
 * @method void setImageCnt(integer $ImageCnt) 设置镜像个数
 * @method integer getContainerCnt() 获取容器个数
 * @method void setContainerCnt(integer $ContainerCnt) 设置容器个数
 * @method string getPublicIp() 获取外网ip
 * @method void setPublicIp(string $PublicIp) 设置外网ip
 * @method string getInstanceID() 获取主机实例ID
 * @method void setInstanceID(string $InstanceID) 设置主机实例ID
 * @method string getMachineType() 获取主机来源：["CVM", "ECM", "LH", "BM"]  中的之一为腾讯云服务器；["Other"]之一非腾讯云服务器；
 * @method void setMachineType(string $MachineType) 设置主机来源：["CVM", "ECM", "LH", "BM"]  中的之一为腾讯云服务器；["Other"]之一非腾讯云服务器；
 * @method string getDockerVersion() 获取docker 版本
 * @method void setDockerVersion(string $DockerVersion) 设置docker 版本
 * @method string getStatus() 获取agent运行状态
 * @method void setStatus(string $Status) 设置agent运行状态
 */
class AutoAuthorizedRuleHostInfo extends AbstractModel
{
    /**
     * @var string 主机id
     */
    public $HostID;

    /**
     * @var string 主机ip即内网ip
     */
    public $HostIP;

    /**
     * @var string 主机名称
     */
    public $HostName;

    /**
     * @var integer 镜像个数
     */
    public $ImageCnt;

    /**
     * @var integer 容器个数
     */
    public $ContainerCnt;

    /**
     * @var string 外网ip
     */
    public $PublicIp;

    /**
     * @var string 主机实例ID
     */
    public $InstanceID;

    /**
     * @var string 主机来源：["CVM", "ECM", "LH", "BM"]  中的之一为腾讯云服务器；["Other"]之一非腾讯云服务器；
     */
    public $MachineType;

    /**
     * @var string docker 版本
     */
    public $DockerVersion;

    /**
     * @var string agent运行状态
     */
    public $Status;

    /**
     * @param string $HostID 主机id
     * @param string $HostIP 主机ip即内网ip
     * @param string $HostName 主机名称
     * @param integer $ImageCnt 镜像个数
     * @param integer $ContainerCnt 容器个数
     * @param string $PublicIp 外网ip
     * @param string $InstanceID 主机实例ID
     * @param string $MachineType 主机来源：["CVM", "ECM", "LH", "BM"]  中的之一为腾讯云服务器；["Other"]之一非腾讯云服务器；
     * @param string $DockerVersion docker 版本
     * @param string $Status agent运行状态
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
        if (array_key_exists("HostID",$param) and $param["HostID"] !== null) {
            $this->HostID = $param["HostID"];
        }

        if (array_key_exists("HostIP",$param) and $param["HostIP"] !== null) {
            $this->HostIP = $param["HostIP"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("ImageCnt",$param) and $param["ImageCnt"] !== null) {
            $this->ImageCnt = $param["ImageCnt"];
        }

        if (array_key_exists("ContainerCnt",$param) and $param["ContainerCnt"] !== null) {
            $this->ContainerCnt = $param["ContainerCnt"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("DockerVersion",$param) and $param["DockerVersion"] !== null) {
            $this->DockerVersion = $param["DockerVersion"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
