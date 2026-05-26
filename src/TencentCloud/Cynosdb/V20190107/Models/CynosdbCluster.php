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
 * 集群信息
 *
 * @method string getStatus() 获取<p>集群状态， 可选值如下:<br>creating: 创建中<br>running:运行中<br>isolating:隔离中<br>isolated:已隔离<br>activating:解隔离中<br>offlining:下线中<br>offlined:已下线<br>deleting:删除中<br>deleted:已删除</p>
 * @method void setStatus(string $Status) 设置<p>集群状态， 可选值如下:<br>creating: 创建中<br>running:运行中<br>isolating:隔离中<br>isolated:已隔离<br>activating:解隔离中<br>offlining:下线中<br>offlined:已下线<br>deleting:删除中<br>deleted:已删除</p>
 * @method string getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
 * @method string getZone() 获取<p>可用区</p>
 * @method void setZone(string $Zone) 设置<p>可用区</p>
 * @method string getClusterName() 获取<p>集群名称</p>
 * @method void setClusterName(string $ClusterName) 设置<p>集群名称</p>
 * @method string getRegion() 获取<p>地域</p>
 * @method void setRegion(string $Region) 设置<p>地域</p>
 * @method string getDbVersion() 获取<p>数据库版本</p>
 * @method void setDbVersion(string $DbVersion) 设置<p>数据库版本</p>
 * @method string getClusterId() 获取<p>集群ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID</p>
 * @method integer getInstanceNum() 获取<p>实例数</p>
 * @method void setInstanceNum(integer $InstanceNum) 设置<p>实例数</p>
 * @method string getUin() 获取<p>用户uin</p>
 * @method void setUin(string $Uin) 设置<p>用户uin</p>
 * @method string getDbType() 获取<p>引擎类型</p>
 * @method void setDbType(string $DbType) 设置<p>引擎类型</p>
 * @method integer getAppId() 获取<p>用户appid</p>
 * @method void setAppId(integer $AppId) 设置<p>用户appid</p>
 * @method string getStatusDesc() 获取<p>集群状态描述</p>
 * @method void setStatusDesc(string $StatusDesc) 设置<p>集群状态描述</p>
 * @method string getCreateTime() 获取<p>集群创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>集群创建时间</p>
 * @method integer getPayMode() 获取<p>付费模式。0-按量计费，1-包年包月</p>
 * @method void setPayMode(integer $PayMode) 设置<p>付费模式。0-按量计费，1-包年包月</p>
 * @method string getPeriodEndTime() 获取<p>截止时间</p>
 * @method void setPeriodEndTime(string $PeriodEndTime) 设置<p>截止时间</p>
 * @method string getVip() 获取<p>集群读写vip</p>
 * @method void setVip(string $Vip) 设置<p>集群读写vip</p>
 * @method integer getVport() 获取<p>集群读写vport</p>
 * @method void setVport(integer $Vport) 设置<p>集群读写vport</p>
 * @method integer getProjectID() 获取<p>项目id</p>
 * @method void setProjectID(integer $ProjectID) 设置<p>项目id</p>
 * @method string getVpcId() 获取<p>私有网络ID</p>
 * @method void setVpcId(string $VpcId) 设置<p>私有网络ID</p>
 * @method string getSubnetId() 获取<p>子网ID</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>子网ID</p>
 * @method string getCynosVersion() 获取<p>cynos内核版本</p>
 * @method void setCynosVersion(string $CynosVersion) 设置<p>cynos内核版本</p>
 * @method string getCynosVersionTag() 获取<p>cynos版本标签</p>
 * @method void setCynosVersionTag(string $CynosVersionTag) 设置<p>cynos版本标签</p>
 * @method integer getStorageLimit() 获取<p>存储容量</p>
 * @method void setStorageLimit(integer $StorageLimit) 设置<p>存储容量</p>
 * @method integer getRenewFlag() 获取<p>续费标志</p>
 * @method void setRenewFlag(integer $RenewFlag) 设置<p>续费标志</p>
 * @method string getProcessingTask() 获取<p>正在处理的任务</p>
 * @method void setProcessingTask(string $ProcessingTask) 设置<p>正在处理的任务</p>
 * @method array getTasks() 获取<p>集群的任务数组</p>
 * @method void setTasks(array $Tasks) 设置<p>集群的任务数组</p>
 * @method array getResourceTags() 获取<p>集群绑定的tag数组</p>
 * @method void setResourceTags(array $ResourceTags) 设置<p>集群绑定的tag数组</p>
 * @method string getDbMode() 获取<p>Db类型(NORMAL, SERVERLESS)</p>
 * @method void setDbMode(string $DbMode) 设置<p>Db类型(NORMAL, SERVERLESS)</p>
 * @method string getServerlessStatus() 获取<p>当Db类型为SERVERLESS时，serverless集群状态，可选值:<br>resume<br>pause</p>
 * @method void setServerlessStatus(string $ServerlessStatus) 设置<p>当Db类型为SERVERLESS时，serverless集群状态，可选值:<br>resume<br>pause</p>
 * @method integer getStorage() 获取<p>集群预付费存储值大小</p>
 * @method void setStorage(integer $Storage) 设置<p>集群预付费存储值大小</p>
 * @method string getStorageId() 获取<p>集群存储为预付费时的存储ID，用于预付费存储变配</p>
 * @method void setStorageId(string $StorageId) 设置<p>集群存储为预付费时的存储ID，用于预付费存储变配</p>
 * @method integer getStoragePayMode() 获取<p>集群存储付费模式。0-按量计费，1-包年包月</p>
 * @method void setStoragePayMode(integer $StoragePayMode) 设置<p>集群存储付费模式。0-按量计费，1-包年包月</p>
 * @method integer getMinStorageSize() 获取<p>集群计算规格对应的最小存储值</p>
 * @method void setMinStorageSize(integer $MinStorageSize) 设置<p>集群计算规格对应的最小存储值</p>
 * @method integer getMaxStorageSize() 获取<p>集群计算规格对应的最大存储值</p>
 * @method void setMaxStorageSize(integer $MaxStorageSize) 设置<p>集群计算规格对应的最大存储值</p>
 * @method array getNetAddrs() 获取<p>集群网络信息</p>
 * @method void setNetAddrs(array $NetAddrs) 设置<p>集群网络信息</p>
 * @method string getPhysicalZone() 获取<p>物理可用区</p>
 * @method void setPhysicalZone(string $PhysicalZone) 设置<p>物理可用区</p>
 * @method string getMasterZone() 获取<p>主可用区</p>
 * @method void setMasterZone(string $MasterZone) 设置<p>主可用区</p>
 * @method string getHasSlaveZone() 获取<p>是否有从可用区</p>
 * @method void setHasSlaveZone(string $HasSlaveZone) 设置<p>是否有从可用区</p>
 * @method array getSlaveZones() 获取<p>从可用区</p>
 * @method void setSlaveZones(array $SlaveZones) 设置<p>从可用区</p>
 * @method string getBusinessType() 获取<p>商业类型</p>
 * @method void setBusinessType(string $BusinessType) 设置<p>商业类型</p>
 * @method string getIsFreeze() 获取<p>是否冻结</p>
 * @method void setIsFreeze(string $IsFreeze) 设置<p>是否冻结</p>
 * @method string getOrderSource() 获取<p>订单来源</p>
 * @method void setOrderSource(string $OrderSource) 设置<p>订单来源</p>
 * @method Ability getAbility() 获取<p>能力</p>
 * @method void setAbility(Ability $Ability) 设置<p>能力</p>
 * @method array getResourcePackages() 获取<p>实例绑定资源包信息（此处只返回存储资源包，即packageType=DISK）</p>
 * @method void setResourcePackages(array $ResourcePackages) 设置<p>实例绑定资源包信息（此处只返回存储资源包，即packageType=DISK）</p>
 * @method string getGdnId() 获取<p>全球数据库唯一标识</p>
 * @method void setGdnId(string $GdnId) 设置<p>全球数据库唯一标识</p>
 * @method string getGdnRole() 获取<p>集群角色。主集群- primary，从集群 - standby，如果 GdnId为空，该字段无效。</p>
 * @method void setGdnRole(string $GdnRole) 设置<p>集群角色。主集群- primary，从集群 - standby，如果 GdnId为空，该字段无效。</p>
 */
