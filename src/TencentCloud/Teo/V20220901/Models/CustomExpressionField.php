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
 * 实时日志投递任务中的自定义日志字段，字段支持自定义命名和配置取值表达式，使用详情见 [自定义日志字段表达式]()。
 *
 * @method string getName() 获取<p>自定义日志字段名称。可输入1-100个字符，允许的字符为字母、数字、_，仅能以字母开头，该名称不能重复。</p>
 * @method void setName(string $Name) 设置<p>自定义日志字段名称。可输入1-100个字符，允许的字符为字母、数字、_，仅能以字母开头，该名称不能重复。</p>
 * @method string getExpression() 获取<p>自定义日志字段的取值表达式，表达式长度上限 4KB，语法说明详见 <a href=""> 自定义日志字段表达式</a>。</p>
 * @method void setExpression(string $Expression) 设置<p>自定义日志字段的取值表达式，表达式长度上限 4KB，语法说明详见 <a href=""> 自定义日志字段表达式</a>。</p>
 * @method boolean getEnabled() 获取<p>是否投递该字段，不填表示不投递此字段。</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>是否投递该字段，不填表示不投递此字段。</p>
 */
class CustomExpressionField extends AbstractModel
{
    /**
     * @var string <p>自定义日志字段名称。可输入1-100个字符，允许的字符为字母、数字、_，仅能以字母开头，该名称不能重复。</p>
     */
    public $Name;

    /**
     * @var string <p>自定义日志字段的取值表达式，表达式长度上限 4KB，语法说明详见 <a href=""> 自定义日志字段表达式</a>。</p>
     */
    public $Expression;

    /**
     * @var boolean <p>是否投递该字段，不填表示不投递此字段。</p>
     */
    public $Enabled;

    /**
     * @param string $Name <p>自定义日志字段名称。可输入1-100个字符，允许的字符为字母、数字、_，仅能以字母开头，该名称不能重复。</p>
     * @param string $Expression <p>自定义日志字段的取值表达式，表达式长度上限 4KB，语法说明详见 <a href=""> 自定义日志字段表达式</a>。</p>
     * @param boolean $Enabled <p>是否投递该字段，不填表示不投递此字段。</p>
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

        if (array_key_exists("Expression",$param) and $param["Expression"] !== null) {
            $this->Expression = $param["Expression"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}
