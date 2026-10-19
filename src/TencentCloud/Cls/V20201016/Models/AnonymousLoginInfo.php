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
 * DataSight内网匿名登录账号信息
 *
 * @method string getSecretId() 获取<p>匿名登录账号secretId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecretId(string $SecretId) 设置<p>匿名登录账号secretId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSecretKey() 获取<p>匿名登录账号secretKey</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecretKey(string $SecretKey) 设置<p>匿名登录账号secretKey</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRoleArn() 获取<p>角色的资源描述，可在<a href="https://console.cloud.tencent.com/cam/role">访问管理</a>，点击角色名获取。<br>普通角色：<br>qcs::cam::uin/12345678:role/4611686018427397919、qcs::cam::uin/12345678:roleName/testRoleName<br>服务角色：<br>qcs::cam::uin/12345678:role/tencentcloudServiceRole/4611686018427397920、qcs::cam::uin/12345678:role/tencentcloudServiceRoleName/testServiceRoleName</p><p>DataSight将扮演此角色，使用此角色的临时密钥来发起API请求。</p>
 * @method void setRoleArn(string $RoleArn) 设置<p>角色的资源描述，可在<a href="https://console.cloud.tencent.com/cam/role">访问管理</a>，点击角色名获取。<br>普通角色：<br>qcs::cam::uin/12345678:role/4611686018427397919、qcs::cam::uin/12345678:roleName/testRoleName<br>服务角色：<br>qcs::cam::uin/12345678:role/tencentcloudServiceRole/4611686018427397920、qcs::cam::uin/12345678:role/tencentcloudServiceRoleName/testServiceRoleName</p><p>DataSight将扮演此角色，使用此角色的临时密钥来发起API请求。</p>
 */
class AnonymousLoginInfo extends AbstractModel
{
    /**
     * @var string <p>匿名登录账号secretId</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecretId;

    /**
     * @var string <p>匿名登录账号secretKey</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecretKey;

    /**
     * @var string <p>角色的资源描述，可在<a href="https://console.cloud.tencent.com/cam/role">访问管理</a>，点击角色名获取。<br>普通角色：<br>qcs::cam::uin/12345678:role/4611686018427397919、qcs::cam::uin/12345678:roleName/testRoleName<br>服务角色：<br>qcs::cam::uin/12345678:role/tencentcloudServiceRole/4611686018427397920、qcs::cam::uin/12345678:role/tencentcloudServiceRoleName/testServiceRoleName</p><p>DataSight将扮演此角色，使用此角色的临时密钥来发起API请求。</p>
     */
    public $RoleArn;

    /**
     * @param string $SecretId <p>匿名登录账号secretId</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SecretKey <p>匿名登录账号secretKey</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RoleArn <p>角色的资源描述，可在<a href="https://console.cloud.tencent.com/cam/role">访问管理</a>，点击角色名获取。<br>普通角色：<br>qcs::cam::uin/12345678:role/4611686018427397919、qcs::cam::uin/12345678:roleName/testRoleName<br>服务角色：<br>qcs::cam::uin/12345678:role/tencentcloudServiceRole/4611686018427397920、qcs::cam::uin/12345678:role/tencentcloudServiceRoleName/testServiceRoleName</p><p>DataSight将扮演此角色，使用此角色的临时密钥来发起API请求。</p>
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
        if (array_key_exists("SecretId",$param) and $param["SecretId"] !== null) {
            $this->SecretId = $param["SecretId"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("RoleArn",$param) and $param["RoleArn"] !== null) {
            $this->RoleArn = $param["RoleArn"];
        }
    }
}
