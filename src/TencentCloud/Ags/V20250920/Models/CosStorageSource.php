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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 沙箱实例对象存储挂载配置
 *
 * @method string getEndpoint() 获取对象存储访问域名
 * @method void setEndpoint(string $Endpoint) 设置对象存储访问域名
 * @method string getBucketName() 获取对象存储桶名称
 * @method void setBucketName(string $BucketName) 设置对象存储桶名称
 * @method string getBucketPath() 获取对象存储桶路径，必须为以/起始的绝对路径
 * @method void setBucketPath(string $BucketPath) 设置对象存储桶路径，必须为以/起始的绝对路径
 */
class CosStorageSource extends AbstractModel
{
    /**
     * @var string 对象存储访问域名
     */
    public $Endpoint;

    /**
     * @var string 对象存储桶名称
     */
    public $BucketName;

    /**
     * @var string 对象存储桶路径，必须为以/起始的绝对路径
     */
    public $BucketPath;

    /**
     * @param string $Endpoint 对象存储访问域名
     * @param string $BucketName 对象存储桶名称
     * @param string $BucketPath 对象存储桶路径，必须为以/起始的绝对路径
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

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("BucketPath",$param) and $param["BucketPath"] !== null) {
            $this->BucketPath = $param["BucketPath"];
        }
    }
}
