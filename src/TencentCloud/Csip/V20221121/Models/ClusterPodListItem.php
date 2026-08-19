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
 * 集群pod列表项
 *
 * @method string getAssetId() 获取<p>资产id</p>
 * @method void setAssetId(string $AssetId) 设置<p>资产id</p>
 * @method integer getAppID() 获取<p>appid</p>
 * @method void setAppID(integer $AppID) 设置<p>appid</p>
 * @method string getPodUid() 获取<p>pod唯一id</p>
 * @method void setPodUid(string $PodUid) 设置<p>pod唯一id</p>
 * @method string getPodName() 获取<p>pod名称</p>
 * @method void setPodName(string $PodName) 设置<p>pod名称</p>
 * @method array getPodIPs() 获取<p>podip数组</p>
 * @method void setPodIPs(array $PodIPs) 设置<p>podip数组</p>
 * @method string getRunStatus() 获取<p>pod状态</p>
 * @method void setRunStatus(string $RunStatus) 设置<p>pod状态</p>
 * @method integer getDefendCoresCount() 获取<p>防护核数</p>
 * @method void setDefendCoresCount(integer $DefendCoresCount) 设置<p>防护核数</p>
 * @method string getNodeId() 获取<p>节点id</p>
 * @method void setNodeId(string $NodeId) 设置<p>节点id</p>
 * @method string getNodeType() 获取<p>节点类型</p>
 * @method void setNodeType(string $NodeType) 设置<p>节点类型</p>
 * @method string getWorkloadName() 获取<p>负载名称</p>
 * @method void setWorkloadName(string $WorkloadName) 设置<p>负载名称</p>
 * @method string getWorkloadType() 获取<p>负载类型</p>
 * @method void setWorkloadType(string $WorkloadType) 设置<p>负载类型</p>
 * @method string getNamespace() 获取<p>命名空间</p>
 * @method void setNamespace(string $Namespace) 设置<p>命名空间</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getUniqueID() 获取<p>Pod唯一标识ID</p>
 * @method void setUniqueID(string $UniqueID) 设置<p>Pod唯一标识ID</p>
 * @method integer getRiskEventCriticalCount() 获取<p>严重风险数量</p>
 * @method void setRiskEventCriticalCount(integer $RiskEventCriticalCount) 设置<p>严重风险数量</p>
 * @method integer getRiskEventHighCount() 获取<p>高危风险数量</p>
 * @method void setRiskEventHighCount(integer $RiskEventHighCount) 设置<p>高危风险数量</p>
 * @method integer getRiskEventMiddleCount() 获取<p>中危风险数量</p>
 * @method void setRiskEventMiddleCount(integer $RiskEventMiddleCount) 设置<p>中危风险数量</p>
 * @method integer getRiskEventLowCount() 获取<p>低危风险数量</p>
 * @method void setRiskEventLowCount(integer $RiskEventLowCount) 设置<p>低危风险数量</p>
 * @method integer getAlarmEventCriticalCount() 获取<p>严重告警数量</p>
 * @method void setAlarmEventCriticalCount(integer $AlarmEventCriticalCount) 设置<p>严重告警数量</p>
 * @method integer getAlarmEventHighCount() 获取<p>高危告警数量</p>
 * @method void setAlarmEventHighCount(integer $AlarmEventHighCount) 设置<p>高危告警数量</p>
 * @method integer getAlarmEventMiddleCount() 获取<p>中危告警数量</p>
 * @method void setAlarmEventMiddleCount(integer $AlarmEventMiddleCount) 设置<p>中危告警数量</p>
 * @method integer getAlarmEventLowCount() 获取<p>低危告警数量</p>
 * @method void setAlarmEventLowCount(integer $AlarmEventLowCount) 设置<p>低危告警数量</p>
 * @method array getContainerList() 获取<p>关联容器列表</p>
 * @method void setContainerList(array $ContainerList) 设置<p>关联容器列表</p>
 * @method integer getAlarmCount() 获取<p>关联告警数</p>
 * @method void setAlarmCount(integer $AlarmCount) 设置<p>关联告警数</p>
 * @method integer getCoresCount() 获取<p>核数</p><p>单位：毫核</p>
 * @method void setCoresCount(integer $CoresCount) 设置<p>核数</p><p>单位：毫核</p>
 */
class ClusterPodListItem extends AbstractModel
{
    /**
     * @var string <p>资产id</p>
     * @deprecated
     */
    public $AssetId;

    /**
     * @var integer <p>appid</p>
     */
    public $AppID;

    /**
     * @var string <p>pod唯一id</p>
     */
    public $PodUid;

    /**
     * @var string <p>pod名称</p>
     */
    public $PodName;

    /**
     * @var array <p>podip数组</p>
     */
    public $PodIPs;

    /**
     * @var string <p>pod状态</p>
     */
    public $RunStatus;

    /**
     * @var integer <p>防护核数</p>
     * @deprecated
     */
    public $DefendCoresCount;

