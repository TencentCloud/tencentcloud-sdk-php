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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeReleaseFileSign返回参数结构体
 *
 * @method string getSecretKey() 获取临时密钥key
 * @method void setSecretKey(string $SecretKey) 设置临时密钥key
 * @method string getSecretID() 获取临时密钥 id
 * @method void setSecretID(string $SecretID) 设置临时密钥 id
 * @method string getSessionToken() 获取临时密钥临时 token
 * @method void setSessionToken(string $SessionToken) 设置临时密钥临时 token
 * @method integer getStartTime() 获取开始时间戳
 * @method void setStartTime(integer $StartTime) 设置开始时间戳
 * @method integer getExpiredTime() 获取过期时间戳
 * @method void setExpiredTime(integer $ExpiredTime) 设置过期时间戳
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeReleaseFileSignResponse extends AbstractModel
{
    /**
     * @var string 临时密钥key
     */
    public $SecretKey;

    /**
     * @var string 临时密钥 id
     */
    public $SecretID;

    /**
     * @var string 临时密钥临时 token
     */
    public $SessionToken;

    /**
     * @var integer 开始时间戳
     */
    public $StartTime;

    /**
     * @var integer 过期时间戳
     */
    public $ExpiredTime;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $SecretKey 临时密钥key
     * @param string $SecretID 临时密钥 id
     * @param string $SessionToken 临时密钥临时 token
     * @param integer $StartTime 开始时间戳
     * @param integer $ExpiredTime 过期时间戳
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
        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("SecretID",$param) and $param["SecretID"] !== null) {
            $this->SecretID = $param["SecretID"];
        }

        if (array_key_exists("SessionToken",$param) and $param["SessionToken"] !== null) {
            $this->SessionToken = $param["SessionToken"];
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
