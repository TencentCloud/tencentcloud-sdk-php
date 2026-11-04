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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRoleUserGrant请求参数结构体
 *
 * @method string getTiProjectId() 获取<p>TI工作空间ID</p><p>使用非默认空间必须填写工作空间ID，使用默认空间无需填写工作空间ID。</p>
 * @method void setTiProjectId(string $TiProjectId) 设置<p>TI工作空间ID</p><p>使用非默认空间必须填写工作空间ID，使用默认空间无需填写工作空间ID。</p>
 * @method array getRoleIds() 获取<p>角色ID列表</p>
 * @method void setRoleIds(array $RoleIds) 设置<p>角色ID列表</p>
 * @method array getSubUins() 获取<p>用户UIN列表</p>
 * @method void setSubUins(array $SubUins) 设置<p>用户UIN列表</p>
 * @method string getGrant() 获取<p>授权方式</p>
 * @method void setGrant(string $Grant) 设置<p>授权方式</p>
 */
class ModifyRoleUserGrantRequest extends AbstractModel
{
    /**
     * @var string <p>TI工作空间ID</p><p>使用非默认空间必须填写工作空间ID，使用默认空间无需填写工作空间ID。</p>
     */
    public $TiProjectId;

    /**
     * @var array <p>角色ID列表</p>
     */
    public $RoleIds;

    /**
     * @var array <p>用户UIN列表</p>
     */
    public $SubUins;

    /**
     * @var string <p>授权方式</p>
     */
    public $Grant;

    /**
     * @param string $TiProjectId <p>TI工作空间ID</p><p>使用非默认空间必须填写工作空间ID，使用默认空间无需填写工作空间ID。</p>
     * @param array $RoleIds <p>角色ID列表</p>
     * @param array $SubUins <p>用户UIN列表</p>
     * @param string $Grant <p>授权方式</p>
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
        if (array_key_exists("TiProjectId",$param) and $param["TiProjectId"] !== null) {
            $this->TiProjectId = $param["TiProjectId"];
        }

        if (array_key_exists("RoleIds",$param) and $param["RoleIds"] !== null) {
            $this->RoleIds = $param["RoleIds"];
        }

        if (array_key_exists("SubUins",$param) and $param["SubUins"] !== null) {
            $this->SubUins = $param["SubUins"];
        }

        if (array_key_exists("Grant",$param) and $param["Grant"] !== null) {
            $this->Grant = $param["Grant"];
        }
    }
}
