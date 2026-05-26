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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 节点信息
 *
 * @method integer getID() 获取主键
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setID(integer $ID) 设置主键
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取实例id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置实例id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeId() 获取Node Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeId(string $NodeId) 设置Node Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIp() 获取实例Ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIp(string $Ip) 设置实例Ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEniIp() 获取实例EniIp
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEniIp(string $EniIp) 设置实例EniIp
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPort() 获取实例Port
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(integer $Port) 设置实例Port
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSpecCode() 获取实例SpecCode
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpecCode(string $SpecCode) 设置实例SpecCode
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeName() 获取实例NodeName
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeName(string $NodeName) 设置实例NodeName
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCpu() 获取实例Cpu
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpu(integer $Cpu) 设置实例Cpu
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMem() 获取实例Mem
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMem(integer $Mem) 设置实例Mem
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDisk() 获取实例Disk
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisk(integer $Disk) 设置实例Disk
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取实例类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置实例类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取实例状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置实例状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersion() 获取实例版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(string $Version) 设置实例版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZone() 获取实例地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZone(string $Zone) 设置实例地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLocalDNS() 获取实例LocalDNS
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocalDNS(string $LocalDNS) 设置实例LocalDNS
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取实例Region
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置实例Region
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLogDisk() 获取实例日志盘
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogDisk(integer $LogDisk) 设置实例日志盘
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDataDisk() 获取实例数据盘
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataDisk(integer $DataDisk) 设置实例数据盘
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZoneID() 获取实例ZoneID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneID(string $ZoneID) 设置实例ZoneID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSpecName() 获取实例SpecName
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpecName(string $SpecName) 设置实例SpecName
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReplicas() 获取实例Replicas
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplicas(integer $Replicas) 设置实例Replicas
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getShards() 获取实例Shards
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShards(integer $Shards) 设置实例Shards
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDataReplicas() 获取实例数据副本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataReplicas(integer $DataReplicas) 设置实例数据副本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParams() 获取实例初始化参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParams(string $Params) 设置实例初始化参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStorageType() 获取存储介质, CLOUD_PREMIUM:高性能云盘，CLOUD_SSD: SSD 云盘，CLOUD_HSSD: HSSD 云盘
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageType(string $StorageType) 设置存储介质, CLOUD_PREMIUM:高性能云盘，CLOUD_SSD: SSD 云盘，CLOUD_HSSD: HSSD 云盘
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceNode extends AbstractModel
{
    /**
     * @var integer 主键
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ID;

    /**
     * @var string 实例id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string Node Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeId;

    /**
     * @var string 实例Ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ip;

    /**
     * @var string 实例EniIp
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EniIp;

    /**
     * @var integer 实例Port
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var string 实例SpecCode
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpecCode;

    /**
     * @var string 实例NodeName
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeName;

    /**
     * @var integer 实例Cpu
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cpu;

    /**
     * @var integer 实例Mem
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mem;

    /**
     * @var integer 实例Disk
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Disk;

    /**
     * @var string 实例类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 实例状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 实例版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @var string 实例地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Zone;

    /**
     * @var string 实例LocalDNS
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LocalDNS;

    /**
     * @var string 实例Region
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var integer 实例日志盘
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogDisk;

    /**
     * @var integer 实例数据盘
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataDisk;

    /**
     * @var string 实例ZoneID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneID;

    /**
     * @var string 实例SpecName
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpecName;

    /**
     * @var integer 实例Replicas
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Replicas;

    /**
     * @var integer 实例Shards
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Shards;

    /**
     * @var integer 实例数据副本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataReplicas;

    /**
     * @var string 实例初始化参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Params;

    /**
     * @var string 存储介质, CLOUD_PREMIUM:高性能云盘，CLOUD_SSD: SSD 云盘，CLOUD_HSSD: HSSD 云盘
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageType;

    /**
     * @param integer $ID 主键
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 实例id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeId Node Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Ip 实例Ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EniIp 实例EniIp
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Port 实例Port
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SpecCode 实例SpecCode
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeName 实例NodeName
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Cpu 实例Cpu
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Mem 实例Mem
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Disk 实例Disk
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 实例类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 实例状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Version 实例版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Zone 实例地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LocalDNS 实例LocalDNS
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 实例Region
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LogDisk 实例日志盘
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DataDisk 实例数据盘
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ZoneID 实例ZoneID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SpecName 实例SpecName
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Replicas 实例Replicas
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Shards 实例Shards
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DataReplicas 实例数据副本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Params 实例初始化参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StorageType 存储介质, CLOUD_PREMIUM:高性能云盘，CLOUD_SSD: SSD 云盘，CLOUD_HSSD: HSSD 云盘
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("EniIp",$param) and $param["EniIp"] !== null) {
            $this->EniIp = $param["EniIp"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("SpecCode",$param) and $param["SpecCode"] !== null) {
            $this->SpecCode = $param["SpecCode"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }

        if (array_key_exists("Disk",$param) and $param["Disk"] !== null) {
            $this->Disk = $param["Disk"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("LocalDNS",$param) and $param["LocalDNS"] !== null) {
            $this->LocalDNS = $param["LocalDNS"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("LogDisk",$param) and $param["LogDisk"] !== null) {
            $this->LogDisk = $param["LogDisk"];
        }

        if (array_key_exists("DataDisk",$param) and $param["DataDisk"] !== null) {
            $this->DataDisk = $param["DataDisk"];
        }

        if (array_key_exists("ZoneID",$param) and $param["ZoneID"] !== null) {
            $this->ZoneID = $param["ZoneID"];
        }

        if (array_key_exists("SpecName",$param) and $param["SpecName"] !== null) {
            $this->SpecName = $param["SpecName"];
        }

        if (array_key_exists("Replicas",$param) and $param["Replicas"] !== null) {
            $this->Replicas = $param["Replicas"];
        }

        if (array_key_exists("Shards",$param) and $param["Shards"] !== null) {
            $this->Shards = $param["Shards"];
        }

        if (array_key_exists("DataReplicas",$param) and $param["DataReplicas"] !== null) {
            $this->DataReplicas = $param["DataReplicas"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = $param["Params"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }
    }
}
