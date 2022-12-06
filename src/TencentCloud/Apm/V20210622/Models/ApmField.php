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
 * @method string getCompareVal() 获取昨日同比指标值，已弃用，不建议使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompareVal(string $CompareVal) 设置昨日同比指标值，已弃用，不建议使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCompareVals() 获取Compare值结果数组，推荐使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompareVals(array $CompareVals) 设置Compare值结果数组，推荐使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getValue() 获取指标值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(float $Value) 设置指标值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUnit() 获取指标所对应的单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnit(string $Unit) 设置指标所对应的单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKey() 获取请求数
 * @method void setKey(string $Key) 设置请求数
 * @method array getLastPeriodValue() 获取同环比上周期具体数值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastPeriodValue(array $LastPeriodValue) 设置同环比上周期具体数值
注意：此字段可能返回 null，表示取不到有效值。
 */
class ApmField extends AbstractModel
{
    /**
     * @var string 昨日同比指标值，已弃用，不建议使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompareVal;

    /**
     * @var array Compare值结果数组，推荐使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompareVals;

    /**
     * @var float 指标值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @var string 指标所对应的单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Unit;

    /**
     * @var string 请求数
     */
    public $Key;

    /**
     * @var array 同环比上周期具体数值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastPeriodValue;

    /**
     * @param string $CompareVal 昨日同比指标值，已弃用，不建议使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CompareVals Compare值结果数组，推荐使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Value 指标值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Unit 指标所对应的单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Key 请求数
     * @param array $LastPeriodValue 同环比上周期具体数值
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
        if (array_key_exists("CompareVal",$param) and $param["CompareVal"] !== null) {
            $this->CompareVal = $param["CompareVal"];
        }

        if (array_key_exists("CompareVals",$param) and $param["CompareVals"] !== null) {
            $this->CompareVals = [];
            foreach ($param["CompareVals"] as $key => $value){
                $obj = new APMKVItem();
                $obj->deserialize($value);
                array_push($this->CompareVals, $obj);
            }
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("LastPeriodValue",$param) and $param["LastPeriodValue"] !== null) {
            $this->LastPeriodValue = [];
            foreach ($param["LastPeriodValue"] as $key => $value){
                $obj = new APMKV();
                $obj->deserialize($value);
                array_push($this->LastPeriodValue, $obj);
            }
        }
    }
}
