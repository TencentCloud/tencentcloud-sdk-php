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
 * 自定义 KMS 密钥
 *
 * @method string getKmsRegion() 获取<p>KMS支持的地域，详见 腾讯云-密钥管理系统 官方文档</p><p>参数格式：ap-guangzhou</p>
 * @method void setKmsRegion(string $KmsRegion) 设置<p>KMS支持的地域，详见 腾讯云-密钥管理系统 官方文档</p><p>参数格式：ap-guangzhou</p>
 * @method string getKmsKeyId() 获取<p>KMS秘钥ID</p>
 * @method void setKmsKeyId(string $KmsKeyId) 设置<p>KMS秘钥ID</p>
 */
class CustomKmsInfo extends AbstractModel
{
    /**
     * @var string <p>KMS支持的地域，详见 腾讯云-密钥管理系统 官方文档</p><p>参数格式：ap-guangzhou</p>
     */
    public $KmsRegion;

    /**
     * @var string <p>KMS秘钥ID</p>
     */
    public $KmsKeyId;

    /**
     * @param string $KmsRegion <p>KMS支持的地域，详见 腾讯云-密钥管理系统 官方文档</p><p>参数格式：ap-guangzhou</p>
     * @param string $KmsKeyId <p>KMS秘钥ID</p>
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
        if (array_key_exists("KmsRegion",$param) and $param["KmsRegion"] !== null) {
            $this->KmsRegion = $param["KmsRegion"];
        }

        if (array_key_exists("KmsKeyId",$param) and $param["KmsKeyId"] !== null) {
            $this->KmsKeyId = $param["KmsKeyId"];
        }
    }
}
