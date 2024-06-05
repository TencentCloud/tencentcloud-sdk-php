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
namespace TencentCloud\Vcg\V20240404\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVideoStylizationJob返回参数结构体
 *
 * @method string getJobId() 获取任务ID。
 * @method void setJobId(string $JobId) 设置任务ID。
 * @method string getStatusCode() 获取任务状态码：
JobInit:  "初始化中"
JobModerationFailed: "审核失败",
JobRunning: "处理中",
JobFailed: "处理失败",
JobSuccess: "处理完成"。
 * @method void setStatusCode(string $StatusCode) 设置任务状态码：
JobInit:  "初始化中"
JobModerationFailed: "审核失败",
JobRunning: "处理中",
JobFailed: "处理失败",
JobSuccess: "处理完成"。
 * @method string getStatusMsg() 获取任务状态描述。
 * @method void setStatusMsg(string $StatusMsg) 设置任务状态描述。
 * @method string getResultVideoUrl() 获取处理结果视频Url。URL有效期为24小时。
 * @method void setResultVideoUrl(string $ResultVideoUrl) 设置处理结果视频Url。URL有效期为24小时。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVideoStylizationJobResponse extends AbstractModel
{
    /**
     * @var string 任务ID。
     */
    public $JobId;

    /**
     * @var string 任务状态码：
JobInit:  "初始化中"
JobModerationFailed: "审核失败",
JobRunning: "处理中",
JobFailed: "处理失败",
JobSuccess: "处理完成"。
     */
    public $StatusCode;

    /**
     * @var string 任务状态描述。
     */
    public $StatusMsg;

    /**
     * @var string 处理结果视频Url。URL有效期为24小时。
     */
    public $ResultVideoUrl;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $JobId 任务ID。
     * @param string $StatusCode 任务状态码：
JobInit:  "初始化中"
JobModerationFailed: "审核失败",
JobRunning: "处理中",
JobFailed: "处理失败",
JobSuccess: "处理完成"。
     * @param string $StatusMsg 任务状态描述。
     * @param string $ResultVideoUrl 处理结果视频Url。URL有效期为24小时。
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

        if (array_key_exists("StatusMsg",$param) and $param["StatusMsg"] !== null) {
            $this->StatusMsg = $param["StatusMsg"];
        }

        if (array_key_exists("ResultVideoUrl",$param) and $param["ResultVideoUrl"] !== null) {
            $this->ResultVideoUrl = $param["ResultVideoUrl"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
