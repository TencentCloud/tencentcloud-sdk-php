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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 节点属性
 *
 * @method string getZone() 获取节点所在的可用区。
 * @method void setZone(string $Zone) 设置节点所在的可用区。
 * @method string getNodeName() 获取节点名称。
 * @method void setNodeName(string $NodeName) 设置节点名称。
 * @method string getAddress() 获取节点访问地址。
 * @method void setAddress(string $Address) 设置节点访问地址。
 * @method string getWanServiceAddress() 获取节点公网访问外网地址(IP或域名，示例为IP方式)。
 * @method void setWanServiceAddress(string $WanServiceAddress) 设置节点公网访问外网地址(IP或域名，示例为IP方式)。
 * @method string getRole() 获取节点角色。
- PRIMARY：主节点。
- SECONDARY：从节点。
- READONLY：只读节点。
- ARBITER：仲裁节点。
 * @method void setRole(string $Role) 设置节点角色。
- PRIMARY：主节点。
- SECONDARY：从节点。
- READONLY：只读节点。
- ARBITER：仲裁节点。
 * @method boolean getHidden() 获取节点是否为 Hidden 节点。
- true：Hidden 节点。
- false：非 Hidden 节点。
 * @method void setHidden(boolean $Hidden) 设置节点是否为 Hidden 节点。
- true：Hidden 节点。
- false：非 Hidden 节点。
 * @method string getStatus() 获取节点状态。
- NORMAL：正常运行中。
- STARTUP：正在启动。
- STARTUP2：正在启动，处理中间数据。
- RECOVERING：恢复中，暂不可用。
- DOWN：已掉线。
- UNKNOWN：未知状态。
- ROLLBACK：回滚中。
- REMOVED：已移除。
 * @method void setStatus(string $Status) 设置节点状态。
- NORMAL：正常运行中。
- STARTUP：正在启动。
- STARTUP2：正在启动，处理中间数据。
- RECOVERING：恢复中，暂不可用。
- DOWN：已掉线。
- UNKNOWN：未知状态。
- ROLLBACK：回滚中。
- REMOVED：已移除。
 * @method integer getSlaveDelay() 获取主从同步延迟时间，单位：秒。
 * @method void setSlaveDelay(integer $SlaveDelay) 设置主从同步延迟时间，单位：秒。
 * @method integer getPriority() 获取节点优先级。其取值范围为[0,100]，数值越高，优先级越高。
 * @method void setPriority(integer $Priority) 设置节点优先级。其取值范围为[0,100]，数值越高，优先级越高。
 * @method integer getVotes() 获取节点投票权。
- 1：具有投票权。
- 0：无投票权。
 * @method void setVotes(integer $Votes) 设置节点投票权。
- 1：具有投票权。
- 0：无投票权。
 * @method array getTags() 获取节点标签。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置节点标签。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReplicateSetId() 获取副本集 ID。
 * @method void setReplicateSetId(string $ReplicateSetId) 设置副本集 ID。
 */
class NodeProperty extends AbstractModel
{
    /**
     * @var string 节点所在的可用区。
     */
    public $Zone;

    /**
     * @var string 节点名称。
     */
    public $NodeName;

    /**
     * @var string 节点访问地址。
     */
    public $Address;

    /**
     * @var string 节点公网访问外网地址(IP或域名，示例为IP方式)。
     */
    public $WanServiceAddress;

    /**
     * @var string 节点角色。
- PRIMARY：主节点。
- SECONDARY：从节点。
- READONLY：只读节点。
- ARBITER：仲裁节点。
     */
    public $Role;

    /**
     * @var boolean 节点是否为 Hidden 节点。
- true：Hidden 节点。
- false：非 Hidden 节点。
     */
    public $Hidden;

    /**
     * @var string 节点状态。
- NORMAL：正常运行中。
- STARTUP：正在启动。
- STARTUP2：正在启动，处理中间数据。
- RECOVERING：恢复中，暂不可用。
- DOWN：已掉线。
- UNKNOWN：未知状态。
- ROLLBACK：回滚中。
- REMOVED：已移除。
     */
    public $Status;

    /**
     * @var integer 主从同步延迟时间，单位：秒。
     */
    public $SlaveDelay;

    /**
     * @var integer 节点优先级。其取值范围为[0,100]，数值越高，优先级越高。
     */
    public $Priority;

    /**
     * @var integer 节点投票权。
- 1：具有投票权。
- 0：无投票权。
     */
    public $Votes;

    /**
     * @var array 节点标签。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 副本集 ID。
     */
    public $ReplicateSetId;

    /**
     * @param string $Zone 节点所在的可用区。
     * @param string $NodeName 节点名称。
     * @param string $Address 节点访问地址。
     * @param string $WanServiceAddress 节点公网访问外网地址(IP或域名，示例为IP方式)。
     * @param string $Role 节点角色。
- PRIMARY：主节点。
- SECONDARY：从节点。
- READONLY：只读节点。
- ARBITER：仲裁节点。
     * @param boolean $Hidden 节点是否为 Hidden 节点。
- true：Hidden 节点。
- false：非 Hidden 节点。
     * @param string $Status 节点状态。
- NORMAL：正常运行中。
- STARTUP：正在启动。
- STARTUP2：正在启动，处理中间数据。
- RECOVERING：恢复中，暂不可用。
- DOWN：已掉线。
- UNKNOWN：未知状态。
- ROLLBACK：回滚中。
- REMOVED：已移除。
     * @param integer $SlaveDelay 主从同步延迟时间，单位：秒。
     * @param integer $Priority 节点优先级。其取值范围为[0,100]，数值越高，优先级越高。
     * @param integer $Votes 节点投票权。
- 1：具有投票权。
- 0：无投票权。
     * @param array $Tags 节点标签。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReplicateSetId 副本集 ID。
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("WanServiceAddress",$param) and $param["WanServiceAddress"] !== null) {
            $this->WanServiceAddress = $param["WanServiceAddress"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("Hidden",$param) and $param["Hidden"] !== null) {
            $this->Hidden = $param["Hidden"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SlaveDelay",$param) and $param["SlaveDelay"] !== null) {
            $this->SlaveDelay = $param["SlaveDelay"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Votes",$param) and $param["Votes"] !== null) {
            $this->Votes = $param["Votes"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new NodeTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ReplicateSetId",$param) and $param["ReplicateSetId"] !== null) {
            $this->ReplicateSetId = $param["ReplicateSetId"];
        }
    }
}
