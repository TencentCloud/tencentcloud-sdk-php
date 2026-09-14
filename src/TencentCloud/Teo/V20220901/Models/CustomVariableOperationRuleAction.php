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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义变量规则操作。
 *
 * @method string getName() 获取<p>操作名称。名称需要与参数结构体对应，例如 Name=Set，则 SetParameters 必填。当前仅支持填写 Set。</p><li>Set：自定义变量设置；</li>
 * @method void setName(string $Name) 设置<p>操作名称。名称需要与参数结构体对应，例如 Name=Set，则 SetParameters 必填。当前仅支持填写 Set。</p><li>Set：自定义变量设置；</li>
 * @method SetParameters getSetParameters() 获取<p>自定义变量设置参数。此参数中若存在多条运算，按照数组的顺序依次执行。当 Name 取值为 Set 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSetParameters(SetParameters $SetParameters) 设置<p>自定义变量设置参数。此参数中若存在多条运算，按照数组的顺序依次执行。当 Name 取值为 Set 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class CustomVariableOperationRuleAction extends AbstractModel
{
    /**
     * @var string <p>操作名称。名称需要与参数结构体对应，例如 Name=Set，则 SetParameters 必填。当前仅支持填写 Set。</p><li>Set：自定义变量设置；</li>
     */
    public $Name;

    /**
     * @var SetParameters <p>自定义变量设置参数。此参数中若存在多条运算，按照数组的顺序依次执行。当 Name 取值为 Set 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SetParameters;

    /**
     * @param string $Name <p>操作名称。名称需要与参数结构体对应，例如 Name=Set，则 SetParameters 必填。当前仅支持填写 Set。</p><li>Set：自定义变量设置；</li>
     * @param SetParameters $SetParameters <p>自定义变量设置参数。此参数中若存在多条运算，按照数组的顺序依次执行。当 Name 取值为 Set 时，该参数必填。</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SetParameters",$param) and $param["SetParameters"] !== null) {
            $this->SetParameters = new SetParameters();
            $this->SetParameters->deserialize($param["SetParameters"]);
        }
    }
}
