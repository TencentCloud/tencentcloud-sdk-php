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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例信息
 *
 * @method string getUin() 获取<p>用户Uin</p>
 * @method void setUin(string $Uin) 设置<p>用户Uin</p>
 * @method integer getAppId() 获取<p>用户AppId</p>
 * @method void setAppId(integer $AppId) 设置<p>用户AppId</p>
 * @method string getClusterId() 获取<p>集群ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID</p>
 * @method string getClusterName() 获取<p>集群名称</p>
 * @method void setClusterName(string $ClusterName) 设置<p>集群名称</p>
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getInstanceName() 获取<p>实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
 * @method integer getProjectId() 获取<p>项目ID</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>项目ID</p>
 * @method string getRegion() 获取<p>地域</p>
 * @method void setRegion(string $Region) 设置<p>地域</p>
 * @method string getZone() 获取<p>可用区</p>
 * @method void setZone(string $Zone) 设置<p>可用区</p>
 * @method string getStatus() 获取<p>实例状态</p>
 * @method void setStatus(string $Status) 设置<p>实例状态</p>
 * @method string getStatusDesc() 获取<p>实例状态中文描述</p>
 * @method void setStatusDesc(string $StatusDesc) 设置<p>实例状态中文描述</p>
 * @method string getDbMode() 获取<p>实例形态，是否为serverless实例</p>
 * @method void setDbMode(string $DbMode) 设置<p>实例形态，是否为serverless实例</p>
 * @method string getDbType() 获取<p>数据库类型</p>
 * @method void setDbType(string $DbType) 设置<p>数据库类型</p>
 * @method string getDbVersion() 获取<p>数据库版本</p>
 * @method void setDbVersion(string $DbVersion) 设置<p>数据库版本</p>
 * @method integer getCpu() 获取<p>Cpu，单位：核</p>
 * @method void setCpu(integer $Cpu) 设置<p>Cpu，单位：核</p>
 * @method integer getMemory() 获取<p>内存，单位：GB</p>
 * @method void setMemory(integer $Memory) 设置<p>内存，单位：GB</p>
 * @method integer getStorage() 获取<p>存储量，单位：GB</p>
 * @method void setStorage(integer $Storage) 设置<p>存储量，单位：GB</p>
 * @method string getInstanceType() 获取<p>实例类型</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>实例类型</p>
 * @method string getInstanceRole() 获取<p>实例当前角色</p>
 * @method void setInstanceRole(string $InstanceRole) 设置<p>实例当前角色</p>
 * @method string getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getVpcId() 获取<p>VPC网络ID</p>
 * @method void setVpcId(string $VpcId) 设置<p>VPC网络ID</p>
 * @method string getSubnetId() 获取<p>子网ID</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>子网ID</p>
 * @method string getVip() 获取<p>实例内网IP</p>
 * @method void setVip(string $Vip) 设置<p>实例内网IP</p>
 * @method integer getVport() 获取<p>实例内网端口</p>
 * @method void setVport(integer $Vport) 设置<p>实例内网端口</p>
 * @method integer getPayMode() 获取<p>付费模式</p>
 * @method void setPayMode(integer $PayMode) 设置<p>付费模式</p>
 * @method string getPeriodEndTime() 获取<p>实例过期时间</p>
 * @method void setPeriodEndTime(string $PeriodEndTime) 设置<p>实例过期时间</p>
 * @method string getDestroyDeadlineText() 获取<p>销毁期限</p>
 * @method void setDestroyDeadlineText(string $DestroyDeadlineText) 设置<p>销毁期限</p>
 * @method string getIsolateTime() 获取<p>隔离时间</p>
 * @method void setIsolateTime(string $IsolateTime) 设置<p>隔离时间</p>
 * @method integer getNetType() 获取<p>网络类型</p>
 * @method void setNetType(integer $NetType) 设置<p>网络类型</p>
 * @method string getWanDomain() 获取<p>外网域名</p>
 * @method void setWanDomain(string $WanDomain) 设置<p>外网域名</p>
 * @method string getWanIP() 获取<p>外网IP</p>
 * @method void setWanIP(string $WanIP) 设置<p>外网IP</p>
 * @method integer getWanPort() 获取<p>外网端口</p>
 * @method void setWanPort(integer $WanPort) 设置<p>外网端口</p>
 * @method string getWanStatus() 获取<p>外网状态</p>
 * @method void setWanStatus(string $WanStatus) 设置<p>外网状态</p>
 * @method string getDestroyTime() 获取<p>实例销毁时间</p>
 * @method void setDestroyTime(string $DestroyTime) 设置<p>实例销毁时间</p>
 * @method string getCynosVersion() 获取<p>Cynos内核版本</p>
 * @method void setCynosVersion(string $CynosVersion) 设置<p>Cynos内核版本</p>
 * @method string getProcessingTask() 获取<p>正在处理的任务</p>
 * @method void setProcessingTask(string $ProcessingTask) 设置<p>正在处理的任务</p>
 * @method integer getRenewFlag() 获取<p>续费标志</p>
 * @method void setRenewFlag(integer $RenewFlag) 设置<p>续费标志</p>
 * @method float getMinCpu() 获取<p>serverless实例cpu下限</p>
 * @method void setMinCpu(float $MinCpu) 设置<p>serverless实例cpu下限</p>
 * @method float getMaxCpu() 获取<p>serverless实例cpu上限</p>
 * @method void setMaxCpu(float $MaxCpu) 设置<p>serverless实例cpu上限</p>
 * @method string getServerlessStatus() 获取<p>serverless实例状态, 可选值：<br>resume<br>pause</p>
 * @method void setServerlessStatus(string $ServerlessStatus) 设置<p>serverless实例状态, 可选值：<br>resume<br>pause</p>
 * @method string getStorageId() 获取<p>预付费存储Id</p>
 * @method void setStorageId(string $StorageId) 设置<p>预付费存储Id</p>
 * @method integer getStoragePayMode() 获取<p>存储付费类型</p>
 * @method void setStoragePayMode(integer $StoragePayMode) 设置<p>存储付费类型</p>
 * @method string getPhysicalZone() 获取<p>物理区</p>
 * @method void setPhysicalZone(string $PhysicalZone) 设置<p>物理区</p>
 * @method string getBusinessType() 获取<p>商业类型</p>
 * @method void setBusinessType(string $BusinessType) 设置<p>商业类型</p>
 * @method array getTasks() 获取<p>任务</p>
 * @method void setTasks(array $Tasks) 设置<p>任务</p>
 * @method string getIsFreeze() 获取<p>是否冻结</p>
 * @method void setIsFreeze(string $IsFreeze) 设置<p>是否冻结</p>
 * @method array getResourceTags() 获取<p>资源标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceTags(array $ResourceTags) 设置<p>资源标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMasterZone() 获取<p>主可用区</p>
 * @method void setMasterZone(string $MasterZone) 设置<p>主可用区</p>
 * @method array getSlaveZones() 获取<p>备可用区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSlaveZones(array $SlaveZones) 设置<p>备可用区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInstanceNetInfo() 获取<p>实例网络信息</p>
 * @method void setInstanceNetInfo(array $InstanceNetInfo) 设置<p>实例网络信息</p>
 * @method array getResourcePackages() 获取<p>实例绑定资源包信息（此处只返回计算资源包，即packageType=CCU）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourcePackages(array $ResourcePackages) 设置<p>实例绑定资源包信息（此处只返回计算资源包，即packageType=CCU）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceIndexMode() 获取<p>实例索引形态,可选值【mixedRowColumn（行列混存），onlyRowIndex（仅行存）】</p>
 * @method void setInstanceIndexMode(string $InstanceIndexMode) 设置<p>实例索引形态,可选值【mixedRowColumn（行列混存），onlyRowIndex（仅行存）】</p>
 * @method InstanceAbility getInstanceAbility() 获取<p>当前实例支持的能力</p>
 * @method void setInstanceAbility(InstanceAbility $InstanceAbility) 设置<p>当前实例支持的能力</p>
 * @method string getDeviceType() 获取<p>实例机器类型</p><ol><li>common，通用型。</li><li>exclusive，独享型。</li></ol>
 * @method void setDeviceType(string $DeviceType) 设置<p>实例机器类型</p><ol><li>common，通用型。</li><li>exclusive，独享型。</li></ol>
 * @method string getInstanceStorageType() 获取<p>实例存储类型</p>
 * @method void setInstanceStorageType(string $InstanceStorageType) 设置<p>实例存储类型</p>
 * @method string getCynosVersionTag() 获取<p>未知字段</p>
 * @method void setCynosVersionTag(string $CynosVersionTag) 设置<p>未知字段</p>
 * @method array getNodeList() 获取<p>libradb 节点信息</p>
 * @method void setNodeList(array $NodeList) 设置<p>libradb 节点信息</p>
 * @method string getGdnId() 获取<p>全球数据库唯一标识</p>
 * @method void setGdnId(string $GdnId) 设置<p>全球数据库唯一标识</p>
 */
