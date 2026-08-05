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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryDashboardOverview返回参数结构体
 *
 * @method float getTotalRequestsPerSecond() 获取<p>时间范围内所有服务的总 QPS（每秒请求数）均值</p><p>单位：请求每秒</p>
 * @method void setTotalRequestsPerSecond(float $TotalRequestsPerSecond) 设置<p>时间范围内所有服务的总 QPS（每秒请求数）均值</p><p>单位：请求每秒</p>
 * @method float getAverageP99LatencyMs() 获取<p>时间范围内全局 P99 延迟均值（毫秒）</p><p>单位：毫秒</p>
 * @method void setAverageP99LatencyMs(float $AverageP99LatencyMs) 设置<p>时间范围内全局 P99 延迟均值（毫秒）</p><p>单位：毫秒</p>
 * @method float getErrorRate() 获取<p>时间范围内全局错误率均值（0~1，如 0.02 表示 2%）</p><p>取值范围：[0, 1]</p>
 * @method void setErrorRate(float $ErrorRate) 设置<p>时间范围内全局错误率均值（0~1，如 0.02 表示 2%）</p><p>取值范围：[0, 1]</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class QueryDashboardOverviewResponse extends AbstractModel
{
    /**
     * @var float <p>时间范围内所有服务的总 QPS（每秒请求数）均值</p><p>单位：请求每秒</p>
     */
    public $TotalRequestsPerSecond;

    /**
     * @var float <p>时间范围内全局 P99 延迟均值（毫秒）</p><p>单位：毫秒</p>
     */
    public $AverageP99LatencyMs;

    /**
     * @var float <p>时间范围内全局错误率均值（0~1，如 0.02 表示 2%）</p><p>取值范围：[0, 1]</p>
     */
    public $ErrorRate;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param float $TotalRequestsPerSecond <p>时间范围内所有服务的总 QPS（每秒请求数）均值</p><p>单位：请求每秒</p>
     * @param float $AverageP99LatencyMs <p>时间范围内全局 P99 延迟均值（毫秒）</p><p>单位：毫秒</p>
     * @param float $ErrorRate <p>时间范围内全局错误率均值（0~1，如 0.02 表示 2%）</p><p>取值范围：[0, 1]</p>
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
        if (array_key_exists("TotalRequestsPerSecond",$param) and $param["TotalRequestsPerSecond"] !== null) {
            $this->TotalRequestsPerSecond = $param["TotalRequestsPerSecond"];
        }

        if (array_key_exists("AverageP99LatencyMs",$param) and $param["AverageP99LatencyMs"] !== null) {
            $this->AverageP99LatencyMs = $param["AverageP99LatencyMs"];
        }

        if (array_key_exists("ErrorRate",$param) and $param["ErrorRate"] !== null) {
            $this->ErrorRate = $param["ErrorRate"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
