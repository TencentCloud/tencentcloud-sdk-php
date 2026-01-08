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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 比较条件
 *
 * @method integer getCompareType() 获取比较类型【入参必填】，1.固定值  2.波动值  3.数值范围比较  4.枚举范围比较  5.不用比较   6.字段数据相关性  7.公平性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompareType(integer $CompareType) 设置比较类型【入参必填】，1.固定值  2.波动值  3.数值范围比较  4.枚举范围比较  5.不用比较   6.字段数据相关性  7.公平性
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperator() 获取比较操作类型【入参条件必填】，CompareType ∈ {1,2,6,7} 时必填
<  <=  ==  =>  > !=
IRLCRO:在区间内(左闭右开)
IRLORC:在区间内(左开右闭)
IRLCRC:在区间内(左闭右闭)
IRLORO:在区间内(左开右开)
NRLCRO:不在区间内(左闭右开)
NRLORC:不在区间内(左开右闭)
NRLCRC:不在区间内(左闭右闭)
NRLORO:不在区间内(左开右开)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperator(string $Operator) 设置比较操作类型【入参条件必填】，CompareType ∈ {1,2,6,7} 时必填
<  <=  ==  =>  > !=
IRLCRO:在区间内(左闭右开)
IRLORC:在区间内(左开右闭)
IRLCRC:在区间内(左闭右闭)
IRLORO:在区间内(左开右开)
NRLCRO:不在区间内(左闭右开)
NRLORC:不在区间内(左开右闭)
NRLCRC:不在区间内(左闭右闭)
NRLORO:不在区间内(左开右开)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getValueComputeType() 获取质量统计值类型【入参条件必填】，当 CompareType ∈ {2,3,7} 时必填
可选值：
当 compareType = 2(波动值) 时：
  - 1 = 绝对值(ABS)
  - 2 = 上升(ASCEND)
  - 3 = 下降(DESCEND)

当 compareType = 3(数值范围) 时：
  - 4 = 范围内(WITH_IN_RANGE)
  - 5 = 范围外(OUT_OF_RANGE)

当 compareType = 7(公平性) 时：
  - 6 = 公平率(FAIRNESS_RATE)
  - 7 = 公平差(FAIRNESS_GAP)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValueComputeType(integer $ValueComputeType) 设置质量统计值类型【入参条件必填】，当 CompareType ∈ {2,3,7} 时必填
可选值：
当 compareType = 2(波动值) 时：
  - 1 = 绝对值(ABS)
  - 2 = 上升(ASCEND)
  - 3 = 下降(DESCEND)

当 compareType = 3(数值范围) 时：
  - 4 = 范围内(WITH_IN_RANGE)
  - 5 = 范围外(OUT_OF_RANGE)

当 compareType = 7(公平性) 时：
  - 6 = 公平率(FAIRNESS_RATE)
  - 7 = 公平差(FAIRNESS_GAP)
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getValueList() 获取比较阈值列表【入参必填】
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValueList(array $ValueList) 设置比较阈值列表【入参必填】
注意：此字段可能返回 null，表示取不到有效值。
 */
class QualityCompareRuleItem extends AbstractModel
{
    /**
     * @var integer 比较类型【入参必填】，1.固定值  2.波动值  3.数值范围比较  4.枚举范围比较  5.不用比较   6.字段数据相关性  7.公平性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompareType;

    /**
     * @var string 比较操作类型【入参条件必填】，CompareType ∈ {1,2,6,7} 时必填
<  <=  ==  =>  > !=
IRLCRO:在区间内(左闭右开)
IRLORC:在区间内(左开右闭)
IRLCRC:在区间内(左闭右闭)
IRLORO:在区间内(左开右开)
NRLCRO:不在区间内(左闭右开)
NRLORC:不在区间内(左开右闭)
NRLCRC:不在区间内(左闭右闭)
NRLORO:不在区间内(左开右开)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Operator;

    /**
     * @var integer 质量统计值类型【入参条件必填】，当 CompareType ∈ {2,3,7} 时必填
可选值：
当 compareType = 2(波动值) 时：
  - 1 = 绝对值(ABS)
  - 2 = 上升(ASCEND)
  - 3 = 下降(DESCEND)

当 compareType = 3(数值范围) 时：
  - 4 = 范围内(WITH_IN_RANGE)
  - 5 = 范围外(OUT_OF_RANGE)

当 compareType = 7(公平性) 时：
  - 6 = 公平率(FAIRNESS_RATE)
  - 7 = 公平差(FAIRNESS_GAP)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValueComputeType;

    /**
     * @var array 比较阈值列表【入参必填】
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValueList;

    /**
     * @param integer $CompareType 比较类型【入参必填】，1.固定值  2.波动值  3.数值范围比较  4.枚举范围比较  5.不用比较   6.字段数据相关性  7.公平性
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Operator 比较操作类型【入参条件必填】，CompareType ∈ {1,2,6,7} 时必填
<  <=  ==  =>  > !=
IRLCRO:在区间内(左闭右开)
IRLORC:在区间内(左开右闭)
IRLCRC:在区间内(左闭右闭)
IRLORO:在区间内(左开右开)
NRLCRO:不在区间内(左闭右开)
NRLORC:不在区间内(左开右闭)
NRLCRC:不在区间内(左闭右闭)
NRLORO:不在区间内(左开右开)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ValueComputeType 质量统计值类型【入参条件必填】，当 CompareType ∈ {2,3,7} 时必填
可选值：
当 compareType = 2(波动值) 时：
  - 1 = 绝对值(ABS)
  - 2 = 上升(ASCEND)
  - 3 = 下降(DESCEND)

当 compareType = 3(数值范围) 时：
  - 4 = 范围内(WITH_IN_RANGE)
  - 5 = 范围外(OUT_OF_RANGE)

当 compareType = 7(公平性) 时：
  - 6 = 公平率(FAIRNESS_RATE)
  - 7 = 公平差(FAIRNESS_GAP)
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ValueList 比较阈值列表【入参必填】
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
        if (array_key_exists("CompareType",$param) and $param["CompareType"] !== null) {
            $this->CompareType = $param["CompareType"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("ValueComputeType",$param) and $param["ValueComputeType"] !== null) {
            $this->ValueComputeType = $param["ValueComputeType"];
        }

        if (array_key_exists("ValueList",$param) and $param["ValueList"] !== null) {
            $this->ValueList = [];
            foreach ($param["ValueList"] as $key => $value){
                $obj = new QualityThresholdValue();
                $obj->deserialize($value);
                array_push($this->ValueList, $obj);
            }
        }
    }
}
