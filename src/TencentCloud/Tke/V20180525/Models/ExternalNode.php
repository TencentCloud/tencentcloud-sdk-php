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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 注册节点
 *
 * @method string getName() 获取<p>注册节点名称</p>
 * @method void setName(string $Name) 设置<p>注册节点名称</p>
 * @method string getNodePoolId() 获取<p>注册节点所属节点池</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodePoolId(string $NodePoolId) 设置<p>注册节点所属节点池</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIP() 获取<p>注册节点IP地址</p>
 * @method void setIP(string $IP) 设置<p>注册节点IP地址</p>
 * @method string getLocation() 获取<p>注册节点地域</p>
 * @method void setLocation(string $Location) 设置<p>注册节点地域</p>
 * @method string getStatus() 获取<p>注册节点状态</p><p>枚举值：</p><ul><li>Running： 运行中</li><li>Failed： 异常状态</li><li>Terminating： 删除中</li><li>Draining： 驱逐中</li></ul>
 * @method void setStatus(string $Status) 设置<p>注册节点状态</p><p>枚举值：</p><ul><li>Running： 运行中</li><li>Failed： 异常状态</li><li>Terminating： 删除中</li><li>Draining： 驱逐中</li></ul>
 * @method string getCreatedTime() 获取<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReason() 获取<p>异常原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReason(string $Reason) 设置<p>异常原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getUnschedulable() 获取<p>是否封锁。true表示已封锁，false表示未封锁</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnschedulable(boolean $Unschedulable) 设置<p>是否封锁。true表示已封锁，false表示未封锁</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExternalNode extends AbstractModel
{
    /**
     * @var string <p>注册节点名称</p>
     */
    public $Name;

    /**
     * @var string <p>注册节点所属节点池</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodePoolId;

    /**
     * @var string <p>注册节点IP地址</p>
     */
    public $IP;

    /**
     * @var string <p>注册节点地域</p>
     */
    public $Location;

    /**
     * @var string <p>注册节点状态</p><p>枚举值：</p><ul><li>Running： 运行中</li><li>Failed： 异常状态</li><li>Terminating： 删除中</li><li>Draining： 驱逐中</li></ul>
     */
    public $Status;

    /**
     * @var string <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedTime;

    /**
     * @var string <p>异常原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Reason;

    /**
     * @var boolean <p>是否封锁。true表示已封锁，false表示未封锁</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Unschedulable;

    /**
     * @param string $Name <p>注册节点名称</p>
     * @param string $NodePoolId <p>注册节点所属节点池</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IP <p>注册节点IP地址</p>
     * @param string $Location <p>注册节点地域</p>
     * @param string $Status <p>注册节点状态</p><p>枚举值：</p><ul><li>Running： 运行中</li><li>Failed： 异常状态</li><li>Terminating： 删除中</li><li>Draining： 驱逐中</li></ul>
     * @param string $CreatedTime <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Reason <p>异常原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Unschedulable <p>是否封锁。true表示已封锁，false表示未封锁</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("NodePoolId",$param) and $param["NodePoolId"] !== null) {
            $this->NodePoolId = $param["NodePoolId"];
        }

        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("Unschedulable",$param) and $param["Unschedulable"] !== null) {
            $this->Unschedulable = $param["Unschedulable"];
        }
    }
}
