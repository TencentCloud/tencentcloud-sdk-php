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
 * DescribeLibraDBInstanceDetail返回参数结构体
 *
 * @method string getUin() 获取<p>主账号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUin(string $Uin) 设置<p>主账号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppId() 获取<p>账号唯一ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置<p>账号唯一ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取<p>集群ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterName() 获取<p>集群名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterName(string $ClusterName) 设置<p>集群名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取<p>实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceName() 获取<p>实例名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProjectId() 获取<p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(integer $ProjectId) 设置<p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取<p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置<p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZone() 获取<p>可用区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZone(string $Zone) 设置<p>可用区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>实例状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置<p>实例状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatusDesc() 获取<p>状态描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusDesc(string $StatusDesc) 设置<p>状态描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLibraDBVersion() 获取<p>Libra分析引擎版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLibraDBVersion(string $LibraDBVersion) 设置<p>Libra分析引擎版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCpu() 获取<p>cpu核数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpu(integer $Cpu) 设置<p>cpu核数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMemory() 获取<p>内存大小</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemory(integer $Memory) 设置<p>内存大小</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStorage() 获取<p>存储大小</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorage(integer $Storage) 设置<p>存储大小</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStorageType() 获取<p>存储类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageType(string $StorageType) 设置<p>存储类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceType() 获取<p>实例类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceType(string $InstanceType) 设置<p>实例类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceRole() 获取<p>实例角色</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceRole(string $InstanceRole) 设置<p>实例角色</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPayMode() 获取<p>售卖方式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayMode(integer $PayMode) 设置<p>售卖方式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPeriodStartTime() 获取<p>售卖开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPeriodStartTime(string $PeriodStartTime) 设置<p>售卖开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPeriodEndTime() 获取<p>售卖结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPeriodEndTime(string $PeriodEndTime) 设置<p>售卖结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRenewFlag() 获取<p>续费标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRenewFlag(integer $RenewFlag) 设置<p>续费标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNetType() 获取<p>网络类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetType(integer $NetType) 设置<p>网络类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取<p>私有网络ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置<p>私有网络ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取<p>子网ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置<p>子网ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVip() 获取<p>虚拟IP</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVip(string $Vip) 设置<p>虚拟IP</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVport() 获取<p>端口</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVport(integer $Vport) 设置<p>端口</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method InstanceNetInfo getInstanceNetInfo() 获取<p>实例网络信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceNetInfo(InstanceNetInfo $InstanceNetInfo) 设置<p>实例网络信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResourceTags() 获取<p>实例标签信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceTags(array $ResourceTags) 设置<p>实例标签信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNodeInfo() 获取<p>实例节点信息</p>
 * @method void setNodeInfo(array $NodeInfo) 设置<p>实例节点信息</p>
 * @method integer getNodeCount() 获取<p>实例节点个数</p>
 * @method void setNodeCount(integer $NodeCount) 设置<p>实例节点个数</p>
 * @method UpgradeAnalysisInstanceVersionInfo getAnalysisUpgradeVersionInfo() 获取<p>分析实例升级版本之后信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnalysisUpgradeVersionInfo(UpgradeAnalysisInstanceVersionInfo $AnalysisUpgradeVersionInfo) 设置<p>分析实例升级版本之后信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeLibraDBInstanceDetailResponse extends AbstractModel
{
    /**
     * @var string <p>主账号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uin;

    /**
     * @var integer <p>账号唯一ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string <p>集群ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var string <p>集群名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterName;

    /**
     * @var string <p>实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string <p>实例名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceName;

    /**
     * @var integer <p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string <p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string <p>可用区</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Zone;

    /**
     * @var string <p>实例状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string <p>状态描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusDesc;

    /**
     * @var string <p>Libra分析引擎版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LibraDBVersion;

    /**
     * @var integer <p>cpu核数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cpu;

    /**
     * @var integer <p>内存大小</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Memory;

    /**
     * @var integer <p>存储大小</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Storage;

    /**
     * @var string <p>存储类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageType;

    /**
     * @var string <p>实例类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceType;

    /**
     * @var string <p>实例角色</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceRole;

    /**
     * @var string <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer <p>售卖方式</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayMode;

    /**
     * @var string <p>售卖开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PeriodStartTime;

    /**
     * @var string <p>售卖结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PeriodEndTime;

    /**
     * @var integer <p>续费标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RenewFlag;

    /**
     * @var integer <p>网络类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetType;

    /**
     * @var string <p>私有网络ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string <p>子网ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var string <p>虚拟IP</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vip;

    /**
     * @var integer <p>端口</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vport;

    /**
     * @var InstanceNetInfo <p>实例网络信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceNetInfo;

    /**
     * @var array <p>实例标签信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceTags;

    /**
     * @var array <p>实例节点信息</p>
     */
    public $NodeInfo;

    /**
     * @var integer <p>实例节点个数</p>
     */
    public $NodeCount;

    /**
     * @var UpgradeAnalysisInstanceVersionInfo <p>分析实例升级版本之后信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AnalysisUpgradeVersionInfo;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Uin <p>主账号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppId <p>账号唯一ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId <p>集群ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterName <p>集群名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId <p>实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceName <p>实例名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProjectId <p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region <p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Zone <p>可用区</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>实例状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StatusDesc <p>状态描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LibraDBVersion <p>Libra分析引擎版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Cpu <p>cpu核数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Memory <p>内存大小</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Storage <p>存储大小</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StorageType <p>存储类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceType <p>实例类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceRole <p>实例角色</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PayMode <p>售卖方式</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PeriodStartTime <p>售卖开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PeriodEndTime <p>售卖结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RenewFlag <p>续费标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NetType <p>网络类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId <p>私有网络ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId <p>子网ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Vip <p>虚拟IP</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Vport <p>端口</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param InstanceNetInfo $InstanceNetInfo <p>实例网络信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ResourceTags <p>实例标签信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NodeInfo <p>实例节点信息</p>
     * @param integer $NodeCount <p>实例节点个数</p>
     * @param UpgradeAnalysisInstanceVersionInfo $AnalysisUpgradeVersionInfo <p>分析实例升级版本之后信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("LibraDBVersion",$param) and $param["LibraDBVersion"] !== null) {
            $this->LibraDBVersion = $param["LibraDBVersion"];
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

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
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

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("PeriodStartTime",$param) and $param["PeriodStartTime"] !== null) {
            $this->PeriodStartTime = $param["PeriodStartTime"];
        }

        if (array_key_exists("PeriodEndTime",$param) and $param["PeriodEndTime"] !== null) {
            $this->PeriodEndTime = $param["PeriodEndTime"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
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

        if (array_key_exists("InstanceNetInfo",$param) and $param["InstanceNetInfo"] !== null) {
            $this->InstanceNetInfo = new InstanceNetInfo();
            $this->InstanceNetInfo->deserialize($param["InstanceNetInfo"]);
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("NodeInfo",$param) and $param["NodeInfo"] !== null) {
            $this->NodeInfo = [];
            foreach ($param["NodeInfo"] as $key => $value){
                $obj = new LibraDBNodeInfo();
                $obj->deserialize($value);
                array_push($this->NodeInfo, $obj);
            }
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("AnalysisUpgradeVersionInfo",$param) and $param["AnalysisUpgradeVersionInfo"] !== null) {
            $this->AnalysisUpgradeVersionInfo = new UpgradeAnalysisInstanceVersionInfo();
            $this->AnalysisUpgradeVersionInfo->deserialize($param["AnalysisUpgradeVersionInfo"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
