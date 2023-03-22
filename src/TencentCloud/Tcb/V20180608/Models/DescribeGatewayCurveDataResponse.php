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
 * DescribeGatewayCurveData返回参数结构体
 *
 * @method string getMetricName() 获取监控类型
 * @method void setMetricName(string $MetricName) 设置监控类型
 * @method string getStartTime() 获取监控起始时间
 * @method void setStartTime(string $StartTime) 设置监控起始时间
 * @method string getEndTime() 获取监控结束时间
 * @method void setEndTime(string $EndTime) 设置监控结束时间
 * @method integer getPeriod() 获取监控数据间隔
 * @method void setPeriod(integer $Period) 设置监控数据间隔
 * @method array getValues() 获取监控值
 * @method void setValues(array $Values) 设置监控值
 * @method array getTime() 获取监控时间
 * @method void setTime(array $Time) 设置监控时间
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeGatewayCurveDataResponse extends AbstractModel
{
    /**
     * @var string 监控类型
     */
    public $MetricName;

    /**
     * @var string 监控起始时间
     */
    public $StartTime;

    /**
     * @var string 监控结束时间
     */
    public $EndTime;

    /**
     * @var integer 监控数据间隔
     */
    public $Period;

    /**
     * @var array 监控值
     */
    public $Values;

    /**
     * @var array 监控时间
     */
    public $Time;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $MetricName 监控类型
     * @param string $StartTime 监控起始时间
     * @param string $EndTime 监控结束时间
     * @param integer $Period 监控数据间隔
     * @param array $Values 监控值
     * @param array $Time 监控时间
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
        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
