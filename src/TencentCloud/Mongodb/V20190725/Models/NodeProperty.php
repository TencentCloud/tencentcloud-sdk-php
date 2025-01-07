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
 * @method string getWanServiceAddress() 获取节点公网访问地址(IP或域名)。
 * @method void setWanServiceAddress(string $WanServiceAddress) 设置节点公网访问地址(IP或域名)。
 * @method string getRole() 获取角色。
 * @method void setRole(string $Role) 设置角色。
 * @method boolean getHidden() 获取是否为Hidden节点
 * @method void setHidden(boolean $Hidden) 设置是否为Hidden节点
 * @method string getStatus() 获取节点状态，包括：ORMAL/STARTUP/RECOVERING/STARTUP2/UNKNOWN/DOWN/ROLLBACK/REMOVED等。
 * @method void setStatus(string $Status) 设置节点状态，包括：ORMAL/STARTUP/RECOVERING/STARTUP2/UNKNOWN/DOWN/ROLLBACK/REMOVED等。
 * @method integer getSlaveDelay() 获取主从延迟，单位秒。
 * @method void setSlaveDelay(integer $SlaveDelay) 设置主从延迟，单位秒。
 * @method integer getPriority() 获取节点优先级。
 * @method void setPriority(integer $Priority) 设置节点优先级。
 * @method integer getVotes() 获取节点投票权。
 * @method void setVotes(integer $Votes) 设置节点投票权。
 * @method array getTags() 获取节点标签。
 * @method void setTags(array $Tags) 设置节点标签。
 * @method string getReplicateSetId() 获取副本集Id。
 * @method void setReplicateSetId(string $ReplicateSetId) 设置副本集Id。
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
     * @var string 节点公网访问地址(IP或域名)。
     */
    public $WanServiceAddress;

    /**
     * @var string 角色。
     */
    public $Role;

    /**
     * @var boolean 是否为Hidden节点
     */
    public $Hidden;

    /**
     * @var string 节点状态，包括：ORMAL/STARTUP/RECOVERING/STARTUP2/UNKNOWN/DOWN/ROLLBACK/REMOVED等。
     */
    public $Status;

    /**
     * @var integer 主从延迟，单位秒。
     */
    public $SlaveDelay;

    /**
     * @var integer 节点优先级。
     */
    public $Priority;

    /**
     * @var integer 节点投票权。
     */
    public $Votes;

    /**
     * @var array 节点标签。
     */
    public $Tags;

    /**
     * @var string 副本集Id。
     */
    public $ReplicateSetId;

    /**
     * @param string $Zone 节点所在的可用区。
     * @param string $NodeName 节点名称。
     * @param string $Address 节点访问地址。
     * @param string $WanServiceAddress 节点公网访问地址(IP或域名)。
     * @param string $Role 角色。
     * @param boolean $Hidden 是否为Hidden节点
     * @param string $Status 节点状态，包括：ORMAL/STARTUP/RECOVERING/STARTUP2/UNKNOWN/DOWN/ROLLBACK/REMOVED等。
     * @param integer $SlaveDelay 主从延迟，单位秒。
     * @param integer $Priority 节点优先级。
     * @param integer $Votes 节点投票权。
     * @param array $Tags 节点标签。
     * @param string $ReplicateSetId 副本集Id。
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
