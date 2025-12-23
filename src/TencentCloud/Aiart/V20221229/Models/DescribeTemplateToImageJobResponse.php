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
namespace TencentCloud\Aiart\V20221229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTemplateToImageJob返回参数结构体
 *
 * @method string getStatus() 获取当前任务状态码：
1：等待中、2：运行中、4：处理失败、5：处理完成。
 * @method void setStatus(string $Status) 设置当前任务状态码：
1：等待中、2：运行中、4：处理失败、5：处理完成。
 * @method string getErrorCode() 获取任务处理失败错误码。

 * @method void setErrorCode(string $ErrorCode) 设置任务处理失败错误码。

 * @method string getErrorMessage() 获取任务处理失败错误信息。

 * @method void setErrorMessage(string $ErrorMessage) 设置任务处理失败错误信息。

 * @method array getResultImage() 获取生成图 URL 列表，有效期1小时，请及时保存。

 * @method void setResultImage(array $ResultImage) 设置生成图 URL 列表，有效期1小时，请及时保存。

 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTemplateToImageJobResponse extends AbstractModel
{
    /**
     * @var string 当前任务状态码：
1：等待中、2：运行中、4：处理失败、5：处理完成。
     */
    public $Status;

    /**
     * @var string 任务处理失败错误码。

     */
    public $ErrorCode;

    /**
     * @var string 任务处理失败错误信息。

     */
    public $ErrorMessage;

    /**
     * @var array 生成图 URL 列表，有效期1小时，请及时保存。

     */
    public $ResultImage;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Status 当前任务状态码：
1：等待中、2：运行中、4：处理失败、5：处理完成。
     * @param string $ErrorCode 任务处理失败错误码。

     * @param string $ErrorMessage 任务处理失败错误信息。

     * @param array $ResultImage 生成图 URL 列表，有效期1小时，请及时保存。

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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("ResultImage",$param) and $param["ResultImage"] !== null) {
            $this->ResultImage = $param["ResultImage"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
