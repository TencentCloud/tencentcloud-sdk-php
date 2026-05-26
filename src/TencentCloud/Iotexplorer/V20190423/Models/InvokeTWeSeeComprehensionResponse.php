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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InvokeTWeSeeComprehension返回参数结构体
 *
 * @method string getTaskId() 获取任务 ID
 * @method void setTaskId(string $TaskId) 设置任务 ID
 * @method integer getStatus() 获取任务状态。可能取值：

- `1`：失败
- `2`：空结果
- `3`：有效结果
- `4`：处理中
 * @method void setStatus(integer $Status) 设置任务状态。可能取值：

- `1`：失败
- `2`：空结果
- `3`：有效结果
- `4`：处理中
 * @method SeeComprehensionResult getComprehensionResult() 获取视觉理解结果
 * @method void setComprehensionResult(SeeComprehensionResult $ComprehensionResult) 设置视觉理解结果
 * @method integer getCostBasic() 获取完成该任务所消耗的基础能力额度
 * @method void setCostBasic(integer $CostBasic) 设置完成该任务所消耗的基础能力额度
 * @method integer getCostAdvanced() 获取完成该任务所消耗的高级能力额度
 * @method void setCostAdvanced(integer $CostAdvanced) 设置完成该任务所消耗的高级能力额度
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class InvokeTWeSeeComprehensionResponse extends AbstractModel
{
    /**
     * @var string 任务 ID
     */
    public $TaskId;

    /**
     * @var integer 任务状态。可能取值：

- `1`：失败
- `2`：空结果
- `3`：有效结果
- `4`：处理中
     */
    public $Status;

    /**
     * @var SeeComprehensionResult 视觉理解结果
     */
    public $ComprehensionResult;

    /**
     * @var integer 完成该任务所消耗的基础能力额度
     */
    public $CostBasic;

    /**
     * @var integer 完成该任务所消耗的高级能力额度
     */
    public $CostAdvanced;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TaskId 任务 ID
     * @param integer $Status 任务状态。可能取值：

- `1`：失败
- `2`：空结果
- `3`：有效结果
- `4`：处理中
     * @param SeeComprehensionResult $ComprehensionResult 视觉理解结果
     * @param integer $CostBasic 完成该任务所消耗的基础能力额度
     * @param integer $CostAdvanced 完成该任务所消耗的高级能力额度
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ComprehensionResult",$param) and $param["ComprehensionResult"] !== null) {
            $this->ComprehensionResult = new SeeComprehensionResult();
            $this->ComprehensionResult->deserialize($param["ComprehensionResult"]);
        }

        if (array_key_exists("CostBasic",$param) and $param["CostBasic"] !== null) {
            $this->CostBasic = $param["CostBasic"];
        }

        if (array_key_exists("CostAdvanced",$param) and $param["CostAdvanced"] !== null) {
            $this->CostAdvanced = $param["CostAdvanced"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
