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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 限流Header参数名
 *
 * @method string getParamsName() 获取参数名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamsName(string $ParamsName) 设置参数名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取操作符号,支持REGEX(正则),IN(属于),NOT_IN(不属于), EACH(每个参数值)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置操作符号,支持REGEX(正则),IN(属于),NOT_IN(不属于), EACH(每个参数值)
注意：此字段可能返回 null，表示取不到有效值。
 */
class LimitHeaderName extends AbstractModel
{
    /**
     * @var string 参数名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamsName;

    /**
     * @var string 操作符号,支持REGEX(正则),IN(属于),NOT_IN(不属于), EACH(每个参数值)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @param string $ParamsName 参数名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 操作符号,支持REGEX(正则),IN(属于),NOT_IN(不属于), EACH(每个参数值)
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
        if (array_key_exists("ParamsName",$param) and $param["ParamsName"] !== null) {
            $this->ParamsName = $param["ParamsName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
