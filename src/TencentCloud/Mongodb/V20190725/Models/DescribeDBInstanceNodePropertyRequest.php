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
 * DescribeDBInstanceNodeProperty请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例 ID。请登录 <a href="https://console.cloud.tencent.com/mongodb">MongoDB 控制台</a>在实例列表复制实例 ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID。请登录 <a href="https://console.cloud.tencent.com/mongodb">MongoDB 控制台</a>在实例列表复制实例 ID。</p>
 * @method array getNodeIds() 获取<p>节点 ID。请登录 <a href="https://console.cloud.tencent.com/mongodb">MongoDB 控制台的节点管理</a>复制节点 ID。</p>
 * @method void setNodeIds(array $NodeIds) 设置<p>节点 ID。请登录 <a href="https://console.cloud.tencent.com/mongodb">MongoDB 控制台的节点管理</a>复制节点 ID。</p>
 * @method array getRoles() 获取<p>节点角色。可选值包括：</p><ul><li>PRIMARY：主节点。</li><li>SECONDARY：从节点。</li><li>READONLY：只读节点。</li><li>ARBITER：仲裁节点。</li></ul>
 * @method void setRoles(array $Roles) 设置<p>节点角色。可选值包括：</p><ul><li>PRIMARY：主节点。</li><li>SECONDARY：从节点。</li><li>READONLY：只读节点。</li><li>ARBITER：仲裁节点。</li></ul>
 * @method boolean getOnlyHidden() 获取<p>该参数指定节点是否为 Hidden 节点，默认为 false。</p>
 * @method void setOnlyHidden(boolean $OnlyHidden) 设置<p>该参数指定节点是否为 Hidden 节点，默认为 false。</p>
 * @method integer getPriority() 获取<p>该参数指定选举新主节点的优先级。其取值范围为[0,100]，数值越高，优先级越高。</p>
 * @method void setPriority(integer $Priority) 设置<p>该参数指定选举新主节点的优先级。其取值范围为[0,100]，数值越高，优先级越高。</p>
 * @method integer getVotes() 获取<p>该参数指定节点投票权。</p><ul><li>1：具有投票权。</li><li>0：无投票权。</li></ul>
 * @method void setVotes(integer $Votes) 设置<p>该参数指定节点投票权。</p><ul><li>1：具有投票权。</li><li>0：无投票权。</li></ul>
 * @method array getTags() 获取<p>节点标签。</p>
 * @method void setTags(array $Tags) 设置<p>节点标签。</p>
 */
class DescribeDBInstanceNodePropertyRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID。请登录 <a href="https://console.cloud.tencent.com/mongodb">MongoDB 控制台</a>在实例列表复制实例 ID。</p>
     */
    public $InstanceId;

    /**
     * @var array <p>节点 ID。请登录 <a href="https://console.cloud.tencent.com/mongodb">MongoDB 控制台的节点管理</a>复制节点 ID。</p>
     */
    public $NodeIds;

    /**
     * @var array <p>节点角色。可选值包括：</p><ul><li>PRIMARY：主节点。</li><li>SECONDARY：从节点。</li><li>READONLY：只读节点。</li><li>ARBITER：仲裁节点。</li></ul>
     */
    public $Roles;

    /**
     * @var boolean <p>该参数指定节点是否为 Hidden 节点，默认为 false。</p>
     */
    public $OnlyHidden;

    /**
     * @var integer <p>该参数指定选举新主节点的优先级。其取值范围为[0,100]，数值越高，优先级越高。</p>
     */
    public $Priority;

    /**
     * @var integer <p>该参数指定节点投票权。</p><ul><li>1：具有投票权。</li><li>0：无投票权。</li></ul>
     */
    public $Votes;

    /**
     * @var array <p>节点标签。</p>
     */
    public $Tags;

    /**
     * @param string $InstanceId <p>实例 ID。请登录 <a href="https://console.cloud.tencent.com/mongodb">MongoDB 控制台</a>在实例列表复制实例 ID。</p>
     * @param array $NodeIds <p>节点 ID。请登录 <a href="https://console.cloud.tencent.com/mongodb">MongoDB 控制台的节点管理</a>复制节点 ID。</p>
     * @param array $Roles <p>节点角色。可选值包括：</p><ul><li>PRIMARY：主节点。</li><li>SECONDARY：从节点。</li><li>READONLY：只读节点。</li><li>ARBITER：仲裁节点。</li></ul>
     * @param boolean $OnlyHidden <p>该参数指定节点是否为 Hidden 节点，默认为 false。</p>
     * @param integer $Priority <p>该参数指定选举新主节点的优先级。其取值范围为[0,100]，数值越高，优先级越高。</p>
     * @param integer $Votes <p>该参数指定节点投票权。</p><ul><li>1：具有投票权。</li><li>0：无投票权。</li></ul>
     * @param array $Tags <p>节点标签。</p>
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
