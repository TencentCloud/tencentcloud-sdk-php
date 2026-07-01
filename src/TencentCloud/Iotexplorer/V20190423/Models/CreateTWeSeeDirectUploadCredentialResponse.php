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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTWeSeeDirectUploadCredential返回参数结构体
 *
 * @method integer getExpiredTime() 获取<p>访问 COS 的临时密钥过期时间（秒级 UNIX 时间戳）</p>
 * @method void setExpiredTime(integer $ExpiredTime) 设置<p>访问 COS 的临时密钥过期时间（秒级 UNIX 时间戳）</p>
 * @method string getSecretId() 获取<p>访问 COS 的临时密钥 SecretId</p>
 * @method void setSecretId(string $SecretId) 设置<p>访问 COS 的临时密钥 SecretId</p>
 * @method string getSecretKey() 获取<p>访问 COS 的临时密钥 SecretKey</p>
 * @method void setSecretKey(string $SecretKey) 设置<p>访问 COS 的临时密钥 SecretKey</p>
 * @method string getStorageBucket() 获取<p>COS 存储桶名称</p>
 * @method void setStorageBucket(string $StorageBucket) 设置<p>COS 存储桶名称</p>
 * @method string getStoragePath() 获取<p>COS 对象 Key 前缀。返回的临时凭据仅允许上传到此前缀下，格式为 Direct/{Uin}/{SessionId}/。</p>
 * @method void setStoragePath(string $StoragePath) 设置<p>COS 对象 Key 前缀。返回的临时凭据仅允许上传到此前缀下，格式为 Direct/{Uin}/{SessionId}/。</p>
 * @method string getStorageRegion() 获取<p>COS 存储桶所在地域</p>
 * @method void setStorageRegion(string $StorageRegion) 设置<p>COS 存储桶所在地域</p>
 * @method string getToken() 获取<p>访问 COS 的临时密钥 Token</p>
 * @method void setToken(string $Token) 设置<p>访问 COS 的临时密钥 Token</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateTWeSeeDirectUploadCredentialResponse extends AbstractModel
{
    /**
     * @var integer <p>访问 COS 的临时密钥过期时间（秒级 UNIX 时间戳）</p>
     */
    public $ExpiredTime;

    /**
     * @var string <p>访问 COS 的临时密钥 SecretId</p>
     */
    public $SecretId;

    /**
     * @var string <p>访问 COS 的临时密钥 SecretKey</p>
     */
    public $SecretKey;

    /**
     * @var string <p>COS 存储桶名称</p>
     */
    public $StorageBucket;

    /**
     * @var string <p>COS 对象 Key 前缀。返回的临时凭据仅允许上传到此前缀下，格式为 Direct/{Uin}/{SessionId}/。</p>
     */
    public $StoragePath;

    /**
     * @var string <p>COS 存储桶所在地域</p>
     */
    public $StorageRegion;

    /**
     * @var string <p>访问 COS 的临时密钥 Token</p>
     */
    public $Token;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ExpiredTime <p>访问 COS 的临时密钥过期时间（秒级 UNIX 时间戳）</p>
     * @param string $SecretId <p>访问 COS 的临时密钥 SecretId</p>
     * @param string $SecretKey <p>访问 COS 的临时密钥 SecretKey</p>
     * @param string $StorageBucket <p>COS 存储桶名称</p>
     * @param string $StoragePath <p>COS 对象 Key 前缀。返回的临时凭据仅允许上传到此前缀下，格式为 Direct/{Uin}/{SessionId}/。</p>
     * @param string $StorageRegion <p>COS 存储桶所在地域</p>
     * @param string $Token <p>访问 COS 的临时密钥 Token</p>
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
        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("SecretId",$param) and $param["SecretId"] !== null) {
            $this->SecretId = $param["SecretId"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("StorageBucket",$param) and $param["StorageBucket"] !== null) {
            $this->StorageBucket = $param["StorageBucket"];
        }

        if (array_key_exists("StoragePath",$param) and $param["StoragePath"] !== null) {
            $this->StoragePath = $param["StoragePath"];
        }

        if (array_key_exists("StorageRegion",$param) and $param["StorageRegion"] !== null) {
            $this->StorageRegion = $param["StorageRegion"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
