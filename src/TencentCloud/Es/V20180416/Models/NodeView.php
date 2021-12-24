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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 节点维度视图数据
 *
 * @method string getNodeId() 获取节点ID
 * @method void setNodeId(string $NodeId) 设置节点ID
 * @method string getNodeIp() 获取节点IP
 * @method void setNodeIp(string $NodeIp) 设置节点IP
 * @method float getVisible() 获取节点是否可见
 * @method void setVisible(float $Visible) 设置节点是否可见
 * @method float getBreak() 获取是否熔断
 * @method void setBreak(float $Break) 设置是否熔断
 * @method integer getDiskSize() 获取节点总磁盘大小
 * @method void setDiskSize(integer $DiskSize) 设置节点总磁盘大小
 * @method float getDiskUsage() 获取磁盘使用率
 * @method void setDiskUsage(float $DiskUsage) 设置磁盘使用率
 * @method integer getMemSize() 获取节点内存大小，单位GB
 * @method void setMemSize(integer $MemSize) 设置节点内存大小，单位GB
 * @method float getMemUsage() 获取内存使用率
 * @method void setMemUsage(float $MemUsage) 设置内存使用率
 * @method integer getCpuNum() 获取节点cpu个数
 * @method void setCpuNum(integer $CpuNum) 设置节点cpu个数
 * @method float getCpuUsage() 获取cpu使用率
 * @method void setCpuUsage(float $CpuUsage) 设置cpu使用率
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method string getNodeRole() 获取节点角色
 * @method void setNodeRole(string $NodeRole) 设置节点角色
 * @method string getNodeHttpIp() 获取节点HTTP IP
 * @method void setNodeHttpIp(string $NodeHttpIp) 设置节点HTTP IP
 * @method float getJvmMemUsage() 获取JVM内存使用率
 * @method void setJvmMemUsage(float $JvmMemUsage) 设置JVM内存使用率
 * @method integer getShardNum() 获取节点分片数
 * @method void setShardNum(integer $ShardNum) 设置节点分片数
 * @method array getDiskIds() 获取节点上磁盘ID列表
 * @method void setDiskIds(array $DiskIds) 设置节点上磁盘ID列表
 * @method boolean getHidden() 获取是否为隐藏可用区
 * @method void setHidden(boolean $Hidden) 设置是否为隐藏可用区
 */
class NodeView extends AbstractModel
{
    /**
     * @var string 节点ID
     */
    public $NodeId;

    /**
     * @var string 节点IP
     */
    public $NodeIp;

    /**
     * @var float 节点是否可见
     */
    public $Visible;

    /**
     * @var float 是否熔断
     */
    public $Break;

    /**
     * @var integer 节点总磁盘大小
     */
    public $DiskSize;

    /**
     * @var float 磁盘使用率
     */
    public $DiskUsage;

    /**
     * @var integer 节点内存大小，单位GB
     */
    public $MemSize;

    /**
     * @var float 内存使用率
     */
    public $MemUsage;

    /**
     * @var integer 节点cpu个数
     */
    public $CpuNum;

    /**
     * @var float cpu使用率
     */
    public $CpuUsage;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var string 节点角色
     */
    public $NodeRole;

    /**
     * @var string 节点HTTP IP
     */
    public $NodeHttpIp;

    /**
     * @var float JVM内存使用率
     */
    public $JvmMemUsage;

    /**
     * @var integer 节点分片数
     */
    public $ShardNum;

    /**
     * @var array 节点上磁盘ID列表
     */
    public $DiskIds;

    /**
     * @var boolean 是否为隐藏可用区
     */
    public $Hidden;

    /**
     * @param string $NodeId 节点ID
     * @param string $NodeIp 节点IP
     * @param float $Visible 节点是否可见
     * @param float $Break 是否熔断
     * @param integer $DiskSize 节点总磁盘大小
     * @param float $DiskUsage 磁盘使用率
     * @param integer $MemSize 节点内存大小，单位GB
     * @param float $MemUsage 内存使用率
     * @param integer $CpuNum 节点cpu个数
     * @param float $CpuUsage cpu使用率
     * @param string $Zone 可用区
     * @param string $NodeRole 节点角色
     * @param string $NodeHttpIp 节点HTTP IP
     * @param float $JvmMemUsage JVM内存使用率
     * @param integer $ShardNum 节点分片数
     * @param array $DiskIds 节点上磁盘ID列表
     * @param boolean $Hidden 是否为隐藏可用区
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

        if (array_key_exists("NodeIp",$param) and $param["NodeIp"] !== null) {
            $this->NodeIp = $param["NodeIp"];
        }

        if (array_key_exists("Visible",$param) and $param["Visible"] !== null) {
            $this->Visible = $param["Visible"];
        }

        if (array_key_exists("Break",$param) and $param["Break"] !== null) {
            $this->Break = $param["Break"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("DiskUsage",$param) and $param["DiskUsage"] !== null) {
            $this->DiskUsage = $param["DiskUsage"];
        }

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("MemUsage",$param) and $param["MemUsage"] !== null) {
            $this->MemUsage = $param["MemUsage"];
        }

        if (array_key_exists("CpuNum",$param) and $param["CpuNum"] !== null) {
            $this->CpuNum = $param["CpuNum"];
        }

        if (array_key_exists("CpuUsage",$param) and $param["CpuUsage"] !== null) {
            $this->CpuUsage = $param["CpuUsage"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("NodeRole",$param) and $param["NodeRole"] !== null) {
            $this->NodeRole = $param["NodeRole"];
        }

        if (array_key_exists("NodeHttpIp",$param) and $param["NodeHttpIp"] !== null) {
            $this->NodeHttpIp = $param["NodeHttpIp"];
        }

        if (array_key_exists("JvmMemUsage",$param) and $param["JvmMemUsage"] !== null) {
            $this->JvmMemUsage = $param["JvmMemUsage"];
        }

        if (array_key_exists("ShardNum",$param) and $param["ShardNum"] !== null) {
            $this->ShardNum = $param["ShardNum"];
        }

        if (array_key_exists("DiskIds",$param) and $param["DiskIds"] !== null) {
            $this->DiskIds = $param["DiskIds"];
        }

        if (array_key_exists("Hidden",$param) and $param["Hidden"] !== null) {
            $this->Hidden = $param["Hidden"];
        }
    }
}
