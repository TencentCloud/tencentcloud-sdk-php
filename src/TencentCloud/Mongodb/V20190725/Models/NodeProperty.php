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
 * @method string getZone() 获取<p>节点所在的可用区。</p>
 * @method void setZone(string $Zone) 设置<p>节点所在的可用区。</p>
 * @method string getNodeName() 获取<p>节点名称。</p>
 * @method void setNodeName(string $NodeName) 设置<p>节点名称。</p>
 * @method string getAddress() 获取<p>节点访问地址。</p>
 * @method void setAddress(string $Address) 设置<p>节点访问地址。</p>
 * @method string getWanServiceAddress() 获取<p>节点公网访问外网地址(IP或域名，示例为IP方式)。</p>
 * @method void setWanServiceAddress(string $WanServiceAddress) 设置<p>节点公网访问外网地址(IP或域名，示例为IP方式)。</p>
 * @method string getRole() 获取<p>节点角色。</p><ul><li>PRIMARY：主节点。</li><li>SECONDARY：从节点。</li><li>READONLY：只读节点。</li><li>ARBITER：仲裁节点。</li></ul>
 * @method void setRole(string $Role) 设置<p>节点角色。</p><ul><li>PRIMARY：主节点。</li><li>SECONDARY：从节点。</li><li>READONLY：只读节点。</li><li>ARBITER：仲裁节点。</li></ul>
 * @method boolean getHidden() 获取<p>节点是否为 Hidden 节点。</p><ul><li>true：Hidden 节点。</li><li>false：非 Hidden 节点。</li></ul>
 * @method void setHidden(boolean $Hidden) 设置<p>节点是否为 Hidden 节点。</p><ul><li>true：Hidden 节点。</li><li>false：非 Hidden 节点。</li></ul>
 * @method string getStatus() 获取<p>节点状态。</p><ul><li>NORMAL：正常运行中。</li><li>STARTUP：正在启动。</li><li>STARTUP2：正在启动，处理中间数据。</li><li>RECOVERING：恢复中，暂不可用。</li><li>DOWN：已掉线。</li><li>UNKNOWN：未知状态。</li><li>ROLLBACK：回滚中。</li><li>REMOVED：已移除。</li></ul>
 * @method void setStatus(string $Status) 设置<p>节点状态。</p><ul><li>NORMAL：正常运行中。</li><li>STARTUP：正在启动。</li><li>STARTUP2：正在启动，处理中间数据。</li><li>RECOVERING：恢复中，暂不可用。</li><li>DOWN：已掉线。</li><li>UNKNOWN：未知状态。</li><li>ROLLBACK：回滚中。</li><li>REMOVED：已移除。</li></ul>
 * @method integer getSlaveDelay() 获取<p>主从同步延迟时间，单位：秒。</p>
 * @method void setSlaveDelay(integer $SlaveDelay) 设置<p>主从同步延迟时间，单位：秒。</p>
 * @method integer getPriority() 获取<p>节点优先级。其取值范围为[0,100]，数值越高，优先级越高。</p>
 * @method void setPriority(integer $Priority) 设置<p>节点优先级。其取值范围为[0,100]，数值越高，优先级越高。</p>
 * @method integer getVotes() 获取<p>节点投票权。</p><ul><li>1：具有投票权。</li><li>0：无投票权。</li></ul>
 * @method void setVotes(integer $Votes) 设置<p>节点投票权。</p><ul><li>1：具有投票权。</li><li>0：无投票权。</li></ul>
 * @method array getTags() 获取<p>节点标签。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置<p>节点标签。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReplicateSetId() 获取<p>副本集 ID。</p>
 * @method void setReplicateSetId(string $ReplicateSetId) 设置<p>副本集 ID。</p>
 */
class NodeProperty extends AbstractModel
{
    /**
     * @var string <p>节点所在的可用区。</p>
     */
    public $Zone;

    /**
     * @var string <p>节点名称。</p>
     */
    public $NodeName;

    /**
     * @var string <p>节点访问地址。</p>
     */
    public $Address;

    /**
     * @var string <p>节点公网访问外网地址(IP或域名，示例为IP方式)。</p>
     */
    public $WanServiceAddress;

    /**
     * @var string <p>节点角色。</p><ul><li>PRIMARY：主节点。</li><li>SECONDARY：从节点。</li><li>READONLY：只读节点。</li><li>ARBITER：仲裁节点。</li></ul>
     */
    public $Role;

    /**
     * @var boolean <p>节点是否为 Hidden 节点。</p><ul><li>true：Hidden 节点。</li><li>false：非 Hidden 节点。</li></ul>
     */
    public $Hidden;

    /**
     * @var string <p>节点状态。</p><ul><li>NORMAL：正常运行中。</li><li>STARTUP：正在启动。</li><li>STARTUP2：正在启动，处理中间数据。</li><li>RECOVERING：恢复中，暂不可用。</li><li>DOWN：已掉线。</li><li>UNKNOWN：未知状态。</li><li>ROLLBACK：回滚中。</li><li>REMOVED：已移除。</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>主从同步延迟时间，单位：秒。</p>
     */
    public $SlaveDelay;

    /**
     * @var integer <p>节点优先级。其取值范围为[0,100]，数值越高，优先级越高。</p>
     */
    public $Priority;

    /**
     * @var integer <p>节点投票权。</p><ul><li>1：具有投票权。</li><li>0：无投票权。</li></ul>
     */
    public $Votes;

    /**
     * @var array <p>节点标签。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string <p>副本集 ID。</p>
     */
    public $ReplicateSetId;

    /**
     * @param string $Zone <p>节点所在的可用区。</p>
     * @param string $NodeName <p>节点名称。</p>
     * @param string $Address <p>节点访问地址。</p>
     * @param string $WanServiceAddress <p>节点公网访问外网地址(IP或域名，示例为IP方式)。</p>
     * @param string $Role <p>节点角色。</p><ul><li>PRIMARY：主节点。</li><li>SECONDARY：从节点。</li><li>READONLY：只读节点。</li><li>ARBITER：仲裁节点。</li></ul>
     * @param boolean $Hidden <p>节点是否为 Hidden 节点。</p><ul><li>true：Hidden 节点。</li><li>false：非 Hidden 节点。</li></ul>
     * @param string $Status <p>节点状态。</p><ul><li>NORMAL：正常运行中。</li><li>STARTUP：正在启动。</li><li>STARTUP2：正在启动，处理中间数据。</li><li>RECOVERING：恢复中，暂不可用。</li><li>DOWN：已掉线。</li><li>UNKNOWN：未知状态。</li><li>ROLLBACK：回滚中。</li><li>REMOVED：已移除。</li></ul>
     * @param integer $SlaveDelay <p>主从同步延迟时间，单位：秒。</p>
     * @param integer $Priority <p>节点优先级。其取值范围为[0,100]，数值越高，优先级越高。</p>
     * @param integer $Votes <p>节点投票权。</p><ul><li>1：具有投票权。</li><li>0：无投票权。</li></ul>
     * @param array $Tags <p>节点标签。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReplicateSetId <p>副本集 ID。</p>
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
