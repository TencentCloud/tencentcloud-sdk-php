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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 命中匹配方式与值
 *
 * @method string getType() 获取<p>类型</p><p>枚举值：</p><ul><li>EXAT： 精确匹配</li></ul>
 * @method void setType(string $Type) 设置<p>类型</p><p>枚举值：</p><ul><li>EXAT： 精确匹配</li></ul>
 * @method string getValue() 获取<p>值</p>
 * @method void setValue(string $Value) 设置<p>值</p>
 * @method string getValueType() 获取<p>值类型</p><p>枚举值：</p><ul><li>TEXT： 文本</li></ul>
 * @method void setValueType(string $ValueType) 设置<p>值类型</p><p>枚举值：</p><ul><li>TEXT： 文本</li></ul>
 */
class BetaLabelMatchString extends AbstractModel
{
    /**
     * @var string <p>类型</p><p>枚举值：</p><ul><li>EXAT： 精确匹配</li></ul>
     */
    public $Type;

    /**
     * @var string <p>值</p>
     */
    public $Value;

    /**
     * @var string <p>值类型</p><p>枚举值：</p><ul><li>TEXT： 文本</li></ul>
     */
    public $ValueType;

    /**
     * @param string $Type <p>类型</p><p>枚举值：</p><ul><li>EXAT： 精确匹配</li></ul>
     * @param string $Value <p>值</p>
     * @param string $ValueType <p>值类型</p><p>枚举值：</p><ul><li>TEXT： 文本</li></ul>
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

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("ValueType",$param) and $param["ValueType"] !== null) {
            $this->ValueType = $param["ValueType"];
        }
    }
}
