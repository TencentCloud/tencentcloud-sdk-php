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
 * 集群容器列表项
 *
 * @method integer getAppID() 获取<p>appid</p>
 * @method void setAppID(integer $AppID) 设置<p>appid</p>
 * @method string getAssetId() 获取<p>资产id</p>
 * @method void setAssetId(string $AssetId) 设置<p>资产id</p>
 * @method string getContainerId() 获取<p>容器id</p>
 * @method void setContainerId(string $ContainerId) 设置<p>容器id</p>
 * @method string getContainerName() 获取<p>容器名称</p>
 * @method void setContainerName(string $ContainerName) 设置<p>容器名称</p>
 * @method string getRunStatus() 获取<p>运行状态</p>
 * @method void setRunStatus(string $RunStatus) 设置<p>运行状态</p>
 * @method string getNodeId() 获取<p>节点id</p>
 * @method void setNodeId(string $NodeId) 设置<p>节点id</p>
 * @method string getNodeType() 获取<p>节点类型</p>
 * @method void setNodeType(string $NodeType) 设置<p>节点类型</p>
 * @method string getPodUid() 获取<p>pod唯一id</p>
 * @method void setPodUid(string $PodUid) 设置<p>pod唯一id</p>
 * @method string getPodName() 获取<p>pod名称</p>
 * @method void setPodName(string $PodName) 设置<p>pod名称</p>
 * @method string getImageId() 获取<p>镜像id</p>
 * @method void setImageId(string $ImageId) 设置<p>镜像id</p>
 * @method string getImageName() 获取<p>镜像名称</p>
 * @method void setImageName(string $ImageName) 设置<p>镜像名称</p>
 * @method string getIsolateStatus() 获取<p>隔离状态</p>
 * @method void setIsolateStatus(string $IsolateStatus) 设置<p>隔离状态</p>
 * @method integer getRiskEventCriticalCount() 获取<p>严重风险数量</p>
 * @method void setRiskEventCriticalCount(integer $RiskEventCriticalCount) 设置<p>严重风险数量</p>
 * @method integer getRiskEventHighCount() 获取<p>高危风险数量</p>
 * @method void setRiskEventHighCount(integer $RiskEventHighCount) 设置<p>高危风险数量</p>
 * @method integer getRiskEventMiddleCount() 获取<p>中危风险数量</p>
 * @method void setRiskEventMiddleCount(integer $RiskEventMiddleCount) 设置<p>中危风险数量</p>
 * @method integer getRiskEventLowCount() 获取<p>低危风险数量</p>
 * @method void setRiskEventLowCount(integer $RiskEventLowCount) 设置<p>低危风险数量</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method integer getAlarmCount() 获取<p>关联告警数</p>
 * @method void setAlarmCount(integer $AlarmCount) 设置<p>关联告警数</p>
 */
class ClusterContainerListItem extends AbstractModel
{
    /**
     * @var integer <p>appid</p>
     */
    public $AppID;

    /**
     * @var string <p>资产id</p>
     * @deprecated
     */
    public $AssetId;

    /**
     * @var string <p>容器id</p>
     */
    public $ContainerId;

    /**
     * @var string <p>容器名称</p>
     */
    public $ContainerName;

    /**
     * @var string <p>运行状态</p>
     */
    public $RunStatus;

    /**
     * @var string <p>节点id</p>
     */
    public $NodeId;

    /**
     * @var string <p>节点类型</p>
     */
    public $NodeType;

    /**
     * @var string <p>pod唯一id</p>
     */
    public $PodUid;

    /**
     * @var string <p>pod名称</p>
     */
    public $PodName;

    /**
     * @var string <p>镜像id</p>
     */
    public $ImageId;

    /**
     * @var string <p>镜像名称</p>
     */
    public $ImageName;

    /**
     * @var string <p>隔离状态</p>
     */
    public $IsolateStatus;

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
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>关联告警数</p>
     */
    public $AlarmCount;

    /**
     * @param integer $AppID <p>appid</p>
     * @param string $AssetId <p>资产id</p>
     * @param string $ContainerId <p>容器id</p>
     * @param string $ContainerName <p>容器名称</p>
     * @param string $RunStatus <p>运行状态</p>
     * @param string $NodeId <p>节点id</p>
     * @param string $NodeType <p>节点类型</p>
     * @param string $PodUid <p>pod唯一id</p>
     * @param string $PodName <p>pod名称</p>
     * @param string $ImageId <p>镜像id</p>
     * @param string $ImageName <p>镜像名称</p>
     * @param string $IsolateStatus <p>隔离状态</p>
     * @param integer $RiskEventCriticalCount <p>严重风险数量</p>
     * @param integer $RiskEventHighCount <p>高危风险数量</p>
     * @param integer $RiskEventMiddleCount <p>中危风险数量</p>
     * @param integer $RiskEventLowCount <p>低危风险数量</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param integer $AlarmCount <p>关联告警数</p>
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
        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("ContainerId",$param) and $param["ContainerId"] !== null) {
            $this->ContainerId = $param["ContainerId"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("RunStatus",$param) and $param["RunStatus"] !== null) {
            $this->RunStatus = $param["RunStatus"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("PodUid",$param) and $param["PodUid"] !== null) {
            $this->PodUid = $param["PodUid"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("IsolateStatus",$param) and $param["IsolateStatus"] !== null) {
            $this->IsolateStatus = $param["IsolateStatus"];
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("AlarmCount",$param) and $param["AlarmCount"] !== null) {
            $this->AlarmCount = $param["AlarmCount"];
        }
    }
}
