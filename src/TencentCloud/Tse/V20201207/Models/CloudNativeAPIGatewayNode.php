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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云原生API网关节点信息。
 *
 * @method string getNodeId() 获取云原生网关节点 id
 * @method void setNodeId(string $NodeId) 设置云原生网关节点 id
 * @method string getNodeIp() 获取节点 ip
 * @method void setNodeIp(string $NodeIp) 设置节点 ip
 * @method string getZoneId() 获取Zone id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneId(string $ZoneId) 设置Zone id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZone() 获取Zone
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZone(string $Zone) 设置Zone
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupId() 获取分组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupId(string $GroupId) 设置分组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupName() 获取分组名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupName(string $GroupName) 设置分组名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 */
class CloudNativeAPIGatewayNode extends AbstractModel
{
    /**
     * @var string 云原生网关节点 id
     */
    public $NodeId;

    /**
     * @var string 节点 ip
     */
    public $NodeIp;

    /**
     * @var string Zone id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneId;

    /**
     * @var string Zone
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Zone;

    /**
     * @var string 分组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupId;

    /**
     * @var string 分组名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupName;

    /**
     * @var string 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @param string $NodeId 云原生网关节点 id
     * @param string $NodeIp 节点 ip
     * @param string $ZoneId Zone id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Zone Zone
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupId 分组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupName 分组名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 状态
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
        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("NodeIp",$param) and $param["NodeIp"] !== null) {
            $this->NodeIp = $param["NodeIp"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
