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
namespace TencentCloud\Iotvideo\V20191126\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 证书信息
 *
 * @method string getSecretId() 获取SecretId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecretId(string $SecretId) 设置SecretId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSecretKey() 获取SecretKey
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecretKey(string $SecretKey) 设置SecretKey
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getToken() 获取Token
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setToken(string $Token) 设置Token
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExpiredTime() 获取过期时间，UNIX时间戳，单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpiredTime(integer $ExpiredTime) 设置过期时间，UNIX时间戳，单位秒
注意：此字段可能返回 null，表示取不到有效值。
 */
class CertificateInfo extends AbstractModel
{
    /**
     * @var string SecretId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecretId;

    /**
     * @var string SecretKey
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecretKey;

    /**
     * @var string Token
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Token;

    /**
     * @var integer 过期时间，UNIX时间戳，单位秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpiredTime;

    /**
     * @param string $SecretId SecretId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SecretKey SecretKey
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Token Token
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExpiredTime 过期时间，UNIX时间戳，单位秒
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
        if (array_key_exists("SecretId",$param) and $param["SecretId"] !== null) {
            $this->SecretId = $param["SecretId"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }
    }
}
