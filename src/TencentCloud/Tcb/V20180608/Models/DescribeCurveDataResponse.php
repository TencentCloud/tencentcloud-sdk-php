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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCurveData返回参数结构体
 *
 * @method string getStartTime() 获取开始时间, 会根据数据的统计周期进行取整.
 * @method void setStartTime(string $StartTime) 设置开始时间, 会根据数据的统计周期进行取整.
 * @method string getEndTime() 获取结束时间, 会根据数据的统计周期进行取整.
 * @method void setEndTime(string $EndTime) 设置结束时间, 会根据数据的统计周期进行取整.
 * @method string getMetricName() 获取指标名.
 * @method void setMetricName(string $MetricName) 设置指标名.
 * @method integer getPeriod() 获取统计周期(单位秒), 当时间区间为1天内, 统计周期为5分钟; 当时间区间选择为1天以上, 15天以下, 统计周期为1小时; 当时间区间选择为15天以上, 180天以下, 统计周期为1天.
 * @method void setPeriod(integer $Period) 设置统计周期(单位秒), 当时间区间为1天内, 统计周期为5分钟; 当时间区间选择为1天以上, 15天以下, 统计周期为1小时; 当时间区间选择为15天以上, 180天以下, 统计周期为1天.
 * @method array getValues() 获取有效的监控数据, 每个有效监控数据的上报时间可以从时间数组中的对应位置上获取到.
 * @method void setValues(array $Values) 设置有效的监控数据, 每个有效监控数据的上报时间可以从时间数组中的对应位置上获取到.
 * @method array getTime() 获取时间数据, 标识监控数据Values中的点是哪个时间段上报的.
 * @method void setTime(array $Time) 设置时间数据, 标识监控数据Values中的点是哪个时间段上报的.
 * @method float getNewValues() 获取有效的监控数据, 每个有效监控数据的上报时间可以从时间数组中的对应位置上获取到.
 * @method void setNewValues(float $NewValues) 设置有效的监控数据, 每个有效监控数据的上报时间可以从时间数组中的对应位置上获取到.
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCurveDataResponse extends AbstractModel
{
    /**
     * @var string 开始时间, 会根据数据的统计周期进行取整.
     */
    public $StartTime;

    /**
     * @var string 结束时间, 会根据数据的统计周期进行取整.
     */
    public $EndTime;

    /**
     * @var string 指标名.
     */
    public $MetricName;

    /**
     * @var integer 统计周期(单位秒), 当时间区间为1天内, 统计周期为5分钟; 当时间区间选择为1天以上, 15天以下, 统计周期为1小时; 当时间区间选择为15天以上, 180天以下, 统计周期为1天.
     */
    public $Period;

    /**
     * @var array 有效的监控数据, 每个有效监控数据的上报时间可以从时间数组中的对应位置上获取到.
     */
    public $Values;

    /**
     * @var array 时间数据, 标识监控数据Values中的点是哪个时间段上报的.
     */
    public $Time;

    /**
     * @var float 有效的监控数据, 每个有效监控数据的上报时间可以从时间数组中的对应位置上获取到.
     */
    public $NewValues;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $StartTime 开始时间, 会根据数据的统计周期进行取整.
     * @param string $EndTime 结束时间, 会根据数据的统计周期进行取整.
     * @param string $MetricName 指标名.
     * @param integer $Period 统计周期(单位秒), 当时间区间为1天内, 统计周期为5分钟; 当时间区间选择为1天以上, 15天以下, 统计周期为1小时; 当时间区间选择为15天以上, 180天以下, 统计周期为1天.
     * @param array $Values 有效的监控数据, 每个有效监控数据的上报时间可以从时间数组中的对应位置上获取到.
     * @param array $Time 时间数据, 标识监控数据Values中的点是哪个时间段上报的.
     * @param float $NewValues 有效的监控数据, 每个有效监控数据的上报时间可以从时间数组中的对应位置上获取到.
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
