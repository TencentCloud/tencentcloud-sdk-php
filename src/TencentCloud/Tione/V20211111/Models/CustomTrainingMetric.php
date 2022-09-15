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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义指标
 *
 * @method string getXType() 获取X轴数据类型: TIMESTAMP; EPOCH; STEP
 * @method void setXType(string $XType) 设置X轴数据类型: TIMESTAMP; EPOCH; STEP
 * @method array getPoints() 获取数据点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPoints(array $Points) 设置数据点
注意：此字段可能返回 null，表示取不到有效值。
 */
class CustomTrainingMetric extends AbstractModel
{
    /**
     * @var string X轴数据类型: TIMESTAMP; EPOCH; STEP
     */
    public $XType;

    /**
     * @var array 数据点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Points;

    /**
     * @param string $XType X轴数据类型: TIMESTAMP; EPOCH; STEP
     * @param array $Points 数据点
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
        if (array_key_exists("XType",$param) and $param["XType"] !== null) {
            $this->XType = $param["XType"];
        }

        if (array_key_exists("Points",$param) and $param["Points"] !== null) {
            $this->Points = [];
            foreach ($param["Points"] as $key => $value){
                $obj = new CustomTrainingPoint();
                $obj->deserialize($value);
                array_push($this->Points, $obj);
            }
        }
    }
}
