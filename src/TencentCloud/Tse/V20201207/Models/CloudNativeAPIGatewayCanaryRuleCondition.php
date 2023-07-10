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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 灰度规则中的条件配置
 *
 * @method string getType() 获取条件类型，支持 path, method, query, header, cookie, body 和 system。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置条件类型，支持 path, method, query, header, cookie, body 和 system。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKey() 获取参数名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKey(string $Key) 设置参数名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperator() 获取操作符，支持 "le", "eq", "lt", "ne", "ge", "gt", "regex", "exists", "in", "not in",  "prefix" ,"exact", "regex" 等
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperator(string $Operator) 设置操作符，支持 "le", "eq", "lt", "ne", "ge", "gt", "regex", "exists", "in", "not in",  "prefix" ,"exact", "regex" 等
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValue() 获取目标参数值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置目标参数值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDelimiter() 获取分隔符，当 Operator 为 in 或者 not in 时生效。支持值为英文逗号，英文分号，空格，换行符。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDelimiter(string $Delimiter) 设置分隔符，当 Operator 为 in 或者 not in 时生效。支持值为英文逗号，英文分号，空格，换行符。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGlobalConfigId() 获取全局配置 Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGlobalConfigId(string $GlobalConfigId) 设置全局配置 Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGlobalConfigName() 获取全局配置名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGlobalConfigName(string $GlobalConfigName) 设置全局配置名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class CloudNativeAPIGatewayCanaryRuleCondition extends AbstractModel
{
    /**
     * @var string 条件类型，支持 path, method, query, header, cookie, body 和 system。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 参数名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Key;

    /**
     * @var string 操作符，支持 "le", "eq", "lt", "ne", "ge", "gt", "regex", "exists", "in", "not in",  "prefix" ,"exact", "regex" 等
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Operator;

    /**
     * @var string 目标参数值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @var string 分隔符，当 Operator 为 in 或者 not in 时生效。支持值为英文逗号，英文分号，空格，换行符。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Delimiter;

    /**
     * @var string 全局配置 Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GlobalConfigId;

    /**
     * @var string 全局配置名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GlobalConfigName;

    /**
     * @param string $Type 条件类型，支持 path, method, query, header, cookie, body 和 system。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Key 参数名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Operator 操作符，支持 "le", "eq", "lt", "ne", "ge", "gt", "regex", "exists", "in", "not in",  "prefix" ,"exact", "regex" 等
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Value 目标参数值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Delimiter 分隔符，当 Operator 为 in 或者 not in 时生效。支持值为英文逗号，英文分号，空格，换行符。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GlobalConfigId 全局配置 Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GlobalConfigName 全局配置名称
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Delimiter",$param) and $param["Delimiter"] !== null) {
            $this->Delimiter = $param["Delimiter"];
        }

        if (array_key_exists("GlobalConfigId",$param) and $param["GlobalConfigId"] !== null) {
            $this->GlobalConfigId = $param["GlobalConfigId"];
        }

        if (array_key_exists("GlobalConfigName",$param) and $param["GlobalConfigName"] !== null) {
            $this->GlobalConfigName = $param["GlobalConfigName"];
        }
    }
}
