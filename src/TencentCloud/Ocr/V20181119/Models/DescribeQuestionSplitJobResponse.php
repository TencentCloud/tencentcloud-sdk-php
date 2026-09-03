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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeQuestionSplitJob返回参数结构体
 *
 * @method array getQuestionInfo() 获取<p>切题详情</p>
 * @method void setQuestionInfo(array $QuestionInfo) 设置<p>切题详情</p>
 * @method string getErrorCode() 获取<p>任务执行错误码。当任务状态不为 FAIL 时，该值为&quot;&quot;。</p>
 * @method void setErrorCode(string $ErrorCode) 设置<p>任务执行错误码。当任务状态不为 FAIL 时，该值为&quot;&quot;。</p>
 * @method string getErrorMessage() 获取<p>任务执行错误信息。当任务状态不为 FAIL 时，该值为&quot;&quot;。</p>
 * @method void setErrorMessage(string $ErrorMessage) 设置<p>任务执行错误信息。当任务状态不为 FAIL 时，该值为&quot;&quot;。</p>
 * @method string getJobStatus() 获取<p>任务状态。</p><p>枚举值：</p><ul><li>WAIT： 等待中</li><li>RUN： 执行中</li><li>FAIL： 任务失败</li><li>DONE： 任务成功</li></ul>
 * @method void setJobStatus(string $JobStatus) 设置<p>任务状态。</p><p>枚举值：</p><ul><li>WAIT： 等待中</li><li>RUN： 执行中</li><li>FAIL： 任务失败</li><li>DONE： 任务成功</li></ul>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeQuestionSplitJobResponse extends AbstractModel
{
    /**
     * @var array <p>切题详情</p>
     */
    public $QuestionInfo;

    /**
     * @var string <p>任务执行错误码。当任务状态不为 FAIL 时，该值为&quot;&quot;。</p>
     */
    public $ErrorCode;

    /**
     * @var string <p>任务执行错误信息。当任务状态不为 FAIL 时，该值为&quot;&quot;。</p>
     */
    public $ErrorMessage;

    /**
     * @var string <p>任务状态。</p><p>枚举值：</p><ul><li>WAIT： 等待中</li><li>RUN： 执行中</li><li>FAIL： 任务失败</li><li>DONE： 任务成功</li></ul>
     */
    public $JobStatus;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $QuestionInfo <p>切题详情</p>
     * @param string $ErrorCode <p>任务执行错误码。当任务状态不为 FAIL 时，该值为&quot;&quot;。</p>
     * @param string $ErrorMessage <p>任务执行错误信息。当任务状态不为 FAIL 时，该值为&quot;&quot;。</p>
     * @param string $JobStatus <p>任务状态。</p><p>枚举值：</p><ul><li>WAIT： 等待中</li><li>RUN： 执行中</li><li>FAIL： 任务失败</li><li>DONE： 任务成功</li></ul>
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
        if (array_key_exists("QuestionInfo",$param) and $param["QuestionInfo"] !== null) {
            $this->QuestionInfo = [];
            foreach ($param["QuestionInfo"] as $key => $value){
                $obj = new QuestionInfo();
                $obj->deserialize($value);
                array_push($this->QuestionInfo, $obj);
            }
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("JobStatus",$param) and $param["JobStatus"] !== null) {
            $this->JobStatus = $param["JobStatus"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
