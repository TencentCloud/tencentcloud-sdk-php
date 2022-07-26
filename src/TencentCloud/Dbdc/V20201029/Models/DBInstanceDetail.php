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
namespace TencentCloud\Dbdc\V20201029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DB实例详情
 *
 * @method string getInstanceId() 获取DB实例Id
 * @method void setInstanceId(string $InstanceId) 设置DB实例Id
 * @method string getInstanceName() 获取DB实例名称
 * @method void setInstanceName(string $InstanceName) 设置DB实例名称
 * @method integer getStatus() 获取DB实例状态,-1:已隔离, 0:创建中, 1:流程中, 2:运行中, 3:未初始化
 * @method void setStatus(integer $Status) 设置DB实例状态,-1:已隔离, 0:创建中, 1:流程中, 2:运行中, 3:未初始化
 * @method string getStatusDesc() 获取DB实例状态描述,-1:已隔离, 0:创建中, 1:流程中, 2:运行中, 3:未初始化
 * @method void setStatusDesc(string $StatusDesc) 设置DB实例状态描述,-1:已隔离, 0:创建中, 1:流程中, 2:运行中, 3:未初始化
 * @method string getDbVersion() 获取DB实例版本
 * @method void setDbVersion(string $DbVersion) 设置DB实例版本
 * @method string getVip() 获取Vip信息
 * @method void setVip(string $Vip) 设置Vip信息
 * @method integer getVport() 获取Vip使用的端口号
 * @method void setVport(integer $Vport) 设置Vip使用的端口号
 * @method string getUniqueVpcId() 获取字符串型的私有网络ID
 * @method void setUniqueVpcId(string $UniqueVpcId) 设置字符串型的私有网络ID
 * @method string getUniqueSubnetId() 获取字符串型的私有网络子网ID
 * @method void setUniqueSubnetId(string $UniqueSubnetId) 设置字符串型的私有网络子网ID
 * @method integer getShard() 获取是否为分布式版本,0:否,1:是
 * @method void setShard(integer $Shard) 设置是否为分布式版本,0:否,1:是
 * @method integer getNodeNum() 获取DB实例节点数
 * @method void setNodeNum(integer $NodeNum) 设置DB实例节点数
 * @method integer getCpu() 获取CPU规格(单位:核数)
 * @method void setCpu(integer $Cpu) 设置CPU规格(单位:核数)
 * @method integer getMemory() 获取内存规格(单位:GB)
 * @method void setMemory(integer $Memory) 设置内存规格(单位:GB)
 * @method integer getDisk() 获取磁盘规格(单位:GB)
 * @method void setDisk(integer $Disk) 设置磁盘规格(单位:GB)
 * @method integer getShardNum() 获取分布式类型的实例的分片数
 * @method void setShardNum(integer $ShardNum) 设置分布式类型的实例的分片数
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method string getDbHosts() 获取Db所在主机列表, 格式: m1,s1|m2,s2
 * @method void setDbHosts(string $DbHosts) 设置Db所在主机列表, 格式: m1,s1|m2,s2
 * @method integer getHostRole() 获取主机角色, 1:主, 2:从, 3:主+从
 * @method void setHostRole(integer $HostRole) 设置主机角色, 1:主, 2:从, 3:主+从
 * @method string getDbEngine() 获取DB引擎，MySQL,Percona,MariaDB
 * @method void setDbEngine(string $DbEngine) 设置DB引擎，MySQL,Percona,MariaDB
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 */
class DBInstanceDetail extends AbstractModel
{
    /**
     * @var string DB实例Id
     */
    public $InstanceId;

    /**
     * @var string DB实例名称
     */
    public $InstanceName;

    /**
     * @var integer DB实例状态,-1:已隔离, 0:创建中, 1:流程中, 2:运行中, 3:未初始化
     */
    public $Status;

    /**
     * @var string DB实例状态描述,-1:已隔离, 0:创建中, 1:流程中, 2:运行中, 3:未初始化
     */
    public $StatusDesc;

