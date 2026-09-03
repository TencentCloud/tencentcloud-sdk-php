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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单文件 COS 输入源
 *
 * @method string getBucket() 获取<p>存储桶名称</p>
 * @method void setBucket(string $Bucket) 设置<p>存储桶名称</p>
 * @method string getEndpoint() 获取<p>存储服务地址</p>
 * @method void setEndpoint(string $Endpoint) 设置<p>存储服务地址</p>
 * @method string getRegion() 获取<p>存储区域</p>
 * @method void setRegion(string $Region) 设置<p>存储区域</p>
 * @method string getKey() 获取<p>视频文件路径</p>
 * @method void setKey(string $Key) 设置<p>视频文件路径</p>
 * @method SecretInfo getSecret() 获取<p>访问凭证，需对该桶有读取权限</p>
 * @method void setSecret(SecretInfo $Secret) 设置<p>访问凭证，需对该桶有读取权限</p>
 * @method integer getIsCos() 获取<p>是否腾讯云 COS：1 是，0 否。使用腾讯云 COS 时必须传 1</p><p>取值范围：[0, 1]</p>
 * @method void setIsCos(integer $IsCos) 设置<p>是否腾讯云 COS：1 是，0 否。使用腾讯云 COS 时必须传 1</p><p>取值范围：[0, 1]</p>
 */
class S3SourceInfo extends AbstractModel
{
    /**
     * @var string <p>存储桶名称</p>
     */
    public $Bucket;

    /**
     * @var string <p>存储服务地址</p>
     */
    public $Endpoint;

    /**
     * @var string <p>存储区域</p>
     */
    public $Region;

    /**
     * @var string <p>视频文件路径</p>
     */
    public $Key;

    /**
     * @var SecretInfo <p>访问凭证，需对该桶有读取权限</p>
     */
    public $Secret;

    /**
     * @var integer <p>是否腾讯云 COS：1 是，0 否。使用腾讯云 COS 时必须传 1</p><p>取值范围：[0, 1]</p>
     */
    public $IsCos;

    /**
     * @param string $Bucket <p>存储桶名称</p>
     * @param string $Endpoint <p>存储服务地址</p>
     * @param string $Region <p>存储区域</p>
     * @param string $Key <p>视频文件路径</p>
     * @param SecretInfo $Secret <p>访问凭证，需对该桶有读取权限</p>
     * @param integer $IsCos <p>是否腾讯云 COS：1 是，0 否。使用腾讯云 COS 时必须传 1</p><p>取值范围：[0, 1]</p>
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
        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Endpoint",$param) and $param["Endpoint"] !== null) {
            $this->Endpoint = $param["Endpoint"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Secret",$param) and $param["Secret"] !== null) {
            $this->Secret = new SecretInfo();
            $this->Secret->deserialize($param["Secret"]);
        }

        if (array_key_exists("IsCos",$param) and $param["IsCos"] !== null) {
            $this->IsCos = $param["IsCos"];
        }
    }
}
