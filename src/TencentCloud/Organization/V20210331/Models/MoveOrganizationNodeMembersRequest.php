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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MoveOrganizationNodeMembers请求参数结构体
 *
 * @method integer getNodeId() 获取组织节点ID。
 * @method void setNodeId(integer $NodeId) 设置组织节点ID。
 * @method array getMemberUin() 获取成员UIN列表。
 * @method void setMemberUin(array $MemberUin) 设置成员UIN列表。
 */
class MoveOrganizationNodeMembersRequest extends AbstractModel
{
    /**
     * @var integer 组织节点ID。
     */
    public $NodeId;

    /**
     * @var array 成员UIN列表。
     */
    public $MemberUin;

    /**
     * @param integer $NodeId 组织节点ID。
     * @param array $MemberUin 成员UIN列表。
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

        if (array_key_exists("MemberUin",$param) and $param["MemberUin"] !== null) {
            $this->MemberUin = $param["MemberUin"];
        }
    }
}