class CynosdbCluster extends AbstractModel
{
    /**
     * @var string <p>集群状态， 可选值如下:<br>creating: 创建中<br>running:运行中<br>isolating:隔离中<br>isolated:已隔离<br>activating:解隔离中<br>offlining:下线中<br>offlined:已下线<br>deleting:删除中<br>deleted:已删除</p>
     */
    public $Status;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>可用区</p>
     */
    public $Zone;

    /**
     * @var string <p>集群名称</p>
     */
    public $ClusterName;

    /**
     * @var string <p>地域</p>
     */
    public $Region;

    /**
     * @var string <p>数据库版本</p>
     */
    public $DbVersion;

    /**
     * @var string <p>集群ID</p>
     */
    public $ClusterId;

    /**
     * @var integer <p>实例数</p>
     */
    public $InstanceNum;

    /**
     * @var string <p>用户uin</p>
     */
    public $Uin;

    /**
     * @var string <p>引擎类型</p>
     */
    public $DbType;

    /**
     * @var integer <p>用户appid</p>
     */
    public $AppId;

    /**
     * @var string <p>集群状态描述</p>
     */
    public $StatusDesc;

    /**
     * @var string <p>集群创建时间</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>付费模式。0-按量计费，1-包年包月</p>
     */
    public $PayMode;

