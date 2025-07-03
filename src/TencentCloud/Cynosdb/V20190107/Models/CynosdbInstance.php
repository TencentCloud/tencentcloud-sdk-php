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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例信息
 *
 * @method string getUin() 获取用户Uin
 * @method void setUin(string $Uin) 设置用户Uin
 * @method integer getAppId() 获取用户AppId
 * @method void setAppId(integer $AppId) 设置用户AppId
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method integer getProjectId() 获取项目ID
 * @method void setProjectId(integer $ProjectId) 设置项目ID
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method string getStatus() 获取实例状态
 * @method void setStatus(string $Status) 设置实例状态
 * @method string getStatusDesc() 获取实例状态中文描述
 * @method void setStatusDesc(string $StatusDesc) 设置实例状态中文描述
 * @method string getDbMode() 获取实例形态，是否为serverless实例
 * @method void setDbMode(string $DbMode) 设置实例形态，是否为serverless实例
 * @method string getDbType() 获取数据库类型
 * @method void setDbType(string $DbType) 设置数据库类型
 * @method string getDbVersion() 获取数据库版本
 * @method void setDbVersion(string $DbVersion) 设置数据库版本
 * @method integer getCpu() 获取Cpu，单位：核
 * @method void setCpu(integer $Cpu) 设置Cpu，单位：核
 * @method integer getMemory() 获取内存，单位：GB
 * @method void setMemory(integer $Memory) 设置内存，单位：GB
 * @method integer getStorage() 获取存储量，单位：GB
 * @method void setStorage(integer $Storage) 设置存储量，单位：GB
 * @method string getInstanceType() 获取实例类型
 * @method void setInstanceType(string $InstanceType) 设置实例类型
 * @method string getInstanceRole() 获取实例当前角色
 * @method void setInstanceRole(string $InstanceRole) 设置实例当前角色
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getVpcId() 获取VPC网络ID
 * @method void setVpcId(string $VpcId) 设置VPC网络ID
 * @method string getSubnetId() 获取子网ID
 * @method void setSubnetId(string $SubnetId) 设置子网ID
 * @method string getVip() 获取实例内网IP
 * @method void setVip(string $Vip) 设置实例内网IP
 * @method integer getVport() 获取实例内网端口
 * @method void setVport(integer $Vport) 设置实例内网端口
 * @method integer getPayMode() 获取付费模式
 * @method void setPayMode(integer $PayMode) 设置付费模式
 * @method string getPeriodEndTime() 获取实例过期时间
 * @method void setPeriodEndTime(string $PeriodEndTime) 设置实例过期时间
 * @method string getDestroyDeadlineText() 获取销毁期限
 * @method void setDestroyDeadlineText(string $DestroyDeadlineText) 设置销毁期限
 * @method string getIsolateTime() 获取隔离时间
 * @method void setIsolateTime(string $IsolateTime) 设置隔离时间
 * @method integer getNetType() 获取网络类型
 * @method void setNetType(integer $NetType) 设置网络类型
 * @method string getWanDomain() 获取外网域名
 * @method void setWanDomain(string $WanDomain) 设置外网域名
 * @method string getWanIP() 获取外网IP
 * @method void setWanIP(string $WanIP) 设置外网IP
 * @method integer getWanPort() 获取外网端口
 * @method void setWanPort(integer $WanPort) 设置外网端口
 * @method string getWanStatus() 获取外网状态
 * @method void setWanStatus(string $WanStatus) 设置外网状态
 * @method string getDestroyTime() 获取实例销毁时间
 * @method void setDestroyTime(string $DestroyTime) 设置实例销毁时间
 * @method string getCynosVersion() 获取Cynos内核版本
 * @method void setCynosVersion(string $CynosVersion) 设置Cynos内核版本
 * @method string getProcessingTask() 获取正在处理的任务
 * @method void setProcessingTask(string $ProcessingTask) 设置正在处理的任务
 * @method integer getRenewFlag() 获取续费标志
 * @method void setRenewFlag(integer $RenewFlag) 设置续费标志
 * @method float getMinCpu() 获取serverless实例cpu下限
 * @method void setMinCpu(float $MinCpu) 设置serverless实例cpu下限
 * @method float getMaxCpu() 获取serverless实例cpu上限
 * @method void setMaxCpu(float $MaxCpu) 设置serverless实例cpu上限
 * @method string getServerlessStatus() 获取serverless实例状态, 可选值：
