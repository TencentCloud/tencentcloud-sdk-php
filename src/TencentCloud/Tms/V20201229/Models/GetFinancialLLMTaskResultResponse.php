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
 * @method string getStatus() 获取审校任务状态：

- Success: 成功
- Processing: 处理中，请等待
- Failed: 失败
 * @method void setStatus(string $Status) 设置审校任务状态：

- Success: 成功
- Processing: 处理中，请等待
- Failed: 失败
 * @method string getModerationResult() 获取大模型审校结果
 * @method void setModerationResult(string $ModerationResult) 设置大模型审校结果
 * @method string getFailureReason() 获取审校任务失败原因，仅当任务失败时有值
 * @method void setFailureReason(string $FailureReason) 设置审校任务失败原因，仅当任务失败时有值
 * @method string getStartTime() 获取审校任务开始时间
 * @method void setStartTime(string $StartTime) 设置审校任务开始时间
 * @method array getReviewedLabels() 获取本次检测的违规点列表
 * @method void setReviewedLabels(array $ReviewedLabels) 设置本次检测的违规点列表
 * @method array getDetails() 获取违规明细
 * @method void setDetails(array $Details) 设置违规明细
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetFinancialLLMTaskResultResponse extends AbstractModel
{
    /**
     * @var string 审校任务状态：

- Success: 成功
- Processing: 处理中，请等待
- Failed: 失败
     */
    public $Status;

    /**
     * @var string 大模型审校结果
     */
    public $ModerationResult;

    /**
     * @var string 审校任务失败原因，仅当任务失败时有值
     */
    public $FailureReason;

    /**
     * @var string 审校任务开始时间
     */
    public $StartTime;

    /**
     * @var array 本次检测的违规点列表
     */
    public $ReviewedLabels;

    /**
     * @var array 违规明细
     */
    public $Details;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Status 审校任务状态：

- Success: 成功
- Processing: 处理中，请等待
- Failed: 失败
     * @param string $ModerationResult 大模型审校结果
     * @param string $FailureReason 审校任务失败原因，仅当任务失败时有值
     * @param string $StartTime 审校任务开始时间
     * @param array $ReviewedLabels 本次检测的违规点列表
     * @param array $Details 违规明细
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

        if (array_key_exists("ModerationResult",$param) and $param["ModerationResult"] !== null) {
            $this->ModerationResult = $param["ModerationResult"];
        }

        if (array_key_exists("FailureReason",$param) and $param["FailureReason"] !== null) {
            $this->FailureReason = $param["FailureReason"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("ReviewedLabels",$param) and $param["ReviewedLabels"] !== null) {
            $this->ReviewedLabels = $param["ReviewedLabels"];
        }

        if (array_key_exists("Details",$param) and $param["Details"] !== null) {
            $this->Details = [];
            foreach ($param["Details"] as $key => $value){
                $obj = new FinancialLLMViolationDetail();
                $obj->deserialize($value);
                array_push($this->Details, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
