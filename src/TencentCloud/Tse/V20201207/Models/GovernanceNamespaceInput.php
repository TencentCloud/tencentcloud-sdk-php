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
 * @method string getName() 获取<p>命名空间名。</p>
 * @method void setName(string $Name) 设置<p>命名空间名。</p>
 * @method string getComment() 获取<p>描述信息。</p>
 * @method void setComment(string $Comment) 设置<p>描述信息。</p>
 * @method array getUserIds() 获取<p>新增的可以操作此命名空间的用户ID列表</p>
 * @method void setUserIds(array $UserIds) 设置<p>新增的可以操作此命名空间的用户ID列表</p>
 * @method array getGroupIds() 获取<p>新增的可以操作此命名空间的用户组ID列表</p>
 * @method void setGroupIds(array $GroupIds) 设置<p>新增的可以操作此命名空间的用户组ID列表</p>
 * @method array getRemoveUserIds() 获取<p>移除可以操作此命名空间的用户ID列表</p>
 * @method void setRemoveUserIds(array $RemoveUserIds) 设置<p>移除可以操作此命名空间的用户ID列表</p>
 * @method array getRemoveGroupIds() 获取<p>移除可以操作此命名空间的用户组ID列表</p>
 * @method void setRemoveGroupIds(array $RemoveGroupIds) 设置<p>移除可以操作此命名空间的用户组ID列表</p>
 * @method array getServiceExportTo() 获取<p>该命名空间下的服务对哪些命名空间下可见，<br>1、为空或者不填写，表示仅当前命名空间可见<br>2、列表内容仅一个元素，且为字符 *，表示所有命名空间可见（包括新增）<br>3、列表内容为部份命名空间名称，则只对这些命名空间下可见</p>
 * @method void setServiceExportTo(array $ServiceExportTo) 设置<p>该命名空间下的服务对哪些命名空间下可见，<br>1、为空或者不填写，表示仅当前命名空间可见<br>2、列表内容仅一个元素，且为字符 *，表示所有命名空间可见（包括新增）<br>3、列表内容为部份命名空间名称，则只对这些命名空间下可见</p>
 * @method boolean getSyncToGlobalRegistry() 获取<p>是否开启同步到全局注册中心</p>
 * @method void setSyncToGlobalRegistry(boolean $SyncToGlobalRegistry) 设置<p>是否开启同步到全局注册中心</p>
 */
class GovernanceNamespaceInput extends AbstractModel
{
    /**
     * @var string <p>命名空间名。</p>
     */
    public $Name;

    /**
     * @var string <p>描述信息。</p>
     */
    public $Comment;

    /**
     * @var array <p>新增的可以操作此命名空间的用户ID列表</p>
     */
    public $UserIds;

    /**
     * @var array <p>新增的可以操作此命名空间的用户组ID列表</p>
     */
    public $GroupIds;

    /**
     * @var array <p>移除可以操作此命名空间的用户ID列表</p>
     */
    public $RemoveUserIds;

    /**
     * @var array <p>移除可以操作此命名空间的用户组ID列表</p>
     */
    public $RemoveGroupIds;

    /**
     * @var array <p>该命名空间下的服务对哪些命名空间下可见，<br>1、为空或者不填写，表示仅当前命名空间可见<br>2、列表内容仅一个元素，且为字符 *，表示所有命名空间可见（包括新增）<br>3、列表内容为部份命名空间名称，则只对这些命名空间下可见</p>
     */
    public $ServiceExportTo;

    /**
     * @var boolean <p>是否开启同步到全局注册中心</p>
     */
    public $SyncToGlobalRegistry;

    /**
     * @param string $Name <p>命名空间名。</p>
     * @param string $Comment <p>描述信息。</p>
     * @param array $UserIds <p>新增的可以操作此命名空间的用户ID列表</p>
     * @param array $GroupIds <p>新增的可以操作此命名空间的用户组ID列表</p>
     * @param array $RemoveUserIds <p>移除可以操作此命名空间的用户ID列表</p>
     * @param array $RemoveGroupIds <p>移除可以操作此命名空间的用户组ID列表</p>
     * @param array $ServiceExportTo <p>该命名空间下的服务对哪些命名空间下可见，<br>1、为空或者不填写，表示仅当前命名空间可见<br>2、列表内容仅一个元素，且为字符 *，表示所有命名空间可见（包括新增）<br>3、列表内容为部份命名空间名称，则只对这些命名空间下可见</p>
     * @param boolean $SyncToGlobalRegistry <p>是否开启同步到全局注册中心</p>
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
