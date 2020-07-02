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
namespace TencentCloud\Organization\V20181225\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 企业组织单元
 *
 * @method integer getNodeId() 获取组织单元ID
 * @method void setNodeId(integer $NodeId) 设置组织单元ID
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method integer getParentNodeId() 获取父单元ID
 * @method void setParentNodeId(integer $ParentNodeId) 设置父单元ID
 * @method integer getMemberCount() 获取成员数量
 * @method void setMemberCount(integer $MemberCount) 设置成员数量
 */
class OrgNode extends AbstractModel
{
    /**
     * @var integer 组织单元ID
     */
    public $NodeId;

    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var integer 父单元ID
     */
    public $ParentNodeId;

    /**
     * @var integer 成员数量
     */
    public $MemberCount;

    /**
     * @param integer $NodeId 组织单元ID
     * @param string $Name 名称
     * @param integer $ParentNodeId 父单元ID
     * @param integer $MemberCount 成员数量
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
        if (array_key_exists('NodeId',$param) and $param['NodeId'] !== null) {
            $this->NodeId = $param['NodeId'];
        }

        if (array_key_exists('Name',$param) and $param['Name'] !== null) {
            $this->Name = $param['Name'];
        }

        if (array_key_exists('ParentNodeId',$param) and $param['ParentNodeId'] !== null) {
            $this->ParentNodeId = $param['ParentNodeId'];
        }

        if (array_key_exists('MemberCount',$param) and $param['MemberCount'] !== null) {
            $this->MemberCount = $param['MemberCount'];
        }
    }
}
