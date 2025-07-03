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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 指标维度信息
 *
 * @method string getKey() 获取指标名
 * @method void setKey(string $Key) 设置指标名
 * @method float getValue() 获取指标数值
 * @method void setValue(float $Value) 设置指标数值
 * @method string getUnit() 获取指标所对应的单位
 * @method void setUnit(string $Unit) 设置指标所对应的单位
 * @method array getCompareVals() 获取同比结果数组，推荐使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompareVals(array $CompareVals) 设置同比结果数组，推荐使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLastPeriodValue() 获取同比上一个周期的具体指标数值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastPeriodValue(array $LastPeriodValue) 设置同比上一个周期的具体指标数值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCompareVal() 获取同比指标值，已弃用，不建议使用
 * @method void setCompareVal(string $CompareVal) 设置同比指标值，已弃用，不建议使用
 */
class ApmField extends AbstractModel
{
    /**
     * @var string 指标名
     */
    public $Key;

    /**
     * @var float 指标数值
     */
    public $Value;

    /**
     * @var string 指标所对应的单位
     */
    public $Unit;

    /**
     * @var array 同比结果数组，推荐使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompareVals;

    /**
     * @var array 同比上一个周期的具体指标数值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastPeriodValue;

    /**
     * @var string 同比指标值，已弃用，不建议使用
     */
    public $CompareVal;

    /**
     * @param string $Key 指标名
     * @param float $Value 指标数值
     * @param string $Unit 指标所对应的单位
     * @param array $CompareVals 同比结果数组，推荐使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LastPeriodValue 同比上一个周期的具体指标数值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CompareVal 同比指标值，已弃用，不建议使用
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("CompareVals",$param) and $param["CompareVals"] !== null) {
            $this->CompareVals = [];
            foreach ($param["CompareVals"] as $key => $value){
                $obj = new APMKVItem();
                $obj->deserialize($value);
                array_push($this->CompareVals, $obj);
            }
        }

        if (array_key_exists("LastPeriodValue",$param) and $param["LastPeriodValue"] !== null) {
            $this->LastPeriodValue = [];
            foreach ($param["LastPeriodValue"] as $key => $value){
                $obj = new APMKV();
                $obj->deserialize($value);
                array_push($this->LastPeriodValue, $obj);
            }
        }

        if (array_key_exists("CompareVal",$param) and $param["CompareVal"] !== null) {
            $this->CompareVal = $param["CompareVal"];
        }
    }
}
