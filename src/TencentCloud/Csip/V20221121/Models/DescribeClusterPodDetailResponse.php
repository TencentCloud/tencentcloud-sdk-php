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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterPodDetail返回参数结构体
 *
 * @method string getUniqueID() 获取<p>Pod 唯一 ID</p>
 * @method void setUniqueID(string $UniqueID) 设置<p>Pod 唯一 ID</p>
 * @method integer getAppID() 获取<p>主账号 AppID</p>
 * @method void setAppID(integer $AppID) 设置<p>主账号 AppID</p>
 * @method string getPodName() 获取<p>Pod 名称</p>
 * @method void setPodName(string $PodName) 设置<p>Pod 名称</p>
 * @method string getPodIP() 获取<p>Pod IP 地址</p>
 * @method void setPodIP(string $PodIP) 设置<p>Pod IP 地址</p>
 * @method string getRunStatus() 获取<p>Pod 运行状态</p>
 * @method void setRunStatus(string $RunStatus) 设置<p>Pod 运行状态</p>
 * @method array getLabels() 获取<p>Pod Labels 列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabels(array $Labels) 设置<p>Pod Labels 列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取<p>Pod 启动时间</p>
 * @method void setStartTime(string $StartTime) 设置<p>Pod 启动时间</p>
 * @method integer getStartupTime() 获取<p>启动时间（秒）</p>
 * @method void setStartupTime(integer $StartupTime) 设置<p>启动时间（秒）</p>
 * @method integer getRestartCount() 获取<p>Pod 重启次数</p>
 * @method void setRestartCount(integer $RestartCount) 设置<p>Pod 重启次数</p>
 * @method string getClusterName() 获取<p>所属集群名称</p>
 * @method void setClusterName(string $ClusterName) 设置<p>所属集群名称</p>
 * @method string getClusterID() 获取<p>所属集群 ID</p>
 * @method void setClusterID(string $ClusterID) 设置<p>所属集群 ID</p>
 * @method string getClusterType() 获取<p>所属集群类型</p>
 * @method void setClusterType(string $ClusterType) 设置<p>所属集群类型</p>
 * @method string getClusterRunStatus() 获取<p>所属集群运行状态</p>
 * @method void setClusterRunStatus(string $ClusterRunStatus) 设置<p>所属集群运行状态</p>
 * @method string getNamespace() 获取<p>所属命名空间</p>
 * @method void setNamespace(string $Namespace) 设置<p>所属命名空间</p>
 * @method string getNodeName() 获取<p>所在节点名称</p>
 * @method void setNodeName(string $NodeName) 设置<p>所在节点名称</p>
 * @method string getNodeId() 获取<p>所在节点 ID</p>
 * @method void setNodeId(string $NodeId) 设置<p>所在节点 ID</p>
 * @method string getWorkloadName() 获取<p>所属 Workload 名称</p>
 * @method void setWorkloadName(string $WorkloadName) 设置<p>所属 Workload 名称</p>
 * @method string getWorkloadType() 获取<p>所属 Workload 类型</p>
 * @method void setWorkloadType(string $WorkloadType) 设置<p>所属 Workload 类型</p>
 * @method integer getRiskEventCriticalCount() 获取<p>严重风险事件数</p>
 * @method void setRiskEventCriticalCount(integer $RiskEventCriticalCount) 设置<p>严重风险事件数</p>
 * @method integer getRiskEventHighCount() 获取<p>高危风险事件数</p>
 * @method void setRiskEventHighCount(integer $RiskEventHighCount) 设置<p>高危风险事件数</p>
 * @method integer getRiskEventMiddleCount() 获取<p>中危风险事件数</p>
 * @method void setRiskEventMiddleCount(integer $RiskEventMiddleCount) 设置<p>中危风险事件数</p>
 * @method integer getRiskEventLowCount() 获取<p>低危风险事件数</p>
 * @method void setRiskEventLowCount(integer $RiskEventLowCount) 设置<p>低危风险事件数</p>
 * @method integer getAlarmEventCriticalCount() 获取<p>严重告警事件数</p>
 * @method void setAlarmEventCriticalCount(integer $AlarmEventCriticalCount) 设置<p>严重告警事件数</p>
 * @method integer getAlarmEventHighCount() 获取<p>高危告警事件数</p>
 * @method void setAlarmEventHighCount(integer $AlarmEventHighCount) 设置<p>高危告警事件数</p>
 * @method integer getAlarmEventMiddleCount() 获取<p>中危告警事件数</p>
 * @method void setAlarmEventMiddleCount(integer $AlarmEventMiddleCount) 设置<p>中危告警事件数</p>
 * @method integer getAlarmEventLowCount() 获取<p>低危告警事件数</p>
 * @method void setAlarmEventLowCount(integer $AlarmEventLowCount) 设置<p>低危告警事件数</p>
 * @method string getRegion() 获取<p>所属地域</p>
 * @method void setRegion(string $Region) 设置<p>所属地域</p>
 * @method string getNodeInternalIP() 获取<p>节点内网 IP</p>
 * @method void setNodeInternalIP(string $NodeInternalIP) 设置<p>节点内网 IP</p>
 * @method string getNodeExternalIP() 获取<p>节点外网 IP</p>
 * @method void setNodeExternalIP(string $NodeExternalIP) 设置<p>节点外网 IP</p>
 * @method integer getContainerCount() 获取<p>关联容器数量</p>
 * @method void setContainerCount(integer $ContainerCount) 设置<p>关联容器数量</p>
 * @method integer getServiceCount() 获取<p>关联服务数量</p>
 * @method void setServiceCount(integer $ServiceCount) 设置<p>关联服务数量</p>
 * @method string getRegionName() 获取<p>地域中文名</p>
 * @method void setRegionName(string $RegionName) 设置<p>地域中文名</p>
 * @method string getRegionNameEn() 获取<p>地域英文名</p>
 * @method void setRegionNameEn(string $RegionNameEn) 设置<p>地域英文名</p>
 * @method integer getAlarmCount() 获取<p>告警数量</p>
 * @method void setAlarmCount(integer $AlarmCount) 设置<p>告警数量</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeClusterPodDetailResponse extends AbstractModel
{
    /**
     * @var string <p>Pod 唯一 ID</p>
     */
    public $UniqueID;

    /**
     * @var integer <p>主账号 AppID</p>
     */
    public $AppID;

    /**
     * @var string <p>Pod 名称</p>
     */
    public $PodName;

    /**
     * @var string <p>Pod IP 地址</p>
     */
    public $PodIP;

    /**
     * @var string <p>Pod 运行状态</p>
     */
    public $RunStatus;

    /**
     * @var array <p>Pod Labels 列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Labels;

    /**
     * @var string <p>Pod 启动时间</p>
     */
    public $StartTime;

    /**
     * @var integer <p>启动时间（秒）</p>
     */
    public $StartupTime;

    /**
     * @var integer <p>Pod 重启次数</p>
     */
    public $RestartCount;

    /**
     * @var string <p>所属集群名称</p>
     */
    public $ClusterName;

    /**
     * @var string <p>所属集群 ID</p>
     */
    public $ClusterID;

    /**
     * @var string <p>所属集群类型</p>
     */
    public $ClusterType;

    /**
     * @var string <p>所属集群运行状态</p>
     */
    public $ClusterRunStatus;

    /**
     * @var string <p>所属命名空间</p>
     */
    public $Namespace;

    /**
     * @var string <p>所在节点名称</p>
     */
    public $NodeName;

    /**
     * @var string <p>所在节点 ID</p>
     */
    public $NodeId;

    /**
     * @var string <p>所属 Workload 名称</p>
     */
    public $WorkloadName;

    /**
     * @var string <p>所属 Workload 类型</p>
     */
    public $WorkloadType;

    /**
     * @var integer <p>严重风险事件数</p>
     */
    public $RiskEventCriticalCount;

    /**
     * @var integer <p>高危风险事件数</p>
     */
    public $RiskEventHighCount;

    /**
     * @var integer <p>中危风险事件数</p>
     */
    public $RiskEventMiddleCount;

    /**
     * @var integer <p>低危风险事件数</p>
     */
    public $RiskEventLowCount;

    /**
     * @var integer <p>严重告警事件数</p>
     */
    public $AlarmEventCriticalCount;

    /**
     * @var integer <p>高危告警事件数</p>
     */
    public $AlarmEventHighCount;

    /**
     * @var integer <p>中危告警事件数</p>
     */
    public $AlarmEventMiddleCount;

    /**
     * @var integer <p>低危告警事件数</p>
     */
    public $AlarmEventLowCount;

    /**
     * @var string <p>所属地域</p>
     */
    public $Region;

    /**
     * @var string <p>节点内网 IP</p>
     */
    public $NodeInternalIP;

    /**
     * @var string <p>节点外网 IP</p>
     */
    public $NodeExternalIP;

    /**
     * @var integer <p>关联容器数量</p>
     */
    public $ContainerCount;

    /**
     * @var integer <p>关联服务数量</p>
     */
    public $ServiceCount;

    /**
     * @var string <p>地域中文名</p>
     */
    public $RegionName;

    /**
     * @var string <p>地域英文名</p>
     */
    public $RegionNameEn;

    /**
     * @var integer <p>告警数量</p>
     */
    public $AlarmCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $UniqueID <p>Pod 唯一 ID</p>
     * @param integer $AppID <p>主账号 AppID</p>
     * @param string $PodName <p>Pod 名称</p>
     * @param string $PodIP <p>Pod IP 地址</p>
     * @param string $RunStatus <p>Pod 运行状态</p>
     * @param array $Labels <p>Pod Labels 列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime <p>Pod 启动时间</p>
     * @param integer $StartupTime <p>启动时间（秒）</p>
     * @param integer $RestartCount <p>Pod 重启次数</p>
     * @param string $ClusterName <p>所属集群名称</p>
     * @param string $ClusterID <p>所属集群 ID</p>
     * @param string $ClusterType <p>所属集群类型</p>
     * @param string $ClusterRunStatus <p>所属集群运行状态</p>
     * @param string $Namespace <p>所属命名空间</p>
     * @param string $NodeName <p>所在节点名称</p>
     * @param string $NodeId <p>所在节点 ID</p>
     * @param string $WorkloadName <p>所属 Workload 名称</p>
     * @param string $WorkloadType <p>所属 Workload 类型</p>
     * @param integer $RiskEventCriticalCount <p>严重风险事件数</p>
     * @param integer $RiskEventHighCount <p>高危风险事件数</p>
     * @param integer $RiskEventMiddleCount <p>中危风险事件数</p>
     * @param integer $RiskEventLowCount <p>低危风险事件数</p>
     * @param integer $AlarmEventCriticalCount <p>严重告警事件数</p>
     * @param integer $AlarmEventHighCount <p>高危告警事件数</p>
     * @param integer $AlarmEventMiddleCount <p>中危告警事件数</p>
     * @param integer $AlarmEventLowCount <p>低危告警事件数</p>
     * @param string $Region <p>所属地域</p>
     * @param string $NodeInternalIP <p>节点内网 IP</p>
     * @param string $NodeExternalIP <p>节点外网 IP</p>
     * @param integer $ContainerCount <p>关联容器数量</p>
     * @param integer $ServiceCount <p>关联服务数量</p>
     * @param string $RegionName <p>地域中文名</p>
     * @param string $RegionNameEn <p>地域英文名</p>
     * @param integer $AlarmCount <p>告警数量</p>
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
        if (array_key_exists("UniqueID",$param) and $param["UniqueID"] !== null) {
            $this->UniqueID = $param["UniqueID"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("PodIP",$param) and $param["PodIP"] !== null) {
            $this->PodIP = $param["PodIP"];
        }

        if (array_key_exists("RunStatus",$param) and $param["RunStatus"] !== null) {
            $this->RunStatus = $param["RunStatus"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new AssetTag();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("StartupTime",$param) and $param["StartupTime"] !== null) {
            $this->StartupTime = $param["StartupTime"];
        }

        if (array_key_exists("RestartCount",$param) and $param["RestartCount"] !== null) {
            $this->RestartCount = $param["RestartCount"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("ClusterRunStatus",$param) and $param["ClusterRunStatus"] !== null) {
            $this->ClusterRunStatus = $param["ClusterRunStatus"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("WorkloadName",$param) and $param["WorkloadName"] !== null) {
            $this->WorkloadName = $param["WorkloadName"];
        }

        if (array_key_exists("WorkloadType",$param) and $param["WorkloadType"] !== null) {
            $this->WorkloadType = $param["WorkloadType"];
        }

        if (array_key_exists("RiskEventCriticalCount",$param) and $param["RiskEventCriticalCount"] !== null) {
            $this->RiskEventCriticalCount = $param["RiskEventCriticalCount"];
        }

        if (array_key_exists("RiskEventHighCount",$param) and $param["RiskEventHighCount"] !== null) {
            $this->RiskEventHighCount = $param["RiskEventHighCount"];
        }

        if (array_key_exists("RiskEventMiddleCount",$param) and $param["RiskEventMiddleCount"] !== null) {
            $this->RiskEventMiddleCount = $param["RiskEventMiddleCount"];
        }

        if (array_key_exists("RiskEventLowCount",$param) and $param["RiskEventLowCount"] !== null) {
            $this->RiskEventLowCount = $param["RiskEventLowCount"];
        }

        if (array_key_exists("AlarmEventCriticalCount",$param) and $param["AlarmEventCriticalCount"] !== null) {
            $this->AlarmEventCriticalCount = $param["AlarmEventCriticalCount"];
        }

        if (array_key_exists("AlarmEventHighCount",$param) and $param["AlarmEventHighCount"] !== null) {
            $this->AlarmEventHighCount = $param["AlarmEventHighCount"];
        }

        if (array_key_exists("AlarmEventMiddleCount",$param) and $param["AlarmEventMiddleCount"] !== null) {
            $this->AlarmEventMiddleCount = $param["AlarmEventMiddleCount"];
        }

        if (array_key_exists("AlarmEventLowCount",$param) and $param["AlarmEventLowCount"] !== null) {
            $this->AlarmEventLowCount = $param["AlarmEventLowCount"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("NodeInternalIP",$param) and $param["NodeInternalIP"] !== null) {
            $this->NodeInternalIP = $param["NodeInternalIP"];
        }

        if (array_key_exists("NodeExternalIP",$param) and $param["NodeExternalIP"] !== null) {
            $this->NodeExternalIP = $param["NodeExternalIP"];
        }

        if (array_key_exists("ContainerCount",$param) and $param["ContainerCount"] !== null) {
            $this->ContainerCount = $param["ContainerCount"];
        }

        if (array_key_exists("ServiceCount",$param) and $param["ServiceCount"] !== null) {
            $this->ServiceCount = $param["ServiceCount"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("RegionNameEn",$param) and $param["RegionNameEn"] !== null) {
            $this->RegionNameEn = $param["RegionNameEn"];
        }

        if (array_key_exists("AlarmCount",$param) and $param["AlarmCount"] !== null) {
            $this->AlarmCount = $param["AlarmCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
