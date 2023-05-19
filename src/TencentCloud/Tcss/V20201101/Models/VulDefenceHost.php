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
 * 漏洞防御的主机信息
 *
 * @method string getHostName() 获取主机名称/超级节点名称
 * @method void setHostName(string $HostName) 设置主机名称/超级节点名称
 * @method string getHostIP() 获取主机ip即内网ip
 * @method void setHostIP(string $HostIP) 设置主机ip即内网ip
 * @method string getHostID() 获取主机QUUID/超级节点ID
 * @method void setHostID(string $HostID) 设置主机QUUID/超级节点ID
 * @method string getStatus() 获取插件状态，正常：SUCCESS，异常：FAIL， NO_DEFENDED:未防御
 * @method void setStatus(string $Status) 设置插件状态，正常：SUCCESS，异常：FAIL， NO_DEFENDED:未防御
 * @method string getPublicIP() 获取外网ip
 * @method void setPublicIP(string $PublicIP) 设置外网ip
 * @method string getCreateTime() 获取首次开启时间
 * @method void setCreateTime(string $CreateTime) 设置首次开启时间
 * @method string getModifyTime() 获取更新时间
 * @method void setModifyTime(string $ModifyTime) 设置更新时间
 * @method string getNodeType() 获取节点类型[NORMAL:普通节点|SUPER:超级节点]
 * @method void setNodeType(string $NodeType) 设置节点类型[NORMAL:普通节点|SUPER:超级节点]
 * @method string getNodeSubNetName() 获取超级节点子网名称
 * @method void setNodeSubNetName(string $NodeSubNetName) 设置超级节点子网名称
 * @method string getNodeSubNetCIDR() 获取超级节点子网网段
 * @method void setNodeSubNetCIDR(string $NodeSubNetCIDR) 设置超级节点子网网段
 * @method string getNodeSubNetID() 获取超级节点子网ID
 * @method void setNodeSubNetID(string $NodeSubNetID) 设置超级节点子网ID
 * @method string getNodeUniqueID() 获取超级节点唯一ID
 * @method void setNodeUniqueID(string $NodeUniqueID) 设置超级节点唯一ID
 * @method string getNodeID() 获取超级节点ID
 * @method void setNodeID(string $NodeID) 设置超级节点ID
 * @method string getPodIP() 获取Pod Ip
 * @method void setPodIP(string $PodIP) 设置Pod Ip
 * @method string getPodName() 获取Pod 名称
 * @method void setPodName(string $PodName) 设置Pod 名称
 */
class VulDefenceHost extends AbstractModel
{
    /**
     * @var string 主机名称/超级节点名称
     */
    public $HostName;

    /**
     * @var string 主机ip即内网ip
     */
    public $HostIP;

    /**
     * @var string 主机QUUID/超级节点ID
     */
    public $HostID;

    /**
     * @var string 插件状态，正常：SUCCESS，异常：FAIL， NO_DEFENDED:未防御
     */
    public $Status;

    /**
     * @var string 外网ip
     */
    public $PublicIP;

    /**
     * @var string 首次开启时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $ModifyTime;

    /**
     * @var string 节点类型[NORMAL:普通节点|SUPER:超级节点]
     */
    public $NodeType;

    /**
     * @var string 超级节点子网名称
     */
    public $NodeSubNetName;

    /**
     * @var string 超级节点子网网段
     */
    public $NodeSubNetCIDR;

    /**
     * @var string 超级节点子网ID
     */
    public $NodeSubNetID;

    /**
     * @var string 超级节点唯一ID
     */
    public $NodeUniqueID;

    /**
     * @var string 超级节点ID
     */
    public $NodeID;

    /**
     * @var string Pod Ip
     */
    public $PodIP;

    /**
     * @var string Pod 名称
     */
    public $PodName;

    /**
     * @param string $HostName 主机名称/超级节点名称
     * @param string $HostIP 主机ip即内网ip
     * @param string $HostID 主机QUUID/超级节点ID
     * @param string $Status 插件状态，正常：SUCCESS，异常：FAIL， NO_DEFENDED:未防御
     * @param string $PublicIP 外网ip
     * @param string $CreateTime 首次开启时间
     * @param string $ModifyTime 更新时间
     * @param string $NodeType 节点类型[NORMAL:普通节点|SUPER:超级节点]
     * @param string $NodeSubNetName 超级节点子网名称
     * @param string $NodeSubNetCIDR 超级节点子网网段
     * @param string $NodeSubNetID 超级节点子网ID
     * @param string $NodeUniqueID 超级节点唯一ID
     * @param string $NodeID 超级节点ID
     * @param string $PodIP Pod Ip
     * @param string $PodName Pod 名称
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
        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostIP",$param) and $param["HostIP"] !== null) {
            $this->HostIP = $param["HostIP"];
        }

        if (array_key_exists("HostID",$param) and $param["HostID"] !== null) {
            $this->HostID = $param["HostID"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PublicIP",$param) and $param["PublicIP"] !== null) {
            $this->PublicIP = $param["PublicIP"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("NodeSubNetName",$param) and $param["NodeSubNetName"] !== null) {
            $this->NodeSubNetName = $param["NodeSubNetName"];
        }

        if (array_key_exists("NodeSubNetCIDR",$param) and $param["NodeSubNetCIDR"] !== null) {
            $this->NodeSubNetCIDR = $param["NodeSubNetCIDR"];
        }

        if (array_key_exists("NodeSubNetID",$param) and $param["NodeSubNetID"] !== null) {
            $this->NodeSubNetID = $param["NodeSubNetID"];
        }

        if (array_key_exists("NodeUniqueID",$param) and $param["NodeUniqueID"] !== null) {
            $this->NodeUniqueID = $param["NodeUniqueID"];
        }

        if (array_key_exists("NodeID",$param) and $param["NodeID"] !== null) {
            $this->NodeID = $param["NodeID"];
        }

        if (array_key_exists("PodIP",$param) and $param["PodIP"] !== null) {
            $this->PodIP = $param["PodIP"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }
    }
}
