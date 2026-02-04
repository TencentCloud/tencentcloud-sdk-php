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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance node
 *
 * @method integer getNodeId() 获取id
 * @method void setNodeId(integer $NodeId) 设置id
 * @method string getNodeType() 获取cn
 * @method void setNodeType(string $NodeType) 设置cn
 * @method string getNodeIp() 获取ip
 * @method void setNodeIp(string $NodeIp) 设置ip
 * @method string getPrivateNetworkIp() 获取私有ip
 * @method void setPrivateNetworkIp(string $PrivateNetworkIp) 设置私有ip
 * @method string getNodeRole() 获取节点角色
 * @method void setNodeRole(string $NodeRole) 设置节点角色
 * @method string getNodeName() 获取节点名称
 * @method void setNodeName(string $NodeName) 设置节点名称
 * @method string getSpecName() 获取规格名称
 * @method void setSpecName(string $SpecName) 设置规格名称
 * @method integer getCpu() 获取cpu
 * @method void setCpu(integer $Cpu) 设置cpu
 * @method integer getMemory() 获取内存
 * @method void setMemory(integer $Memory) 设置内存
 * @method integer getDataDiskCount() 获取数据盘数量
 * @method void setDataDiskCount(integer $DataDiskCount) 设置数据盘数量
 * @method integer getDataDiskSize() 获取数据盘大小
 * @method void setDataDiskSize(integer $DataDiskSize) 设置数据盘大小
 * @method string getDataDiskType() 获取数据盘类型
 * @method void setDataDiskType(string $DataDiskType) 设置数据盘类型
 * @method string getUUID() 获取唯一uuid
 * @method void setUUID(string $UUID) 设置唯一uuid
 * @method string getZone() 获取区域
 * @method void setZone(string $Zone) 设置区域
 */
class InstanceNode extends AbstractModel
{
    /**
     * @var integer id
     */
    public $NodeId;

    /**
     * @var string cn
     */
    public $NodeType;

    /**
     * @var string ip
     */
    public $NodeIp;

    /**
     * @var string 私有ip
     */
    public $PrivateNetworkIp;

    /**
     * @var string 节点角色
     */
    public $NodeRole;

    /**
     * @var string 节点名称
     */
    public $NodeName;

    /**
     * @var string 规格名称
     */
    public $SpecName;

    /**
     * @var integer cpu
     */
    public $Cpu;

    /**
     * @var integer 内存
     */
    public $Memory;

    /**
     * @var integer 数据盘数量
     */
    public $DataDiskCount;

    /**
     * @var integer 数据盘大小
     */
    public $DataDiskSize;

    /**
     * @var string 数据盘类型
     */
    public $DataDiskType;

    /**
     * @var string 唯一uuid
     */
    public $UUID;

    /**
     * @var string 区域
     */
    public $Zone;

    /**
     * @param integer $NodeId id
     * @param string $NodeType cn
     * @param string $NodeIp ip
     * @param string $PrivateNetworkIp 私有ip
     * @param string $NodeRole 节点角色
     * @param string $NodeName 节点名称
     * @param string $SpecName 规格名称
     * @param integer $Cpu cpu
     * @param integer $Memory 内存
     * @param integer $DataDiskCount 数据盘数量
     * @param integer $DataDiskSize 数据盘大小
     * @param string $DataDiskType 数据盘类型
     * @param string $UUID 唯一uuid
     * @param string $Zone 区域
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
        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("NodeIp",$param) and $param["NodeIp"] !== null) {
            $this->NodeIp = $param["NodeIp"];
        }

        if (array_key_exists("PrivateNetworkIp",$param) and $param["PrivateNetworkIp"] !== null) {
            $this->PrivateNetworkIp = $param["PrivateNetworkIp"];
        }

        if (array_key_exists("NodeRole",$param) and $param["NodeRole"] !== null) {
            $this->NodeRole = $param["NodeRole"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("SpecName",$param) and $param["SpecName"] !== null) {
            $this->SpecName = $param["SpecName"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("DataDiskCount",$param) and $param["DataDiskCount"] !== null) {
            $this->DataDiskCount = $param["DataDiskCount"];
        }

        if (array_key_exists("DataDiskSize",$param) and $param["DataDiskSize"] !== null) {
            $this->DataDiskSize = $param["DataDiskSize"];
        }

        if (array_key_exists("DataDiskType",$param) and $param["DataDiskType"] !== null) {
            $this->DataDiskType = $param["DataDiskType"];
        }

        if (array_key_exists("UUID",$param) and $param["UUID"] !== null) {
            $this->UUID = $param["UUID"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }
    }
}
