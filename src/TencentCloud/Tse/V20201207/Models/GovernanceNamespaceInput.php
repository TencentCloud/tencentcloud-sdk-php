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
 * @method array getServiceExportTo() 获取该命名空间下的服务对哪些命名空间下可见，
1、为空或者不填写，表示仅当前命名空间可见
2、列表内容仅一个元素，且为字符 *，表示所有命名空间可见（包括新增）
3、列表内容为部份命名空间名称，则只对这些命名空间下可见
 * @method void setServiceExportTo(array $ServiceExportTo) 设置该命名空间下的服务对哪些命名空间下可见，
1、为空或者不填写，表示仅当前命名空间可见
2、列表内容仅一个元素，且为字符 *，表示所有命名空间可见（包括新增）
3、列表内容为部份命名空间名称，则只对这些命名空间下可见
 * @method boolean getSyncToGlobalRegistry() 获取是否开启同步到全局注册中心
 * @method void setSyncToGlobalRegistry(boolean $SyncToGlobalRegistry) 设置是否开启同步到全局注册中心
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
     * @var array 该命名空间下的服务对哪些命名空间下可见，
1、为空或者不填写，表示仅当前命名空间可见
2、列表内容仅一个元素，且为字符 *，表示所有命名空间可见（包括新增）
3、列表内容为部份命名空间名称，则只对这些命名空间下可见
     */
    public $ServiceExportTo;

    /**
     * @var boolean 是否开启同步到全局注册中心
     */
    public $SyncToGlobalRegistry;

    /**
     * @param string $Name 命名空间名。
     * @param string $Comment 描述信息。
     * @param array $UserIds 新增的可以操作此命名空间的用户ID列表
     * @param array $GroupIds 新增的可以操作此命名空间的用户组ID列表
     * @param array $RemoveUserIds 移除可以操作此命名空间的用户ID列表
     * @param array $RemoveGroupIds 移除可以操作此命名空间的用户组ID列表
     * @param array $ServiceExportTo 该命名空间下的服务对哪些命名空间下可见，
1、为空或者不填写，表示仅当前命名空间可见
2、列表内容仅一个元素，且为字符 *，表示所有命名空间可见（包括新增）
3、列表内容为部份命名空间名称，则只对这些命名空间下可见
     * @param boolean $SyncToGlobalRegistry 是否开启同步到全局注册中心
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

        if (array_key_exists("ServiceExportTo",$param) and $param["ServiceExportTo"] !== null) {
            $this->ServiceExportTo = $param["ServiceExportTo"];
        }

        if (array_key_exists("SyncToGlobalRegistry",$param) and $param["SyncToGlobalRegistry"] !== null) {
            $this->SyncToGlobalRegistry = $param["SyncToGlobalRegistry"];
        }
    }
}
