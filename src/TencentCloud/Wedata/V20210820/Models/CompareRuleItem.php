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
 * 比较条件
 *
 * @method integer getCompareType() 获取比较类型 1.固定值  2.波动值  3.数值范围比较  4.枚举范围比较  5.不用比较
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompareType(integer $CompareType) 设置比较类型 1.固定值  2.波动值  3.数值范围比较  4.枚举范围比较  5.不用比较
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperator() 获取比较操作类型 <  <=  ==  =>  >
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperator(string $Operator) 设置比较操作类型 <  <=  ==  =>  >
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getValueComputeType() 获取质量统计值类型 1.绝对值  2.上升 3. 下降  4._C包含   5. N_C不包含
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValueComputeType(integer $ValueComputeType) 设置质量统计值类型 1.绝对值  2.上升 3. 下降  4._C包含   5. N_C不包含
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getValueList() 获取比较阈值列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValueList(array $ValueList) 设置比较阈值列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class CompareRuleItem extends AbstractModel
{
    /**
     * @var integer 比较类型 1.固定值  2.波动值  3.数值范围比较  4.枚举范围比较  5.不用比较
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompareType;

    /**
     * @var string 比较操作类型 <  <=  ==  =>  >
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Operator;

    /**
     * @var integer 质量统计值类型 1.绝对值  2.上升 3. 下降  4._C包含   5. N_C不包含
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValueComputeType;

    /**
     * @var array 比较阈值列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValueList;

    /**
     * @param integer $CompareType 比较类型 1.固定值  2.波动值  3.数值范围比较  4.枚举范围比较  5.不用比较
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Operator 比较操作类型 <  <=  ==  =>  >
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ValueComputeType 质量统计值类型 1.绝对值  2.上升 3. 下降  4._C包含   5. N_C不包含
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ValueList 比较阈值列表
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
                $obj = new ThresholdValue();
                $obj->deserialize($value);
                array_push($this->ValueList, $obj);
            }
        }
    }
}
