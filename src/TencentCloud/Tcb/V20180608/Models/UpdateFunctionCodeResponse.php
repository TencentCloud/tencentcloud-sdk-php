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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateFunctionCode返回参数结构体
 *
 * @method string getSCFErrorCode() 获取<p>调用scf返回的错误码</p>
 * @method void setSCFErrorCode(string $SCFErrorCode) 设置<p>调用scf返回的错误码</p>
 * @method string getSCFErrorMsg() 获取<p>错误码对应的描述信息</p>
 * @method void setSCFErrorMsg(string $SCFErrorMsg) 设置<p>错误码对应的描述信息</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class UpdateFunctionCodeResponse extends AbstractModel
{
    /**
     * @var string <p>调用scf返回的错误码</p>
     */
    public $SCFErrorCode;

    /**
     * @var string <p>错误码对应的描述信息</p>
     */
    public $SCFErrorMsg;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $SCFErrorCode <p>调用scf返回的错误码</p>
     * @param string $SCFErrorMsg <p>错误码对应的描述信息</p>
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
        if (array_key_exists("SCFErrorCode",$param) and $param["SCFErrorCode"] !== null) {
            $this->SCFErrorCode = $param["SCFErrorCode"];
        }

        if (array_key_exists("SCFErrorMsg",$param) and $param["SCFErrorMsg"] !== null) {
            $this->SCFErrorMsg = $param["SCFErrorMsg"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
