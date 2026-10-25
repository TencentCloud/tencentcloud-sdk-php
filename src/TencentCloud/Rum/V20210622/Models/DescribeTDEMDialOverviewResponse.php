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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTDEMDialOverview返回参数结构体
 *
 * @method integer getTaskCount() 获取<p>任务数</p>
 * @method void setTaskCount(integer $TaskCount) 设置<p>任务数</p>
 * @method integer getExecutionCount() 获取<p>执行批次数</p>
 * @method void setExecutionCount(integer $ExecutionCount) 设置<p>执行批次数</p>
 * @method integer getSuccessCount() 获取<p>成功批次数</p>
 * @method void setSuccessCount(integer $SuccessCount) 设置<p>成功批次数</p>
 * @method integer getFailCount() 获取<p>失败批次数</p>
 * @method void setFailCount(integer $FailCount) 设置<p>失败批次数</p>
 * @method float getAvgDuration() 获取<p>平均时延，单位毫秒</p>
 * @method void setAvgDuration(float $AvgDuration) 设置<p>平均时延，单位毫秒</p>
 * @method float getAvgLoss() 获取<p>平均丢包率，0 到 100</p>
 * @method void setAvgLoss(float $AvgLoss) 设置<p>平均丢包率，0 到 100</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTDEMDialOverviewResponse extends AbstractModel
{
    /**
     * @var integer <p>任务数</p>
     */
    public $TaskCount;

    /**
     * @var integer <p>执行批次数</p>
     */
    public $ExecutionCount;

    /**
     * @var integer <p>成功批次数</p>
     */
    public $SuccessCount;

    /**
     * @var integer <p>失败批次数</p>
     */
    public $FailCount;

    /**
     * @var float <p>平均时延，单位毫秒</p>
     */
    public $AvgDuration;

    /**
     * @var float <p>平均丢包率，0 到 100</p>
     */
    public $AvgLoss;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TaskCount <p>任务数</p>
     * @param integer $ExecutionCount <p>执行批次数</p>
     * @param integer $SuccessCount <p>成功批次数</p>
     * @param integer $FailCount <p>失败批次数</p>
     * @param float $AvgDuration <p>平均时延，单位毫秒</p>
     * @param float $AvgLoss <p>平均丢包率，0 到 100</p>
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
        if (array_key_exists("TaskCount",$param) and $param["TaskCount"] !== null) {
            $this->TaskCount = $param["TaskCount"];
        }

        if (array_key_exists("ExecutionCount",$param) and $param["ExecutionCount"] !== null) {
            $this->ExecutionCount = $param["ExecutionCount"];
        }

        if (array_key_exists("SuccessCount",$param) and $param["SuccessCount"] !== null) {
            $this->SuccessCount = $param["SuccessCount"];
        }

        if (array_key_exists("FailCount",$param) and $param["FailCount"] !== null) {
            $this->FailCount = $param["FailCount"];
        }

        if (array_key_exists("AvgDuration",$param) and $param["AvgDuration"] !== null) {
            $this->AvgDuration = $param["AvgDuration"];
        }

        if (array_key_exists("AvgLoss",$param) and $param["AvgLoss"] !== null) {
            $this->AvgLoss = $param["AvgLoss"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
