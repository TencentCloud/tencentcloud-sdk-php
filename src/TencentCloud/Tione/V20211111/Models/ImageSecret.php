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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义镜像仓库凭据
 *
 * @method string getKeyId() 获取用于加密密码的KMS公钥ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeyId(string $KeyId) 设置用于加密密码的KMS公钥ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUsername() 获取用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsername(string $Username) 设置用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPassword() 获取密码,base64编码； 当keyId不为空时，密码是加密后的
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPassword(string $Password) 设置密码,base64编码； 当keyId不为空时，密码是加密后的
注意：此字段可能返回 null，表示取不到有效值。
 */
class ImageSecret extends AbstractModel
{
    /**
     * @var string 用于加密密码的KMS公钥ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KeyId;

    /**
     * @var string 用户名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Username;

    /**
     * @var string 密码,base64编码； 当keyId不为空时，密码是加密后的
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Password;

    /**
     * @param string $KeyId 用于加密密码的KMS公钥ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Username 用户名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Password 密码,base64编码； 当keyId不为空时，密码是加密后的
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
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
