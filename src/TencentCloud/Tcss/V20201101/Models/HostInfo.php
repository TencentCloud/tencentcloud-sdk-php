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
 * 容器安全主机列表
 *
 * @method string getHostID() 获取主机id
 * @method void setHostID(string $HostID) 设置主机id
 * @method string getHostIP() 获取主机ip
 * @method void setHostIP(string $HostIP) 设置主机ip
 * @method string getHostName() 获取主机名称
 * @method void setHostName(string $HostName) 设置主机名称
 * @method string getGroup() 获取业务组
 * @method void setGroup(string $Group) 设置业务组
 * @method string getDockerVersion() 获取docker 版本
 * @method void setDockerVersion(string $DockerVersion) 设置docker 版本
 * @method string getDockerFileSystemDriver() 获取docker 文件系统类型
 * @method void setDockerFileSystemDriver(string $DockerFileSystemDriver) 设置docker 文件系统类型
 * @method integer getImageCnt() 获取镜像个数
 * @method void setImageCnt(integer $ImageCnt) 设置镜像个数
 * @method integer getContainerCnt() 获取容器个数
 * @method void setContainerCnt(integer $ContainerCnt) 设置容器个数
 * @method string getStatus() 获取主机运行状态
 * @method void setStatus(string $Status) 设置主机运行状态
 */
class HostInfo extends AbstractModel
{
    /**
     * @var string 主机id
     */
    public $HostID;

    /**
     * @var string 主机ip
     */
    public $HostIP;

    /**
     * @var string 主机名称
     */
    public $HostName;

    /**
     * @var string 业务组
     */
    public $Group;

    /**
     * @var string docker 版本
     */
    public $DockerVersion;

    /**
     * @var string docker 文件系统类型
     */
    public $DockerFileSystemDriver;

    /**
     * @var integer 镜像个数
     */
    public $ImageCnt;

    /**
     * @var integer 容器个数
     */
    public $ContainerCnt;

    /**
     * @var string 主机运行状态
     */
    public $Status;

    /**
     * @param string $HostID 主机id
     * @param string $HostIP 主机ip
     * @param string $HostName 主机名称
     * @param string $Group 业务组
     * @param string $DockerVersion docker 版本
     * @param string $DockerFileSystemDriver docker 文件系统类型
     * @param integer $ImageCnt 镜像个数
     * @param integer $ContainerCnt 容器个数
     * @param string $Status 主机运行状态
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

        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }

        if (array_key_exists("DockerVersion",$param) and $param["DockerVersion"] !== null) {
            $this->DockerVersion = $param["DockerVersion"];
        }

        if (array_key_exists("DockerFileSystemDriver",$param) and $param["DockerFileSystemDriver"] !== null) {
            $this->DockerFileSystemDriver = $param["DockerFileSystemDriver"];
        }

        if (array_key_exists("ImageCnt",$param) and $param["ImageCnt"] !== null) {
            $this->ImageCnt = $param["ImageCnt"];
        }

        if (array_key_exists("ContainerCnt",$param) and $param["ContainerCnt"] !== null) {
            $this->ContainerCnt = $param["ContainerCnt"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
