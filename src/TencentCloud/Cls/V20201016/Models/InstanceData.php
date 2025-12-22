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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云产品指标订阅预览结果实例信息
 *
 * @method string getMetricName() 获取云监控指标名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetricName(string $MetricName) 设置云监控指标名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCLSMetricName() 获取CLS指标名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCLSMetricName(string $CLSMetricName) 设置CLS指标名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespace() 获取云产品命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespace(string $Namespace) 设置云产品命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDimensions() 获取实例信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDimensions(array $Dimensions) 设置实例信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPeriod() 获取周期,单位：秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPeriod(integer $Period) 设置周期,单位：秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getValue() 获取指标统计值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(float $Value) 设置指标统计值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrMsg() 获取错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrMsg(string $ErrMsg) 设置错误信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceData extends AbstractModel
{
    /**
     * @var string 云监控指标名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetricName;

    /**
     * @var string CLS指标名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CLSMetricName;

    /**
     * @var string 云产品命名空间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Namespace;

    /**
     * @var array 实例信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Dimensions;

    /**
     * @var integer 周期,单位：秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Period;

    /**
     * @var float 指标统计值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @var string 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrMsg;

    /**
     * @param string $MetricName 云监控指标名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CLSMetricName CLS指标名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Namespace 云产品命名空间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Dimensions 实例信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Period 周期,单位：秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Value 指标统计值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrMsg 错误信息
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

        if (array_key_exists("CLSMetricName",$param) and $param["CLSMetricName"] !== null) {
            $this->CLSMetricName = $param["CLSMetricName"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = [];
            foreach ($param["Dimensions"] as $key => $value){
                $obj = new Dimension();
                $obj->deserialize($value);
                array_push($this->Dimensions, $obj);
            }
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }
    }
}
