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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 监控数据散点图
 *
 * @method integer getEndTime() 获取时间轴截止时间，GMT，精确到毫秒
 * @method void setEndTime(integer $EndTime) 设置时间轴截止时间，GMT，精确到毫秒
 * @method integer getStartTime() 获取时间粒度
 * @method void setStartTime(integer $StartTime) 设置时间粒度
 * @method integer getPeriod() 获取时间轴开始时间，GMT，精确到毫秒
 * @method void setPeriod(integer $Period) 设置时间轴开始时间，GMT，精确到毫秒
 * @method array getDataPoints() 获取多值数据点集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataPoints(array $DataPoints) 设置多值数据点集合
注意：此字段可能返回 null，表示取不到有效值。
 */
class InvocationMetricScatterPlot extends AbstractModel
{
    /**
     * @var integer 时间轴截止时间，GMT，精确到毫秒
     */
    public $EndTime;

    /**
     * @var integer 时间粒度
     */
    public $StartTime;

    /**
     * @var integer 时间轴开始时间，GMT，精确到毫秒
     */
    public $Period;

    /**
     * @var array 多值数据点集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataPoints;

    /**
     * @param integer $EndTime 时间轴截止时间，GMT，精确到毫秒
     * @param integer $StartTime 时间粒度
     * @param integer $Period 时间轴开始时间，GMT，精确到毫秒
     * @param array $DataPoints 多值数据点集合
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("DataPoints",$param) and $param["DataPoints"] !== null) {
            $this->DataPoints = [];
            foreach ($param["DataPoints"] as $key => $value){
                $obj = new MultiValueDataPoints();
                $obj->deserialize($value);
                array_push($this->DataPoints, $obj);
            }
        }
    }
}