resume
pause
 * @method void setServerlessStatus(string $ServerlessStatus) 设置serverless实例状态, 可选值：
resume
pause
 * @method string getStorageId() 获取预付费存储Id
 * @method void setStorageId(string $StorageId) 设置预付费存储Id
 * @method integer getStoragePayMode() 获取存储付费类型
 * @method void setStoragePayMode(integer $StoragePayMode) 设置存储付费类型
 * @method string getPhysicalZone() 获取物理区
 * @method void setPhysicalZone(string $PhysicalZone) 设置物理区
 * @method string getBusinessType() 获取商业类型
 * @method void setBusinessType(string $BusinessType) 设置商业类型
 * @method array getTasks() 获取任务
 * @method void setTasks(array $Tasks) 设置任务
 * @method string getIsFreeze() 获取是否冻结
 * @method void setIsFreeze(string $IsFreeze) 设置是否冻结
 * @method array getResourceTags() 获取资源标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceTags(array $ResourceTags) 设置资源标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMasterZone() 获取主可用区
 * @method void setMasterZone(string $MasterZone) 设置主可用区
 * @method array getSlaveZones() 获取备可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSlaveZones(array $SlaveZones) 设置备可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInstanceNetInfo() 获取实例网络信息
 * @method void setInstanceNetInfo(array $InstanceNetInfo) 设置实例网络信息
 * @method array getResourcePackages() 获取实例绑定资源包信息（此处只返回计算资源包，即packageType=CCU）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourcePackages(array $ResourcePackages) 设置实例绑定资源包信息（此处只返回计算资源包，即packageType=CCU）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceIndexMode() 获取实例索引形态,可选值【mixedRowColumn（行列混存），onlyRowIndex（仅行存）】
 * @method void setInstanceIndexMode(string $InstanceIndexMode) 设置实例索引形态,可选值【mixedRowColumn（行列混存），onlyRowIndex（仅行存）】
 * @method InstanceAbility getInstanceAbility() 获取当前实例支持的能力
 * @method void setInstanceAbility(InstanceAbility $InstanceAbility) 设置当前实例支持的能力
 * @method string getDeviceType() 获取实例机器类型
 * @method void setDeviceType(string $DeviceType) 设置实例机器类型
 * @method string getInstanceStorageType() 获取实例存储类型
 * @method void setInstanceStorageType(string $InstanceStorageType) 设置实例存储类型
 * @method string getCynosVersionTag() 获取未知字段
 * @method void setCynosVersionTag(string $CynosVersionTag) 设置未知字段
 * @method array getNodeList() 获取libradb 节点信息
 * @method void setNodeList(array $NodeList) 设置libradb 节点信息
 * @method string getGdnId() 获取全球数据库唯一标识
 * @method void setGdnId(string $GdnId) 设置全球数据库唯一标识
 */
class CynosdbInstance extends AbstractModel
{
    /**
     * @var string 用户Uin
     */
    public $Uin;

    /**
     * @var integer 用户AppId
     */
    public $AppId;

    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var integer 项目ID
     */
    public $ProjectId;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var string 实例状态
     */
    public $Status;

    /**
     * @var string 实例状态中文描述
     */
    public $StatusDesc;

    /**
     * @var string 实例形态，是否为serverless实例
     */
    public $DbMode;

    /**
     * @var string 数据库类型
     */
    public $DbType;