    /**
     * @var string DB实例版本
     */
    public $DbVersion;

    /**
     * @var string Vip信息
     */
    public $Vip;

    /**
     * @var integer Vip使用的端口号
     */
    public $Vport;

    /**
     * @var string 字符串型的私有网络ID
     */
    public $UniqueVpcId;

    /**
     * @var string 字符串型的私有网络子网ID
     */
    public $UniqueSubnetId;

    /**
     * @var integer 是否为分布式版本,0:否,1:是
     */
    public $Shard;

    /**
     * @var integer DB实例节点数
     */
    public $NodeNum;

    /**
     * @var integer CPU规格(单位:核数)
     */
    public $Cpu;

    /**
     * @var integer 内存规格(单位:GB)
     */
    public $Memory;

    /**
     * @var integer 磁盘规格(单位:GB)
     */
    public $Disk;

    /**
     * @var integer 分布式类型的实例的分片数
     */
    public $ShardNum;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var string Db所在主机列表, 格式: m1,s1|m2,s2
     */
    public $DbHosts;

    /**
     * @var integer 主机角色, 1:主, 2:从, 3:主+从
     */
    public $HostRole;

    /**
     * @var string DB引擎，MySQL,Percona,MariaDB
     */
    public $DbEngine;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @param string $InstanceId DB实例Id
     * @param string $InstanceName DB实例名称
     * @param integer $Status DB实例状态,-1:已隔离, 0:创建中, 1:流程中, 2:运行中, 3:未初始化
     * @param string $StatusDesc DB实例状态描述,-1:已隔离, 0:创建中, 1:流程中, 2:运行中, 3:未初始化
     * @param string $DbVersion DB实例版本
     * @param string $Vip Vip信息
     * @param integer $Vport Vip使用的端口号
     * @param string $UniqueVpcId 字符串型的私有网络ID
     * @param string $UniqueSubnetId 字符串型的私有网络子网ID
     * @param integer $Shard 是否为分布式版本,0:否,1:是
     * @param integer $NodeNum DB实例节点数
     * @param integer $Cpu CPU规格(单位:核数)
     * @param integer $Memory 内存规格(单位:GB)
     * @param integer $Disk 磁盘规格(单位:GB)
     * @param integer $ShardNum 分布式类型的实例的分片数
     * @param string $Region 地域
     * @param string $Zone 可用区
     * @param string $DbHosts Db所在主机列表, 格式: m1,s1|m2,s2
     * @param integer $HostRole 主机角色, 1:主, 2:从, 3:主+从
     * @param string $DbEngine DB引擎，MySQL,Percona,MariaDB
     * @param string $CreateTime 创建时间
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("DbVersion",$param) and $param["DbVersion"] !== null) {
            $this->DbVersion = $param["DbVersion"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("UniqueVpcId",$param) and $param["UniqueVpcId"] !== null) {
            $this->UniqueVpcId = $param["UniqueVpcId"];
        }

        if (array_key_exists("UniqueSubnetId",$param) and $param["UniqueSubnetId"] !== null) {
            $this->UniqueSubnetId = $param["UniqueSubnetId"];
        }

        if (array_key_exists("Shard",$param) and $param["Shard"] !== null) {
            $this->Shard = $param["Shard"];
        }

        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Disk",$param) and $param["Disk"] !== null) {
            $this->Disk = $param["Disk"];
        }

        if (array_key_exists("ShardNum",$param) and $param["ShardNum"] !== null) {
            $this->ShardNum = $param["ShardNum"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("DbHosts",$param) and $param["DbHosts"] !== null) {
            $this->DbHosts = $param["DbHosts"];
        }

        if (array_key_exists("HostRole",$param) and $param["HostRole"] !== null) {
            $this->HostRole = $param["HostRole"];
        }

        if (array_key_exists("DbEngine",$param) and $param["DbEngine"] !== null) {
            $this->DbEngine = $param["DbEngine"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
