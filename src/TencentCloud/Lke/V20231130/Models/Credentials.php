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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 临时密钥结构
 *
 * @method string getToken() 获取token
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setToken(string $Token) 设置token
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTmpSecretId() 获取临时证书密钥ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTmpSecretId(string $TmpSecretId) 设置临时证书密钥ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTmpSecretKey() 获取临时证书密钥Key
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTmpSecretKey(string $TmpSecretKey) 设置临时证书密钥Key
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppId() 获取临时证书appid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置临时证书appid
注意：此字段可能返回 null，表示取不到有效值。
 */
class Credentials extends AbstractModel
{
    /**
     * @var string token
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Token;

    /**
     * @var string 临时证书密钥ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TmpSecretId;

    /**
     * @var string 临时证书密钥Key
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TmpSecretKey;

    /**
     * @var integer 临时证书appid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @param string $Token token
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TmpSecretId 临时证书密钥ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TmpSecretKey 临时证书密钥Key
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppId 临时证书appid
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
        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("TmpSecretId",$param) and $param["TmpSecretId"] !== null) {
            $this->TmpSecretId = $param["TmpSecretId"];
        }

        if (array_key_exists("TmpSecretKey",$param) and $param["TmpSecretKey"] !== null) {
            $this->TmpSecretKey = $param["TmpSecretKey"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }
    }
}