class CynosdbInstance extends AbstractModel
{
    /**
     * @var string <p>用户Uin</p>
     */
    public $Uin;

    /**
     * @var integer <p>用户AppId</p>
     */
    public $AppId;

    /**
     * @var string <p>集群ID</p>
     */
    public $ClusterId;

    /**
     * @var string <p>集群名称</p>
     */
    public $ClusterName;

    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例名称</p>
     */
    public $InstanceName;

    /**
     * @var integer <p>项目ID</p>
     */
    public $ProjectId;

    /**
     * @var string <p>地域</p>
     */
    public $Region;

    /**
     * @var string <p>可用区</p>
     */
    public $Zone;

    /**
     * @var string <p>实例状态</p>
     */
    public $Status;

    /**
     * @var string <p>实例状态中文描述</p>
     */
    public $StatusDesc;

    /**
     * @var string <p>实例形态，是否为serverless实例</p>
     */
    public $DbMode;

    /**
     * @var string <p>数据库类型</p>
     */
    public $DbType;

    /**
     * @var string <p>数据库版本</p>
     */
    public $DbVersion;

    /**
     * @var integer <p>Cpu，单位：核</p>
     */
    public $Cpu;

    /**
     * @var integer <p>内存，单位：GB</p>
     */
    public $Memory;

