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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * {
  "Rate": "0.01",  ///如1%转换为0.01
  "Operator":  "1:OUT,2:IN_AND_OUT,3:IN"  ///如1%转换为0.01 
}
Operator
算子ID顺序配置，可以对每个算子配置IN、OUT、IN_AND_OUT三个值，分别表示采集输入数据、采集输出数据、同时采集输入和输出数据，配置示例:
 *
 * @method string getRate() 获取如1%转换为0.01
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRate(string $Rate) 设置如1%转换为0.01
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperator() 获取按照算子ID顺序配置，可以对每个算子配置IN、OUT、IN_AND_OUT三个值，分别表示采集输入数据、采集输出数据、同时采集输入和输出数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperator(string $Operator) 设置按照算子ID顺序配置，可以对每个算子配置IN、OUT、IN_AND_OUT三个值，分别表示采集输入数据、采集输出数据、同时采集输入和输出数据
注意：此字段可能返回 null，表示取不到有效值。
 */
class TraceModeConfiguration extends AbstractModel
{
    /**
     * @var string 如1%转换为0.01
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rate;

    /**
     * @var string 按照算子ID顺序配置，可以对每个算子配置IN、OUT、IN_AND_OUT三个值，分别表示采集输入数据、采集输出数据、同时采集输入和输出数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Operator;

    /**
     * @param string $Rate 如1%转换为0.01
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Operator 按照算子ID顺序配置，可以对每个算子配置IN、OUT、IN_AND_OUT三个值，分别表示采集输入数据、采集输出数据、同时采集输入和输出数据
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
        if (array_key_exists("Rate",$param) and $param["Rate"] !== null) {
            $this->Rate = $param["Rate"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }
    }
}
