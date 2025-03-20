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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * KMS密钥信息
 *
 * @method string getKeyId() 获取KMS实例加密的KeyId。
 * @method void setKeyId(string $KeyId) 设置KMS实例加密的KeyId。
 * @method string getKeyAlias() 获取KMS实例加密Key的别名。
 * @method void setKeyAlias(string $KeyAlias) 设置KMS实例加密Key的别名。
 * @method string getDEKCipherTextBlob() 获取实例加密密钥DEK的密文。
 * @method void setDEKCipherTextBlob(string $DEKCipherTextBlob) 设置实例加密密钥DEK的密文。
 * @method integer getIsEnabled() 获取密钥是否启用，1-启用， 0-未启用。
 * @method void setIsEnabled(integer $IsEnabled) 设置密钥是否启用，1-启用， 0-未启用。
 * @method string getKeyRegion() 获取KMS密钥所在地域。
 * @method void setKeyRegion(string $KeyRegion) 设置KMS密钥所在地域。
 * @method string getCreateTime() 获取DEK密钥创建时间。
 * @method void setCreateTime(string $CreateTime) 设置DEK密钥创建时间。
 */
class EncryptionKey extends AbstractModel
{
    /**
     * @var string KMS实例加密的KeyId。
     */
    public $KeyId;

    /**
     * @var string KMS实例加密Key的别名。
     */
    public $KeyAlias;

    /**
     * @var string 实例加密密钥DEK的密文。
     */
    public $DEKCipherTextBlob;

    /**
     * @var integer 密钥是否启用，1-启用， 0-未启用。
     */
    public $IsEnabled;

    /**
     * @var string KMS密钥所在地域。
     */
    public $KeyRegion;

    /**
     * @var string DEK密钥创建时间。
     */
    public $CreateTime;

    /**
     * @param string $KeyId KMS实例加密的KeyId。
     * @param string $KeyAlias KMS实例加密Key的别名。
     * @param string $DEKCipherTextBlob 实例加密密钥DEK的密文。
     * @param integer $IsEnabled 密钥是否启用，1-启用， 0-未启用。
     * @param string $KeyRegion KMS密钥所在地域。
     * @param string $CreateTime DEK密钥创建时间。
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

        if (array_key_exists("KeyAlias",$param) and $param["KeyAlias"] !== null) {
            $this->KeyAlias = $param["KeyAlias"];
        }

        if (array_key_exists("DEKCipherTextBlob",$param) and $param["DEKCipherTextBlob"] !== null) {
            $this->DEKCipherTextBlob = $param["DEKCipherTextBlob"];
        }

        if (array_key_exists("IsEnabled",$param) and $param["IsEnabled"] !== null) {
            $this->IsEnabled = $param["IsEnabled"];
        }

        if (array_key_exists("KeyRegion",$param) and $param["KeyRegion"] !== null) {
            $this->KeyRegion = $param["KeyRegion"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
