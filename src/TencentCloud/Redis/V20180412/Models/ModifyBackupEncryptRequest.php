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
 * ModifyBackupEncrypt请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例 ID，请登录Redis控制台在实例列表复制实例 ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID，请登录Redis控制台在实例列表复制实例 ID。</p>
 * @method boolean getBackupEncrypt() 获取<p>是否开启备份加密。</p><p>默认值：false</p>
 * @method void setBackupEncrypt(boolean $BackupEncrypt) 设置<p>是否开启备份加密。</p><p>默认值：false</p>
 * @method integer getEncryptKeyType() 获取<p>加密密钥类型。</p><p>枚举值：</p><ul><li>0： 腾讯云托管（默认）</li><li>1： 用户自定义 KMS 密钥</li></ul><p>默认值：0</p>
 * @method void setEncryptKeyType(integer $EncryptKeyType) 设置<p>加密密钥类型。</p><p>枚举值：</p><ul><li>0： 腾讯云托管（默认）</li><li>1： 用户自定义 KMS 密钥</li></ul><p>默认值：0</p>
 * @method string getKmsKeyId() 获取<p>KMS的密钥ID。</p><p>参数格式：xxxxxxx-xxxx-xxxx-xxxx-xxxxxxx</p>
 * @method void setKmsKeyId(string $KmsKeyId) 设置<p>KMS的密钥ID。</p><p>参数格式：xxxxxxx-xxxx-xxxx-xxxx-xxxxxxx</p>
 * @method string getKmsRegion() 获取<p>地域信息。</p><p>参数格式：ap-xxxx</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/573/34406#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8">KMS支持的地域列表</a></p>
 * @method void setKmsRegion(string $KmsRegion) 设置<p>地域信息。</p><p>参数格式：ap-xxxx</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/573/34406#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8">KMS支持的地域列表</a></p>
 */
class ModifyBackupEncryptRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID，请登录Redis控制台在实例列表复制实例 ID。</p>
     */
    public $InstanceId;

    /**
     * @var boolean <p>是否开启备份加密。</p><p>默认值：false</p>
     */
    public $BackupEncrypt;

    /**
     * @var integer <p>加密密钥类型。</p><p>枚举值：</p><ul><li>0： 腾讯云托管（默认）</li><li>1： 用户自定义 KMS 密钥</li></ul><p>默认值：0</p>
     */
    public $EncryptKeyType;

    /**
     * @var string <p>KMS的密钥ID。</p><p>参数格式：xxxxxxx-xxxx-xxxx-xxxx-xxxxxxx</p>
     */
    public $KmsKeyId;

    /**
     * @var string <p>地域信息。</p><p>参数格式：ap-xxxx</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/573/34406#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8">KMS支持的地域列表</a></p>
     */
    public $KmsRegion;

    /**
     * @param string $InstanceId <p>实例 ID，请登录Redis控制台在实例列表复制实例 ID。</p>
     * @param boolean $BackupEncrypt <p>是否开启备份加密。</p><p>默认值：false</p>
     * @param integer $EncryptKeyType <p>加密密钥类型。</p><p>枚举值：</p><ul><li>0： 腾讯云托管（默认）</li><li>1： 用户自定义 KMS 密钥</li></ul><p>默认值：0</p>
     * @param string $KmsKeyId <p>KMS的密钥ID。</p><p>参数格式：xxxxxxx-xxxx-xxxx-xxxx-xxxxxxx</p>
     * @param string $KmsRegion <p>地域信息。</p><p>参数格式：ap-xxxx</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/573/34406#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8">KMS支持的地域列表</a></p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
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
    }
}
