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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetEidToken返回参数结构体
 *
 * @method string getEidToken() 获取<p>一次核身流程的标识。</p><ul><li>有效时间为600秒。</li><li>完成核身后，可用该标识获取验证结果信息。</li></ul>
 * @method void setEidToken(string $EidToken) 设置<p>一次核身流程的标识。</p><ul><li>有效时间为600秒。</li><li>完成核身后，可用该标识获取验证结果信息。</li></ul>
 * @method string getUrl() 获取<p>发起核身流程的URL。</p><ul><li>用于H5场景核身。</li></ul>
 * @method void setUrl(string $Url) 设置<p>发起核身流程的URL。</p><ul><li>用于H5场景核身。</li></ul>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetEidTokenResponse extends AbstractModel
{
    /**
     * @var string <p>一次核身流程的标识。</p><ul><li>有效时间为600秒。</li><li>完成核身后，可用该标识获取验证结果信息。</li></ul>
     */
    public $EidToken;

    /**
     * @var string <p>发起核身流程的URL。</p><ul><li>用于H5场景核身。</li></ul>
     */
    public $Url;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $EidToken <p>一次核身流程的标识。</p><ul><li>有效时间为600秒。</li><li>完成核身后，可用该标识获取验证结果信息。</li></ul>
     * @param string $Url <p>发起核身流程的URL。</p><ul><li>用于H5场景核身。</li></ul>
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
        if (array_key_exists("EidToken",$param) and $param["EidToken"] !== null) {
            $this->EidToken = $param["EidToken"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
