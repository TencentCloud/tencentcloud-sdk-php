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
 * 第三方节点
 *
 * @method string getName() 获取第三方节点名称
 * @method void setName(string $Name) 设置第三方节点名称
 * @method string getNodePoolId() 获取第三方节点所属节点池
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodePoolId(string $NodePoolId) 设置第三方节点所属节点池
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIP() 获取第三方IP地址
 * @method void setIP(string $IP) 设置第三方IP地址
 * @method string getLocation() 获取第三方地域
 * @method void setLocation(string $Location) 设置第三方地域
 * @method string getStatus() 获取第三方节点状态
 * @method void setStatus(string $Status) 设置第三方节点状态
 * @method string getCreatedTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReason() 获取异常原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReason(string $Reason) 设置异常原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getUnschedulable() 获取是否封锁。true表示已封锁，false表示未封锁
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnschedulable(boolean $Unschedulable) 设置是否封锁。true表示已封锁，false表示未封锁
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExternalNode extends AbstractModel
{
    /**
     * @var string 第三方节点名称
     */
    public $Name;

    /**
     * @var string 第三方节点所属节点池
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodePoolId;

    /**
     * @var string 第三方IP地址
     */
    public $IP;

    /**
     * @var string 第三方地域
     */
    public $Location;

    /**
     * @var string 第三方节点状态
     */
    public $Status;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedTime;

    /**
     * @var string 异常原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Reason;

    /**
     * @var boolean 是否封锁。true表示已封锁，false表示未封锁
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Unschedulable;

    /**
     * @param string $Name 第三方节点名称
     * @param string $NodePoolId 第三方节点所属节点池
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IP 第三方IP地址
     * @param string $Location 第三方地域
     * @param string $Status 第三方节点状态
     * @param string $CreatedTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Reason 异常原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Unschedulable 是否封锁。true表示已封锁，false表示未封锁
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
