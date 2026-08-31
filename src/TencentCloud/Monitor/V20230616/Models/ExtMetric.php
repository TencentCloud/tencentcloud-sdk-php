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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 对外指标
 *
 * @method string getMetricName() 获取指标名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetricName(string $MetricName) 设置指标名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMetricCName() 获取中文指标名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetricCName(string $MetricCName) 设置中文指标名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCNMeaning() 获取中文含义
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCNMeaning(string $CNMeaning) 设置中文含义
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnMeaning() 获取英文含义
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnMeaning(string $EnMeaning) 设置英文含义
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUnit() 获取单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnit(string $Unit) 设置单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDimensionFlag() 获取是否配置对外维度
 * @method void setDimensionFlag(boolean $DimensionFlag) 设置是否配置对外维度
 */
class ExtMetric extends AbstractModel
{
    /**
     * @var string 指标名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetricName;

    /**
     * @var string 中文指标名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetricCName;

    /**
     * @var string 中文含义
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CNMeaning;

    /**
     * @var string 英文含义
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnMeaning;

    /**
     * @var string 单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Unit;

    /**
     * @var boolean 是否配置对外维度
     */
    public $DimensionFlag;

    /**
     * @param string $MetricName 指标名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MetricCName 中文指标名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CNMeaning 中文含义
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EnMeaning 英文含义
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Unit 单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $DimensionFlag 是否配置对外维度
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

        if (array_key_exists("MetricCName",$param) and $param["MetricCName"] !== null) {
            $this->MetricCName = $param["MetricCName"];
        }

        if (array_key_exists("CNMeaning",$param) and $param["CNMeaning"] !== null) {
            $this->CNMeaning = $param["CNMeaning"];
        }

        if (array_key_exists("EnMeaning",$param) and $param["EnMeaning"] !== null) {
            $this->EnMeaning = $param["EnMeaning"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("DimensionFlag",$param) and $param["DimensionFlag"] !== null) {
            $this->DimensionFlag = $param["DimensionFlag"];
        }
    }
}
