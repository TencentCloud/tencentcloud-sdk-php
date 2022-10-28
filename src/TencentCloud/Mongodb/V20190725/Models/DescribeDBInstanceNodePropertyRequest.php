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
 * DescribeDBInstanceNodeProperty请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID，格式如：cmgo-p8vnipr5。与云数据库控制台页面中显示的实例ID相同。
 * @method void setInstanceId(string $InstanceId) 设置实例ID，格式如：cmgo-p8vnipr5。与云数据库控制台页面中显示的实例ID相同。
 * @method array getNodeIds() 获取节点ID。
 * @method void setNodeIds(array $NodeIds) 设置节点ID。
 * @method array getRoles() 获取节点角色。可选值包括：
<ul><li>PRIMARY：主节点。</li><li>SECONDARY：从节点。</li><li>READONLY：只读节点。</li><li>ARBITER：仲裁节点。</li></ul>
 * @method void setRoles(array $Roles) 设置节点角色。可选值包括：
<ul><li>PRIMARY：主节点。</li><li>SECONDARY：从节点。</li><li>READONLY：只读节点。</li><li>ARBITER：仲裁节点。</li></ul>
 * @method boolean getOnlyHidden() 获取该参数指定节点是否为Hidden节点，默认为false。
 * @method void setOnlyHidden(boolean $OnlyHidden) 设置该参数指定节点是否为Hidden节点，默认为false。
 * @method integer getPriority() 获取该参数指定选举新主节点的优先级。其取值范围为[0,100]，数值越高，优先级越高。
 * @method void setPriority(integer $Priority) 设置该参数指定选举新主节点的优先级。其取值范围为[0,100]，数值越高，优先级越高。
 * @method integer getVotes() 获取该参数指定节点投票权。
<ul><li>1：具有投票权。</li><li>0：无投票权。</li></ul>
 * @method void setVotes(integer $Votes) 设置该参数指定节点投票权。
<ul><li>1：具有投票权。</li><li>0：无投票权。</li></ul>
 * @method array getTags() 获取节点标签。
 * @method void setTags(array $Tags) 设置节点标签。
 */
class DescribeDBInstanceNodePropertyRequest extends AbstractModel
{
    /**
     * @var string 实例ID，格式如：cmgo-p8vnipr5。与云数据库控制台页面中显示的实例ID相同。
     */
    public $InstanceId;

    /**
     * @var array 节点ID。
     */
    public $NodeIds;

    /**
     * @var array 节点角色。可选值包括：
<ul><li>PRIMARY：主节点。</li><li>SECONDARY：从节点。</li><li>READONLY：只读节点。</li><li>ARBITER：仲裁节点。</li></ul>
     */
    public $Roles;

    /**
     * @var boolean 该参数指定节点是否为Hidden节点，默认为false。
     */
    public $OnlyHidden;

    /**
     * @var integer 该参数指定选举新主节点的优先级。其取值范围为[0,100]，数值越高，优先级越高。
     */
    public $Priority;

    /**
     * @var integer 该参数指定节点投票权。
<ul><li>1：具有投票权。</li><li>0：无投票权。</li></ul>
     */
    public $Votes;

    /**
     * @var array 节点标签。
     */
    public $Tags;

    /**
     * @param string $InstanceId 实例ID，格式如：cmgo-p8vnipr5。与云数据库控制台页面中显示的实例ID相同。
     * @param array $NodeIds 节点ID。
     * @param array $Roles 节点角色。可选值包括：
<ul><li>PRIMARY：主节点。</li><li>SECONDARY：从节点。</li><li>READONLY：只读节点。</li><li>ARBITER：仲裁节点。</li></ul>
     * @param boolean $OnlyHidden 该参数指定节点是否为Hidden节点，默认为false。
     * @param integer $Priority 该参数指定选举新主节点的优先级。其取值范围为[0,100]，数值越高，优先级越高。
     * @param integer $Votes 该参数指定节点投票权。
<ul><li>1：具有投票权。</li><li>0：无投票权。</li></ul>
     * @param array $Tags 节点标签。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("NodeIds",$param) and $param["NodeIds"] !== null) {
            $this->NodeIds = $param["NodeIds"];
        }

        if (array_key_exists("Roles",$param) and $param["Roles"] !== null) {
            $this->Roles = $param["Roles"];
        }

        if (array_key_exists("OnlyHidden",$param) and $param["OnlyHidden"] !== null) {
            $this->OnlyHidden = $param["OnlyHidden"];
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
    }
}
