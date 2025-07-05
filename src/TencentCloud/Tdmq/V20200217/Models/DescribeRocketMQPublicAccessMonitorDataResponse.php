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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRocketMQPublicAccessMonitorData返回参数结构体
 *
 * @method string getMetricName() 获取指标名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetricName(string $MetricName) 设置指标名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPeriod() 获取监控统计周期，如60。默认为取值为300，单位为s。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPeriod(integer $Period) 设置监控统计周期，如60。默认为取值为300，单位为s。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取起始时间，如2018-09-22T19:51:23+08:00
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置起始时间，如2018-09-22T19:51:23+08:00
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取结束时间，如2018-09-22T20:51:23+08:00，默认为当前时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置结束时间，如2018-09-22T20:51:23+08:00，默认为当前时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDataPoints() 获取数据点数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataPoints(array $DataPoints) 设置数据点数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMsg() 获取返回信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMsg(string $Msg) 设置返回信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeRocketMQPublicAccessMonitorDataResponse extends AbstractModel
{
    /**
     * @var string 指标名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetricName;

    /**
     * @var integer 监控统计周期，如60。默认为取值为300，单位为s。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Period;

    /**
     * @var string 起始时间，如2018-09-22T19:51:23+08:00
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 结束时间，如2018-09-22T20:51:23+08:00，默认为当前时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var array 数据点数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataPoints;

    /**
     * @var string 返回信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Msg;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $MetricName 指标名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Period 监控统计周期，如60。默认为取值为300，单位为s。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 起始时间，如2018-09-22T19:51:23+08:00
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 结束时间，如2018-09-22T20:51:23+08:00，默认为当前时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DataPoints 数据点数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Msg 返回信息
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("DataPoints",$param) and $param["DataPoints"] !== null) {
            $this->DataPoints = [];
            foreach ($param["DataPoints"] as $key => $value){
                $obj = new RocketMQDataPoint();
                $obj->deserialize($value);
                array_push($this->DataPoints, $obj);
            }
        }

        if (array_key_exists("Msg",$param) and $param["Msg"] !== null) {
            $this->Msg = $param["Msg"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
