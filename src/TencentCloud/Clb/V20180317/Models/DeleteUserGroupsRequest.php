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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteUserGroups请求参数结构体
 *
 * @method string getModelRouterId() 获取<p>模型路由实例ID。</p>
 * @method void setModelRouterId(string $ModelRouterId) 设置<p>模型路由实例ID。</p>
 * @method array getUserGroupIds() 获取<p>待删除的用户组ID列表，单次1-100个。不可包含「未分组」虚拟分组 ugrp-ungrouped。组内仍有 Key 时将拒绝删除，需先将 Key 移出或迁移到其他组。</p>
 * @method void setUserGroupIds(array $UserGroupIds) 设置<p>待删除的用户组ID列表，单次1-100个。不可包含「未分组」虚拟分组 ugrp-ungrouped。组内仍有 Key 时将拒绝删除，需先将 Key 移出或迁移到其他组。</p>
 */
class DeleteUserGroupsRequest extends AbstractModel
{
    /**
     * @var string <p>模型路由实例ID。</p>
     */
    public $ModelRouterId;

    /**
     * @var array <p>待删除的用户组ID列表，单次1-100个。不可包含「未分组」虚拟分组 ugrp-ungrouped。组内仍有 Key 时将拒绝删除，需先将 Key 移出或迁移到其他组。</p>
     */
    public $UserGroupIds;

    /**
     * @param string $ModelRouterId <p>模型路由实例ID。</p>
     * @param array $UserGroupIds <p>待删除的用户组ID列表，单次1-100个。不可包含「未分组」虚拟分组 ugrp-ungrouped。组内仍有 Key 时将拒绝删除，需先将 Key 移出或迁移到其他组。</p>
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
        if (array_key_exists("ModelRouterId",$param) and $param["ModelRouterId"] !== null) {
            $this->ModelRouterId = $param["ModelRouterId"];
        }

        if (array_key_exists("UserGroupIds",$param) and $param["UserGroupIds"] !== null) {
            $this->UserGroupIds = $param["UserGroupIds"];
        }
    }
}
