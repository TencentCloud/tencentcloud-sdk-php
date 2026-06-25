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
 * Budget关联资源对象。仅支持企业型模型路由实例和企业型实例下的Key。
 *
 * @method string getModelRouterId() 获取<p>模型路由实例ID。</p><p>当Type为ModelRouter时表示要关联的实例；当Type为Key时表示Key所属实例。</p>
 * @method void setModelRouterId(string $ModelRouterId) 设置<p>模型路由实例ID。</p><p>当Type为ModelRouter时表示要关联的实例；当Type为Key时表示Key所属实例。</p>
 * @method string getType() 获取<p>资源类型。</p><p>枚举值：</p><ul><li>ModelRouter：模型路由实例</li><li>Key：模型路由Key</li><li>UserGroup：用户组（Type 为 UserGroup 时需传 UserGroupId）</li></ul>
 * @method void setType(string $Type) 设置<p>资源类型。</p><p>枚举值：</p><ul><li>ModelRouter：模型路由实例</li><li>Key：模型路由Key</li><li>UserGroup：用户组（Type 为 UserGroup 时需传 UserGroupId）</li></ul>
 * @method string getKeyId() 获取<p>Key ID。</p><p>字段本身选填；当Type为Key时必填，当Type为ModelRouter时不传。</p>
 * @method void setKeyId(string $KeyId) 设置<p>Key ID。</p><p>字段本身选填；当Type为Key时必填，当Type为ModelRouter时不传。</p>
 * @method string getUserGroupId() 获取<p>用户组ID</p>
 * @method void setUserGroupId(string $UserGroupId) 设置<p>用户组ID</p>
 */
class BudgetResource extends AbstractModel
{
    /**
     * @var string <p>模型路由实例ID。</p><p>当Type为ModelRouter时表示要关联的实例；当Type为Key时表示Key所属实例。</p>
     */
    public $ModelRouterId;

    /**
     * @var string <p>资源类型。</p><p>枚举值：</p><ul><li>ModelRouter：模型路由实例</li><li>Key：模型路由Key</li><li>UserGroup：用户组（Type 为 UserGroup 时需传 UserGroupId）</li></ul>
     */
    public $Type;

    /**
     * @var string <p>Key ID。</p><p>字段本身选填；当Type为Key时必填，当Type为ModelRouter时不传。</p>
     */
    public $KeyId;

    /**
     * @var string <p>用户组ID</p>
     */
    public $UserGroupId;

    /**
     * @param string $ModelRouterId <p>模型路由实例ID。</p><p>当Type为ModelRouter时表示要关联的实例；当Type为Key时表示Key所属实例。</p>
     * @param string $Type <p>资源类型。</p><p>枚举值：</p><ul><li>ModelRouter：模型路由实例</li><li>Key：模型路由Key</li><li>UserGroup：用户组（Type 为 UserGroup 时需传 UserGroupId）</li></ul>
     * @param string $KeyId <p>Key ID。</p><p>字段本身选填；当Type为Key时必填，当Type为ModelRouter时不传。</p>
     * @param string $UserGroupId <p>用户组ID</p>
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("UserGroupId",$param) and $param["UserGroupId"] !== null) {
            $this->UserGroupId = $param["UserGroupId"];
        }
    }
}
