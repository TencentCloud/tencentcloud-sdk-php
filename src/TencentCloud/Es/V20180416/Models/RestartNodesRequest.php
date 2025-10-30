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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RestartNodes请求参数结构体
 *
 * @method string getInstanceId() 获取集群实例ID
 * @method void setInstanceId(string $InstanceId) 设置集群实例ID
 * @method array getNodeNames() 获取节点名称列表
 * @method void setNodeNames(array $NodeNames) 设置节点名称列表
 * @method boolean getForceRestart() 获取是否强制重启
 * @method void setForceRestart(boolean $ForceRestart) 设置是否强制重启
 * @method string getRestartMode() 获取可选重启模式"in-place","blue-green"，分别表示重启，蓝绿重启；默认值为"in-place"
 * @method void setRestartMode(string $RestartMode) 设置可选重启模式"in-place","blue-green"，分别表示重启，蓝绿重启；默认值为"in-place"
 * @method boolean getIsOffline() 获取节点状态，在蓝绿模式中使用；离线节点蓝绿有风险
 * @method void setIsOffline(boolean $IsOffline) 设置节点状态，在蓝绿模式中使用；离线节点蓝绿有风险
 * @method integer getCvmDelayOnlineTime() 获取cvm延迟上架时间
 * @method void setCvmDelayOnlineTime(integer $CvmDelayOnlineTime) 设置cvm延迟上架时间
 * @method integer getShardAllocationConcurrents() 获取分片迁移并发数
 * @method void setShardAllocationConcurrents(integer $ShardAllocationConcurrents) 设置分片迁移并发数
 * @method integer getShardAllocationBytes() 获取分片迁移并发速度
 * @method void setShardAllocationBytes(integer $ShardAllocationBytes) 设置分片迁移并发速度
 * @method boolean getEnableScheduleRecoverGroup() 获取是否开启置放群组异步任务
 * @method void setEnableScheduleRecoverGroup(boolean $EnableScheduleRecoverGroup) 设置是否开启置放群组异步任务
 * @method EnableScheduleOperationDuration getEnableScheduleOperationDuration() 获取置放群组异步任务时间段
 * @method void setEnableScheduleOperationDuration(EnableScheduleOperationDuration $EnableScheduleOperationDuration) 设置置放群组异步任务时间段
 * @method array getEventTypeIds() 获取事件id列表
 * @method void setEventTypeIds(array $EventTypeIds) 设置事件id列表
 */
class RestartNodesRequest extends AbstractModel
{
    /**
     * @var string 集群实例ID
     */
    public $InstanceId;

    /**
     * @var array 节点名称列表
     */
    public $NodeNames;

    /**
     * @var boolean 是否强制重启
     */
    public $ForceRestart;

    /**
     * @var string 可选重启模式"in-place","blue-green"，分别表示重启，蓝绿重启；默认值为"in-place"
     */
    public $RestartMode;

    /**
     * @var boolean 节点状态，在蓝绿模式中使用；离线节点蓝绿有风险
     */
    public $IsOffline;

    /**
     * @var integer cvm延迟上架时间
     */
    public $CvmDelayOnlineTime;

    /**
     * @var integer 分片迁移并发数
     */
    public $ShardAllocationConcurrents;

    /**
     * @var integer 分片迁移并发速度
     */
    public $ShardAllocationBytes;

    /**
     * @var boolean 是否开启置放群组异步任务
     */
    public $EnableScheduleRecoverGroup;

    /**
     * @var EnableScheduleOperationDuration 置放群组异步任务时间段
     */
    public $EnableScheduleOperationDuration;

    /**
     * @var array 事件id列表
     */
    public $EventTypeIds;

    /**
     * @param string $InstanceId 集群实例ID
     * @param array $NodeNames 节点名称列表
     * @param boolean $ForceRestart 是否强制重启
     * @param string $RestartMode 可选重启模式"in-place","blue-green"，分别表示重启，蓝绿重启；默认值为"in-place"
     * @param boolean $IsOffline 节点状态，在蓝绿模式中使用；离线节点蓝绿有风险
     * @param integer $CvmDelayOnlineTime cvm延迟上架时间
     * @param integer $ShardAllocationConcurrents 分片迁移并发数
     * @param integer $ShardAllocationBytes 分片迁移并发速度
     * @param boolean $EnableScheduleRecoverGroup 是否开启置放群组异步任务
     * @param EnableScheduleOperationDuration $EnableScheduleOperationDuration 置放群组异步任务时间段
     * @param array $EventTypeIds 事件id列表
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("NodeNames",$param) and $param["NodeNames"] !== null) {
            $this->NodeNames = $param["NodeNames"];
        }

        if (array_key_exists("ForceRestart",$param) and $param["ForceRestart"] !== null) {
            $this->ForceRestart = $param["ForceRestart"];
        }

        if (array_key_exists("RestartMode",$param) and $param["RestartMode"] !== null) {
            $this->RestartMode = $param["RestartMode"];
        }

        if (array_key_exists("IsOffline",$param) and $param["IsOffline"] !== null) {
            $this->IsOffline = $param["IsOffline"];
        }

        if (array_key_exists("CvmDelayOnlineTime",$param) and $param["CvmDelayOnlineTime"] !== null) {
            $this->CvmDelayOnlineTime = $param["CvmDelayOnlineTime"];
        }

        if (array_key_exists("ShardAllocationConcurrents",$param) and $param["ShardAllocationConcurrents"] !== null) {
            $this->ShardAllocationConcurrents = $param["ShardAllocationConcurrents"];
        }

        if (array_key_exists("ShardAllocationBytes",$param) and $param["ShardAllocationBytes"] !== null) {
            $this->ShardAllocationBytes = $param["ShardAllocationBytes"];
        }

        if (array_key_exists("EnableScheduleRecoverGroup",$param) and $param["EnableScheduleRecoverGroup"] !== null) {
            $this->EnableScheduleRecoverGroup = $param["EnableScheduleRecoverGroup"];
        }

        if (array_key_exists("EnableScheduleOperationDuration",$param) and $param["EnableScheduleOperationDuration"] !== null) {
            $this->EnableScheduleOperationDuration = new EnableScheduleOperationDuration();
            $this->EnableScheduleOperationDuration->deserialize($param["EnableScheduleOperationDuration"]);
        }

        if (array_key_exists("EventTypeIds",$param) and $param["EventTypeIds"] !== null) {
            $this->EventTypeIds = $param["EventTypeIds"];
        }
    }
}
