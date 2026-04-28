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
 * libra集群详情
 *
 * @method string getClusterId() 获取<p>集群id</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群id</p>
 * @method string getClusterName() 获取<p>集群名称</p>
 * @method void setClusterName(string $ClusterName) 设置<p>集群名称</p>
 * @method string getRegion() 获取<p>地域</p>
 * @method void setRegion(string $Region) 设置<p>地域</p>
 * @method string getStatus() 获取<p>状态</p>
 * @method void setStatus(string $Status) 设置<p>状态</p>
 * @method string getStatusDesc() 获取<p>状态描述</p>
 * @method void setStatusDesc(string $StatusDesc) 设置<p>状态描述</p>
 * @method integer getStorage() 获取<p>存储大小</p>
 * @method void setStorage(integer $Storage) 设置<p>存储大小</p>
 * @method string getVpcName() 获取<p>VPC名称</p>
 * @method void setVpcName(string $VpcName) 设置<p>VPC名称</p>
 * @method string getVpcId() 获取<p>vpc唯一id</p>
 * @method void setVpcId(string $VpcId) 设置<p>vpc唯一id</p>
 * @method string getSubnetName() 获取<p>子网名称</p>
 * @method void setSubnetName(string $SubnetName) 设置<p>子网名称</p>
 * @method string getSubnetId() 获取<p>子网ID</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>子网ID</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getDbVersion() 获取<p>数据库版本</p>
 * @method void setDbVersion(string $DbVersion) 设置<p>数据库版本</p>
 * @method integer getUsedStorage() 获取<p>使用容量</p>
 * @method void setUsedStorage(integer $UsedStorage) 设置<p>使用容量</p>
 * @method string getVip() 获取<p>vip地址</p>
 * @method void setVip(string $Vip) 设置<p>vip地址</p>
 * @method integer getVport() 获取<p>vport端口</p>
 * @method void setVport(integer $Vport) 设置<p>vport端口</p>
 * @method array getRoAddr() 获取<p>集群只读实例的vip地址和vport端口</p>
 * @method void setRoAddr(array $RoAddr) 设置<p>集群只读实例的vip地址和vport端口</p>
 * @method string getCynosVersion() 获取<p>cynos版本</p>
 * @method void setCynosVersion(string $CynosVersion) 设置<p>cynos版本</p>
 * @method string getIsFreeze() 获取<p>是否冻结</p>
 * @method void setIsFreeze(string $IsFreeze) 设置<p>是否冻结</p>
 * @method array getTasks() 获取<p>任务列表</p>
 * @method void setTasks(array $Tasks) 设置<p>任务列表</p>
 * @method string getMasterZone() 获取<p>主可用区</p>
 * @method void setMasterZone(string $MasterZone) 设置<p>主可用区</p>
 * @method array getInstanceSet() 获取<p>实例集合</p>
 * @method void setInstanceSet(array $InstanceSet) 设置<p>实例集合</p>
 * @method integer getPayMode() 获取<p>付费模式</p>
 * @method void setPayMode(integer $PayMode) 设置<p>付费模式</p>
 * @method string getPeriodEndTime() 获取<p>到期时间</p>
 * @method void setPeriodEndTime(string $PeriodEndTime) 设置<p>到期时间</p>
 * @method integer getProjectID() 获取<p>项目id</p>
 * @method void setProjectID(integer $ProjectID) 设置<p>项目id</p>
 * @method integer getRenewFlag() 获取<p>自动续费标识</p>
 * @method void setRenewFlag(integer $RenewFlag) 设置<p>自动续费标识</p>
 * @method string getCynosVersionTag() 获取<p>版本标签</p>
 * @method void setCynosVersionTag(string $CynosVersionTag) 设置<p>版本标签</p>
 * @method string getNoSupportAddRo() 获取<p>不支持添加ro yes-不支持添加ro， no/null/&quot;&quot; 支持添加ro</p>
 * @method void setNoSupportAddRo(string $NoSupportAddRo) 设置<p>不支持添加ro yes-不支持添加ro， no/null/&quot;&quot; 支持添加ro</p>
 * @method string getZone() 获取<p>可用区</p>
 * @method void setZone(string $Zone) 设置<p>可用区</p>
 * @method string getPhysicalZone() 获取<p>物理可用区</p>
 * @method void setPhysicalZone(string $PhysicalZone) 设置<p>物理可用区</p>
 * @method UpgradeAnalysisInstanceVersionInfo getAnalysisUpgradeVersionInfo() 获取<p>版本升级灰度信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnalysisUpgradeVersionInfo(UpgradeAnalysisInstanceVersionInfo $AnalysisUpgradeVersionInfo) 设置<p>版本升级灰度信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class LibraDBClusterDetail extends AbstractModel
{
    /**
     * @var string <p>集群id</p>
     */
    public $ClusterId;

    /**
     * @var string <p>集群名称</p>
     */
    public $ClusterName;

    /**
     * @var string <p>地域</p>
     */
    public $Region;

    /**
     * @var string <p>状态</p>
     */
    public $Status;

    /**
     * @var string <p>状态描述</p>
     */
    public $StatusDesc;

    /**
     * @var integer <p>存储大小</p>
     */
    public $Storage;

    /**
     * @var string <p>VPC名称</p>
     */
    public $VpcName;

    /**
     * @var string <p>vpc唯一id</p>
     */
    public $VpcId;

    /**
     * @var string <p>子网名称</p>
     */
    public $SubnetName;

    /**
     * @var string <p>子网ID</p>
     */
    public $SubnetId;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>数据库版本</p>
     */
    public $DbVersion;

    /**
     * @var integer <p>使用容量</p>
     */
    public $UsedStorage;

    /**
     * @var string <p>vip地址</p>
     */
    public $Vip;

    /**
     * @var integer <p>vport端口</p>
     */
    public $Vport;

    /**
     * @var array <p>集群只读实例的vip地址和vport端口</p>
     */
    public $RoAddr;

    /**
     * @var string <p>cynos版本</p>
     */
    public $CynosVersion;

    /**
     * @var string <p>是否冻结</p>
     */
    public $IsFreeze;

    /**
     * @var array <p>任务列表</p>
     */
    public $Tasks;

    /**
     * @var string <p>主可用区</p>
     */
    public $MasterZone;

    /**
     * @var array <p>实例集合</p>
     */
    public $InstanceSet;

    /**
     * @var integer <p>付费模式</p>
     */
    public $PayMode;

    /**
     * @var string <p>到期时间</p>
     */
    public $PeriodEndTime;

    /**
     * @var integer <p>项目id</p>
     */
    public $ProjectID;

    /**
     * @var integer <p>自动续费标识</p>
     */
    public $RenewFlag;

    /**
     * @var string <p>版本标签</p>
     */
    public $CynosVersionTag;

    /**
     * @var string <p>不支持添加ro yes-不支持添加ro， no/null/&quot;&quot; 支持添加ro</p>
     */
    public $NoSupportAddRo;

    /**
     * @var string <p>可用区</p>
     */
    public $Zone;

    /**
     * @var string <p>物理可用区</p>
     */
    public $PhysicalZone;

    /**
     * @var UpgradeAnalysisInstanceVersionInfo <p>版本升级灰度信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AnalysisUpgradeVersionInfo;

    /**
     * @param string $ClusterId <p>集群id</p>
     * @param string $ClusterName <p>集群名称</p>
     * @param string $Region <p>地域</p>
     * @param string $Status <p>状态</p>
     * @param string $StatusDesc <p>状态描述</p>
     * @param integer $Storage <p>存储大小</p>
     * @param string $VpcName <p>VPC名称</p>
     * @param string $VpcId <p>vpc唯一id</p>
     * @param string $SubnetName <p>子网名称</p>
     * @param string $SubnetId <p>子网ID</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $DbVersion <p>数据库版本</p>
     * @param integer $UsedStorage <p>使用容量</p>
     * @param string $Vip <p>vip地址</p>
     * @param integer $Vport <p>vport端口</p>
     * @param array $RoAddr <p>集群只读实例的vip地址和vport端口</p>
     * @param string $CynosVersion <p>cynos版本</p>
     * @param string $IsFreeze <p>是否冻结</p>
     * @param array $Tasks <p>任务列表</p>
     * @param string $MasterZone <p>主可用区</p>
     * @param array $InstanceSet <p>实例集合</p>
     * @param integer $PayMode <p>付费模式</p>
     * @param string $PeriodEndTime <p>到期时间</p>
     * @param integer $ProjectID <p>项目id</p>
     * @param integer $RenewFlag <p>自动续费标识</p>
     * @param string $CynosVersionTag <p>版本标签</p>
     * @param string $NoSupportAddRo <p>不支持添加ro yes-不支持添加ro， no/null/&quot;&quot; 支持添加ro</p>
     * @param string $Zone <p>可用区</p>
     * @param string $PhysicalZone <p>物理可用区</p>
     * @param UpgradeAnalysisInstanceVersionInfo $AnalysisUpgradeVersionInfo <p>版本升级灰度信息</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DbVersion",$param) and $param["DbVersion"] !== null) {
            $this->DbVersion = $param["DbVersion"];
        }

        if (array_key_exists("UsedStorage",$param) and $param["UsedStorage"] !== null) {
            $this->UsedStorage = $param["UsedStorage"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("RoAddr",$param) and $param["RoAddr"] !== null) {
            $this->RoAddr = [];
            foreach ($param["RoAddr"] as $key => $value){
                $obj = new RoAddr();
                $obj->deserialize($value);
                array_push($this->RoAddr, $obj);
            }
        }

        if (array_key_exists("CynosVersion",$param) and $param["CynosVersion"] !== null) {
            $this->CynosVersion = $param["CynosVersion"];
        }

        if (array_key_exists("IsFreeze",$param) and $param["IsFreeze"] !== null) {
            $this->IsFreeze = $param["IsFreeze"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new ObjectTask();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("MasterZone",$param) and $param["MasterZone"] !== null) {
            $this->MasterZone = $param["MasterZone"];
        }

        if (array_key_exists("InstanceSet",$param) and $param["InstanceSet"] !== null) {
            $this->InstanceSet = [];
            foreach ($param["InstanceSet"] as $key => $value){
                $obj = new InstanceSet();
                $obj->deserialize($value);
                array_push($this->InstanceSet, $obj);
            }
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("PeriodEndTime",$param) and $param["PeriodEndTime"] !== null) {
            $this->PeriodEndTime = $param["PeriodEndTime"];
        }

        if (array_key_exists("ProjectID",$param) and $param["ProjectID"] !== null) {
            $this->ProjectID = $param["ProjectID"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("CynosVersionTag",$param) and $param["CynosVersionTag"] !== null) {
            $this->CynosVersionTag = $param["CynosVersionTag"];
        }

        if (array_key_exists("NoSupportAddRo",$param) and $param["NoSupportAddRo"] !== null) {
            $this->NoSupportAddRo = $param["NoSupportAddRo"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("PhysicalZone",$param) and $param["PhysicalZone"] !== null) {
            $this->PhysicalZone = $param["PhysicalZone"];
        }

        if (array_key_exists("AnalysisUpgradeVersionInfo",$param) and $param["AnalysisUpgradeVersionInfo"] !== null) {
            $this->AnalysisUpgradeVersionInfo = new UpgradeAnalysisInstanceVersionInfo();
            $this->AnalysisUpgradeVersionInfo->deserialize($param["AnalysisUpgradeVersionInfo"]);
        }
    }
}
