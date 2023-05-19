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
 * 受漏洞影响的容器信息
 *
 * @method string getHostIP() 获取内网IP
 * @method void setHostIP(string $HostIP) 设置内网IP
 * @method string getContainerID() 获取容器ID
 * @method void setContainerID(string $ContainerID) 设置容器ID
 * @method string getContainerName() 获取容器名称
 * @method void setContainerName(string $ContainerName) 设置容器名称
 * @method string getPodName() 获取Pod名称
 * @method void setPodName(string $PodName) 设置Pod名称
 * @method string getPodIP() 获取PodIP值
 * @method void setPodIP(string $PodIP) 设置PodIP值
 * @method string getHostName() 获取主机名称
 * @method void setHostName(string $HostName) 设置主机名称
 * @method string getHostID() 获取主机ID
 * @method void setHostID(string $HostID) 设置主机ID
 * @method string getPublicIP() 获取外网IP
 * @method void setPublicIP(string $PublicIP) 设置外网IP
 * @method string getClusterID() 获取集群ID
 * @method void setClusterID(string $ClusterID) 设置集群ID
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getNodeType() 获取节点类型[NORMAL:普通节点|SUPER:超级节点]
 * @method void setNodeType(string $NodeType) 设置节点类型[NORMAL:普通节点|SUPER:超级节点]
 * @method string getNodeUniqueID() 获取超级节点唯一ID
 * @method void setNodeUniqueID(string $NodeUniqueID) 设置超级节点唯一ID
 * @method string getNodeID() 获取超级节点ID
 * @method void setNodeID(string $NodeID) 设置超级节点ID
 * @method string getNodeName() 获取超级节点名称
 * @method void setNodeName(string $NodeName) 设置超级节点名称
 */
class VulAffectedContainerInfo extends AbstractModel
{
    /**
     * @var string 内网IP
     */
    public $HostIP;

    /**
     * @var string 容器ID
     */
    public $ContainerID;

    /**
     * @var string 容器名称
     */
    public $ContainerName;

    /**
     * @var string Pod名称
     */
    public $PodName;

    /**
     * @var string PodIP值
     */
    public $PodIP;

    /**
     * @var string 主机名称
     */
    public $HostName;

    /**
     * @var string 主机ID
     */
    public $HostID;

    /**
     * @var string 外网IP
     */
    public $PublicIP;

    /**
     * @var string 集群ID
     */
    public $ClusterID;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string 节点类型[NORMAL:普通节点|SUPER:超级节点]
     */
    public $NodeType;

    /**
     * @var string 超级节点唯一ID
     */
    public $NodeUniqueID;

    /**
     * @var string 超级节点ID
     */
    public $NodeID;

    /**
     * @var string 超级节点名称
     */
    public $NodeName;

    /**
     * @param string $HostIP 内网IP
     * @param string $ContainerID 容器ID
     * @param string $ContainerName 容器名称
     * @param string $PodName Pod名称
     * @param string $PodIP PodIP值
     * @param string $HostName 主机名称
     * @param string $HostID 主机ID
     * @param string $PublicIP 外网IP
     * @param string $ClusterID 集群ID
     * @param string $ClusterName 集群名称
     * @param string $NodeType 节点类型[NORMAL:普通节点|SUPER:超级节点]
     * @param string $NodeUniqueID 超级节点唯一ID
     * @param string $NodeID 超级节点ID
     * @param string $NodeName 超级节点名称
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
        if (array_key_exists("HostIP",$param) and $param["HostIP"] !== null) {
            $this->HostIP = $param["HostIP"];
        }

        if (array_key_exists("ContainerID",$param) and $param["ContainerID"] !== null) {
            $this->ContainerID = $param["ContainerID"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("PodIP",$param) and $param["PodIP"] !== null) {
            $this->PodIP = $param["PodIP"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostID",$param) and $param["HostID"] !== null) {
            $this->HostID = $param["HostID"];
        }

        if (array_key_exists("PublicIP",$param) and $param["PublicIP"] !== null) {
            $this->PublicIP = $param["PublicIP"];
        }

        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("NodeUniqueID",$param) and $param["NodeUniqueID"] !== null) {
            $this->NodeUniqueID = $param["NodeUniqueID"];
        }

        if (array_key_exists("NodeID",$param) and $param["NodeID"] !== null) {
            $this->NodeID = $param["NodeID"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }
    }
}
