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
namespace TencentCloud\Iotvideo\V20201215\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCOSCredentials返回参数结构体
 *
 * @method string getStorageBucket() 获取COS存储桶名称
 * @method void setStorageBucket(string $StorageBucket) 设置COS存储桶名称
 * @method string getStorageRegion() 获取COS存储桶区域
 * @method void setStorageRegion(string $StorageRegion) 设置COS存储桶区域
 * @method string getStoragePath() 获取COS存储桶路径
 * @method void setStoragePath(string $StoragePath) 设置COS存储桶路径
 * @method string getSecretID() 获取COS上传用的SecretID
 * @method void setSecretID(string $SecretID) 设置COS上传用的SecretID
 * @method string getSecretKey() 获取COS上传用的SecretKey
 * @method void setSecretKey(string $SecretKey) 设置COS上传用的SecretKey
 * @method string getToken() 获取COS上传用的Token
 * @method void setToken(string $Token) 设置COS上传用的Token
 * @method integer getExpiredTime() 获取密钥信息过期时间
 * @method void setExpiredTime(integer $ExpiredTime) 设置密钥信息过期时间
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateCOSCredentialsResponse extends AbstractModel
{
    /**
     * @var string COS存储桶名称
     */
    public $StorageBucket;

    /**
     * @var string COS存储桶区域
     */
    public $StorageRegion;

    /**
     * @var string COS存储桶路径
     */
    public $StoragePath;

    /**
     * @var string COS上传用的SecretID
     */
    public $SecretID;

    /**
     * @var string COS上传用的SecretKey
     */
    public $SecretKey;

    /**
     * @var string COS上传用的Token
     */
    public $Token;

    /**
     * @var integer 密钥信息过期时间
     */
    public $ExpiredTime;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $StorageBucket COS存储桶名称
     * @param string $StorageRegion COS存储桶区域
     * @param string $StoragePath COS存储桶路径
     * @param string $SecretID COS上传用的SecretID
     * @param string $SecretKey COS上传用的SecretKey
     * @param string $Token COS上传用的Token
     * @param integer $ExpiredTime 密钥信息过期时间
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("StorageBucket",$param) and $param["StorageBucket"] !== null) {
            $this->StorageBucket = $param["StorageBucket"];
        }

        if (array_key_exists("StorageRegion",$param) and $param["StorageRegion"] !== null) {
            $this->StorageRegion = $param["StorageRegion"];
        }

        if (array_key_exists("StoragePath",$param) and $param["StoragePath"] !== null) {
            $this->StoragePath = $param["StoragePath"];
        }

        if (array_key_exists("SecretID",$param) and $param["SecretID"] !== null) {
            $this->SecretID = $param["SecretID"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
