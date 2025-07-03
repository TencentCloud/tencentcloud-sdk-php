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
 * 安全日志接入对象详情
 *
 * @method string getHostID() 获取主机ID
 * @method void setHostID(string $HostID) 设置主机ID
 * @method string getHostName() 获取主机名称
 * @method void setHostName(string $HostName) 设置主机名称
 * @method string getHostIP() 获取主机IP
 * @method void setHostIP(string $HostIP) 设置主机IP
 * @method string getHostStatus() 获取主机状态
 * @method void setHostStatus(string $HostStatus) 设置主机状态
 * @method string getClusterID() 获取集群ID
 * @method void setClusterID(string $ClusterID) 设置集群ID
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getPublicIP() 获取外网IP
 * @method void setPublicIP(string $PublicIP) 设置外网IP
 * @method boolean getJoinState() 获取接入状态(true:已接入  false:未接入)
 * @method void setJoinState(boolean $JoinState) 设置接入状态(true:已接入  false:未接入)
 * @method string getClusterVersion() 获取集群版本
 * @method void setClusterVersion(string $ClusterVersion) 设置集群版本
 * @method string getClusterMainAddress() 获取集群主节点地址
 * @method void setClusterMainAddress(string $ClusterMainAddress) 设置集群主节点地址
 * @method integer getContainerCnt() 获取容器数
 * @method void setContainerCnt(integer $ContainerCnt) 设置容器数
 * @method string getClusterType() 获取集群类型
 * @method void setClusterType(string $ClusterType) 设置集群类型
 * @method string getClusterStatus() 获取集群状态
 * @method void setClusterStatus(string $ClusterStatus) 设置集群状态
 */
class SecLogJoinObjectInfo extends AbstractModel
{
    /**
     * @var string 主机ID
     */
    public $HostID;

    /**
     * @var string 主机名称
     */
    public $HostName;

    /**
     * @var string 主机IP
     */
    public $HostIP;

    /**
     * @var string 主机状态
     */
    public $HostStatus;

    /**
     * @var string 集群ID
     */
    public $ClusterID;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string 外网IP
     */
    public $PublicIP;

    /**
     * @var boolean 接入状态(true:已接入  false:未接入)
     */
    public $JoinState;

    /**
     * @var string 集群版本
     */
    public $ClusterVersion;

    /**
     * @var string 集群主节点地址
     */
    public $ClusterMainAddress;

    /**
     * @var integer 容器数
     */
    public $ContainerCnt;

    /**
     * @var string 集群类型
     */
    public $ClusterType;

    /**
     * @var string 集群状态
     */
    public $ClusterStatus;

    /**
     * @param string $HostID 主机ID
     * @param string $HostName 主机名称
     * @param string $HostIP 主机IP
     * @param string $HostStatus 主机状态
     * @param string $ClusterID 集群ID
     * @param string $ClusterName 集群名称
     * @param string $PublicIP 外网IP
     * @param boolean $JoinState 接入状态(true:已接入  false:未接入)
     * @param string $ClusterVersion 集群版本
     * @param string $ClusterMainAddress 集群主节点地址
     * @param integer $ContainerCnt 容器数
     * @param string $ClusterType 集群类型
     * @param string $ClusterStatus 集群状态
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

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostIP",$param) and $param["HostIP"] !== null) {
            $this->HostIP = $param["HostIP"];
        }

        if (array_key_exists("HostStatus",$param) and $param["HostStatus"] !== null) {
            $this->HostStatus = $param["HostStatus"];
        }

        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("PublicIP",$param) and $param["PublicIP"] !== null) {
            $this->PublicIP = $param["PublicIP"];
        }

        if (array_key_exists("JoinState",$param) and $param["JoinState"] !== null) {
            $this->JoinState = $param["JoinState"];
        }

        if (array_key_exists("ClusterVersion",$param) and $param["ClusterVersion"] !== null) {
            $this->ClusterVersion = $param["ClusterVersion"];
        }

        if (array_key_exists("ClusterMainAddress",$param) and $param["ClusterMainAddress"] !== null) {
            $this->ClusterMainAddress = $param["ClusterMainAddress"];
        }

        if (array_key_exists("ContainerCnt",$param) and $param["ContainerCnt"] !== null) {
            $this->ContainerCnt = $param["ContainerCnt"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("ClusterStatus",$param) and $param["ClusterStatus"] !== null) {
            $this->ClusterStatus = $param["ClusterStatus"];
        }
    }
}
