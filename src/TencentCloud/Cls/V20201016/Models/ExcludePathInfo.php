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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 黑名单path信息
 *
 * @method string getType() 获取类型，选填File或Path
 * @method void setType(string $Type) 设置类型，选填File或Path
 * @method string getValue() 获取Type对应的具体内容
 * @method void setValue(string $Value) 设置Type对应的具体内容
 */
class ExcludePathInfo extends AbstractModel
{
    /**
     * @var string 类型，选填File或Path
     */
    public $Type;

    /**
     * @var string Type对应的具体内容
     */
    public $Value;

    /**
     * @param string $Type 类型，选填File或Path
     * @param string $Value Type对应的具体内容
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
    }
}
