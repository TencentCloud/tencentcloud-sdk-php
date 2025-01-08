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
namespace TencentCloud\Cloudapp\V20220530\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 表示商品 SKU 的单个售卖参数
 *
 * @method string getParamKey() 获取售卖参数标识
 * @method void setParamKey(string $ParamKey) 设置售卖参数标识
 * @method string getParamKeyName() 获取售卖参数的展示名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamKeyName(string $ParamKeyName) 设置售卖参数的展示名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParamValue() 获取售卖参数值，当ParamType=Quant时，该值有可能为Null
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamValue(string $ParamValue) 设置售卖参数值，当ParamType=Quant时，该值有可能为Null
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParamValueName() 获取售卖参数值的展示名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamValueName(string $ParamValueName) 设置售卖参数值的展示名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParamType() 获取售卖参数的类型，目前支持枚举类Enum/数量类Quant
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamType(string $ParamType) 设置售卖参数的类型，目前支持枚举类Enum/数量类Quant
注意：此字段可能返回 null，表示取不到有效值。
 */
class SaleParam extends AbstractModel
{
    /**
     * @var string 售卖参数标识
     */
    public $ParamKey;

    /**
     * @var string 售卖参数的展示名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamKeyName;

    /**
     * @var string 售卖参数值，当ParamType=Quant时，该值有可能为Null
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamValue;

    /**
     * @var string 售卖参数值的展示名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamValueName;

    /**
     * @var string 售卖参数的类型，目前支持枚举类Enum/数量类Quant
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamType;

    /**
     * @param string $ParamKey 售卖参数标识
     * @param string $ParamKeyName 售卖参数的展示名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParamValue 售卖参数值，当ParamType=Quant时，该值有可能为Null
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParamValueName 售卖参数值的展示名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParamType 售卖参数的类型，目前支持枚举类Enum/数量类Quant
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
        if (array_key_exists("ParamKey",$param) and $param["ParamKey"] !== null) {
            $this->ParamKey = $param["ParamKey"];
        }

        if (array_key_exists("ParamKeyName",$param) and $param["ParamKeyName"] !== null) {
            $this->ParamKeyName = $param["ParamKeyName"];
        }

        if (array_key_exists("ParamValue",$param) and $param["ParamValue"] !== null) {
            $this->ParamValue = $param["ParamValue"];
        }

        if (array_key_exists("ParamValueName",$param) and $param["ParamValueName"] !== null) {
            $this->ParamValueName = $param["ParamValueName"];
        }

        if (array_key_exists("ParamType",$param) and $param["ParamType"] !== null) {
            $this->ParamType = $param["ParamType"];
        }
    }
}
