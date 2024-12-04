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
namespace TencentCloud\Vcube\V20220410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSTS返回参数结构体
 *
 * @method string getBucket() 获取桶名称
 * @method void setBucket(string $Bucket) 设置桶名称
 * @method string getRegion() 获取地区
 * @method void setRegion(string $Region) 设置地区
 * @method integer getStartTime() 获取开始生效时间
 * @method void setStartTime(integer $StartTime) 设置开始生效时间
 * @method integer getExpiredTime() 获取临时token过期时间
 * @method void setExpiredTime(integer $ExpiredTime) 设置临时token过期时间
 * @method string getSessionToken() 获取临时token
 * @method void setSessionToken(string $SessionToken) 设置临时token
 * @method string getTmpSecretId() 获取临时SecretId
 * @method void setTmpSecretId(string $TmpSecretId) 设置临时SecretId
 * @method string getTmpSecretKey() 获取临时秘钥
 * @method void setTmpSecretKey(string $TmpSecretKey) 设置临时秘钥
 * @method string getPath() 获取上传的根路径，底下可以多层
 * @method void setPath(string $Path) 设置上传的根路径，底下可以多层
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSTSResponse extends AbstractModel
{
    /**
     * @var string 桶名称
     */
    public $Bucket;

    /**
     * @var string 地区
     */
    public $Region;

    /**
     * @var integer 开始生效时间
     */
    public $StartTime;

    /**
     * @var integer 临时token过期时间
     */
    public $ExpiredTime;

    /**
     * @var string 临时token
     */
    public $SessionToken;

    /**
     * @var string 临时SecretId
     */
    public $TmpSecretId;

    /**
     * @var string 临时秘钥
     */
    public $TmpSecretKey;

    /**
     * @var string 上传的根路径，底下可以多层
     */
    public $Path;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Bucket 桶名称
     * @param string $Region 地区
     * @param integer $StartTime 开始生效时间
     * @param integer $ExpiredTime 临时token过期时间
     * @param string $SessionToken 临时token
     * @param string $TmpSecretId 临时SecretId
     * @param string $TmpSecretKey 临时秘钥
     * @param string $Path 上传的根路径，底下可以多层
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
        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("SessionToken",$param) and $param["SessionToken"] !== null) {
            $this->SessionToken = $param["SessionToken"];
        }

        if (array_key_exists("TmpSecretId",$param) and $param["TmpSecretId"] !== null) {
            $this->TmpSecretId = $param["TmpSecretId"];
        }

        if (array_key_exists("TmpSecretKey",$param) and $param["TmpSecretKey"] !== null) {
            $this->TmpSecretKey = $param["TmpSecretKey"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
