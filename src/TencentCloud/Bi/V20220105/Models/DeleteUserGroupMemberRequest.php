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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteUserGroupMember请求参数结构体
 *
 * @method integer getGroupId() 获取用户组id
 * @method void setGroupId(integer $GroupId) 设置用户组id
 * @method array getUserIdList() 获取用户id集合
 * @method void setUserIdList(array $UserIdList) 设置用户id集合
 */
class DeleteUserGroupMemberRequest extends AbstractModel
{
    /**
     * @var integer 用户组id
     */
    public $GroupId;

    /**
     * @var array 用户id集合
     */
    public $UserIdList;

    /**
     * @param integer $GroupId 用户组id
     * @param array $UserIdList 用户id集合
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

        if (array_key_exists("UserIdList",$param) and $param["UserIdList"] !== null) {
            $this->UserIdList = $param["UserIdList"];
        }
    }
}
