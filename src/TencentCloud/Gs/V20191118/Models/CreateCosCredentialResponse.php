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
 * CreateCosCredential返回参数结构体
 *
 * @method string getSecretID() 获取Cos SecretID
 * @method void setSecretID(string $SecretID) 设置Cos SecretID
 * @method string getSecretKey() 获取Cos SecretKey
 * @method void setSecretKey(string $SecretKey) 设置Cos SecretKey
 * @method string getSessionToken() 获取Cos Session
 * @method void setSessionToken(string $SessionToken) 设置Cos Session
 * @method string getCosBucket() 获取Cos Bucket
 * @method void setCosBucket(string $CosBucket) 设置Cos Bucket
 * @method string getCosRegion() 获取Cos Region
 * @method void setCosRegion(string $CosRegion) 设置Cos Region
 * @method string getPath() 获取Cos 操作路径
 * @method void setPath(string $Path) 设置Cos 操作路径
 * @method integer getStartTime() 获取Cos 密钥的起始时间
 * @method void setStartTime(integer $StartTime) 设置Cos 密钥的起始时间
 * @method integer getExpiredTime() 获取Cos 密钥的失效时间
 * @method void setExpiredTime(integer $ExpiredTime) 设置Cos 密钥的失效时间
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateCosCredentialResponse extends AbstractModel
{
    /**
     * @var string Cos SecretID
     */
    public $SecretID;

    /**
     * @var string Cos SecretKey
     */
    public $SecretKey;

    /**
     * @var string Cos Session
     */
    public $SessionToken;

    /**
     * @var string Cos Bucket
     */
    public $CosBucket;

    /**
     * @var string Cos Region
     */
    public $CosRegion;

    /**
     * @var string Cos 操作路径
     */
    public $Path;

    /**
     * @var integer Cos 密钥的起始时间
     */
    public $StartTime;

    /**
     * @var integer Cos 密钥的失效时间
     */
    public $ExpiredTime;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $SecretID Cos SecretID
     * @param string $SecretKey Cos SecretKey
     * @param string $SessionToken Cos Session
     * @param string $CosBucket Cos Bucket
     * @param string $CosRegion Cos Region
     * @param string $Path Cos 操作路径
     * @param integer $StartTime Cos 密钥的起始时间
     * @param integer $ExpiredTime Cos 密钥的失效时间
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
        if (array_key_exists("SecretID",$param) and $param["SecretID"] !== null) {
            $this->SecretID = $param["SecretID"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("SessionToken",$param) and $param["SessionToken"] !== null) {
            $this->SessionToken = $param["SessionToken"];
        }

        if (array_key_exists("CosBucket",$param) and $param["CosBucket"] !== null) {
            $this->CosBucket = $param["CosBucket"];
        }

        if (array_key_exists("CosRegion",$param) and $param["CosRegion"] !== null) {
            $this->CosRegion = $param["CosRegion"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
