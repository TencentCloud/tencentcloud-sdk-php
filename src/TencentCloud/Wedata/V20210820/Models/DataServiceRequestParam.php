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
 * 数据服务入参
 *
 * @method string getParamName() 获取参数名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamName(string $ParamName) 设置参数名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBindField() 获取绑定字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBindField(string $BindField) 设置绑定字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParamType() 获取参数类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamType(string $ParamType) 设置参数类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParamPosition() 获取参数位置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamPosition(string $ParamPosition) 设置参数位置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperator() 获取操作符
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperator(string $Operator) 设置操作符
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNonEmpty() 获取是否为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNonEmpty(integer $NonEmpty) 设置是否为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDefaultValue() 获取默认值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefaultValue(string $DefaultValue) 设置默认值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExampleValue() 获取示例值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExampleValue(string $ExampleValue) 设置示例值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取参数描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置参数描述
注意：此字段可能返回 null，表示取不到有效值。
 */
class DataServiceRequestParam extends AbstractModel
{
    /**
     * @var string 参数名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamName;

    /**
     * @var string 绑定字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BindField;

    /**
     * @var string 参数类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamType;

    /**
     * @var string 参数位置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamPosition;

    /**
     * @var string 操作符
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Operator;

    /**
     * @var integer 是否为空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NonEmpty;

    /**
     * @var string 默认值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefaultValue;

    /**
     * @var string 示例值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExampleValue;

    /**
     * @var string 参数描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @param string $ParamName 参数名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BindField 绑定字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParamType 参数类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParamPosition 参数位置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Operator 操作符
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NonEmpty 是否为空
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DefaultValue 默认值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExampleValue 示例值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 参数描述
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
        if (array_key_exists("ParamName",$param) and $param["ParamName"] !== null) {
            $this->ParamName = $param["ParamName"];
        }

        if (array_key_exists("BindField",$param) and $param["BindField"] !== null) {
            $this->BindField = $param["BindField"];
        }

        if (array_key_exists("ParamType",$param) and $param["ParamType"] !== null) {
            $this->ParamType = $param["ParamType"];
        }

        if (array_key_exists("ParamPosition",$param) and $param["ParamPosition"] !== null) {
            $this->ParamPosition = $param["ParamPosition"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("NonEmpty",$param) and $param["NonEmpty"] !== null) {
            $this->NonEmpty = $param["NonEmpty"];
        }

        if (array_key_exists("DefaultValue",$param) and $param["DefaultValue"] !== null) {
            $this->DefaultValue = $param["DefaultValue"];
        }

        if (array_key_exists("ExampleValue",$param) and $param["ExampleValue"] !== null) {
            $this->ExampleValue = $param["ExampleValue"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