    /**
     * @var string <p>节点id</p>
     */
    public $NodeId;

    /**
     * @var string <p>节点类型</p>
     */
    public $NodeType;

    /**
     * @var string <p>负载名称</p>
     */
    public $WorkloadName;

    /**
     * @var string <p>负载类型</p>
     */
    public $WorkloadType;

    /**
     * @var string <p>命名空间</p>
     */
    public $Namespace;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Pod唯一标识ID</p>
     */
    public $UniqueID;

    /**
     * @var integer <p>严重风险数量</p>
     * @deprecated
     */
    public $RiskEventCriticalCount;

    /**
     * @var integer <p>高危风险数量</p>
     * @deprecated
     */
    public $RiskEventHighCount;

    /**
     * @var integer <p>中危风险数量</p>
     * @deprecated
     */
    public $RiskEventMiddleCount;

    /**
     * @var integer <p>低危风险数量</p>
     * @deprecated
     */
    public $RiskEventLowCount;

    /**
     * @var integer <p>严重告警数量</p>
     * @deprecated
     */
    public $AlarmEventCriticalCount;

    /**
     * @var integer <p>高危告警数量</p>
     * @deprecated
     */
    public $AlarmEventHighCount;

    /**
     * @var integer <p>中危告警数量</p>
     * @deprecated
     */
    public $AlarmEventMiddleCount;

    /**
     * @var integer <p>低危告警数量</p>
     * @deprecated
     */
    public $AlarmEventLowCount;

    /**
     * @var array <p>关联容器列表</p>
     */
    public $ContainerList;

    /**
     * @var integer <p>关联告警数</p>
     */
    public $AlarmCount;

    /**
     * @var integer <p>核数</p><p>单位：毫核</p>
     */
    public $CoresCount;

    /**
     * @param string $AssetId <p>资产id</p>
     * @param integer $AppID <p>appid</p>
     * @param string $PodUid <p>pod唯一id</p>
     * @param string $PodName <p>pod名称</p>
     * @param array $PodIPs <p>podip数组</p>
     * @param string $RunStatus <p>pod状态</p>
     * @param integer $DefendCoresCount <p>防护核数</p>
     * @param string $NodeId <p>节点id</p>
     * @param string $NodeType <p>节点类型</p>
     * @param string $WorkloadName <p>负载名称</p>
     * @param string $WorkloadType <p>负载类型</p>
     * @param string $Namespace <p>命名空间</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $UniqueID <p>Pod唯一标识ID</p>
     * @param integer $RiskEventCriticalCount <p>严重风险数量</p>
     * @param integer $RiskEventHighCount <p>高危风险数量</p>
     * @param integer $RiskEventMiddleCount <p>中危风险数量</p>
     * @param integer $RiskEventLowCount <p>低危风险数量</p>
     * @param integer $AlarmEventCriticalCount <p>严重告警数量</p>
     * @param integer $AlarmEventHighCount <p>高危告警数量</p>
     * @param integer $AlarmEventMiddleCount <p>中危告警数量</p>
     * @param integer $AlarmEventLowCount <p>低危告警数量</p>
     * @param array $ContainerList <p>关联容器列表</p>
     * @param integer $AlarmCount <p>关联告警数</p>
     * @param integer $CoresCount <p>核数</p><p>单位：毫核</p>
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
        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("PodUid",$param) and $param["PodUid"] !== null) {
            $this->PodUid = $param["PodUid"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("PodIPs",$param) and $param["PodIPs"] !== null) {
            $this->PodIPs = $param["PodIPs"];
        }

        if (array_key_exists("RunStatus",$param) and $param["RunStatus"] !== null) {
            $this->RunStatus = $param["RunStatus"];
        }

        if (array_key_exists("DefendCoresCount",$param) and $param["DefendCoresCount"] !== null) {
            $this->DefendCoresCount = $param["DefendCoresCount"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("WorkloadName",$param) and $param["WorkloadName"] !== null) {
            $this->WorkloadName = $param["WorkloadName"];
        }

        if (array_key_exists("WorkloadType",$param) and $param["WorkloadType"] !== null) {
            $this->WorkloadType = $param["WorkloadType"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UniqueID",$param) and $param["UniqueID"] !== null) {
            $this->UniqueID = $param["UniqueID"];
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

        if (array_key_exists("ContainerList",$param) and $param["ContainerList"] !== null) {
            $this->ContainerList = [];
            foreach ($param["ContainerList"] as $key => $value){
                $obj = new ClusterContainerListItem();
                $obj->deserialize($value);
                array_push($this->ContainerList, $obj);
            }
        }

        if (array_key_exists("AlarmCount",$param) and $param["AlarmCount"] !== null) {
            $this->AlarmCount = $param["AlarmCount"];
        }

        if (array_key_exists("CoresCount",$param) and $param["CoresCount"] !== null) {
            $this->CoresCount = $param["CoresCount"];
        }
    }
}
