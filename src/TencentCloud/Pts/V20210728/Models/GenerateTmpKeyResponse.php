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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GenerateTmpKey返回参数结构体
 *
 * @method integer getStartTime() 获取临时访问凭证获取时刻的时间戳（单位秒）
 * @method void setStartTime(integer $StartTime) 设置临时访问凭证获取时刻的时间戳（单位秒）
 * @method integer getExpiredTime() 获取临时访问凭证超时 时刻的时间戳（单位秒）
 * @method void setExpiredTime(integer $ExpiredTime) 设置临时访问凭证超时 时刻的时间戳（单位秒）
 * @method Credentials getCredentials() 获取临时访问凭证
 * @method void setCredentials(Credentials $Credentials) 设置临时访问凭证
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GenerateTmpKeyResponse extends AbstractModel
{
    /**
     * @var integer 临时访问凭证获取时刻的时间戳（单位秒）
     */
    public $StartTime;

    /**
     * @var integer 临时访问凭证超时 时刻的时间戳（单位秒）
     */
    public $ExpiredTime;

    /**
     * @var Credentials 临时访问凭证
     */
    public $Credentials;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $StartTime 临时访问凭证获取时刻的时间戳（单位秒）
     * @param integer $ExpiredTime 临时访问凭证超时 时刻的时间戳（单位秒）
     * @param Credentials $Credentials 临时访问凭证
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("Credentials",$param) and $param["Credentials"] !== null) {
            $this->Credentials = new Credentials();
            $this->Credentials->deserialize($param["Credentials"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
