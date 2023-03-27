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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DCDB分片信息
 *
 * @method string getShardSerialId() 获取分片SerialId
 * @method void setShardSerialId(string $ShardSerialId) 设置分片SerialId
 * @method string getShardInstanceId() 获取分片ID，形如shard-7vg1o339
 * @method void setShardInstanceId(string $ShardInstanceId) 设置分片ID，形如shard-7vg1o339
 * @method integer getStatus() 获取分片运行状态
 * @method void setStatus(integer $Status) 设置分片运行状态
 * @method string getStatusDesc() 获取分片运行状态描述
 * @method void setStatusDesc(string $StatusDesc) 设置分片运行状态描述
 * @method string getCreateTime() 获取分片创建时间
 * @method void setCreateTime(string $CreateTime) 设置分片创建时间
 * @method integer getMemory() 获取分片内存大小，单位GB
 * @method void setMemory(integer $Memory) 设置分片内存大小，单位GB
 * @method integer getStorage() 获取分片磁盘大小，单位GB
 * @method void setStorage(integer $Storage) 设置分片磁盘大小，单位GB
 * @method integer getLogDisk() 获取分片日志磁盘空间大小，单位GB
 * @method void setLogDisk(integer $LogDisk) 设置分片日志磁盘空间大小，单位GB
 * @method integer getNodeCount() 获取分片节点个数
 * @method void setNodeCount(integer $NodeCount) 设置分片节点个数
 * @method float getStorageUsage() 获取分片磁盘空间使用率
 * @method void setStorageUsage(float $StorageUsage) 设置分片磁盘空间使用率
 * @method string getProxyVersion() 获取分片Proxy版本信息
 * @method void setProxyVersion(string $ProxyVersion) 设置分片Proxy版本信息
 * @method string getShardMasterZone() 获取分片主DB可用区
 * @method void setShardMasterZone(string $ShardMasterZone) 设置分片主DB可用区
 * @method array getShardSlaveZones() 获取分片从DB可用区
 * @method void setShardSlaveZones(array $ShardSlaveZones) 设置分片从DB可用区
 * @method integer getCpu() 获取分片Cpu核数
 * @method void setCpu(integer $Cpu) 设置分片Cpu核数
 * @method array getNodesInfo() 获取DB节点信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodesInfo(array $NodesInfo) 设置DB节点信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class ShardBriefInfo extends AbstractModel
{
    /**
     * @var string 分片SerialId
     */
    public $ShardSerialId;

    /**
     * @var string 分片ID，形如shard-7vg1o339
     */
    public $ShardInstanceId;

    /**
     * @var integer 分片运行状态
     */
    public $Status;

    /**
     * @var string 分片运行状态描述
     */
    public $StatusDesc;

    /**
     * @var string 分片创建时间
     */
    public $CreateTime;

    /**
     * @var integer 分片内存大小，单位GB
     */
    public $Memory;

    /**
     * @var integer 分片磁盘大小，单位GB
     */
    public $Storage;

    /**
     * @var integer 分片日志磁盘空间大小，单位GB
     */
    public $LogDisk;

    /**
     * @var integer 分片节点个数
     */
    public $NodeCount;

    /**
     * @var float 分片磁盘空间使用率
     */
    public $StorageUsage;

    /**
     * @var string 分片Proxy版本信息
     */
    public $ProxyVersion;

    /**
     * @var string 分片主DB可用区
     */
    public $ShardMasterZone;

    /**
     * @var array 分片从DB可用区
     */
    public $ShardSlaveZones;

    /**
     * @var integer 分片Cpu核数
     */
    public $Cpu;

    /**
     * @var array DB节点信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodesInfo;

    /**
     * @param string $ShardSerialId 分片SerialId
     * @param string $ShardInstanceId 分片ID，形如shard-7vg1o339
     * @param integer $Status 分片运行状态
     * @param string $StatusDesc 分片运行状态描述
     * @param string $CreateTime 分片创建时间
     * @param integer $Memory 分片内存大小，单位GB
     * @param integer $Storage 分片磁盘大小，单位GB
     * @param integer $LogDisk 分片日志磁盘空间大小，单位GB
     * @param integer $NodeCount 分片节点个数
     * @param float $StorageUsage 分片磁盘空间使用率
     * @param string $ProxyVersion 分片Proxy版本信息
     * @param string $ShardMasterZone 分片主DB可用区
     * @param array $ShardSlaveZones 分片从DB可用区
     * @param integer $Cpu 分片Cpu核数
     * @param array $NodesInfo DB节点信息
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
        if (array_key_exists("ShardSerialId",$param) and $param["ShardSerialId"] !== null) {
            $this->ShardSerialId = $param["ShardSerialId"];
        }

        if (array_key_exists("ShardInstanceId",$param) and $param["ShardInstanceId"] !== null) {
            $this->ShardInstanceId = $param["ShardInstanceId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("LogDisk",$param) and $param["LogDisk"] !== null) {
            $this->LogDisk = $param["LogDisk"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("StorageUsage",$param) and $param["StorageUsage"] !== null) {
            $this->StorageUsage = $param["StorageUsage"];
        }

        if (array_key_exists("ProxyVersion",$param) and $param["ProxyVersion"] !== null) {
            $this->ProxyVersion = $param["ProxyVersion"];
        }

        if (array_key_exists("ShardMasterZone",$param) and $param["ShardMasterZone"] !== null) {
            $this->ShardMasterZone = $param["ShardMasterZone"];
        }

        if (array_key_exists("ShardSlaveZones",$param) and $param["ShardSlaveZones"] !== null) {
            $this->ShardSlaveZones = $param["ShardSlaveZones"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("NodesInfo",$param) and $param["NodesInfo"] !== null) {
            $this->NodesInfo = [];
            foreach ($param["NodesInfo"] as $key => $value){
                $obj = new NodeInfo();
                $obj->deserialize($value);
                array_push($this->NodesInfo, $obj);
            }
        }
    }
}
