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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例事件信息
 *
 * @method string getEventName() 获取事件名称。
 * @method void setEventName(string $EventName) 设置事件名称。
 * @method string getEventStatus() 获取事件状态。
 * @method void setEventStatus(string $EventStatus) 设置事件状态。
 * @method string getOccurTime() 获取事件发生时间。
 * @method void setOccurTime(string $OccurTime) 设置事件发生时间。
 * @method string getInstanceId() 获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
 * @method string getNodeId() 获取节点ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeId(string $NodeId) 设置节点ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstEventInfo extends AbstractModel
{
    /**
     * @var string 事件名称。
     */
    public $EventName;

    /**
     * @var string 事件状态。
     */
    public $EventStatus;

    /**
     * @var string 事件发生时间。
     */
    public $OccurTime;

    /**
     * @var string 实例ID。
     */
    public $InstanceId;

    /**
     * @var string 节点ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeId;

    /**
     * @param string $EventName 事件名称。
     * @param string $EventStatus 事件状态。
     * @param string $OccurTime 事件发生时间。
     * @param string $InstanceId 实例ID。
     * @param string $NodeId 节点ID
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
        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("EventStatus",$param) and $param["EventStatus"] !== null) {
            $this->EventStatus = $param["EventStatus"];
        }

        if (array_key_exists("OccurTime",$param) and $param["OccurTime"] !== null) {
            $this->OccurTime = $param["OccurTime"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }
    }
}
