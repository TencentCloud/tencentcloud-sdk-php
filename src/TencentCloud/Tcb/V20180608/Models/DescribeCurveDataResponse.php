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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCurveData返回参数结构体
 *
 * @method string getStartTime() 获取<p>开始时间, 会根据数据的统计周期进行取整</p>
 * @method void setStartTime(string $StartTime) 设置<p>开始时间, 会根据数据的统计周期进行取整</p>
 * @method string getEndTime() 获取<p>结束时间, 会根据数据的统计周期进行取整</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间, 会根据数据的统计周期进行取整</p>
 * @method string getMetricName() 获取<p>指标名</p>
 * @method void setMetricName(string $MetricName) 设置<p>指标名</p>
 * @method integer getPeriod() 获取<p>统计周期(单位秒), 当时间区间为1天内, 统计周期为5分钟; 当时间区间选择为1天以上, 15天以下, 统计周期为1小时; 当时间区间选择为15天以上, 180天以下, 统计周期为1天</p>
 * @method void setPeriod(integer $Period) 设置<p>统计周期(单位秒), 当时间区间为1天内, 统计周期为5分钟; 当时间区间选择为1天以上, 15天以下, 统计周期为1小时; 当时间区间选择为15天以上, 180天以下, 统计周期为1天</p>
 * @method array getValues() 获取<p>有效的监控数据, 每个有效监控数据的上报时间可以从时间数组中的对应位置上获取到</p>
 * @method void setValues(array $Values) 设置<p>有效的监控数据, 每个有效监控数据的上报时间可以从时间数组中的对应位置上获取到</p>
 * @method array getTime() 获取<p>各数据点的时间戳数组（Unix 时间戳，秒级），与  ⁠Values⁠  一一对应</p>
 * @method void setTime(array $Time) 设置<p>各数据点的时间戳数组（Unix 时间戳，秒级），与  ⁠Values⁠  一一对应</p>
 * @method array getNewValues() 获取<p>有效的监控数据, 每个有效监控数据的上报时间可以从时间数组中的对应位置上获取到</p>
 * @method void setNewValues(array $NewValues) 设置<p>有效的监控数据, 每个有效监控数据的上报时间可以从时间数组中的对应位置上获取到</p>
 * @method string getStatistics() 获取<p>聚合方式， ⁠&quot;last&quot;⁠  表示取时间段内最后一个值，“max”表示取时间段内最大值，“avg”表示取时间段内的平均值</p>
 * @method void setStatistics(string $Statistics) 设置<p>聚合方式， ⁠&quot;last&quot;⁠  表示取时间段内最后一个值，“max”表示取时间段内最大值，“avg”表示取时间段内的平均值</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCurveDataResponse extends AbstractModel
{
    /**
     * @var string <p>开始时间, 会根据数据的统计周期进行取整</p>
     */
    public $StartTime;

    /**
     * @var string <p>结束时间, 会根据数据的统计周期进行取整</p>
     */
    public $EndTime;

    /**
     * @var string <p>指标名</p>
     */
    public $MetricName;

    /**
     * @var integer <p>统计周期(单位秒), 当时间区间为1天内, 统计周期为5分钟; 当时间区间选择为1天以上, 15天以下, 统计周期为1小时; 当时间区间选择为15天以上, 180天以下, 统计周期为1天</p>
     */
    public $Period;

    /**
     * @var array <p>有效的监控数据, 每个有效监控数据的上报时间可以从时间数组中的对应位置上获取到</p>
     */
    public $Values;

    /**
     * @var array <p>各数据点的时间戳数组（Unix 时间戳，秒级），与  ⁠Values⁠  一一对应</p>
     */
    public $Time;

    /**
     * @var array <p>有效的监控数据, 每个有效监控数据的上报时间可以从时间数组中的对应位置上获取到</p>
     */
    public $NewValues;

    /**
     * @var string <p>聚合方式， ⁠&quot;last&quot;⁠  表示取时间段内最后一个值，“max”表示取时间段内最大值，“avg”表示取时间段内的平均值</p>
     */
    public $Statistics;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $StartTime <p>开始时间, 会根据数据的统计周期进行取整</p>
     * @param string $EndTime <p>结束时间, 会根据数据的统计周期进行取整</p>
     * @param string $MetricName <p>指标名</p>
     * @param integer $Period <p>统计周期(单位秒), 当时间区间为1天内, 统计周期为5分钟; 当时间区间选择为1天以上, 15天以下, 统计周期为1小时; 当时间区间选择为15天以上, 180天以下, 统计周期为1天</p>
     * @param array $Values <p>有效的监控数据, 每个有效监控数据的上报时间可以从时间数组中的对应位置上获取到</p>
     * @param array $Time <p>各数据点的时间戳数组（Unix 时间戳，秒级），与  ⁠Values⁠  一一对应</p>
     * @param array $NewValues <p>有效的监控数据, 每个有效监控数据的上报时间可以从时间数组中的对应位置上获取到</p>
     * @param string $Statistics <p>聚合方式， ⁠&quot;last&quot;⁠  表示取时间段内最后一个值，“max”表示取时间段内最大值，“avg”表示取时间段内的平均值</p>
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("NewValues",$param) and $param["NewValues"] !== null) {
            $this->NewValues = $param["NewValues"];
        }

        if (array_key_exists("Statistics",$param) and $param["Statistics"] !== null) {
            $this->Statistics = $param["Statistics"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
