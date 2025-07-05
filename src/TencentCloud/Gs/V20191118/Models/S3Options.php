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
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * S3协议参数
 *
 * @method string getEndPoint() 获取存储节点
 * @method void setEndPoint(string $EndPoint) 设置存储节点
 * @method string getBucket() 获取存储桶
 * @method void setBucket(string $Bucket) 设置存储桶
 * @method string getAccessKeyId() 获取密钥 ID
 * @method void setAccessKeyId(string $AccessKeyId) 设置密钥 ID
 * @method string getSecretAccessKey() 获取密钥 Key
 * @method void setSecretAccessKey(string $SecretAccessKey) 设置密钥 Key
 */
class S3Options extends AbstractModel
{
    /**
     * @var string 存储节点
     */
    public $EndPoint;

    /**
     * @var string 存储桶
     */
    public $Bucket;

    /**
     * @var string 密钥 ID
     */
    public $AccessKeyId;

    /**
     * @var string 密钥 Key
     */
    public $SecretAccessKey;

    /**
     * @param string $EndPoint 存储节点
     * @param string $Bucket 存储桶
     * @param string $AccessKeyId 密钥 ID
     * @param string $SecretAccessKey 密钥 Key
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
        if (array_key_exists("EndPoint",$param) and $param["EndPoint"] !== null) {
            $this->EndPoint = $param["EndPoint"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("AccessKeyId",$param) and $param["AccessKeyId"] !== null) {
            $this->AccessKeyId = $param["AccessKeyId"];
        }

        if (array_key_exists("SecretAccessKey",$param) and $param["SecretAccessKey"] !== null) {
            $this->SecretAccessKey = $param["SecretAccessKey"];
        }
    }
}
