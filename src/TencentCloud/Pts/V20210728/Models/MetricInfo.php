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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 指标结构
 *
 * @method string getMetric() 获取后台指标
 * @method void setMetric(string $Metric) 设置后台指标
 * @method string getAlias() 获取前台展示指标名称
 * @method void setAlias(string $Alias) 设置前台展示指标名称
 * @method string getDescription() 获取指标描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置指标描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMetricType() 获取指标类型
 * @method void setMetricType(string $MetricType) 设置指标类型
 * @method string getUnit() 获取默认指标单位
 * @method void setUnit(string $Unit) 设置默认指标单位
 * @method array getAggregations() 获取指标支持的聚合函数
 * @method void setAggregations(array $Aggregations) 设置指标支持的聚合函数
 * @method boolean getInnerMetric() 获取是否内部指标，内部指标不可在前台提供用户自由选择
 * @method void setInnerMetric(boolean $InnerMetric) 设置是否内部指标，内部指标不可在前台提供用户自由选择
 */
class MetricInfo extends AbstractModel
{
    /**
     * @var string 后台指标
     */
    public $Metric;

    /**
     * @var string 前台展示指标名称
     */
    public $Alias;

    /**
     * @var string 指标描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 指标类型
     */
    public $MetricType;

    /**
     * @var string 默认指标单位
     */
    public $Unit;

    /**
     * @var array 指标支持的聚合函数
     */
    public $Aggregations;

    /**
     * @var boolean 是否内部指标，内部指标不可在前台提供用户自由选择
     */
    public $InnerMetric;

    /**
     * @param string $Metric 后台指标
     * @param string $Alias 前台展示指标名称
     * @param string $Description 指标描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MetricType 指标类型
     * @param string $Unit 默认指标单位
     * @param array $Aggregations 指标支持的聚合函数
     * @param boolean $InnerMetric 是否内部指标，内部指标不可在前台提供用户自由选择
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
        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("MetricType",$param) and $param["MetricType"] !== null) {
            $this->MetricType = $param["MetricType"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("Aggregations",$param) and $param["Aggregations"] !== null) {
            $this->Aggregations = [];
            foreach ($param["Aggregations"] as $key => $value){
                $obj = new AggregationLegend();
                $obj->deserialize($value);
                array_push($this->Aggregations, $obj);
            }
        }

        if (array_key_exists("InnerMetric",$param) and $param["InnerMetric"] !== null) {
            $this->InnerMetric = $param["InnerMetric"];
        }
    }
}
