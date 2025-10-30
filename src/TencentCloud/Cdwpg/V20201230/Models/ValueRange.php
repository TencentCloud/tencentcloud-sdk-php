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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ValueRange值
 *
 * @method string getType() 获取参数类型，可以为 enum，string，section; 其中enum表示枚举，类似： utf8,latin1,gbk; string表示返回的参数值是字符串; section表示返回的参数值是一个取值范围，类似：[4-8]
 * @method void setType(string $Type) 设置参数类型，可以为 enum，string，section; 其中enum表示枚举，类似： utf8,latin1,gbk; string表示返回的参数值是字符串; section表示返回的参数值是一个取值范围，类似：[4-8]
 * @method Range getRange() 获取type 取section的时候，返回的参数值
 * @method void setRange(Range $Range) 设置type 取section的时候，返回的参数值
 * @method array getEnum() 获取type 取enum的时候，返回参数值
 * @method void setEnum(array $Enum) 设置type 取enum的时候，返回参数值
 * @method string getString() 获取type 取string的时候，返回的参数值
 * @method void setString(string $String) 设置type 取string的时候，返回的参数值
 */
class ValueRange extends AbstractModel
{
    /**
     * @var string 参数类型，可以为 enum，string，section; 其中enum表示枚举，类似： utf8,latin1,gbk; string表示返回的参数值是字符串; section表示返回的参数值是一个取值范围，类似：[4-8]
     */
    public $Type;

    /**
     * @var Range type 取section的时候，返回的参数值
     */
    public $Range;

    /**
     * @var array type 取enum的时候，返回参数值
     */
    public $Enum;

    /**
     * @var string type 取string的时候，返回的参数值
     */
    public $String;

    /**
     * @param string $Type 参数类型，可以为 enum，string，section; 其中enum表示枚举，类似： utf8,latin1,gbk; string表示返回的参数值是字符串; section表示返回的参数值是一个取值范围，类似：[4-8]
     * @param Range $Range type 取section的时候，返回的参数值
     * @param array $Enum type 取enum的时候，返回参数值
     * @param string $String type 取string的时候，返回的参数值
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

        if (array_key_exists("Range",$param) and $param["Range"] !== null) {
            $this->Range = new Range();
            $this->Range->deserialize($param["Range"]);
        }

        if (array_key_exists("Enum",$param) and $param["Enum"] !== null) {
            $this->Enum = $param["Enum"];
        }

        if (array_key_exists("String",$param) and $param["String"] !== null) {
            $this->String = $param["String"];
        }
    }
}
