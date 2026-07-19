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
namespace TencentCloud\Cdwch\V20200915\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 群磁盘加密信息。用于 DescribeInstances / DescribeInstance 返回实例的当前加密配置，供控制台、SDK、运维侧识别该集群是否启用磁盘加密、使用的是哪一把 KMS 根密钥
 *
 * @method string getEncryptType() 获取<p>加密类型</p><p>枚举值：</p><ul><li>CUSTOMER_KMS： 客户自定义的KMS密钥信息</li><li>TENCENT_KEY： 使用腾讯云自动创建的KMS密钥信息</li></ul>
 * @method void setEncryptType(string $EncryptType) 设置<p>加密类型</p><p>枚举值：</p><ul><li>CUSTOMER_KMS： 客户自定义的KMS密钥信息</li><li>TENCENT_KEY： 使用腾讯云自动创建的KMS密钥信息</li></ul>
 * @method string getKmsKeyId() 获取<p>KMS 根密钥ID</p>
 * @method void setKmsKeyId(string $KmsKeyId) 设置<p>KMS 根密钥ID</p>
 * @method string getKmsRegion() 获取<p>KMS密钥地域</p>
 * @method void setKmsRegion(string $KmsRegion) 设置<p>KMS密钥地域</p>
 * @method string getKmsKeyName() 获取<p>KMS 根密钥 key 名</p>
 * @method void setKmsKeyName(string $KmsKeyName) 设置<p>KMS 根密钥 key 名</p>
 */
class DiskEncryptInfo extends AbstractModel
{
    /**
     * @var string <p>加密类型</p><p>枚举值：</p><ul><li>CUSTOMER_KMS： 客户自定义的KMS密钥信息</li><li>TENCENT_KEY： 使用腾讯云自动创建的KMS密钥信息</li></ul>
     */
    public $EncryptType;

    /**
     * @var string <p>KMS 根密钥ID</p>
     */
    public $KmsKeyId;

    /**
     * @var string <p>KMS密钥地域</p>
     */
    public $KmsRegion;

    /**
     * @var string <p>KMS 根密钥 key 名</p>
     */
    public $KmsKeyName;

    /**
     * @param string $EncryptType <p>加密类型</p><p>枚举值：</p><ul><li>CUSTOMER_KMS： 客户自定义的KMS密钥信息</li><li>TENCENT_KEY： 使用腾讯云自动创建的KMS密钥信息</li></ul>
     * @param string $KmsKeyId <p>KMS 根密钥ID</p>
     * @param string $KmsRegion <p>KMS密钥地域</p>
     * @param string $KmsKeyName <p>KMS 根密钥 key 名</p>
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
        if (array_key_exists("EncryptType",$param) and $param["EncryptType"] !== null) {
            $this->EncryptType = $param["EncryptType"];
        }

        if (array_key_exists("KmsKeyId",$param) and $param["KmsKeyId"] !== null) {
            $this->KmsKeyId = $param["KmsKeyId"];
        }

        if (array_key_exists("KmsRegion",$param) and $param["KmsRegion"] !== null) {
            $this->KmsRegion = $param["KmsRegion"];
        }

        if (array_key_exists("KmsKeyName",$param) and $param["KmsKeyName"] !== null) {
            $this->KmsKeyName = $param["KmsKeyName"];
        }
    }
}
