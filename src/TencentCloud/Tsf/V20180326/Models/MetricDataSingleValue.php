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
 * 单值指标
 *
 * @method string getMetricName() 获取指标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetricName(string $MetricName) 设置指标
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMetricFunction() 获取统计方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetricFunction(string $MetricFunction) 设置统计方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMetricDataValue() 获取指标值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetricDataValue(string $MetricDataValue) 设置指标值
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getDailyPercent() 获取日环比
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDailyPercent(float $DailyPercent) 设置日环比
注意：此字段可能返回 null，表示取不到有效值。
 */
class MetricDataSingleValue extends AbstractModel
{
    /**
     * @var string 指标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetricName;

    /**
     * @var string 统计方式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetricFunction;

    /**
     * @var string 指标值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetricDataValue;

    /**
     * @var float 日环比
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DailyPercent;

    /**
     * @param string $MetricName 指标
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MetricFunction 统计方式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MetricDataValue 指标值
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $DailyPercent 日环比
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
        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("MetricFunction",$param) and $param["MetricFunction"] !== null) {
            $this->MetricFunction = $param["MetricFunction"];
        }

        if (array_key_exists("MetricDataValue",$param) and $param["MetricDataValue"] !== null) {
            $this->MetricDataValue = $param["MetricDataValue"];
        }

        if (array_key_exists("DailyPercent",$param) and $param["DailyPercent"] !== null) {
            $this->DailyPercent = $param["DailyPercent"];
        }
    }
}
