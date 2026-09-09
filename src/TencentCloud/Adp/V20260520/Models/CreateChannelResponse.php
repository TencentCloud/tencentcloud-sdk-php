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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateChannel返回参数结构体
 *
 * @method string getChannelId() 获取<p>渠道ID</p>
 * @method void setChannelId(string $ChannelId) 设置<p>渠道ID</p>
 * @method string getQrcodeUrl() 获取<p>二维码URL（扫码类渠道创建后回填，其他场景为空）</p>
 * @method void setQrcodeUrl(string $QrcodeUrl) 设置<p>二维码URL（扫码类渠道创建后回填，其他场景为空）</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateChannelResponse extends AbstractModel
{
    /**
     * @var string <p>渠道ID</p>
     */
    public $ChannelId;

    /**
     * @var string <p>二维码URL（扫码类渠道创建后回填，其他场景为空）</p>
     */
    public $QrcodeUrl;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ChannelId <p>渠道ID</p>
     * @param string $QrcodeUrl <p>二维码URL（扫码类渠道创建后回填，其他场景为空）</p>
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
        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("QrcodeUrl",$param) and $param["QrcodeUrl"] !== null) {
            $this->QrcodeUrl = $param["QrcodeUrl"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
