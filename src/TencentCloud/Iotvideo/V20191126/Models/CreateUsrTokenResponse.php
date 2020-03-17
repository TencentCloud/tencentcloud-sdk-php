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
namespace TencentCloud\Iotvideo\V20191126\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getAccessId() 获取终端用户在IotVideo上的唯一标识id
 * @method void setAccessId(string $AccessId) 设置终端用户在IotVideo上的唯一标识id
 * @method string getAccessToken() 获取IotVideo平台的accessToken
 * @method void setAccessToken(string $AccessToken) 设置IotVideo平台的accessToken
 * @method integer getExpireTime() 获取Token的过期时间，单位秒(UTC时间)
 * @method void setExpireTime(integer $ExpireTime) 设置Token的过期时间，单位秒(UTC时间)
 * @method string getTerminalId() 获取终端id
 * @method void setTerminalId(string $TerminalId) 设置终端id
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */

/**
 *CreateUsrToken返回参数结构体
 */
class CreateUsrTokenResponse extends AbstractModel
{
    /**
     * @var string 终端用户在IotVideo上的唯一标识id
     */
    public $AccessId;

    /**
     * @var string IotVideo平台的accessToken
     */
    public $AccessToken;

    /**
     * @var integer Token的过期时间，单位秒(UTC时间)
     */
    public $ExpireTime;

    /**
     * @var string 终端id
     */
    public $TerminalId;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;
    /**
     * @param string $AccessId 终端用户在IotVideo上的唯一标识id
     * @param string $AccessToken IotVideo平台的accessToken
     * @param integer $ExpireTime Token的过期时间，单位秒(UTC时间)
     * @param string $TerminalId 终端id
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
        if (array_key_exists("AccessId",$param) and $param["AccessId"] !== null) {
            $this->AccessId = $param["AccessId"];
        }

        if (array_key_exists("AccessToken",$param) and $param["AccessToken"] !== null) {
            $this->AccessToken = $param["AccessToken"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("TerminalId",$param) and $param["TerminalId"] !== null) {
            $this->TerminalId = $param["TerminalId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
