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
 * @method string getInstanceId() 获取实例 ID。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
 * @method array getNodeIds() 获取节点 ID。请登录 [MongoDB 控制台的节点管理](https://console.cloud.tencent.com/mongodb)复制节点 ID。
 * @method void setNodeIds(array $NodeIds) 设置节点 ID。请登录 [MongoDB 控制台的节点管理](https://console.cloud.tencent.com/mongodb)复制节点 ID。
 * @method array getRoles() 获取节点角色。可选值包括：
- PRIMARY：主节点。
- SECONDARY：从节点。
- READONLY：只读节点。
- ARBITER：仲裁节点。
 * @method void setRoles(array $Roles) 设置节点角色。可选值包括：
- PRIMARY：主节点。
- SECONDARY：从节点。
- READONLY：只读节点。
- ARBITER：仲裁节点。
 * @method boolean getOnlyHidden() 获取该参数指定节点是否为 Hidden 节点，默认为 false。
 * @method void setOnlyHidden(boolean $OnlyHidden) 设置该参数指定节点是否为 Hidden 节点，默认为 false。
 * @method integer getPriority() 获取该参数指定选举新主节点的优先级。其取值范围为[0,100]，数值越高，优先级越高。
 * @method void setPriority(integer $Priority) 设置该参数指定选举新主节点的优先级。其取值范围为[0,100]，数值越高，优先级越高。
 * @method integer getVotes() 获取该参数指定节点投票权。
- 1：具有投票权。
- 0：无投票权。
 * @method void setVotes(integer $Votes) 设置该参数指定节点投票权。
- 1：具有投票权。
- 0：无投票权。
 * @method array getTags() 获取节点标签。
 * @method void setTags(array $Tags) 设置节点标签。
 */
class DescribeDBInstanceNodePropertyRequest extends AbstractModel
{
    /**
     * @var string 实例 ID。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
     */
    public $InstanceId;

    /**
     * @var array 节点 ID。请登录 [MongoDB 控制台的节点管理](https://console.cloud.tencent.com/mongodb)复制节点 ID。
     */
    public $NodeIds;

    /**
     * @var array 节点角色。可选值包括：
- PRIMARY：主节点。
- SECONDARY：从节点。
- READONLY：只读节点。
- ARBITER：仲裁节点。
     */
    public $Roles;

    /**
     * @var boolean 该参数指定节点是否为 Hidden 节点，默认为 false。
     */
    public $OnlyHidden;

    /**
     * @var integer 该参数指定选举新主节点的优先级。其取值范围为[0,100]，数值越高，优先级越高。
     */
    public $Priority;

    /**
     * @var integer 该参数指定节点投票权。
- 1：具有投票权。
- 0：无投票权。
     */
    public $Votes;

    /**
     * @var array 节点标签。
     */
    public $Tags;

    /**
     * @param string $InstanceId 实例 ID。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
     * @param array $NodeIds 节点 ID。请登录 [MongoDB 控制台的节点管理](https://console.cloud.tencent.com/mongodb)复制节点 ID。
     * @param array $Roles 节点角色。可选值包括：
- PRIMARY：主节点。
- SECONDARY：从节点。
- READONLY：只读节点。
- ARBITER：仲裁节点。
     * @param boolean $OnlyHidden 该参数指定节点是否为 Hidden 节点，默认为 false。
     * @param integer $Priority 该参数指定选举新主节点的优先级。其取值范围为[0,100]，数值越高，优先级越高。
     * @param integer $Votes 该参数指定节点投票权。
- 1：具有投票权。
- 0：无投票权。
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