    /**
     * @var integer <p>存储量，单位：GB</p>
     */
    public $Storage;

    /**
     * @var string <p>实例类型</p>
     */
    public $InstanceType;

    /**
     * @var string <p>实例当前角色</p>
     */
    public $InstanceRole;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>VPC网络ID</p>
     */
    public $VpcId;

    /**
     * @var string <p>子网ID</p>
     */
    public $SubnetId;

    /**
     * @var string <p>实例内网IP</p>
     */
    public $Vip;

    /**
     * @var integer <p>实例内网端口</p>
     */
    public $Vport;

    /**
     * @var integer <p>付费模式</p>
     */
    public $PayMode;

    /**
     * @var string <p>实例过期时间</p>
     */
    public $PeriodEndTime;

    /**
     * @var string <p>销毁期限</p>
     */
    public $DestroyDeadlineText;

    /**
     * @var string <p>隔离时间</p>
     */
    public $IsolateTime;

    /**
     * @var integer <p>网络类型</p>
     */
    public $NetType;

    /**
     * @var string <p>外网域名</p>
     */
    public $WanDomain;

    /**
     * @var string <p>外网IP</p>
     */
    public $WanIP;

    /**
     * @var integer <p>外网端口</p>
     */
    public $WanPort;

    /**
     * @var string <p>外网状态</p>
     */
    public $WanStatus;

    /**
     * @var string <p>实例销毁时间</p>
     */
    public $DestroyTime;

    /**
     * @var string <p>Cynos内核版本</p>
     */
    public $CynosVersion;

    /**
     * @var string <p>正在处理的任务</p>
     */
    public $ProcessingTask;

    /**
     * @var integer <p>续费标志</p>
     */
    public $RenewFlag;

    /**
     * @var float <p>serverless实例cpu下限</p>
     */
    public $MinCpu;

    /**
     * @var float <p>serverless实例cpu上限</p>
     */
    public $MaxCpu;

    /**
     * @var string <p>serverless实例状态, 可选值：<br>resume<br>pause</p>
     */
    public $ServerlessStatus;

    /**
     * @var string <p>预付费存储Id</p>
     */
    public $StorageId;

    /**
     * @var integer <p>存储付费类型</p>
     */
    public $StoragePayMode;

    /**
     * @var string <p>物理区</p>
     */
    public $PhysicalZone;

    /**
     * @var string <p>商业类型</p>
     */
    public $BusinessType;

    /**
     * @var array <p>任务</p>
     */
    public $Tasks;

    /**
     * @var string <p>是否冻结</p>
     */
    public $IsFreeze;

    /**
     * @var array <p>资源标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceTags;

    /**
     * @var string <p>主可用区</p>
     */
    public $MasterZone;

    /**
     * @var array <p>备可用区</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SlaveZones;

    /**
     * @var array <p>实例网络信息</p>
     */
    public $InstanceNetInfo;

    /**
     * @var array <p>实例绑定资源包信息（此处只返回计算资源包，即packageType=CCU）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourcePackages;

    /**
     * @var string <p>实例索引形态,可选值【mixedRowColumn（行列混存），onlyRowIndex（仅行存）】</p>
     */
    public $InstanceIndexMode;

