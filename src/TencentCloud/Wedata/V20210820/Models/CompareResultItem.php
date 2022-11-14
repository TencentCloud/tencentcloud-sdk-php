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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 对比结果项
 *
 * @method integer getFixResult() 获取对比结果， 1为真 2为假
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFixResult(integer $FixResult) 设置对比结果， 1为真 2为假
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResultValue() 获取质量sql执行结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResultValue(string $ResultValue) 设置质量sql执行结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getValues() 获取阈值列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValues(array $Values) 设置阈值列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperator() 获取比较操作类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperator(string $Operator) 设置比较操作类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCompareType() 获取比较类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompareType(integer $CompareType) 设置比较类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getValueComputeType() 获取值比较类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValueComputeType(integer $ValueComputeType) 设置值比较类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class CompareResultItem extends AbstractModel
{
    /**
     * @var integer 对比结果， 1为真 2为假
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FixResult;

    /**
     * @var string 质量sql执行结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResultValue;

    /**
     * @var array 阈值列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Values;

    /**
     * @var string 比较操作类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Operator;

    /**
     * @var integer 比较类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompareType;

    /**
     * @var integer 值比较类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValueComputeType;

    /**
     * @param integer $FixResult 对比结果， 1为真 2为假
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResultValue 质量sql执行结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Values 阈值列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Operator 比较操作类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CompareType 比较类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ValueComputeType 值比较类型
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
        if (array_key_exists("FixResult",$param) and $param["FixResult"] !== null) {
            $this->FixResult = $param["FixResult"];
        }

        if (array_key_exists("ResultValue",$param) and $param["ResultValue"] !== null) {
            $this->ResultValue = $param["ResultValue"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = [];
            foreach ($param["Values"] as $key => $value){
                $obj = new ThresholdValue();
                $obj->deserialize($value);
                array_push($this->Values, $obj);
            }
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("CompareType",$param) and $param["CompareType"] !== null) {
            $this->CompareType = $param["CompareType"];
        }

        if (array_key_exists("ValueComputeType",$param) and $param["ValueComputeType"] !== null) {
            $this->ValueComputeType = $param["ValueComputeType"];
        }
    }
}
