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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * kms加密参数
 *
 * @method string getKeyId() 获取自定义密钥,当不指定KeyId时，采用默认生成密钥（TKE-KMS）
 * @method void setKeyId(string $KeyId) 设置自定义密钥,当不指定KeyId时，采用默认生成密钥（TKE-KMS）
 * @method string getKmsRegion() 获取默认生成密钥或自定义密钥地域信息
 * @method void setKmsRegion(string $KmsRegion) 设置默认生成密钥或自定义密钥地域信息
 */
class KMSConfiguration extends AbstractModel
{
    /**
     * @var string 自定义密钥,当不指定KeyId时，采用默认生成密钥（TKE-KMS）
     */
    public $KeyId;

    /**
     * @var string 默认生成密钥或自定义密钥地域信息
     */
    public $KmsRegion;

    /**
     * @param string $KeyId 自定义密钥,当不指定KeyId时，采用默认生成密钥（TKE-KMS）
     * @param string $KmsRegion 默认生成密钥或自定义密钥地域信息
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

        if (array_key_exists("KmsRegion",$param) and $param["KmsRegion"] !== null) {
            $this->KmsRegion = $param["KmsRegion"];
        }
    }
}
