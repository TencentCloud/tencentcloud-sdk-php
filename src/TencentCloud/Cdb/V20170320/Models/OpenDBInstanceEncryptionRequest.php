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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OpenDBInstanceEncryption请求参数结构体
 *
 * @method string getInstanceId() 获取<p>云数据库实例 ID。可通过 <a href="https://cloud.tencent.com/document/product/236/15872">DescribeDBInstances</a> 接口获取。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>云数据库实例 ID。可通过 <a href="https://cloud.tencent.com/document/product/236/15872">DescribeDBInstances</a> 接口获取。</p>
 * @method string getKeyId() 获取<p>用户自定义密钥 ID，CMK 唯一标识符。该值为空时，将使用腾讯云自动生成的密钥 KMS-CDB。</p>
 * @method void setKeyId(string $KeyId) 设置<p>用户自定义密钥 ID，CMK 唯一标识符。该值为空时，将使用腾讯云自动生成的密钥 KMS-CDB。</p>
 * @method string getKeyRegion() 获取<p>用户自定义密钥的存储地域。如：ap-guangzhou 。KeyId 不为空时，该参数必填。</p>
 * @method void setKeyRegion(string $KeyRegion) 设置<p>用户自定义密钥的存储地域。如：ap-guangzhou 。KeyId 不为空时，该参数必填。</p>
 */
class OpenDBInstanceEncryptionRequest extends AbstractModel
{
    /**
     * @var string <p>云数据库实例 ID。可通过 <a href="https://cloud.tencent.com/document/product/236/15872">DescribeDBInstances</a> 接口获取。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>用户自定义密钥 ID，CMK 唯一标识符。该值为空时，将使用腾讯云自动生成的密钥 KMS-CDB。</p>
     */
    public $KeyId;

    /**
     * @var string <p>用户自定义密钥的存储地域。如：ap-guangzhou 。KeyId 不为空时，该参数必填。</p>
     */
    public $KeyRegion;

    /**
     * @param string $InstanceId <p>云数据库实例 ID。可通过 <a href="https://cloud.tencent.com/document/product/236/15872">DescribeDBInstances</a> 接口获取。</p>
     * @param string $KeyId <p>用户自定义密钥 ID，CMK 唯一标识符。该值为空时，将使用腾讯云自动生成的密钥 KMS-CDB。</p>
     * @param string $KeyRegion <p>用户自定义密钥的存储地域。如：ap-guangzhou 。KeyId 不为空时，该参数必填。</p>
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

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("KeyRegion",$param) and $param["KeyRegion"] !== null) {
            $this->KeyRegion = $param["KeyRegion"];
        }
    }
}
