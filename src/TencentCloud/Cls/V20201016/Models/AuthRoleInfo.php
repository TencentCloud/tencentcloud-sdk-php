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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * dataSight 第三方验证登录角色配置信息
 *
 * @method string getRoleName() 获取<p>Auth角色名称</p>
 * @method void setRoleName(string $RoleName) 设置<p>Auth角色名称</p>
 * @method string getSecretId() 获取<p>Auth角色对应权限SecretId</p>
 * @method void setSecretId(string $SecretId) 设置<p>Auth角色对应权限SecretId</p>
 * @method string getSecretKey() 获取<p>Auth角色对应权限SecretKey</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecretKey(string $SecretKey) 设置<p>Auth角色对应权限SecretKey</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class AuthRoleInfo extends AbstractModel
{
    /**
     * @var string <p>Auth角色名称</p>
     */
    public $RoleName;

    /**
     * @var string <p>Auth角色对应权限SecretId</p>
     */
    public $SecretId;

    /**
     * @var string <p>Auth角色对应权限SecretKey</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecretKey;

    /**
     * @param string $RoleName <p>Auth角色名称</p>
     * @param string $SecretId <p>Auth角色对应权限SecretId</p>
     * @param string $SecretKey <p>Auth角色对应权限SecretKey</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("SecretId",$param) and $param["SecretId"] !== null) {
            $this->SecretId = $param["SecretId"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }
    }
}
