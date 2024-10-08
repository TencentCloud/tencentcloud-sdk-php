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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * NodeInfo
 *
 * @method string getIp() 获取用户IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIp(string $Ip) 设置用户IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取节点状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置节点状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeName() 获取节点角色名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeName(string $NodeName) 设置节点角色名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getComponentName() 获取组件名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComponentName(string $ComponentName) 设置组件名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeRole() 获取节点角色
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeRole(string $NodeRole) 设置节点角色
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastRestartTime() 获取节点上次重启的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastRestartTime(string $LastRestartTime) 设置节点上次重启的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZone() 获取节点所在可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZone(string $Zone) 设置节点所在可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getId() 获取Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置Id
注意：此字段可能返回 null，表示取不到有效值。
 */
class NodeInfo extends AbstractModel
{
    /**
     * @var string 用户IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ip;

    /**
     * @var integer 节点状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 节点角色名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeName;

    /**
     * @var string 组件名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComponentName;

    /**
     * @var string 节点角色
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeRole;

    /**
     * @var string 节点上次重启的时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastRestartTime;

    /**
     * @var string 节点所在可用区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Zone;

    /**
     * @var string Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @param string $Ip 用户IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 节点状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeName 节点角色名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ComponentName 组件名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeRole 节点角色
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastRestartTime 节点上次重启的时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Zone 节点所在可用区
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Id Id
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("ComponentName",$param) and $param["ComponentName"] !== null) {
            $this->ComponentName = $param["ComponentName"];
        }

        if (array_key_exists("NodeRole",$param) and $param["NodeRole"] !== null) {
            $this->NodeRole = $param["NodeRole"];
        }

        if (array_key_exists("LastRestartTime",$param) and $param["LastRestartTime"] !== null) {
            $this->LastRestartTime = $param["LastRestartTime"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
