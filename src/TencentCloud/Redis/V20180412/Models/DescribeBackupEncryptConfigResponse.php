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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupEncryptConfig返回参数结构体
 *
 * @method boolean getBackupEncrypt() 获取<p>备份是否加密</p><p>枚举值：</p><ul><li>true： 加密</li><li>false： 不加密</li></ul>
 * @method void setBackupEncrypt(boolean $BackupEncrypt) 设置<p>备份是否加密</p><p>枚举值：</p><ul><li>true： 加密</li><li>false： 不加密</li></ul>
 * @method integer getEncryptKeyType() 获取<p>加密密钥类型。</p><p>枚举值：</p><ul><li>0： 腾讯云托管（默认）</li><li>1： 用户自定义 KMS 密钥</li></ul>
 * @method void setEncryptKeyType(integer $EncryptKeyType) 设置<p>加密密钥类型。</p><p>枚举值：</p><ul><li>0： 腾讯云托管（默认）</li><li>1： 用户自定义 KMS 密钥</li></ul>
 * @method string getKmsKeyId() 获取<p>KMS的密钥ID。</p><p>参数格式：xxxxxxx-xxxx-xxxx-xxxx-xxxxxxx</p>
 * @method void setKmsKeyId(string $KmsKeyId) 设置<p>KMS的密钥ID。</p><p>参数格式：xxxxxxx-xxxx-xxxx-xxxx-xxxxxxx</p>
 * @method string getKmsRegion() 获取<p>KMS地域信息。</p><p>参数格式：ap-xxxx</p>
 * @method void setKmsRegion(string $KmsRegion) 设置<p>KMS地域信息。</p><p>参数格式：ap-xxxx</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBackupEncryptConfigResponse extends AbstractModel
{
    /**
     * @var boolean <p>备份是否加密</p><p>枚举值：</p><ul><li>true： 加密</li><li>false： 不加密</li></ul>
     */
    public $BackupEncrypt;

    /**
     * @var integer <p>加密密钥类型。</p><p>枚举值：</p><ul><li>0： 腾讯云托管（默认）</li><li>1： 用户自定义 KMS 密钥</li></ul>
     */
    public $EncryptKeyType;

    /**
     * @var string <p>KMS的密钥ID。</p><p>参数格式：xxxxxxx-xxxx-xxxx-xxxx-xxxxxxx</p>
     */
    public $KmsKeyId;

    /**
     * @var string <p>KMS地域信息。</p><p>参数格式：ap-xxxx</p>
     */
    public $KmsRegion;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $BackupEncrypt <p>备份是否加密</p><p>枚举值：</p><ul><li>true： 加密</li><li>false： 不加密</li></ul>
     * @param integer $EncryptKeyType <p>加密密钥类型。</p><p>枚举值：</p><ul><li>0： 腾讯云托管（默认）</li><li>1： 用户自定义 KMS 密钥</li></ul>
     * @param string $KmsKeyId <p>KMS的密钥ID。</p><p>参数格式：xxxxxxx-xxxx-xxxx-xxxx-xxxxxxx</p>
     * @param string $KmsRegion <p>KMS地域信息。</p><p>参数格式：ap-xxxx</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("BackupEncrypt",$param) and $param["BackupEncrypt"] !== null) {
            $this->BackupEncrypt = $param["BackupEncrypt"];
        }

        if (array_key_exists("EncryptKeyType",$param) and $param["EncryptKeyType"] !== null) {
            $this->EncryptKeyType = $param["EncryptKeyType"];
        }

        if (array_key_exists("KmsKeyId",$param) and $param["KmsKeyId"] !== null) {
            $this->KmsKeyId = $param["KmsKeyId"];
        }

        if (array_key_exists("KmsRegion",$param) and $param["KmsRegion"] !== null) {
            $this->KmsRegion = $param["KmsRegion"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
