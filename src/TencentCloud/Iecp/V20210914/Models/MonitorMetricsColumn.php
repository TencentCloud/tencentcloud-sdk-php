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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 监控数据列
 *
 * @method string getColumnName() 获取数据名称
 * @method void setColumnName(string $ColumnName) 设置数据名称
 * @method array getColumnData() 获取数据内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumnData(array $ColumnData) 设置数据内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getColumnBelong() 获取数据所属，查询Workload类型时有值
 * @method void setColumnBelong(string $ColumnBelong) 设置数据所属，查询Workload类型时有值
 * @method float getMaxValue() 获取最大值
 * @method void setMaxValue(float $MaxValue) 设置最大值
 * @method float getMinValue() 获取最小值
 * @method void setMinValue(float $MinValue) 设置最小值
 * @method float getAvgValue() 获取平均值
 * @method void setAvgValue(float $AvgValue) 设置平均值
 * @method integer getColumnTime() 获取时间戳数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumnTime(integer $ColumnTime) 设置时间戳数组
注意：此字段可能返回 null，表示取不到有效值。
 */
class MonitorMetricsColumn extends AbstractModel
{
    /**
     * @var string 数据名称
     */
    public $ColumnName;

    /**
     * @var array 数据内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColumnData;

    /**
     * @var string 数据所属，查询Workload类型时有值
     */
    public $ColumnBelong;

    /**
     * @var float 最大值
     */
    public $MaxValue;

    /**
     * @var float 最小值
     */
    public $MinValue;

    /**
     * @var float 平均值
     */
    public $AvgValue;

    /**
     * @var integer 时间戳数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColumnTime;

    /**
     * @param string $ColumnName 数据名称
     * @param array $ColumnData 数据内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ColumnBelong 数据所属，查询Workload类型时有值
     * @param float $MaxValue 最大值
     * @param float $MinValue 最小值
     * @param float $AvgValue 平均值
     * @param integer $ColumnTime 时间戳数组
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
        if (array_key_exists("ColumnName",$param) and $param["ColumnName"] !== null) {
            $this->ColumnName = $param["ColumnName"];
        }

        if (array_key_exists("ColumnData",$param) and $param["ColumnData"] !== null) {
            $this->ColumnData = $param["ColumnData"];
        }

        if (array_key_exists("ColumnBelong",$param) and $param["ColumnBelong"] !== null) {
            $this->ColumnBelong = $param["ColumnBelong"];
        }

        if (array_key_exists("MaxValue",$param) and $param["MaxValue"] !== null) {
            $this->MaxValue = $param["MaxValue"];
        }

        if (array_key_exists("MinValue",$param) and $param["MinValue"] !== null) {
            $this->MinValue = $param["MinValue"];
        }

        if (array_key_exists("AvgValue",$param) and $param["AvgValue"] !== null) {
            $this->AvgValue = $param["AvgValue"];
        }

        if (array_key_exists("ColumnTime",$param) and $param["ColumnTime"] !== null) {
            $this->ColumnTime = $param["ColumnTime"];
        }
    }
}
