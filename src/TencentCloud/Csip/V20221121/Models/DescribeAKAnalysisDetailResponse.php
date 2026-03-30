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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAKAnalysisDetail返回参数结构体
 *
 * @method integer getAIStatus() 获取告警AI分析状态 -1 分析失败 0 未分析 1 分析中 2 分析成功，真实告警 3 分析成功，可疑告警
 * @method void setAIStatus(integer $AIStatus) 设置告警AI分析状态 -1 分析失败 0 未分析 1 分析中 2 分析成功，真实告警 3 分析成功，可疑告警
 * @method string getAITaskID() 获取AI分析任务ID
 * @method void setAITaskID(string $AITaskID) 设置AI分析任务ID
 * @method string getAIResult() 获取告警AI分析结果，base64格式，避免数据被拦截
 * @method void setAIResult(string $AIResult) 设置告警AI分析结果，base64格式，避免数据被拦截
 * @method string getFeedback() 获取反馈建议
 * @method void setFeedback(string $Feedback) 设置反馈建议
 * @method integer getFeedbackResult() 获取反馈状态  0表示没有反馈，1表示认可，2表示不认可
 * @method void setFeedbackResult(integer $FeedbackResult) 设置反馈状态  0表示没有反馈，1表示认可，2表示不认可
 * @method string getFailedReason() 获取失败原因
 * @method void setFailedReason(string $FailedReason) 设置失败原因
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAKAnalysisDetailResponse extends AbstractModel
{
    /**
     * @var integer 告警AI分析状态 -1 分析失败 0 未分析 1 分析中 2 分析成功，真实告警 3 分析成功，可疑告警
     */
    public $AIStatus;

    /**
     * @var string AI分析任务ID
     */
    public $AITaskID;

    /**
     * @var string 告警AI分析结果，base64格式，避免数据被拦截
     */
    public $AIResult;

    /**
     * @var string 反馈建议
     */
    public $Feedback;

    /**
     * @var integer 反馈状态  0表示没有反馈，1表示认可，2表示不认可
     */
    public $FeedbackResult;

    /**
     * @var string 失败原因
     */
    public $FailedReason;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $AIStatus 告警AI分析状态 -1 分析失败 0 未分析 1 分析中 2 分析成功，真实告警 3 分析成功，可疑告警
     * @param string $AITaskID AI分析任务ID
     * @param string $AIResult 告警AI分析结果，base64格式，避免数据被拦截
     * @param string $Feedback 反馈建议
     * @param integer $FeedbackResult 反馈状态  0表示没有反馈，1表示认可，2表示不认可
     * @param string $FailedReason 失败原因
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
        if (array_key_exists("AIStatus",$param) and $param["AIStatus"] !== null) {
            $this->AIStatus = $param["AIStatus"];
        }

        if (array_key_exists("AITaskID",$param) and $param["AITaskID"] !== null) {
            $this->AITaskID = $param["AITaskID"];
        }

        if (array_key_exists("AIResult",$param) and $param["AIResult"] !== null) {
            $this->AIResult = $param["AIResult"];
        }

        if (array_key_exists("Feedback",$param) and $param["Feedback"] !== null) {
            $this->Feedback = $param["Feedback"];
        }

        if (array_key_exists("FeedbackResult",$param) and $param["FeedbackResult"] !== null) {
            $this->FeedbackResult = $param["FeedbackResult"];
        }

        if (array_key_exists("FailedReason",$param) and $param["FailedReason"] !== null) {
            $this->FailedReason = $param["FailedReason"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
