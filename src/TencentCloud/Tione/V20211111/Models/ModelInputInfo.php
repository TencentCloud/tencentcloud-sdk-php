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
 * 模型输入信息
 *
 * @method string getModelInputType() 获取input数据类型
FIXED：固定
RANGE：浮动
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelInputType(string $ModelInputType) 设置input数据类型
FIXED：固定
RANGE：浮动
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getModelInputDimension() 获取input数据尺寸
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelInputDimension(array $ModelInputDimension) 设置input数据尺寸
注意：此字段可能返回 null，表示取不到有效值。
 */
class ModelInputInfo extends AbstractModel
{
    /**
     * @var string input数据类型
FIXED：固定
RANGE：浮动
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelInputType;

    /**
     * @var array input数据尺寸
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelInputDimension;

    /**
     * @param string $ModelInputType input数据类型
FIXED：固定
RANGE：浮动
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ModelInputDimension input数据尺寸
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
        if (array_key_exists("ModelInputType",$param) and $param["ModelInputType"] !== null) {
            $this->ModelInputType = $param["ModelInputType"];
        }

        if (array_key_exists("ModelInputDimension",$param) and $param["ModelInputDimension"] !== null) {
            $this->ModelInputDimension = $param["ModelInputDimension"];
        }
    }
}
