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
 * QueryMemeJob返回参数结构体
 *
 * @method string getJobStatusCode() 获取当前任务状态码：
1：等待中、2：运行中、4：处理失败、5：处理完成。
 * @method void setJobStatusCode(string $JobStatusCode) 设置当前任务状态码：
1：等待中、2：运行中、4：处理失败、5：处理完成。
 * @method string getJobStatusMsg() 获取当前任务状态：排队中、处理中、处理失败或者处理完成。
 * @method void setJobStatusMsg(string $JobStatusMsg) 设置当前任务状态：排队中、处理中、处理失败或者处理完成。
 * @method string getJobErrorCode() 获取任务处理失败错误码。

 * @method void setJobErrorCode(string $JobErrorCode) 设置任务处理失败错误码。

 * @method string getJobErrorMsg() 获取任务处理失败错误信息。

 * @method void setJobErrorMsg(string $JobErrorMsg) 设置任务处理失败错误信息。

 * @method string getResultImage() 获取生成图 URL，有效期1小时，请及时保存。
 * @method void setResultImage(string $ResultImage) 设置生成图 URL，有效期1小时，请及时保存。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class QueryMemeJobResponse extends AbstractModel
{
    /**
     * @var string 当前任务状态码：
1：等待中、2：运行中、4：处理失败、5：处理完成。
     */
    public $JobStatusCode;

    /**
     * @var string 当前任务状态：排队中、处理中、处理失败或者处理完成。
     */
    public $JobStatusMsg;

    /**
     * @var string 任务处理失败错误码。

     */
    public $JobErrorCode;

    /**
     * @var string 任务处理失败错误信息。

     */
    public $JobErrorMsg;

    /**
     * @var string 生成图 URL，有效期1小时，请及时保存。
     */
    public $ResultImage;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $JobStatusCode 当前任务状态码：
1：等待中、2：运行中、4：处理失败、5：处理完成。
     * @param string $JobStatusMsg 当前任务状态：排队中、处理中、处理失败或者处理完成。
     * @param string $JobErrorCode 任务处理失败错误码。

     * @param string $JobErrorMsg 任务处理失败错误信息。

     * @param string $ResultImage 生成图 URL，有效期1小时，请及时保存。
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
        if (array_key_exists("JobStatusCode",$param) and $param["JobStatusCode"] !== null) {
            $this->JobStatusCode = $param["JobStatusCode"];
        }

        if (array_key_exists("JobStatusMsg",$param) and $param["JobStatusMsg"] !== null) {
            $this->JobStatusMsg = $param["JobStatusMsg"];
        }

        if (array_key_exists("JobErrorCode",$param) and $param["JobErrorCode"] !== null) {
            $this->JobErrorCode = $param["JobErrorCode"];
        }

        if (array_key_exists("JobErrorMsg",$param) and $param["JobErrorMsg"] !== null) {
            $this->JobErrorMsg = $param["JobErrorMsg"];
        }

        if (array_key_exists("ResultImage",$param) and $param["ResultImage"] !== null) {
            $this->ResultImage = $param["ResultImage"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
