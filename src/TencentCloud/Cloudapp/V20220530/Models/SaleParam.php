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
 * @method string getParamId() 获取参数 Id
 * @method void setParamId(string $ParamId) 设置参数 Id
 * @method string getParamValueId() 获取参数值 Id
 * @method void setParamValueId(string $ParamValueId) 设置参数值 Id
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
 * @method string getModuleId() 获取模块ID
 * @method void setModuleId(string $ModuleId) 设置模块ID
 * @method string getModuleKey() 获取模块key
 * @method void setModuleKey(string $ModuleKey) 设置模块key
 * @method string getModuleName() 获取模块名称
 * @method void setModuleName(string $ModuleName) 设置模块名称
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
     * @var string 参数 Id
     */
    public $ParamId;

    /**
     * @var string 参数值 Id
     */
    public $ParamValueId;

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
     * @var string 模块ID
     */
    public $ModuleId;

    /**
     * @var string 模块key
     */
    public $ModuleKey;

    /**
     * @var string 模块名称
     */
    public $ModuleName;

    /**
     * @param string $ParamKey 售卖参数标识
     * @param string $ParamKeyName 售卖参数的展示名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParamId 参数 Id
     * @param string $ParamValueId 参数值 Id
     * @param string $ParamValue 售卖参数值，当ParamType=Quant时，该值有可能为Null
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParamValueName 售卖参数值的展示名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParamType 售卖参数的类型，目前支持枚举类Enum/数量类Quant
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModuleId 模块ID
     * @param string $ModuleKey 模块key
     * @param string $ModuleName 模块名称
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

        if (array_key_exists("ParamId",$param) and $param["ParamId"] !== null) {
            $this->ParamId = $param["ParamId"];
        }

        if (array_key_exists("ParamValueId",$param) and $param["ParamValueId"] !== null) {
            $this->ParamValueId = $param["ParamValueId"];
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

        if (array_key_exists("ModuleId",$param) and $param["ModuleId"] !== null) {
            $this->ModuleId = $param["ModuleId"];
        }

        if (array_key_exists("ModuleKey",$param) and $param["ModuleKey"] !== null) {
            $this->ModuleKey = $param["ModuleKey"];
        }

        if (array_key_exists("ModuleName",$param) and $param["ModuleName"] !== null) {
            $this->ModuleName = $param["ModuleName"];
        }
    }
}
