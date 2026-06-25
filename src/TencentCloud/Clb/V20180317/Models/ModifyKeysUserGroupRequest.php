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
 * ModifyKeysUserGroup请求参数结构体
 *
 * @method string getModelRouterId() 获取<p>模型路由实例ID。</p>
 * @method void setModelRouterId(string $ModelRouterId) 设置<p>模型路由实例ID。</p>
 * @method string getUserGroupId() 获取<p>目标归属用户组ID。传真实用户组ID表示批量入组或跨组移动（Key 已属其它组则改为目标组）；传 ugrp-ungrouped 表示批量移出到未分组。</p>
 * @method void setUserGroupId(string $UserGroupId) 设置<p>目标归属用户组ID。传真实用户组ID表示批量入组或跨组移动（Key 已属其它组则改为目标组）；传 ugrp-ungrouped 表示批量移出到未分组。</p>
 * @method array getKeyIds() 获取<p>待变更归属的 Key ID 列表，单次1-100个。</p>
 * @method void setKeyIds(array $KeyIds) 设置<p>待变更归属的 Key ID 列表，单次1-100个。</p>
 */
class ModifyKeysUserGroupRequest extends AbstractModel
{
    /**
     * @var string <p>模型路由实例ID。</p>
     */
    public $ModelRouterId;

    /**
     * @var string <p>目标归属用户组ID。传真实用户组ID表示批量入组或跨组移动（Key 已属其它组则改为目标组）；传 ugrp-ungrouped 表示批量移出到未分组。</p>
     */
    public $UserGroupId;

    /**
     * @var array <p>待变更归属的 Key ID 列表，单次1-100个。</p>
     */
    public $KeyIds;

    /**
     * @param string $ModelRouterId <p>模型路由实例ID。</p>
     * @param string $UserGroupId <p>目标归属用户组ID。传真实用户组ID表示批量入组或跨组移动（Key 已属其它组则改为目标组）；传 ugrp-ungrouped 表示批量移出到未分组。</p>
     * @param array $KeyIds <p>待变更归属的 Key ID 列表，单次1-100个。</p>
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

        if (array_key_exists("UserGroupId",$param) and $param["UserGroupId"] !== null) {
            $this->UserGroupId = $param["UserGroupId"];
        }

        if (array_key_exists("KeyIds",$param) and $param["KeyIds"] !== null) {
            $this->KeyIds = $param["KeyIds"];
        }
    }
}
