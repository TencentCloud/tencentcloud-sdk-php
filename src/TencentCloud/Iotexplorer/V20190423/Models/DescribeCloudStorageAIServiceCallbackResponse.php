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
 * DescribeCloudStorageAIServiceCallback返回参数结构体
 *
 * @method string getType() 获取推送类型。http：HTTP 回调
 * @method void setType(string $Type) 设置推送类型。http：HTTP 回调
 * @method string getCallbackUrl() 获取HTTP 回调 URL
 * @method void setCallbackUrl(string $CallbackUrl) 设置HTTP 回调 URL
 * @method string getCallbackToken() 获取HTTP 回调鉴权 Token
 * @method void setCallbackToken(string $CallbackToken) 设置HTTP 回调鉴权 Token
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCloudStorageAIServiceCallbackResponse extends AbstractModel
{
    /**
     * @var string 推送类型。http：HTTP 回调
     */
    public $Type;

    /**
     * @var string HTTP 回调 URL
     */
    public $CallbackUrl;

    /**
     * @var string HTTP 回调鉴权 Token
     */
    public $CallbackToken;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Type 推送类型。http：HTTP 回调
     * @param string $CallbackUrl HTTP 回调 URL
     * @param string $CallbackToken HTTP 回调鉴权 Token
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("CallbackToken",$param) and $param["CallbackToken"] !== null) {
            $this->CallbackToken = $param["CallbackToken"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
