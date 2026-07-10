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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 指标，可用于设置告警、查询数据
 *
 * @method string getNamespace() 获取<p>告警策略类型</p>
 * @method void setNamespace(string $Namespace) 设置<p>告警策略类型</p>
 * @method string getMetricName() 获取<p>指标名</p>
 * @method void setMetricName(string $MetricName) 设置<p>指标名</p>
 * @method string getDescription() 获取<p>指标展示名</p>
 * @method void setDescription(string $Description) 设置<p>指标展示名</p>
 * @method float getMin() 获取<p>最小值</p>
 * @method void setMin(float $Min) 设置<p>最小值</p>
 * @method float getMax() 获取<p>最大值</p>
 * @method void setMax(float $Max) 设置<p>最大值</p>
 * @method array getDimensions() 获取<p>维度列表</p>
 * @method void setDimensions(array $Dimensions) 设置<p>维度列表</p>
 * @method string getUnit() 获取<p>单位</p>
 * @method void setUnit(string $Unit) 设置<p>单位</p>
 * @method MetricConfig getMetricConfig() 获取<p>指标配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetricConfig(MetricConfig $MetricConfig) 设置<p>指标配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsAdvanced() 获取<p>是否为高级指标。1是 0否</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsAdvanced(integer $IsAdvanced) 设置<p>是否为高级指标。1是 0否</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsOpen() 获取<p>高级指标是否开通。1是 0否</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsOpen(integer $IsOpen) 设置<p>高级指标是否开通。1是 0否</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProductId() 获取<p>集成中心产品ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductId(integer $ProductId) 设置<p>集成中心产品ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOperators() 获取<p>匹配运算符</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperators(array $Operators) 设置<p>匹配运算符</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPeriods() 获取<p>指标触发</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPeriods(array $Periods) 设置<p>指标触发</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsLatenessMetric() 获取<p>是否延迟指标</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsLatenessMetric(integer $IsLatenessMetric) 设置<p>是否延迟指标</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class Metric extends AbstractModel
{
    /**
     * @var string <p>告警策略类型</p>
     */
    public $Namespace;

    /**
     * @var string <p>指标名</p>
     */
    public $MetricName;

    /**
     * @var string <p>指标展示名</p>
     */
    public $Description;

    /**
     * @var float <p>最小值</p>
     */
    public $Min;

    /**
     * @var float <p>最大值</p>
     */
    public $Max;

    /**
     * @var array <p>维度列表</p>
     */
    public $Dimensions;

    /**
     * @var string <p>单位</p>
     */
    public $Unit;

    /**
     * @var MetricConfig <p>指标配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetricConfig;

    /**
     * @var integer <p>是否为高级指标。1是 0否</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsAdvanced;

    /**
     * @var integer <p>高级指标是否开通。1是 0否</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsOpen;

    /**
     * @var integer <p>集成中心产品ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductId;

    /**
     * @var array <p>匹配运算符</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Operators;

    /**
     * @var array <p>指标触发</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Periods;

    /**
     * @var integer <p>是否延迟指标</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsLatenessMetric;

    /**
     * @param string $Namespace <p>告警策略类型</p>
     * @param string $MetricName <p>指标名</p>
     * @param string $Description <p>指标展示名</p>
     * @param float $Min <p>最小值</p>
     * @param float $Max <p>最大值</p>
     * @param array $Dimensions <p>维度列表</p>
     * @param string $Unit <p>单位</p>
     * @param MetricConfig $MetricConfig <p>指标配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsAdvanced <p>是否为高级指标。1是 0否</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsOpen <p>高级指标是否开通。1是 0否</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProductId <p>集成中心产品ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Operators <p>匹配运算符</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Periods <p>指标触发</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsLatenessMetric <p>是否延迟指标</p>
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
        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Min",$param) and $param["Min"] !== null) {
            $this->Min = $param["Min"];
        }

        if (array_key_exists("Max",$param) and $param["Max"] !== null) {
            $this->Max = $param["Max"];
        }

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = $param["Dimensions"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("MetricConfig",$param) and $param["MetricConfig"] !== null) {
            $this->MetricConfig = new MetricConfig();
            $this->MetricConfig->deserialize($param["MetricConfig"]);
        }

        if (array_key_exists("IsAdvanced",$param) and $param["IsAdvanced"] !== null) {
            $this->IsAdvanced = $param["IsAdvanced"];
        }

        if (array_key_exists("IsOpen",$param) and $param["IsOpen"] !== null) {
            $this->IsOpen = $param["IsOpen"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("Operators",$param) and $param["Operators"] !== null) {
            $this->Operators = [];
            foreach ($param["Operators"] as $key => $value){
                $obj = new Operator();
                $obj->deserialize($value);
                array_push($this->Operators, $obj);
            }
        }

        if (array_key_exists("Periods",$param) and $param["Periods"] !== null) {
            $this->Periods = $param["Periods"];
        }

        if (array_key_exists("IsLatenessMetric",$param) and $param["IsLatenessMetric"] !== null) {
            $this->IsLatenessMetric = $param["IsLatenessMetric"];
        }
    }
}
