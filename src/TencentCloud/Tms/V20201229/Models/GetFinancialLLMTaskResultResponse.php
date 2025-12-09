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
namespace TencentCloud\Tms\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetFinancialLLMTaskResult返回参数结构体
 *
 * @method string getStatus() 获取TaskId对应的任务的状态：
- Success: 任务已完成
- Processing: 任务进行中，建议10秒后再查询
- Failed: 任务失败

 * @method void setStatus(string $Status) 设置TaskId对应的任务的状态：
- Success: 任务已完成
- Processing: 任务进行中，建议10秒后再查询
- Failed: 任务失败

 * @method array getDetails() 获取该字段标识服务检测到的违规点，具体内容参阅数据结构[FinancialLLMViolationDetail](https://cloud.tencent.com/document/api/1124/51861#FinancialLLMViolationDetail)
 * @method void setDetails(array $Details) 设置该字段标识服务检测到的违规点，具体内容参阅数据结构[FinancialLLMViolationDetail](https://cloud.tencent.com/document/api/1124/51861#FinancialLLMViolationDetail)
 * @method array getReviewedLabels() 获取本次检测的违规点列表
 * @method void setReviewedLabels(array $ReviewedLabels) 设置本次检测的违规点列表
 * @method string getStartTime() 获取审校任务的开始时间
示例值：2025-09-25 19:42:35
 * @method void setStartTime(string $StartTime) 设置审校任务的开始时间
示例值：2025-09-25 19:42:35
 * @method string getFailureReason() 获取若审校任务失败（Status="Failed"），该字段返回失败的具体原因。
示例值：文档解析失败
 * @method void setFailureReason(string $FailureReason) 设置若审校任务失败（Status="Failed"），该字段返回失败的具体原因。
示例值：文档解析失败
 * @method string getModerationResult() 获取该字段为历史结构字段，不再推荐使用。
 * @method void setModerationResult(string $ModerationResult) 设置该字段为历史结构字段，不再推荐使用。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetFinancialLLMTaskResultResponse extends AbstractModel
{
    /**
     * @var string TaskId对应的任务的状态：
- Success: 任务已完成
- Processing: 任务进行中，建议10秒后再查询
- Failed: 任务失败

     */
    public $Status;

    /**
     * @var array 该字段标识服务检测到的违规点，具体内容参阅数据结构[FinancialLLMViolationDetail](https://cloud.tencent.com/document/api/1124/51861#FinancialLLMViolationDetail)
     */
    public $Details;

    /**
     * @var array 本次检测的违规点列表
     */
    public $ReviewedLabels;

    /**
     * @var string 审校任务的开始时间
示例值：2025-09-25 19:42:35
     */
    public $StartTime;

    /**
     * @var string 若审校任务失败（Status="Failed"），该字段返回失败的具体原因。
示例值：文档解析失败
     */
    public $FailureReason;

    /**
     * @var string 该字段为历史结构字段，不再推荐使用。
     */
    public $ModerationResult;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Status TaskId对应的任务的状态：
- Success: 任务已完成
- Processing: 任务进行中，建议10秒后再查询
- Failed: 任务失败

     * @param array $Details 该字段标识服务检测到的违规点，具体内容参阅数据结构[FinancialLLMViolationDetail](https://cloud.tencent.com/document/api/1124/51861#FinancialLLMViolationDetail)
     * @param array $ReviewedLabels 本次检测的违规点列表
     * @param string $StartTime 审校任务的开始时间
示例值：2025-09-25 19:42:35
     * @param string $FailureReason 若审校任务失败（Status="Failed"），该字段返回失败的具体原因。
示例值：文档解析失败
     * @param string $ModerationResult 该字段为历史结构字段，不再推荐使用。
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

        if (array_key_exists("Details",$param) and $param["Details"] !== null) {
            $this->Details = [];
            foreach ($param["Details"] as $key => $value){
                $obj = new FinancialLLMViolationDetail();
                $obj->deserialize($value);
                array_push($this->Details, $obj);
            }
        }

        if (array_key_exists("ReviewedLabels",$param) and $param["ReviewedLabels"] !== null) {
            $this->ReviewedLabels = $param["ReviewedLabels"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("FailureReason",$param) and $param["FailureReason"] !== null) {
            $this->FailureReason = $param["FailureReason"];
        }

        if (array_key_exists("ModerationResult",$param) and $param["ModerationResult"] !== null) {
            $this->ModerationResult = $param["ModerationResult"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
