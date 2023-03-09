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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AWS S3 输出位置
 *
 * @method string getS3Bucket() 获取S3 bucket。
 * @method void setS3Bucket(string $S3Bucket) 设置S3 bucket。
 * @method string getS3Region() 获取S3 bucket 对应的区域。
 * @method void setS3Region(string $S3Region) 设置S3 bucket 对应的区域。
 * @method string getS3SecretId() 获取AWS 内网上传 媒体资源的秘钥id。
 * @method void setS3SecretId(string $S3SecretId) 设置AWS 内网上传 媒体资源的秘钥id。
 * @method string getS3SecretKey() 获取AWS 内网上传 媒体资源的秘钥key。
 * @method void setS3SecretKey(string $S3SecretKey) 设置AWS 内网上传 媒体资源的秘钥key。
 */
class S3OutputStorage extends AbstractModel
{
    /**
     * @var string S3 bucket。
     */
    public $S3Bucket;

    /**
     * @var string S3 bucket 对应的区域。
     */
    public $S3Region;

    /**
     * @var string AWS 内网上传 媒体资源的秘钥id。
     */
    public $S3SecretId;

    /**
     * @var string AWS 内网上传 媒体资源的秘钥key。
     */
    public $S3SecretKey;

    /**
     * @param string $S3Bucket S3 bucket。
     * @param string $S3Region S3 bucket 对应的区域。
     * @param string $S3SecretId AWS 内网上传 媒体资源的秘钥id。
     * @param string $S3SecretKey AWS 内网上传 媒体资源的秘钥key。
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
        if (array_key_exists("S3Bucket",$param) and $param["S3Bucket"] !== null) {
            $this->S3Bucket = $param["S3Bucket"];
        }

        if (array_key_exists("S3Region",$param) and $param["S3Region"] !== null) {
            $this->S3Region = $param["S3Region"];
        }

        if (array_key_exists("S3SecretId",$param) and $param["S3SecretId"] !== null) {
            $this->S3SecretId = $param["S3SecretId"];
        }

        if (array_key_exists("S3SecretKey",$param) and $param["S3SecretKey"] !== null) {
            $this->S3SecretKey = $param["S3SecretKey"];
        }
    }
}
