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
 * 事件中心记录信息
 *
 * @method integer getEventType() 获取<p>1：硬件异常；2：用户变更；3：智能运维</p>
 * @method void setEventType(integer $EventType) 设置<p>1：硬件异常；2：用户变更；3：智能运维</p>
 * @method integer getEventTaskId() 获取<p>事件任务Id</p>
 * @method void setEventTaskId(integer $EventTaskId) 设置<p>事件任务Id</p>
 * @method string getEventName() 获取<p>事件名称</p>
 * @method void setEventName(string $EventName) 设置<p>事件名称</p>
 * @method integer getEventImportance() 获取<p>事件重要程度;0: 一般  1: 重要</p>
 * @method void setEventImportance(integer $EventImportance) 设置<p>事件重要程度;0: 一般  1: 重要</p>
 * @method string getEventContent() 获取<p>事件内容</p>
 * @method void setEventContent(string $EventContent) 设置<p>事件内容</p>
 * @method string getInstanceId() 获取<p>ES集群Id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>ES集群Id</p>
 * @method string getInstanceName() 获取<p>集群名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>集群名称</p>
 * @method string getNodeId() 获取<p>ES集群节点id</p>
 * @method void setNodeId(string $NodeId) 设置<p>ES集群节点id</p>
 * @method string getNodeRole() 获取<p>节点类型</p>
 * @method void setNodeRole(string $NodeRole) 设置<p>节点类型</p>
 * @method integer getEventStatus() 获取<p>事件状态：0:待处理，1:处理中，2:处理完成</p>
 * @method void setEventStatus(integer $EventStatus) 设置<p>事件状态：0:待处理，1:处理中，2:处理完成</p>
 * @method string getStartTime() 获取<p>事件发生时间</p>
 * @method void setStartTime(string $StartTime) 设置<p>事件发生时间</p>
 * @method string getEndTime() 获取<p>事件结束时间</p>
 * @method void setEndTime(string $EndTime) 设置<p>事件结束时间</p>
 * @method integer getSubEventType() 获取<p>子事件类型</p>
 * @method void setSubEventType(integer $SubEventType) 设置<p>子事件类型</p>
 * @method string getSubEventName() 获取<p>子事件名称</p>
 * @method void setSubEventName(string $SubEventName) 设置<p>子事件名称</p>
 */
class EventDataInfoOverview extends AbstractModel
{
    /**
     * @var integer <p>1：硬件异常；2：用户变更；3：智能运维</p>
     */
    public $EventType;

    /**
     * @var integer <p>事件任务Id</p>
     */
    public $EventTaskId;

    /**
     * @var string <p>事件名称</p>
     */
    public $EventName;

    /**
     * @var integer <p>事件重要程度;0: 一般  1: 重要</p>
     */
    public $EventImportance;

    /**
     * @var string <p>事件内容</p>
     */
    public $EventContent;

    /**
     * @var string <p>ES集群Id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>集群名称</p>
     */
    public $InstanceName;

    /**
     * @var string <p>ES集群节点id</p>
     */
    public $NodeId;

    /**
     * @var string <p>节点类型</p>
     */
    public $NodeRole;

    /**
     * @var integer <p>事件状态：0:待处理，1:处理中，2:处理完成</p>
     */
    public $EventStatus;

    /**
     * @var string <p>事件发生时间</p>
     */
    public $StartTime;

    /**
     * @var string <p>事件结束时间</p>
     */
    public $EndTime;

    /**
     * @var integer <p>子事件类型</p>
     */
    public $SubEventType;

    /**
     * @var string <p>子事件名称</p>
     */
    public $SubEventName;

    /**
     * @param integer $EventType <p>1：硬件异常；2：用户变更；3：智能运维</p>
     * @param integer $EventTaskId <p>事件任务Id</p>
     * @param string $EventName <p>事件名称</p>
     * @param integer $EventImportance <p>事件重要程度;0: 一般  1: 重要</p>
     * @param string $EventContent <p>事件内容</p>
     * @param string $InstanceId <p>ES集群Id</p>
     * @param string $InstanceName <p>集群名称</p>
     * @param string $NodeId <p>ES集群节点id</p>
     * @param string $NodeRole <p>节点类型</p>
     * @param integer $EventStatus <p>事件状态：0:待处理，1:处理中，2:处理完成</p>
     * @param string $StartTime <p>事件发生时间</p>
     * @param string $EndTime <p>事件结束时间</p>
     * @param integer $SubEventType <p>子事件类型</p>
     * @param string $SubEventName <p>子事件名称</p>
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
        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("EventTaskId",$param) and $param["EventTaskId"] !== null) {
            $this->EventTaskId = $param["EventTaskId"];
        }

        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("EventImportance",$param) and $param["EventImportance"] !== null) {
            $this->EventImportance = $param["EventImportance"];
        }

        if (array_key_exists("EventContent",$param) and $param["EventContent"] !== null) {
            $this->EventContent = $param["EventContent"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("NodeRole",$param) and $param["NodeRole"] !== null) {
            $this->NodeRole = $param["NodeRole"];
        }

        if (array_key_exists("EventStatus",$param) and $param["EventStatus"] !== null) {
            $this->EventStatus = $param["EventStatus"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SubEventType",$param) and $param["SubEventType"] !== null) {
            $this->SubEventType = $param["SubEventType"];
        }

        if (array_key_exists("SubEventName",$param) and $param["SubEventName"] !== null) {
            $this->SubEventName = $param["SubEventName"];
        }
    }
}
