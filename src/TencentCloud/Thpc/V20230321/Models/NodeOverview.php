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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 节点概览信息。
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getInstanceId() 获取节点实例ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置节点实例ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZone() 获取节点所在可用区信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZone(string $Zone) 设置节点所在可用区信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeState() 获取节点状态。<li>SUBMITTED：已完成提交。</li><li>CREATING：创建中。</li><li>CREATED：完成创建。</li><li>INITING：初始化中。</li><li>INIT_FAILED：初始化失败。</li><li>RUNNING：运行中。</li><li>DELETING：销毁中。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeState(string $NodeState) 设置节点状态。<li>SUBMITTED：已完成提交。</li><li>CREATING：创建中。</li><li>CREATED：完成创建。</li><li>INITING：初始化中。</li><li>INIT_FAILED：初始化失败。</li><li>RUNNING：运行中。</li><li>DELETING：销毁中。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImageId() 获取镜像ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageId(string $ImageId) 设置镜像ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQueueName() 获取节点所属队列名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueueName(string $QueueName) 设置节点所属队列名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeRole() 获取节点角色。<li>Manager：管控节点。</li><li>Compute：计算节点。</li><li>Login：登录节点。</li><li>ManagerBackup：备用管控节点。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeRole(string $NodeRole) 设置节点角色。<li>Manager：管控节点。</li><li>Compute：计算节点。</li><li>Login：登录节点。</li><li>ManagerBackup：备用管控节点。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeType() 获取节点类型。<li>STATIC：静态节点。</li><li>DYNAMIC：弹性节点。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeType(string $NodeType) 设置节点类型。<li>STATIC：静态节点。</li><li>DYNAMIC：弹性节点。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeId() 获取thpc集群节点id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeId(string $NodeId) 设置thpc集群节点id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeAllocateState() 获取节点的工作状态
 * @method void setNodeAllocateState(string $NodeAllocateState) 设置节点的工作状态
 * @method string getNodeName() 获取节点的名称
 * @method void setNodeName(string $NodeName) 设置节点的名称
 * @method string getCreateTime() 获取节点的创建时间
 * @method void setCreateTime(string $CreateTime) 设置节点的创建时间
 */
class NodeOverview extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 节点实例ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 节点所在可用区信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Zone;

    /**
     * @var string 节点状态。<li>SUBMITTED：已完成提交。</li><li>CREATING：创建中。</li><li>CREATED：完成创建。</li><li>INITING：初始化中。</li><li>INIT_FAILED：初始化失败。</li><li>RUNNING：运行中。</li><li>DELETING：销毁中。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeState;

    /**
     * @var string 镜像ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageId;

    /**
     * @var string 节点所属队列名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueueName;

    /**
     * @var string 节点角色。<li>Manager：管控节点。</li><li>Compute：计算节点。</li><li>Login：登录节点。</li><li>ManagerBackup：备用管控节点。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeRole;

    /**
     * @var string 节点类型。<li>STATIC：静态节点。</li><li>DYNAMIC：弹性节点。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeType;

    /**
     * @var string thpc集群节点id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeId;

    /**
     * @var string 节点的工作状态
     */
    public $NodeAllocateState;

    /**
     * @var string 节点的名称
     */
    public $NodeName;

    /**
     * @var string 节点的创建时间
     */
    public $CreateTime;

    /**
     * @param string $ClusterId 集群ID
     * @param string $InstanceId 节点实例ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Zone 节点所在可用区信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeState 节点状态。<li>SUBMITTED：已完成提交。</li><li>CREATING：创建中。</li><li>CREATED：完成创建。</li><li>INITING：初始化中。</li><li>INIT_FAILED：初始化失败。</li><li>RUNNING：运行中。</li><li>DELETING：销毁中。</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImageId 镜像ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QueueName 节点所属队列名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeRole 节点角色。<li>Manager：管控节点。</li><li>Compute：计算节点。</li><li>Login：登录节点。</li><li>ManagerBackup：备用管控节点。</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeType 节点类型。<li>STATIC：静态节点。</li><li>DYNAMIC：弹性节点。</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeId thpc集群节点id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeAllocateState 节点的工作状态
     * @param string $NodeName 节点的名称
     * @param string $CreateTime 节点的创建时间
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

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("NodeState",$param) and $param["NodeState"] !== null) {
            $this->NodeState = $param["NodeState"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("NodeRole",$param) and $param["NodeRole"] !== null) {
            $this->NodeRole = $param["NodeRole"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("NodeAllocateState",$param) and $param["NodeAllocateState"] !== null) {
            $this->NodeAllocateState = $param["NodeAllocateState"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