    /**
     * @var InstanceAbility <p>当前实例支持的能力</p>
     */
    public $InstanceAbility;

    /**
     * @var string <p>实例机器类型</p><ol><li>common，通用型。</li><li>exclusive，独享型。</li></ol>
     */
    public $DeviceType;

    /**
     * @var string <p>实例存储类型</p>
     */
    public $InstanceStorageType;

    /**
     * @var string <p>未知字段</p>
     */
    public $CynosVersionTag;

    /**
     * @var array <p>libradb 节点信息</p>
     */
    public $NodeList;

    /**
     * @var string <p>全球数据库唯一标识</p>
     */
    public $GdnId;

    /**
     * @param string $Uin <p>用户Uin</p>
     * @param integer $AppId <p>用户AppId</p>
     * @param string $ClusterId <p>集群ID</p>
     * @param string $ClusterName <p>集群名称</p>
     * @param string $InstanceId <p>实例ID</p>
     * @param string $InstanceName <p>实例名称</p>
     * @param integer $ProjectId <p>项目ID</p>
     * @param string $Region <p>地域</p>
     * @param string $Zone <p>可用区</p>
     * @param string $Status <p>实例状态</p>
     * @param string $StatusDesc <p>实例状态中文描述</p>
     * @param string $DbMode <p>实例形态，是否为serverless实例</p>
     * @param string $DbType <p>数据库类型</p>
     * @param string $DbVersion <p>数据库版本</p>
     * @param integer $Cpu <p>Cpu，单位：核</p>
     * @param integer $Memory <p>内存，单位：GB</p>
     * @param integer $Storage <p>存储量，单位：GB</p>
     * @param string $InstanceType <p>实例类型</p>
     * @param string $InstanceRole <p>实例当前角色</p>
     * @param string $UpdateTime <p>更新时间</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $VpcId <p>VPC网络ID</p>
     * @param string $SubnetId <p>子网ID</p>
     * @param string $Vip <p>实例内网IP</p>
     * @param integer $Vport <p>实例内网端口</p>
     * @param integer $PayMode <p>付费模式</p>
     * @param string $PeriodEndTime <p>实例过期时间</p>
     * @param string $DestroyDeadlineText <p>销毁期限</p>
     * @param string $IsolateTime <p>隔离时间</p>
     * @param integer $NetType <p>网络类型</p>
     * @param string $WanDomain <p>外网域名</p>
     * @param string $WanIP <p>外网IP</p>
     * @param integer $WanPort <p>外网端口</p>
     * @param string $WanStatus <p>外网状态</p>
     * @param string $DestroyTime <p>实例销毁时间</p>
     * @param string $CynosVersion <p>Cynos内核版本</p>
     * @param string $ProcessingTask <p>正在处理的任务</p>
     * @param integer $RenewFlag <p>续费标志</p>
     * @param float $MinCpu <p>serverless实例cpu下限</p>
     * @param float $MaxCpu <p>serverless实例cpu上限</p>
     * @param string $ServerlessStatus <p>serverless实例状态, 可选值：<br>resume<br>pause</p>
     * @param string $StorageId <p>预付费存储Id</p>
     * @param integer $StoragePayMode <p>存储付费类型</p>
     * @param string $PhysicalZone <p>物理区</p>
     * @param string $BusinessType <p>商业类型</p>
     * @param array $Tasks <p>任务</p>
     * @param string $IsFreeze <p>是否冻结</p>
     * @param array $ResourceTags <p>资源标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MasterZone <p>主可用区</p>
     * @param array $SlaveZones <p>备可用区</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $InstanceNetInfo <p>实例网络信息</p>
     * @param array $ResourcePackages <p>实例绑定资源包信息（此处只返回计算资源包，即packageType=CCU）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceIndexMode <p>实例索引形态,可选值【mixedRowColumn（行列混存），onlyRowIndex（仅行存）】</p>
     * @param InstanceAbility $InstanceAbility <p>当前实例支持的能力</p>
     * @param string $DeviceType <p>实例机器类型</p><ol><li>common，通用型。</li><li>exclusive，独享型。</li></ol>
     * @param string $InstanceStorageType <p>实例存储类型</p>
     * @param string $CynosVersionTag <p>未知字段</p>
     * @param array $NodeList <p>libradb 节点信息</p>
     * @param string $GdnId <p>全球数据库唯一标识</p>
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
