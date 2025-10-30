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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实时日志投递到 AWS S3 兼容存储桶的配置信息。
 *
 * @method string getEndpoint() 获取不包含存储桶名称或路径的 URL，例如：`https://storage.googleapis.com`、`https://s3.ap-northeast-2.amazonaws.com`、`https://cos.ap-nanjing.myqcloud.com`。
 * @method void setEndpoint(string $Endpoint) 设置不包含存储桶名称或路径的 URL，例如：`https://storage.googleapis.com`、`https://s3.ap-northeast-2.amazonaws.com`、`https://cos.ap-nanjing.myqcloud.com`。
 * @method string getRegion() 获取存储桶所在的地域，例如：`ap-northeast-2`。
 * @method void setRegion(string $Region) 设置存储桶所在的地域，例如：`ap-northeast-2`。
 * @method string getBucket() 获取存储桶名称和日志存储目录，例如：`your_bucket_name/EO-logs/`。如果存储桶中无此目录则会自动创建。
 * @method void setBucket(string $Bucket) 设置存储桶名称和日志存储目录，例如：`your_bucket_name/EO-logs/`。如果存储桶中无此目录则会自动创建。
 * @method string getAccessId() 获取访问存储桶使用的 Access Key ID。
 * @method void setAccessId(string $AccessId) 设置访问存储桶使用的 Access Key ID。
 * @method string getAccessKey() 获取访问存储桶使用的 secret key。
 * @method void setAccessKey(string $AccessKey) 设置访问存储桶使用的 secret key。
 * @method string getCompressType() 获取数据压缩类型，取值有: <li> gzip：gzip压缩。</li>不填表示不启用压缩。
 * @method void setCompressType(string $CompressType) 设置数据压缩类型，取值有: <li> gzip：gzip压缩。</li>不填表示不启用压缩。
 */
class S3 extends AbstractModel
{
    /**
     * @var string 不包含存储桶名称或路径的 URL，例如：`https://storage.googleapis.com`、`https://s3.ap-northeast-2.amazonaws.com`、`https://cos.ap-nanjing.myqcloud.com`。
     */
    public $Endpoint;

    /**
     * @var string 存储桶所在的地域，例如：`ap-northeast-2`。
     */
    public $Region;

    /**
     * @var string 存储桶名称和日志存储目录，例如：`your_bucket_name/EO-logs/`。如果存储桶中无此目录则会自动创建。
     */
    public $Bucket;

    /**
     * @var string 访问存储桶使用的 Access Key ID。
     */
    public $AccessId;

    /**
     * @var string 访问存储桶使用的 secret key。
     */
    public $AccessKey;

    /**
     * @var string 数据压缩类型，取值有: <li> gzip：gzip压缩。</li>不填表示不启用压缩。
     */
    public $CompressType;

    /**
     * @param string $Endpoint 不包含存储桶名称或路径的 URL，例如：`https://storage.googleapis.com`、`https://s3.ap-northeast-2.amazonaws.com`、`https://cos.ap-nanjing.myqcloud.com`。
     * @param string $Region 存储桶所在的地域，例如：`ap-northeast-2`。
     * @param string $Bucket 存储桶名称和日志存储目录，例如：`your_bucket_name/EO-logs/`。如果存储桶中无此目录则会自动创建。
     * @param string $AccessId 访问存储桶使用的 Access Key ID。
     * @param string $AccessKey 访问存储桶使用的 secret key。
     * @param string $CompressType 数据压缩类型，取值有: <li> gzip：gzip压缩。</li>不填表示不启用压缩。
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
        if (array_key_exists("Endpoint",$param) and $param["Endpoint"] !== null) {
            $this->Endpoint = $param["Endpoint"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("AccessId",$param) and $param["AccessId"] !== null) {
            $this->AccessId = $param["AccessId"];
        }

        if (array_key_exists("AccessKey",$param) and $param["AccessKey"] !== null) {
            $this->AccessKey = $param["AccessKey"];
        }

        if (array_key_exists("CompressType",$param) and $param["CompressType"] !== null) {
            $this->CompressType = $param["CompressType"];
        }
    }
}
