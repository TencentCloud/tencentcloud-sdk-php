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
namespace TencentCloud\Vtc\V20240223\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ConfirmVideoTranslateJob返回参数结构体
 *
 * @method string getJobId() 获取视频翻译任务 ID
 * @method void setJobId(string $JobId) 设置视频翻译任务 ID
 * @method string getTaskId() 获取音频转换任务 ID
 * @method void setTaskId(string $TaskId) 设置音频转换任务 ID
 * @method string getSessionId() 获取音频翻译结果确认 session
 * @method void setSessionId(string $SessionId) 设置音频翻译结果确认 session
 * @method integer getStatus() 获取视频转译任务状态
 * @method void setStatus(integer $Status) 设置视频转译任务状态
 * @method string getMessage() 获取视频转译任务信息
 * @method void setMessage(string $Message) 设置视频转译任务信息
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ConfirmVideoTranslateJobResponse extends AbstractModel
{
    /**
     * @var string 视频翻译任务 ID
     */
    public $JobId;

    /**
     * @var string 音频转换任务 ID
     */
    public $TaskId;

    /**
     * @var string 音频翻译结果确认 session
     */
    public $SessionId;

    /**
     * @var integer 视频转译任务状态
     */
    public $Status;

    /**
     * @var string 视频转译任务信息
     */
    public $Message;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $JobId 视频翻译任务 ID
     * @param string $TaskId 音频转换任务 ID
     * @param string $SessionId 音频翻译结果确认 session
     * @param integer $Status 视频转译任务状态
     * @param string $Message 视频转译任务信息
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

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
