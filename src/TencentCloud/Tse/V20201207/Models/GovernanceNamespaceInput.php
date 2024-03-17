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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 治理中心命名空间输入参数
 *
 * @method string getName() 获取命名空间名。
 * @method void setName(string $Name) 设置命名空间名。
 * @method string getComment() 获取描述信息。
 * @method void setComment(string $Comment) 设置描述信息。
 * @method array getUserIds() 获取新增的可以操作此命名空间的用户ID列表
 * @method void setUserIds(array $UserIds) 设置新增的可以操作此命名空间的用户ID列表
 * @method array getGroupIds() 获取新增的可以操作此命名空间的用户组ID列表
 * @method void setGroupIds(array $GroupIds) 设置新增的可以操作此命名空间的用户组ID列表
 * @method array getRemoveUserIds() 获取移除可以操作此命名空间的用户ID列表
 * @method void setRemoveUserIds(array $RemoveUserIds) 设置移除可以操作此命名空间的用户ID列表
 * @method array getRemoveGroupIds() 获取移除可以操作此命名空间的用户组ID列表
 * @method void setRemoveGroupIds(array $RemoveGroupIds) 设置移除可以操作此命名空间的用户组ID列表
 */
class GovernanceNamespaceInput extends AbstractModel
{
    /**
     * @var string 命名空间名。
     */
    public $Name;

    /**
     * @var string 描述信息。
     */
    public $Comment;

    /**
     * @var array 新增的可以操作此命名空间的用户ID列表
     */
    public $UserIds;

    /**
     * @var array 新增的可以操作此命名空间的用户组ID列表
     */
    public $GroupIds;

    /**
     * @var array 移除可以操作此命名空间的用户ID列表
     */
    public $RemoveUserIds;

    /**
     * @var array 移除可以操作此命名空间的用户组ID列表
     */
    public $RemoveGroupIds;

    /**
     * @param string $Name 命名空间名。
     * @param string $Comment 描述信息。
     * @param array $UserIds 新增的可以操作此命名空间的用户ID列表
     * @param array $GroupIds 新增的可以操作此命名空间的用户组ID列表
     * @param array $RemoveUserIds 移除可以操作此命名空间的用户ID列表
     * @param array $RemoveGroupIds 移除可以操作此命名空间的用户组ID列表
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("UserIds",$param) and $param["UserIds"] !== null) {
            $this->UserIds = $param["UserIds"];
        }

        if (array_key_exists("GroupIds",$param) and $param["GroupIds"] !== null) {
            $this->GroupIds = $param["GroupIds"];
        }

        if (array_key_exists("RemoveUserIds",$param) and $param["RemoveUserIds"] !== null) {
            $this->RemoveUserIds = $param["RemoveUserIds"];
        }

        if (array_key_exists("RemoveGroupIds",$param) and $param["RemoveGroupIds"] !== null) {
            $this->RemoveGroupIds = $param["RemoveGroupIds"];
        }
    }
}