    /**
     * @var string 数据库版本
     */
    public $DbVersion;

    /**
     * @var integer Cpu，单位：核
     */
    public $Cpu;

    /**
     * @var integer 内存，单位：GB
     */
    public $Memory;

    /**
     * @var integer 存储量，单位：GB
     */
    public $Storage;

    /**
     * @var string 实例类型
     */
    public $InstanceType;

    /**
     * @var string 实例当前角色
     */
    public $InstanceRole;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string VPC网络ID
     */
    public $VpcId;

    /**
     * @var string 子网ID
     */
    public $SubnetId;

    /**
     * @var string 实例内网IP
     */
    public $Vip;

    /**
     * @var integer 实例内网端口
     */
    public $Vport;

    /**
     * @var integer 付费模式
     */
    public $PayMode;

    /**
     * @var string 实例过期时间
     */
    public $PeriodEndTime;

    /**
     * @var string 销毁期限
     */
    public $DestroyDeadlineText;

    /**
     * @var string 隔离时间
     */
    public $IsolateTime;

    /**
     * @var integer 网络类型
     */
    public $NetType;

    /**
     * @var string 外网域名
     */
    public $WanDomain;

    /**
     * @var string 外网IP
     */
    public $WanIP;

    /**
     * @var integer 外网端口
     */
    public $WanPort;

    /**
     * @var string 外网状态
     */
    public $WanStatus;

    /**
     * @var string 实例销毁时间
     */
    public $DestroyTime;

    /**
     * @var string Cynos内核版本
     */
    public $CynosVersion;

    /**
     * @var string 正在处理的任务
     */
    public $ProcessingTask;

    /**
     * @var integer 续费标志
     */
    public $RenewFlag;

    /**
     * @var float serverless实例cpu下限
     */
    public $MinCpu;

    /**
     * @var float serverless实例cpu上限
     */
    public $MaxCpu;

    /**
     * @var string serverless实例状态, 可选值：
resume
pause
     */
    public $ServerlessStatus;

    /**
     * @var string 预付费存储Id
     */
    public $StorageId;

    /**
     * @var integer 存储付费类型
     */
    public $StoragePayMode;

    /**
     * @var string 物理区
     */
    public $PhysicalZone;

    /**
     * @var string 商业类型
     */
    public $BusinessType;

    /**
     * @var array 任务
     */
    public $Tasks;

    /**
     * @var string 是否冻结
     */
    public $IsFreeze;

    /**
     * @var array 资源标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceTags;

    /**
     * @var string 主可用区
     */
    public $MasterZone;

    /**
     * @var array 备可用区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SlaveZones;

    /**
     * @var array 实例网络信息
     */
    public $InstanceNetInfo;

    /**
     * @var array 实例绑定资源包信息（此处只返回计算资源包，即packageType=CCU）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourcePackages;

    /**
     * @var string 实例索引形态,可选值【mixedRowColumn（行列混存），onlyRowIndex（仅行存）】
     */
    public $InstanceIndexMode;

    /**
     * @var InstanceAbility 当前实例支持的能力
     */
    public $InstanceAbility;

    /**
     * @var string 实例机器类型
     */
    public $DeviceType;

    /**
     * @var string 实例存储类型
     */
    public $InstanceStorageType;

    /**
     * @var string 未知字段
     */
    public $CynosVersionTag;

    /**
     * @var array libradb 节点信息
     */
    public $NodeList;

    /**
     * @var string 全球数据库唯一标识
     */
    public $GdnId;