    /**
     * @var string <p>截止时间</p>
     */
    public $PeriodEndTime;

    /**
     * @var string <p>集群读写vip</p>
     */
    public $Vip;

    /**
     * @var integer <p>集群读写vport</p>
     */
    public $Vport;

    /**
     * @var integer <p>项目id</p>
     */
    public $ProjectID;

    /**
     * @var string <p>私有网络ID</p>
     */
    public $VpcId;

    /**
     * @var string <p>子网ID</p>
     */
    public $SubnetId;

    /**
     * @var string <p>cynos内核版本</p>
     */
    public $CynosVersion;

    /**
     * @var string <p>cynos版本标签</p>
     */
    public $CynosVersionTag;

    /**
     * @var integer <p>存储容量</p>
     */
    public $StorageLimit;

    /**
     * @var integer <p>续费标志</p>
     */
    public $RenewFlag;

    /**
     * @var string <p>正在处理的任务</p>
     */
    public $ProcessingTask;

    /**
     * @var array <p>集群的任务数组</p>
     */
    public $Tasks;

    /**
     * @var array <p>集群绑定的tag数组</p>
     */
    public $ResourceTags;

    /**
     * @var string <p>Db类型(NORMAL, SERVERLESS)</p>
     */
    public $DbMode;

    /**
     * @var string <p>当Db类型为SERVERLESS时，serverless集群状态，可选值:<br>resume<br>pause</p>
     */
    public $ServerlessStatus;

    /**
     * @var integer <p>集群预付费存储值大小</p>
     */
    public $Storage;

    /**
     * @var string <p>集群存储为预付费时的存储ID，用于预付费存储变配</p>
     */
    public $StorageId;

    /**
     * @var integer <p>集群存储付费模式。0-按量计费，1-包年包月</p>
     */
    public $StoragePayMode;

    /**
     * @var integer <p>集群计算规格对应的最小存储值</p>
     */
    public $MinStorageSize;

    /**
     * @var integer <p>集群计算规格对应的最大存储值</p>
     */
    public $MaxStorageSize;

    /**
     * @var array <p>集群网络信息</p>
     */
    public $NetAddrs;

    /**
     * @var string <p>物理可用区</p>
     */
    public $PhysicalZone;

    /**
     * @var string <p>主可用区</p>
     */
    public $MasterZone;

    /**
     * @var string <p>是否有从可用区</p>
     */
    public $HasSlaveZone;

    /**
     * @var array <p>从可用区</p>
     */
    public $SlaveZones;

    /**
     * @var string <p>商业类型</p>
     */
    public $BusinessType;

    /**
     * @var string <p>是否冻结</p>
     */
    public $IsFreeze;

    /**
     * @var string <p>订单来源</p>
     */
    public $OrderSource;

