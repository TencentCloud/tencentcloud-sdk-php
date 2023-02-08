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
namespace TencentCloud\Keewidb\V20220308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例副本组信息
 *
 * @method integer getGroupId() 获取节点 ID。
 * @method void setGroupId(integer $GroupId) 设置节点 ID。
 * @method string getGroupName() 获取节点组的名称，主节点为空。
 * @method void setGroupName(string $GroupName) 设置节点组的名称，主节点为空。
 * @method string getZoneId() 获取节点的可用区ID，比如ap-guangzhou-1。
 * @method void setZoneId(string $ZoneId) 设置节点的可用区ID，比如ap-guangzhou-1。
 * @method string getRole() 获取节点组角色。<ul><li>master：为主节点。</li><li>replica：为副本节点。</li></ul>
 * @method void setRole(string $Role) 设置节点组角色。<ul><li>master：为主节点。</li><li>replica：为副本节点。</li></ul>
 * @method array getKeeWiDBNodes() 获取节点组节点列表。
 * @method void setKeeWiDBNodes(array $KeeWiDBNodes) 设置节点组节点列表。
 */
class ReplicaGroup extends AbstractModel
{
    /**
     * @var integer 节点 ID。
     */
    public $GroupId;

    /**
     * @var string 节点组的名称，主节点为空。
     */
    public $GroupName;

    /**
     * @var string 节点的可用区ID，比如ap-guangzhou-1。
     */
    public $ZoneId;

    /**
     * @var string 节点组角色。<ul><li>master：为主节点。</li><li>replica：为副本节点。</li></ul>
     */
    public $Role;

    /**
     * @var array 节点组节点列表。
     */
    public $KeeWiDBNodes;

    /**
     * @param integer $GroupId 节点 ID。
     * @param string $GroupName 节点组的名称，主节点为空。
     * @param string $ZoneId 节点的可用区ID，比如ap-guangzhou-1。
     * @param string $Role 节点组角色。<ul><li>master：为主节点。</li><li>replica：为副本节点。</li></ul>
     * @param array $KeeWiDBNodes 节点组节点列表。
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("KeeWiDBNodes",$param) and $param["KeeWiDBNodes"] !== null) {
            $this->KeeWiDBNodes = [];
            foreach ($param["KeeWiDBNodes"] as $key => $value){
                $obj = new KeeWiDBNode();
                $obj->deserialize($value);
                array_push($this->KeeWiDBNodes, $obj);
            }
        }
    }
}
