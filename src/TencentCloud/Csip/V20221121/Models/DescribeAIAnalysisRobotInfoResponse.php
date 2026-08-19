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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAIAnalysisRobotInfo返回参数结构体
 *
 * @method string getURL() 获取<p>机器人配置url</p>
 * @method void setURL(string $URL) 设置<p>机器人配置url</p>
 * @method string getAccessToken() 获取<p>访问token</p>
 * @method void setAccessToken(string $AccessToken) 设置<p>访问token</p>
 * @method string getAesKey() 获取<p>aes key</p>
 * @method void setAesKey(string $AesKey) 设置<p>aes key</p>
 * @method string getBotID() 获取<p>机器人ID</p>
 * @method void setBotID(string $BotID) 设置<p>机器人ID</p>
 * @method string getQrcodeImageContext() 获取<p>二维码图片获取地址</p>
 * @method void setQrcodeImageContext(string $QrcodeImageContext) 设置<p>二维码图片获取地址</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAIAnalysisRobotInfoResponse extends AbstractModel
{
    /**
     * @var string <p>机器人配置url</p>
     */
    public $URL;

    /**
     * @var string <p>访问token</p>
     */
    public $AccessToken;

    /**
     * @var string <p>aes key</p>
     */
    public $AesKey;

    /**
     * @var string <p>机器人ID</p>
     */
    public $BotID;

    /**
     * @var string <p>二维码图片获取地址</p>
     */
    public $QrcodeImageContext;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $URL <p>机器人配置url</p>
     * @param string $AccessToken <p>访问token</p>
     * @param string $AesKey <p>aes key</p>
     * @param string $BotID <p>机器人ID</p>
     * @param string $QrcodeImageContext <p>二维码图片获取地址</p>
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
        if (array_key_exists("URL",$param) and $param["URL"] !== null) {
            $this->URL = $param["URL"];
        }

        if (array_key_exists("AccessToken",$param) and $param["AccessToken"] !== null) {
            $this->AccessToken = $param["AccessToken"];
        }

        if (array_key_exists("AesKey",$param) and $param["AesKey"] !== null) {
            $this->AesKey = $param["AesKey"];
        }

        if (array_key_exists("BotID",$param) and $param["BotID"] !== null) {
            $this->BotID = $param["BotID"];
        }

        if (array_key_exists("QrcodeImageContext",$param) and $param["QrcodeImageContext"] !== null) {
            $this->QrcodeImageContext = $param["QrcodeImageContext"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