    /**
     * @var Ability <p>能力</p>
     */
    public $Ability;

    /**
     * @var array <p>实例绑定资源包信息（此处只返回存储资源包，即packageType=DISK）</p>
     */
    public $ResourcePackages;

    /**
     * @var string <p>全球数据库唯一标识</p>
     */
    public $GdnId;

    /**
     * @var string <p>集群角色。主集群- primary，从集群 - standby，如果 GdnId为空，该字段无效。</p>
     */
    public $GdnRole;

    /**
     * @param string $Status <p>集群状态， 可选值如下:<br>creating: 创建中<br>running:运行中<br>isolating:隔离中<br>isolated:已隔离<br>activating:解隔离中<br>offlining:下线中<br>offlined:已下线<br>deleting:删除中<br>deleted:已删除</p>
     * @param string $UpdateTime <p>更新时间</p>
     * @param string $Zone <p>可用区</p>
     * @param string $ClusterName <p>集群名称</p>
     * @param string $Region <p>地域</p>
     * @param string $DbVersion <p>数据库版本</p>
     * @param string $ClusterId <p>集群ID</p>
     * @param integer $InstanceNum <p>实例数</p>
     * @param string $Uin <p>用户uin</p>
     * @param string $DbType <p>引擎类型</p>
     * @param integer $AppId <p>用户appid</p>
     * @param string $StatusDesc <p>集群状态描述</p>
     * @param string $CreateTime <p>集群创建时间</p>
     * @param integer $PayMode <p>付费模式。0-按量计费，1-包年包月</p>
     * @param string $PeriodEndTime <p>截止时间</p>
     * @param string $Vip <p>集群读写vip</p>
     * @param integer $Vport <p>集群读写vport</p>
     * @param integer $ProjectID <p>项目id</p>
     * @param string $VpcId <p>私有网络ID</p>
     * @param string $SubnetId <p>子网ID</p>
     * @param string $CynosVersion <p>cynos内核版本</p>
     * @param string $CynosVersionTag <p>cynos版本标签</p>
     * @param integer $StorageLimit <p>存储容量</p>
     * @param integer $RenewFlag <p>续费标志</p>
     * @param string $ProcessingTask <p>正在处理的任务</p>
     * @param array $Tasks <p>集群的任务数组</p>
     * @param array $ResourceTags <p>集群绑定的tag数组</p>
     * @param string $DbMode <p>Db类型(NORMAL, SERVERLESS)</p>
     * @param string $ServerlessStatus <p>当Db类型为SERVERLESS时，serverless集群状态，可选值:<br>resume<br>pause</p>
     * @param integer $Storage <p>集群预付费存储值大小</p>
     * @param string $StorageId <p>集群存储为预付费时的存储ID，用于预付费存储变配</p>
     * @param integer $StoragePayMode <p>集群存储付费模式。0-按量计费，1-包年包月</p>
     * @param integer $MinStorageSize <p>集群计算规格对应的最小存储值</p>
     * @param integer $MaxStorageSize <p>集群计算规格对应的最大存储值</p>
     * @param array $NetAddrs <p>集群网络信息</p>
     * @param string $PhysicalZone <p>物理可用区</p>
     * @param string $MasterZone <p>主可用区</p>
     * @param string $HasSlaveZone <p>是否有从可用区</p>
     * @param array $SlaveZones <p>从可用区</p>
     * @param string $BusinessType <p>商业类型</p>
     * @param string $IsFreeze <p>是否冻结</p>
     * @param string $OrderSource <p>订单来源</p>
     * @param Ability $Ability <p>能力</p>
     * @param array $ResourcePackages <p>实例绑定资源包信息（此处只返回存储资源包，即packageType=DISK）</p>
     * @param string $GdnId <p>全球数据库唯一标识</p>
     * @param string $GdnRole <p>集群角色。主集群- primary，从集群 - standby，如果 GdnId为空，该字段无效。</p>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("DbVersion",$param) and $param["DbVersion"] !== null) {
            $this->DbVersion = $param["DbVersion"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("InstanceNum",$param) and $param["InstanceNum"] !== null) {
            $this->InstanceNum = $param["InstanceNum"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("PeriodEndTime",$param) and $param["PeriodEndTime"] !== null) {
            $this->PeriodEndTime = $param["PeriodEndTime"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("ProjectID",$param) and $param["ProjectID"] !== null) {
            $this->ProjectID = $param["ProjectID"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("CynosVersion",$param) and $param["CynosVersion"] !== null) {
            $this->CynosVersion = $param["CynosVersion"];
        }

        if (array_key_exists("CynosVersionTag",$param) and $param["CynosVersionTag"] !== null) {
            $this->CynosVersionTag = $param["CynosVersionTag"];
        }

        if (array_key_exists("StorageLimit",$param) and $param["StorageLimit"] !== null) {
            $this->StorageLimit = $param["StorageLimit"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("ProcessingTask",$param) and $param["ProcessingTask"] !== null) {
            $this->ProcessingTask = $param["ProcessingTask"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new ObjectTask();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("DbMode",$param) and $param["DbMode"] !== null) {
            $this->DbMode = $param["DbMode"];
        }

        if (array_key_exists("ServerlessStatus",$param) and $param["ServerlessStatus"] !== null) {
            $this->ServerlessStatus = $param["ServerlessStatus"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("StorageId",$param) and $param["StorageId"] !== null) {
            $this->StorageId = $param["StorageId"];
        }

        if (array_key_exists("StoragePayMode",$param) and $param["StoragePayMode"] !== null) {
            $this->StoragePayMode = $param["StoragePayMode"];
        }

        if (array_key_exists("MinStorageSize",$param) and $param["MinStorageSize"] !== null) {
            $this->MinStorageSize = $param["MinStorageSize"];
        }

        if (array_key_exists("MaxStorageSize",$param) and $param["MaxStorageSize"] !== null) {
            $this->MaxStorageSize = $param["MaxStorageSize"];
        }

        if (array_key_exists("NetAddrs",$param) and $param["NetAddrs"] !== null) {
            $this->NetAddrs = [];
            foreach ($param["NetAddrs"] as $key => $value){
                $obj = new NetAddr();
                $obj->deserialize($value);
                array_push($this->NetAddrs, $obj);
            }
        }

        if (array_key_exists("PhysicalZone",$param) and $param["PhysicalZone"] !== null) {
            $this->PhysicalZone = $param["PhysicalZone"];
        }

        if (array_key_exists("MasterZone",$param) and $param["MasterZone"] !== null) {
            $this->MasterZone = $param["MasterZone"];
        }

        if (array_key_exists("HasSlaveZone",$param) and $param["HasSlaveZone"] !== null) {
            $this->HasSlaveZone = $param["HasSlaveZone"];
        }

        if (array_key_exists("SlaveZones",$param) and $param["SlaveZones"] !== null) {
            $this->SlaveZones = $param["SlaveZones"];
        }

        if (array_key_exists("BusinessType",$param) and $param["BusinessType"] !== null) {
            $this->BusinessType = $param["BusinessType"];
        }

        if (array_key_exists("IsFreeze",$param) and $param["IsFreeze"] !== null) {
            $this->IsFreeze = $param["IsFreeze"];
        }

        if (array_key_exists("OrderSource",$param) and $param["OrderSource"] !== null) {
            $this->OrderSource = $param["OrderSource"];
        }

        if (array_key_exists("Ability",$param) and $param["Ability"] !== null) {
            $this->Ability = new Ability();
            $this->Ability->deserialize($param["Ability"]);
        }

        if (array_key_exists("ResourcePackages",$param) and $param["ResourcePackages"] !== null) {
            $this->ResourcePackages = [];
            foreach ($param["ResourcePackages"] as $key => $value){
                $obj = new ResourcePackage();
                $obj->deserialize($value);
                array_push($this->ResourcePackages, $obj);
            }
        }

        if (array_key_exists("GdnId",$param) and $param["GdnId"] !== null) {
            $this->GdnId = $param["GdnId"];
        }

        if (array_key_exists("GdnRole",$param) and $param["GdnRole"] !== null) {
            $this->GdnRole = $param["GdnRole"];
        }
    }
}