    /**
     * @param string $Uin 用户Uin
     * @param integer $AppId 用户AppId
     * @param string $ClusterId 集群ID
     * @param string $ClusterName 集群名称
     * @param string $InstanceId 实例ID
     * @param string $InstanceName 实例名称
     * @param integer $ProjectId 项目ID
     * @param string $Region 地域
     * @param string $Zone 可用区
     * @param string $Status 实例状态
     * @param string $StatusDesc 实例状态中文描述
     * @param string $DbMode 实例形态，是否为serverless实例
     * @param string $DbType 数据库类型
     * @param string $DbVersion 数据库版本
     * @param integer $Cpu Cpu，单位：核
     * @param integer $Memory 内存，单位：GB
     * @param integer $Storage 存储量，单位：GB
     * @param string $InstanceType 实例类型
     * @param string $InstanceRole 实例当前角色
     * @param string $UpdateTime 更新时间
     * @param string $CreateTime 创建时间
     * @param string $VpcId VPC网络ID
     * @param string $SubnetId 子网ID
     * @param string $Vip 实例内网IP
     * @param integer $Vport 实例内网端口
     * @param integer $PayMode 付费模式
     * @param string $PeriodEndTime 实例过期时间
     * @param string $DestroyDeadlineText 销毁期限
     * @param string $IsolateTime 隔离时间
     * @param integer $NetType 网络类型
     * @param string $WanDomain 外网域名
     * @param string $WanIP 外网IP
     * @param integer $WanPort 外网端口
     * @param string $WanStatus 外网状态
     * @param string $DestroyTime 实例销毁时间
     * @param string $CynosVersion Cynos内核版本
     * @param string $ProcessingTask 正在处理的任务
     * @param integer $RenewFlag 续费标志
     * @param float $MinCpu serverless实例cpu下限
     * @param float $MaxCpu serverless实例cpu上限
     * @param string $ServerlessStatus serverless实例状态, 可选值：
resume
pause
     * @param string $StorageId 预付费存储Id
     * @param integer $StoragePayMode 存储付费类型
     * @param string $PhysicalZone 物理区
     * @param string $BusinessType 商业类型
     * @param array $Tasks 任务
     * @param string $IsFreeze 是否冻结
     * @param array $ResourceTags 资源标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MasterZone 主可用区
     * @param array $SlaveZones 备可用区
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $InstanceNetInfo 实例网络信息
     * @param array $ResourcePackages 实例绑定资源包信息（此处只返回计算资源包，即packageType=CCU）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceIndexMode 实例索引形态,可选值【mixedRowColumn（行列混存），onlyRowIndex（仅行存）】
     * @param InstanceAbility $InstanceAbility 当前实例支持的能力
     * @param string $DeviceType 实例机器类型
     * @param string $InstanceStorageType 实例存储类型
     * @param string $CynosVersionTag 未知字段
     * @param array $NodeList libradb 节点信息
     * @param string $GdnId 全球数据库唯一标识
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("DbMode",$param) and $param["DbMode"] !== null) {
            $this->DbMode = $param["DbMode"];
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("DbVersion",$param) and $param["DbVersion"] !== null) {
            $this->DbVersion = $param["DbVersion"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceRole",$param) and $param["InstanceRole"] !== null) {
            $this->InstanceRole = $param["InstanceRole"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("PeriodEndTime",$param) and $param["PeriodEndTime"] !== null) {
            $this->PeriodEndTime = $param["PeriodEndTime"];
        }

        if (array_key_exists("DestroyDeadlineText",$param) and $param["DestroyDeadlineText"] !== null) {
            $this->DestroyDeadlineText = $param["DestroyDeadlineText"];
        }

        if (array_key_exists("IsolateTime",$param) and $param["IsolateTime"] !== null) {
            $this->IsolateTime = $param["IsolateTime"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("WanDomain",$param) and $param["WanDomain"] !== null) {
            $this->WanDomain = $param["WanDomain"];
        }

        if (array_key_exists("WanIP",$param) and $param["WanIP"] !== null) {
            $this->WanIP = $param["WanIP"];
        }

        if (array_key_exists("WanPort",$param) and $param["WanPort"] !== null) {
            $this->WanPort = $param["WanPort"];
        }

        if (array_key_exists("WanStatus",$param) and $param["WanStatus"] !== null) {
            $this->WanStatus = $param["WanStatus"];
        }

        if (array_key_exists("DestroyTime",$param) and $param["DestroyTime"] !== null) {
            $this->DestroyTime = $param["DestroyTime"];
        }

        if (array_key_exists("CynosVersion",$param) and $param["CynosVersion"] !== null) {
            $this->CynosVersion = $param["CynosVersion"];
        }

        if (array_key_exists("ProcessingTask",$param) and $param["ProcessingTask"] !== null) {
            $this->ProcessingTask = $param["ProcessingTask"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("MinCpu",$param) and $param["MinCpu"] !== null) {
            $this->MinCpu = $param["MinCpu"];
        }

        if (array_key_exists("MaxCpu",$param) and $param["MaxCpu"] !== null) {
            $this->MaxCpu = $param["MaxCpu"];
        }

        if (array_key_exists("ServerlessStatus",$param) and $param["ServerlessStatus"] !== null) {
            $this->ServerlessStatus = $param["ServerlessStatus"];
        }

        if (array_key_exists("StorageId",$param) and $param["StorageId"] !== null) {
            $this->StorageId = $param["StorageId"];
        }

        if (array_key_exists("StoragePayMode",$param) and $param["StoragePayMode"] !== null) {
            $this->StoragePayMode = $param["StoragePayMode"];
        }

        if (array_key_exists("PhysicalZone",$param) and $param["PhysicalZone"] !== null) {
            $this->PhysicalZone = $param["PhysicalZone"];
        }

        if (array_key_exists("BusinessType",$param) and $param["BusinessType"] !== null) {
            $this->BusinessType = $param["BusinessType"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new ObjectTask();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("IsFreeze",$param) and $param["IsFreeze"] !== null) {
            $this->IsFreeze = $param["IsFreeze"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("MasterZone",$param) and $param["MasterZone"] !== null) {
            $this->MasterZone = $param["MasterZone"];
        }

        if (array_key_exists("SlaveZones",$param) and $param["SlaveZones"] !== null) {
            $this->SlaveZones = $param["SlaveZones"];
        }

        if (array_key_exists("InstanceNetInfo",$param) and $param["InstanceNetInfo"] !== null) {
            $this->InstanceNetInfo = [];
            foreach ($param["InstanceNetInfo"] as $key => $value){
                $obj = new InstanceNetInfo();
                $obj->deserialize($value);
                array_push($this->InstanceNetInfo, $obj);
            }
        }

        if (array_key_exists("ResourcePackages",$param) and $param["ResourcePackages"] !== null) {
            $this->ResourcePackages = [];
            foreach ($param["ResourcePackages"] as $key => $value){
                $obj = new ResourcePackage();
                $obj->deserialize($value);
                array_push($this->ResourcePackages, $obj);
            }
        }

        if (array_key_exists("InstanceIndexMode",$param) and $param["InstanceIndexMode"] !== null) {
            $this->InstanceIndexMode = $param["InstanceIndexMode"];
        }

        if (array_key_exists("InstanceAbility",$param) and $param["InstanceAbility"] !== null) {
            $this->InstanceAbility = new InstanceAbility();
            $this->InstanceAbility->deserialize($param["InstanceAbility"]);
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("InstanceStorageType",$param) and $param["InstanceStorageType"] !== null) {
            $this->InstanceStorageType = $param["InstanceStorageType"];
        }

        if (array_key_exists("CynosVersionTag",$param) and $param["CynosVersionTag"] !== null) {
            $this->CynosVersionTag = $param["CynosVersionTag"];
        }

        if (array_key_exists("NodeList",$param) and $param["NodeList"] !== null) {
            $this->NodeList = $param["NodeList"];
        }

        if (array_key_exists("GdnId",$param) and $param["GdnId"] !== null) {
            $this->GdnId = $param["GdnId"];
        }
    }
}
