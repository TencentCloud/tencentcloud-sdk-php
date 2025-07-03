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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateEmbedWebUrl返回参数结构体
 *
 * @method string getWebUrl() 获取嵌入的web链接，有效期：5分钟
链接仅能使用一次
建议：每次都用接口生成链接，保证链接的有效性
<br/>EmbedType=PREVIEW_CC_FLOW，该url为h5链接
 * @method void setWebUrl(string $WebUrl) 设置嵌入的web链接，有效期：5分钟
链接仅能使用一次
建议：每次都用接口生成链接，保证链接的有效性
<br/>EmbedType=PREVIEW_CC_FLOW，该url为h5链接
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateEmbedWebUrlResponse extends AbstractModel
{
    /**
     * @var string 嵌入的web链接，有效期：5分钟
链接仅能使用一次
建议：每次都用接口生成链接，保证链接的有效性
<br/>EmbedType=PREVIEW_CC_FLOW，该url为h5链接
     */
    public $WebUrl;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $WebUrl 嵌入的web链接，有效期：5分钟
链接仅能使用一次
建议：每次都用接口生成链接，保证链接的有效性
<br/>EmbedType=PREVIEW_CC_FLOW，该url为h5链接
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
        if (array_key_exists("WebUrl",$param) and $param["WebUrl"] !== null) {
            $this->WebUrl = $param["WebUrl"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
