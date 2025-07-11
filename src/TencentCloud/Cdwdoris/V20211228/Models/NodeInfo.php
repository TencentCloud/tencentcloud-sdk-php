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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * NodeInfo
 *
 * @method string getIp() 获取用户IP
 * @method void setIp(string $Ip) 设置用户IP
 * @method integer getStatus() 获取节点状态
 * @method void setStatus(integer $Status) 设置节点状态
 * @method string getNodeName() 获取节点角色名
 * @method void setNodeName(string $NodeName) 设置节点角色名
 * @method string getComponentName() 获取组件名
 * @method void setComponentName(string $ComponentName) 设置组件名
 * @method string getNodeRole() 获取节点角色
 * @method void setNodeRole(string $NodeRole) 设置节点角色
 * @method string getLastRestartTime() 获取节点上次重启的时间
 * @method void setLastRestartTime(string $LastRestartTime) 设置节点上次重启的时间
 * @method string getZone() 获取节点所在可用区
 * @method void setZone(string $Zone) 设置节点所在可用区
 * @method string getId() 获取Id
 * @method void setId(string $Id) 设置Id
 * @method string getRIp() 获取RIP
 * @method void setRIp(string $RIp) 设置RIP
 * @method string getComputeGroupId() 获取计算组ID
 * @method void setComputeGroupId(string $ComputeGroupId) 设置计算组ID
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getVirtualZone() 获取虚拟可用区
 * @method void setVirtualZone(string $VirtualZone) 设置虚拟可用区
 */
class NodeInfo extends AbstractModel
{
    /**
     * @var string 用户IP
     */
    public $Ip;

    /**
     * @var integer 节点状态
     */
    public $Status;

    /**
     * @var string 节点角色名
     */
    public $NodeName;

    /**
     * @var string 组件名
     */
    public $ComponentName;

    /**
     * @var string 节点角色
     */
    public $NodeRole;

    /**
     * @var string 节点上次重启的时间
     */
    public $LastRestartTime;

    /**
     * @var string 节点所在可用区
     */
    public $Zone;

    /**
     * @var string Id
     */
    public $Id;

    /**
     * @var string RIP
     */
    public $RIp;

    /**
     * @var string 计算组ID
     */
    public $ComputeGroupId;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 虚拟可用区
     */
    public $VirtualZone;

    /**
     * @param string $Ip 用户IP
     * @param integer $Status 节点状态
     * @param string $NodeName 节点角色名
     * @param string $ComponentName 组件名
     * @param string $NodeRole 节点角色
     * @param string $LastRestartTime 节点上次重启的时间
     * @param string $Zone 节点所在可用区
     * @param string $Id Id
     * @param string $RIp RIP
     * @param string $ComputeGroupId 计算组ID
     * @param string $CreateTime 创建时间
     * @param string $VirtualZone 虚拟可用区
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("ComponentName",$param) and $param["ComponentName"] !== null) {
            $this->ComponentName = $param["ComponentName"];
        }

        if (array_key_exists("NodeRole",$param) and $param["NodeRole"] !== null) {
            $this->NodeRole = $param["NodeRole"];
        }

        if (array_key_exists("LastRestartTime",$param) and $param["LastRestartTime"] !== null) {
            $this->LastRestartTime = $param["LastRestartTime"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("RIp",$param) and $param["RIp"] !== null) {
            $this->RIp = $param["RIp"];
        }

        if (array_key_exists("ComputeGroupId",$param) and $param["ComputeGroupId"] !== null) {
            $this->ComputeGroupId = $param["ComputeGroupId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("VirtualZone",$param) and $param["VirtualZone"] !== null) {
            $this->VirtualZone = $param["VirtualZone"];
        }
    }
}
