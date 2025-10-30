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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UploadAttributeLabel返回参数结构体
 *
 * @method string getErrorMsg() 获取导入错误
 * @method void setErrorMsg(string $ErrorMsg) 设置导入错误
 * @method string getErrorLink() 获取错误链接
 * @method void setErrorLink(string $ErrorLink) 设置错误链接
 * @method string getErrorLinkText() 获取错误链接文本
 * @method void setErrorLinkText(string $ErrorLinkText) 设置错误链接文本
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class UploadAttributeLabelResponse extends AbstractModel
{
    /**
     * @var string 导入错误
     */
    public $ErrorMsg;

    /**
     * @var string 错误链接
     */
    public $ErrorLink;

    /**
     * @var string 错误链接文本
     */
    public $ErrorLinkText;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ErrorMsg 导入错误
     * @param string $ErrorLink 错误链接
     * @param string $ErrorLinkText 错误链接文本
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
        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }

        if (array_key_exists("ErrorLink",$param) and $param["ErrorLink"] !== null) {
            $this->ErrorLink = $param["ErrorLink"];
        }

        if (array_key_exists("ErrorLinkText",$param) and $param["ErrorLinkText"] !== null) {
            $this->ErrorLinkText = $param["ErrorLinkText"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
