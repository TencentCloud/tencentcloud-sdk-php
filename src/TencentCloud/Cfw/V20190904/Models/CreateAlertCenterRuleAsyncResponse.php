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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAlertCenterRuleAsync返回参数结构体
 *
 * @method integer getReturnCode() 获取请求返回码，0 表示已进入异步处理；处理进度见 Status。
 * @method void setReturnCode(integer $ReturnCode) 设置请求返回码，0 表示已进入异步处理；处理进度见 Status。
 * @method string getReturnMsg() 获取与 ReturnCode 对应的结果信息，成功时为 success。
 * @method void setReturnMsg(string $ReturnMsg) 设置与 ReturnCode 对应的结果信息，成功时为 success。
 * @method integer getStatus() 获取异步处理状态：1 表示处理中，使用完全相同的请求参数继续查询；修改参数会发起新的操作。0 表示处理结束，处置结果通过对应查询接口获取。
 * @method void setStatus(integer $Status) 设置异步处理状态：1 表示处理中，使用完全相同的请求参数继续查询；修改参数会发起新的操作。0 表示处理结束，处置结果通过对应查询接口获取。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateAlertCenterRuleAsyncResponse extends AbstractModel
{
    /**
     * @var integer 请求返回码，0 表示已进入异步处理；处理进度见 Status。
     */
    public $ReturnCode;

    /**
     * @var string 与 ReturnCode 对应的结果信息，成功时为 success。
     */
    public $ReturnMsg;

    /**
     * @var integer 异步处理状态：1 表示处理中，使用完全相同的请求参数继续查询；修改参数会发起新的操作。0 表示处理结束，处置结果通过对应查询接口获取。
     */
    public $Status;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ReturnCode 请求返回码，0 表示已进入异步处理；处理进度见 Status。
     * @param string $ReturnMsg 与 ReturnCode 对应的结果信息，成功时为 success。
     * @param integer $Status 异步处理状态：1 表示处理中，使用完全相同的请求参数继续查询；修改参数会发起新的操作。0 表示处理结束，处置结果通过对应查询接口获取。
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
        if (array_key_exists("ReturnCode",$param) and $param["ReturnCode"] !== null) {
            $this->ReturnCode = $param["ReturnCode"];
        }

        if (array_key_exists("ReturnMsg",$param) and $param["ReturnMsg"] !== null) {
            $this->ReturnMsg = $param["ReturnMsg"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
