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
 * Remote Write鉴权信息
 *
 * @method string getUsername() 获取basic auth username
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsername(string $Username) 设置basic auth username
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPassword() 获取basic auth password
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPassword(string $Password) 设置basic auth password
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getToken() 获取basic auth token
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setToken(string $Token) 设置basic auth token
注意：此字段可能返回 null，表示取不到有效值。
 */
class RemoteWriteAuthInfo extends AbstractModel
{
    /**
     * @var string basic auth username
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Username;

    /**
     * @var string basic auth password
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Password;

    /**
     * @var string basic auth token
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Token;

    /**
     * @param string $Username basic auth username
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Password basic auth password
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Token basic auth token
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
        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }
    }
}
