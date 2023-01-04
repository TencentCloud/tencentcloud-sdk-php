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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资产指纹中服务器列表的基本信息
 *
 * @method string getQuuid() 获取服务器Quuid
 * @method void setQuuid(string $Quuid) 设置服务器Quuid
 * @method string getUuid() 获取服务器uuid
 * @method void setUuid(string $Uuid) 设置服务器uuid
 * @method string getMachineIp() 获取服务器内网IP
 * @method void setMachineIp(string $MachineIp) 设置服务器内网IP
 * @method string getMachineName() 获取服务器名称
 * @method void setMachineName(string $MachineName) 设置服务器名称
 * @method string getOsInfo() 获取操作系统名称
 * @method void setOsInfo(string $OsInfo) 设置操作系统名称
 * @method string getCpu() 获取CPU信息
 * @method void setCpu(string $Cpu) 设置CPU信息
 * @method integer getMemSize() 获取内存容量：单位G
 * @method void setMemSize(integer $MemSize) 设置内存容量：单位G
 * @method string getMemLoad() 获取内存使用率百分比
 * @method void setMemLoad(string $MemLoad) 设置内存使用率百分比
 * @method integer getDiskSize() 获取硬盘容量：单位G
 * @method void setDiskSize(integer $DiskSize) 设置硬盘容量：单位G
 * @method string getDiskLoad() 获取硬盘使用率百分比
 * @method void setDiskLoad(string $DiskLoad) 设置硬盘使用率百分比
 * @method integer getPartitionCount() 获取分区数
 * @method void setPartitionCount(integer $PartitionCount) 设置分区数
 * @method string getMachineWanIp() 获取主机外网IP
 * @method void setMachineWanIp(string $MachineWanIp) 设置主机外网IP
 * @method integer getProjectId() 获取业务组ID
 * @method void setProjectId(integer $ProjectId) 设置业务组ID
 * @method integer getCpuSize() 获取Cpu数量
 * @method void setCpuSize(integer $CpuSize) 设置Cpu数量
 * @method string getCpuLoad() 获取Cpu使用率百分比
 * @method void setCpuLoad(string $CpuLoad) 设置Cpu使用率百分比
 * @method array getTag() 获取标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTag(array $Tag) 设置标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取数据更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置数据更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsNew() 获取是否新增[0:否|1:是]
 * @method void setIsNew(integer $IsNew) 设置是否新增[0:否|1:是]
 * @method string getFirstTime() 获取首次采集时间
 * @method void setFirstTime(string $FirstTime) 设置首次采集时间
 * @method MachineExtraInfo getMachineExtraInfo() 获取附加信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) 设置附加信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class AssetMachineBaseInfo extends AbstractModel
{
    /**
     * @var string 服务器Quuid
     */
    public $Quuid;

    /**
     * @var string 服务器uuid
     */
    public $Uuid;

    /**
     * @var string 服务器内网IP
     */
    public $MachineIp;

    /**
     * @var string 服务器名称
     */
    public $MachineName;

    /**
     * @var string 操作系统名称
     */
    public $OsInfo;

    /**
     * @var string CPU信息
     */
    public $Cpu;

    /**
     * @var integer 内存容量：单位G
     */
    public $MemSize;

    /**
     * @var string 内存使用率百分比
     */
    public $MemLoad;

    /**
     * @var integer 硬盘容量：单位G
     */
    public $DiskSize;

    /**
     * @var string 硬盘使用率百分比
     */
    public $DiskLoad;

    /**
     * @var integer 分区数
     */
    public $PartitionCount;

    /**
     * @var string 主机外网IP
     */
    public $MachineWanIp;

    /**
     * @var integer 业务组ID
     */
    public $ProjectId;

    /**
     * @var integer Cpu数量
     */
    public $CpuSize;

    /**
     * @var string Cpu使用率百分比
     */
    public $CpuLoad;

    /**
     * @var array 标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tag;

    /**
     * @var string 数据更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var integer 是否新增[0:否|1:是]
     */
    public $IsNew;

    /**
     * @var string 首次采集时间
     */
    public $FirstTime;

    /**
     * @var MachineExtraInfo 附加信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MachineExtraInfo;

    /**
     * @param string $Quuid 服务器Quuid
     * @param string $Uuid 服务器uuid
     * @param string $MachineIp 服务器内网IP
     * @param string $MachineName 服务器名称
     * @param string $OsInfo 操作系统名称
     * @param string $Cpu CPU信息
     * @param integer $MemSize 内存容量：单位G
     * @param string $MemLoad 内存使用率百分比
     * @param integer $DiskSize 硬盘容量：单位G
     * @param string $DiskLoad 硬盘使用率百分比
     * @param integer $PartitionCount 分区数
     * @param string $MachineWanIp 主机外网IP
     * @param integer $ProjectId 业务组ID
     * @param integer $CpuSize Cpu数量
     * @param string $CpuLoad Cpu使用率百分比
     * @param array $Tag 标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 数据更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsNew 是否新增[0:否|1:是]
     * @param string $FirstTime 首次采集时间
     * @param MachineExtraInfo $MachineExtraInfo 附加信息
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
        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("OsInfo",$param) and $param["OsInfo"] !== null) {
            $this->OsInfo = $param["OsInfo"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("MemLoad",$param) and $param["MemLoad"] !== null) {
            $this->MemLoad = $param["MemLoad"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("DiskLoad",$param) and $param["DiskLoad"] !== null) {
            $this->DiskLoad = $param["DiskLoad"];
        }

        if (array_key_exists("PartitionCount",$param) and $param["PartitionCount"] !== null) {
            $this->PartitionCount = $param["PartitionCount"];
        }

        if (array_key_exists("MachineWanIp",$param) and $param["MachineWanIp"] !== null) {
            $this->MachineWanIp = $param["MachineWanIp"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("CpuSize",$param) and $param["CpuSize"] !== null) {
            $this->CpuSize = $param["CpuSize"];
        }

        if (array_key_exists("CpuLoad",$param) and $param["CpuLoad"] !== null) {
            $this->CpuLoad = $param["CpuLoad"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = [];
            foreach ($param["Tag"] as $key => $value){
                $obj = new MachineTag();
                $obj->deserialize($value);
                array_push($this->Tag, $obj);
            }
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("IsNew",$param) and $param["IsNew"] !== null) {
            $this->IsNew = $param["IsNew"];
        }

        if (array_key_exists("FirstTime",$param) and $param["FirstTime"] !== null) {
            $this->FirstTime = $param["FirstTime"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }
    }
}
